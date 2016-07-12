<?php
$this->layout = 'sweetrip';
?>


<div class="row align-center  medium-5 large-5 panel">
 <div class=" columns ">

  <h1 class="text-center">Sweetrip</h1>

  <p>
   Optimisez vos temps de transports.
  </p>
  <p>
   Découvrez Sweetrip l'application mobile qui vous permet de choisr le moyen de transport le plus adapté à vos besoins.

  </p>

  <?= $this->Form->create($customer) ?>
  <?php
  echo $this->Form->input('email', array('placeholder' => __('courriel@domain.com')));
  echo $this->Form->input('zipcode', array('placeholder' => __('86000')));
  ?>

  <p class="callout text-center"><small>Nous n'utiliserons pas vos informations pour l'envois de courriels indésirables.</small></p>
  <p class="text-center">
      <?= $this->Form->button(__('Tenez moi au courant !'), array('type' => 'submit', 'class' => 'button button-success ')) ?>
  </p>
  <?= $this->Form->end() ?>
  <?= $this->Flash->render() ?>
 </div>



</div>
<div class="row align-center advtg ">


 <!-- <div class="small-12 medium-4 large-4 columns text-center padding-top-3">
 <?php // echo $this->Html->image('coins.svg', ['alt' => __('coins'), 'class ' => 'hide-for-small']); ?>
   super test
  </div>-->


 <div class="medium-4 columns">
  <h4 class="text-center"><?php echo __("Économie"); ?></h4>
  <div class="media-object">
   <div class="media-object-section">
       <?php echo $this->Html->image('coins.svg', ['alt' => __('coins'), 'class ' => 'hide-for-small, size-100']); ?>
   </div>
   <div class="media-object-section">
    <p><?php echo __('Sweetrip vous permet de faire des économie en comparant les prix des différents moyens de transports.'); ?></p>
   </div>
  </div>
 </div>

 <div class="medium-4 columns ">
  <h4 class="text-center"><?php echo __("Facilité"); ?></h4>
  <div class="media-object">
   <div class="media-object-section">
       <?php echo $this->Html->image('check.svg', ['alt' => __('check'), 'class ' => 'hide-for-small, size-100']); ?>
   </div>
   <div class="media-object-section">
    <p><?php echo __('Sweetrip vous propose un moyen simple et efficase de choisir le moyen de transport adapté à vos besoins.'); ?></p>
   </div>
  </div>
 </div>
 <div class="medium-4 columns">
  <h4 class="text-center"><?php echo __("Gain de Temps"); ?></h4>
  <div class="media-object">
   <div class="media-object-section">
       <?php echo $this->Html->image('time.svg', ['alt' => __('coins'), 'class ' => 'hide-for-small, size-100']); ?>
   </div>
   <div class="media-object-section">
    <p><?php echo __('Sweetrip vous propose les moyens de transports disponibles tout de suite (ou presque) en fonction de votre localisation et de votre destination pour vous faire gagner du temps.'); ?></p>
   </div>
  </div>
 </div>





</div>
