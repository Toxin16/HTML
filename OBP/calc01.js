function display(val){ //텍스트상자에 반환
    document.getElementById('result').value += val  //id가 result인 태그(text창)의 값에 val을 더함
    return val
}

function solve(){ // 계산함수, '='버튼 누르면 호출
    let x = document.getElementById('result').value //text창의 값을 생성한 변수x에 넣음
    let y = eval(x);    //문자열로 받은x를 계산하여 생성한 변수 y로 넘김
    document.getElementById('result').value = y //y의 값을 다시 text창에 나타내는데
    if(y>999999999999) {    //999999999999이상이라면 (text창의 범위를 넘는다면)
        alert("Math Error") //에러메세지 표시
        document.getElementById('result').value = '' //텍스트창 초기화
    }
    return y
}

function clearScreen(){ //C버튼 누르면 호출, 화면 초기화
    document.getElementById('result').value = ''
}

function del() {
    let result = document.getElementById('result');
    result.value = result.value.substring(0, result.value.length - 1);
}