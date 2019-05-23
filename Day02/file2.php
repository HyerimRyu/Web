<?php

    $file=$_FILES['bbb'];

    //$file은 배열임
    echo count($file); //출력:5
   
    echo count($file['name']); //출력: 파일개수 
    echo "===================================<br>";


    //선택된 파일의 개수 
    $num=count($file['name']);
    for($i=0; $i<$num; $i++){
        $srcName=$file['name'][$i];
        $tmpName=$file['tmp_name'][$i];

        echo "$srcName<br>";
        echo "$tmpName<br>";
        echo "--------------------------------<br>";

        $dstName="$srcName".date(Ymdhis).".jpg";
        move_uploaded_file($tmpName, $dstName);
    }


?>