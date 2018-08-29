
<?php
if(!defined('INITIALIZED'))
    exit;



$main_content .= '
<div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
            <span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionBorderTop" style="background-image:url(./layouts/tibiarl/images/content/table-headline-border.gif);"></span>
            <span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>
            <div class="Text"><center><font color="ff3300">The 3 best killers in '.htmlspecialchars($config['server_name']).'</font></center></div>
            <span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>
            <span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiarl/images/content/table-headline-border.gif);"></span>
            <span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
                </div>
                    </div>
                        <table class="Table5" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td>
                                    <div class="InnerTableContainer">
                                        <table style="width:100%;">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="TableShadowContainerRightTop">
                                                            <div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/content/table-shadow-rt.gif);"></div>
                                                        </div>
                                                    <div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/content/table-shadow-rm.gif);">
                                                    <div class="TableContentContainer">
                                                        <table bgcolor="#D4C0A1" border="0" cellpadding="3" cellspacing="1" width="100%"> 
                                                        <tr bgcolor="#505050"></tr>                                    
                                                        <tr>
                                                            <td>
                                                                <table border="0" cellpadding="4" cellspacing="1" width="100%">
                                                                    <tr bgcolor="#505050">
                                                                        <td align="center" class="white" colspan="3"><b><font color="ff3300">Ranking</font></b>
                                                                        </td>
                                                                    </tr>
                                                                <tbody>
                                                                    <tr bgcolor="#F1E0C6">
';



$frag = $SQL->query('SELECT `p`.`name` AS `name`, COUNT(`p`.`name`) as `frags` FROM `killers` k LEFT JOIN `player_killers` pk ON `k`.`id` = `pk`.`kill_id` LEFT JOIN `players` p ON `pk`.`player_id` = `p`.`id` WHERE `k`.`unjustified` = 1 GROUP BY `name` ORDER BY `frags` DESC LIMIT 3');

foreach ($frag as $frags) {

            $SQL->query("UPDATE `players` SET `frags` = '".$frags['frags']."' WHERE `name` = '".$frags['name']."'  ");

}

$rankingFrags = $SQL->query('SELECT name,frags, lookbody, lookfeet, lookhead, looklegs, looktype, lookaddons FROM players WHERE group_id = 1 AND id != 1 order by frags DESC LIMIT 3 ');

$rm = 1;

foreach ($rankingFrags as $member) {

    $main_content .= '
        <td align="center">
            <img style="margin-top: -40px; margin-left: -50px; position: relative;" src="images/trofeu/'.$rm.'_.gif" />
            <img  style="margin-top: -45px; margin-left: -40px;" src="/images/animated/animoutfit.php?id='.$member['looktype'].'&addons='.$member['lookaddons'].'&head='.$member['lookhead'].'&body='.$member['lookbody'].'&legs='.$member['looklegs'].'&feet='.$member['lookfeet'].'" width="80" height="80" />
            <br>
            <a href="?subtopic=characters&name='.$member['name'].'"> '.$member['name'].'</a>
            <br>
            <b>'.$member['frags'].'</b>
        </td>
    ';

    $rm++;

}

$main_content .= '
        </td>
            </tr>
                </table></tr></tbody>
                        </table>
                            <br/>
                                </div>
                                    </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(./layouts/tibiarl/images/content/table-shadow-bm.gif);">
                                            <div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiarl/images/content/table-shadow-bl.gif);"></div>
                                            <div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiarl/images/content/table-shadow-br.gif);"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br />
';

$main_content .= '

<div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
            <span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionBorderTop" style="background-image:url(./layouts/tibiarl/images/content/table-headline-border.gif);"></span>
            <span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>
            <div class="Text"><center><font color ="ff3300">More TOP Frags in '.htmlspecialchars($config['server_name']).'</font></center></div>
            <span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>
            <span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiarl/images/content/table-headline-border.gif);"></span>
            <span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
                </div>
                    </div>
                        <table class="Table5" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td>
                                    <div class="InnerTableContainer">
                                        <table style="width:100%;">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="TableShadowContainerRightTop">
                                                            <div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/content/table-shadow-rt.gif);"></div>
                                                        </div>
                                                    <div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/content/table-shadow-rm.gif);">
                                                    <div class="TableContentContainer">
