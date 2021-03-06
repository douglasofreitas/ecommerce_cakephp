<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" 
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en">
    <head>
    <?php echo $html->charset(); ?>
    
    <title>
            <?php echo $config_sistema['Configuracao']['nome_empresa']; ?> 
            <?php echo $this->getVar('content_title'); ?>
    </title>
        
    <meta name="title" content=" <?php echo $config_sistema['Configuracao']['nome_empresa']; ?> - venda de amostras" />
    <meta name="url" content="www.homesample.com.br" />
    <meta name="description" content=" <?php echo $config_sistema['Configuracao']['descricao']; ?> " />
    <meta name="keywords" content="venda de amostras, sapato, cintos, couro, acessórios, personalizados e novidades" />
    <meta name="charset" content="UTF-8" />
    <meta name="autor" content="Grupo DF" />
    <meta name="company" content="Grupo DF" />
    <meta name="revisit-after" content="5" />
    <link rev="made" href="mailto:contato@grupodf.com" />

    
    
    <?php //descrição para o botão Share 
    if(!empty($produto)):
    ?>
        <meta property="og:title" content="<?php echo $config_sistema['Configuracao']['nome_empresa'].': '.  str_replace('"', '', $produto['Produto']['nome']); ?>" />
        <meta property="og:description" content="<?php echo $config_sistema['Configuracao']['descricao']; ?>. Acesse e confira! <?php echo $config_sistema['Configuracao']['site_url']; ?>" />
        <meta property="og:image" content="<?php echo $config_sistema['Configuracao']['site_url']; ?>/fotos/<?php echo str_replace('_mini.', '_mini_facebook.', $produto['Produto']['img_mini']); ?>" />
    <?php
    else:
    ?>
        <meta property="og:title" content="<?php echo $config_sistema['Configuracao']['nome_empresa'].' '.$content_title; ?>"/>
        <meta property="og:description" content="<?php echo $config_sistema['Configuracao']['descricao']; ?>" />
        <meta property="og:image" content="<?php echo $config_sistema['Configuracao']['site_url'].'/img/tumb_logo.jpg'; ?>"/>
    <?php
    endif;
    ?>
    <meta property="og:type" content="product"/>
    <meta property="og:url" content="<?php echo $selfURL; ?>"/>
    <meta property="og:site_name" content="<?php echo $config_sistema['Configuracao']['nome_empresa']; ?>"/>
    <meta property="fb:admins" content="USER_ID"/>
    
    <?php
    echo $html->meta('icon');
    echo $html->css('style');
    echo $html->css('playground');

    echo '<script type="text/javascript" src="' . $html->url('/js/jquery-1.5.1.min.js') . '"></script>';
    echo '<script type="text/javascript" src="' . $html->url('/js/jquery-validate.js') .'"></script>';
    echo '<script type="text/javascript" src="' . $html->url('/js/tooltips/jquery.poshytip.js') .'"></script>';
    echo '<script type="text/javascript" src="' . $html->url('/js/tooltips/tooltip.js') .'"></script>';
    echo '<script type="text/javascript" src="' . $html->url('/js/jQueryCycle/jquery.cycle.all.min.js') .'"></script>';
    echo '<script type="text/javascript" src="' . $html->url('/js/tiny_mce/tiny_mce.js') .'"></script>';
    echo '<script type="text/javascript" src="' . $html->url('/js/popupMsg.js') .'"></script>';
    echo '<script type="text/javascript" src="' . $html->url('/js/popupMsg-editable.js') .'"></script>';



    ?>
    <!-- Tooltip classes -->
    <link rel="stylesheet" href="<?php echo $html->url('/js/tooltips/tip-twitter/tip-twitter.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo $html->url('/js/tooltips/tip-twitter/tip-alert.css') ?>" type="text/css" />
    
    
    
<script type="text/javascript">
	$(document).ready(function() { 
		
		//Chamando a função tooltip
		tooltip();
		$('li.headlink').hover(
			function() { $('ul', this).css('display', 'block'); },
			function() { $('ul', this).css('display', 'none'); }
		);
		
		setInterval( "slideSwitch('sliderImg', 'img')", 4000 );
	}); 
</script>



<script type="text/javascript">


    function slideSwitch(div, tag) {
        var $active = $('#'+div+' '+tag+'.active');

        if ( $active.length == 0 ) $active = $('#'+div+' '+tag+':last');

        // use this to pull the images in the order they appear in the markup
        var $next =  $active.next().length ? $active.next()
            : $('#'+div+' '+tag+':first');

        // uncomment the 3 lines below to pull the images in random order

        // var $sibs  = $active.siblings();
        // var rndNum = Math.floor(Math.random() * $sibs.length );
        // var $next  = $( $sibs[ rndNum ] );


        $active.addClass('last-active');

        $next.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 1000, function() {
                $active.removeClass('active last-active');
            });
            
    }
    
