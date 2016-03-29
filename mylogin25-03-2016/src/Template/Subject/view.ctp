
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
