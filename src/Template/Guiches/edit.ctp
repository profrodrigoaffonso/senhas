<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Guich $guich
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $guich->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $guich->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Guiches'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="guiches form large-9 medium-8 columns content">
    <?= $this->Form->create($guich) ?>
    <fieldset>
        <legend><?= __('Edit Guich') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
