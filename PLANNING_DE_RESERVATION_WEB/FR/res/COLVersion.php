<?php

global $WB_TabFnAjax;
TYPE_Include(TYPEWL_STRUCTURE);
WB_Include('WL/STD/Std.php');
WB_Include('WL/HF/HF.php');
WB_Include('HF.php');
function& DeclCOLVersion()
{
	
	$WB_NIVEAU_PILE=empileVM('COL_Version');
	
	
	return _return ($_PHP_VAR_RETURN_);
}

lierVM('COL_Version','EtatDeVersion','COL_Version_EtatDeVersion',__FILE__);
function& COL_Version_EtatDeVersion(&$nomDeTable)
{
	if (!is_object($nomDeTable))CreerType($nomDeTable,'nomDeTable',TYPEWL_CHAINE,$nomDeTable);
	$WB_NIVEAU_PILE=empileVM('COL_Version','');
	
	
	CreerType($hHeureModification,'hHeureModification',TYPEWL_HEURE,HeureSys());
	HRAZ(getRef('VERSION'), getRef('*'));
	HLitRecherchePremier(getRef('VERSION'),Rubrique('VERSION','NomTable'),VersPrimitif($nomDeTable));
	if (VersBooleen(HTrouve(getRef('VERSION'))))
	{
		Operateur(95,Rubrique('VERSION','DateHeureModification'),getRef(DateHeureSys()));
		HModifie(getRef('VERSION'));
	}
	return _return ($_PHP_VAR_RETURN_);
}
?>