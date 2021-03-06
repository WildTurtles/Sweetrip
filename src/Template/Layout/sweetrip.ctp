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
$cakeDescription = 'Sweetrip app';
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
  <?php //echo $this->Html->meta('icon') ?>

  <?=
  $this->Html->meta(
          'favicon-2.ico', './favicon.ico', ['type' => 'icon']
  );
  ?>

  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />
  <link href="http://fonts.googleapis.com/css?family=Abel%7COpen+Sans:400,600" rel="stylesheet" />

  <?= $this->Html->css('base.css') ?>
  <?php echo $this->Html->script('vendor/foundation.min.js'); ?>
  <?php echo $this->Html->script('vendor/jquery.min.js'); ?>

  <?= $this->Html->css('foundation/foundation.css') ?>
  <?= $this->Html->css('app.css') ?>
  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
 </head>
 <body>



  <?= $this->element('top_bar') ?>



  <?php //echo  $this->Flash->render()  ?>
  <div class="container clearfix">
   <?= $this->fetch('content') ?>
  </div>
  <footer>
  </footer>
 </body>
</html>
