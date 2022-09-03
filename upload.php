<?php

function get_size($size){
    $kb_size = $size =number_format($kb_size,2);
    return $format_size;
}
$path = 'image/'.$_POST['foldername']
$size = get_size($_FILES['image']['size']);

if ($size <4.0){
    
    if(!file_exist($path)){
        mkdir($path,0777,true);
    }

$temp_file = $_FILES['image']['tmp_name'];

if($temp_file !=""){
    $newfilepath = $path."/". $FILES['image']['name'];
    
    if(move_uploaded_file($temp_file, $newfilepath)){
        echo " Success";
    }else{
        echo "Error ";
    }
}
}else{
    echo "Files To Larges";
}
?>
