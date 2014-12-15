<?php
App::uses('AppController', 'Controller');
/**
 * Shops Controller
 *
 * @property Shop $Shop
 */
class ShopsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Shop->recursive = 0;
		$this->set('shops', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Shop->exists($id)) {
			throw new NotFoundException(__('Invalid shop'));
		}
		$options = array('conditions' => array('Shop.' . $this->Shop->primaryKey => $id));
		$this->set('shop', $this->Shop->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Shop->create();
			if ($this->Shop->save($this->request->data)) {
                $list_ids = $this->Shop->list_ids;
                echo '<pre>';
                var_dump($list_ids);exit();
				$this->Session->setFlash(__('The shop has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shop could not be saved. Please, try again.'));
			}
		}
		$users = $this->Shop->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Shop->exists($id)) {
			throw new NotFoundException(__('Invalid shop'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Shop->save($this->request->data)) {
				$this->Session->setFlash(__('The shop has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shop could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shop.' . $this->Shop->primaryKey => $id));
			$this->request->data = $this->Shop->find('first', $options);
		}
		$users = $this->Shop->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Shop->id = $id;
		if (!$this->Shop->exists()) {
			throw new NotFoundException(__('Invalid shop'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Shop->delete()) {
			$this->Session->setFlash(__('Shop deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Shop was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
