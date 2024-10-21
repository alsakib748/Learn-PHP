
let mp = new Map();

mp.set("key1","Bangladesh");
mp.set("key2","India");
mp.set("key3","China");
mp.set("key4","Pakistan");
mp.set("key5","UAE");
mp.set("key6","Saudi Arabia");

for(let keys of mp.keys()){
    console.log(keys);
}
console.log("\n");
for(let values of mp.values()){
    console.log(values);
}
console.log("\n\n");
// console.log(mp.values());
// console.log(mp.values());
// console.log(mp.keys());

let mySelf = new Map();

mySelf.set("Name","Al Sakib Ayon");
mySelf.set("Age","23");
mySelf.set("Hometown","Barishal");
mySelf.set("Present","Dhaka");
mySelf.set("Phone","01608566928");
mySelf.set("Email","ayon2465@gmail.com");
mySelf.set("Blood","A+");

// console.log(mySelf.keys());
// console.log(mySelf.values());

for(let val of mySelf.keys()){
    console.log(val);
}
    console.log("\n");
for(let value of mySelf.values()){
    console.log(value);
}

