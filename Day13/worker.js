var n=0;


//while문의 반복은 너무 빨라서 ui를 변경할 시간도 없어
// 반복작업을 할 때는 권장하지 않아 

// while(true){
//     n++;
//     //document.getElementById('aa').innerHTML=n; 불가! 
//     // 별도의 스레드는 ui를 변경할 수 없음

//     // 메인(ui)스레드에게 n값을 전송
//     postMessage(n);
// }


function fff(){
    n++;
    postMessage(n);

    setTimeout(fff, 500); //0.5초 안에(그림 그릴 시간(ui 변경할) 주는거야) 다시 함수fff 불러줘
}

fff();