</script>      

<!--[if IE]>
<style type="text/css">
.ie-shadow {
    display: block;
    position: absolute;
    top: 5px;
    left: 5px;
    width: 102px; /* match target width */
    height: 102px; /* match target height */
    z-index: 1; 
    background: #000;
    filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='15', MakeShadow='true', ShadowOpacity='0.40');
}
</style>
<![endif]-->


<style type="text/css">

/*** slider - imagens **/

#sliderImg  {
    position:relative;
    height:184px;
}

#sliderImg  IMG {
    position:absolute;
    width: 100%;
    height: auto;
    top:0px;
    left:0px;
    z-index:8;
    opacity:0.0;
}

#sliderImg  IMG.active {
    z-index:10;
    opacity:1.0;
}

#sliderImg  IMG.last-active {
    z-index:9;
}
</style>
    
    
</head>

    <body>
        
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <div class="header">
            
            <table width="100%" style="height: 100%;">
                <tr>
                    <td valign="top">
                        <div class="logo">
                            <?php 
                            echo $this->Html->link(
                                $this->Html->image('logo.png', array('style' => 'width:100%')),
                                '/pages/home',
                                array('escape' => false)
                            );
                            ?>     
                            <div style="clear:both"></div>
                        </div>
                        <!-- 
                        <div class="barra_opcao">
                            <div style="margin: 13px">
                                <table width="100%">
                                    <tr>
                                        <td valign="top">
                                            <a class="medium secondary button" href="#" style="width: 88px;margin-top: 9px;">Meus Pedidos</a><br/><br/>
                                            <a class="medium secondary button" href="#" style="width: 88px">Meus Dados</a>
                                        </td>
                                        <td>
                                            <div class="carrinho">
                                                <table width="100%">
                                                    <tr>
                                                        <td valign="top"><img style="margin-top: 6px;margin-left: 7px;" src="img/carrinho.gif" /></td>
                                                        <td valign="center">Carrinho</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"> 
                                                            <p style="margin-top: 6px;font-size: 19px;font-style: italic;">
                                                                0 Itens
                                                            </p> 
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        -->
                        
                        
                        <div class="login">
                            
                                
                                <table width="100%" style="height: 100%">
                                    <tr style="height: 100%;">
                                        <td valign="top">
                                            
                                            <?php if($login_group == null): ?>

                                                <?php 
                                                
                                                echo $this->Form->create('Sistema', array('enctype' => 'multipart/form-data', 'style' => 'margin:0px',  'url' => array('controller' => 'users', 'action' =>'login')));
                                                echo '<button style="float:left" class="button2 large2 orange2" type="submit">Login</button>';
                                                echo '</form>';
                                                
                                                echo $this->Form->create('Sistema', array('enctype' => 'multipart/form-data', 'style' => 'margin:0px',  'url' => array('controller' => 'users', 'action' =>'cadastro_cliente')));
                                                echo '<button style="float:right" class="button2 large2 orange2" type="submit">Cadastro</button>'; 
                                                echo '</form>';
                                                
                                                ?>

                                            <?php else: ?>

                                                <?php
                                                        echo $form->create('User', array('url' => array('controller' => 'users', 'action' =>'logout')) );
                                                ?>
                                                <p class="Txt_Login">
                                                        Sr(a). 
                                                        <?php 
                                                        $login_nome_template = strpos($login_nome, ' ');
                                                        if(empty($login_nome_template))
                                                            $login_nome_template = $login_nome;
                                                        else
                                                            $login_nome_template = substr($login_nome, 0, $login_nome_template);
                                                        echo $this->Html->link(
                                                                $login_nome_template,
                                                                '/users/view_data/');  
                                                        echo ' <button class="button2 large2 orange2" style="float: right;" type="submit">Sair</button>'; 
                                                        ?>
                                                </p>
                                                <?php echo '</form>'; ?>

                                            <?php endif; ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php
                                            //formulário para busca de produto
                                            if(empty($model_busca))
                                                $model_busca = 'Produto';
                                            echo $this->Form->create($model_busca, array('enctype' => 'multipart/form-data', 'style' => 'margin:0px',  'url' => array('controller' => $name_side_bar, 'action' =>'filtro_form')));
                                            echo $this->Form->input('busca', array('style' => 'width:140px;height: 29px;margin-top: 2px;', 'label' => false, 'class' => 'input_form', 'div' => false));
                                            echo '&nbsp;&nbsp;&nbsp;&nbsp;<button style="float:right" class="button2 large2 orange2" type="submit">Buscar</button>'; 
                                            echo '</form>';
                                            ?>

                                        </td>
                                    </tr> 
                                </table>
                                
                                
                        </div>
                        
                        <div class="header_dados">
                            <table>
                                <tr>
                                    <td valign="center">&nbsp;</td>
                                    <td valign="center">&nbsp;</td>
                                </tr>
                            </table>                            
                        </div>
                    </td>
                </tr>
                <tr class="header_bottom">
                    <td> 
                        <div class="header_bottom">
                        
                        <?php echo $this->element('top_bar', array('name_top_bar' => $name_top_bar)); ?>
                        
                        <?php
                        //Status do carrinho
                        $num_pedidos = 0;
                        if($this->Session->check('Pedido')){
                                $pedido = $this->Session->read('Pedido');
                                if(!empty($pedido['Itempedido']))
                                        $num_pedidos = count($pedido['Itempedido']); 
                        }
                        ?>
                        
                        <table class="carrinho" >
                            <tr>
                                <td>
                                    <?php
                                    if($num_pedidos > 0){
                                            echo $this->Html->link(
                                                $this->Html->image('icon/shopping-cart-full-icon.png', array('style' => 'width:27px')),
                                                '/pedidos/atual',
                                                array('escape' => false)
                                            );
                                    }else{
                                            echo $this->Html->link(
                                                $this->Html->image('icon/cart-icon.png', array('style' => 'width:27px')),
                                                '/pedidos/atual',
                                                array('escape' => false)
                                            );
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php

                                    if($num_pedidos == 1){
                                        echo $this->Html->link(
                                            '1 item',
                                            '/pedidos/atual'
                                        );
                                    }else{
                                        echo $this->Html->link(
                                            $num_pedidos.' itens',
                                            '/pedidos/atual'
                                        );
                                    }

                                    ?>    
                                </td>
                            </tr>
                        </table>
                        </div>
                    </td>
                </tr>
            </table>
            
                        
            
        </div>
        <div id="sliderImg" class="slider">
            <?php echo $this->Html->image('example.jpg', array( 'class' => 'active'));  ?>
			<?php echo $this->Html->image('example2.jpg');  ?>
        </div>
        <div class="content_main">
            
            <table style="width:100%;height: 100%">
                <tr>
                    <td valign="top" width="115px" style="padding-top: 7px;">
                        <div class="side_bar"  >
                            <?php echo $this->element('side_bar', array('name_side_bar' => $name_side_bar, 'side_bar' => $side_bar, 'login_group' => $login_group, 'nameSession' => $nameSession)); ?>
                            
                            
                        </div>   
                    </td>
                    <td valign="top">
                        <div class="main">
                            <div class="sessao">
                                
                                <?php
                                if(!empty($passo_pedido)){
                                        //exibir barra de passos do pedido
                                        ?>
                                        <div class="passo_pedido" style="width: 100%" align="center">
                                                <table>
                                                        <tr>
                                                                <td valign="center">
                                                                        <?php 
                                                                        if($this->getVar('passo_pedido') == 'pedido'){
                                                                                echo $this->Html->image('passo_1_select.png');
                                                                        }else{
                                                                                echo $this->Html->link(
                                                                                    $this->Html->image('passo_1.png'),
                                                                                    '/pedidos/atual',
                                                                                    array('escape' => false)
                                                                                );
                                                                        }
                                                                        ?>
                                                                </td>
                                                                <td valign="center" width="70px">
                                                                        <strong>Pedido</strong>
                                                                </td>
                                                                <td valign="center">
                                                                        <?php 
                                                                        if($this->getVar('passo_pedido') == 'endereco'){
                                                                                echo $this->Html->image('passo_2_select.png');
                                                                        }else{
                                                                                echo $this->Html->link(
                                                                                    $this->Html->image('passo_2.png'),
                                                                                    '/pedidos/obter_endereco',
                                                                                    array('escape' => false)
                                                                                );
                                                                        }
                                                                        ?>
                                                                </td>
                                                                <td valign="center" width="70px">
                                                                        <strong>Endereço</strong>
                                                                </td>
                                                                <td valign="center">
                                                                        <?php 
                                                                        if($this->getVar('passo_pedido') == 'pagamento'){
                                                                                echo $this->Html->image('passo_3_select.png');
                                                                        }else{
                                                                                echo $this->Html->link(
                                                                                    $this->Html->image('passo_3.png'),
                                                                                    '/pedidos/pagamento',
                                                                                    array('escape' => false)
                                                                                );
                                                                        }
                                                                        ?>
                                                                </td>
                                                                <td valign="center" width="70px">
                                                                        <strong>Pagamento</strong>
                                                                </td>
                                                        </tr>
                                                </table>
                                        </div>      
                                        <?php
                                }	 
                        ?>
                                
                                <?php 
                                $content_title = $this->getVar('content_title');
                                if(!empty($content_title)): 
                                ?>
                                
                                    <h2 class="title"
                                    <?php     
                                        //verificar se possui opção de cor na categoria selecionada
                                        if(!empty($produto))
                                        if(!empty($categorias[$produto['Subcategoria']['categoria_id']]['Categoria']['cor'])){
                                            //echo 'style="color: '.$categorias[$produto['Subcategoria']['categoria_id']]['Categoria']['cor'].';"';
                                        }
                                    ?>     
                                    ><?php echo $content_title; ?></h2>
                                    
                                <?php endif; ?>

                                    
                                    
                                <?php 
                                        $aviso = $this->Session->flash();
                                        if(strlen($aviso)>0){
                                                echo $aviso;
                                        }	 
                                ?>
                                <?php echo $this->Session->flash('auth'); ?>
                                <?php echo $this->Session->flash('email'); ?>

                                <?php echo $content_for_layout; ?>
                                
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            
            
                        
        </div>
        <div class="footer">
            <div class="menu_footer">
                <?php echo $html->link('Início', '/produtos'); ?>
                <?php echo $html->link('Quem Somos', '/lojas/quem_somos'); ?>
                <?php echo $html->link('Produtos', '/progutos/'); ?>
                
                <?php if($login_group == null): ?>
                
                    <?php echo $html->link('Cadastro', '/users/cadastro_cliente'); ?>
                    
                <?php else: ?>
                    
                    <?php echo $html->link('Meus dados', '/users/view_data'); ?>
                    <?php echo $html->link('Meus pedidos', '/pedidos/'); ?>
                    
                <?php endif; ?>
                
                <?php echo $html->link('Trocas e Devoluções', '/lojas/troca_devolucao'); ?>
                <?php echo $html->link('Política de privacidade e Segurança', '/lojas/politica_privacidade'); ?>
                
                
            </div>
            <div class="content_footer">
                <table width="100%">
                    <tr>
                        <td width="33%">Formas de pagamento</td>
                        <td width="33%">Fale conosco</td>
                        <td width="33%">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td colspan="10">
                                        Crédito
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo $this->Html->image('1.gif', array('height' => '20px')); ?></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td><?php echo $this->Html->image('2.gif', array('height' => '20px')); ?></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td><?php echo $this->Html->image('3.gif', array('height' => '20px')); ?></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td><?php echo $this->Html->image('4.gif', array('height' => '20px')); ?></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td><?php echo $this->Html->image('5.gif', array('height' => '20px')); ?></td>
                                    <td>&nbsp;&nbsp;<br/><br/></td>
                                </tr>
                                <tr>
                                    <td colspan="10">
                                        <br/>Boleto
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="10">
                                        <?php echo $this->Html->image('6.gif', array('height' => '20px')); ?>
                                    </td>
                                </tr>
                            </table>

                        </td>
                        <td>
                            <?php echo $this->Html->image('icon/mobile_phone.png', array('alt' => 'Atendimento')); ?> (16) 3413-0380 (atendimento das 9h as 18h)<br/>
                            <br/><br/>
                            <?php echo $this->Html->image('icon/email.png', array('alt' => 'Atendimento')); ?> <a style="color:white" href="mailto:contato@homesample.com.br">contato@homesample.com.br</a><br/>
                        </td>
                        <td>
                            <div style="float: right;background-color: #222;" class="fb-like-box" data-href="http://www.facebook.com/pages/Home-Sample/339831206055352#" data-width="292" data-height="170" data-colorscheme="dark" data-show-faces="true" data-stream="false" data-header="false"></div>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center"> Copyright © 2011 Home Sample | Loja Virtual do <a href="http://www.grupodf.com" target="_blank" style="color: white">Grupo DF</a></td>
                    </tr>
                </table>
            </div>
        </div>
        
        
        
<!-- ini popupMsg -->

<div id="popupMsg">

    <a id="popupMsgClose">X</a>

    <h1 id="popupMsgTitulo"></h1>

    <div id="popupMsgCorpo" style="color:#000; "></div>

    <div style="height:20px;"></div>

</div>

<div id="backgroundPopup"></div> 

<!-- fim popupMsg -->

        
        
    </body>
</html>
