<template>
  <div class="container">
    <a href="#" id="like-button">
      <i class="fa fa-thumbs-up"></i>
      ({{totallike}})
    </a>
  </div>
</template>

<script>
export default {
  data() {
    return {
      totallike: "10",
    };
  },
};
</script>