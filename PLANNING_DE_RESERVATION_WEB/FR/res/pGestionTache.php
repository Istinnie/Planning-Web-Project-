<?php

global $WB_TabFnAjax;
TYPE_Include(TYPEWL_STRUCTURE);
WB_Include('WL/HF/HF.php');
WB_Include('HF.php');
Res_Include('COLVersion.php',RES_PROC_GLOBALES);
WB_Include('WL/VM/VM.php');
WB_Include('WL/PAGE/Page.php');
WB_Include('WL/VM/Tableau.php');
WB_Include('WL/COM/Com.php');
WB_Include('WL/STD/Std.php');
TYPE_Include(TYPEWL_ENTIER);
TYPE_Include(TYPEWL_CHAINE);
WB_Include('WL/MAT/Mat.php');
WB_Include('Engine.php');
function& DeclpGestionTache()
{
	
	$WB_NIVEAU_PILE=empileVM('pGestionTache');
	
	
	return _return ($_PHP_VAR_RETURN_);
}

lierVM('pGestionTache','bTacheSupprime','pGestionTache_bTacheSupprime',__FILE__);
function& pGestionTache_bTacheSupprime(&$tacheAgenda)
{
	if (!is_object($tacheAgenda))CreerType($tacheAgenda,'tacheAgenda',TYPEWL_DINO,array('CDinoRendezVous','',$tacheAgenda));
	$WB_NIVEAU_PILE=empileVM('pGestionTache','');
	
	
	HLitRecherchePremier(getRef('RESERVATION'),Rubrique('RESERVATION','IDRESERVATION'),VersPrimitif(GetProp($tacheAgenda,'Note')));
	;
	if (VersBooleen(HTrouve(getRef('RESERVATION'))))
	{
		if (VersBooleen(HSupprime(getRef('RESERVATION'))))
		{
			COL_Version_EtatDeVersion(getRef('RESERVATION'));
		}
		$_PHP_VAR_RETURN_=&getRef(getRef(true));
		return _return ($_PHP_VAR_RETURN_);
	}
	$_PHP_VAR_RETURN_=&getRef(getRef(false));
	return _return ($_PHP_VAR_RETURN_);
	return _return ($_PHP_VAR_RETURN_);
}

lierVM('pGestionTache','bTacheModifie','pGestionTache_bTacheModifie',__FILE__);
function& pGestionTache_bTacheModifie(&$tacheAgenda)
{
	if (!is_object($tacheAgenda))CreerType($tacheAgenda,'tacheAgenda',TYPEWL_DINO,array('CDinoRendezVous','',$tacheAgenda));
	$WB_NIVEAU_PILE=empileVM('pGestionTache','');
	
	
	CreerType($nIDPersonne,'nIDPersonne',TYPEWL_ENTIER,array(4,0));
	CreerType($sRessource,'sRessource',TYPEWL_CHAINE,'');
	HLitRecherchePremier(getRef('RESERVATION'),Rubrique('RESERVATION','IDRESERVATION'),VersPrimitif(GetProp($tacheAgenda,'Note')));
	if (VersBooleen(Operateur(2646566,getRef(ChaineOccurrence(VersPrimitif(GetProp($tacheAgenda,'Ressource')),'')),getRef(0))))
	{
		$sRessource->SetValeur(ExtraitChaine(VersPrimitif(GetProp($tacheAgenda,'Ressource')),getRef(2),getRef('')));
		$nIDPersonne->SetValeur(Val(VersPrimitif(Operateur(18440,$sRessource,2))));
	}
	else 
	{
		$nIDPersonne->SetValeur(GetProp($tacheAgenda,'Ressource'));
	}
	if (VersBooleen(HTrouve(getRef('RESERVATION'))))
	{
		Operateur(95,Rubrique('RESERVATION','CONTENURESERVATION'),GetProp($tacheAgenda,'Contenu'));
		Operateur(95,Rubrique('RESERVATION','DATEDEBUT'),GetProp($tacheAgenda,'DateDebut'));
		Operateur(95,Rubrique('RESERVATION','DATEFIN'),GetProp($tacheAgenda,'DateFin'));
		if (VersBooleen(HModifie(getRef('RESERVATION'))))
		{
			COL_Version_EtatDeVersion(getRef('RESERVATION'));
		}
	}
	else 
	{
		Operateur(95,Rubrique('RESERVATION','CONTENURESERVATION'),GetProp($tacheAgenda,'Contenu'));
		Operateur(95,Rubrique('RESERVATION','DATEDEBUT'),GetProp($tacheAgenda,'DateDebut'));
		Operateur(95,Rubrique('RESERVATION','DATEFIN'),GetProp($tacheAgenda,'DateFin'));
		if (VersBooleen(HAjoute(getRef('RESERVATION'))))
		{
			COL_Version_EtatDeVersion(getRef('RESERVATION'));
		}
		Operateur(95,GetProp($tacheAgenda,'Note'),Rubrique('RESERVATION','IDRESERVATION'));
	}
	return _return ($_PHP_VAR_RETURN_);
}

