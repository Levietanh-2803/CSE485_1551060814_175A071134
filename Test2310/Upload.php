<?php

//upload.php 
if(!empty($_FILES['uploadFile']))
{
    if(is_uploaded_file($_FILES['uploadFile']['tmp_name']))
    {
        sleep(1);
        $source_path = $_FILES['uploadFile']['tmp_name'];
        if ($source_path != ""){
            $target_path = "upload/" . $_FILES['uploadFile']['name'];
            if(move_uploaded_file($source_path, $target_path))
            {
                echo '<img src="'.$target_path.'" class="img-thumbnail" width="300" height="250" />';
            }
        }
    }
}
/*if(!empty($_FILES['uploadFile']))
{
    $file_tmp= $_FILES['uploadFile']['tmp_name'];
    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
    if(is_uploaded_file($file_tmp))
    {
        $data = file_get_contents($file_tmp);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        sleep(1);
        $source_path = $_FILES['uploadFile']['tmp_name'];
        if ($source_path != ""){
            $target_path = "upload/" . $_FILES['uploadFile']['name'];
            if(move_uploaded_file($source_path, $target_path))
            {
                echo '<img src="'.$target_path.'" class="img-thumbnail" width="300" height="250" />';
            }
        }
    }
}*/
?>