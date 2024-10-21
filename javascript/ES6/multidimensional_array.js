
let bangladesh = ["Dhaka","barishal","khulna"];
let india = ["mumbai","kolkata","delhi"];
let pakistan = ["multan","karachi","peashweer"];

let asia = [bangladesh,india,pakistan];

// console.log(asia[0]);

// for(let val in asia){
//     for(let i=0;i<asia.length;i++){
//         console.log(asia[val][i]);
//     }
//     console.log("\n");
// }

let num1 = [0,1,2,3];
let num2 = [4,5,6];
let num3 = [7,8,9];

let allNum = [num1,num2,num3];

for(let i=0;i<allNum.length;i++){
    for(let j=0;j<=i.length;j++){
        console.log(allNum[i][j]);
    }
    // console.log(allNum[i][0]);
    console.log("\n");
}