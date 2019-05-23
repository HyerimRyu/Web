<?php

    header('Content-Type:text/html; charset=utf-8');

    $name=$_POST['name'];
    $pw=$_POST['pw'];
    $gender=$_POST['rg1'];
    $msg=$_POST['msg'];
    $sel=$_POST['sel'];

    //textarea의 값(value)는 \n의 줄바꿈을 사용함
    //그러므로 echo 할 때 브라우저에서 줄바꿈이 안됨
    //브라우저에서의 줄바꿈은 <br>이므로
    //\n을 <br>로 변경해야만 함
    //어떻게??   nl2br 함수****************************************
    $msg=nl2br($msg);

    echo "$name<br>";
    echo "$pw<br>";
    echo "$gender<br>";
    echo "$msg<br>";
    echo "$sel<br>";


    //체크박스의 데이터는 여러개 이므로 배열로 만들어
    $fruits=$_POST['fruits'];

    //$fruits는 배열임
    echo "$fruits<br>"; //출력 : Array

    //배열의 길이
    $num= count($fruits);
    for($i=0; $i<$num; $i++){
        echo "$fruits[$i],";
    }


?>