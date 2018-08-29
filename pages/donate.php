<?PHP
		if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a doa&ccedil;&atilde;o.';
		}
		else
		{
if($action == '')
	{
  $main_content .=' 
 <div id="ProgressBar">  <div id="Headline">Informa&ccedil;&otilde;es Iniciais</div>  <div id="MainContainer">    <div id="BackgroundContainer">    
 <img id="BackgroundContainerLeftEnd" src="layouts/tibiarl/images/vips/stonebar-left-end.gif">      <div id="BackgroundContainerCenter">       
 <div id="BackgroundContainerCenterImage" style="background-image: url(layouts/tibiarl/images/content/stonebar-center.gif);"></div>      </div>
 <img id="BackgroundContainerRightEnd" src="layouts/tibiarl/images/vips/stonebar-right-end.gif">    </div>   
 <img id="TubeLeftEnd" src="layouts/tibiarl/images/vips/progress-bar-tube-left-blue.gif">
 <img id="TubeRightEnd" src="layouts/tibiarl/images/vips/progress-bar-tube-right-blue.gif">   
 <div id="FirstStep" class="Steps">
      <div class="SingleStepContainer">
         <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-0-blue.gif">      
 <div class="StepText" style="font-weight: bold;">Regras da Doa&ccedil;&atilde;o</div>
      </div>
    </div>
    <div id="StepsContainer1">
      <div id="StepsContainer2">    
 <div class="Steps" style="width: 25%;">
          <div class="TubeContainer">
            <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-blue.gif">   
 </div>
          <div class="SingleStepContainer">
            <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-1-blue.gif">           
 <div class="StepText" style="font-weight: normal;">Metodo de Doa&ccedil;&atilde;o</div>
          </div>
        </div>
        <div class="Steps" style="width: 25%;">         
 <div class="TubeContainer">
            <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-blue.gif">
          </div>
          <div class="SingleStepContainer"> 
 <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-2-blue.gif">
            <div class="StepText" style="font-weight: normal;">Informa&ccedil;&otilde;es do Pedido</div>   
 </div>
        </div>
        <div class="Steps" style="width: 25%;"> 
         <div class="TubeContainer">    
 <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-blue.gif">
          </div>
          <div class="SingleStepContainer">       
 <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-3-blue.gif">
            <div class="StepText" style="font-weight: normal;">Confirma&ccedil;&atilde;o</div>   
 </div>
        </div>
        <div class="Steps" style="width: 25%;">
          <div class="TubeContainer">          
 <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-blue.gif">          </div>          <div class="SingleStepContainer">         
 <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-4-blue.gif">            <div class="StepText" style="font-weight: normal;">Pedido Realizado</div>    
 </div>        </div>      </div>    </div>  </div></div><div class="TableContainer">  <div class="CaptionContainer">      <div class="CaptionInnerContainer">     
  <span class="CaptionEdgeLeftTop" style="background-image: url(layouts/tibiarl/images/content/box-frame-edge.gif);"></span>       
  <span class="CaptionEdgeRightTop" style="background-image: url(layouts/tibiarl/images/content/box-frame-edge.gif);"></span>    
  <span class="CaptionBorderTop" style="background-image: url(layouts/tibiarl/images/content/table-headline-border.gif);"></span>   
  <span class="CaptionVerticalLeft" style="background-image: url(layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>   
  <div class="Text">Informa&ccedil;&otilde;es iniciais para sua doa&ccedil;&atilde;o.</div>       
  <span class="CaptionVerticalRight" style="background-image: url(layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>      
  <span class="CaptionBorderBottom" style="background-image: url(layouts/tibiarl/images/content/table-headline-border.gif);"></span>   
  <span class="CaptionEdgeLeftBottom" style="background-image: url(layouts/tibiarl/images/content/box-frame-edge.gif);"></span>   
  <span class="CaptionEdgeRightBottom" style="background-image: url(layouts/tibiarl/images/content/box-frame-edge.gif);"></span>     
  </div>
    </div>
    <table class="Table1" cellpadding="0" cellspacing="0"> 
   <tbody><tr>
      <td>
        <div class="InnerTableContainer">       
  <table style="width: 100%;"><tbody><tr><td>
Informamos aos jogadores e colaboradores que o '.$config['server']['serverName'].' Alternative Tibia Server n&atilde;o tem nenhum interesse financeiro. Toda a renda obtida &eacute; diretamente reaplicada para a manuten&ccedil;&atilde;o do servidor - isto significa que ao fazer uma doa&ccedil;&atilde;o, voc&ecirc; est&aacute; garantindo a estabilidade e aumentando a qualidade do mesmo.</br></br>
Os pontos que s&atilde;o repassados aos jogadores que efetuam as doa&ccedil;&otilde;es n&atilde;o representam nada mais al&eacute;m de nossa gratifica&ccedil;&atilde;o, isto &eacute;, voc&ecirc; n&atilde;o est&aacute; comprando pontos e sim recebendo uma gratifica&ccedil;&atilde;o simb&oacute;lica (em formas de pontos) que te beneficie dentro do jogo; voc&ecirc; poder&aacute; usar os seus pontos da maneira que desejar.</br>

N&atilde;o devolvemos valores das doa&ccedil;&otilde;es pois tudo &eacute; aplicado nas despesas mensais.</br>
O esp&iacute;rito deste sistema &eacute; simples: com o intuito de nos aproximarmos dos jogadores e fazer com que voc&ecirc;s se sintam em casa, entendemos a sua doa&ccedil;&atilde;o como uma via de m&atilde;o dupla no quesito credibilidade. Ao acreditar que vale a pena investir na manuten&ccedil;&atilde;o do servidor, n&oacute;s investimos em voc&ecirc;s creditando-os com pontos, que como j&aacute; dito anteriormente, podem ser utilizados da maneira que mais os couber.</br></br>
Confira o <a href="?subtopic=shopsystem">'.$config['server']['serverName'].' Shop</a> e saiba como aproveitar os seus pontos da maneira mais proveitosa a sua situa&ccedil;&atilde;o.</br>

<h3>D&uacute;vidas Frequentes</h3></br>
<b>Mas o que s&atilde;o Premium Points?</b>
Premium Points faz parte do nosso sistema de doa&ccedil;&atilde;o, com eles voc&ecirc; pode adquirir uma VIP ou algo mais que esteja dispon&iacute;vel no Shopping Online.</br></br>

<b>Voc&ecirc; concorda com os termos acima?</b>
<br>Clique no bot&atilde;o <b>"Continue"</b> e siga todos os procedimentos para realizar sua doa&ccedil;&atilde;o.

  </td></tr>          </tbody></table>        </div>
  </td></tr></tbody></table></div><br><center><table border="0" cellpadding="0" cellspacing="0">
  <tbody><tr><td style="border: 0px none;">
  <div class="BigButton" style="background-image: url(layouts/tibiarl/images/buttons/sbutton.gif);">
  <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(layouts/tibiarl/images/buttons/sbutton_over.gif);"></div>
  <a href="?subtopic=doacao&action=page2"><input class="ButtonText" name="Continue" alt="Continue" onclick=location.href="index.php?subtopic=doacao&action=page2" src="layouts/tibiarl/images/vips/_sbutton_continue.gif" type="image"></a></div></div></td></tr></tbody></table></center> 
	 
';
	}

elseif($action == 'page2')
	{
		if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a doacao.';
		}
		else
		{
 $main_content .= '
<br>
<br>
<center><font size="7"><b>Formas de Doa&ccedil;&otilde;es</b></font></center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>PagSeguro</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>Paypal</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>Dep&oacute;sito Banc&aacute;rio</b><br>
<center>
<a href="?subtopic=doacao&action=pagseguro"><img src="pagseguroicon.png"  width="270"></a>
<a href="?subtopic=doacao&action=paypal"><img src="paypal.png" width="210"></a>
<a href="?subtopic=doacao&action=deposito"><img src="banco.jpg" width="108"></a>
<a href="?subtopic=doacao&action=deposito"><img src="banco.jpg" width="108"></a>
 </center>
 ';
 }
 }
