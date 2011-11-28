<div class="inscriptions view">
<h2><?php  echo __('Inscription');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inscription'), array('action' => 'edit', $inscription['Inscription']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inscription'), array('action' => 'delete', $inscription['Inscription']['id']), null, __('Are you sure you want to delete # %s?', $inscription['Inscription']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscriptions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscription'), array('action' => 'add')); ?> </li>
	</ul>
</div>
