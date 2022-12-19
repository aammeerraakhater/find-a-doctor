<?php
    if (isset($_POST['submit'])) {
       $file =$_FILES['file'];

       $fileName =$_FILES['file']['name'];
       $fileTmpName =$_FILES['file']['TmpName'];
       $fileSize =$_FILES['file']['Size'];
       $fileError =$_FILES['file']['error'];
       $fileType =$_FILES['file']['type'];

       $fileExt=explode('.',$fileName);
       $fileActualExt=strtolower(end($fileExt));

       $allow =array('jpg' ,'jpeg' ,'png');
       if( in_array($fileActualExt, $allow) ){
            if ($fileError ===0) {
                if($fileSize<500000){
                    $fileNewName=uniqid('',true).".".$fileActualExt;
                    $fileDes='uload/'.$fileNewName;
                    move_uploaded_file($fileTmpName,$fileDes);
                    echo'Successful';
                }
                else{
                    echo"Your file is too big";
                }
            }
            else{
                echo"There is an error uploading your file only upload 'jpg' ,'jpeg' ,'png'";
            }
       }
       else{
           echo"only upload 'jpg' ,'jpeg' ,'png'";
       }
    }
