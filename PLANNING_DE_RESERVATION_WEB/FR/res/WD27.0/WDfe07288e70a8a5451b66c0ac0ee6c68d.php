<?php
//27.0.2.0 IHM/Champ/Image/ImageClicable.php GF
//VersionVI: 01F270103n
//(c) 2005-2012 PC SOFT - Release
 if (!defined('__INC__IHM/Champ/Image/Image.php')) { define('__INC__IHM/Champ/Image/Image.php',true); include_once(WB_INCLUDE_PATH.'WD6fa5e60faa5f33f433b54c2f53b7cef3.php'); } class CImageClicable extends CImage { var $EstBouton; function __construct() { parent::__construct(); $this->EstBouton = true; } function& GetType() { return getRef(22); } } ?>