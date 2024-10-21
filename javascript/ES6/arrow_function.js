
var arrowFunction = ()=>{
    // document.write("Arrow function");
    console.log("Arrow Function");
}
arrowFunction();

var parameterizedArrowFunction = (name) =>{
    console.log(name);
}
parameterizedArrowFunction("BUBT");

const restParametersArrowFunction = (...details) => {
    console.log(details);
}
restParametersArrowFunction("Al Sakib Ayon","B.sc in CSE","3.58");

let returnArrowFunction = (...hons) => {
    return "B.sc in "+hons;
}

let data = returnArrowFunction("CSE","EEE","Civil","Automobile","Mechanical");
console.log(data);