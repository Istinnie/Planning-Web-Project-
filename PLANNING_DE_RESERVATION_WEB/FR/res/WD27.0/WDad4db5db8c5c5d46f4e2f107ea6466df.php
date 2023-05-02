<?php
//27.0.2.0 FMK/Exception.php GF
//VersionVI: 01F270103n
//(c) 2005-2012 PC SOFT - Release
 define('FMK_Exception',true); if (!defined('__INC__FMK/Exception/Erreur.php')) { define('__INC__FMK/Exception/Erreur.php',true); include_once(WB_INCLUDE_PATH.'WDcef7bbddd7d66b0418ae08a6f213c41e.php'); } if (!defined('__INC__FMK/Exception/Assert.php')) { define('__INC__FMK/Exception/Assert.php',true); include_once(WB_INCLUDE_PATH.'WD9d074dc8bd8cf83e3bf6a64d42e8c768.php'); } if (!defined('__INC__WL/ERREUR/Throw5.php')) { define('__INC__WL/ERREUR/Throw5.php',true); include_once(WB_INCLUDE_PATH.'WDce78e0da16597bc401f086e93ba962ed.php'); } define('RetourErreur_Entier',(-1)); define('RetourErreur_Objet',null); define('EXCEPTION_DESACTIVE_STRICT_39944',PHPVERSION_5 && (version_compare(PHP_VERSION,'5.2.1')===-1) ); define('EXCEPTION_DESACTIVE_NOTICE_VAR_DEPRECIATED',PHPVERSION_5 && (version_compare(PHP_VERSION,'5.2.1')===-1) ); class FMK_Exception { var $sErreurLog; var $bErreurDetectee; var $nNombreErreursAttendues; var $MessageErreurInfo; var $gbErreurAttendue; var $sDerniereErreurSystemeAttendue; var $bEstFatale; var $m_tabNomCallbackUtilisateur; function __construct() { $this->sErreurLog = './err_'.WB_MAPAGE.'.log'; $this->bErreurDetectee = false; $this->nNombreErreursAttendues = 0; $this->MessageErreurInfo = new FMK_Exception_Erreur(); $this->gbErreurAttendue = false; $this->sDerniereErreurSystemeAttendue = ''; $this->bEstFatale = false; } } $_FMK_Exception = null; function& FMK_Exception() { global $_FMK_Exception; if (!isset($_FMK_Exception)) $_FMK_Exception = new FMK_Exception(); return $_FMK_Exception; } function& F20e10363() { $_FMK_Exception =& FMK_Exception(); return $_FMK_Exception->MessageErreurInfo; } function Fa19d34ae() { $_FMK_Exception =& FMK_Exception(); if (!F572d2e3e() || !is_object($_FMK_Exception->MessageErreurInfo)) { $_FMK_Exception->MessageErreurInfo = new FMK_Exception_Erreur(); } else $_FMK_Exception->MessageErreurInfo->raz(); Fe7895f62(false); } function Fee63fc94($sMessage , $nNiveau = E_USER_WARNING) { $_FMK_Exception =& FMK_Exception(); switch ($nNiveau) { case E_ERROR : $nNiveau = E_USER_ERROR; $_FMK_Exception->bEstFatale = true; break; default: $_FMK_Exception->bEstFatale = false; } trigger_error($sMessage,$nNiveau); } function F853b7085($sMessageErreur, $nTypeInformation = null) { $_FMK_Exception =& FMK_Exception(); if (!F572d2e3e() || !is_object($_FMK_Exception->MessageErreurInfo)) Fa19d34ae(); $_FMK_Exception->MessageErreurInfo->F61e52eab($sMessageErreur,$nTypeInformation); Fe7895f62(true); } function F3ccdac86($sMessage,$nTypeInformation = errMessage) { $_FMK_Exception =& FMK_Exception(); if (!F572d2e3e() || !is_object($_FMK_Exception->MessageErreurInfo)) Fa19d34ae(); $_FMK_Exception->MessageErreurInfo->F7455d57a($sMessage,$nTypeInformation); Fe7895f62(true); } function F6b1e3687() { $_FMK_Exception =& FMK_Exception(); $_FMK_Exception->sDerniereErreurSystemeAttendue = ''; $_FMK_Exception->nNombreErreursAttendues++; $_FMK_Exception->gbErreurAttendue = true; $_FMK_Exception->bErreurDetectee = false; } function F1e7b0563() { $_FMK_Exception =& FMK_Exception(); $_FMK_Exception->nNombreErreursAttendues--; $_FMK_Exception->gbErreurAttendue = ($_FMK_Exception->nNombreErreursAttendues>0); } function F977b2c2d() { $_FMK_Exception =& FMK_Exception(); return ($_FMK_Exception->gbErreurAttendue===true); } function F1abae4f0() { $_FMK_Exception =& FMK_Exception(); return $_FMK_Exception->sDerniereErreurSystemeAttendue; } function F572d2e3e() { $_FMK_Exception =& FMK_Exception(); return ($_FMK_Exception->bErreurDetectee === true); } function Fe7895f62($bEtat) { $_FMK_Exception =& FMK_Exception(); if (!is_object($_FMK_Exception->MessageErreurInfo)) Fa19d34ae(); $_FMK_Exception->bErreurDetectee = $bEtat && (!F977b2c2d()); } function FMK_Erreur_Callback($errno, $errstr, $errfile, $errline) { if (strpos($errstr,'assert()')!==false) return; $_FMK_Exception =& FMK_Exception(); $sNiveau = ''; switch ($errno) { case E_ERROR: $sNiveau = "PHP FATAL - "; break; case E_STRICT: if (EXCEPTION_DESACTIVE_STRICT_39944) return; $sNiveau = "PHP STRICT - "; break; case E_WARNING: $sNiveau = "PHP WARNING - "; if (strpos($errstr,'session_start()')===0) Fe81a7f9e('ERR_SESSION_START',session_save_path()); break; case E_NOTICE: if (EXCEPTION_DESACTIVE_NOTICE_VAR_DEPRECIATED && (strpos($errstr,'var ')!==false)) return; $sNiveau = "PHP NOTICE - "; break; case E_USER_ERROR: case E_USER_WARNING: case E_USER_NOTICE: $sNiveau = "PHP USER - "; case E_DEPRECATED: { if (strpos($errstr,"Methods with the same name as their class will not be constructors in a future version of PHP")===0) { return; } if (strpos($errstr,"create_function() is deprecated")!==false) { return; } $sNiveau = "PHP DEPRECATED - "; } break; default: } $sNiveau = "Exception : ".$sNiveau; $sMessage = $sNiveau.$errstr.', '.$errfile.' ('.$errline.')' . "\n<br>\n"; if (F977b2c2d()) { $_FMK_Exception->sDerniereErreurSystemeAttendue = $sMessage; return; } if (function_exists("WB_Test_Auto_Error_Callback")) { if (isset($GLOBALS['Ecriture_gbDBGINFO'])) call_user_func('WB_Test_Auto_Error_Callback',$errno, $errstr, $errfile, $errline); else echo $sMessage; return; } if (defined("FMK_Debug")) { call_user_func('FMK_Debug_Erreur_Callback',$errno, $errstr, $errfile, $errline); return; } if (!( PHP_ERREUR_MASQUE & $errno)) echo $sMessage; if (LOG_ERREUR) error_log($sMessage, 3, $_FMK_Exception->sErreurLog); if ($_FMK_Exception->bEstFatale) { die(); } } set_error_handler ("FMK_Erreur_Callback"); if (!defined("PHP_NIVEAU_ERREUR")) error_reporting(E_ALL | E_STRICT); else error_reporting(PHP_NIVEAU_ERREUR); ?>