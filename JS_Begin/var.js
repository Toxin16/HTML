let x=1;
console.log(x);
function f() {
    let y;
    x=10;
    y=20;
    z=30;
    console.log(x);
    console.log(y);
    console.log(z);
    if(y==20) {
        let b=40;
        b++;
        console.log(b);
    }
}
f();
console.log(y);
console.log(x);