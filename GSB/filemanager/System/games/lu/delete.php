<link rel="icon" href="png/lu.png" type="image/x-icon" />
<?php
$files = glob('includelu/*'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}
?>
All files have been Deleted...!