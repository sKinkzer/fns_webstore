<?php

use Phinx\Seed\AbstractSeed;

class ProductsSeeder extends AbstractSeed
{
    public function run()
    {
        $data = array(
          array(
              'name'    => 'Optical mouse',
              'code' => 'F1234',
              'description' => 'Excellent optical mouse.'
          ),
          array(
              'name'    => 'Keyboard',
              'code' => '242K',
              'description' => 'Keyboard. Unbreakable, excellent quality.'
          ),
          array(
              'name'    => 'Keyboard, worse',
              'code' => '242Kb',
              'description' => 'A bit worse keyboard.'
          ),
          array(
              'name'    => 'Display',
              'code' => '45634',
              'description' => 'Displaying things is useful.'
          ),
          array(
              'name'    => 'Printer',
              'code' => 'PR34235',
              'description' => 'For printing things.'
          ),
          array(
              'name'    => '3d Printer',
              'code' => 'PR3d',
              'description' => 'For printing 3-dimensional things, duh.'
          ),
          array(
              'name'    => 'Pen and paper',
              'code' => 'PP32323',
              'description' => 'Sometimes handy.'
          ),
          array(
              'name'    => 'Coffee',
              'code' => '111234',
              'description' => 'Essential.'
          ),
        );

        $products = $this->table('products');
        $products->insert($data)
              ->save();
    }
}