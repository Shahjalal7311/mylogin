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
<div class="user index large-9 medium-8 columns content">
    <h3><?= __('Subject') ?></h3>
    <p class="actions"><?= $this->Html->link(__(''.$this->Html->tag('i', ' Add ',['class'=>'fa fa-plus'])), ['action' => 'add'], ['escapeTitle' =>false]) ?></p>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('subject_name') ?></th>
<!--                <th><?= $this->Paginator->sort('student_name') ?></th>-->
                <th><?= $this->Paginator->sort('marks') ?></th>
                <th><?= $this->Paginator->sort('batch') ?></th>
                <th><?= $this->Paginator->sort('student_session') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subject as $subjects): ?>
            <tr>
                <td><?= $this->Number->format($subjects->id) ?></td>
                <td><?= h($subjects->subject_name) ?></td>
<!--            <td><?= h($subjects->student_name) ?></td>-->
                <td><?= h($subjects->marks) ?></td>
                <td><?= h($subjects->batch) ?></td>
                <td><?= h($subjects->student_session) ?></td>
                <td class="actions">
                    <?= $this->Html->link(''.$this->Html->tag('i',' ',['class'=>'fa fa-eye']), ['action' => 'view', $subjects->id],
                            ['escapeTitle' =>false]) ?>
                    <?= $this->Html->link(''.$this->Html->tag('i',' ',['class'=>'fa fa-pencil-square-o']), ['action' => 'edit', $subjects->id],
                            ['escapeTitle' =>false]) ?>
                    <?= $this->Html->link(''.$this->Html->tag('i',' ',['class'=>'fa fa-times']), ['action' => 'delete', $subjects->id],
                            ['escapeTitle' =>false],['confirm' => __('Are you sure you want to delete # {0}?')]) ?>
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
