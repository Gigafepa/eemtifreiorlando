<?php

namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{   

    private $authConfigs = [
        'loginAction' => ['controller' => 'Administradores', 'action' => 'login'],
        'loginRedirect' => ['controller' => 'Administradores', 'action' => 'index'],
		'authError' => 'Login ou senha incorreto(s)',
		'authenticate' => [
			'Form' => [
				'userModel' => 'Administradores',
				'fields' => [
					'username' => 'login',
					'password' => 'senha'
				]
			]
		], 'storage' => 'Session'
	];

    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('admin');
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', $this->authConfigs);
    }
}
