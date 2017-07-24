<script type="text/javascript">

	$(function() {

            $('#PedidoEstadoId').change(function()
                { 
                    var selected = $(this).val();   

                    if(selected != ''){
                        //set loading image
                        $('#cidade').html('<label>' + <?php echo "'" . $this->Html->image('ajax-loader.gif') . "'" ?> + '</label>');

                        // ajax   
                        $.ajax({   
                            type: "POST",   
                            url: <?php echo "'" . $html->url('/cidades/ajax_cidades') . "'" ?>, 
                            data: "model=Pedido&estado_id="+selected ,   
                            success: function(msg){   

                                $('#cidade').html(msg);
                            }
                        });
                    }
                }
            );		
	});

</script>
<?php if($login_group_id == 1): ?>
<br/><span style="color: blue"> Caso não faça entrega, passe para o próximo passo, para informar os dados do cliente.</span><br/>
<?php endif; ?>

<br>
Informe abaixo o endereço para entrega dos produtos.<br/>

<br/>
<div>
<?php
echo $this->Form->create('Pedido', array('url' => array('controller' => 'pedidos', 'action' =>'obter_endereco'), 'class' => 'formulario'));

echo '<table style="width: 100%;"><tr><td colspan="2">';

echo '<label class="formulario" for="PedidoNome">Nome do destinatário</label>';
echo $this->Form->input('nome', array('style' => 'width:382px', 'label' => false, 'value' => $pedido['Pedido']['nome']));
echo '<br/>';

echo '</td></tr><tr><td>';

echo '<label class="formulario" for="PedidoEndereco">Endereço</label>';
echo $this->Form->input('endereco', array('style' => 'width:210px', 'label' => false, 'value' => $pedido['Pedido']['endereco']));
echo '</td><td valign="top">';
echo '<span style="float:left"><strong>Número</strong></span>';
echo $this->Form->input('numero', array('style' => 'width:50px', 'label' => false, 'value' => $pedido['Pedido']['numero']));
echo '<br/>';

echo '</td></tr><tr><td>';

echo '<label class="formulario" for="PedidoComplemento">Complemento</label>';
echo $this->Form->input('complemento', array('style' => 'width:210px', 'label' => false, 'value' => $pedido['Pedido']['complemento']));
echo '</td><td valign="top">';
echo '<span style="float:left"><strong>Bairro</strong></span>';
echo $this->Form->input('bairro', array('style' => 'width:100px', 'label' => false, 'value' => $pedido['Pedido']['bairro']));
echo '<br/>';

echo '</td></tr><tr><td>';

echo '<label class="formulario" for="PedidoEstadoId">Estado</label>';
echo $this->Form->select('estado_id', $select_estados, $estado_id,  array('empty' => true));
echo '<br/>';

//VERIFICA SE PODE CALCULAR O FRETE
if($config_sistema['Configuracao']['calcula_frete']){
    echo '</td><td valign="top">';
    echo '<strong>CEP: '.$pedido['Pedido']['cep'].'</strong> ';
    echo $this->Html->link(
            '(Alterar CEP)',
            '/pedidos/atual'
    );
}else{
    echo '</td><td valign="top">';
    echo '<span style="float:left"><strong>CEP</strong></span>';
    echo $this->Form->input('cep', array('style' => 'width:100px', 'label' => false, 'value' => $pedido['Pedido']['cep']));
}

echo '</td></tr><tr><td colspan="2">';

echo '<div id="cidade" >';
echo '<label class="formulario" for="PedidoCidadeId">Cidade</label>';
echo $this->Form->select('cidade_id', $select_cidades, $pedido['Pedido']['cidade_id'],  array('empty' => true));
echo '</div>';

echo '</td></tr></table>';

echo '<span style="float: right">';
echo '<button type="submit" class="button2 large2 orange2">Avançar</button></form>';
echo '</span>';

?>

<?php 
echo $this->Form->create('Pedido', array('url' => array('controller' => 'pedidos', 'action' =>'atual'), 'class' => 'formulario'));
echo '<button type="submit" class="button2 large2 orange2">Voltar</button></form>';	
?>

</div>


