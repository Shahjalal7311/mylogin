<div class="user view large-9 medium-8 columns content">
    <h3><?= h($batch->name) ?></h3>
    <table class="vertical-table">
         <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($batch->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Batch Name') ?></th>
            <td><?= h($batch->bname) ?></td>
        </tr>
        <tr>
            <th><?= __('Subject Name') ?></th>
            <td><?= $batch->subjectname ?></td>
        </tr>
        <tr>
            <th><?= __('Year') ?></th>
            <td><?= h($batch->year) ?></td>
        </tr>
    </table>
</div>
