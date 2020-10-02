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
  createEvent({ commit, dispatch }, event) {
    return ApiService.createEvent(event)
      .then(() => {
        commit('ADD_EVENT', event)
        // SUCCESS notification
        const notification = {
          type: 'success',
          message: 'Your event has been created!!!'
        }
        dispatch('notification/add', notification, { root: true })
      })
      .catch(error => {
        // ERROR notification
        const notification = {
          type: 'error',
          message: 'There was a problem creating your event: ' + error.message
        }
        dispatch('notification/add', notification, { root: true })
        // We throw error here, because in EventCreate view we need to know that error is happend, if we catch it only here,
        // EventCreate component would will not know that error is happend
        throw error
      })
  },

  fetchEvents({ commit, dispatch }, { perPage, page }) {
    ApiService.getEvents(perPage, page)
      .then(response => {
        commit('SET_EVENTS_TOTAL', parseInt(response.headers['x-total-count']))
        commit('SET_EVENTS', response.data)
      })
      .catch(error => {
        // >> notification > state > show in UI / browser to user that error occured

        // { type: error, message; error.message } >> action add() >> mutation PUSH >> state notifications []

        const notification = {
          type: 'error',
          message: 'There was a problem fetching events: ' + error.message
        }
        dispatch('notification/add', notification, { root: true })
        // console.log('Some error occurred: ' + error.message)
      })
  },
  fetchEvent({ commit, getters, dispatch }, id) {
    var event = getters.getEventById(id)
    if (event) {
      commit('SET_EVENT', event)
    } else {
      ApiService.getEvent(id)

        .then(response => {
          commit('SET_EVENT', response.data)
        })
        .catch(error => {
          // { type: error, message; error.message, id:2} >> action add() >> mutation PUSH >> state notifications []
          const notification = {
            type: 'error',
            message: 'There was a problem fetching event: ' + error.message
          }
          dispatch('notification/add', notification, { root: true })
        })
    }
  }
}

export const getters = {
  getEventById: state => id => {
    return state.events.find(event => event.id === id)
  }
}
