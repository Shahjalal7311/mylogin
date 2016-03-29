<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * User Controller
 *
 * @property \App\Model\Table\UserTable $User
 */
class BatchController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadModel('Batch');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = ['fields'=>
           ['id','bname','year',
               'subjectname'=> '(select subject_name from subject where subject.id=Batch.subject_id)'
               ],
            'limit' => 25,];
        $batch = $this->paginate($this->Batch);
        $this->set('batch', $batch);
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
        $batch = $this->Batch->get($id);
        $batch = $this->Batch->find('all')
                ->select(['id','bname','year',
                    'subjectname'=> '(select subject_name from subject where subject.id=Batch.subject_id)'
                    ])
                ->where(['id' => $id])->first()
                ;
        $this->set('batch', $batch);

    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {   
        $batch = $this->Batch->newEntity();
        if ($this->request->is('post')) {
            $batch = $this->Batch->patchEntity($batch, $this->request->data);
            if ($this->Batch->save($batch)) {
                $this->Flash->success(__('The Batch has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Batch could not be saved. Please, try again.'));
            }
        }
        $this->set('batch', $batch);
        $this->loadModel('Subject');
        $subject2 = $this->Subject->find('list');
        $this->set('subject2',$subject2);
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
        $batch = $this->Batch->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $batch = $this->Batch->patchEntity($batch, $this->request->data);
            if ($this->Batch->save($batch)) {
                $this->Flash->success(__('The Batch has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Batch could not be saved. Please, try again.'));
            }
        }
         $this->set('batch', $batch);
        $this->loadModel('Subject');
        $subject2 = $this->Subject->find('list');
        $this->set('subject2',$subject2);
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
        $batch = $this->Batch->get($id);
        if ($this->Batch->delete($batch)) {
            $this->Flash->success(__('The Batch has been deleted.'));
        } else {
            $this->Flash->error(__('The Batch could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    
}
