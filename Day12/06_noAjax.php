<?php

header('Content-Type:text/html; charset-utf8');

$name=$_GET['name'];
$mail=$_GET['email'];


//echo "$name, $mail 이 등록되었습니다.";
//form 요소를 사용하는 방식은 page가 바뀌는 것이어서 기존 페이지가 없어짐

// 기존 페이지의 일부분에 결과값만 넣으려면, 
// ajax 기술이 필요해
echo ("
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
        <title></title>
    </head>
    

    <body>
        
        <h3>SignUp page</h3>
        <form action='06_noAjax.php' method='get'>
            <input type='text' name='name'>
            <input type='text' name='email'>

            <input type='submit'>
        </form>
        <hr>
        <textarea cols='30' rows='3'> $name, $mail 이 등록되었습니다. </textarea>

    </body>
</html>
");
?>