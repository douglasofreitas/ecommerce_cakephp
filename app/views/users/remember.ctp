<ul>
<?php 
echo $this->Html->link(
    $this->Html->image('icon/arrow_left.png', array('class' => 'tipHoverBottom', 'title' => 'Voltar')),
    'javascript:javascript:history.go(-1)',
    array('escape' => false)
);
?>
</ul>

Informe seu e-mail para que o sistema envei um e-mail com um link para modificar a senha.
<br/><br/>

<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' =>'remember'), 'class' => 'formulario'));?>
    <?php
        echo '<label class="formulario">E-mail</label>';
        echo $this->Form->input('email', array('label' => false));
        echo '<br/>';
        
         
    ?>
<?php 
echo '<button type="submit" class="button2 large2 orange2">Enviar e-mail</button></form>';
?>

