import ApiService from '@/api/AppApi.js'

export const namespaced = true

export const state = {
  eventsTotal: 0,
  events: [],
  event: {}
}

export const mutations = {
  ADD_EVENT(state, event) {
    state.events.push(event)
  },
  SET_EVENTS(state, events) {
    state.events = events
  },
  SET_EVENT(state, event) {
    state.event = event
  },
  SET_EVENTS_TOTAL(state, eventsTotal) {
    state.eventsTotal = eventsTotal
  }
}

export const actions = {
  createEvent({ commit }, event) {
    return ApiService.createEvent(event).then(() => {
      commit('ADD_EVENT', event)
    })
  },

  fetchEvents({ commit }, { perPage, page }) {
    ApiService.getEvents(perPage, page)
      .then(response => {
        commit('SET_EVENTS_TOTAL', parseInt(response.headers['x-total-count']))
        commit('SET_EVENTS', response.data)
      })
      .catch(error => {
        console.log('Some error occurred' + error.response)
      })
  },
  fetchEvent({ commit, getters }, id) {
    var event = getters.getEventById(id)
    if (event) {
      commit('SET_EVENT', event)
    } else {
      ApiService.getEvent(id)

        .then(response => {
          commit('SET_EVENT', response.data)
        })
        .catch(error => {
          console.log('Some error occurred' + error)
        })
    }
  }
}

export const getters = {
  getEventById: state => id => {
    return state.events.find(event => event.id === id)
  }
}
