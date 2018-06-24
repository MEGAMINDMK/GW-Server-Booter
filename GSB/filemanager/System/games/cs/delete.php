<link rel="icon" href="png/CS_logo.png" type="image/x-icon" />
<?php
$files = glob('includecs/*'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}

$files = glob('includecs'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}

$files = glob('includecs'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}
?>
All files have been Deleted...!