<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<!--copiei aqui-->
<script language=JavaScript>
<!--
var mensagem="";
function clickIE() {if (document.all) {(mensagem);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(mensagem);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
// --> 
</script>
<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}</style>
<script type="text/javascript">
  if(top.location != window.location) {
    top.location = self.location;
  }
</script>
<meta charset="utf-8">
<title><?PHP echo $title ?></title>
<meta name="description" content="Tibia is a free massively multiplayer online role-playing game (MMORPG)">
<meta name="author" content="Felipe">
<meta http-equiv="content-language" content="en">
<meta name="keywords" content="free online rpg, free mmorpg, mmorpg, mmog, online role playing game, online multiplayer game, internet game, online rpg, rpg">
<!--ICON-->
<link rel="shortcut icon" href="<?PHP echo $layout_name; ?>/images/general/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?PHP echo $layout_name; ?>/images/general/favicon.ico" type="image/x-icon">
<!--CSS'S-->
<link href="<?PHP echo $layout_name; ?>/css/basic_d.css" rel="stylesheet" type="text/css">
<link href="<?PHP echo $layout_name; ?>/css/news.css" rel="stylesheet" type="text/css">

<script type="text/javascript">  
var loginStatus=0; 
loginStatus='<?PHP if($logged){ ?>true<?PHP }else{ ?>false<?PHP } ?>';  
var activeSubmenuItem='<?PHP echo $subtopic; ?>';  
var JS_DIR_IMAGES=0; 
JS_DIR_IMAGES='<?PHP echo $layout_name; ?>/images/';  
var JS_DIR_ACCOUNT=0; 
JS_DIR_ACCOUNT='';  
var g_FormName='';  
var g_FormField='';  
var g_Deactivated=false;
var FB_TryLogin = 0;
var FB_ForceReload = 0;
</script>
<script type="text/javascript">
  if(top.location != window.location) {
    top.location = self.location;
  }
</script>



<script type="text/javascript" src="<?PHP echo $layout_name; ?>/initialize.js"></script>

<link href="<?PHP echo $layout_name; ?>/css/facebook.css" rel="stylesheet" type="text/css"> 

<!--copiei ate aqui-->
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title><?PHP echo $title; ?></title>
	<meta name="author" content="Bufostudio.pl"/>
	<link rel="stylesheet" href="layouts/revo/_css/default.css" type="text/css" />
	<link rel="stylesheet" href="layouts/revo/_css/basic.css" type="text/css" />

 	<link rel="icon" href="layouts/revo/images/favicon.ico" type="image/x-icon">
	
	<script type="text/javascript" src="layouts/revo/_js/slideshow.js"></script>
	<script type="text/javascript" src="layouts/revo/_js/jquery-1.4.2.min.js"></script>
	
	<script type='text/javascript'>
		$(document).ready(function(){
		$("img.a").hover(
			function() {
				$(this).stop().animate({"opacity": "0"}, "slow");
			},
			function() {
				$(this).stop().animate({"opacity": "1"}, "slow");
			});
		});
	</script>
	
	<script type="text/javascript" src="layouts/revo/_js/initialize.js"></script>
	<script type='text/javascript'> var IMAGES=0; IMAGES='layouts/revo/images'; var g_FormField='';  var LINK_ACCOUNT=0; LINK_ACCOUNT='';</script>
    <?php echo $layout_header; ?>
</head>
<body>
<!--//Queries//-->
<?PHP
	$lua = parse_ini_file($config['site']['server_path'].'/config.lua');
	$ip = explode("*", $lua['ip']);
	$port = explode("*", $lua['loginPort']);
	$motd = explode("*", $lua['motd']);
?>
<!--//END Queries//-->
	<div id="page">
		<div id="bastao"></div>
		<div id="logotxt"></div>


		<div id="content">
			<div id="menu_top">
				<div class='img'>
					<div class="left">
						<div id='menu_top_home'>
							<a href="?subtopic=latestnews">
								<div class='fadehover'>
									<img src='layouts/revo/_img/menu/news_1a.png' alt='<?PHP echo $title; ?>' class='a' />
									<img src='layouts/revo/_img/menu/news_1b.png' alt='<?PHP echo $title; ?>' class='b' />
								</div>
							</a>
						</div>
						<div id='menu_top_acc'>
							<a href="?subtopic=accountmanagement">
								<div class='fadehover'>
									<img src='layouts/revo/_img/menu/edit_b.png' alt='Account' class='a' />
									<img src='layouts/revo/_img/menu/edit_a.png' alt='Account' class='b' />
								</div>
							</a>
						</div>
						<div id='menu_top_shop'>
							<a href="?subtopic=shopsystem">
								<div class='fadehover'>
									<img src='layouts/revo/_img/menu/shop_1a.png' alt='Shop' class='a' />
									<img src='layouts/revo/_img/menu/shop_1b.png' alt='Shop' class='b' />
								</div>
							</a>
						</div>
						
					<div class="online">
						<center style="text-shadow: 1px 1px #2d2d2d; text-transform: uppercase;"><img src="layouts/revo/_img/online/online.png"/><a style="color:#FFF;" href="?subtopic=whoisonline"></br>Players Online:
						<?PHP
							$getonline = $SQL->query('SELECT COUNT(*) FROM players WHERE online = 1')->fetch();
							echo $getonline[0]
						?>
						</a></center>
					</div>
					
					<div class="right">
						<div id='menu_top_forum'>
							<a href="?subtopic=forum">
								<div class='fadehover'>
									<img src='layouts/revo/_img/menu/forum_1a.png' alt='Forum' class='a' />
									<img src='layouts/revo/_img/menu/forum_1b.png' alt='Forum' class='b' />
								</div>
							</a>
						</div>
						<div id='menu_top_highscores'>
							<a href="?subtopic=highscores">
								<div class='fadehover'>
									<img src='layouts/revo/_img/menu/highscores_1a.png' alt='Highscores' class='a' />
									<img src='layouts/revo/_img/menu/highscores_1b.png' alt='Highscores' class='b' />
								</div>
							</a>
						</div>
						<div id='menu_top_register'>
							<a href="?subtopic=createaccount">
								<div class='fadehover'>
									<img src='layouts/revo/_img/menu/register_1a.png' alt='Register' class='a' />
									<img src='layouts/revo/_img/menu/register_1b.png' alt='Register' class='b' />
								</div>
							</a>
						</div>
					</div>
					</div>
				</div>
			</div>
			
			<div id="menu_left">
				<div id="menu-label">
					<div id="icon-news"></div>
					<div id="text-news"></div>
				</div>
				<div id="menu_links">
					<ul>
						<li><a href="?subtopic=latestnews"><font color="orange">&nbsp;&raquo; Latest news</font></a></li>
						<li><a href="?subtopic=sistemas"><font color="red">&nbsp;&raquo;Sistemas GRAN!</font></a></li>
						<li><a href="?subtopic=archive">&nbsp;&raquo; News archive</a></li>
						<li><a href="?subtopic=bugtracker">&nbsp;&raquo; Bug Tracker</a></li>

					</ul>
				</div>
				
				<div class="clean_5"></div>
				
				<div id="menu-label">
					<div id="icon-account"></div>
					<div id="text-account"></div>
				</div>
				<div id="menu_links">
					<ul>
						<?PHP if($logged){
								if($group_id_of_acc_logged >= $config['site']['access_admin_panel'])
									echo '<li><a href="?subtopic=cpanel"><font color="red">&nbsp;&raquo; Admin Panel</font></a></li>';
								if($logged)
							echo '<li><a href="?subtopic=accountmanagement"><font color="orange"><b>Acc. Management</b></font></a></li>';
								}else{
							echo '<li><a href="?subtopic=accountmanagement"><b>&nbsp;&raquo; Login</b></a></li>
								<li><a href="?subtopic=createaccount"><b>&nbsp;&raquo; Create Account</b></a></li>
								<li><a href="?subtopic=lostaccount"><b>&nbsp;&raquo; Lost Account</b></a></li>';}?>
								<li><a href="?subtopic=tibiarules"><b>&nbsp;&raquo; Server Rules</b></a></li>
					</ul>
				</div>
					<div class="clean_5"></div>
				
				<div id="menu-label">
					<div id="icon-sistemas"></div>
					<div id="text-sistemas"></div>
				</div>
				<div id="menu_links">
					<li><a href="?subtopic=highscores">&nbsp;&raquo; Highscores</a></li>

					<li><a href="?subtopic=team">&nbsp;&raquo; <font color="green">Team</font></a></li>
				</div>
				
				<div class="clean_5"></div>
				
				<div id="menu-label">
					<div id="icon-community"></div>
					<div id="text-community"></div>
				</div>
				<div id="menu_links">
					<li><a href="?subtopic=characters">&nbsp;&raquo; Characters</a></li>
					<li><a href="?subtopic=whoisonline">&nbsp;&raquo; Who is Online?</a></li>
					<li><a href="?subtopic=highscores">&nbsp;&raquo; Highscores</a></li>
					<li><a href="?subtopic=guilds">&nbsp;&raquo; Guilds</a></li>
					<li><a href="?subtopic=forum">&nbsp;&raquo; Forum</a></li>
					<li><a href="?subtopic=team">&nbsp;&raquo; <font color="green">Team</font></a></li>
				</div>
				
				<div class="clean_5"></div>
				
				<div id="menu-label">
					<div id="icon-library"></div>
					<div id="text-library"></div>
				</div>
				<div id="menu_links">
					<li><a href="?subtopic=serverinfo">&nbsp;&raquo; FAQ</a></li>
					<li><a href="?subtopic=downloads">&nbsp;&raquo; Downloads</a></li>
				</div>
				
				<div class="clean_5"></div>
				
				<div id="menu-label">
					<div id="icon-shop"></div>
					<div id="text-shop"></div>
				</div>
				<div id="menu_links">
						<li><a href="?subtopic=buypoints&system=homepay"><b><font color="red">&nbsp;&raquo; Buy Points</font></b></a></li>
						<li><a href="?subtopic=shopsystem"><b><font color="green">&nbsp;&raquo; Shop Offers</font></b></a></li>
						<?PHP
							if($logged)
								echo '<li><a href="?subtopic=shopsystem&action=show_history"><b>&nbsp;&raquo; Trans History</b></a></li>';
						?>
				</div>

			</div>
			
			<div id="content_text">
				<?PHP echo $main_content; ?>
			</div>
				
			<div id="menu_right">
				<div id="menu-label">
					<div id="icon-info"></div>
					<div id="text-info"></div>
				</div>
					<center>
						<span class="white" style="font-weight: bold;">EXP: </span>x99<br/>
						<span class="white" style="font-weight: bold;">PvP-E: </span>x15<br/>
						<span class="white" style="font-weight: bold;">Version: </span>1.0<br/><br/>
			
				<div class="clean_5"></div>
			
				<div id="menu-label">
					<div id="icon-search"></div>
					<div id="text-search"></div>
				</div>
				
				<div class="clean_5"></div>
					<center>
						<FORM ACTION="?subtopic=characters" METHOD=post>
							<INPUT NAME="name" VALUE="" class="search" SIZE=20 MAXLENGTH=29>
							<div class="clean_5"></div>
							<INPUT TYPE=image NAME="Submit" SRC="layouts/revo/images/buttons/sbutton_submit.gif" BORDER=0 WIDTH=120 HEIGHT=18>
						</FORM>
					</center>
			
				<div class="clean_5"></div>
			
				<div id="menu-label">
					<div id="icon-toplevel"></div>
					<div id="text-toplevel"></div>
				</div>
				
				<table width="100%" border="0">
				 <?PHP
					$order = 0;
					$number_of_people = 0;
					$skills = $SQL->query('SELECT name,online,level,experience,vocation,promotion FROM players WHERE players.deleted = 0 AND players.group_id NOT IN ('.implode(',', $config['site']['groups_hidden']).')  AND name != "Account Manager" ORDER BY level DESC, experience DESC LIMIT 5;');
						foreach($skills as $skill) {
						  $order++;
								$number_of_people++;
								$players_skill .= '<tr><td align="center">'.$order.'.</td><td align="left"><B><a href="?subtopic=characters&name='.urlencode($skill['name']).'">'.($skill['online']>0 ? "<font color=\"green\">".$skill['name']."</font>" : "".$skill['name']."</font>").'</a></td> <td align="center"><font color="red"><em>LvL '.$skill['level'].'</em></font></td>';
						}
					echo "$players_skill";
				?>
				
				</table>
				
				<div class="clean_5"></div>
				
				<div id="menu-label">
					<div id="icon-topguilds"></div>
					<div id="text-topguilds"></div>
				</div>
			</div>
		</div>
		
		
		<div id="content_bot"></div>
	</div>
</body>
</html>