<?php

$file=$_FILES['aaa'];

//$file은 배열임. 파일 안에 정보가 너무 많아서 파일은 덩어리이기 때문에 header 문서가 있으므로 배열로 받아들여
//배열의 length는 5

$fileName=$file['name'];
$tmpName=$file['tmp_name'];
$fileType=$file['type'];
$fileSize=$file['size'];
//$fileError=$file['error'];

echo "fileName<br>";
echo "tmpName<br>";
echo "fileType<br>";
echo "fileSize<br>";
//echo "fileError<br>";

//서버에 업로드된 파일은 임시저장소($tmpName)에 저장되어 있음
//영구히 서버에 저장하려면... 임시 저장소에서 특정위치로 이동시켜야 함
$dstName=date(Ymdhis).".jpg";
move_uploaded_file($tmpName, $dstName);

?>