// const moduleName = "This is module first";

export const moduleName = "This is module first";

// Exporting individual features
// export let name1, name2, …, nameN; // also var, const
// export let name1 = …, name2 = …, …, nameN; // also var, const
// export function functionName(){...}
// export class ClassName {...}

// // Export list
// export { name1, name2, …, nameN };

// // Renaming exports
// export { variable1 as name1, variable2 as name2, …, nameN };

// // Exporting destructured assignments with renaming
// export const { name1, name2: bar } = o;

export function cube(x) {
  return x * x * x;
}

// export {cube, moduleName};
