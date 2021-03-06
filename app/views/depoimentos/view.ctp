<ul>
        <?php
        echo $this->Html->link(
            $this->Html->image('icon/page_white_edit.png', array('class' => 'tipHoverBottom', 'title' => 'Editar categoria')),
            '/categorias/edit/'.$categoria['Categoria']['id'],
            array('escape' => false)
        );
        ?>
</ul>


<label class="formulario">Nome</label>
<?php echo $categoria['Categoria']['nome']; ?>
<br/>

<label class="formulario">Cor</label>
<?php echo $categoria['Categoria']['cor']; ?>
<br/>


<?php 
echo $this->Html->link(
		'Cadastrar subcategoria',
		'/subcategorias/add/'.$categoria['Categoria']['id']);  
?>
<br/><br/>

<table class="listagem" width="70%">
	<tr class="listagem_header">
			<td class="header_table" style="width:auto; text-align:center;" >Subcategoria</td>
                        <?php if($config_sistema['Configuracao']['ativa_fotogaleria'] == 1): ?>
                            <td class="header_table" style="width:50%; text-align:center;" >Número de fotos</td>
                        <?php endif; ?>
			<td class="header_table" style="width:50%; text-align:center;" >Número de produtos</td>
			<td class="header_table" style="width:60px; text-align:center;"  class="actions"><?php __('Ações');?></td>
	</tr>
	
	<?php
	$i = 0;
	foreach ($subcategorias as $sub):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="linha_impar"';
		}else{
			$class = ' class="linha_par"';
		}
	?>
	<tr<?php echo $class;?>>
		<td style="text-align:center">
			<?php 
                        echo $this->Html->link(
                            $sub['Subcategoria']['nome'],
                            '/subcategorias/view/'.$sub['Subcategoria']['id']);  
			?>
			
		</td>
		
                <?php if($config_sistema['Configuracao']['ativa_fotogaleria'] == 1): ?>
                    <td style="text-align:center"><?php echo count($sub['Fotogaleria']); ?></td>
                <?php endif; ?>
		<td style="text-align:center"><?php echo count($sub['Produto']); ?></td>
		<td style="text-align:center" class="actions">
			
			<?php echo $this->Html->image('icon/page_white_edit.png', array('alt' => 'Editar', 'url' => '/subcategorias/edit/'.$sub['Subcategoria']['id'], 'class' => 'tipHoverBottom', 'title' => 'Editar subcategoria'));?>
			<?php 
			echo $this->Html->link(
			    $this->Html->image("icon/bin_closed.png", array("alt" => "Remover", 'class' => 'tipHoverBottom', 'title' => 'Remover subcategoria do sistema')),
			    '/subcategorias/delete/'.$sub['Subcategoria']['id'],
			    array('escape' => false),
			    'Tem certeza que deseja remover esta subcategoria?'
			);
			?>
		</td>
	</tr>
	<?php endforeach; ?>
	
</table>