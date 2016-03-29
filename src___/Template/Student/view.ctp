
<div class="user view large-9 medium-8 columns content">

    <table class="vertical-table">
        <tr>
            <th><?= __('id') ?></th>
            <td><?= $this->Number->format($student->id) ?></td>
        </tr>

        <tr>
            <th><?= __('Fast Name') ?></th>
            <td><?= h($student->fname) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Name') ?></th>
            <td><?= h($student->lname) ?></td>
        </tr>
        <tr>
            <th><?= __('Subject Name') ?></th>
            <td><?= $student->subjectname ?></td>
        </tr>
        <tr>
            <th><?= __('Subject Name') ?></th>
            <td><?= $student->batchname ?></td>
        </tr>
        <tr>
            <th><?= __('Admission') ?></th>
            <td><?= $student->admission_date ?></td>
        </tr>
        <tr>
            <th><?= __('E-mail') ?></th>
            <td><?= h($student->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($student->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Father Name') ?></th>
            <td><?= h($student->father_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Mother Name') ?></th>
            <td><?= h($student->mother_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($student->address) ?></td>
        </tr>
    </table>
</div>
