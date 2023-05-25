

function show(){
    //document.write("show!")
    //모듈 타입일때는 document.write() 사용 못함
    //그래서 새로운 요소노드를 직접 만들어서 추가해야함.
    const e = document.createElement('h4')
    e.textContent= "show!!"
    document.body.appendChild(e)
}

// 다른 JS에서 show()함수를 import하게 하고 싶다면 반드시 내보내야한다.
// 하나의 .js 안에서 여러개를 export 할 수 있음. 그 중에 반드시 1개는 default키워드 필요

export default show
//여러개가 아니여도 [export default]는 무조건 하나 있어야한다. 

//또 다른 함수도 export 해보기 
export function addTextToBody(message){
    const e = document.createElement('h4')
    e.textContent=message
    document.body.appendChild(e)
}
//export addTextToBody //ERROR : 디폴트가 없으면 함수 선언하면서 export를 명시

//변수나 상수도 export가 가능함
export const num = 100
export let age = 20