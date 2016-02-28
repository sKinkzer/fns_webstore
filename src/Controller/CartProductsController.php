<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CartProducts Controller
 *
 * @property \App\Model\Table\CartProductsTable $CartProducts
 */
class CartProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cartProducts = $this->CartProducts->find('all', ['contain' => 'Products']);

        $this->set(compact('cartProducts'));
        $this->set('_serialize', ['cartProducts']);
    }

    /**
     * Add method. Meant to be used with Ajax + .json
     *
     * @return \Cake\Network\Response|void Renders json.
     */
    public function add()
    {
        $cartProduct = $this->CartProducts->newEntity();
        if ($this->request->is('post')) {
            $cartProduct = $this->CartProducts->patchEntity($cartProduct, $this->request->data);
            if (!$this->CartProducts->save($cartProduct)) {
                $this->Flash->error(__('The cart product could not be saved. Please, try again.'));
            } 
        }

        $cartProduct['product'] = $this->CartProducts->Products->get($cartProduct->product_id);
        $this->set(compact('cartProduct'));
        $this->set('_serialize', ['cartProduct']);
    }
}
