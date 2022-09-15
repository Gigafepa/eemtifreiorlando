<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Professores Controller
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
    // /**
    //  * Index method
    //  *
    //  * @return \Cake\Http\Response|void
    //  */
    public function index()
    {
      
        $professores = $this->paginate($this->Professores);

        $this->set(compact('professores'));
    }

    /**
     * View method
     *
     * @param string|null $id Professor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $professor = $this->Professores->get($id, [
            'contain' => ['Eletivas']
        ]);

        $this->set('professor', $professor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $professor = $this->Professores->newEntity();
        if ($this->request->is('post')) {
            $professor = $this->Professores->patchEntity($professor, $this->request->getData());
            if ($this->Professores->save($professor)) {
                $this->Flash->success(__('O professor foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O professor não pode ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('professor'));
    }

    /*
     * Edit method
     *
     * @param string|null $id Professor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $professor = $this->Professores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $professor = $this->Professores->patchEntity($professor, $this->request->getData());
            if ($this->Professores->save($professor)) {
                $this->Flash->success(__('O professor foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O professor não pode ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('professor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Professor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $professor = $this->Professores->get($id);
        if ($this->Professores->delete($professor)) {
            $this->Flash->success(__('O professor foi apagado.'));
        } else {
            $this->Flash->error(__('O professor não pode ser apagado. Por favaor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
