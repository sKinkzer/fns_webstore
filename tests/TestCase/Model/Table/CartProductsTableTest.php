<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CartProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CartProductsTable Test Case
 */
class CartProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CartProductsTable
     */
    public $CartProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cart_products',
        'app.products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CartProducts') ? [] : ['className' => 'App\Model\Table\CartProductsTable'];
        $this->CartProducts = TableRegistry::get('CartProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CartProducts);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
