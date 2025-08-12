// Arithematic Operators in JavaScript
let num_one = 10;
let num_two = 20;

let result_sum = num_one + num_two; // Addition
let result_sub = num_one - num_two; // Subtraction
let result_mul = num_one * num_two; // Multiplication
let result_div = num_one / num_two; // Division
let result_mod = num_one % num_two; // Modulus
let result_exp = num_one ** num_two; // Exponentiation

console.log("Addition: ", result_sum);
console.log("Subtraction: ", result_sub);
console.log("Multiplication: ", result_mul);
console.log("Division: ", result_div);
console.log("Modulus: ", result_mod);
console.log("Exponentiation: ", result_exp);

// checking type of operators using typeof operator
console.log(typeof result_exp);
console.log(typeof "DAV College");

// Assignment Operators in JavaScript
let a = 10;
let b = 20;
let d = a;
let e = 10;
let c = a + b;

// Comparison Operators in JavaScript
console.log("a != b: ", a != b);
console.log("a == b: ", a == b);
console.log("a < b: ", a < b);
console.log("a > b: ", a > b);
console.log("a >= b: ", a >= b);
console.log("a <= b: ", a <= b);
console.log("d === a: ", d === a);
console.log("d === e: ", d === e);
console.log("d == a: ", d == a);
console.log("d == e: ", d == e);
// incase of string for === and ==
let college_name = 'DAV';
let title = college_name;
let college = 'DAV';
console.log("college_name == title", college_name == title);
console.log("college == name", college == college_name);
console.log("college == title", college == title);
console.log("college_name === title", college_name === title);
console.log("college === college_name", college == college_name);
console.log("college === title", college === title);
let price = 120;
let total = '120';
console.log("price == total", price == total);
console.log("price === total", price === total);
// Logical Operators in JavaScript
console.log("a != b && a == b", a != b && a == b); // logical AND
console.log("a != b && a == d", a != b && a == d); // logical AND
console.log("a != b || a == b", a != b || a == b); // logical OR
console.log("a != b || a == d", a != b || a == d); // logical OR
console.log("a != b || a == b", !(a != b) || a == b); // logical NOT