<?PHP
		if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a doa&ccedil;&atilde;o..';
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
  <a href="?subtopic=buypt&action=page2"><input class="ButtonText" name="Continue" alt="Continue" onclick=location.href="index.php?subtopic=buypt&action=page2" src="layouts/tibiarl/images/vips/_sbutton_continue.gif" type="image"></a></div></div></td></tr></tbody></table></center> 
	 
';
	}

elseif($action == 'page2')
	{
		if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a doacao..';
		}
		else
		{
 $main_content .= '
<br>
<br>
<center><font size="7"><b>Formas de Doa&ccedil;&otilde;es</b></font></center>
<br><font size="5"><center><a href="http://baiaknew.com/?subtopic=promocao">Promoções Clique Aqui!</a></font></center>

 
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
<a href="?subtopic=buypt&action=pagseguro"><img src="pagseguroicon.png"  width="270"></a>
<a href="?subtopic=buypt&action=paypal"><img src="paypal.png" width="210"></a>
<a href="?subtopic=buypt&action=deposito"><img src="banco.jpg" width="108"></a>
<a href="?subtopic=buypt&action=deposito"><img src="banco.jpg" width="108"></a>
 </center>
 ';
 }
 }
elseif($action == 'pagseguro')
	{
		if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a doacao..';
		}
		else
		{
  $main_content .= '
<br><div style="text-align: justify;"><img src="layouts/tibiarl/images/content/bullet.gif">Em primeiro lugar &eacute; sempre bom lembrar que a <b>Equipe do Baiaknew</b> n&atilde;o tem interesses financeiros, o dinheiro das doa&ccedil;&otilde;es servem para manter o servidor online e trazer mais divers&otilde;es a todos n&oacute;s.
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
<tr bgcolor="#f1e0c6"><td>R$30,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 60 Points</td></tr>
<tr bgcolor="#d4c0a1"><td>R$40,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 80 Points</td></tr>
<tr bgcolor="#f1e0c6"><td>R$60,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 120 Points</td></tr>
<tr bgcolor="#d4c0a1"><td>R$100,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 200 Points</td></tr>
<tr bgcolor="#f1e0c6"><td>R$150,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 450 Points</td></tr>
<tr bgcolor="#d4c0a1"><td><center><img src="layouts/tibiarl/images/content/bullet.gif"> E assim por diante!!! <img src="layouts/tibiarl/images/content/bullet.gif"></center><td><center><img src="layouts/tibiarl/images/content/bullet.gif"> E assim por diante!!! <img src="layouts/tibiarl/images/content/bullet.gif"></center></td></tr>
</tbody></table></br>
';

$main_content .= '
<table><tr><td> 
<form method="post" target="_new" action="https://pagseguro.uol.com.br/security/webpagamentos/webpagto.aspx" name="LOGIN" class="formulario">
<input type="hidden" name="ref_transacao" value="'.$account_logged->getName().'" />
<input type="hidden" name="email_cobranca" value="markimsaraiva@gmail.com">
<input type="hidden" name="tipo" value="CP">
<input type="hidden" name="moeda" value="BRL">
<input type="hidden" name="item_id_1" value="2000050">
<table><tbody><tr><td><strong>Nome do Seu Character (Sem erro):</strong></td></tr></tbody></table>
<table><tbody><tr><td><input type="text" name="item_descr_1"></td></tr></tbody></table><br> 

<input type="hidden" name="item_quant_1" value="1"> 
<table><tbody><tr>
<td width="153"><span class="style11 style4">
<strong>Valor do pagamento:</strong>
</span>
</td>
</tr>
</tbody></table> 

<table border="0"><tbody><tr>

  <td width="96"><label>

    <select name="item_valor_1" id="item_valor_1" tabindex="2">

      <option selected>Selecione</option>

      
     <option value="5,00">R$5,00</option>

      <option value="10,00">R$10,00</option>

      <option value="15,00">R$15,00</option>

      <option value="20,00">R$20,00</option>
 
      <option value="25,00">R$25,00</option>

      <option value="30,00">R$30,00</option>
	  
	  <option value="31,00">R$31,00</option>
 
      <option value="35,00">R$35,00</option>
     
      <option value="40,00">R$40,00</option>

      <option value="45,00">R$45,00</option>

      <option value="50,00">R$50,00</option>

      <option value="55,00">R$55,00</option>
 
      <option value="60,00">R$60,00</option>

      <option value="65,00">R$65,00</option>       

      <option value="70,00">R$70,00</option>
      
      <option value="75,00">R$75,00</option>

      <option value="80,00">R$80,00</option>
   
      <option value="85,00">R$85,00</option>


      <option value="90,00">R$90,00</option>
	  
	  <option value="95,00">R$95,00</option>

      <option value="100,00">R$100,00</option>
	  
	  <option value="105,00">R$105,00</option>

      <option value="110,00">R$110,00</option>
	  
	  <option value="115,00">R$115,00</option>

      <option value="120,00">R$120,00</option>
	  
	  <option value="125,00">R$125,00</option>

      <option value="130,00">R$130,00</option>
	  
	  <option value="135,00">R$135,00</option>

      <option value="140,00">R$140,00</option>
	  
	  <option value="145,00">R$145,00</option>

      <option value="150,00">R$150,00</option>
	  
	  <option value="155,00">R$155,00</option>

      <option value="160,00">R$160,00</option>
	  
	  <option value="165,00">R$165,00</option>

      <option value="170,00">R$170,00</option>
	  
	  <option value="175,00">R$175,00</option>
 
      <option value="180,00">R$180,00</option>
	  
	  <option value="185,00">R$185,00</option>

      <option value="190,00">R$190,00</option>
	  
	  <option value="195,00">R$195,00</option>
 
      <option value="200,00">R$200,00</option>
	  
	  <option value="210,00">R$210,00</option>
	  
	  <option value="220,00">R$220,00</option>
	  
	  <option value="230,00">R$230,00</option>
	  
	  <option value="240,00">R$240,00</option>
	
      <option value="250,00">R$250,00</option>
	  
	  <option value="260,00">R$260,00</option>
	  
	  <option value="270,00">R$270,00</option>
	  
	  <option value="280,00">R$280,00</option>
	  
	  <option value="290,00">R$290,00</option>
	
      <option value="300,00">R$300,00</option>
	  
	  <option value="310,00">R$310,00</option>
	  
	  <option value="320,00">R$320,00</option>
	  
	  <option value="330,00">R$330,00</option>
	  
	  <option value="340,00">R$340,00</option>
	
      <option value="350,00">R$350,00</option>
	  
	  <option value="360,00">R$360,00</option>
	  
	  <option value="370,00">R$370,00</option>
	  
	  <option value="380,00">R$380,00</option>
	  
	  <option value="390,00">R$390,00</option>
	
      <option value="400,00">R$400,00</option>
	  
	  <option value="410,00">R$410,00</option>
	  
	  <option value="420,00">R$420,00</option>
	  
	  <option value="430,00">R$430,00</option>
	  
	  <option value="440,00">R$440,00</option>
	  
	  <option value="450,00">R$450,00</option>
	  
	  <option value="460,00">R$460,00</option>
	  
	  <option value="470,00">R$470,00</option>
	  
	  <option value="480,00">R$480,00</option>
	  
	  <option value="490,00">R$490,00</option>
	  
	  <option value="500,00">R$500,00</option>


                                </select>

  </label></td>

</tr></tbody></table>


</td>
</tr>
<br> 

<br> 

<input type="hidden" name="item_frete_1" value="000">  

<table><tbody><tr><td><input type="submit" value="Finalizar Compra"></td></tr></tbody></table> 
';
	}}
