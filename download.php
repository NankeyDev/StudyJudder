<?php 
    if(!empty($_GET['file']))
    {
        $filename = basename($_GET['file']);
        $filepath = '/' . $filename;
        if(!empty($filename) && file_exists($filepath)){
        # Photo credit/source:
        # https://unsplash.com/photos/people-gathered-outside-buildings-and-vehicles-alY6_OpdwRQ

    //Define Headers
            header("Cache-Control: public");
            header("Content-Description: FIle Transfer");
            header("Content-Disposition: attachment; filename=$filename");
            header("Content-Type: application/zip");
            header("Content-Transfer-Emcoding: binary");

            readfile($filepath);
            exit;
        }
        else{
            echo "This File Does not exist.";
        }
    }
?>