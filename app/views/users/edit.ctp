<script type="text/javascript">

	$(function() {

            $('#UserEstadoId').change(function()
                { 
                    var selected = $(this).val();   

                    if(selected != ''){
                        //set loading image
                        $('#cidade').html('<label><img src=' + <?php echo "'" . $html->url('/img/ajax-loader.gif') . "'" ?> + '/></label>');

                        // ajax   
                        $.ajax({   
                            type: "POST",   
                            url: <?php echo "'" . $html->url('/cidades/ajax_cidades') . "'" ?>, 
                            data: "model=User&estado_id="+selected ,   
                            success: function(msg){   

                                $('#cidade').html(msg);
                            }
                        });
                    }
                }
            );		
	});

</script>
<?php
echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' =>'edit'), 'class' => 'formulario'));
echo $this->Form->hidden('id');
echo '<label class="formulario" >Nome completo</label>';
echo $this->Form->input('name', array('label' => false));
echo '<br/>';


echo '<label class="formulario" >CPF*(somente números)</label>';
echo $this->Form->input('cpf', array('label' => false));
echo '<br/>';
echo '<label class="formulario" >Telefone*</label>';
echo $this->Form->input('telefone', array('label' => false));
echo '<br/>';


echo '<label class="formulario" >Endereço</label>';
echo $this->Form->input('endereco', array('label' => false));
echo '<br/>';
echo '<label class="formulario" >Número</label>';
echo $this->Form->input('numero', array('label' => false));
echo '<br/>';
echo '<label class="formulario" >Complemento</label>';
echo $this->Form->input('complemento', array('label' => false));
echo '<br/>';
echo '<label class="formulario" >CEP (somente números)</label>';
echo $this->Form->input('cep', array('label' => false));
echo '<br/>';
echo '<label class="formulario" >Bairro</label>';
echo $this->Form->input('bairro', array('label' => false));
echo '<br/>';




echo '<label class="formulario">Estado</label>';
echo $this->Form->select('estado_id', $select_estados, $this->data['Cidade']['estado_id'],  array('empty' => true));
echo '<br/>';

echo '<div id="cidade" >';
echo '<label class="formulario">Cidade</label>';
echo $this->Form->select('cidade_id', $select_cidades, $this->data['User']['cidade_id'],  array('empty' => true));
echo '</div>';
echo '<br/>';

echo '<button type="submit" class="button2 large2 orange2">Salvar</button></form>';	
?>	


		