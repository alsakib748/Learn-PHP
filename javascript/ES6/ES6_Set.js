
let mySet = new Set();

mySet.add("Bangladesh");
mySet.add("India");
mySet.add("Pakistan");
mySet.add("India");
mySet.add("China");
mySet.add("US");
mySet.add("UK");
// mySet.clear();
// mySet.delete("India");
console.log(mySet);
// console.log(mySet.size);
// console.log(mySet.has("US"));
console.log(mySet.values());

let chr = new Set(['A','B','C','D','E']);
// chr.clear();
chr.delete("C");
console.log(chr);
console.log(chr.values());
let num = new Set([1,2,3,4,5,6]);

console.log(num);

let nam = new Set();

nam.add("Sakib");
nam.add("Ayon");
nam.add("Foysal");
nam.add("Rakib");
nam.add("Shakil");

console.log(nam);

let fruits = new Set();
fruits.add("Banana");
fruits.add("Mango");
fruits.add("Orange");
fruits.add("Banana");
fruits.add("Strawberry");
fruits.add("Apple");
// fruits.clear();
// fruits.delete("Strawberry");
for(let val of fruits){
    console.log(val);
}
// console.log(fruits.size);
// console.log(fruits.values());
// console.log(fruits.has("Lucy"));

