<!--<div class="user index large-9 medium-8 columns content">
    <h3><?= __('Upload') ?></h3>
    <p class="actions"><?= $this->Html->link(__(''.$this->Html->tag('i', ' Add ',['class'=>'fa fa-plus'])), ['action' => 'add'], ['escapeTitle' =>false]) ?></p>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('Image Upload') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                 <td><?= $this->Number->format($subjects->id) ?></td>
               <td class="actions">
                    <?= $this->Html->link(''.$this->Html->tag('i',' ',['class'=>'fa fa-eye']), ['action' => 'view', $subjects->id],
                            ['escapeTitle' =>false]) ?>
                    <?= $this->Html->link(''.$this->Html->tag('i',' ',['class'=>'fa fa-pencil-square-o']), ['action' => 'edit', $subjects->id],
                            ['escapeTitle' =>false]) ?>
                    <?= $this->Html->link(''.$this->Html->tag('i',' ',['class'=>'fa fa-times']), ['action' => 'delete', $subjects->id],
                            ['escapeTitle' =>false],['confirm' => __('Are you sure you want to delete # {0}?')]) ?>
                </td>
            </tr>
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
</div>-->
