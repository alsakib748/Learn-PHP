
let fruits = ["banana","apple","strawberry","orange","mango"];

for(let val in fruits){
    console.log(fruits[val]);
}
    console.log("\n");
let language = new Array("HTML","CSS","JS","PHP","SQL");

for(let value in language){
    console.log(language[value]);
}
    console.log("\n");
let number = new Array(0,1,2,3,4,5,6,7,8,9);
number.forEach(function(elements){
    console.log(elements);
});

let name = new Array("Sakib","Ayon","Shihab","Rakib","Shifat");
for(let x of name){
    console.log(x);
}