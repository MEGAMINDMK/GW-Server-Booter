<link rel="icon" href="png/vcmp.png" type="image/x-icon" />
<?php
$zip = new ZipArchive;
$res = $zip->open('backup/archive/backup.zip');
if ($res === TRUE) {
  $zip->extractTo('includevc');
  $zip->close();
  echo 'Installed Backup!';
} else {
  echo 'Nothing or nothing you can see!';
}
?>