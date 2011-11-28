<div class="inscriptions form">
<?php echo $this->Form->create('Inscription');?>
	<fieldset>
		<legend><?php echo __('Edit Inscription'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('email');
		echo $this->Form->input('telefone');
		echo $this->Form->input('endereco');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Inscription.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Inscription.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Inscriptions'), array('action' => 'index'));?></li>
	</ul>
</div>
