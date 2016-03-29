
<div class="user index large-9 medium-8 columns content">
    <h3><?= __('Batch') ?></h3>
    <p class="actions"><?= $this->Html->link(__(''.$this->Html->tag('i', ' Add ',['class'=>'fa fa-plus'])), ['action' => 'add'], ['escapeTitle' =>false]) ?></p>
   
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('bname','Name') ?></th>
                <th><?= $this->Paginator->sort('Subject Name') ?></th>
                <th><?= $this->Paginator->sort('year') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($batch as $batch): ?>
            <tr>
                <td><?= $this->Number->format($batch->id) ?></td>
                <td><?= h($batch->bname) ?></td>
                <td><?= $batch->subjectname ?></td>
                <td><?= h($batch->year) ?></td>
                <td class="actions">
                   <?= $this->Html->link(''.$this->Html->tag('i',' ',['class'=>'fa fa-eye']), ['action' => 'view', $batch->id],
                            ['escapeTitle' =>false]) ?>
                    <?= $this->Html->link(''.$this->Html->tag('i',' ',['class'=>'fa fa-pencil-square-o']), ['action' => 'edit', $batch->id],
                            ['escapeTitle' =>false]) ?>
                    <?= $this->Html->link(''.$this->Html->tag('i',' ',['class'=>'fa fa-times']), ['action' => 'delete', $batch->id],
                            ['escapeTitle' =>false],['confirm' => __('Are you sure you want to delete # {0}?', $batch->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
