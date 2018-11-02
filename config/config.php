<?PHP
# Account Maker Config
$config['site']['serverPath'] = "/home/nto/SERV_BASE_NTO/";
#$config['site']['serverPath'] = "/home/marcosubuntu/Downloads/GITNTO/SERV_BASE_NTO/";
$config['site']['useServerConfigCache'] = false;
$config['site']['worlds'] = array(0 => 'NTO');
$towns_list[0] = array(1 => 'BaiakPvp');

$config['site']['outfit_images_url'] = 'images/animated/animoutfit.php';
$config['site']['item_images_url'] = '/images/items/';
$config['site']['item_images_extension'] = '.gif';
$config['site']['flag_images_url'] = 'http://flag-images.ots.me/';
$config['site']['flag_images_extension'] = '.png';
$config['site']['players_group_id_block'] = 3;
$config['site']['limitDeath'] = 10;
$config['site']['levelVideo'] = 150;

# Create Account Options
$config['server_name'] = 'Gran Baiak';
$config['site']['one_email'] = false;
$config['site']['create_account_verify_mail'] = false;
$config['site']['verify_code'] = true;
$config['site']['email_days_to_change'] = 3;
$config['site']['newaccount_premdays'] = 999;
$config['site']['send_register_email'] = false;

# Create Character Options
$config['site']['newchar_vocations'][0] = array(1 => 'Sorcerer Sample', 2 => 'Druid Sample', 3 => 'Paladin Sample', 4 => 'Knight Sample');
$config['site']['newchar_towns'][0] = array(1);
$config['site']['max_players_per_account'] = 15;


# Emails Config
$config['site']['send_emails'] = false;


# PAGE: accountmanagement.php
$config['site']['send_mail_when_change_password'] = true;
$config['site']['send_mail_when_generate_reckey'] = true;
$config['site']['generate_new_reckey'] = true;
$config['site']['generate_new_reckey_price'] = 500;

$config['pagseguro']['email'] = 'markimsaraiva@gmail.com'; ## EMAIL PAGSEGURO ##
$config['paypal']['email'] = 'eliton_cnb@hotmail.com'; ## EMAIL PAYPAL ##

## Formas de pagamento [1 = ativo | 0 = inativo] ##
## Formas de pagamento [1 = ativo | 0 = inativo] ##
$config['site']['caixa'] = 1;
$config['site']['pagseguro'] = 1;
$config['site']['paypal'] = 1;
#####################
## Nome do Produto ##
#####################
$config['moip']['produtoNome'] = 'BaiakPvp Points';
$config['pagseguro']['produtoNome'] = 'BaiakPvp Points';
// Valor de cada ponto
// Exemplo de valores:
// 100 = R$ 1,00
// 250 = R$ 2,50
$config['pagseguro']['produtoValor'] = '100';

#############################
######### C A I X A ########
#############################
#! Informações do pagamento com caixa economica federal !#

$config['site']['CaixaCont'] = "<center><big>Nome: <b>Eliton de Souza</b>

Banco: <b>Caixa Econômica</b>

Conta: <b>Conta Corrente</b>

Nº da Conta: <b>00004741-6</b>

Agência: <b>0852</b>

Operação: <b>13</b>


OBS: <b>Após fazer sua doação via depósito, você deve enviar a foto do pagamento para 
marlonfarias@gmail.com 
para colocarmos seus pontos.</b></big></big></center>
"; 





# PAGE: whoisonline.php
$config['site']['private-servlist.com_server_id'] = 1;
/*
Server id on 'private-servlist.com' to show Players Online Chart (whoisonline.php page), set 0 to disable Chart feature.
To use this feature you must register on 'private-servlist.com' and add your server.
Format: number, 0 [disable] or higher
*/

# PAGE: characters.php
$config['site']['quests'] = array('Annihilator' => 5000,'Demon Helmet' => 2645,'Pits of Inferno' => 5550);
$config['site']['show_skills_info'] = true;
$config['site']['show_vip_storage'] = 1;

# PAGE: guilds.php
$config['site']['guild_need_level'] = 8;
$config['site']['guild_need_pacc'] = false;
$config['site']['guild_image_size_kb'] = 50;
$config['site']['guild_description_chars_limit'] = 2000;
$config['site']['guild_description_lines_limit'] = 6;
$config['site']['guild_motd_chars_limit'] = 250;

# PAGE: adminpanel.php
$config['site']['access_admin_panel'] = 3;
$config['site']['access_tickers'] = 3;
$config['site']['access_admin_painel'] = 3;
$config['site']['access_staff_painel'] = 3;

# PAGE: latestnews.php
$config['site']['news_limit'] = 6;

# PAGE: killstatistics.php
$config['site']['last_deaths_limit'] = 40;

# PAGE: team.php
$config['site']['groups_support'] = array(2, 3, 4);

# PAGE: highscores.php
$config['site']['groups_hidden'] = array(3,4);
$config['site']['accounts_hidden'] = array(1);

# PAGE: shopsystem.php
$config['site']['shop_system'] = true;
$config['site']['shopguild_system'] = true;

# PAGE: lostaccount.php
$config['site']['email_lai_sec_interval'] = 180;

# Layout Config
$config['site']['layout'] = 'revo';
$config['site']['vdarkborder'] = '#505050';
$config['site']['darkborder'] = '#D4C0A1';
$config['site']['lightborder'] = '#F1E0C6';
$config['site']['download_page'] = false;
$config['site']['serverinfo_page'] = true;
