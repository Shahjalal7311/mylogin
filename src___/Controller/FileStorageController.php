<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

/**
 * FileStorage Controller
 *
 * @property \App\Model\Table\FileStorageTable $FileStorage
 */
class FileStorageController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->paginate = ['limit' => 25,];
        $fileStorage = $this->paginate($this->FileStorage);
        $this->set('fileStorages', $fileStorage);
    }

    /**
     * View method
     *
     * @param string|null $id File Storage id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $fileStorage = $this->FileStorage->get($id);
        $this->set('fileStorage', $fileStorage);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $fileStorage = $this->FileStorage->newEntity();
        if ($this->request->is('post')) {
            //  debug($this->request->data);

            $file = $this->request->data['pdf_files'];
            if (empty($file['name'])) {
                unset($this->request->data['pdf_files']);
            }
            //debug($file);
            if (!empty($this->request->data['pdf_files'])) {
                $times = time();
                $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'mp4'); //set allowed extensions
                $images = MD5($times . $file['name']) . '.' . $ext;
                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img' . DS . 'upload' . DS . '' . $images);
                $this->request->data['pdf_files'] = $images;
                $this->request->data['type'] = $file['type'];
                $this->request->data['size'] = $file['size'];
            }


            $fileStorage = $this->FileStorage->patchEntity($fileStorage, $this->request->data);

            if ($this->FileStorage->save($fileStorage)) {
                $this->Flash->success(__('The file storage has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The file storage could not be saved. Please, try again.'));
            }
        }
        //return fileStorage;
        // $fileStorage = $this->FileStorage->FileStorage->find('list', ['limit' => 200]);
        $this->set('fileStorage', $fileStorage);
    }

    /**
     * Edit method
     *
     * @param string|null $id File Storage id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $fileStorage = $this->FileStorage->get($id);



        if ($this->request->is(['patch', 'post', 'put'])) {


            $file = $this->request->data['pdf_files'];
            if (empty($file['name'])) {
                unset($this->request->data['pdf_files']);
            }
            //debug($file);
            if (!empty($this->request->data['pdf_files'])) {
                $times = time();
                $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'mp4'); //set allowed extensions
                $images = MD5($times . $file['name']) . '.' . $ext;
                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img' . DS . 'upload' . DS . '' . $images);
                $this->request->data['pdf_files'] = $images;
                $this->request->data['type'] = $file['type'];
                $this->request->data['size'] = $file['size'];
            }

            $fileStorage = $this->FileStorage->patchEntity($fileStorage, $this->request->data);

            // debug($fileStorage);exit;

            if ($this->FileStorage->save($fileStorage)) {
                $this->Flash->success(__('The file storage has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The file storage could not be saved. Please, try again.'));
            }
        }
        $this->set('fileStorage', $fileStorage);
    }

    /**
     * Delete method
     *
     * @param string|null $id File Storage id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $fileStorage = $this->FileStorage->get($id);
        if ($this->FileStorage->delete($fileStorage)) {
            $this->Flash->success(__('The file storage has been deleted.'));
        } else {
            $this->Flash->error(__('The file storage could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function downloadFile($id) {
        $file = $this->FileStorage->getFile($id);
        // a view.
        $this->response->file(
                $file['files/content'], ['download' => true]
        );
        return $this->response;
    }

}
