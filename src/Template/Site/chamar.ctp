<div class="guiches form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Add Guich') ?></legend>
        <?php
            echo $this->Form->control('guiche_id',['type' => 'hidden', 'value' => $guiche_id]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Chamar')) ?>
    <?= $this->Form->end() ?>
    <?= $senhaChamada ?>
</div>