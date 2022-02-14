<?php


namespace App\classes;


use http\Exception\BadMethodCallException;

class FileUpload
{
    protected $image;
    protected $imageName;
    protected $Directory;

    public function __construct($post=null)
    {
//        echo 'pre';
//        print_r($post);
//
        $this->image=$post;
    }
    public function index()
    {
//        echo 'pre';
//        print_r($this->image);
//        echo '<br/>';
//        print_r($_FILES);
//        echo $_FILES['image']['name'];

        $this->imageName=$_FILES['image']['name'];
        $this->Directory='assets/img/upload/'.$this->ImageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $this->Directory);
        echo 'success';
    }

}