lierVM('pGestionTache','EnvoieMailGlobal','pGestionTache_EnvoieMailGlobal',__FILE__);
function& pGestionTache_EnvoieMailGlobal(&$Dest,&$ObjetMsq,&$ContenuMail)
{
	if (!is_object($Dest))CreerType($Dest,'Dest','Dest',$Dest);
	if (!is_object($ObjetMsq))CreerType($ObjetMsq,'ObjetMsq','ObjetMsq',$ObjetMsq);
	if (!is_object($ContenuMail))CreerType($ContenuMail,'ContenuMail','ContenuMail',$ContenuMail);
	$WB_NIVEAU_PILE=empileVM('pGestionTache','');
	
	
	CreerType($EtatEnvoi,'EtatEnvoi',TYPEWL_BOOLEEN,false);
	CreerType($Masession,'Masession',TYPEWL_DINO,null);
	Operateur(95,GetProp($Masession,'Nom'),getRef('istinnie.cda.cyroi@gmail.com'));
	Operateur(95,GetProp($Masession,'MotDePasse'),getRef('crxwmqlyygvlfnof'));
	Operateur(95,GetProp($Masession,'AdresseServeur'),getRef('smtp.gmail.com'));
	Operateur(95,GetProp($Masession,'Port'),getRef('587'));
	Operateur(95,GetProp($Masession,'Option'),getRef(2));
	if (VersBooleen(Operateur(38960,getRef())))
	{
		Info(getRef('Impossible de se connecter au serveur SMTP.'),VersPrimitif(getRef(ErreurInfo())));
	}
	CreerType($Monmessage,'Monmessage',TYPEWL_DINO,null);
	Operateur(95,GetProp($Monmessage,'AdresseExpediteur'),getRef('istinnie.cda.cyroi@gmail.com'));
	Operateur(95,GetProp($Monmessage,'Expediteur'),getRef('NOREPLY - Support Technique'));
	Operateur(95,GetProp($Monmessage,'Sujet'),$ObjetMsq);
	Operateur(95,GetProp($Monmessage,'Message'),getRef(ChaineConstruit('Bonjour	%1

=======================================================
Support Technique
-------------------------------------------------------
Entreprise : GIP CYROI (Recherche Santé Bio-innovation)
Adresse    : 2 rue Maxime Rivière, 97490 Sainte-Clotilde
Site web   : cyroi.re
=======================================================
',VersPrimitif($ContenuMail))));
	TableauAjoute(GetProp($Monmessage,'Destinataire'),$Dest);
	if (VersBooleen(Operateur(24866,getRef(EmailEnvoieMessage()),getRef(false))))
	{
		Info(VersPrimitif(Operateur(6166,getRef('Une erreur est survenue lors de la '),$ObjetMsq)),VersPrimitif(getRef(ErreurInfo(1))));
		$EtatEnvoi->SetValeur(getRef(false));
	}
	else 
	{
		Info(VersPrimitif(Operateur(6166,Operateur(6166,getRef('Le mail de '),$ObjetMsq),getRef(' est envoyé avec succès'))));
		$EtatEnvoi->SetValeur(getRef(true));
	}
	;
	$_PHP_VAR_RETURN_=&getRef($EtatEnvoi);
	return _return ($_PHP_VAR_RETURN_);
	return _return ($_PHP_VAR_RETURN_);
}

lierVM('pGestionTache','AsciiVersHexa','pGestionTache_AsciiVersHexa',__FILE__);
function& pGestionTache_AsciiVersHexa(&$ch)
{
	if (!is_object($ch))CreerType($ch,'ch',TYPEWL_CHAINE,$ch);
	$WB_NIVEAU_PILE=empileVM('pGestionTache','');
	
	
	CreerType($sChaineHexa,'sChaineHexa',TYPEWL_CHAINE,'');
	$_PHP_VAR_TMP_58=VersPrimitif(Taille(VersPrimitif($ch)));
	$_PHP_VAR_TMP_59=(isset($nCar) && is_object($nCar)) ? _clone($nCar): null;
	for ($_PHP_VAR_TMP_60=$nCar=&getRef(SetValeur($nCar,1));(1>0&&$_PHP_VAR_TMP_60<=$_PHP_VAR_TMP_58)||(1<0&&$_PHP_VAR_TMP_60>=$_PHP_VAR_TMP_58);$_PHP_VAR_TMP_60+=1,$nCar=$_PHP_VAR_TMP_60)
	{
		Operateur(28777,$sChaineHexa,getRef(NumeriqueVersChaine(VersPrimitif(getRef(Asc(VersPrimitif(Operateur(18432,$ch,GetValeur($nCar)))))),'02x')));
	}
	if (null!==$_PHP_VAR_TMP_59) { Operateur(95,$_PHP_VAR_TMP_59,$nCar); $nCar =& $_PHP_VAR_TMP_59; }
	$_PHP_VAR_RETURN_=&getRef($sChaineHexa);
	return _return ($_PHP_VAR_RETURN_);
	return _return ($_PHP_VAR_RETURN_);
}

lierVM('pGestionTache','HexaVersAscii','pGestionTache_HexaVersAscii',__FILE__);
function& pGestionTache_HexaVersAscii(&$sCh)
{
	if (!is_object($sCh))CreerType($sCh,'sCh',TYPEWL_CHAINE,$sCh);
	$WB_NIVEAU_PILE=empileVM('pGestionTache','');
	
	
	CreerType($sChaineHexa,'sChaineHexa',TYPEWL_CHAINE,Majuscule(VersPrimitif($sCh)));
	CreerType($sChaineAscii,'sChaineAscii',TYPEWL_CHAINE,'');
	CreerType($sChaineEntier,'sChaineEntier',TYPEWL_CHAINE,'');
	CreerType($nTaille,'nTaille',TYPEWL_ENTIER,array(4,PartieEntiere(VersPrimitif((Operateur(14354,getRef(Taille(VersPrimitif($sChaineHexa))),getRef(2)))))));
	CreerType($sChaineATraiter,'sChaineATraiter',TYPEWL_CHAINE,'');
	CreerType($s,'s',TYPEWL_CHAINE,'');
	CreerType($j,'j',TYPEWL_ENTIER,array(4,1));
	$_PHP_VAR_TMP_62=(isset($i) && is_object($i)) ? _clone($i): null;
	for ($_PHP_VAR_TMP_63=$i=&getRef(SetValeur($i,1));(1>0&&$_PHP_VAR_TMP_63<=VersPrimitif($nTaille))||(1<0&&$_PHP_VAR_TMP_63>=VersPrimitif($nTaille));$_PHP_VAR_TMP_63+=1,$i=$_PHP_VAR_TMP_63)
	{
		$sChaineATraiter->SetValeur(Milieu(VersPrimitif($sChaineHexa),VersPrimitif($j),getRef(2)));
		$j->SetValeur(Operateur(6166,$j,getRef(2)));
		Operateur(95,$sChaineEntier,Operateur(16398,getRef('	'),array($sChaineEntier,NumeriqueVersChaine(VersPrimitif(getRef(HexaVersEntier(VersPrimitif($sChaineATraiter))))))));
	}
	if (null!==$_PHP_VAR_TMP_62) { Operateur(95,$_PHP_VAR_TMP_62,$i); $i =& $_PHP_VAR_TMP_62; }
	for ($s=&WB_Boucle_Pour_Tout_Chaine($_PHP_VAR_TMP_64,VersPrimitif($sChaineEntier),getRef(null),getRef(null),'	',DepuisDebut);$_PHP_VAR_TMP_64->bContinuer();$_PHP_VAR_TMP_64->continuer())
	{
	Operateur(28777,$sChaineAscii,getRef(Caract(VersPrimitif(getRef(Val(VersPrimitif($s)))))));
	}unset($_PHP_VAR_TMP_64);
	$_PHP_VAR_RETURN_=&getRef($sChaineAscii);
	return _return ($_PHP_VAR_RETURN_);
	return _return ($_PHP_VAR_RETURN_);
}
?>