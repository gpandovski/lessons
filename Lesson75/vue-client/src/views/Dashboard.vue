<template>
  <div>
    <h1>Dashboard</h1>
    <template v-if="!isLoading">
      <EventCard v-for="event in events" :key="event.id" :event="event" />
    </template>
    <p v-else>
      Loading events
    </p>
  </div>
</template>

<script>
import axios from 'axios'
import EventCard from '../components/EventCard'

export default {
  components: { EventCard },
  data() {
    return {
      isLoading: true,
      events: []
    }
  },
  created() {
    let options = {
      headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json'
      }
    }
    axios
      .get('https://laravel-rest.test/dashboard', options)
      .then(({ data }) => {
        this.events = data.events
        this.isLoading = false
      })
  }
}
</script>
