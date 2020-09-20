<template>
  <div>
    <h1>Create Event</h1>
    <p>Username: {{ user.name }}</p>
    <p>Id: {{ user.id }}</p>
    <p>Total categories: {{ categoryLength }}</p>
    <p>Total events: {{ eventsLength }}</p>
    <p>First event: {{ getEventById(1) }}</p>
    <!-- Homework: create a form with fields: title, description, location, date (how to add a date?question?), time, button(submit) -->
  </div>
</template>
<script>
import { mapState, mapGetters } from 'vuex'
export default {
  computed: {
    ...mapGetters(['categoryLength', 'eventsLength', 'getEventById']),
    ...mapState(['user', 'categories'])
  }
  // computed: mapState({
  //   userName: state => state.user.name,
  //   userId: state => state.user.id
  // })
  // computed: {
  //   userName() {
  //     return this.$store.state.user.name
  //   },
  //   userId() {
  //     return this.$store.state.user.id
  //   }
  // }
}
</script>
