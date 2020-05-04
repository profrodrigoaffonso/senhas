<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Guich $guich
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Guich'), ['action' => 'edit', $guich->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Guich'), ['action' => 'delete', $guich->id], ['confirm' => __('Are you sure you want to delete # {0}?', $guich->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Guiches'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Guich'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="guiches view large-9 medium-8 columns content">
    <h3><?= h($guich->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($guich->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($guich->id) ?></td>
        </tr>
    </table>
</div>
