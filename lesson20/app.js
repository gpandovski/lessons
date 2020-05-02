// console.log("javascript");
// var colors = ["red", "yellow"];

// var input = document.querySelector('input');
// var redBtn = document.querySelector('#make-red');
// var remColorsBtn = document.querySelector('#remove-colors');
// var yellowBtn = document.querySelector('#make-yellow');
// var toggleBtn = document.querySelector('#toggle');
// var para = document.querySelector('p');

// redBtn.addEventListener("click", changeColorRed);
// remColorsBtn.addEventListener("click", remColor);
// yellowBtn.addEventListener("click", changeColorYellow);
// toggleBtn.addEventListener("click", toggleColor);

// function changeColorRed() {
//     para.classList.add('red');
//     // para.className = ""; remove class
// }

// function changeColorYellow() {
//     para.classList.add('red');
//     // para.className = ""; remove class
// }
// function remColor() {
//     if (para.classList.contains(colors[0])) {
//         para.classList.remove(colors[0]);
//     }
//     if (para.classList.contains(colors[1])) {
//         para.classList.remove(colors[1]);
//     }
// }
// function toggleColor() {
//     if (para.classList.contains('red')) {
//         para.classList.replace('red', 'yellow');
//     }
//     // para.classList.toggle('yellow');
// }


// function searchTodo() {
//     var todoId = parseInt(input.value); // parseInt() return number

//     // console.log(typeof todoId === NaN);
//     // console.log(todoId);

//     if (!isNaN(todoId)) { // not a number
//         var url = `https://jsonplaceholder.typicode.com/todos/${todoId}`;
//     } else {
//         alert("Please enter valid number");
//         return;
//     }


//     // fetch(url).then(response => {

//     //     if (response.ok) {
//     //         return response.json();
//     //     } else {
//     //         console.log(response);
//     //         handleError(response);
//     //     }
//     //     return response.json();
//     //     // it goes to data variable
//     // }).then(function (data) {
//     //     console.log(data);
//     // }).catch(function (error) {
//     //     console.log(error);
//     // });
// }



// function handleError(response) {
//     if (response.status === 404) {
//         console.log("Todo not found");
//     }
// }



// sessionStorage and localStorage

// object localStarge.setItem("key", "value");
// object localStarge.getItem("key"); // value

// localStorage.setItem("name", "John");
// localStorage.setItem("age", "29");


// var data = [
//     {
//         "name": "John",
//         "age": 29,
//         "isMarried": true
//     }
// ];

// localStorage.setItem("data", JSON.stringify(data));

// if (!localStorage.getItem("name")) {
//     localStorage.setItem("name", "John");
// }

// console.log(JSON.parse(localStorage.getItem("data")));

// console.log("javascript");
// var colors = ["red", "yellow"];

// // var input = document.querySelector('input');
// var textDiv = document.querySelector('div');
// var toggleBtn = document.querySelector('#toggle-div');
// // var remColorsBtn = document.querySelector('#remove-colors');
// // var yellowBtn = document.querySelector('#make-yellow');
// // var toggleBtn = document.querySelector('#toggle');
// // var para = document.querySelector('p');

// toggleBtn.addEventListener("click", toggleDiv);



// function toggleDiv(event) {
//     console.log(event.target);
//     console.log(this);
//     textDiv.classList.toggle("hidden");
// }


// var url = `https://jsonplaceholder.typicode.com/posts/1`;

// var container = document.querySelector(".container");

// fetch(url).then(response => {
//     return response.json();
// }).then(function (data) {
//     printPostToPage(data);
// }).catch(function (error) {
//     console.log(error);
// });




// function printPostToPage(data) {

//     var processedData = dataTransformation(data);

//     container.innerHTML = postHtml(processedData);
// }


// function dataTransformation(data) {
//     // we calculate, convert, transform
//     var obj = {
//         heading: data.title,
//         paragraph: data.body,
//     };
//     return obj;
// }

// function postHtml(data) {
//     //var div = document.createElement('div');
//     var html = `<div class="card">
//     <h1>${obj.heading}</h1>
//     <p>${obj.paragraph}</p>
//     </div>
//     `;
//     return html;
// }

// }



// function handleError(response) {
//     if (response.status === 404) {
//         console.log("Todo not found");
//     }
// }