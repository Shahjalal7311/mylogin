<div class="user form large-9 medium-8 columns content">
    <?= $this->Form->create($batch) ?>
    <fieldset>
        <legend><?= __('Add Batch') ?></legend>
        <?php
             echo $this->Form->input('bname');
        ?>
        <?php
            echo $this->Form->label('subject', 'Subject Name');
            echo $this->Form->select('subject_id', $subject2, ['escape' => false]);
        ?>
        <?php
             echo $this->Form->input('year',['id'=>'datepicker']);
            // echo $this->Form->input('year',['type'=>'date','month'=>FALSE,'day'=>FALSE]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script>
    $(function() {
		$( "#datepicker" ).datepicker({
			showOtherMonths: true,
			selectOtherMonths: true
		});
	});
</script>