<?php
//27.0.2.0 FMK/Compat/winbase.php GF
//VersionVI: 01F270103n
//(c) 2005-2012 PC SOFT - Release
 class SYSTEMTIME { var $wYear; var $wMonth; var $wDayOfWeek; var $wDay; var $wHour; var $wMinute; var $wSecond; var $wMilliseconds; } function F17a30b32(&$clSystemTime) { $clSystemTime->wDay = date('d'); $clSystemTime->wDayOfWeek = date('w'); $clSystemTime->wHour = date('h'); $clSystemTime->wMilliseconds= (round(floatval(microtime())*1000,0)); $clSystemTime->wMinute = intval(date('i')); $clSystemTime->wMonth = date('n'); $clSystemTime->wSecond = intval(date('s')); $clSystemTime->wYear = date('Y'); } define('INT_MIN',-2147483647 - 1); define('INT_MAX',2147483647); class tm { var $tm_sec=0; var $tm_min=0; var $tm_hour=0; var $tm_mday=1; var $tm_mon=1; var $tm_year=0; var $tm_wday=-1; var $tm_yday=-1; var $tm_isdst=-1; var $tm_wyear=-1; function F567dc23a() { $this->tm_sec=0; $this->tm_min=0; $this->tm_hour=0; $this->tm_mday=1; $this->tm_mon=1; $this->tm_year=0; $this->tm_wday=-1; $this->tm_yday=-1; $this->tm_isdst=-1; $this->tm_wyear=-1; } function F00bee1c9($stSysTime, $nDST=-1) { $this->tm_sec = $stSysTime->wSecond; $this->tm_min = $stSysTime->wMinute; $this->tm_hour = $stSysTime->wHour; $this->tm_mday = $stSysTime->wDay; $this->tm_wday = $stSysTime->wDayOfWeek; $this->tm_mon = $stSysTime->wMonth - 1; $this->tm_year = $stSysTime->wYear - 1900; $this->tm_isdst = $nDST; $mktime = mktime($this->tm_hour,$this->tm_min,$this->tm_sec,$this->tm_mon+1,$this->tm_mday,$this->tm_year+1900); $this->tm_yday = date('z',$mktime); $this->tm_wyear = date('W',$mktime); } function Ff663e557(&$clDT) { $this->F567dc23a(); $this->tm_sec = $clDT->nGetSeconde(); $this->tm_min = $clDT->F6316e79b(); $this->tm_hour = $clDT->nGetHeure(); $this->tm_mday = $clDT->nGetJour(); if ($this->tm_mday <= 0) $this->tm_mday = 1; $this->tm_mon = $clDT->nGetMois() - 1; if ($this->tm_mon > 0) --$this->tm_mon; else $this->tm_mon=0; $this->tm_year = $clDT->nGetAnnee() - 1900; $mktime = mktime($this->tm_hour,$this->tm_min,$this->tm_sec,$this->tm_mon+1,$this->tm_mday,$this->tm_year+1900); $this->tm_yday = date('z',$mktime); $this->tm_wday = date('w',$mktime); $this->tm_wyear = date('W',$mktime); } function F74cf49a4(&$stTimeDest) { $stTimeDest->wYear = $this->tm_year + 1900; $stTimeDest->wMonth = $this->tm_mon + 1; $stTimeDest->wDayOfWeek = $this->tm_wday; $stTimeDest->wDay = $this->tm_mday; $stTimeDest->wHour = $this->tm_hour; $stTimeDest->wMinute = $this->tm_min; $stTimeDest->wSecond = $this->tm_sec; return true; } } ?>