<link rel="icon" href="png/website.png" type="image/x-icon" />
<?php

include 'ZipMaster.php';

$zip = new ZipMaster\ZipMaster('backup/archive/backup.zip', 'includeweb/');
$zip->archive();
?>