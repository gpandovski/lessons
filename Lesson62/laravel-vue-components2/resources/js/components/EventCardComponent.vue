<template>
  <div>
    <h4>{{title}}</h4>
    <p>
      <slot></slot>
    </p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      title: "Park Cleanup",
    };
  },
};
</script>

<style scoped>
h4 {
  color: green;
}
</style>