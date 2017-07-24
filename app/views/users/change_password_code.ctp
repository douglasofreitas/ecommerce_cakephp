<script type="text/javascript">

	$(function() {
		$("#UserChangePasswordForm").validate({
			rules: {
				'data[User][password]': { 
					required: true,
					minlength: 3,
				},
				'data[User][password2]': { 
					required: true,
				},
			},
			messages: {
				'data[User][password]': { 
					required: "Campo obrigatório!",
					minlength: "Senha muito pequeno!",
				},
				'data[User][password2]': { 
					required: "Campo obrigatório!",
				},
			}
		});
		
	});

</script>
<ul>
<?php 
echo $this->Html->link(
    $this->Html->image('icon/arrow_left.png', array('class' => 'tipHoverBottom', 'title' => 'Voltar')),
    'javascript:javascript:history.go(-1)',
    array('escape' => false)
);
?>
</ul>
<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' =>'change_password_code'), 'class' => 'formulario'));?>
	<?php
		echo $this->Form->hidden('id', array('value' => $user['User']['id']));
                echo $this->Form->hidden('email', array('value' => $user['User']['email']));
		echo '<label class="formulario">Nova Senha</label>';
		echo $this->Form->password('password', array('value' => ''));
		echo '<br/>';
		echo '<label class="formulario">Confirmar Nova Senha</label>';
		echo $this->Form->password('password2', array('value' => ''));
		echo '<br/>';
                
                //print_r($user);
	?>
<?php 
echo '<button type="submit" class="button2 large2 orange2">Mudar senha</button></form>';
?>

