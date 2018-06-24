<link rel="icon" href="png/samp.png" type="image/x-icon" />
<?php
$files = glob('includesa/*'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}
?>
All files have been Deleted...!