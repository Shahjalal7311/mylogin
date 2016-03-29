
<div class="user index large-9 medium-8 columns content">
    <h3><?= __('Student') ?></h3>
    <p class="actions"><?= $this->Html->link(__(''.$this->Html->tag('i', ' Add ',['class'=>'fa fa-plus'])), ['action' => 'add'], ['escapeTitle' =>false]) ?></p>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th width="4%"><?= $this->Paginator->sort('id') ?></th>
                <th width="9%"><?= $this->Paginator->sort('Fast Name') ?></th>
                <th width="9%"><?= $this->Paginator->sort('Last Name') ?></th>
                <th width="12%"><?= $this->Paginator->sort('Subject Name') ?></th>
                <th width="10%"><?= $this->Paginator->sort('Batch Name') ?></th>
                <th width="10%"><?= $this->Paginator->sort('Admission Date') ?></th>
                <th width="15%"><?= $this->Paginator->sort('email') ?></th>
                <th width="9%"><?= $this->Paginator->sort('phone') ?></th>
                <th width="9%"><?= $this->Paginator->sort('father_name') ?></th>
                <th width="9%"><?= $this->Paginator->sort('mother_name') ?></th>
                <th width="9%"><?= $this->Paginator->sort('address') ?></th>
                <th class="actions" width="9%"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($student as $students): ?>
            <tr>
                <td><?= $this->Number->format($students->id) ?></td>
                <td><?= h($students->fname) ?></td>
                <td><?= h($students->lname) ?></td>
                <td><?= $students->subjectname ?></td>
                <td><?= $students->batchname ?></td>
                <td><?= $students->admission_date ?></td>
                <td><?= h($students->email) ?></td>
                <td><?= h($students->phone) ?></td>
                <td><?= h($students->father_name) ?></td>
                <td><?= h($students->mother_name) ?></td>
                 <td><?= h($students->address) ?></td><!--if data send by url this used get method or used by id thats used post method -->
                <td class="actions">
                    <?= $this->Html->link(''.$this->Html->tag('i',' ',['class'=>'fa fa-eye']), ['action' => 'view', $students->id],
                            ['escapeTitle' =>false]) ?>
                    <?= $this->Html->link(''.$this->Html->tag('i',' ',['class'=>'fa fa-pencil-square-o']), ['action' => 'edit', $students->id],
                            ['escapeTitle' =>false]) ?>
                    <?= $this->Html->link(''.$this->Html->tag('i',' ',['class'=>'fa fa-times']), ['action' => 'delete', $students->id],
                            ['escapeTitle' =>false],['confirm' => __('Are you sure you want to delete # {0}?', $students->id)]) ?>
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