elseif($action == 'paypal')
	{
		if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a doacao..';
		}
		else
		{
 $main_content .= '<br><div style="text-align: justify;"><img src="layouts/tibiarl/images/content/bullet.gif">Em primeiro lugar &eacute; sempre bom lembrar que a <b>Equipe do Baiaknew</b> n&atilde;o tem interesses financeiros, o dinheiro das doa&ccedil;&otilde;es servem para manter o servidor online e trazer mais divers&otilde;es a todos n&oacute;s.
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
<tr bgcolor="#f1e0c6"><td>R$30,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 60 Points</td></tr>
<tr bgcolor="#d4c0a1"><td>R$40,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 80 Points</td></tr>
<tr bgcolor="#f1e0c6"><td>R$60,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 120 Points</td></tr>
<tr bgcolor="#d4c0a1"><td>R$100,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 200 Points</td></tr>
<tr bgcolor="#f1e0c6"><td>R$150,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 450 Points</td></tr>
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
<input type="hidden" name="hosted_button_id" value="">
<table>
<tr><td><input type="hidden" name="on0" value="BKPoints">BKPoints</td></tr><tr><td><select name="os0">
	<option value="10 Pontos">10 Pontos R$10,00</option>
	<option value="20 Pontos">20 Pontos R$20,00</option>
	<option value="30 Pontos">60 Pontos R$30,00</option>
	<option value="40 Pontos">80 Pontos R$40,00</option>
	<option value="50 Pontos">100 Pontos R$50,00</option>
	<option value="70 Pontos">140 Pontos R$70,00</option>
	<option value="100 Pontos">200 Pontos R$100,00</option>
	<option value="150 Pontos">450 Pontos R$150,00</option>
	<option value="200 Pontos">600 Pontos R$200,00</option>
	<option value="250 Pontos">750 Pontos R$250,00</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Character Name:">Character Name:</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
</table>

<input type="hidden" name="currency_code" value="BRL">
<input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1"><img src="paypal.gif" width="80" align="right">
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
 $main_content .= '<br><div style="text-align: justify;"><img src="layouts/tibiarl/images/content/bullet.gif">Em primeiro lugar &eacute; sempre bom lembrar que a <b>Equipe do Baiaknew</b> n&atilde;o tem interesses financeiros, o dinheiro das doa&ccedil;&otilde;es servem para manter o servidor online e trazer mais divers&otilde;es a todos n&oacute;s.
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
<tr bgcolor="#f1e0c6"><td>R$30,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 60 Points</td></tr>
<tr bgcolor="#d4c0a1"><td>R$40,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 80 Points</td></tr>
<tr bgcolor="#f1e0c6"><td>R$60,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 120 Points</td></tr>
<tr bgcolor="#d4c0a1"><td>R$100,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 200 Points</td></tr>
<tr bgcolor="#f1e0c6"><td>R$150,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 450 Points</td></tr>
<tr bgcolor="#f1e0c6"><td><center><img src="layouts/tibiarl/images/content/bullet.gif"> E assim por diante!!! <img src="layouts/tibiarl/images/content/bullet.gif"></center><td><center><img src="layouts/tibiarl/images/content/bullet.gif"> E assim por diante!!! <img src="layouts/tibiarl/images/content/bullet.gif"></center></td></tr>
</tbody></table></br>
<center>
<table border="0">
<tbody><tr><td>';



$main_content .= '<br>
<FORM ACTION="?subtopic=characters" METHOD=post>
	<div class="TableContainer">
					<div class="CaptionContainer">
							<div class="CaptionInnerContainer"> 
								<span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/lay/images/content/box-frame-edge.gif);"></span>
								<span class="CaptionEdgeRightTop" style="background-image:url(./layouts/lay/images/content/box-frame-edge.gif);"></span>
								<span class="CaptionBorderTop" style="background-image:url(./layouts/lay/images/content/table-headline-border.gif);"></span> 
								<span class="CaptionVerticalLeft" style="background-image:url(./layouts/lay/images/content/box-frame-vertical.gif);"></span>							
								<div class="Text">Informa&ccedil;&otilde;es Iniciais para sua doa&ccedil;&atilde;o</div>
								<span class="CaptionVerticalRight" style="background-image:url(./layouts/lay/images/content/box-frame-vertical.gif);"></span>
								<span class="CaptionBorderBottom" style="background-image:url(./layouts/lay/images/content/table-headline-border.gif);"></span> 
								<span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/lay/images/content/box-frame-edge.gif);"></span>
								<span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/lay/images/content/box-frame-edge.gif);"></span>
							</div>
						</div><table class="Table4" cellpadding="0" cellspacing="0">
						
						<tbody><tr>
							<td>
								<div class="InnerTableContainer">
									<table style="width:100%;">
										<tbody><tr>
											<td>
												<div class="TableShadowContainerRightTop">
													<div class="TableShadowRightTop" style="background-image:url(./layouts/lay/images/content/table-shadow-rt.gif);"></div>
												</div>
												<div class="TableContentAndRightShadow" style="background-image:url(./layouts/lay/images/content/table-shadow-rm.gif);">
													<div class="TableContentContainer">
														<table border="1" cellpadding="4" cellspacing="1" class="TableContent" width="100%" style="border:1px solid #faf0d7;">
															
															<form action="?subtopic=characters" method="post" class="ng-pristine ng-valid"></form>
														<tr><td bgcolor="#D4C0A1"><table border="0" width="100%" cellpadding="1"><tbody><tr><td>



