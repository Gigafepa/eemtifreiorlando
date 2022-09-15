<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Inscricoes Controller
 *
 * @property \App\Model\Table\InscricoesTable $Inscricoes
 *
 * @method \App\Model\Entity\Inscricao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InscricoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Alunos', 'Eletivas']
        ];
        $inscricoes = $this->paginate($this->Inscricoes);
        $this->set(compact('inscricoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Inscricao id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inscricao = $this->Inscricoes->get($id, [
            'contain' => ['Alunos', 'Eletivas']
        ]);

        $this->set('inscricao', $inscricao);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inscricao = $this->Inscricoes->newEntity();
        if ($this->request->is('post')) {
            $inscricao = $this->Inscricoes->patchEntity($inscricao, $this->request->getData());
            if ($this->Inscricoes->save($inscricao)) {
                $this->Flash->success(__('A inscrição foi salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A inscrição não pode ser salva. Por favor, tente novamente.'));
        }
        $alunos = $this->Inscricoes->Alunos->find('list', ['limit' => 200]);
        $eletivas = $this->Inscricoes->Eletivas->find('list', ['limit' => 200]);
        $this->set(compact('inscricao', 'alunos', 'eletivas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Inscricao id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inscricao = $this->Inscricoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inscricao = $this->Inscricoes->patchEntity($inscricao, $this->request->getData());
            if ($this->Inscricoes->save($inscricao)) {
                $this->Flash->success(__('A inscrição foi salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A inscrição não pode ser salva. Por favor, tente novamente.'));
        }
        $alunos = $this->Inscricoes->Alunos->find('list', ['limit' => 200]);
        $eletivas = $this->Inscricoes->Eletivas->find('list', ['limit' => 200]);
        $this->set(compact('inscricao', 'alunos', 'eletivas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Inscricao id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inscricao = $this->Inscricoes->get($id);
        if ($this->Inscricoes->delete($inscricao)) {
            $this->Flash->success(__('A inscrição foi removida.'));
        } else {
            $this->Flash->error(__('A inscrição não pode ser removida. Por favor, tente novamente.'));
        }
        return $this->redirect($this->referer());
    }
}
