<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Dashborad') ?></li>
        <li><?= $this->Html->link('User', '/User', ['class' => '']) ?></li>
        <li><?= $this->Html->link('Subject', '/Subject', ['class' => '']) ?></li>
        <li><?= $this->Html->link('Batch', '/Batch', ['class' => '']) ?></li>
        <li><?= $this->Html->link('Student', '/Student', ['class' => '']) ?></li>
        <li><?= $this->Html->link('FileStorage', '/FileStorage', ['class' => '']) ?></li>
    </ul>
</nav>
<div class="user form large-9 medium-8 columns content">
    <?= $this->Form->create($batch) ?>
    <fieldset>
        <legend><?= __('Add Batch') ?></legend>
        <?php
        echo $this->Form->input('Batch Name');
        ?>
        <?php
        echo $this->Form->label('subject', 'Subject Name');
        echo $this->Form->select('subject_id', $subject2, ['escape' => false]);
        ?>
        <?php
        echo $this->Form->input('year', ['id' => 'datepicker']);
        //echo $this->Form->input('year',['type'=>'date','month'=>FALSE,'day'=>FALSE]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script>
    $(function () {
        $("#datepicker").datepicker();
    });
</script>