<br/>

	<table style="font-size:10pt" border="0" cellspacing=1 cellpadding=0 width="100%">
	<tr>
	<center>
	<td bgcolor="'.$config['site']['darkborder'].'" witdh="2%"><center><img src="./images/bank/cxxx.png"/>
    </b></left></td>
    </b></center></td>
	</tr>
	<tr>
	
	
	
	<th bgcolor="'.$config['site']['darkborder'].'" witdh="2%" height="20px"><b><font class=black><center>Caixa Economica</center></b></th>
	<tr>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><left><b>Conta Poupança</b></left></td>
	</tr>
	<tr>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><left>Agencia : 1544</left></td>
	</tr>
	</tr>
	<tr>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><left>Conta Poupança : 39542-3</left></td>
	
	</tr>
	</tr>
	<tr>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><left>Favorecido : Clayton Andrey Guths</left></td>
	</tr>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><left>Operação : 013</left></td>

	</center>
	</table>
	
	<table style="font-size:10pt" border="0" cellspacing=1 cellpadding=0 width="100%">
	<tr>	
	<center><br>
	<th bgcolor="'.$config['site']['darkborder'].'" witdh="2%" height="20px"><center><b>Pagseguro</center></b></th>
	</tr>
	<tr>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><center><b>Para fazer doacao pelo pagseguro voce precisa estar logado.</center></b></td>
	</tr>
	<tr>
	<td bgcolor="'.$config['site']['darkborder'].'" witdh="2%"><center><a href="?subtopic=buypt&action=pagseguro"><img src="./images/bank/pgs.png"/></a>
    </center></td>
	</tr>
	<tr>
	</tr>
	</center>
	</table>
	
	
	
