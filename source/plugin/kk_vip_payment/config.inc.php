<?php
if(!defined('IN_ADMINCP')) exit('Access Denied');
if(file_exists(DISCUZ_ROOT.'./data/vip/payment.php')){
	cpmsg('&#26816;&#27979;&#21040;&#26377;&#37197;&#32622;&#25991;&#20214;&#65292;&#22914;&#26524;&#25554;&#20214;&#27491;&#24120;&#20351;&#29992;&#65292;&#35831;&#24573;&#30053;&#26412;&#39029;&#38754;<br><br>&#22914;&#26524;&#24744;&#38656;&#35201;&#37325;&#26032;&#35774;&#32622;&#25903;&#20184;&#21442;&#25968;&#65292;&#35831;&#20808;&#23558;&#21407;&#26377;&#30340; data/vip/payment.php &#25991;&#20214;&#25913;&#21517;&#25110;&#21024;&#38500;', '', 'succeed');
}
include DISCUZ_ROOT.'./source/plugin/kk_vip_payment/upgrade.php';
cpmsg('&#26032;&#35774;&#32622;&#24050;&#32463;&#20445;&#23384;', '', 'succeed');