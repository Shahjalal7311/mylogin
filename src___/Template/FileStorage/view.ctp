
<div class="fileStorage view large-9 medium-8 columns content">
    <h3><?= h($fileStorage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($fileStorage->id) ?></td>
        </tr>
        <tr>
            <th><?= __('File name') ?></th>
            <td><?= h($fileStorage->filename) ?></td>
        </tr>
        <tr>
            <th><?= __('size') ?></th>
            <td><?= $this->Number->format($fileStorage->size) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($fileStorage->type) ?></td>
        </tr>
        

    </table>
</div>
