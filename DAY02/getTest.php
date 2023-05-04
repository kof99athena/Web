<?php
// 내가 보내는 형식은 html형식일거야
    header("content-Type:text/html; charset=utf-8");

    //사용자로부터 (form요소)로부터 GET방식으로 전달된 데이터 받기
    //$_ : 슈퍼전역변수 여기안에 모든 데이터를 받는다
    $title=$_GET['title'];
    $message=$_GET['msg'];

    //잘 받았는지 확인하고자 사용자에게 응답(Response)
    echo "제목 : $title <br>"; 
    echo "메세지 : $message";

    // 이대로 실행하면 php를 해독못함 -> 해독하려면 php를 설치해야하는데.. 웹호스팅으로 가야함

?>
