/**
 * Simple PHP Code to Send SMS to Mobile via Website
 *
 * Core File of The Script
 * @author Muhsin Mohamed PC
 * @version 1.0
 * @website http://www.howi.in
 */
<?php
$token = 'nMuMwWTKAL';
$mobile = mysql_real_escape_string($_POST['phone']);
$msg = mysql_real_escape_string($_POST['message']);
$site = 'Howi';
$url = "http://api.fast2sms.com/sms.php?token=".$token."&mob=".$mobile."&mess=".$msg."&sender=".$site."&route=0";
$homepage = file_get_contents($url);
if($homepage)
{
  echo "Message Send Compleated...";
}
else{
  echo "Something Went Wrong...";
}
?>
