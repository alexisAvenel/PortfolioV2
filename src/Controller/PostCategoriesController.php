<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PostCategories Controller
 *
 * @property \App\Model\Table\PostCategoriesTable $PostCategories
 */
class PostCategoriesController extends AppController
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
        $this->set('postCategories', $this->paginate($this->PostCategories));
        $this->set('_serialize', ['postCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Post Category id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postCategory = $this->PostCategories->get($id, [
            'contain' => []
        ]);
        $this->set('postCategory', $postCategory);
        $this->set('_serialize', ['postCategory']);
    }
}
