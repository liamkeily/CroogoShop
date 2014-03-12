<?php
App::uses('CroogoShopAppController', 'CroogoShop.Controller');
/**
 * Carts Controller
 *
 * @property Cart $Cart
 * @property PaginatorComponent $Paginator
 */
class CartsController extends CroogoShopAppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Cart->recursive = 0;
		$this->set('carts', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Cart->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid cart'));
		}
		$options = array('conditions' => array('Cart.' . $this->Cart->primaryKey => $id));
		$this->set('cart', $this->Cart->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Cart->create();
			if ($this->Cart->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The cart has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The cart could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$customers = $this->Cart->Customer->find('list');
		$products = $this->Cart->Product->find('list');
		$productVariations = $this->Cart->ProductVariation->find('list');
		$this->set(compact('customers', 'products', 'productVariations'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Cart->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid cart'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cart->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The cart has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The cart could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('Cart.' . $this->Cart->primaryKey => $id));
			$this->request->data = $this->Cart->find('first', $options);
		}
		$customers = $this->Cart->Customer->find('list');
		$products = $this->Cart->Product->find('list');
		$productVariations = $this->Cart->ProductVariation->find('list');
		$this->set(compact('customers', 'products', 'productVariations'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Cart->id = $id;
		if (!$this->Cart->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid cart'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cart->delete()) {
			$this->Session->setFlash(__d('croogo', 'Cart deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Cart was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}}
