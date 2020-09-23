<template>
  <div>
    <h1>Welcome {{username}}</h1>
    <p>User page only user should see after login</p>
    <p>
      <router-link :to="{name: 'invoices' }">Invoices</router-link>
    </p>

    <button class="btn" @click="logOut">Log out</button>
  </div>
</template>
<script>
import store from "../store";
export default {
  data() {
    return {
      username: store.user,
    };
  },
  methods: {
    logOut() {
      store.user = null;
      this.$router.push("/");
    },
  },
};
</script>