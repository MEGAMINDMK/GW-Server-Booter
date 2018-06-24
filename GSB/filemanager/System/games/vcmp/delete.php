<link rel="icon" href="png/vcmp.png" type="image/x-icon" />
<?php
$files = glob('includevc/*'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}

$files = glob('includevc/scripts/*'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}

$files = glob('includevc/store/script/*'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}
?>
All files have been Deleted...!