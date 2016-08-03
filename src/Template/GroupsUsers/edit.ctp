<nav class="large-3 medium-4 columns" id="actions-sidebar">
 <ul class="side-nav">
  <li class="heading"><?= __('Actions') ?></li>
  <li><?=
      $this->Form->postLink(
              __('Delete'), ['action' => 'delete', $groupsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupsUser->id)]
      )
      ?></li>
  <li><?= $this->Html->link(__('List Groups Users'), ['action' => 'index']) ?></li>
 </ul>
</nav>
<div class="groupsUsers form large-9 medium-8 columns content">
 <?= $this->Form->create($groupsUser) ?>
 <fieldset>
  <legend><?= __('Edit Groups User') ?></legend>
  <?php
  echo $this->Form->input('user_id');
  echo $this->Form->input('group_id');
  ?>
 </fieldset>
 <?= $this->Form->button(__('Submit')) ?>
 <?= $this->Form->end() ?>
</div>
