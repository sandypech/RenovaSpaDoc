<?php
App::uses('AppController', 'Controller');
/**
 * CircustanciasMedicas Controller
 *
 * @property CircustanciasMedica $CircustanciasMedica
 * @property PaginatorComponent $Paginator
 */
class CircustanciasMedicasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CircustanciasMedica->recursive = 0;
		$this->set('circustanciasMedicas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CircustanciasMedica->exists($id)) {
			throw new NotFoundException(__('Invalid circustancias medica'));
		}
		$options = array('conditions' => array('CircustanciasMedica.' . $this->CircustanciasMedica->primaryKey => $id));
		$this->set('circustanciasMedica', $this->CircustanciasMedica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CircustanciasMedica->create();
			if ($this->CircustanciasMedica->save($this->request->data)) {
				$this->Session->setFlash(__('The circustancias medica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The circustancias medica could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CircustanciasMedica->exists($id)) {
			throw new NotFoundException(__('Invalid circustancias medica'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CircustanciasMedica->save($this->request->data)) {
				$this->Session->setFlash(__('The circustancias medica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The circustancias medica could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CircustanciasMedica.' . $this->CircustanciasMedica->primaryKey => $id));
			$this->request->data = $this->CircustanciasMedica->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CircustanciasMedica->id = $id;
		if (!$this->CircustanciasMedica->exists()) {
			throw new NotFoundException(__('Invalid circustancias medica'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CircustanciasMedica->delete()) {
			$this->Session->setFlash(__('The circustancias medica has been deleted.'));
		} else {
			$this->Session->setFlash(__('The circustancias medica could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
