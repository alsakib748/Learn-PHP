
function add(a,b,...numbers){
    let sum = 0;
    for(let i of numbers){
        sum = sum + i;
    }
    // console.log(sum);
}
add(10,20,30,40,50);

function addChar(a,b,c,...characters){
    let data = '';
    for(let i of characters){
        data = data + i;
    }
    // console.log(data);
}
addChar('A','B','C','D','E');

function addString(a,...longStrings){
    let str = '';
    for(let i of longStrings){
        str = str +" "+ i;
    }
    console.log(str);
}
addString("Al","Sakib","Ayon");