<template>
  <div class="notification-container">
    <!-- NotificationBar component  -->
    <NotificationBar
      v-for="notification in notifications"
      :key="notification.id"
      :notification="notification"
    />
    <!-- :notification is prop of NotificationBar component -->
  </div>
</template>

<script>
import NotificationBar from '@/components/NotificationBar.vue'
import { mapState } from 'vuex'

export default {
  components: {
    NotificationBar
  },
  computed: mapState('notification', ['notifications']) // first modulename, second store item
}
// notifications array
// [
//     {"type":"success","message":"Your event has been created!!!","id":1},
//     {"type":"success","message":"Your event has been created!!!","id":2}
// ]

// HOMEWORK : for success add some css class to show messages green
// for error show messages red
// Extra: add X close button to manually remove message
</script>

<style scoped>
.notification-container {
  position: fixed;
  bottom: 0;
  right: 0;
  padding-right: 40px;
}
</style>
