<?php
    namespace App\Controller\Admin;

    use App\Controller\Admin\AppController;
    use Cake\ORM\TableRegistry;

    class RelatoriosController extends AppController {

        function initialize() {
            $this->viewBuilder()->layout('default');
        }

        function eletivasAluno($id = null) {
            $eletivasTable = TableRegistry::getTableLocator()->get('Eletivas');
            $eletiva = $eletivasTable->find()->contain('Professores')->where(['Eletivas.id' => $id])->firstOrFail();
            $eletivas = $eletivasTable->find()->contain(['Inscricoes' => ['Alunos' => ['Turmas'], 'sort' => ['Alunos.nome' => 'ASC']]])->innerJoinWith('Inscricoes')->where(['Eletivas.id' => $id])->firstOrFail();
            $this->set(compact('eletiva', 'eletivas'));
        }
    }