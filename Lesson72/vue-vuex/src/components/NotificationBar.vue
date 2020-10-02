<template>
  <div class="notification-bar" :class="notificationTypeClass">
    <p>{{ notification.message }}</p>
  </div>
</template>

<script>
import { mapActions } from 'vuex'
export default {
  props: {
    notification: {
      type: Object,
      required: true
    }
  },
  data() {
    return {
      timeout: null
    }
  },
  computed: {
    notificationTypeClass() {
      return `-text-${this.notification.type}`
    }
  },
  mounted() {
    this.timeout = setTimeout(() => this.remove(this.notification), 2000)
  },
  beforeDestroy() {
    clearTimeout(this.timeout)
  },
  methods: mapActions('notification', ['remove']) // this.remove(notification)
}
</script>
<style scoped>
.notification-bar {
  margin: 1em 0 1em;
}
.-text-success {
  color: #39b982;
}

.-text-error {
  color: tomato;
}
</style>
