<link rel="icon" href="png/vcmp.png" type="image/x-icon" />
<?php

include 'ZipMaster.php';

$zip = new ZipMaster\ZipMaster('backup/archive/backup.zip', 'includevc/');
$zip->archive();
?>