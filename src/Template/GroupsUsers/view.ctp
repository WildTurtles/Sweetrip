<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Groups User'), ['action' => 'edit', $groupsUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Groups User'), ['action' => 'delete', $groupsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupsUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groups Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Groups User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groupsUsers view large-9 medium-8 columns content">
    <h3><?= h($groupsUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($groupsUser->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Usersid') ?></th>
            <td><?= $this->Number->format($groupsUser->usersid) ?></td>
        </tr>
        <tr>
            <th><?= __('Groupsid') ?></th>
            <td><?= $this->Number->format($groupsUser->groupsid) ?></td>
        </tr>
    </table>
</div>
