<?php

if(! function_exists("string_plural_select_pl")) {
function string_plural_select_pl($n){
	$n = intval($n);
	return ($n==1 ? 0 : ($n%10>=2 && $n%10<=4) && ($n%100<12 || $n%100>14) ? 1 : $n!=1 && ($n%10>=0 && $n%10<=1) || ($n%10>=5 && $n%10<=9) || ($n%100>=12 && $n%100<=14) ? 2 : 3);;
}}
;
$a->strings["Save Settings"] = "Zapisz ustawienia";
$a->strings["Allow \"good\" crawlers"] = "Pozwól „dobrym” robotom";
$a->strings["Block GabSocial"] = "Zablokuj GabSocial";
$a->strings["Training mode"] = "Tryb treningowy";
$a->strings["Settings updated."] = "Ustawienia zaktualizowane.";