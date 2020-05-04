<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Guiches Controller
 *
 * @property \App\Model\Table\GuichesTable $Guiches
 *
 * @method \App\Model\Entity\Guich[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GuichesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $guiches = $this->paginate($this->Guiches);

        $this->set(compact('guiches'));
    }

    /**
     * View method
     *
     * @param string|null $id Guich id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $guich = $this->Guiches->get($id, [
            'contain' => [],
        ]);

        $this->set('guich', $guich);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $guich = $this->Guiches->newEntity();
        if ($this->request->is('post')) {
            $guich = $this->Guiches->patchEntity($guich, $this->request->getData());
            if ($this->Guiches->save($guich)) {
                $this->Flash->success(__('The guich has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The guich could not be saved. Please, try again.'));
        }
        $this->set(compact('guich'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Guich id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $guich = $this->Guiches->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $guich = $this->Guiches->patchEntity($guich, $this->request->getData());
            if ($this->Guiches->save($guich)) {
                $this->Flash->success(__('The guich has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The guich could not be saved. Please, try again.'));
        }
        $this->set(compact('guich'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Guich id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $guich = $this->Guiches->get($id);
        if ($this->Guiches->delete($guich)) {
            $this->Flash->success(__('The guich has been deleted.'));
        } else {
            $this->Flash->error(__('The guich could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
