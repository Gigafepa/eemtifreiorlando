<?php
namespace App\Controller\Professor;

use App\Controller\Professor\AppController;

/**
 * Eletivas Controller
 *
 * @property \App\Model\Table\EletivasTable $Eletivas
 *
 * @method \App\Model\Entity\Eletiva[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EletivasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'order' => ['Eletivas.created' => 'DESC'],
            'contain' => ['Professores']
        ];
        $eletivas = $this->paginate($this->Eletivas);
        $this->set(compact('eletivas'));
    }

    /**
     * View method
     *
     * @param string|null $id Eletiva id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eletiva = $this->Eletivas->get($id, [
            'contain' => ['Professores', 'Inscricoes.Alunos'],
            'order' => ['nome' => 'ASC']
        ]);

        $this->set('eletiva', $eletiva);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eletiva = $this->Eletivas->newEntity();
        if ($this->request->is('post')) {
            $eletiva = $this->Eletivas->patchEntity($eletiva, $this->request->getData());
            if ($this->Eletivas->save($eletiva)) {
                $this->Flash->success(__('A eletiva foi salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A eletiva não pode ser salva. Por favor tente novamente.'));
        }
        $professores = $this->Eletivas->Professores->find('list', ['limit' => 200]);
        $this->set(compact('eletiva', 'professores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Eletiva id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eletiva = $this->Eletivas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eletiva = $this->Eletivas->patchEntity($eletiva, $this->request->getData());
            if ($this->Eletivas->save($eletiva)) {
                $this->Flash->success(__('A eletiva foi salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A eletiva não pode ser salva. Por favor tente novamente.'));
        }
        $professores = $this->Eletivas->Professores->find('list', ['limit' => 200]);
        $this->set(compact('eletiva', 'professores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Eletiva id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eletiva = $this->Eletivas->get($id);
        if ($this->Eletivas->delete($eletiva)) {
            $this->Flash->success(__('A eletiva foi apagada'));
        } else {
            $this->Flash->error(__('A eletiva não pode ser apagada, por favor tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function fechar($id = null)
    {
        $this->request->allowMethod(['post']);
        $eletiva = $this->Eletivas->get($id);
        $eletiva->status = 'Fechado';
        if ($this->Eletivas->save($eletiva)) {
            $this->Flash->success(__('A eletiva foi fechada.'));
        } else {
            $this->Flash->error(__('A eletiva não pode ser fechada, por favor tente novamente.'));
        }
        return $this->redirect($this->referer());
    }
}
