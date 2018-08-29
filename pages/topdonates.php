
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
            <div class="Text"><center><font color="3399ff">The 3 best Donators (DO MES) in '.htmlspecialchars($config['server_name']).'</center></font></div>
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
                                                                        <td align="center" class="white" colspan="3"><font color="3399ff"><b>Ranking</font></b>
                                                                        </td>
                                                                    </tr>
                                                                <tbody>
                                                                    <tr bgcolor="#F1E0C6">
';


$accs = $SQL->query('SELECT id, rank_donate FROM accounts WHERE id != 1 and id != 18 and id != 10 ORDER BY rank_donate DESC LIMIT 3');
$rm = 1;

foreach ($accs as $accs ) {

$xixi = $SQL->query('SELECT looktype, lookaddons, lookhead, lookbody, looklegs, lookfeet,name,level FROM players  WHERE account_id = '.$accs['id'].' ORDER BY level DESC LIMIT 1');

foreach ($xixi as $member) {
    # code...

    $main_content .= '
         <td align="center">
           <img style="margin-top: -40px; margin-left: -50px; position: relative;" src="images/trofeu/'.$rm.'_.gif" />
           <img  style="margin-top: -45px; margin-left: -40px;" src="/images/animated/animoutfit.php?id='.$member['looktype'].'&addons='.$member['lookaddons'].'&head='.$member['lookhead'].'&body='.$member['lookbody'].'&legs='.$member['looklegs'].'&feet='.$member['lookfeet'].'" width="80" height="80" />
            <br>
            <b>Acc d@ </b> <a href="?subtopic=characters&name='.$member['name'].'"> '.$member['name'].'</a>
            <br>
             <b>'.$accs['rank_donate'].' Pontos </b>

         </td>
     ';


}
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
            <div class="Text"><font color="3399ff"><center>TOP Donators in '.htmlspecialchars($config['server_name']).'</center></font></div>
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
        <td class="white" style="text-align: center; font-weight: bold;">Donate(s)</td>
    </tr>';






$xixi = $SQL->query('SELECT id, rank_donate FROM accounts WHERE id != 1 and id != 18 and id != 10 ORDER BY rank_donate DESC LIMIT 3,8');
$number = 4;
$bgcount = 0;

foreach ($xixi as $accs ) {
$topFrags = $SQL->query('SELECT looktype, lookaddons, lookhead, lookbody, looklegs, lookfeet,name,level FROM players  WHERE account_id = '.$accs['id'].' ORDER BY level DESC LIMIT 1');
foreach ($topFrags as $member) {   
    $bgcount++;

    if(is_int($bgcount / 2)):
        $bgcolor = $config['site']['darkborder'];
    else:
        $bgcolor = $config['site']['lightborder'];
    endif;

    $main_content .= '<tr bgcolor="'.$bgcolor.'">
        <td><b>Acc d@</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="?subtopic=characters&name='.$member['name'].'">'.$member['name'].'</a> &nbsp;&nbsp;&nbsp; #'.$number.' </td>
        <td style="text-align: center;">'.$accs['rank_donate'].'</td>
    </tr>';

$number++;

}
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
            <div class="Text"><center><font color="3399ff">Others TOPS in '.htmlspecialchars($config['server_name']).'</font></center></div>
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