<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * User Controller
 *
 * @property \App\Model\Table\UserTable $User
 */
class StudentController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadModel('Student');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = ['fields'=>
           ['id','fname','lname','email','admission_date','phone','father_name','mother_name','address',
               'subjectname'=> '(select subject_name from subject where subject.id=Student.subject_id)',
               'batchname'=> '(select bname from batch where batch.id=Student.batch_id)',
               'byear'=> '(select student_session from subject where subject.id=Student.subject_id)'
               ],
            'limit' => 25,];
        
        $student = $this->paginate($this->Student);
        $this->set('student', $student);
        
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
        $student = $this->Student->find('all')
                ->select(['id','fname','lname','email','admission_date','phone','father_name','mother_name','address',
                    'subjectname'=> '(select subject_name from subject where subject.id=Student.subject_id)',
                    'batchname'=> '(select bname from batch where batch.id=Student.batch_id)'
                    ])
                ->where(['id' => $id])->first();
        $this->set('student', $student);

    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($id=null)
    {    
        $student = $this->Student->newEntity();
        if ($this->request->is('post')) {
            $student = $this->Student->patchEntity($student, $this->request->data);
            if ($this->Student->save($student)) {
                $this->Flash->success(__('The Student has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Student could not be saved. Please, try again.'));
            }
        }
        $this->set('student', $student);
        $this->loadModel('Subject');
        $subject2 = $this->Subject->find('list');
        $this->set('subject2',$subject2);
       
        $this->loadModel('Batch');
        $batch2 = $this->Batch->find('list');
        $this->set('batch2',$batch2);
        
       $byear = $this->Subject->find('list');
       $this->set('byear',$byear);
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
        $student = $this->Student->get($id,[
            'contain' => ['Batch','Subject']

        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $student = $this->Student->patchEntity($student, $this->request->data);
            if ($this->Student->save($student)) {
                $this->Flash->success(__('The Student has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Student could not be saved. Please, try again.'));
            }
        }
        
        $this->set('student', $student);
        $this->loadModel('Subject');
        $subject2 = $this->Subject->find('list');
        $this->set('subject2',$subject2);
    
        $this->loadModel('Batch');
        $batch2 = $this->Batch->find('list');
        $this->set('batch2',$batch2);
        
//        $year2 = $this->Batch->find('list');
//        $this->set('year2',$year2);
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
        $student = $this->Student->get($id);
        if ($this->Student->delete($student)) {
            $this->Flash->success(__('The Student has been deleted.'));
        } else {
            $this->Flash->error(__('The Student could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