elseif($action == 'pagseguro')
	{
		if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a doacao.';
		}
		else
		{
 $main_content .= '
<br><div style="text-align: justify;"><img src="layouts/tibiarl/images/content/bullet.gif">Em primeiro lugar &eacute; sempre bom lembrar que a <b>Equipe do MegaTibia</b> n&atilde;o tem interesses financeiros, o dinheiro das doa&ccedil;&otilde;es servem para manter o servidor online e trazer mais divers&otilde;es a todos n&oacute;s.
</div>
<div style="text-align: justify;"><img src="layouts/tibiarl/images/content/bullet.gif">Que fique bem claro que, o que voc&ecirc; est&aacute; fazendo &eacute; uma doa&ccedil;&atilde;o, doar &eacute; da, n&oacute;s da equipe n&atilde;o estamos fazendo nem um tipo de venda ou coisa parecida!</br>
</div>
<div style="text-align: justify;"><img src="layouts/tibiarl/images/content/bullet.gif">Para da inc&iacute;o a sua doa&ccedil;&atilde;o veja os detalhes e op&ccedil;&otilde;es abaixo:</br>
</div>
<br><table width="100%" border="0" cellpadding="4" cellspacing="1">
<tbody><tr>
  <td class="white" colspan="3" bgcolor="#505050"><span class="style4">Detalhes da bonifica&ccedil;&atilde;o de Points.</span></td>

</tr>
<tr bgcolor="#f1e0c6"><td width="35%"><b>Doa&ccedil;&atilde;o</b></td><td width="35%"><b>Points</b></td></tr>
<tr bgcolor="#d4c0a1"><td>R$5,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 5 Points</td></tr>

<tr bgcolor="#f1e0c6"><td>R$10,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 10 Points</td></tr>
<tr bgcolor="#d4c0a1"><td>R$20,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 20 Points</td></tr>
<tr bgcolor="#f1e0c6"><td>R$40,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 40 Points</td></tr>
<tr bgcolor="#d4c0a1"><td>R$60,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 60 Points</td></tr>
<tr bgcolor="#f1e0c6"><td><center><img src="layouts/tibiarl/images/content/bullet.gif"> E assim por diante!!! <img src="layouts/tibiarl/images/content/bullet.gif"></center><td><center><img src="layouts/tibiarl/images/content/bullet.gif"> E assim por diante!!! <img src="layouts/tibiarl/images/content/bullet.gif"></center></td></tr>
</tbody></table></br>
';

$main_content .= '
<form target="pagseguro" method="post" action="https://pagseguro.uol.com.br/checkout/checkout.jhtml">
<input type="hidden" name="email_cobranca" value="'. $config['pagseguro']['email']. '">
<input type="hidden" name="tipo" value="CP">
<input type="hidden" name="moeda" value="BRL">
<input type="hidden" name="item_id_1" value="1">
<input type="hidden" name="item_descr_1" value="Pontos na account de nome: '.$account_logged->getCustomField("name").'">
<input type="hidden" name="item_frete_1" value="0">
<input type="hidden" name="item_peso_1" value="0">
<input type="hidden" name="ref_transacao" value="'.$account_logged->getCustomField("name").'">
<table border="0" cellpadding="4" cellspacing="1" width="100%" id="#estilo"><tbody>
<tr bgcolor="#505050" class="white">
<th colspan="2"><strong>Escolha a quantidade de pontos que deseja DONATAR.</strong></th>
</tr>
<tr bgcolor="#d4c0a1">
<td width="10%">Sua conta</td>
<td><strong>'.$account_logged->getCustomField("name").'</strong></td>
</tr>
<tr bgcolor="#d4c0a1">
<td width="10%">Pontos</td>
<td>
<input type="number" ng-model="get_points" min="1" size="5" maxlength="5">
<input name="item_valor_1" type="hidden" value="{{get_points * 100}}" size="5" maxlength="5">
<input name="item_quant_1" type="hidden" value="1" size="1" maxlength="1"><img src="pagseguro_logo.png" width="200" align="right">
</td>
</tr>
<tr bgcolor="#d4c0a1">
<td colspan="2">
<input type="image" src="/pagtop.gif" width="450" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!">
</td>
</tr>
</tbody></table></form>
<b><span style="color:#ff0000;">OBS:</span></b> Os pontos s&atilde;o entregues <b>autom&aacute;ticamente</b> logo ap&oacute;s a <u>aprova&ccedil;&atilde;o</u> da sua doa&ccedil;&atilde;o pelo PagSeguro, ou seja, pagou e foi aprovado pontos depositados.
</br>
';}}
elseif($action == 'paypal')
	{
		if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a doacao..';
		}
		else
		{
 $main_content .= '<br><div style="text-align: justify;"><img src="layouts/tibiarl/images/content/bullet.gif">Em primeiro lugar &eacute; sempre bom lembrar que a <b>Equipe do MegaTibia</b> n&atilde;o tem interesses financeiros, o dinheiro das doa&ccedil;&otilde;es servem para manter o servidor online e trazer mais divers&otilde;es a todos n&oacute;s.
</div>
<div style="text-align: justify;"><img src="layouts/tibiarl/images/content/bullet.gif">Que fique bem claro que, o que voc&ecirc; est&aacute; fazendo &eacute; uma doa&ccedil;&atilde;o, doar &eacute; da, n&oacute;s da equipe n&atilde;o estamos fazendo nem um tipo de venda ou coisa parecida!</br>
</div>
<div style="text-align: justify;"><img src="layouts/tibiarl/images/content/bullet.gif">Para da inc&iacute;o a sua doa&ccedil;&atilde;o veja os detalhes e op&ccedil;&otilde;es abaixo:</br>
</div>
<br><table width="100%" border="0" cellpadding="4" cellspacing="1">
<tbody><tr>
  <td class="white" colspan="3" bgcolor="#505050"><span class="style4">Detalhes da bonifica&ccedil;&atilde;o de Points.</span></td>

</tr>
<tr bgcolor="#f1e0c6"><td width="35%"><b>Doa&ccedil;&atilde;o</b></td><td width="35%"><b>Points</b></td></tr>
<tr bgcolor="#d4c0a1"><td>R$5,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 5 Points</td></tr>

<tr bgcolor="#f1e0c6"><td>R$10,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 10 Points</td></tr>
<tr bgcolor="#d4c0a1"><td>R$20,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 20 Points</td></tr>
<tr bgcolor="#f1e0c6"><td>R$40,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 40 Points</td></tr>
<tr bgcolor="#d4c0a1"><td>R$60,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 60 Points</td></tr>
<tr bgcolor="#f1e0c6"><td><center><img src="layouts/tibiarl/images/content/bullet.gif"> E assim por diante!!! <img src="layouts/tibiarl/images/content/bullet.gif"></center><td><center><img src="layouts/tibiarl/images/content/bullet.gif"> E assim por diante!!! <img src="layouts/tibiarl/images/content/bullet.gif"></center></td></tr>
</tbody></table></br>

<center>
<table border="1">
<tbody><tr bgcolor="#d4c0a1"><td><table width="500" border="0" cellpadding="4" cellspacing="1">
  <tbody>

    <tr>
      <td colspan="2" bgcolor="#505050"><b><font color="#505050">..</font><font color="WHITE">Fa&ccedil;a uma doa&ccedil;&atilde;o utilizando Paypal!</font></b></td>

    </tr>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="D2R8SELPYFZYN">
<input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
</form>


  </tbody>
</table>
      </td>
</tr></tbody></table></br></center>
</br>';
 }}
