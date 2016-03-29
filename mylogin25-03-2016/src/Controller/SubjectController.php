<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * User Controller
 *
 * @property \App\Model\Table\UserTable $User
 */
class SubjectController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadModel('Subject');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = ['limit' => 25,];
        $subject = $this->paginate($this->Subject);
        $this->set('subject', $subject);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subject = $this->Subject->get($id);
        $this->set('subject', $subject);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subject = $this->Subject->newEntity();
        if ($this->request->is('post')) {
            $subject = $this->Subject->patchEntity($subject, $this->request->data);
            if ($this->Subject->save($subject)) {
                $this->Flash->success(__('The Subject has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Subject could not be saved. Please, try again.'));
            }
        }
       $this->set('subject', $subject);

    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subject = $this->Subject->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subject = $this->Subject->patchEntity($subject, $this->request->data);
            if ($this->Subject->save($subject)) {
                $this->Flash->success(__('The Subject has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Subject could not be saved. Please, try again.'));
            }
        }
        $this->set('subject',$subject);
        
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
       // $this->request->allowMethod(['post', 'delete']);
        $subject = $this->Subject->get($id);
        if ($this->Subject->delete($subject)) {
            $this->Flash->success(__('The Subject has been deleted.'));
        } else {
            $this->Flash->error(__('The Subject could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
