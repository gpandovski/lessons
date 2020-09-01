require('./bootstrap');


window.Vue = require('vue');


window.Event = new Vue();

// Child single plan component
let PlanSelectorItemComponent = {
    template: '#plan-selector-item-template',
    props: {
        name: {
            type: String,
            required: true
        },
        selectedPlan: {
            type: String
        }
    },
    computed: {
        isSelected() {
            return this.name === this.selectedPlan
        }
    },
    methods: {
        select() {
            this.$emit('select', this.name);
        }
    }
};

// Parent component which displays all plans
let PlanSelectorComponent = {
    template: '#plan-selector-template',
    components: {
        'plan-selector-item': PlanSelectorItemComponent
    },
    data() {
        return {
            plans: ["Starter", "Basic", "Pro"],
            selectedPlan: null
        }
    },
    methods: {
        selectPlan(payload) {
            this.selectedPlan = payload;
        }
    }
};

// let AskServerButtonComponent = {
//     template: "<button class='btn btn-primary' @click='getData'>Get data from server</button>",
//     methods: {
//         getData() {
//             // 1 first
//             axios
//                 .get('/posts')
//                 .then((response) => {
//                     console.log(response); // 3 thi
//                 })
//                 .catch();
//             console.log("Button clicked"); // 2 second
//         }
//     }
// }



Vue.component('coupon', {
    template: '<input placeholder="Enter your coupon code" @blur="onCouponApplied">',
    methods: {
        onCouponApplied() {
            // this.$emit('applied')
            Event.$emit('applied');
        }
    }
})

// Vue.component('event-card', require('./components/EventCardComponent.vue').default);
Vue.component('event-list', require('./components/EventListComponent.vue').default);

Vue.component('card-layout', {
    template: '#card-layout-template',

});

Vue.component('todo-item', {
    template: '#todo-item-template',
    data() {
        return {
            completed: false,

        }
    },
});


Vue.component('progress-view', {
    data() {
        return { completionRate: 0 }
    }
});


const app = new Vue({
    el: '#app',
    components: {
        'plan-selector': PlanSelectorComponent,
        // 'request-button': AskServerButtonComponent
    },
    data: {
        couponApplied: false,
        people: [
            'John',
            'Niko',
            'Matt'
        ]
    },
    beforeCreate() {
        console.log("Before create hook/function is called", this.people); // this.people - undefined, reactivity is not seted up here and you cannot access your data
    },
    created() {
        console.log("Created, here we have access to our data", this.people); // good place to put some initail data, ajax calls etc.
    },
    beforeMount() {
        console.log("BeforeMount hook, virtual DOM is created here"); // init of virtual DOM used for computations
    },
    mounted() {
        // this.$el
        console.log("Mounted hook", this.people, this.$el);
    },
    beforeDestroy() {
        console.log("Before destroy hook");
    },
    destroyed() {
        console.log("Destroyed hook triggered");
    }
    // methods: {
    //     onCouponApplied() {
    //         this.couponApplied = true;
    //     }
    // },
    // created() {
    //     Event.$on('applied', () => alert("Handled!"))
    // }
});



// data: {
//     couponApplied: false
// }
// created() {
//     Event.$on('applied', () => alert("Handled!"))
// }
