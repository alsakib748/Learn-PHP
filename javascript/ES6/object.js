let billgates ={shirt:true,shirtColor:"offwhite",swetter:true,swetterColor:"Grey",smaile:true,height:5.7,weight:"62Kg"};
// for(let val in billgates){
//     console.log(billgates[val]);
// }
// for(let val of billgates){
//     console.log(val);  /// Showed error of object execute 
// }
// billgates.forEach(function(val){
//     console.log(val);  /// Showed error of object execute
// });
for(let val in billgates){
    // console.log(val+" : "+billgates[val]);
}
// console.log(billgates["shirt"]);
// console.log(billgates["smaile"]);
// console.log(billgates["height"]);
const billGatesPro = {
    shirt: {
        color: "offwhite",
        size : 'L',
        brand: "H&M",
        quality: "Good",
        conrton: true
    },
    swetter: {
        color: "grey",
        size: 'M',
        brand: "bata",
        price: "$200",
        soft: true
    },

    face: {
        smile: true,
        nose: "tall",
        eye: "white-grey",
        skin_color: "white",
        shape: "round",
        mouth: {
            lips: "round",
            teeth: true,
            teeth_color: "white",
            total_teeth: "28",
            lips_color: "white"
        }
    }
};
// console.log(billGatesPro["shirt"]["color"]);
// console.log(billGatesPro["swetter"]["price"]);
// console.log(billGatesPro["face"]["mouth"]["total_teeth"]);
// for(let object in billGatesPro){
//     for(let subObject in object){
//         console.log(billGatesPro[subObject]);
//         // for(let subsObject in subObject){
//         //     console.log
//         // }
//     }
// }
// console.log(billGatesPro);
// console.log(billgates); 
// let jsonData =  JSON.stringify(billGatesPro,null,3);
// console.log(jsonData);

for(let val in billGatesPro){
    console.log(billGatesPro[val]["color"]);
    // for(let i=0;i<val.length;i++){
    //     console.log(billGatesPro[val][i]);
    // }
    // for(let value in val){
    //     console.log(billGatesPro[val]);
    // }
}


