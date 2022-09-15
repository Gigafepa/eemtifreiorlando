<?php
namespace App\Controller\Professor;

use App\Controller\Professor\AppController;
use Cake\ORM\TableRegistry;

/**
 * Alunos Controller
 *
 * @property \App\Model\Table\ProfessoresTable $Professores
 *
 * @method \App\Model\Entity\Professor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfessoresController extends AppController
{

    public function login() {
        $this->viewBuilder()->layout('empty');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('CPF e/ou senha incorreto(s)'));
        }
    }

    function logout() {
        $this->Flash->success('Você está deslogado agora!');
        return $this->redirect($this->Auth->logout());
    }
    
    public function index($id = null)
    {
        $id = $this->Auth->user('id');
        $professores = $this->Professores->get($id, [
            'contain' => ['Eletivas']
        ]);

        $this->set('professores', $professores);
    }
}



///*
 //  * Index method
    //  *
    //  * @return \Cake\Http\Response|void
    //  */
    
//     
    
//     public function inscrever($id = null) {
//         $inscricoes = TableRegistry::getTableLocator()->get('Inscricoes');
//         $eletivas = TableRegistry::getTableLocator()->get('Eletivas');
//         $vagasOcupadas = $inscricoes->find()->where(['eletiva_id' => $id])->count();
//         $eletiva = $eletivas->get($id);
//         if($vagasOcupadas >= $eletiva->vagas) {
//             $this->Flash->error(__('Todas as vagas foram preenchidas!'));
//         } else {
//             $sameDay = $inscricoes->find()->contain('Eletivas')->innerJoinWith('Eletivas')->where(['Eletivas.data_eletiva' => $eletiva->data_eletiva, 'Inscricoes.aluno_id' => $this->Auth->user('id')])->count();
//             if($sameDay > 0) {
//                 $this->Flash->error('Você já se inscreveu em uma eletiva referente a esse dia.');
//             } else {
//                 $novaInscricao = $inscricoes->newEntity();
//                 $novaInscricao->aluno_id = $this->Auth->user('id');
//                 $novaInscricao->eletiva_id = $id;
//                 if($inscricoes->save($novaInscricao)) {
//                     $this->Flash->success(__('Inscrição realizada com sucesso!'));
//                 } else {
//                     $this->Flash->error(__('Inscrição não foi efetuada!'));
//                 }
//             }
//         }
//         return $this->redirect(['action' => 'inscritos']);
//     }

//     public function inscritos() {
//         $inscricoesTable = TableRegistry::getTableLocator()->get('Inscricoes');
//         $eletivas = $inscricoesTable->find()->contain(['Eletivas.Professores'])->where([
//             'Inscricoes.aluno_id' => $this->Auth->user('id')
//         ]);
//         $dados = $this->paginate($eletivas, ['order' => ['Eletivas.data_eletiva' => 'DESC']]);
//         $this->set(compact('dados'));
//     }

//     public function cancelar($id = null) {
//         $inscricoesTable = TableRegistry::getTableLocator()->get('Inscricoes');
//         $this->request->allowMethod(['post', 'delete']);
//         $inscricao = $inscricoesTable->get($id);
//         if($inscricoesTable->delete($inscricao)) {
//             $this->Flash->success(__('A inscrição na eletiva foi cancelada!'));
//         } else {
//             $this->Flash->error(__('A inscrição na eletiva não pode ser cancelada!'));
//         }
//         return $this->redirect(['action' => 'inscritos']);
//     }

//     /**
//      * View method
//      *
//      * @param string|null $id Aluno id.
//      * @return \Cake\Http\Response|void
//      * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
//      */
//     public function view($id = null)
//     {
//         $aluno = $this->Alunos->get($this->Auth->user('id'));
//         $this->set('aluno', $aluno);
//     }

//     /**
//      * Add method
//      *
//      * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
//      */
//     public function add()
//     {
//         $aluno = $this->Alunos->newEntity();
//         if ($this->request->is('post')) {
//             $aluno = $this->Alunos->patchEntity($aluno, $this->request->getData());
//             if ($this->Alunos->save($aluno)) {
//                 $this->Flash->success(__('The aluno has been saved.'));

//                 return $this->redirect(['action' => 'index']);
//             }
//             $this->Flash->error(__('The aluno could not be saved. Please, try again.'));
//         }
//         $turmas = $this->Alunos->Turmas->find('list', ['limit' => 200]);
//         $this->set(compact('aluno', 'turmas'));
//     }

//     /**
//      * Edit method
//      *
//      * @param string|null $id Aluno id.
//      * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
//      * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
//      */
//     public function edit($id = null)
//     {
//         $aluno = $this->Alunos->get($id, [
//             'contain' => []
//         ]);
//         if ($this->request->is(['patch', 'post', 'put'])) {
//             $aluno = $this->Alunos->patchEntity($aluno, $this->request->getData());
//             if ($this->Alunos->save($aluno)) {
//                 $this->Flash->success(__('The aluno has been saved.'));
//                 return $this->redirect(['action' => 'index']);
//             }
//             $this->Flash->error(__('The aluno could not be saved. Please, try again.'));
//         }
//         $turmas = $this->Alunos->Turmas->find('list', ['limit' => 200]);
//         $this->set(compact('aluno', 'turmas'));
//     }

//     /**
//      * Delete method
//      *
//      * @param string|null $id Aluno id.
//      * @return \Cake\Http\Response|null Redirects to index.
//      * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
//      */
//     public function delete($id = null)
//     {
//         $this->request->allowMethod(['post', 'delete']);
//         $aluno = $this->Alunos->get($id);
//         if ($this->Alunos->delete($aluno)) {
//             $this->Flash->success(__('The aluno has been deleted.'));
//         } else {
//             $this->Flash->error(__('The aluno could not be deleted. Please, try again.'));
//         }

//         return $this->redirect(['action' => 'index']);
//     }
// }
?>