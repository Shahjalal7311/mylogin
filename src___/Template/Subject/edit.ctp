
<div class="user form large-9 medium-8 columns content">
    <?= $this->Form->create($subject) ?>
    <fieldset>
        <legend><?= __('Edit Subject') ?></legend>
        <?php
            echo $this->Form->input('subject_name');
            //echo $this->Form->input('student_name');
            echo $this->Form->input('marks');
            echo $this->Form->input('batch');
            echo $this->Form->input('student_session');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
