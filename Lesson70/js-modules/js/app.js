//
// import { cube } from "./module1.js";
// import cube from "./export-default-module.js";
import { cube, foo, graph } from "./graph-module.js";

// console.log("Hi from moduled JS - ESM");
// // console.log("Hi from module " + moduleName);
// console.log(cube(3));

graph.draw();
console.log(cube(3));
console.log(foo);
