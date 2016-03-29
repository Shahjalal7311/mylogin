
<div class="user index large-9 medium-8 columns content">
    <h3><?= __('User') ?></h3>
    <p class="actions"><?= $this->Html->link(__(''.$this->Html->tag('i', ' Add ',['class'=>'fa fa-plus'])), ['action' => 'add'], ['escapeTitle' =>false]) ?></p>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th width="5%"><?= $this->Paginator->sort('id') ?></th>
                <th width="10%"><?= $this->Paginator->sort('name') ?></th>
                <th width="15%"><?= $this->Paginator->sort('email') ?></th>
                <th width="15%"><?= $this->Paginator->sort('Password') ?></th>
                <th width="20%"><?= $this->Paginator->sort('parmanent_address') ?></th>
                <th width="20%"><?= $this->Paginator->sort('present_address') ?></th>
                <th width="15%"><?= $this->Paginator->sort('Photo') ?></th>
                <th class="actions" width="10%"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $user): ?>
            <tr>
                <td width="5%"><?= $this->Number->format($user->id) ?></td>
                <td width="10%"><?= h($user->name) ?></td>
                <td width="15%"><?= h($user->email) ?></td>
                <td width="15%"><?= h($user->password) ?></td>
                <td width="20%"><?= h($user->parmanent_address) ?></td>
                <td width="20%"><?= h($user->present_address) ?></td>
                <td width="15%"><?= h($user->img_upload) ?></td>
                <td class="actions" width="10%">
                   <?= $this->Html->link(''.$this->Html->tag('i',' ',['class'=>'fa fa-eye']), ['action' => 'view', $user->id],
                            ['escapeTitle' =>false]) ?>
                    <?= $this->Html->link(''.$this->Html->tag('i',' ',['class'=>'fa fa-pencil-square-o']), ['action' => 'edit', $user->id],
                            ['escapeTitle' =>false]) ?>
                    <?= $this->Html->link(''.$this->Html->tag('i',' ',['class'=>'fa fa-times']), ['action' => 'delete', $user->id],
                            ['escapeTitle' =>false],['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
