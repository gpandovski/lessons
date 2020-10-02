import ApiService from '@/api/AppApi.js'
import Msg from '@/services/NotificationService.js'

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
  // async function
  async createEvent({ commit, dispatch }, event) {
    try {
      const result = await ApiService.createEvent(event)
      commit('ADD_EVENT', event)
      dispatch(
        'notification/add',
        new Msg('success', 'Your event has been created!!!'),
        { root: true }
      )
      return result
    } catch (ex) {
      dispatch(
        'notification/add',
        new Msg(
          'error',
          'There was a problem creating your event: ' + ex.message
        ),
        { root: true }
      )
      throw ex
    }
  },

  async fetchEvents({ commit, dispatch }, { perPage, page }) {
    try {
      const response = await ApiService.getEvents(perPage, page)
      commit('SET_EVENTS_TOTAL', parseInt(response.headers['x-total-count']))
      commit('SET_EVENTS', response.data)
    } catch (ex) {
      dispatch(
        'notification/add',
        new Msg('error', 'There was a problem fetching events: ' + ex.message),
        { root: true }
      )
    }
  },

  async fetchEvent({ commit, getters, dispatch }, id) {
    var event = getters.getEventById(id)
    if (event) {
      commit('SET_EVENT', event)
    } else {
      try {
        const response = await ApiService.getEvent(id)
        commit('SET_EVENT', response.data)
      } catch (ex) {
        dispatch(
          'notification/add',
          new Msg('error', 'There was a problem fetching event: ' + ex.message),
          { root: true }
        )
      }
    }
  }
}

export const getters = {
  getEventById: state => id => {
    return state.events.find(event => event.id === id)
  }
}
