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
