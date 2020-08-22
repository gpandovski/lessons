require('./bootstrap');

window.Vue = require('vue');


Vue.component('click-counter', {
    template: '#counter-template',
    data() {
        return {
            counter: 0
        }
    }

}) // click-counter - tag how to show component in the html tree

const app = new Vue({
    el: '#app'
});

// const app = new Vue({
//     el: '#app',
//     data: {
//         header: 'This is Vue Header',
//         newItem: "",
//         state: 'hide',
//         link: "http://www.google.com",
//         items: [
//             {
//                 label: "Item 1",

//                 strikedout: false
//             },
//             {
//                 label: "Item 2",

//                 strikedout: false
//             },
//             {
//                 label: "Item 3",

//                 strikedout: false

//             }
//         ]
//     },
//     computed: {
//         charCount() {
//             return this.newItem.length;
//         },
//         reversedItems() {
//             return this.items.slice(0).reverse();
//         }

//     },
//     methods: {
//         saveItem: function () {
//             // we take value from newItem
//             // we add this value to items array
//             let newItm = this.newItem;
//             this.items.push(
//                 {
//                     label: newItm,
//                     strikedout: false
//                 }
//             );
//             this.newItem = '';
//         },
//         changeState: function (stateValue) {
//             this.state = stateValue;
//             this.newItem = '';
//         },
//         isButtonDisabled: function () {
//             return this.newItem.length === 0;
//         },
//         toggleItem: function (item) {

//             item.strikedout = !item.strikedout;
//         }
//     }
// });

// var value = "Heading 1";
// var element = document.getElementById("app");
// element.text = value;
