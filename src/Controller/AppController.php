<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public function initialize()
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Paginator');
        $this->loadComponent('Auth', [
                'authorize' => ['Controller'],
                'authenticate' => [
                    'Form' => [
                        'fields' => [
                            'username' => 'login',
                            'password' => 'password'
                        ]
                    ]
                ],
               'loginRedirect' => [
                    'controller' => 'Users',
                    'action' => 'login'
                ],
                'authError' => 'Vous croyez vraiment que vous pouvez faire cela?'
            ]
        );
    }

    public function beforeFilter(Event $event){
        $this->Auth->allow(['view', 'index', 'home']);
        $user = $this->Auth->user();
        $url = explode('/',$this->request->url);
        if($user):
            if($url[0] == 'adminavenel32')
                $this->layout = 'admin';
            else
                $this->layout = 'default';
        else:
            $this->layout = 'default';
        endif;

    }

    public function isAuthorized($user)
    {
        // Admin peuvent accéder à chaque action
        if (isset($user['role']) && $user['role'] == 'admin') {
            return true;
        }

        // Par défaut refuser
        return false;
    }

}
