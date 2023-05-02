<?php
//27.0.2.0 WL/ERREUR/Erreur.php GF
//VersionVI: 01F270103n
//(c) 2005-2012 PC SOFT - Release
 if (!defined('__INC__FMK/Exception/Pile.php')) { define('__INC__FMK/Exception/Pile.php',true); include_once(WB_INCLUDE_PATH.'WDc8aea829013863fbce9e58dbd520d694.php'); } function F7e37c750() { $clChargeur =& FMK_Chargeur(); return '<html><head><title></title><meta http-equiv="refresh" content= "0; URL='.$clChargeur->F06090cce('Webservice.php?_WB_='.WB_MONPROJET.'&_WS_=PAGEERREUR&').'%s"></head><body></body></html>'; } if ( (!isset($_SERVER['PATH_INFO'])) && (isset($_SERVER['ORIG_PATH_INFO']))) $_SERVER['PATH_INFO'] = $_SERVER['ORIG_PATH_INFO']; function Fd1a8f5c2($bRetournerLaProcedureAppelante = false) { $pile = debug_backtrace(); $bForce = false; foreach ($pile as $niveau) { if (($bForce) || ( (isset($niveau['file'])) && (utf8_strpos($niveau['file'],F8df7b692(realpath(WB_INCLUDE_PATH)))===false) ) ) { if (!$bRetournerLaProcedureAppelante) return basename($niveau['file'],'.php'); if ($bForce) { return Fac06269c( $niveau['function'] ); } $bForce = true; continue; } } return ''; } function ErreurTypePremierParametre( $szNomPCode, $szNomMethode, $szNomClasseAttendu, $szTypeRecu ) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = utf8_strtr( $szNomPCode, " ", "+" ) ; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()) ; $szRequete .= "&TypeErreur=TypePremierParametre" ; $szRequete .= "&NomFct=".urlencode($szNomMethode)."&NomTypeAttendu=".urlencode($szNomClasseAttendu)."&NomTypeRecu=".urlencode($szTypeRecu) ; Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurTypePrimitifInnatendu( $szNomPCode, $szTypeRecu ) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = utf8_strtr( $szNomPCode, " ", "+" ) ; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=TypePrimitifInnatendu&" ; $szRequete .= "&TypeRecu=".urlencode($szTypeRecu) ; Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurObjetInnatendu( $szNomPCode, $szObjetAttendu, $szObjetRecu ) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = utf8_strtr( $szNomPCode, " ", "+" ) ; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()) ; $szRequete .= "&TypeErreur=ObjetInnatendu" ; $szRequete .= "&ObjetAttendu=".urlencode($szObjetAttendu)."&ObjetRecu=".urlencode($szObjetRecu) ; Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurProprieteInconnue( $szNomPCode, $szNomProp, $szNomClasse ) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = utf8_strtr( $szNomPCode, " ", "+" ) ; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()) ; $szRequete .= "&TypeErreur=ProprieteInconnue" ; $szRequete .= "&NomProp=".urlencode($szNomProp)."&NomClasse=".urlencode($szNomClasse); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurProprieteLectureSeule( $szNomPCode, $szNomProp, $szNomClasse ) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = utf8_strtr( $szNomPCode, " ", "+" ) ; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()) ; $szRequete .= "&TypeErreur=ProprieteLectureSeule" ; $szRequete .= "&NomProp=".urlencode($szNomProp)."&NomClasse=".urlencode($szNomClasse); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurTypeIncorrectSubStr( $szNomPCode ) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = utf8_strtr( $szNomPCode, " ", "+" ) ; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=TypeIncorrectSubStr" ; Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurFichierHFInconnu($sNomMethode, $sNomFichier ) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=FichierHFInconnu" ; $szRequete .= "&NomFichierHF=".urlencode($sNomFichier); $szRequete .= "&NomMethode=".urlencode($sNomMethode); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurRubriqueHFInconnue($sNomMethode, $sNomFichier, $sNomRubrique ) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=RubriqueHFInconnue" ; $szRequete .= "&NomFichierHF=".urlencode($sNomFichier); $szRequete .= "&NomRubriqueHF=".urlencode($sNomRubrique); $szRequete .= "&NomMethode=".urlencode($sNomMethode); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurNoConnexion($sNomMethode) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=NoConnexion" ; $szRequete .= "&NomMethode=".urlencode($sNomMethode); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurEchecConnexion($sNomMethode, $sBase, $sSource, $sMessage) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=EchecConnexion" ; $szRequete .= "&NomBase=".urlencode($sBase); $szRequete .= "&NomSource=".urlencode($sSource); $szRequete .= "&MessageBase=".urlencode($sMessage); $szRequete .= "&NomMethode=".urlencode($sNomMethode); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurAucunParcours($sNomMethode, $sNomRubrique, $sNomFichier) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=AucunParcours" ; $szRequete .= "&NomRubriqueHF=".urlencode($sNomRubrique); $szRequete .= "&NomFichierHF=".urlencode($sNomFichier); $szRequete .= "&NomMethode=".urlencode($sNomMethode); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurAucunEnregCourant($sNomMethode, $sNomFichier) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=AucunEnregCourant" ; $szRequete .= "&NomFichierHF=".urlencode($sNomFichier); $szRequete .= "&NomMethode=".urlencode($sNomMethode); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurRequeteInvalide($sNomMethode, $sRequete) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=RequeteInvalide" ; $szRequete .= "&Requete=".urlencode($sRequete); $szRequete .= "&NomMethode=".urlencode($sNomMethode); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurIdAutoNegatif($sNomMethode, $sNomIdAuto, $sNomFichier) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=IdAutoNegatif" ; $szRequete .= "&NomIdAuto=".urlencode($sNomIdAuto); $szRequete .= "&NomFichierHF=".urlencode($sNomFichier); $szRequete .= "&NomMethode=".urlencode($sNomMethode); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurNumEnregNonValide($sNomMethode) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=NumEnregInvalide" ; $szRequete .= "&NomMethode=".urlencode($sNomMethode); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurPositionInvalide($sNomMethode) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=PositionInvalide" ; $szRequete .= "&NomMethode=".urlencode($sNomMethode); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurTypeParam($sNomMethode, $sTypeParam) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=TypeParam" ; $szRequete .= "&TypeParam=".urlencode($sTypeParam); $szRequete .= "&NomMethode=".urlencode($sNomMethode); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurConnexionInconnue($sNomMethode, $sNomConnexion) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=ConnexionInconnue" ; $szRequete .= "&NomConnexion=".urlencode($sNomConnexion) ; $szRequete .= "&NomMethode=".urlencode($sNomMethode); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurInterne() { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=ErreurInterne" ; Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurPHP($sMsgWL, $sMsgPHP) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&TypeErreur=ErreurPHP" ; $szRequete .= "&Param1=".urlencode($sMsgWL); $szRequete .= "&Param2=".urlencode($sMsgPHP); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurHF($sTypeErreur, $sNomMethode ="") { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&NomMethode=".urlencode($sNomMethode); $szRequete .= "&TypeErreur=".urlencode($sTypeErreur); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurWL($sTypeErreur, $sNomMethode ="", $Option = null) { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&NomMethode=".urlencode($sNomMethode); $szRequete .= "&TypeErreur=".urlencode($sTypeErreur); if (isset($Option)) { $szRequete .= "&Option=" . urlencode($Option); } Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurHF_1_Param($sTypeErreur, $Param1, $sNomMethode="") { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&NomMethode=".urlencode($sNomMethode); $szRequete .= "&TypeErreur=".urlencode($sTypeErreur); $szRequete .= "&Param1=".urlencode($Param1); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurWL_1_Param($sTypeErreur, $Param1, $sNomMethode="") { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&NomMethode=".urlencode($sNomMethode) ; $szRequete .= "&TypeErreur=".urlencode($sTypeErreur); $szRequete .= "&Param1=".urlencode($Param1); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurHF_2_Param($sTypeErreur, $Param1, $Param2, $sNomMethode="") { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&NomMethode=".urlencode($sNomMethode); $szRequete .= "&TypeErreur=".urlencode($sTypeErreur); $szRequete .= "&Param1=".urlencode($Param1); $szRequete .= "&Param2=".urlencode($Param2); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurWL_2_Param($sTypeErreur, $Param1, $Param2, $sNomMethode="") { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&NomMethode=".urlencode($sNomMethode); $szRequete .= "&TypeErreur=".urlencode($sTypeErreur); $szRequete .= "&Param1=".urlencode($Param1); $szRequete .= "&Param2=".urlencode($Param2); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurWL_3_Param($sTypeErreur, $Param1, $Param2, $Param3, $sNomMethode="") { $gszHtmlRedirect = F7e37c750(); $szNomPCode = ""; $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()); $szRequete .= "&NomMethode=".urlencode($sNomMethode); $szRequete .= "&TypeErreur=".urlencode($sTypeErreur); $szRequete .= "&Param1=".urlencode($Param1); $szRequete .= "&Param2=".urlencode($Param2); $szRequete .= "&Param3=".urlencode($Param3); Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurGenerique() { $gszHtmlRedirect = F7e37c750(); $szRequete = "TypeErreur=".urlencode("ErreurGenerique"); $szRequete .= "&NomFichier=" . urlencode(Fd1a8f5c2()); $szRequete .= "&NomProc=" . urlencode(Fd1a8f5c2(true)); $args = func_get_args(); $i=0; while (isset($args[$i])) { if (is_scalar($args[$i])) { $szRequete .= "&Param".$i."=".urlencode($args[$i]); } elseif (XVER_DEBUG) { if (is_array($args[$i])) { ob_start(); foreach ($args[$i] as $clVar) { var_dump($clVar); } $data = ob_get_contents(); ob_end_clean(); $szRequete .= "&DebugInfo=" . urlencode($data); } } ++$i; } Ffccee47a($gszHtmlRedirect, $szRequete ); } function ErreurCodeCompileAvecErreur( $szNomPCode , $sMessageErreur = null) { $gszHtmlRedirect = F7e37c750(); $szRequete = "NomPCode=".urlencode($szNomPCode)."&NomFichier=".urlencode(Fd1a8f5c2()) ; $szRequete .= "&TypeErreur=CodeCompileAvecErreur" ; if (isset($sMessageErreur)) $szRequete .= "&MsgErreur=" .urlencode($sMessageErreur) ; Ffccee47a($gszHtmlRedirect, $szRequete ); } function Ffccee47a($sHtmlRedirect, $sRequete) { if (EXCEPTION_DUMP_PILE) F77f6c673(); $tabparams = array(); utf8_parse_str($sRequete,$tabparams); $pile = debug_backtrace(); $sMessageErreur = F6f5f37ec($tabparams); $clVMMgr =& F08aafbb0(); $sEnsemble = $tabparams['NomFichier']; global $MonProjet; if (isset($MonProjet)) { if (F0728da76($tabparams['NomFichier'],'-prj')) { $sEnsemble = VM_MONPROJET; $sNomEnsemble = basename($tabparams['NomFichier'],'-prj'); } } $clVM =& $clVMMgr->Fe26ffff2($sEnsemble,false); if (isset($clVM)) { if ($clVM->Fe7b58414()) { $sNomEnsemble = $clVM->getNom(); $sFormat = Fc34ec142('PAGEERREUR_ENTETE_NOM_COLLECTION'); } elseif($clVM->Fee6cd3ea()) { $sNomEnsemble = $clVM->getNom(); $sFormat = Fc34ec142('PAGEERREUR_ENTETE_NOM_PAGE'); } else { $sFormat = Fc34ec142('PAGEERREUR_ENTETE_NOM_PROJET'); $tabparams['NomPCode'] = ''; $tabparams['NomProc'] = ''; $tabparams['NomMethode'] = ''; } } else { $sNomEnsemble = $tabparams['NomFichier']; $sFormat = Fc34ec142('PAGEERREUR_ENTETE_NOM_PAGE'); } $sEntete = ( FMK_ChaineConstruit($sFormat, Fb85b537b($sNomEnsemble) )); $Pcode = ''; if(!empty($tabparams['NomPCode'])) { $Pcode = ( FMK_ChaineConstruit(Fc34ec142('PAGEERREUR_ENTETE_NOM_PCODE'),Fb85b537b($tabparams['NomPCode']) ) ); } if(!empty($tabparams['NomProc'])) { $Pcode = ( FMK_ChaineConstruit(Fc34ec142('PAGEERREUR_ENTETE_NOM_PCODE'),Fb85b537b($tabparams['NomProc']) )); } if(!empty($tabparams['NomMethode'])) { $Pcode = ( FMK_ChaineConstruit(Fc34ec142('PAGEERREUR_ENTETE_NOM_FCT'),Fb85b537b($tabparams['NomMethode']) )); } $sTraceMessage = Ff11192e9(); $sExtra = ''; if (ASSERT_PILE_TEXTAREA) { $sExtra.= "<h1>PILE :</h1><textarea cols=150 rows=25 STYLE=\"width: 800px\">"; ob_start(); print_r($pile); $pile_print = ob_get_contents(); ob_end_clean(); $sExtra.= $pile_print; $sExtra.= "</textarea>"; } if (ASSERT_SESSION_TEXTAREA) { $sExtra.= "<h1>SESSION :</h1><textarea cols=150 rows=25 STYLE=\"width: 800px\">"; $sExtra.= Fbc7b26dd($_SESSION); $sExtra.= "</textarea>"; } $tabTagsPageErreur = array( 'ENTETE' => $sEntete, 'PROC' => $Pcode, 'MESSAGE' => $sMessageErreur, 'TRACE' => $sTraceMessage, 'PILE' => ((!XVER_DEBUG && !EXCEPTION_PILE_RELEASE) ? null : $pile), 'EXTRA' => $sExtra, ); F4df97bb5($sMessageErreur,$tabTagsPageErreur); } function F1d654010($tabTagsPageErreur) { $GLOBALS['bErreurFatale'] = true; $tabTagsPageErreur['ENCODAGE'] = (UNICODE_PAGE_UTF8) ? 'UTF-8' : 'ISO-8859-1'; $tabTagsPageErreur['TITRE'] = Fc34ec142('PAGEERREUR_ENTETE_TITRE_PAGE'); if(Feef890d7() && (!isset($_GET['WD_ACTION_']) || strpos($_GET['WD_ACTION_'],'UPLOAD')!==0)) { header("WebDevRedirPHP: 1"); global $MaPage; if ($MaPage->bAvecContexte) { $tabKeys = array_keys( $tabTagsPageErreur ); $nOccurrence = count( $tabKeys ); $_SESSION['PAGEERREUR'] = array(); for($nKey = 0; $nKey < $nOccurrence; $nKey++) { $pclKey = $tabKeys[ $nKey ]; $_SESSION['PAGEERREUR'][$pclKey] = $tabTagsPageErreur[$pclKey]; unset($tabTagsPageErreur[$pclKey]); } } Ff49de04d('PAGEERREUR'); $tabTagsPageErreur['PAGEERREUR'] = EnvGet('PAGEERREUR'); if (UNICODE_PAGE_UTF8) $tabTagsPageErreur['UNICODE_PAGE_UTF8'] = '1'; foreach ($tabTagsPageErreur as $sCle => $valeur) { $tabTagsPageErreur[$sCle] = $sCle.'='.urlencode(base64_encode($valeur)); } ob_end_clean(); $clChargeur =& FMK_Chargeur(); $sUrlPageErreur = $clChargeur->F06090cce( 'Webservice.php?_WB_='.WB_MONPROJET.'&_WS_=PAGEERREUR'); if (count($tabTagsPageErreur,COUNT_NORMAL)>0) $sUrlPageErreur.='&'.utf8_implode('&',$tabTagsPageErreur); die($sUrlPageErreur); } else { Ff49de04d('PAGEERREUR'); FMK_Charge('WL/ERREUR/PageErreur.php',false); $sNomPageErrPerso = EnvGet('PAGEERREUR'); if ($sNomPageErrPerso!==null) { Ff49de04d('EXTENSION'); $clTemplate = new CTemplatePageErreurPerso($sNomPageErrPerso. EnvGet('EXTENSION_STATIQUE')); } else { $clTemplate = new CTemplatePageErreur(); } $sCodeHTMLFinal = $clTemplate->F1d08286f($tabTagsPageErreur); ob_end_flush(); die( $sCodeHTMLFinal ) ; } } function Fb85b537b( $texte ) { return "<B>" . $texte . "</B>" ; } function F6f5f37ec($tabParams) { switch( $tabParams["TypeErreur"] ) { case "TypePremierParametre" : return ( FMK_ChaineConstruit( Fc34ec142("ERROR_TYPEPREMIERPARAMETRE"), $tabParams["NomFct"], $tabParams["NomTypeAttendu"], $tabParams["NomTypeRecu"] ) ); break ; case "ProprieteInconnue": return ( FMK_ChaineConstruit( Fc34ec142("ERROR_PROPRIETEINCONNUE"), Fb85b537b($tabParams["NomProp"]), Fb85b537b($tabParams["NomClasse"]), Fb85b537b($tabParams["NomClasse"]), Fb85b537b($tabParams["NomProp"]) ) ); break; case "ProprieteLectureSeule": return ( FMK_ChaineConstruit( Fc34ec142("ERROR_PROPRIETELECTURESEULE"), Fb85b537b($tabParams["NomProp"]), Fb85b537b($tabParams["NomClasse"]), Fb85b537b($tabParams["NomClasse"]), Fb85b537b($tabParams["NomProp"]) ) ); break; case "CodeCompileAvecErreur": return ( FMK_ChaineConstruit( Fc34ec142("ERROR_CODECOMPILEAVECERREUR"), Fb85b537b($tabParams["NomPCode"]) ) ); if (isset($tabParams['MsgErreur'])){ return ('<br>'.Fb85b537b('MsgErreur')); } break; case "TypeIncorrectSubStr": return ( Fc34ec142("ERROR_TYPEINCORRECTSUBSTR") ); break; case "FichierHFInconnu": return ( FMK_ChaineConstruit( Fc34ec142("ERR_FICHIER_INCONNU"), Fb85b537b($tabParams["NomFichierHF"]) ) ); break; case "RubriqueHFInconnue": return ( FMK_ChaineConstruit( Fc34ec142("ERR_RUBRIQUE_INCONNUE"), Fb85b537b($tabParams["NomFichierHF"]), Fb85b537b($tabParams["NomRubriqueHF"]) ) ); break; case "NoConnexion": return ( FMK_ChaineConstruit( Fc34ec142("ERR_AUCUNE_CONNEXION") ) ); break; case "EchecConnexion": return ( FMK_ChaineConstruit( Fc34ec142("ERR_ECHEC_CONNEXION"), Fb85b537b($tabParams["NomBase"]), Fb85b537b($tabParams["NomSource"]), Fb85b537b($tabParams["MessageBase"]) ) ); break; case "AucunParcours": return ( FMK_ChaineConstruit( Fc34ec142("ERR_AUCUN_PARCOURS"), Fb85b537b($tabParams["NomRubriqueHF"]), Fb85b537b($tabParams["NomFichierHF"])) ); break; case "AucunEnregCourant": return ( FMK_ChaineConstruit( Fc34ec142("ERR_AUCUN_ENREG_COURANT"), Fb85b537b($tabParams["NomFichierHF"])) ); break; case "RequeteInvalide": return ( FMK_ChaineConstruit( Fc34ec142("ERR_REQUETE_INVALIDE"), Fb85b537b($tabParams["Requete"])) ); break; case "IdAutoNegatif": return ( FMK_ChaineConstruit( Fc34ec142("ERR_IDAUTO_NEGATIF"), Fb85b537b($tabParams["NomIdAuto"]), Fb85b537b($tabParams["NomFichierHF"]) ) ); break; case "NumEnregInvalide": return ( FMK_ChaineConstruit( Fc34ec142("ERR_NUMENREG_INVALIDE") ) ); break; case "PositionInvalide": return ( FMK_ChaineConstruit( Fc34ec142("ERR_POSITION_INVALIDE") ) ); break; case "TypeParam": return ( FMK_ChaineConstruit( Fc34ec142("ERR_TYPE_PARAM"), Fb85b537b($tabParams["TypeParam"]) ) ); break; case "ConnexionInconnue": return ( FMK_ChaineConstruit( Fc34ec142("ERR_CONNEXION_INCONNUE"), Fb85b537b($tabParams["NomConnexion"]) ) ); break; case "AucuneAnalyse": return ( FMK_ChaineConstruit( Fc34ec142("ERR_AUCUNE_ANALYSE")) ); break; case "AnalyseNonTrouvee": return ( FMK_ChaineConstruit( Fc34ec142("ERR_ANALYSE_NON_TROUVEE"), Fb85b537b($tabParams["Param1"]) ) ); break; case "DernierFichier": return ( Fc34ec142("ERR_DERNIER_FICHIER")); break; case "DerniereRubrique": return ( Fc34ec142("ERR_DERNIERE_RUBRIQUE")); break; case "OperationInterditeCleComposee": return ( FMK_ChaineConstruit( Fc34ec142("ERR_OPER_INTERDITE_CLE_COMP"), Fb85b537b($tabParams["Param1"]) ) ); break; case "NbEnregInvalide": return ( Fc34ec142("ERR_NB_ENREG_INVALIDE")); break; case "PageEnCours": return FMK_ChaineConstruit( Fc34ec142("ERR_PAGE_EN_COURS"), Fb85b537b($tabParams["Param1"])); break; case "ErreurInterne": return ( Fc34ec142("ERR_ERREUR_INTERNE") ); break; case "ErreurFiltreQuoteManquante" : return ( Fc34ec142("ERR_FILTRE_INIT_FILTRE")."<BR />".Fc34ec142("ERR_FILTRE_QUOTE_MANQUANTE")); break; case "ERR_HF_PARCOURS_CLE_COMPOSEE_VALEUR_SIMPLE" : return ( FMK_ChaineConstruit( Fc34ec142("ERR_HF_PARCOURS_CLE_COMPOSEE_VALEUR_SIMPLE"), Fb85b537b($tabParams["Param1"]) ) ); break; case "ErreurFiltreMotInnatendu" : return ( Fc34ec142("ERR_FILTRE_INIT_FILTRE")."<BR />".FMK_ChaineConstruit( Fc34ec142("ERR_FILTRE_MOT_INNATENDU"), Fb85b537b($tabParams["Param1"]) ) ); break; case "ErreurFiltreRubriqueInconnue" : return ( Fc34ec142("ERR_FILTRE_INIT_FILTRE")."<BR />".FMK_ChaineConstruit( Fc34ec142("ERR_RUBRIQUE_INCONNUE"), Fb85b537b($tabParams["Param1"]), Fb85b537b($tabParams["Param2"]) ) ); break; case "ErreurFiltreOperateurInterdit" : return ( Fc34ec142("ERR_FILTRE_INIT_FILTRE")."<BR />".FMK_ChaineConstruit( Fc34ec142("ERR_FILTRE_OPERATEUR_INTERDIT"), Fb85b537b($tabParams["Param1"]) ) ); break; case "ErreurFiltreInit" : return ( Fc34ec142("ERR_FILTRE_INIT_FILTRE") ); break; case "ErreurFiltreClauseFrom" : return ( Fc34ec142("ERR_FILTRE_INIT_FILTRE")."<BR />".FMK_ChaineConstruit( Fc34ec142("ERR_FILTRE_CLAUSE_FROM"), Fb85b537b($tabParams["Param1"]) ) ); break; case "ErreurRubriqueMemoBinaire" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_RUBRIQUE_MEMO_BINAIRE"), Fb85b537b($tabParams["Param1"]), Fb85b537b($tabParams["Param2"]))); break; case "ErreurAccesFichierExterne" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_ACCES_FICHIER_EXTERNE"), Fb85b537b($tabParams["Param1"]))); break; case "ErreurParamHExecuteRequete" : return ( Fc34ec142("ERR_PARAM_HEXECUTE_REQUETE")); break; case "ErreurClauseFrom" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_ECHEC_INIT_REQUETE")."<BR />".Fc34ec142("ERR_CLAUSE_FROM_INVALIDE"), Fb85b537b($tabParams["Param1"]) ) ); break; case "ErreurClauseSelect" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_ECHEC_INIT_REQUETE")."<BR />".Fc34ec142("ERR_CLAUSE_SELECT_INVALIDE"), Fb85b537b($tabParams["Param1"]) ) ); break; case "ErreurRequeteNonInitialisee" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_REQUETE_NON_INITIALISEE"), Fb85b537b($tabParams["Param1"]) ) ); break; case "ErreurOperationNonSupportee" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_OPERATION_NON_SUPPORTEE") ) ); break; case "ErreurExecRequete" : return ( FMK_ChaineConstruit("%1 <BR /> %2", utf8_stripslashes($tabParams["Param1"]), utf8_stripslashes($tabParams["Param2"]))); break; case "ErreurVersionServeurMySQL" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_VERSION_SERVEUR_MYSQL"), $tabParams["Param1"])); break; case "ErreurParametreRequete" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_PARAMETRE_REQUETE"))); break; case "ErreurParametreRequete2" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_PARAMETRE_REQUETE_2"), $tabParams["Param1"])); break; case "ErreurTypeBaseNonSupporte" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_TYPE_BASE_NON_SUPPORTE"), $tabParams["Param1"], $tabParams["Param2"])); break; case "ErreurTypeTableau" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_TYPE_TABLEAU"))); break; case "ErreurIndiceTableau" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_INDICE_TABLEAU"), $tabParams["Param1"], $tabParams["Param2"], $tabParams["Param3"])); break; case "ErreurChronoInconnu" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_CHRONO_INCONNU"), $tabParams["Param1"])); break; case "ErreurMatriceInvalide" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_MATRICE_INVALIDE"))); break; case "ErreurMatriceDimension" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_MATRICE_DIMENSION"))); break; case "ErreurMatricePositionInvalide" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_MATRICE_POSITION_INVALIDE"))); break; case "ErreurMatriceIndiceInvalide" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_MATRICE_INDICE_INVALIDE"))); break; case "ErreurHTTPConnexionServeur" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_HTTP_CONNECTION_SERVEUR"),$tabParams['Option'])); break; case "ErreurZoneMemoireNonCreee" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_ZONE_MEMOIRE_NON_CREEE"))); break; case "ErreurZoneMemoireInexistante" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_ZONE_MEMOIRE_INEXISTANTE"))); break; case "ErreurDocXMLExistant" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_DOC_XML_EXISTANT"), $tabParams["Param1"])); break; case "ErreurDocXMLInexistant" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_DOC_XML_INEXISTANT"), $tabParams["Param1"])); break; case "ErreurValeurParam" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_VALEUR_PARAM"), $tabParams["Param1"])); break; case "ErreurSocketNumPortInvalide" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_SOCKET_NUM_PORT_INVALIDE"), $tabParams["Param1"])); break; case "ErreurNomSocketVide" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_SOCKET_NOM_SOCKET_VIDE"))); break; case "ErreurSocketInexistante" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_SOCKET_INEXISTANTE"), $tabParams["Param1"])); break; case "ErreurSocketExistante" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_SOCKET_EXISTANTE"), $tabParams["Param1"], $tabParams["Param2"])); break; case "ErreurSocketModeTransmissionInvalide" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_SOCKET_MODE_TRANS_INVALIDE"))); break; case "ErreurProcedureInconnue" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_PROCEDURE_INCONNUE"), $tabParams["Param1"])); break; case "ErreurProcedureInconnueAjax" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_PROCEDURE_INCONNUE_AJAX"), $tabParams["Param1"])); break; case "ErreurNbParametreProcedure" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_NB_PARAM_PROCEDURE"), $tabParams["Param1"], $tabParams["Param2"], $tabParams["Param3"])); break; case "ErreurFonctionInterditeAjax" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_FONC_INTERDITE_AJAX"), $tabParams["Param1"])); break; case "ErreurAttributZRInvalide" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_ZRTRIE_BADATTRIB"), $tabParams["Param1"])); break; case "ErreurPHP" : return ( FMK_ChaineConstruit(Fc34ec142("ERR_PHP"),$tabParams['Param1'],$tabParams['Param2'])); break; case "ErreurGenerique" : $i=0; $sRetour = ''; while(isset($tabParams['Param'.$i])) { $sRetour.= ( $tabParams['Param'.($i++)]."<br>"); } if (isset($tabParams['DebugInfo'])) $sRetour.= ( "<hr>" . $tabParams['DebugInfo']); return $sRetour; break; case "TypePrimitifInnatendu" : case "ObjetInnatendu" : default: return ( Fc34ec142("ERROR_INCONNUE") ); break ; } } ?>