<table border="0" cellspacing="1" cellpadding="4" width="100%">
    <tr bgcolor="#505050">
        <td class="white" style="text-align: center; font-weight: bold;">Name</td>
        <td class="white" style="text-align: center; font-weight: bold;">Frags</td>
    </tr>';

$topFrags = $SQL->query('SELECT `p`.`name` AS `name`, COUNT(`p`.`name`) as `frags` FROM `killers` k LEFT JOIN `player_killers` pk ON `k`.`id` = `pk`.`kill_id` LEFT JOIN `players` p ON `pk`.`player_id` = `p`.`id` WHERE `k`.`unjustified` = 1 GROUP BY `name` ORDER BY `frags` DESC LIMIT 3,17');

$bgcount = 0;
$number =4;
foreach ($topFrags as $member) {   
    $bgcount++;

    if(is_int($bgcount / 2)):
        $bgcolor = $config['site']['darkborder'];
    else:
        $bgcolor = $config['site']['lightborder'];
    endif;

    $main_content .= '<tr bgcolor="'.$bgcolor.'">
        <td><a href="?subtopic=characters&name='.$member['name'].'">'.$member['name'].'</a>&nbsp;&nbsp;&nbsp; #'.$number.'</td>
        <td style="text-align: center;">'.$member['frags'].'</td>
    </tr>';
    $number++;
};


$main_content .= '          </table>
                                </div>
                                    </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(./layouts/tibiarl/images/content/table-shadow-bm.gif);">
                                            <div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiarl/images/content/table-shadow-bl.gif);"></div>
                                            <div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiarl/images/content/table-shadow-br.gif);"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

';

// INICIO DO OTHERS HIGHSCORES-- --------------------------------------

$main_content .= '
<div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
            <span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionBorderTop" style="background-image:url(./layouts/tibiarl/images/content/table-headline-border.gif);"></span>
            <span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>
            <div class="Text"><center>Others TOPS in '.htmlspecialchars($config['server_name']).'</center></div>
            <span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>
            <span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiarl/images/content/table-headline-border.gif);"></span>
            <span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
                </div>
                    </div>
                        <table class="Table5" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td>
                                    <div class="InnerTableContainer">
                                        <table style="width:100%;">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="TableShadowContainerRightTop">
                                                            <div class="TableShadowRightTop" style="background-image:url(./layouts/tibiarl/images/content/table-shadow-rt.gif);"></div>
                                                        </div>
                                                    <div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiarl/images/content/table-shadow-rm.gif);">
                                                    <div class="TableContentContainer">
                                                        <table bgcolor="#D4C0A1" border="0" cellpadding="3" cellspacing="1" width="100%"> 
                                                        <tr bgcolor="#505050"></tr>                                    
                                                        <tr>
                                                            <td>
                                                                <table border="0" cellpadding="4" cellspacing="1" width="100%">
                                                                    <tr bgcolor="#505050">
                                                                       
                                                                    </tr>
                                                                <tbody>
                                                                    <tr bgcolor="#F1E0C6">
';


$link1 = 'topdonates';
$link2 = 'topfraggers';
$link3 = 'toptokens';
$link4 = 'topbalance';
$nome1 = 'TOP DONATES';
$nome2 = 'TOP FRAGS';
$nome3 = 'TOP TOKENS';
$nome4 = 'TOP BALANCE';
  
    $main_content .= '
        <td align="center">
            <a href="?subtopic='.$link1.'"style="color: 0066ff"> '.$nome1.'</a>
            <br>
        </td>
    ';
   $main_content .= '
        <td align="center">
            <a href="?subtopic='.$link2.'"style="color: #F00"> '.$nome2.'</a>
            <br>
        </td>
    ';
   $main_content .= '
        <td align="center">
            <a href="?subtopic='.$link3.'" style= "color:ff33cc"> '.$nome3.'</a>
            <br>
        </td>
    ';
   $main_content .= '
        <td align="center">
            <a href="?subtopic='.$link4.'" style="color: 00cc00"> '.$nome4.'</a>
            <br>
        </td>
    ';











$main_content .= '
        </td>
            </tr>
                </table></tr></tbody>
                        </table>
                            <br/>
                                </div>
                                    </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(./layouts/tibiarl/images/content/table-shadow-bm.gif);">
                                            <div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiarl/images/content/table-shadow-bl.gif);"></div>
                                            <div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiarl/images/content/table-shadow-br.gif);"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br />
';

// FIM DO OTHERS HIGHSCORES-- --------------------------------------



?>