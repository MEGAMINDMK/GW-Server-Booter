<link rel="icon" href="png/samp.png" type="image/x-icon" />
<?php

include 'ZipMaster.php';

$zip = new ZipMaster\ZipMaster('backup/archive/backup.zip', 'includesa/');
$zip->archive();
?>