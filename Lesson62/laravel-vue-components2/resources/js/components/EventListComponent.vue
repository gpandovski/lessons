<template>
  <div>
    <h1>Events Listing</h1>
    <event-card>Card 1</event-card>
    <event-card>Card 2</event-card>
  </div>
</template>

<script>
import EventCardComponent from "./EventCardComponent.vue";

export default {
  components: {
    "event-card": EventCardComponent,
  },
};
</script>

<style scoped>
</style>