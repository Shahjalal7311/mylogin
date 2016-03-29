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
<div class="user view large-9 medium-8 columns content">
    
    <table class="vertical-table">
        <tr>
            <th><?= __('id') ?></th>
            <td><?= $this->Number->format($subject->id) ?></td>
        </tr>
        
        <tr>
            <th><?= __('Subject Name') ?></th>
            <td><?= h($subject->subject_name) ?></td>
        </tr>
<!--        <tr>
            <th><?= __('Student Name') ?></th>
            <td><?= h($subject->student_name) ?></td>
        </tr>-->
        <tr>
            <th><?= __('Marks') ?></th>
            <td><?= h($subject->marks) ?></td>
        </tr>
        <tr>
            <th><?= __('Batch') ?></th>
            <td><?= h($subject->batch) ?></td>
        </tr>
        <tr>
            <th><?= __('Student Session') ?></th>
            <td><?= h($subject->student_session) ?></td>
        </tr>
    </table>
</div>
