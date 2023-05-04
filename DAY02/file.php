<?php
    header('Content-Type:text/html; charset=utf-8');
    //사용자로부터 전달받은 파일의 실제데이터는 임시저장소에 배치되고
    //이 php에는 파일정보만 전달되어 옴. [5개의 정보]
    //파일정보 배열 받기
    $file=$_FILES['aaa'];

    //이 밑에 5개의 [식별자]는 이미 정해져는 키워드이다.
    $srcName=$file['name']; //원본파일명
    $type=$file['type'];
    $size=$file['size'];
    $tmpName=$file['tmp_name']; //임시저장소 위치
    $error=$file['error']; //에러정보 
    
    //5개의 정보를 잘 받았는지 응답
    echo $srcName."<br>";
    echo $type."<br>";
    echo $size."<br>";
    echo $tmpName."<br>";
    echo $error."<br>";

    //임시저장소에 있는 파일을 영구히 저장하기 위해 이동시켜야함
    $dstName = "image/".date('YmdHis').$srcName;
    move_uploaded_file($tmpName,$dstName);


?>
