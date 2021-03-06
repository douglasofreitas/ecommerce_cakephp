<div class="moedas index">
	<h2><?php __('Moedas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th><?php echo $this->Paginator->sort('sigla');?></th>
			<th><?php echo $this->Paginator->sort('cotacao');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($moedas as $moeda):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $moeda['Moeda']['id']; ?>&nbsp;</td>
		<td><?php echo $moeda['Moeda']['nome']; ?>&nbsp;</td>
		<td><?php echo $moeda['Moeda']['sigla']; ?>&nbsp;</td>
		<td><?php echo $moeda['Moeda']['cotacao']; ?>&nbsp;</td>
		<td><?php echo $moeda['Moeda']['created']; ?>&nbsp;</td>
		<td><?php echo $moeda['Moeda']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $moeda['Moeda']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $moeda['Moeda']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $moeda['Moeda']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $moeda['Moeda']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Moeda', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Faturas', true), array('controller' => 'faturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fatura', true), array('controller' => 'faturas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos', true), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto', true), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>