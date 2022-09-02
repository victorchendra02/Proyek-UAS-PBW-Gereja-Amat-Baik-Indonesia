<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $thename = $_POST["thename"];
    
    $fileName = $_FILES['file']['name'];
    $filetmp_name = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['file']['size'];
    $fileerror = $_FILES['file']['error'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)){
        if ($fileerror === 0){
            if ($filesize < 500000){
                $fileNameNew = strtolower($thename).".".$fileActualExt;
                $fileDestination = '../uploadFoto/'.$fileNameNew;
                move_uploaded_file($filetmp_name, $fileDestination);
                echo "$fileNameNew successfully uploaded";
            } else {
                echo "Your file is too big!";
            }
        } else{
            echo "There was an error uploading your file!";
        }
    } else {
        echo "You cannot upload files of this type!";
    }

}

?>