elseif($action == 'deposito')
	{
		if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a doacao..';
		}
		else
		{
 $main_content .= '<br><div style="text-align: justify;"><img src="layouts/tibiarl/images/content/bullet.gif">Em primeiro lugar &eacute; sempre bom lembrar que a <b>Equipe do MegaTibia</b> n&atilde;o tem interesses financeiros, o dinheiro das doa&ccedil;&otilde;es servem para manter o servidor online e trazer mais divers&otilde;es a todos n&oacute;s.
</div>
<div style="text-align: justify;"><img src="layouts/tibiarl/images/content/bullet.gif">Que fique bem claro que, o que voc&ecirc; est&aacute; fazendo &eacute; uma doa&ccedil;&atilde;o, doar &eacute; da, n&oacute;s da equipe n&atilde;o estamos fazendo nem um tipo de venda ou coisa parecida!</br>
</div>
<div style="text-align: justify;"><img src="layouts/tibiarl/images/content/bullet.gif">Para da inc&iacute;o a sua doa&ccedil;&atilde;o veja os detalhes e op&ccedil;&otilde;es abaixo:</br>
</div>
<br><table width="100%" border="0" cellpadding="4" cellspacing="1">
<tbody><tr>
  <td class="white" colspan="3" bgcolor="#505050"><span class="style4">Detalhes da bonifica&ccedil;&atilde;o de Points.</span></td>

</tr>
<tr bgcolor="#f1e0c6"><td width="35%"><b>Doa&ccedil;&atilde;o</b></td><td width="35%"><b>Points</b></td></tr>
<tr bgcolor="#d4c0a1"><td>R$5,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 5 Points</td></tr>

<tr bgcolor="#f1e0c6"><td>R$10,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 10 Points</td></tr>
<tr bgcolor="#d4c0a1"><td>R$20,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 20 Points</td></tr>
<tr bgcolor="#f1e0c6"><td>R$40,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 40 Points</td></tr>
<tr bgcolor="#d4c0a1"><td>R$60,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 60 Points</td></tr>
<tr bgcolor="#f1e0c6"><td><center><img src="layouts/tibiarl/images/content/bullet.gif"> E assim por diante!!! <img src="layouts/tibiarl/images/content/bullet.gif"></center><td><center><img src="layouts/tibiarl/images/content/bullet.gif"> E assim por diante!!! <img src="layouts/tibiarl/images/content/bullet.gif"></center></td></tr>
</tbody></table></br>
<center>
<table border="1">
<tbody><tr><td><table width="500" border="0" cellpadding="4" cellspacing="1">
  <tbody>

    <tr>
      <td colspan="2" bgcolor="#505050"><b><font color="#505050">..</font><font color="WHITE">Como fazer uma doa&ccedil;&atilde;o?</font></b></td>

    </tr>
    <tr bgcolor="#f1e0c6">
      <td colspan="2"><b>Leia atentamente as informa&ccedil;&otilde;es</b><br />
       </td>
    </tr>
    </tr>
 <tr bgcolor="#d4c0a1">
      <td width="80" align="center"><img src="bb.png" alt="" width="75"/><br />

        <span class="style3">Itau</span></td>
      <td>Fa&ccedil;a o deposito nas ag&ecirc;ncias do <b>Itau</b> ou <b>Trafer&ecirc;ncia Online</b>.<br>
        <p><b>Itau.</b></p>

        <p><strong>Favorecido</strong>: Marlon Herbert Sodre Farias.</p>
        <p><strong>Agencia:</strong> 7407</p>
        <p><strong>Conta:</strong> 210702/500</p>
	<p><strong>(<em>Conta Poupanca </em>)</strong></p>
        </td>   
    </tr>
 <tr bgcolor="#d4c0a1">
      <td width="80" align="center"><img src="layouts/tibiarl/images/vip/caixa.png" alt="" width="75"/><br />

        <span class="style3">Caixa Econ&ocirc;mica</span></td>
      <td>Fa&ccedil;a o deposito nas ag&ecirc;ncias do <b>Caixa Econ&ocirc;mica Federal</b> ou <b>Trafer&ecirc;ncia Online</b> e nas lot&eacute;rias.<br>
        <p><b>Caixa Econ&ocirc;mica.</b></p>

        <p><strong>Favorecido</strong>: Marlon Herbert Sodre Farias.</p>
        <p><strong>Agencia:</strong> 1971</p>
        <p><strong>Conta:</strong> 00038390-7</p>
        <p><strong>OP:</strong> 013</p>
	<p><strong>(<em>Conta Poupan&ccedil;a </em>)</strong></p>
        </td>   
    </tr>
 <tr bgcolor="#d4c0a1">
      <td width="80" align="center"><img src="layouts/tibiarl/images/vip/itau.png" alt="" width="75"/><br />

        <span class="style3">Itau</span></td>
      <td>Fa&ccedil;a o deposito nas ag&ecirc;ncias do <b>Bradesco</b> ou <b>Trafer&ecirc;ncia Online</b>.<br>
        <p><b>Bradesco.</b></p>

        <p><strong>Favorecido</strong>: Marlon Herbert Sodre Farias.</p>
        <p><strong>Agencia:</strong> 7407</p>
        <p><strong>Conta:</strong> 210702/500</p>
	<p><strong>(<em>Conta Poupanca </em>)</strong></p>
        </td>   
    </tr>
 <tr bgcolor="#d4c0a1">
      <td width="80" align="center"><img src="layouts/tibiarl/images/vip/itau.png" alt="" width="75"/><br />

        <span class="style3">Itau</span></td>
      <td>Fa&ccedil;a o deposito nas ag&ecirc;ncias do <b>Itau</b> ou <b>Trafer&ecirc;ncia Online</b>.<br>
        <p><b>Itau.</b></p>
        <p><strong>Favorecido</strong>: Marlon Herbert Sodre Farias.</p>
        <p><strong>Agencia:</strong> 7407</p>
        <p><strong>Conta:</strong> 210702/500</p>
	<p><strong>(<em>Conta Poupanca </em>)</strong></p>
        </td>   
    </tr>
    <tr bgcolor="#f1e0c6">

      <td colspan="2"><center><a href="/?subtopic=confirmar"><b>Confirmar Doa&ccedil;&atilde;o</b></a></center></td>
    </tr>
      <td colspan="2" bgcolor="#505050"><b><font color="#505050">..</font></b></td>
    </tr>
    <tr bgcolor="#d4c0a1">

      <td colspan="2"><b>PagSeguro</b></td>
    </tr>
    <tr bgcolor="#f1e0c6">

      <td colspan="2">

<div style="text-align: justify;">Fa&ccedil;a uma doa&ccedil;&atilde;o pelo <strong>PagSeguro</strong>.<br /><br><div style="text-align: justify;">Pelo PagSeguro &eacute; poss&iacute;vel realizar doa&ccedil;&otilde;es por Boletos Banc&aacute;rios, Cart&otilde;es de creditos e Transfer&ecirc;ncias entre contas PagSeguro ou Bancos. Ap&oacute;s efetuar a doa&ccedil;&atilde;o aguarde o prazo de 24/48hrs para a conclus&atilde;o da sua doa&ccedil;&atilde;o.
</div>
    <tr bgcolor="#d4c0a1">

      <td colspan="2"><b>Atraso</b></td>
    </tr>
    <tr bgcolor="#f1e0c6">

      <td colspan="2">

<div style="text-align: justify;">Passou do prazo maximo dado pela nossa <b>Equipe</b> voc&ecirc; tem o direto de reclamar sobre o atraso da conclus&atilde;o da doa&ccedil;&atilde;o.
</div>
<div style="text-align: justify;">Como?
</div>
<div style="text-align: justify;">Envie o email para <b>marlonfarias@gmail.com.br</b> com o nome do character e as informa&ccedil;&otilde;es que voc&ecirc; usou ao fazer a sua doa&ccedil;&atilde;o</b>.
</div>
  </tbody>
</table>
      </td>
</tr></tbody></table></br></center>';
 }}}
?>