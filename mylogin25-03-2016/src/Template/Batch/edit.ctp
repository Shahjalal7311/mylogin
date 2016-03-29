<div class="user form large-9 medium-8 columns content">

    <?= $this->Form->create($batch) ?>
    <fieldset>
        <legend><?= __('Edit Batch') ?></legend>
        <?php
            echo $this->Form->input('bname');
        ?>
        <?php
            echo $this->Form->label('subject', 'Subject Name');
            echo $this->Form->select('subject_id', $subject2, ['escape' => false]);
        ?>
        <?php
            echo $this->Form->input('year');
           // echo $this->Form->select('gender', $User2, ['escape' => false]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
