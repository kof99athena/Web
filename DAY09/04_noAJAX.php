<?php

header('Content-Type:text/html; charset=utf-8');

$name = $_GET['name'];
$email = $_GET['email'];

//echo"$name $email 이 등록 되었습니다."
//form요소를 쓰면 서버와의 통신은 현재 페이지가 바뀌는것이다. 
//그래서 기존 페이지가 없어짐. 만약 그럼에도 기존페이지가 있는 것처럼 느끼게 하고싶다면?

//이런식으로 기존페이지를 html을 그대로 echo 하면서 데이터변수만 적절한 위치에 출력
echo ("
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>AJAX안쓴거 즉 폼 요소 때</title>
    </head>
    <body>
        <h3>고양이 페이지</h3>
        <form action='./04_noAJAX.php' method='get'> 
            <!-- 원래 통신할때는 form 요소! 통신을 위한것 -->
            <input type='text' name='name' value='$name'>
            <input type='text' name='email' value='$email'>
            <input type='submit'>
        </form>

        <hr>
        <!-- 서버로부터 응답된 결과를 보여주기 위해 -->
        <textarea cols='50' rows='30'>$name $email 이 등록되었습니다. </textarea>
        
    </body>
</html>
")

?>
