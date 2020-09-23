<template>
  <div class="login">
    <h1>Login page</h1>
    <div class="form">
      <label for="username">Username</label>
      <input type="text" class="input" name="username" v-model="username" />
      <button @click="login" class="btn">Login</button>
    </div>
  </div>
</template>
<script>
import store from "../store";

export default {
  data() {
    return {
      username: null,
    };
  },
  methods: {
    login() {
      store.user = this.username;

      let redirectPath = "/user";
      if (this.$route.query.redirect) {
        redirectPath = this.$route.query.redirect; // URL  "https://laravel-travel.test/login?redirect=%2Fuser" extract  "user" from 'redirect'
      }

      // let redirectPath = this.$route.query.redirect || "/user"; same as above

      this.$router.push(redirectPath);
    },
  },
};
</script>
<style scoped>
.form {
  display: flex;
  flex-direction: column;
  max-width: 400px;
  margin: 0 auto;
}
</style>