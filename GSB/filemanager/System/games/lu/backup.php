<link rel="icon" href="png/lu.png" type="image/x-icon" />
<?php

include 'ZipMaster.php';

$zip = new ZipMaster\ZipMaster('backup/archive/backup.zip', 'includelu/');
$zip->archive();
?>