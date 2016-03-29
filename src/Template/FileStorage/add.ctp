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
<div class="fileStorage form large-9 medium-8 columns content">
    <?= $this->Form->create($fileStorage , ['type' => 'file','enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add File Storage') ?></legend>
        <?php
        echo $this->Form->input('filename');
        echo $this->Form->file('pdf_files'); // Pay attention here!
        echo $this->Form->submit(__('Submit'));
       
        ?>
    </fieldset>
        <?php  echo $this->Form->end();?>
</div>
