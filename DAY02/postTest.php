<?php
    header("content-Type:text/html; charset=utf-8");
    //POST 방식으로 전달된 값들 받기

    //php에서는 사용자가 보낸데이터를 쉽게 받을수있다.
    //POST은 배열변수이다. 한두개가 아니다. 연관배열로 받는다. 키값은 글자로
    $name=$_POST['name'];
    $password=$_POST['pw'];
    $gender=$_POST['rg'];
    $message=$_POST['msg'];
    $brand=$_POST['brand'];
    $id=$_POST['id'];
    
    //실무에서는 이 데이터들을 DB에 저장하는 작업

    //메세지의 경우 여러줄일 수 있음. 이때, 줄바꿈문자 \n을 브라우저에서는 <br>태그로 변경하여 보여줘야함.
    //php는 c언어로 만들었다.
    //nl to br ->이건 너무 많이쓰는 !
    $message= nl2br($message);

    //잘 받았는지 확인하는 목적으로 데이터들 출력(응답 : Response)
    echo "<h2>$name</h2>";
    echo "<p>$password</p>";
    echo "<p>$gender</p>";
    echo "<p>$message</p>";
    echo "<p>$brand</p>";
    echo "<p>$id</p>";


    //멀티 초이스에 의해 선택된 값들은 배열로 전달받기에 반복문으로 값 echo
    //후르츠[]을쓰지 않는다.
    $fruits=$_POST['fruits'];
    $num= count($fruits);
    for($i=0; $i<$num; $i++){
        echo "$fruits[$i],";
    }


?>