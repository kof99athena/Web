var n=0;
while(true){
    n++;
    //document.getElementById('hh').innerHTML = n;
    //이거 에러임. 워커는 별도 스레드이다. 워커에서는 ui작업이 불가하다. 
    //그러니까 메인스레드에서 메세지를 보내서 명령을 보내야한다. 

    //메인스레드에게 요청
    postMessage(n);

// onmessage = function(){
//     this.alert(event.data);
// } 메인스레드에서 data를 받는다면? 이렇게 써줘야한다. 

}