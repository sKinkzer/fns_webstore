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
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cartProduct = $this->CartProducts->newEntity();
        if ($this->request->is('post')) {
            $cartProduct = $this->CartProducts->patchEntity($cartProduct, $this->request->data);
            if ($this->CartProducts->save($cartProduct)) {
                $this->Flash->success(__('The cart product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cart product could not be saved. Please, try again.'));
            }
        }
        $products = $this->CartProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('cartProduct', 'products'));
        $this->set('_serialize', ['cartProduct']);
    }
}
