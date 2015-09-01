<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
    }

    public function home()
    {
        $page = "Accueil";
        $title = "Alexis Avenel - Accueil";
        $this->set('page', $page);
        $this->set('title_for_layout', $title);

        try {
            $this->render('/Pages/home');
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
        
    }
}
