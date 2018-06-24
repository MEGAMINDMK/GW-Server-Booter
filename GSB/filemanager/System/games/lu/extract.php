<link rel="icon" href="png/lu.png" type="image/x-icon" />
<?php
$zip = new ZipArchive;
$res = $zip->open('install.zip');
if ($res === TRUE) {
  $zip->extractTo('includelu');
  $zip->close();
  echo 'Installed!';
} else {
  echo 'Nothing or nothing you can see!';
}
?>