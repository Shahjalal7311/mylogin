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
        <legend><?= __('Edit Student') ?></legend>
        <?php
        echo $this->Form->label('fname', 'Fast Name');
        echo $this->Form->input('fname', ['Fast Name', 'label' => false]);
        ?>
        <?php
        echo $this->Form->label('lname', 'Last Name');
        echo $this->Form->input('lname', ['Last Name', 'label' => false]);
        ?>
        <?php
        $subject_name = $student->subject->student_name;
        echo $this->Form->input('subject_id', ['type' => 'select', 'value' => $subject_name, 'options' => $subject2,
            'label' => 'Subject Name', 'empty' => 'Select Subject Name', 'required' => true,]);
        ?>

        <?php
        $bname = $student->batch->bname;
        echo $this->Form->input('subject_id', ['type' => 'select', 'value' => $bname, 'options' => $batch2,
            'label' => 'Batch Name', 'empty' => 'Select Batch Name', 'required' => true,]);
        ?>
        <?php
//             $this->Form->label('year', 'Year');
//            $year = $student->batch->year->format('Y');
//            echo $this->Form->input('year',  ['value'=>$year,'escape' => false]);
        echo $this->Form->input('admission_date', ['id' => 'datepicker']);
        ?>
        <?php
        echo $this->Form->label('email', 'E-mail');
        echo $this->Form->input('email', ['E-mail', 'label' => false]);
        ?>
        <?php
        echo $this->Form->label('phone', 'Phone');
        echo $this->Form->input('phone', ['Phone', 'label' => false]);
        ?>
        <?php
        echo $this->Form->label('father_name', 'Father Name');
        echo $this->Form->input('father_name', ['Father Name', 'label' => false]);
        ?>
        <?php
        echo $this->Form->label('mother_name', 'Mother Name');
        echo $this->Form->input('mother_name', ['Mother Name', 'label' => false]);
        ?>

        <?php
        echo $this->Form->label('address', 'Address');
        echo $this->Form->input('address', ['address', 'label' => false]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
