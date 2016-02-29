<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 */
class ProductsController extends AppController
{
    public $paginate = ['limit' => '12'];

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
        $this->set('_serialize', ['products']);
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['CartProducts']
        ]);

        $this->set('product', $product);
        $this->set('_serialize', ['product']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('product'));
        $this->set('_serialize', ['product']);
    }

    /**
    * Search method.
    *
    * @param string $keyword Keyword to search by. Will find LIKE matches in product name or code.
    * @param string $order Whether to sort results in descending or ascending order. Possible values ASC, DESC.
    * @return \Cake\Network\Response|null
    */
    public function search() {
        $keyword = $this->request->query('keyword');
        $order = $this->request->query('order');
        $products = $this->Products->find()->where(['Products.name LIKE' => '%' . $keyword . '%'])
            ->orWhere(['Products.code LIKE' => '%' . $keyword . '%'])
            ->order(['Products.name' => $order]);
               
        $this->set(compact('products', 'keyword', 'order'));
        $this->set('_serialize', ['products']);
    }
}
