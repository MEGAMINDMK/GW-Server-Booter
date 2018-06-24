<link rel="icon" href="png/CS_logo.png" type="image/x-icon" />
<?php

include 'ZipMaster.php';

$zip = new ZipMaster\ZipMaster('backup/archive/backup.zip', 'includecs/');
$zip->archive();
?>