<script type="text/javascript">

	$(function() {

		$("#SubcategoriaEditForm").validate({
			rules: {
				'data[Subcategoria][nome]': { 
					required: true,
					minlength: 3
				}
				
			},
			messages: {
				'data[Subcategoria][nome]': { 
					required: "Campo obrigatório!",
					minlength: "Nome muito pequeno!"
				}
			}
		});
		
	});

</script>		

<?php echo $this->Form->create('Subcategoria', array('url' => array('controller' => 'subcategorias', 'action' =>'edit'), 'class' => 'formulario'));
	echo $this->Form->input('id');
	
	echo '<label class="formulario">Categoria *</label>';
	echo $this->Form->select('categoria_id', $select_categorias, $this->data['Subcategoria']['categoria_id'],  array('empty' => false));
	echo '<br/>';
	
	echo '<label class="formulario">Nome *</label>';
	echo $this->Form->input('nome', array('style' => 'width:300px', 'label' => false));
	echo '<br/>';	
 
	echo '<br/>';
	echo '<button type="submit" class="button2 large2 orange2">Salvar</button></form>';	
?>