</div>


</div></br>
</td>
</tbody></table></tr>
</table>

													</div>
												</div>
												<div class="TableShadowContainer">
													<div class="TableBottomShadow" style="background-image:url(./layouts/lay/images/content/table-shadow-bm.gif);">
														<div class="TableBottomLeftShadow" style="background-image:url(./layouts/lay/images/content/table-shadow-bl.gif);"></div>
														<div class="TableBottomRightShadow" style="background-image:url(./layouts/lay/images/content/table-shadow-br.gif);"></div>
													</div>
												</div>
											</td>
										</tr>
									</tbody></table>
								</div>
							</td></tr></tbody></table>
						</div>
	<br/>
	</FORM>';
$main_content .= '<br>
<FORM ACTION="?subtopic=characters" METHOD=post>
	<div class="TableContainer">
					<div class="CaptionContainer">
							<div class="CaptionInnerContainer"> 
								<span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/lay/images/content/box-frame-edge.gif);"></span>
								<span class="CaptionEdgeRightTop" style="background-image:url(./layouts/lay/images/content/box-frame-edge.gif);"></span>
								<span class="CaptionBorderTop" style="background-image:url(./layouts/lay/images/content/table-headline-border.gif);"></span> 
								<span class="CaptionVerticalLeft" style="background-image:url(./layouts/lay/images/content/box-frame-vertical.gif);"></span>							
								<div class="Text">Informa&ccedil;&otilde;es Iniciais para sua doa&ccedil;&atilde;o</div>
								<span class="CaptionVerticalRight" style="background-image:url(./layouts/lay/images/content/box-frame-vertical.gif);"></span>
								<span class="CaptionBorderBottom" style="background-image:url(./layouts/lay/images/content/table-headline-border.gif);"></span> 
								<span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/lay/images/content/box-frame-edge.gif);"></span>
								<span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/lay/images/content/box-frame-edge.gif);"></span>
							</div>
						</div><table class="Table4" cellpadding="0" cellspacing="0">
						
						<tbody><tr>
							<td>
								<div class="InnerTableContainer">
									<table style="width:100%;">
										<tbody><tr>
											<td>
												<div class="TableShadowContainerRightTop">
													<div class="TableShadowRightTop" style="background-image:url(./layouts/lay/images/content/table-shadow-rt.gif);"></div>
												</div>
												<div class="TableContentAndRightShadow" style="background-image:url(./layouts/lay/images/content/table-shadow-rm.gif);">
													<div class="TableContentContainer">
														<table border="1" cellpadding="4" cellspacing="1" class="TableContent" width="100%" style="border:1px solid #faf0d7;">
															
															<form action="?subtopic=characters" method="post" class="ng-pristine ng-valid"></form>
														<tr><td bgcolor="#D4C0A1"><table border="0" width="100%" cellpadding="1"><tbody><tr><td>



