<link rel="icon" href="png/CS_logo.png" type="image/x-icon" />
<?php
$zip = new ZipArchive;
$res = $zip->open('install.zip');
if ($res === TRUE) {
  $zip->extractTo('includecs');
  $zip->close();
  echo 'Installed!';
} else {
  echo 'Nothing or nothing you can see!';
}
?>