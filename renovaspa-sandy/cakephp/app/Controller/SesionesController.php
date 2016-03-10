<?php
App::uses('AppController', 'Controller');
/**
 * Sesiones Controller
 *
 * @property Sesione $Sesione
 * @property PaginatorComponent $Paginator
 */
class SesionesController extends AppController {

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
		$this->Sesione->recursive = 0;
		$this->set('sesiones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sesione->exists($id)) {
			throw new NotFoundException(__('Invalid sesione'));
		}
		$options = array('conditions' => array('Sesione.' . $this->Sesione->primaryKey => $id));
		$this->set('sesione', $this->Sesione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sesione->create();
			if ($this->Sesione->save($this->request->data)) {
				$this->Session->setFlash(__('The sesione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sesione could not be saved. Please, try again.'));
			}
		}
		/*cambio opinion por opinione. terapeutum por terapeuta*/
		$opinions = $this->Sesione->Opinione->find('list');
		$clientes = $this->Sesione->Cliente->find('list');
		$terapeutas = $this->Sesione->Terapeuta->find('list');
		$tratamientos = $this->Sesione->Tratamiento->find('list');
		$this->set(compact('opinions', 'clientes', 'terapeutas', 'tratamientos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Sesione->exists($id)) {
			throw new NotFoundException(__('Invalid sesione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sesione->save($this->request->data)) {
				$this->Session->setFlash(__('The sesione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sesione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sesione.' . $this->Sesione->primaryKey => $id));
			$this->request->data = $this->Sesione->find('first', $options);
		}
		$opinions = $this->Sesione->Opinione->find('list');
		$clientes = $this->Sesione->Cliente->find('list');
		$terapeutas = $this->Sesione->Terapeuta->find('list');
		$tratamientos = $this->Sesione->Tratamiento->find('list');
		$this->set(compact('opinions', 'clientes', 'terapeutas', 'tratamientos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Sesione->id = $id;
		if (!$this->Sesione->exists()) {
			throw new NotFoundException(__('Invalid sesione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sesione->delete()) {
			$this->Session->setFlash(__('The sesione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sesione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
