<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Alunos Controller
 *
 * @property \App\Model\Table\AlunosTable $Alunos
 *
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlunosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Turmas']
        ];
        $alunos = $this->paginate($this->Alunos);

        $this->set(compact('alunos'));
    }

    /**
     * View method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aluno = $this->Alunos->get($id, [
            'contain' => ['Turmas', 'Inscricoes.Eletivas']
        ]);

        $this->set('aluno', $aluno);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aluno = $this->Alunos->newEntity();
        if ($this->request->is('post')) {
            $aluno = $this->Alunos->patchEntity($aluno, $this->request->getData());
            if ($this->Alunos->save($aluno)) {
                $this->Flash->success(__('O aluno foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O aluno não pode ser salvo. Por favor, tente outra vez.'));
        }
        $turmas = $this->Alunos->Turmas->find('list', ['limit' => 200]);
        $this->set(compact('aluno', 'turmas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aluno = $this->Alunos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aluno = $this->Alunos->patchEntity($aluno, $this->request->getData());
            if ($this->Alunos->save($aluno)) {
                $this->Flash->success(__('O aluno foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O aluno não pode ser salvo. Por favor, tente outra vez.'));
        }
        $turmas = $this->Alunos->Turmas->find('list', ['limit' => 200]);
        $this->set(compact('aluno', 'turmas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aluno = $this->Alunos->get($id);
        if ($this->Alunos->delete($aluno)) {
            $this->Flash->success(__('O aluno foi apagado.'));
        } else {
            $this->Flash->error(__('O aluno nçao pode ser apagado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
