<template>
  <div>
    <h1>Events Listing</h1>
    <EventCard v-for="event in events" :key="event.id" :event="event" />
  </div>
</template>

<script>
import EventCard from '@/components/EventCard.vue'
import api from '@/api/AppApi'

export default {
  components: {
    EventCard
  },
  data() {
    return {
      events: []
    }
  },
  created() {
    api
      .getEvents()
      .then(request => {
        this.events = request.data
      })
      .catch(error => {
        console.log('Some error occurred' + error)
      })
  }
}
</script>
