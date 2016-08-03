<nav class="large-3 medium-4 columns" id="actions-sidebar">
 <ul class="side-nav">
  <li class="heading"><?= __('Actions') ?></li>
  <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
  <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
  <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
  <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
  <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
  <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
 </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
 <h3><?= h($user->name) ?></h3>
 <table class="vertical-table">
  <tr>
   <th><?= __('Username') ?></th>
   <td><?= h($user->username) ?></td>
  </tr>
  <tr>
   <th><?= __('Email') ?></th>
   <td><?= h($user->email) ?></td>
  </tr>
  <tr>
   <th><?= __('Password') ?></th>
   <td><?= h($user->password) ?></td>
  </tr>
  <tr>
   <th><?= __('Id') ?></th>
   <td><?= $this->Number->format($user->id) ?></td>
  </tr>
 </table>
 <div class="related">
  <h4><?= __('Related Groups') ?></h4>
  <?php if (!empty($user->groups)): ?>
      <table cellpadding="0" cellspacing="0">
       <tr>
        <th><?= __('Id') ?></th>
        <th><?= __('Name') ?></th>
        <th class="actions"><?= __('Actions') ?></th>
       </tr>
       <?php foreach ($user->groups as $groups): ?>
           <tr>
            <td><?= h($groups->id) ?></td>
            <td><?= h($groups->name) ?></td>
            <td class="actions">
             <?= $this->Html->link(__('View'), ['controller' => 'Groups', 'action' => 'view', $groups->id]) ?>
             <?= $this->Html->link(__('Edit'), ['controller' => 'Groups', 'action' => 'edit', $groups->id]) ?>
             <?= $this->Form->postLink(__('Delete'), ['controller' => 'Groups', 'action' => 'delete', $groups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groups->id)]) ?>
            </td>
           </tr>
       <?php endforeach; ?>
      </table>
  <?php endif; ?>
 </div>
</div>
