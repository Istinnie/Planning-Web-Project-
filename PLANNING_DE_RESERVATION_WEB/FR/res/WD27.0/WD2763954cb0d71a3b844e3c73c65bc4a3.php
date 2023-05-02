<?php
//27.0.2.0 FMK/Chaine/Conversion.php GF
//VersionVI: 01F270103n
//(c) 2005-2012 PC SOFT - Release
 define('FMK_Chaine_Conversion',true); define('UNICODE_CHARSET_CONVERSION' ,'UTF-32'); define('CHARSET_PAGE', UNICODE_PAGE_UTF8 ? 'UTF-8' : 'ISO-8859-1'); define('UNICODE_REGEXP' ,UNICODE_PAGE_UTF8 ? 'u' : ''); if (!defined('__INC__FMK/Chaine.php')) { define('__INC__FMK/Chaine.php',true); include_once(WB_INCLUDE_PATH.'WD55acb2e708e26f23cb8956cd93e98123.php'); } if (!defined('__INC__FMK/Dependance.php')) { define('__INC__FMK/Dependance.php',true); include_once(WB_INCLUDE_PATH.'WDb98029e1a3f05e7ed504ba0a18a9dea8.php'); } if (!defined('__INC__FMK/Pear/PEAR.php')) { define('__INC__FMK/Pear/PEAR.php',true); include_once(WB_INCLUDE_PATH.'WD1d5ce3b8322119ec5bb186d0cf889fcc.php'); } $cp1252_map = array( "\xc2\x80" => "\xe2\x82\xac", "\xc2\x82" => "\xe2\x80\x9a", "\xc2\x83" => "\xc6\x92", "\xc2\x84" => "\xe2\x80\x9e", "\xc2\x85" => "\xe2\x80\xa6", "\xc2\x86" => "\xe2\x80\xa0", "\xc2\x87" => "\xe2\x80\xa1", "\xc2\x88" => "\xcb\x86", "\xc2\x89" => "\xe2\x80\xb0", "\xc2\x8a" => "\xc5\xa0", "\xc2\x8b" => "\xe2\x80\xb9", "\xc2\x8c" => "\xc5\x92", "\xc2\x8e" => "\xc5\xbd", "\xc2\x91" => "\xe2\x80\x98", "\xc2\x92" => "\xe2\x80\x99", "\xc2\x93" => "\xe2\x80\x9c", "\xc2\x94" => "\xe2\x80\x9d", "\xc2\x95" => "\xe2\x80\xa2", "\xc2\x96" => "\xe2\x80\x93", "\xc2\x97" => "\xe2\x80\x94", "\xc2\x98" => "\xcb\x9c", "\xc2\x99" => "\xe2\x84\xa2", "\xc2\x9a" => "\xc5\xa1", "\xc2\x9b" => "\xe2\x80\xba", "\xc2\x9c" => "\xc5\x93", "\xc2\x9e" => "\xc5\xbe", "\xc2\x9f" => "\xc5\xb8" ); $cp1252_map_flip = array_flip($cp1252_map); function _cp1252_to_utf8($str) { global $cp1252_map; return is_string($str) ? utf8_strtr(utf8_encode($str), $cp1252_map) : $str; } function _cp1252_utf8_to_iso($str) { global $cp1252_map_flip ; return is_string($str) ? utf8_decode( utf8_strtr($str, $cp1252_map_flip ) ) : $str; } function Fd7624002($s) { return UNICODE_PAGE_UTF8 ? _cp1252_to_utf8($s) : $s; } function F55402159($s) { return UNICODE_PAGE_UTF8 ? _cp1252_utf8_to_iso($s) : $s; } function Fee7ba3f9($s) { return UNICODE_PAGE_UTF8 ? $s : _cp1252_to_utf8($s); } function F5b94f193($s){ return UNICODE_PAGE_UTF8 ? _cp1252_utf8_to_iso($s) : $s; } function F2db22222($obj,$f) { if (is_object($obj)) { $out = new stdClass(); $keys = array_keys(get_object_vars($obj)); array_walk($keys , function($item) use ($obj,$f,&$out) { $out->{$f($item)} = F2db22222($obj->$item,$f); }); return $out; } elseif (is_array($obj)) { $out = array(); $keys = array_keys($obj); array_walk($keys , function($item) use ($obj,$f,&$out) { $out[$item] = F2db22222($obj[$item],$f); }); return $out; } else { return $f($obj); } } if (false === UNICODE_PAGE_UTF8) { function F9486bf1a($s) { return $s; } function F8df7b692($s) { return $s; } function Fa68cecb0($s) { return PHPVERSION_5 ? _cp1252_to_utf8($s) : $s; } function F644af0b0($s) { if (is_bool($s)) return $s; if (is_array($s)) { $n = count($s,COUNT_NORMAL); for($i=0; $i<$n; ++$i) { $s[$i] = F644af0b0($s[$i]); } return $s; } return PHPVERSION_5 ? _cp1252_utf8_to_iso($s) : $s; } } else { function Fa68cecb0($s) { return $s; } function F644af0b0($s) { return $s; } if (!function_exists('iconv') || UNICODE_OPTIM_COMPAT_SANS_EXTENSION) { if (OS_WINDOWS) { function F9486bf1a($s) { return _cp1252_utf8_to_iso($s); } function F8df7b692($s) { return _cp1252_to_utf8($s); } } else { function F9486bf1a($s) { return $s; } function F8df7b692($s) { return $s; } } } else { if (OS_WINDOWS) { function F9486bf1a($s) { return ($s=='' ? '' : (($_s=iconv(CHARSET_PAGE,'' ,$s))=='' ? $s : $_s)); } function F8df7b692($s) { return ($s=='' ? '' : (($_s=iconv('' ,CHARSET_PAGE,$s))=='' ? $s : $_s)); } } else { function F9486bf1a($s) { return $s; } function F8df7b692($s) { return $s; } } } } function F3aa91d2c($sChaine, $nAlphabet = alphabetCourant) { if ($sChaine == '') return ''; $sNouvelleChaine = F3ffa4a93( F244602c6($sChaine,$nAlphabet) ,alphabetUTF8 ); if ($sNouvelleChaine==$sChaine) { return _cp1252_to_utf8($sChaine); } return $sNouvelleChaine; } function Fd9124f10($sUTF8,$nAlphabet = alphabetCourant) { if ($sUTF8 == '') return ''; $sNouvelleChaine = F3ffa4a93( F244602c6($sUTF8,alphabetUTF8) ,$nAlphabet ); return $sNouvelleChaine; } function F244602c6($sChaine, $nAlphabet = alphabetCourant) { $cdependancesPHP = FMK_Dependance(); if ($sChaine == '') return ''; $sNouvelleChaine = ''; $sAlphabet = F52a7e856($nAlphabet); if ($cdependancesPHP->F0b5f8f06('mbstring')) { $sNouvelleChaine = mb_convert_encoding($sChaine,UNICODE_CHARSET_CONVERSION,$sAlphabet); } else if ($cdependancesPHP->F0b5f8f06('iconv')) { $sNouvelleChaine = iconv($sAlphabet,UNICODE_CHARSET_CONVERSION.'//IGNORE',$sChaine); } else { F853b7085(F1ac3f040("ERR_EXTENSION_UNICODE_ABSENTE"),errMessageSysteme); return $sChaine; } return $sNouvelleChaine; } function F3ffa4a93($sChaine, $nAlphabet = alphabetCourant, $sSubs = '?') { $cdependancesPHP = FMK_Dependance(); if ($sChaine == '') return ''; $sNouvelleChaine = ''; $sAlphabet = F52a7e856($nAlphabet); if ($cdependancesPHP->F0b5f8f06('mbstring')) { if ( $sSubs=='') { if (PHPVERSION_8) { $sSubs = 'none'; } } else { $sSubs = utf8_ord($sSubs); } mb_substitute_character( $sSubs ); $sNouvelleChaine = mb_convert_encoding($sChaine,$sAlphabet,UNICODE_CHARSET_CONVERSION); } else if ($cdependancesPHP->F0b5f8f06('iconv')) { $sNouvelleChaine = iconv(UNICODE_CHARSET_CONVERSION,$sAlphabet.'//IGNORE',$sChaine); } else { F853b7085(F1ac3f040("ERR_EXTENSION_UNICODE_ABSENTE"),errMessageSysteme); return $sChaine; } return $sNouvelleChaine; } 
