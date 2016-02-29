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
          array(
              'name'    => 'Coffee mug',
              'code' => '12343436',
              'description' => 'Essential for drinking coffee.'
          ),
          array(
              'name'    => '3d Printer Dlx',
              'code' => 'P4df',
              'description' => 'Since 3-d printing is hip, we have another printer as well!.'
          ),
          array(
              'name'    => 'Speakers',
              'code' => 'SPK23',
              'description' => 'Listening to music is comforting.'
          ),
          array(
              'name'    => 'USB wire',
              'code' => 'US3232',
              'description' => 'Helps connecting things.'
          ),
          array(
              'name'    => 'Whiteboard markers',
              'code' => '23124421',
              'description' => 'Whiteboards are really nice. Especially when you can write on them.'
          )
        );

        $products = $this->table('products');
        $products->insert($data)
              ->save();
    }
}