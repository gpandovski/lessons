import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    user: { id: '123', name: 'John Doe' },
    categories: [
      'sustainability',
      'nature',
      'animal welfare',
      'housing',
      'education',
      'food',
      'community'
    ],
    events: [
      { id: 1, title: '...', organizer: '...', finished: true },
      { id: 2, title: '...', organizer: '...', finished: true },
      { id: 3, title: '...', organizer: '...', finished: true },
      { id: 4, title: '...', organizer: '...', finished: false }
    ]
  },
  mutations: {},
  actions: {},
  getters: {
    categoryLength: state => {
      return state.categories.length
    },
    eventsLength: state => {
      return state.events.filter(event => !event.finished).length
    },
    // dynamic getters
    getEventById: state => id => {
      return state.events.find(event => event.id === id).title
    }
  }
})