function utf8_htmlentities($sChaine,$nOption=ENT_COMPAT) {return htmlentities($sChaine,$nOption,CHARSET_PAGE);} 
function utf8_html_entity_decode($sChaine,$nOption=ENT_COMPAT) {return html_entity_decode($sChaine,$nOption,CHARSET_PAGE);} 
function utf8_htmlspecialchars($sChaine,$nOption=ENT_COMPAT) {return htmlspecialchars($sChaine,$nOption,CHARSET_PAGE);} 
function utf8_get_html_translation_table($sChaine,$nOption=ENT_COMPAT){return (version_compare(PHP_VERSION,'5.3.4')===-1) ? get_html_translation_table($sChaine,$nOption) : get_html_translation_table($sChaine,$nOption,CHARSET_PAGE);} if (UNICODE_PAGE_UTF8 && false === UNICODE_OPTIM_COMPAT_SANS_EXTENSION) { $cdependancesPHP = FMK_Dependance(); if (false!==($gbMbString=$cdependancesPHP->F0b5f8f06('mbstring',false))) { mb_internal_encoding(CHARSET_PAGE); mb_http_output(CHARSET_PAGE); 
function utf8_parse_str($encoded_string, &$result) { return mb_parse_str($encoded_string, $result); } if (PHPVERSION_5_2) { 
function utf8_strrchr($haystack, $needle) { return mb_strrchr($haystack, $needle); } 
function utf8_strstr($haystack, $needle) { return mb_strstr($haystack, $needle); } } 
function utf8_substr_count($haystack, $needle) { return mb_substr_count($haystack, $needle); } 
function utf8_strlen($sChaine) { return mb_strlen($sChaine); } 
function utf8_strpos($sChaine, $sRecherche, $nDecalage = false) { return ( $nDecalage === false ) ? mb_strpos($sChaine, $sRecherche) : mb_strpos($sChaine, $sRecherche, $nDecalage);} 
function utf8_strrpos($sChaine, $sRecherche, $nDecalage = false) { if ( $nDecalage === false ) { if ( '' === $sChaine ) return false; return mb_strrpos($sChaine, $sRecherche); } else { if ( false !== ( $nPosTrouvee = mb_strrpos(mb_substr($sChaine, $nDecalage), $sRecherche) ) ) return $nPosTrouvee + $nDecalage; return false; } } 
function utf8_substr($sChaine, $nDecalage, $length = false) { $nLongueur = mb_strlen($sChaine); if (UNICODE_OPTIM_SUBSTR_ASCII7) { if (strlen($sChaine)===$nLongueur) return ( $length === false ) ? substr($sChaine, $nDecalage) : substr($sChaine, $nDecalage, $length); } if ($nDecalage >= $nLongueur) return false; return ( $length === false ) ? mb_substr($sChaine, $nDecalage) : mb_substr($sChaine, $nDecalage, $length); } 
function utf8_strtolower($sChaine) { return mb_strtolower($sChaine); } 
function utf8_strtoupper($sChaine) { return mb_strtoupper($sChaine); } 
function utf8_encode_mimeheader($s) { return mb_encode_mimeheader($s);} 
function utf8_mail($to, $subject, $message, $additional_headers = null, $additional_parameters = null) { if (function_exists('mb_language')) { mb_language('uni'); } return ($additional_headers===null) ? mb_send_mail($to, $subject, $message ) : ($additional_parameters===null ? mb_send_mail($to, $subject, $message, $additional_headers ) : mb_send_mail($to, $subject, $message, $additional_headers, $additional_parameters )); } } if ($cdependancesPHP->F0b5f8f06('iconv',$gbMbString==false)) { iconv_set_encoding('internal_encoding' , CHARSET_PAGE); iconv_set_encoding('output_encoding' , CHARSET_PAGE); iconv_set_encoding('input_encoding' , CHARSET_PAGE); if (!function_exists('utf8_strlen') && PHPVERSION_5) { 
function utf8_strlen($s) { return iconv_strlen($s); } } } 
function utf8_ord($chr) { $ord0 = ord($chr); if ( $ord0 >= 0 && $ord0 <= 127 ) { return $ord0; } if ( !isset($chr[1]) ) { return false; } $ord1 = ord($chr[1]); if ( $ord0 >= 192 && $ord0 <= 223 ) { return ( $ord0 - 192 ) * 64 + ( $ord1 - 128 ); } if ( !isset($chr[2]) ) { return false; } $ord2 = ord($chr[2]); if ( $ord0 >= 224 && $ord0 <= 239 ) { return ($ord0-224)*4096 + ($ord1-128)*64 + ($ord2-128); } if ( !isset($chr[3]) ) { return false; } $ord3 = ord($chr[3]); if ($ord0>=240 && $ord0<=247) { return ($ord0-240)*262144 + ($ord1-128)*4096 + ($ord2-128)*64 + ($ord3-128); } if ( !isset($chr[4]) ) { return false; } $ord4 = ord($chr[4]); if ($ord0>=248 && $ord0<=251) { return ($ord0-248)*16777216 + ($ord1-128)*262144 + ($ord2-128)*4096 + ($ord3-128)*64 + ($ord4-128); } if ( !isset($chr[5]) ) { return false; } if ($ord0>=252 && $ord0<=253) { return ($ord0-252) * 1073741824 + ($ord1-128)*16777216 + ($ord2-128)*262144 + ($ord3-128)*4096 + ($ord4-128)*64 + (ord($chr[5])-128); } if ( $ord0 >= 254 && $ord0 <= 255 ) { return false; } return false; } 
function utf8_strcasecmp($a, $b) { return strcasecmp(utf8_strtolower($a), utf8_strtolower($b)); } 
function utf8_strcspn($str, $mask, $start = null, $length = null) { if ( empty($mask) || strlen($mask) == 0 ) { return NULL; } $mask = preg_replace('!([\\\\\\-\\]\\[/^])!','\\\${1}',$mask); if ( $start !== null || $length !== null ) { $str = utf8_substr($str, $start, $length); } preg_match('/^[^'.$mask.']+/' . UNICODE_REGEXP,$str, $matches); if ( isset($matches[0]) ) { return utf8_strlen($matches[0]); } return 0; } 
function utf8_stristr($sChaine, $sRecherche) { if ( strlen($sRecherche) === 0 ) return $sChaine; preg_match('/^(.*)'.preg_quote(utf8_strtolower($sRecherche)).'/Us',utf8_strtolower($sChaine), $tabCorrespondances); if ( count($tabCorrespondances) == 2 ) return substr($sChaine, strlen($tabCorrespondances[1])); return false; } 
function utf8_strrev($sChaine) { preg_match_all('/./'.UNICODE_REGEXP.'s', $sChaine, $tabCorrespondances); return join('',array_reverse($tabCorrespondances[0]));} 
function utf8_strspn($str, $mask, $start = null, $length = null) { $mask = preg_replace('!([\\\\\\-\\]\\[/^])!','\\\${1}',$mask); if ( $start !== null || $length !== null ) { $str = utf8_substr($str, $start, $length); } preg_match('/^['.$mask.']+/' . UNICODE_REGEXP,$str, $matches); if ( isset($matches[0]) ) { return utf8_strlen($matches[0]); } return 0; } 
function utf8_ireplace($search, $replace, $str, $count = null) { if ( !is_array($search) ) { $slen = strlen($search); if ( $slen == 0 ) { return $str; } $lendif = strlen($replace) - strlen($search); $search = utf8_strtolower($search); $search = preg_quote($search); $lstr = utf8_strtolower($str); $i = 0; $matched = 0; while ( preg_match('/(.*)'.$search.'/Us',$lstr, $matches) ) { if ( $i === $count ) { break; } $mlen = strlen($matches[0]); $lstr = substr($lstr, $mlen); $str = substr_replace($str, $replace, $matched+strlen($matches[1]), $slen); $matched += $mlen + $lendif; $i++; } return $str; } else { foreach ( array_keys($search) as $k ) { if ( is_array($replace) ) { if ( array_key_exists($k,$replace) ) { $str = utf8_ireplace($search[$k], $replace[$k], $str, $count); } else { $str = utf8_ireplace($search[$k], '', $str, $count); } } else { $str = utf8_ireplace($search[$k], $replace, $str, $count); } } return $str; } } 
function utf8_str_pad($input, $length, $padStr = ' ', $type = STR_PAD_RIGHT) { $inputLen = utf8_strlen($input); if ($length <= $inputLen) { return $input; } $padStrLen = utf8_strlen($padStr); $padLen = $length - $inputLen; if ($type == STR_PAD_RIGHT) { $repeatTimes = ceil($padLen / $padStrLen); return utf8_substr($input . str_repeat($padStr, $repeatTimes), 0, $length); } if ($type == STR_PAD_LEFT) { $repeatTimes = ceil($padLen / $padStrLen); return utf8_substr(str_repeat($padStr, $repeatTimes), 0, floor($padLen)) . $input; } if ($type == STR_PAD_BOTH) { $padLen/= 2; $padAmountLeft = floor($padLen); $padAmountRight = ceil($padLen); $repeatTimesLeft = ceil($padAmountLeft / $padStrLen); $repeatTimesRight = ceil($padAmountRight / $padStrLen); $paddingLeft = utf8_substr(str_repeat($padStr, $repeatTimesLeft), 0, $padAmountLeft); $paddingRight = utf8_substr(str_repeat($padStr, $repeatTimesRight), 0, $padAmountLeft); return $paddingLeft . $input . $paddingRight; } Fa79fbf41('utf8_str_pad: Unknown padding type (' . $type . ')'); return $input; } 
function utf8_str_split($str, $split_len = 1) { if ( !preg_match('/^[0-9]+$/',$split_len) || $split_len < 1 ) { return false; } $len = utf8_strlen($str); if ( $len <= $split_len ) { return array($str); } preg_match_all('/.{'.$split_len.'}|[^\x00]{1,'.$split_len.'}$/'.UNICODE_REGEXP.'s', $str, $tab); return $tab[0]; } 
function utf8_substr_replace($str, $repl, $start , $length = null ) { preg_match_all('/./'.UNICODE_REGEXP.'s', $str, $tab); preg_match_all('/./'.UNICODE_REGEXP.'s', $repl, $tabInv); if( $length === null ) { $length = utf8_strlen($str); } array_splice( $tab[0], $start, $length, $tabInv[0] ); return join('',$tab[0]); } 
function utf8_ltrim( $str, $charlist = false ) { if($charlist === false) return ltrim($str); $charlist = preg_replace('!([\\\\\\-\\]\\[/^])!','\\\${1}',$charlist); return preg_replace('/^['.$charlist.']+/' . UNICODE_REGEXP,'',$str); } 
function utf8_rtrim( $str, $charlist = false ) { if($charlist === false) return rtrim($str); $charlist = preg_replace('!([\\\\\\-\\]\\[/^])!','\\\${1}',$charlist); return preg_replace('/['.$charlist.']+$/' . UNICODE_REGEXP,'',$str); } 
function utf8_trim( $str, $charlist = false ) { if($charlist === false) return trim($str); return utf8_ltrim(utf8_rtrim($str, $charlist), $charlist); } 
function utf8_ucfirst($str) { switch ( utf8_strlen($str) ) { case 0: return ''; break; case 1: return utf8_strtoupper($str); break; default: preg_match('/^(.{1})(.*)$/'.UNICODE_REGEXP.'s', $str, $matches); return utf8_strtoupper($matches[1]).$matches[2]; break; } } 
function utf8_ucwords($str) { $pattern = '/(^|([\x0c\x09\x0b\x0a\x0d\x20]+))([^\x0c\x09\x0b\x0a\x0d\x20]{1})[^\x0c\x09\x0b\x0a\x0d\x20]*/' . UNICODE_REGEXP; return preg_replace_callback($pattern, function ($matches) { $leadingws = $matches[2]; $ucfirst = utf8_strtoupper($matches[3]); $ucword = utf8_substr_replace(ltrim($matches[0]),$ucfirst,0,1); },$str); } 
function utf8_str_ireplace($search, $replace, $str, $count = null){ if ( !is_array($search) ) { $slen = strlen($search); if ( $slen == 0 ) { return $str; } $lendif = strlen($replace) - strlen($search); $search = utf8_strtolower($search); $search = preg_quote($search); $lstr = utf8_strtolower($str); $i = 0; $matched = 0; while ( preg_match('/(.*)'.$search.'/Us',$lstr, $matches) ) { if ( $i === $count ) { break; } $mlen = strlen($matches[0]); $lstr = substr($lstr, $mlen); $str = substr_replace($str, $replace, $matched+strlen($matches[1]), $slen); $matched += $mlen + $lendif; $i++; } return $str; } else { foreach ( array_keys($search) as $k ) { if ( is_array($replace) ) { if ( array_key_exists($k,$replace) ) { $str = utf8_ireplace($search[$k], $replace[$k], $str, $count); } else { $str = utf8_ireplace($search[$k], '', $str, $count); } } else { $str = utf8_ireplace($search[$k], $replace, $str, $count); } } return $str; } } } if (!function_exists('utf8_addcslashes')) { 
function utf8_addcslashes($str,$charlist) { return addcslashes($str,$charlist); } } if (!function_exists('utf8_addslashes')) { 
function utf8_addslashes($str) { return addslashes($str); } } if (!function_exists('utf8_array_change_key_case')) { 
function utf8_array_change_key_case($input,$case = CASE_LOWER) { $tabRetour = array(); foreach (array_keys($input) as $key ) { $tabRetour[(($case == CASE_LOWER) ? utf8_strtolower($key) : utf8_strtoupper($key))] =& $input[$key]; } return $tabRetour; } } if (!function_exists('utf8_arsort')) { 
function utf8_arsort(&$array, $sort_flags = SORT_REGULAR) { $b = utf8_asort($array, $sort_flags); $array = array_reverse($array,true); return $b; } } if (!function_exists('utf8_asort')) { 
function utf8_asort(&$array, $sort_flags = SORT_REGULAR) { return utf8_uasort($array,'strcmp'); } } if (!function_exists('utf8_bin2hex')) { 
function utf8_bin2hex($str) { return bin2hex($str); } } if (!function_exists('utf8_chr')) { 
function utf8_chr($ascii) { return Fd7624002( chr($ascii) ); } } if (!function_exists('utf8_convert_uudecode')) { 
function utf8_convert_uudecode($data) { return convert_uudecode($data); } } if (!function_exists('utf8_convert_uuencode')) { 
function utf8_convert_uuencode($data) { return convert_uuencode($data); } } if (!function_exists('utf8_crc32')) {
function utf8_crc32($str) {return crc32($str);}} if (!function_exists('utf8_explode')) {
function utf8_explode($separator, $str, $limit = null) {return (null===$limit) ? explode($separator, $str) : explode($separator, $str, $limit);}} if (!function_exists('utf8_implode')) {
function utf8_implode($glue = '', $pieces) {return implode($glue, $pieces);}} if (!function_exists('utf8_ltrim')) { 
function utf8_ltrim($str, $character_mask = ' ') {return ltrim($str, $character_mask);}} if (!function_exists('utf8_md5')) {
function utf8_md5($str) {return md5($str);}} if (!function_exists('utf8_md5_file')) {
function utf8_md5_file($str) {return md5_file(F9486bf1a($str));}} if (!function_exists('utf8_nl2br')) {
function utf8_nl2br($str) {return nl2br($str);}} if (!function_exists('utf8_number_format')) {
function utf8_number_format($number, $num_decimal_places = null, $dec_seperator = null, $thousands_seperator) { return ($num_decimal_places===null) ? number_format($number, $thousands_seperator) : number_format($number, $num_decimal_places, $dec_seperator, $thousands_seperator);}} if (!function_exists('utf8_ord')) { 
function utf8_ord($character) { return ord($character); } } if (!function_exists('utf8_parse_str')) { 
function utf8_parse_str($encoded_string, &$result) { parse_str($encoded_string, $result); } } if (!function_exists('utf8_printf')) {
function utf8_printf() {$tab = func_get_args();if (PHPVERSION_5_3) foreach (array_keys($tab) as $tabindex) $tab[$tabindex] =& $tab[$tabindex]; return call_user_func_array(substr(__FUNCTION__,5),$tab);}} if (!function_exists('utf8_rsort')) { 
function utf8_rsort(&$array, $sort_flags = SORT_REGULAR) { $b = utf8_sort($array, $sort_flags); $array = array_reverse($array); return $b; } } if (!function_exists('utf8_rtrim')) { 
function utf8_rtrim($str, $character_mask = ' ') {return rtrim($str, $character_mask);}} if (!function_exists('utf8_sort')) { 
function utf8_sort(&$array, $sort_flags = SORT_REGULAR) { return utf8_usort($array,'strcmp'); } } if (!function_exists('utf8_soundex')) {
function utf8_soundex() {$tab = func_get_args();if (PHPVERSION_5_3) foreach (array_keys($tab) as $tabindex) $tab[$tabindex] =& $tab[$tabindex]; return call_user_func_array(substr(__FUNCTION__,5),$tab);}} if (!function_exists('utf8_sprintf')) {
function utf8_sprintf() {$tab = func_get_args();if (PHPVERSION_5_3) foreach (array_keys($tab) as $tabindex) $tab[$tabindex] =& $tab[$tabindex]; return call_user_func_array(substr(__FUNCTION__,5),$tab);}} if (!function_exists('utf8_str_pad')) {
function utf8_str_pad($input, $pad_length, $pad_string = ' ', $pad_type = STR_PAD_RIGHT) {return str_pad($input, $pad_length, $pad_string, $pad_type);}} if (!function_exists('utf8_str_repeat')) {
function utf8_str_repeat($input, $mult) {return str_repeat($input, $mult);}} if (!function_exists('utf8_str_replace')) {
function utf8_str_replace($search, $replace, $subject) {return str_replace($search, $replace, $subject);}} if (!function_exists('utf8_strcasecmp')) {
function utf8_strcasecmp($str1, $str2) {return strcasecmp($str1, $str2);}} if (!function_exists('utf8_strchr')) {
function utf8_strchr() {$tab = func_get_args();if (PHPVERSION_5_3) foreach (array_keys($tab) as $tabindex) $tab[$tabindex] =& $tab[$tabindex]; return call_user_func_array(substr(__FUNCTION__,5),$tab);}} if (!function_exists('utf8_strip_tags')) {
function utf8_strip_tags() {$tab = func_get_args();if (PHPVERSION_5_3) foreach (array_keys($tab) as $tabindex) $tab[$tabindex] =& $tab[$tabindex]; return call_user_func_array(substr(__FUNCTION__,5),$tab);}} if (!function_exists('utf8_stripos')) {
function utf8_stripos() {$tab = func_get_args();if (PHPVERSION_5_3) foreach (array_keys($tab) as $tabindex) $tab[$tabindex] =& $tab[$tabindex]; return call_user_func_array(substr(__FUNCTION__,5),$tab);}} if (!function_exists('utf8_stripslashes')) {
function utf8_stripslashes() {$tab = func_get_args();if (PHPVERSION_5_3) foreach (array_keys($tab) as $tabindex) $tab[$tabindex] =& $tab[$tabindex]; return call_user_func_array(substr(__FUNCTION__,5),$tab);}} if (!function_exists('utf8_stristr')) {
function utf8_stristr() {$tab = func_get_args();if (PHPVERSION_5_3) foreach (array_keys($tab) as $tabindex) $tab[$tabindex] =& $tab[$tabindex]; return call_user_func_array(substr(__FUNCTION__,5),$tab);}} if (!function_exists('utf8_strlen')) {
function utf8_strlen() {$tab = func_get_args();if (PHPVERSION_5_3) foreach (array_keys($tab) as $tabindex) $tab[$tabindex] =& $tab[$tabindex]; return call_user_func_array(substr(__FUNCTION__,5),$tab);}} if (!function_exists('utf8_strncasecmp')) {
function utf8_strncasecmp() {$tab = func_get_args();if (PHPVERSION_5_3) foreach (array_keys($tab) as $tabindex) $tab[$tabindex] =& $tab[$tabindex]; return call_user_func_array(substr(__FUNCTION__,5),$tab);}} if (!function_exists('utf8_strncmp')) {
function utf8_strncmp() {$tab = func_get_args();if (PHPVERSION_5_3) foreach (array_keys($tab) as $tabindex) $tab[$tabindex] =& $tab[$tabindex]; return call_user_func_array(substr(__FUNCTION__,5),$tab);}} if (!function_exists('utf8_strpos')) {
function utf8_strpos($sChaine, $sRecherche, $nDecalage = false) { return ( $nDecalage === false ) ? strpos($sChaine, $sRecherche) : strpos($sChaine, $sRecherche, $nDecalage);}} if (!function_exists('utf8_strrchr')) {
function utf8_strrchr($haystack, $needle) { return strrchr($haystack, $needle);}} if (!function_exists('utf8_strrev')) {
function utf8_strrev($str) {return strrev($str);}} if (!function_exists('utf8_strrpos')) {
function utf8_strrpos($haystack, $needle, $offset = null) { return (PHPVERSION_5 && (null!==$offset))? strrpos($haystack, $needle, $offset) : strrpos($haystack, $needle);}} if (!function_exists('utf8_strspn')) {
function utf8_strspn($str, $mask, $start = 0, $len = null) { return (null===$len) ? strspn($str, $mask, $start) : strspn($str, $mask, $start, $len);}} if (!function_exists('utf8_strstr')) {
function utf8_strstr($haystack, $needle) {return strstr($haystack, $needle);}} if (!function_exists('utf8_strtolower')) {
function utf8_strtolower($str) {return UNICODE_PAGE_UTF8 ? Fd7624002(strtolower(F55402159($str))) : strtolower($str);}} if (!function_exists('utf8_strtoupper')) {
function utf8_strtoupper($str) {return UNICODE_PAGE_UTF8 ? Fd7624002(strtoupper(F55402159($str))) : strtoupper($str);}} if (!function_exists('utf8_strtr')) {
function utf8_strtr($str, $from, $to=null) {return isset($to) ? strtr($str, $from, $to) : strtr($str, $from);}} if (false === UNICODE_PAGE_UTF8) { if (!function_exists('utf8_substr')) { if(!PHPVERSION_7) { 
function utf8_substr($str, $offset, $length = false) { $return = (($length === false) ? substr($str, $offset) : substr($str, $offset, $length)); if ($return===false) return ''; return $return; } } else { 
function utf8_substr($str, $offset, $length = false) { return ($length === false) ? substr($str, $offset) : substr($str, $offset, $length); } } } } else { if (!function_exists('utf8_substr')) { 
function utf8_substr($str, $offset, $length = null) { $str = (string)$str; $offset = (int)$offset; if (!is_null($length)) $length = (int)$length; if ($length === 0) return ''; if ($offset < 0 && $length < 0 && $length < $offset) return ''; if ($offset < 0) { $strlen = strlen(utf8_decode($str)); $offset = $strlen + $offset; if ($offset < 0) $offset = 0; } $Op = ''; $Lp = ''; if ($offset > 0) { $Ox = (int)($offset/65535); $Oy = $offset%65535; if ($Ox) { $Op = '(?:.{65535}){'.$Ox.'}'; } $Op = '^(?:'.$Op.'.{'.$Oy.'})'; } else { $Op = '^'; } if (is_null($length)) { $Lp = '(.*)$'; } else { if (!isset($strlen)) { $strlen = strlen(utf8_decode($str)); } if ($offset > $strlen) return ''; if ($length > 0) { $length = min($strlen-$offset, $length); $Lx = (int)( $length / 65535 ); $Ly = $length % 65535; if ($Lx) $Lp = '(?:.{65535}){'.$Lx.'}'; $Lp = '('.$Lp.'.{'.$Ly.'})'; } else if ($length < 0) { if ( $length < ($offset - $strlen) ) { return ''; } $Lx = (int)((-$length)/65535); $Ly = (-$length)%65535; if ($Lx) $Lp = '(?:.{65535}){'.$Lx.'}'; $Lp = '(.*)(?:'.$Lp.'.{'.$Ly.'})$'; } } if (!preg_match( '#'.$Op.$Lp.'#us',$str, $match )) { return ''; } return $match[1]; } } } if (!function_exists('utf8_substr_count')) {
function utf8_substr_count($haystack, $needle) {return substr_count($haystack, $needle);}} if (!function_exists('utf8_substr_replace')) {
function utf8_substr_replace($str, $repl, $start, $length = null) {return ($length===null) ? substr_replace($str, $repl, $start) : substr_replace($str, $repl, $start, $length );}} if (!function_exists('utf8_trim')) { 
function utf8_trim($str, $character_mask = ' ') {return trim($str, $character_mask);}} if (!function_exists('utf8_uasort')) {
function utf8_uasort( &$array , $cmp_function ) {return uasort( $array , $cmp_function ); }} if (!function_exists('utf8_ucfirst')) {
function utf8_ucfirst($str) {return ucfirst($str);}} if (!function_exists('utf8_ucwords')) {
function utf8_ucwords($str) {return ucwords($str);}} if (!function_exists('utf8_usort')) { 
function utf8_usort(&$array, $cmp_function ) { return usort($array, $cmp_function ); } } if (!function_exists('utf8_encode_mimeheader')) { 
function utf8_encode_mimeheader($s) {return utf8_encode($s); } } if (!function_exists('utf8_mail')) { 
function utf8_mail($to, $subject, $message, $additional_headers = null, $additional_parameters = null) {return ($additional_headers===null) ? mail($to, $subject, $message ) : ($additional_parameters===null ? mail($to, $subject, $message, $additional_headers ) : mail($to, $subject, $message, $additional_headers, $additional_parameters ));} } function Fbadd3589($str) { $str_ascii = array( 'A' => Fd7624002('������?????????????????'), 'a' => Fd7624002('������?????????????????'), 'C' => Fd7624002('�????'), 'c' => Fd7624002('�????'), 'D' => Fd7624002('�??'), 'd' => Fd7624002('??'), 'E' => Fd7624002('����?????????????'), 'e' => Fd7624002('����?????????????'), 'G' => Fd7624002('????'), 'g' => Fd7624002('????'), 'H' => Fd7624002('??'), 'h' => Fd7624002('??'), 'I' => Fd7624002('����????????'), 'i' => Fd7624002('����????????'), 'J' => Fd7624002('?'), 'j' => Fd7624002('?'), 'K' => Fd7624002('?'), 'k' => Fd7624002('?'), 'L' => Fd7624002('?????'), 'l' => Fd7624002('?????'), 'N' => Fd7624002('�???'), 'n' => Fd7624002('�????'), 'O' => Fd7624002('������??????????????????'), 'o' => Fd7624002('������??????????????????�'), 'R' => Fd7624002('???'), 'r' => Fd7624002('???'), 'S' => Fd7624002('???�'), 's' => Fd7624002('???�'), 'T' => Fd7624002('???'), 't' => Fd7624002('???'), 'U' => Fd7624002('����???????????????????'), 'u' => Fd7624002('����???????????????????'), 'W' => Fd7624002('????'), 'w' => Fd7624002('????'), 'Y' => Fd7624002('�?�????'), 'y' => Fd7624002('��?????'), 'Z' => Fd7624002('??�'), 'z' => Fd7624002('??�'), ); foreach ($str_ascii as $k => $v) { $str = preg_replace('/['.$v.']/u', $k, $str); } return $str; } ?>