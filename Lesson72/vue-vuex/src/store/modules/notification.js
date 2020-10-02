export const namespaced = true

export const state = {
  notifications: [] // store item
}

let nextId = 1

export const mutations = {
  PUSH(state, notification) {
    state.notifications.push({
      ...notification,
      id: nextId++
    })
  },
  DELETE(state, notificationToRemove) {
    state.notifications = state.notifications.filter(
      notification => notification.id !== notificationToRemove.id
    )
  }
}

export const actions = {
  add({ commit }, notification) {
    commit('PUSH', notification)
  },
  remove({ commit }, notificationToRemove) {
    commit('DELETE', notificationToRemove)
  }
}

//Component
/*

state.notifications
[
 
    {"type":"success","message":"Your event has been created!!!","id":1}, 
    {"type":"success","message":"Your event has been created!!!","id":2}
 
]
<div>
    <div>
    {{notification.message}}
    </div>
</div>

NotificationContainer 
        NotificationBar 


*/
