//1부터 10까지 출력
document.write('1 2 3 4 5 6 7 8 9 10');
document.write('<br><br>');

//1부터 10까지 출력 (for)
for(let i=1; i<=10; i++) {
    document.write(i + ' ');
}
document.write('<br><br>');

//1부터 100까지 3의 배수 출력 (for)
for(i=1; i<=100; i++) {
    if(i % 3 == 0) {
        document.write(i + ' ');
    }
}
document.write('<br><br>');

//1부터 100까지 3의 배수 한 라인에 10개씩 출력 (for)
let cnt;
for(i = 1, cnt = 0; i<=100; i++) {
    if(i % 3 == 0) {
        document.write(i + ' ');
        cnt++;
        if(cnt % 10 == 0)
        document.write('<br>');
    }
}
document.write('<br><br>');

//1~100까지 합
let hap = 0;
for(i=1; i<=100; i++) {
    hap += i;
}
document.write('1~100까지 합 = ' + hap);
document.write('<br><br>');

//1~100까지 8의 배수의 합
for(i=1, hap = 0; i<=100; i++) {
    if (i % 8 == 0) {
    hap += i;
    }
}
document.write('1~100까지 8의 배수의 합 = ' + hap);
document.write('<br><br>');

//1~100까지 중에 처음으로 300을 넘는 숫자
for(i=1, hap = 0; i<=100; i++) {
    hap += i;
    if(hap>=100)
    break;
}
document.write('1~100까지 300이상의 첫번째 합 = ' + hap + '<br>');
document.write('1~100까지 300이상의 첫번째 수 = ' + i);
document.write('<br><br>');

//1~100까지 합 중에 8의 배수를 생략한 합
for(i=1, hap = 0; i<=100; i++) {
    if(i % 8 == 0)
    continue;   //명령을 실행하지 않고 바로 증감함수로
    hap += i;
}
document.write('1~100까지 중에 8의 배수를 생략한 합 = ' + hap);
document.write('<br><br>');

/*1부터 10까지 출력 (while)
i = 1;
let sum = 0;
while(i<=10) {
    sum += i;
    i++;
}
document.write(sum);
*/