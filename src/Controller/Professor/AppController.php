<?php

namespace App\Controller\Professor;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

	private $authConfigs = [
		'loginAction' => ['controller' => 'Professores', 'action' => 'login'],
		'loginRedirect' => ['controller' => 'Professores', 'action' => 'index'],
		'authError' => 'CPF ou senha incorreto(s)',
		'authenticate' => [
			'Form' => [
				'userModel' => 'professores',
				'fields' => [
					'username' => 'cpf',
					'password' => 'senha'
				]
			]
		], 'storage' => 'Session'
	];
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('professor');
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', $this->authConfigs);
    }
}
