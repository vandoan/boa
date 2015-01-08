<?php

$agent = $_SERVER['HTTP_USER_AGENT']; 
$browserArray = array(
    'Windows Mobile' => 'IEMobile',
    'Android Mobile' => 'Android',
    'iPhone Mobile' => 'iPhone',
    'Firefox' => 'Firefox',
    'Google Chrome' => 'Chrome',
    'Internet Explorer' => 'MSIE',
    'Opera' => 'Opera',
    'Safari' => 'Safari'
); 
foreach ($browserArray as $k => $v) {

    if (preg_match("/$v/", $agent)) {
         break;
    }   else {
     $k = "Browser Unknown";
    }
} 
$browser = $k;
// Get the user OS now ------------------------------------------------------------
// Create the Associative Array for the Operating Systems to sniff out
$osArray = array(
        'Windows 98' => '(Win98)|(Windows 98)',
        'Windows 2000' => '(Windows 2000)|(Windows NT 5.0)',
        'Windows ME' => 'Windows ME',
        'Windows XP' => '(Windows XP)|(Windows NT 5.1)',
        'Windows Vista' => 'Windows NT 6.0',
        'Windows 7' => '(Windows NT 6.1)|(Windows NT 7.0)',
        'Windows NT 4.0' => '(WinNT)|(Windows NT 4.0)|(WinNT4.0)|(Windows NT)',
        'Linux' => '(X11)|(Linux)',
        'Mac OS' => '(Mac_PowerPC)|(Macintosh)|(Mac OS)'
); 
foreach ($osArray as $k => $v) {

    if (preg_match("/$v/", $agent)) {
         break;
    }   else {
     $k = "Unknown OS";
    }
} 
$os = $k;

echo '<h1>PHP Tutorial : Get User Browser and Operating System Using Arrays</h1>';
echo $agent;
echo "<h2>You are using: <em>$browser - $os</em></h2>";
?>