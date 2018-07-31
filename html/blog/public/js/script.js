/*different types of variables*/

console.log("different types of variables:");

let num = 5; 
console.log(num);

let str = "hello";
console.log(str);

let bool = true;
console.log(bool);

let som = null;
console.log(som);

let a;
console.log(a);

let user = { name: "Ivan" };
console.log(user);

const str1 = "some str";
console.log("This is constanta: " + str1);

// array 
let arr = [num, str, bool, som, a, user];
console.log(arr);

// combo of cycles consol.log + typeof
// for 
for(let i=0; i<arr.length; i++){
    console.log("Type of " + i + " element of array is: "  + typeof(arr[i]));
}

// while
i=0;
while(i<arr.length){
    console.log("Type of " + i + " element of array is: "  + typeof(arr[i]));
    i++;
}

// do while
i=0;
do{
    console.log("Type of " + i + " element of array is: "  + typeof(arr[i]));
    i++;
} while(i<arr.length);


let x = 'simple' + 'string';
console.log(x);

console.log('1'+5); //string

console.log(+'5'); //number

let z = '5';
let c = '4';
console.log(+z + +c);

let j=1;
j++;
console.log(j);

let userAge = prompt("enter your age");
if (userAge >=18){
    console.log("All right!");
}
else {
    console.log("You are small");
}

