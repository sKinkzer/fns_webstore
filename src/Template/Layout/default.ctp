<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap-theme.css') ?>
    <?= $this->Html->css('custom.css') ?>

    <?= $this->Html->script('angular.js') ?>
    <?= $this->Html->script('jquery-1.12.1.min.js') ?>
    <?= $this->Html->script('angular-post-fix.js') ?>
    <?= $this->Html->script('ui-bootstrap-tpls-1.2.1.js') ?>
    <?= $this->Html->script('angular-resource.js') ?>
    <?= $this->Html->script('app/fns-webstore.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body ng-app="fnsWebstore">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">FNS Webstore</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
               <?php echo $this->Html->link(
                    'Products',
                    ['controller' => 'Products', 'action' => 'index', '_full' => true]
                ); ?>
            </li>
             <li>
               <?php echo $this->Html->link(
                    'Add New Product',
                    ['controller' => 'Products', 'action' => 'add', '_full' => true]
                ); ?>
            </li>
          </ul>
          <form method="get" action="search" class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" name="keyword" class="form-control" placeholder="Search">
              <input type="hidden" name="order" value="DESC">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <p class="navbar-text navbar-right">
             <fns-shopping-cart></fns-shopping-cart>   
          </p>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
