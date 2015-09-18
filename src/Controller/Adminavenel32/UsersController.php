<?php
namespace App\Controller\Adminavenel32;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Utility\Inflector;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $page = "Utilisateurs";
        $title = "Alexis Avenel - Gestion des utilisateurs";
        $this->set('page', $page);
        $this->set('title_for_layout', $title);

        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }

    public function home()
    {
        $page = "Utilisateurs";
        $title = "Alexis Avenel - Administration";
        $this->set('page', $page);
        $this->set('title_for_layout', $title);

        $last_users = $this->Users
            ->find()
            ->select(['id', 'firstname', 'lastname', 'created'])
            ->where(['role =' => 'user'])
            ->order(['created' => 'DESC'])
            ->limit(5);
        $this->set('last_users', $last_users);

        $this->loadModel('Posts');
        $last_posts = $this->Posts
            ->find()
            ->order(['Posts.created' => 'DESC'])
            ->limit(5);

        $test = $last_posts->contain(['Users', 'PostCategories']);

        $this->set('last_posts', $test);
    }

    public function login()
    {
        if ($this->Auth->User('id') && $this->Auth->User('role') == 'admin') {
            $this->redirect('/adminavenel32/home');
        }
        else
        {
            $page = "Connexion";
            $title = "Alexis Avenel - Connexion à l'administration";
            $this->set('page', $page);
            $this->set('title_for_layout', $title);

            if ($this->request->is('post')) {
                $user = $this->Auth->identify();
                if ($user) {
                    $this->Auth->setUser($user);
                    return $this->redirect($this->Auth->redirectUrl());
                } else {
                    $this->Flash->error(
                        __("Nom d'utilisateur ou mot de passe incorrect"),
                        'default',
                        [],
                        'auth'
                    );
                }
            }
        }
    }

    public function logout()
    {
        $this->redirect($this->Auth->logout());
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $page = "Utilisateurs";
        $title = "Alexis Avenel - Informations de l'utilisateur";
        $this->set('page', $page);
        $this->set('title_for_layout', $title);

        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $page = "Utilisateurs";
        $title = "Alexis Avenel - Ajouter un utilisateur";
        $this->set('page', $page);
        $this->set('title_for_layout', $title);

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $d = $this->request->data;

            $dir = WWW_ROOT."img".DS.date('Y');
            if(!file_exists($dir))
                mkdir($dir, 0777);

            $dir .= DS.date('m');
            if(!file_exists($dir))
                mkdir($dir, 0777);

            $f = explode('.', $d['avatar']);
            $ext = '.'.end($f);
            $filename = Inflector::slug(implode('-', array_slice($f, 0, -1)), '-');
            $d['avatar'] = date('Y').'/'.date('m').'/'.$filename.$ext;

            $user = $this->Users->patchEntity($user, $d);
            if ($this->Users->save($user)) {
                move_uploaded_file($d['file']['tmp_name'], $dir.DS.$filename.$ext);
                $this->Flash->success(__("L'utilisateur a été sauvegardé."));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__("Impossible d'ajouter l'utilisateur."));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $page = "Utilisateurs";
        $title = "Alexis Avenel - Modifier un utilisateur";
        $this->set('page', $page);
        $this->set('title_for_layout', $title);

        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $d = $this->request->data;
            if(!empty($d['file']['tmp_name'])):
                $dir = WWW_ROOT."img".DS.date('Y');
                if(!file_exists($dir))
                    mkdir($dir, 0777);

                $dir .= DS.date('m');
                if(!file_exists($dir))
                    mkdir($dir, 0777);

                $f = explode('.', $d['avatar']);
                $ext = '.'.end($f);
                $filename = Inflector::slug(implode('-', array_slice($f, 0, -1)), '-');
                $d['avatar'] = date('Y').'/'.date('m').'/'.$filename.$ext;
            endif;

            $user = $this->Users->patchEntity($user, $d);
            if ($this->Users->save($user)) {
                move_uploaded_file($d['file']['tmp_name'], $dir.DS.$filename.$ext);
                $this->Flash->success(__('Les modifications ont bien été faites.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__("Impossible de modifier l'utilisateur."));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        //$this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__("L'utilisateur a bien été supprimé"));
        } else {
            $this->Flash->error(__("Impossible de supprimer l'utilisateur."));
        }
        return $this->redirect(['action' => 'index']);
    }
}
