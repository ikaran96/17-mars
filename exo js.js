//exo 1
var a=5;
var b=10;
if(a>b){
    console.log(a+" est plus grand que " +b);
}else if (a<b){
    console.log(b+" est plus grand que "+a);
}else {
    console.log(a+" est égal à "+b);
}

//exo 2
var a=5;
var b=10;
if(a<b){
    console.log(a+" est plus petit que " +b);
}else if (a>b){
    console.log(b+" est plus grand que "+a);
}else {
    console.log(a+" est égal à "+b);
}

//exo 3

console.log(a+"/"+b);
var c =a;
a=b;
b=c;
console.log(a+"/"+b);

//exo 4

var res=a+b;
console.log(res);

//exo 5

var res=Math.random()*100;
console.log(res);

function random_int(min, max){
    return Math.floor(min + (Math.random() * Math.floor(max-min)));
}

//exo 6

var res=random_int(5,10);
console.log('random = ' + res);



//exo 7

var d=6;
var e=7;

console.log('addition:' +addition(d,e));

function addition(a,b){
    return a+b;
    }


//exo 8

var rand=random_int(1,100);
if (rand<50){
    console.log('je suis nulle');

}else {
    console.log('je suis bon');
}


//Exo 9

var x=random_int(0,5);



function exo9(x){
    switch(x){
        case 1:
        console.log('AAA');
        break;
        case 2:
        console.log("BBB");
        break;
        case 3:
        console.log("CCC");
        break;
        case 4:
        console.log("DDD");
        break;
        default:
            console.log('je suis une perruche');
    }
}


//exo 10


for(var i=0;i<10;i++){
    console.log(random_int(0,100));
}

//exo 11

var table=[];

for(var i=0;i<10;i++){
    table[i]=random_int(0,100);
}


//exo 12

var table=[];
var res=0;

for(var i=0;i<10;i++){
    table[i]=random_int(0,100);
    console.log("valeur : "+i+table[i]);
    res=res+table[i];
}

