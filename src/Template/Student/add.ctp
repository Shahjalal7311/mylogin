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
    <?= $this->Form->create($student) ?>
    <fieldset>
        <legend><?= __('Student Add') ?></legend>
        <?php
        echo $this->Form->label('fname', 'Fast Name');
        echo $this->Form->input('fname', ['placeholder' => 'Fast Name', 'label' => false]);
        ?>
        <?php
        echo $this->Form->label('lname', 'Last Name');
        echo $this->Form->input('lname', ['placeholder' => 'Last Name', 'label' => false]);
        ?>
        <?php
        echo $this->Form->label('subject', 'Subject Name');
        echo $this->Form->select('subject_id', $subject2, ['escape' => false]);
        ?>
        <?php
        echo $this->Form->label('batch', 'Batch Name');
        echo $this->Form->select('batch_id', $batch2, ['escape' => false]);
        ?>

        <?php
        //echo $this->Form->label('admission_date', 'admission_date');
        //echo $this->Form->select('batch_id', $year2, ['escape' => false]);
        echo $this->Form->input('admission_date', ['id' => 'datepicker']);
        ?>


        <?php
        echo $this->Form->label('email', 'E-mail');
        echo $this->Form->input('email', ['placeholder' => 'E-mail', 'label' => false]);
        ?>
        <?php
        echo $this->Form->label('phone', 'Phone');
        echo $this->Form->input('phone', ['placeholder' => 'Phone', 'label' => false]);
        ?>
        <?php
        echo $this->Form->label('father_name', 'Father Name');
        echo $this->Form->input('father_name', ['placeholder' => 'Father Name', 'label' => false]);
        ?>
        <?php
        echo $this->Form->label('mother_name', 'Mother Name');
        echo $this->Form->input('mother_name', ['placeholder' => 'Mother Name', 'label' => false]);
        ?>

        <?php
        echo $this->Form->label('address', 'Address');
        echo $this->Form->input('address', ['placeholder' => 'address', 'label' => false]);
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