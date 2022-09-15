<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\ORM\TableRegistry;

/**
 * Administradores Controller
 *
 * @property \App\Model\Table\AdministradoresTable $Administradores
 *
 * @method \App\Model\Entity\Administrador[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdministradoresController extends AppController
{

    public function login() {
        $this->viewBuilder()->layout('empty');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Usuário e/ou senha incorretos'));
        }
    }

    function logout() {
        $this->Flash->success('Você está deslogado agora!');
        $this->redirect($this->Auth->logout());
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $administradores = $this->paginate($this->Administradores);
        $this->set(compact('administradores'));
    }

    /**
     * View method
     *
     * @param string|null $id Administrador id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $administrador = $this->Administradores->get($id, [
            'contain' => []
        ]);

        $this->set('administrador', $administrador);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $administrador = $this->Administradores->newEntity();
        if ($this->request->is('post')) {
            $administrador = $this->Administradores->patchEntity($administrador, $this->request->getData());
            if ($this->Administradores->save($administrador)) {
                $this->Flash->success(__('O administrador foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O administrador não foi salvo. Por favor tente outra vez'));
        }
        $this->set(compact('administrador'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Administrador id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $administrador = $this->Administradores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administrador = $this->Administradores->patchEntity($administrador, $this->request->getData());
            if ($this->Administradores->save($administrador)) {
                $this->Flash->success(__('O administrador foi salvo!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O administrador não foi salvo. Por favor tente outra vez'));
        }
        $this->set(compact('administrador'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Administrador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $administrador = $this->Administradores->get($id);
        if ($this->Administradores->delete($administrador)) {
            $this->Flash->success(__('O administrador foi apagado.'));
        } else {
            $this->Flash->error(__('O administrador não pode ser apagado. Por favor, tente outra vez.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
