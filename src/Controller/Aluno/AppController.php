<?php

namespace App\Controller\Aluno;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

	private $authConfigs = [
		'loginAction' => ['controller' => 'Alunos', 'action' => 'login'],
		'loginRedirect' => ['controller' => 'Alunos', 'action' => 'index'],
		'authError' => 'Login ou senha incorreto(s)',
		'authenticate' => [
			'Form' => [
				'userModel' => 'Alunos',
				'fields' => [
					'username' => 'matricula',
					'password' => 'senha'
				]
			]
		], 'storage' => 'Session'
	];

    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('aluno');
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', $this->authConfigs);
    }
}