<br/>

	<table style="font-size:10pt" border="0" cellspacing=1 cellpadding=0 width="100%">
	<tr>
	<center>
	<td bgcolor="'.$config['site']['darkborder'].'" witdh="2%"><center><img src="./images/bank/bb.png"/>
    </b></left></td>
    </b></center></td>
	</tr>
	<tr>
	
	
	
	<th bgcolor="'.$config['site']['darkborder'].'" witdh="2%" height="20px"><b><font class=black><center>Banco do Brasil</center></b></th>
	<tr>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><left><b>Conta Corrente</b></left></td>
	</tr>
	<tr>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><left>Agencia : 3126-7</left></td>
	</tr>
	</tr>
	<tr>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><left>Conta Corrente: 85544-8</left></td>
	
	</tr>
	</tr>
	<tr>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><left>Favorecido : Clayton Andrey Guths</left></td>
	</tr>
	

	</center>
	</table>
	
	<table style="font-size:10pt" border="0" cellspacing=1 cellpadding=0 width="100%">
	<tr>	
	<center><br>
	<th bgcolor="'.$config['site']['darkborder'].'" witdh="2%" height="20px"><center><b>Pagseguro</center></b></th>
	</tr>
	<tr>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><center><b>Para fazer doacao pelo pagseguro voce precisa estar logado.</center></b></td>
	</tr>
	<tr>
	<td bgcolor="'.$config['site']['darkborder'].'" witdh="2%"><center><a href="?subtopic=buypt&action=pagseguro"><img src="./images/bank/pgs.png"/></a>
    </center></td>
	</tr>
	<tr>
	</tr>
	</center>
	</table>
	
	
	
</div>


</div></br>
</td>
</tbody></table></tr>
</table>

													</div>
												</div>
												<div class="TableShadowContainer">
													<div class="TableBottomShadow" style="background-image:url(./layouts/lay/images/content/table-shadow-bm.gif);">
														<div class="TableBottomLeftShadow" style="background-image:url(./layouts/lay/images/content/table-shadow-bl.gif);"></div>
														<div class="TableBottomRightShadow" style="background-image:url(./layouts/lay/images/content/table-shadow-br.gif);"></div>
													</div>
												</div>
											</td>
										</tr>
									</tbody></table>
								</div>
							</td></tr></tbody></table>
						</div>
	<br/>
	</FORM>';
	
	
	
	$main_content.='
	<table border="0" cellspacing=1 cellpadding=4 width="100%">
	<tr bgcolor="'.$config['site']['vdarkborder'].'">
	<th width="100%"><font class=black><center>Observa&ccedil;&otilde;es</center></b></th>
	</tr>
	</table>
	<table style="font-size:8pt" border="0" cellspacing=1 cellpadding=4 width="100%">
	<tr bgcolor="'.$config['site']['darkborder'].'">
	</tr>
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width="100%">
	&nbsp;&nbsp;Apos efetuar a doacao, voce com o comprovante em maos ira, fazer o que se pede: 
	<p>Mande um e-mail para <font color="blue">baiaknewpayment@gmail.com</font> com os dados da doacao. 
	Apos enviar o e-mail de confirmacao, nos da Equipe, liberamos seus pontos em aproximadamente 24 horas. 
	
	Apos efetuar sua confirmacao, corretamente. Fique de olho no e-mail. 
	Seus premiums points, poderao chegar a qualquer minuto. e no maximo 48h. 
	Se seu pedido nao chegar em 48 Hrs apos a confirmacao, reenvie o e-mail de confirmacao com o assunto "Atraso" para <font color="blue">baiaknewpayment@gmail.com</font> e aguarde a liberacao dos seus points!! Bom Jogo!! 

	<p><center>Obrigado por ajudar o nosso servidor a continuar online.</center></p></td>
	</tr>
	</table><br/>
	



      </td>
</tr></tbody></table></br></center>';
 }}}
?>