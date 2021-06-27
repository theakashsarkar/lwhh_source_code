<?php
class FileDisplay{
    function display(FileInterface $file)
    {
        $file->display();
    }
}
interface FileInterface{
    function display();
}
class ImageFile implements FileInterface{
    function display(){
        //take nescessary steps to  display image
    }
}
class VedioFile implements FileInterface{
    function display(){
        //take necessary steps to display vedio
    }
}
$image = new ImageFile();
$file  = new FileDisplay();
$file->display($image);