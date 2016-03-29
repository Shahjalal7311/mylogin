

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
