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
<div class="fileStorage index large-9 medium-8 columns content">
    <h3><?= __('New File Storage') ?></h3>
    <p class="actions"><?= $this->Html->link(__('' . $this->Html->tag('i', ' Add ', ['class' => 'fa fa-plus'])), ['action' => 'add'], ['escapeTitle' => false]) ?></p>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th> <input type="checkbox" class="checkbox" value="1" id="select_all"/> #</th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('File Name') ?></th>
                <th><?= $this->Paginator->sort('size') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th><?= $this->Paginator->sort('Download') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fileStorages as $fileStorage): ?>
                <tr>
                    <td><input type="checkbox" class="checkbox" value="<?= $fileStorage->id ?>"/></td>
                    <td><?= h($fileStorage->id) ?></td>
                    <td><?= h($fileStorage->filename) ?></td>
        <a href="../Layout/default.ctp"></a>
                    <td><?= $this->Number->format($fileStorage->size) ?></td>
                    <td><?= $fileStorage->type ?></td>
                    <td> <?php echo $this->Html->link('Download File', ['controller' => 'FileStorage', 'action' => 'download_file', $fileStorage->id]); ?>
                    <td class="actions">
                        <?= $this->Html->link('' . $this->Html->tag('i', ' ', ['class' => 'fa fa-eye']), ['action' => 'view', $fileStorage->id], ['escapeTitle' => false])
                        ?>
                        <?= $this->Html->link('' . $this->Html->tag('i', ' ', ['class' => 'fa fa-pencil-square-o']), ['action' => 'edit', $fileStorage->id], ['escapeTitle' => false])
                        ?>
                        <?= $this->Html->link('' . $this->Html->tag('i', ' ', ['class' => 'fa fa-times']), ['action' => 'delete', $fileStorage->id], ['escapeTitle' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $fileStorage->id)])
                        ?>
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
<style>
    input[type="checkbox"]{
    margin: 0;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#select_all').on('click', function () {
            if (this.checked) {
                $('.checkbox').each(function () {
                    this.checked = true;
                });
            } else {
                $('.checkbox').each(function () {
                    this.checked = false;
                });
            }
        });

        $('.checkbox').on('click', function () {
            if ($('.checkbox:checked').length == $('.checkbox').length) {
                $('#select_all').prop('checked', true);
            } else {
                $('#select_all').prop('checked', false);
            }
        });
    });
</script>