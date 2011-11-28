<?php
App::uses('AppController', 'Controller');
/**
 * Inscriptions Controller
 *
 * @property Inscription $Inscription
 */
class InscriptionsController extends AppController {


	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->Inscription->recursive = 0;
		$this->set('inscriptions', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->Inscription->id = $id;
		if (!$this->Inscription->exists()) {
			throw new NotFoundException(__('Invalid inscription'));
		}
		$this->set('inscription', $this->Inscription->read(null, $id));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Inscription->create();
			if ($this->Inscription->save($this->request->data)) {
				$this->Session->setFlash(__('The inscription has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscription could not be saved. Please, try again.'));
			}
		}
	}

	/**
	 * edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		$this->Inscription->id = $id;
		if (!$this->Inscription->exists()) {
			throw new NotFoundException(__('Invalid inscription'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Inscription->save($this->request->data)) {
				$this->Session->setFlash(__('The inscription has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscription could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Inscription->read(null, $id);
		}
	}

	/**
	 * delete method
	 *
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Inscription->id = $id;
		if (!$this->Inscription->exists()) {
			throw new NotFoundException(__('Invalid inscription'));
		}
		if ($this->Inscription->delete()) {
			$this->Session->setFlash(__('Inscription deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Inscription was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	/**
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index() {
		$this->Inscription->recursive = 0;
		$this->set('inscriptions', $this->paginate());
	}

	/**
	 * admin_view method
	 *
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		$this->Inscription->id = $id;
		if (!$this->Inscription->exists()) {
			throw new NotFoundException(__('Invalid inscription'));
		}
		$this->set('inscription', $this->Inscription->read(null, $id));
	}

	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Inscription->create();
			if ($this->Inscription->save($this->request->data)) {
				$this->Session->setFlash(__('The inscription has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscription could not be saved. Please, try again.'));
			}
		}
	}

	/**
	 * admin_edit method
	 *
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		$this->Inscription->id = $id;
		if (!$this->Inscription->exists()) {
			throw new NotFoundException(__('Invalid inscription'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Inscription->save($this->request->data)) {
				$this->Session->setFlash(__('The inscription has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscription could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Inscription->read(null, $id);
		}
	}

	/**
	 * admin_delete method
	 *
	 * @param string $id
	 * @return void
	 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Inscription->id = $id;
		if (!$this->Inscription->exists()) {
			throw new NotFoundException(__('Invalid inscription'));
		}
		if ($this->Inscription->delete()) {
			$this->Session->setFlash(__('Inscription deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Inscription was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	/**
	 * 
	 * Enter description here ...
	 */
	public  function inscrever(){
		
		if ($this->request->is('post') && (!empty($this->request->data))) {
			//pr($this->request->data); die();
			$this->Inscription->create();
			if ($this->Inscription->save($this->request->data)) {
				$this->Session->setFlash(__('The inscription has been saved'));
				$this->redirect(array('controller'=>'pages', 'action' => 'display', 'home'));
			} else {
				$errors = $this->Inscription->invalidFields();
				pr($errors); die();
				$this->Session->setFlash($errors);
				$this->redirect(array('controller'=>'pages', 'action' => 'display', 'home'));
			}
		}
		
	}
}
