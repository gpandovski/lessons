<template>
  <nav id="nav">
    <ul class="nav-links">
      <li class="links">
        <router-link to="/">Home</router-link>
      </li>
      <li v-for="destination in destinations" :key="destination.name" class="links">
        <router-link
          :to="{name:'DestinationDetails', params: {slug: destination.slug}}"
        >{{destination.name}}</router-link>
      </li>
      <li class="links">
        <router-link to="/user">Dashboard</router-link>
      </li>
    </ul>
  </nav>
</template>
<script>
import store from "../store";

export default {
  data() {
    return {
      destinations: store.destinations,
    };
  },
};
</script>
<style scoped>
#nav {
  display: flex;
  justify-content: center;
  position: sticky;
  background-color: white;
  border-bottom: 1px solid grey;
  top: 0;
  z-index: 1;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
  padding: 0 10px;
}
#nav a.active {
  color: #ab26ab;
}
.nav-links {
  display: flex;
}
.links {
  padding-right: 20px;
  list-style: none;
}
.links:hover {
  text-decoration: underline;
}
</style>