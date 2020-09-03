import EventList from './pages/EventList.vue'
import EventCreate from './pages/EventCreate.vue'
import EventShow from './pages/EventShow.vue'

export default {
    mode: 'history',
    linkActiveClass: 'active',
    routes: [

        {
            path: '/',
            component: EventList,
            name: 'event-list'
        },
        {
            path: '/event/create',
            component: EventCreate,
            name: 'event-create',
        },
        {
            path: '/event/:id',
            component: EventShow,
            name: 'event-show',
            props: true
        },

    ]
}