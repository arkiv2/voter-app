<style>

</style>

<template>
  <div id="home">
     <ul>
        <li v-for="voter in voters">{{ voter.last_name }}</li>
    </ul>
  </div>
</template>

<script>
  export default {
      created() {
          this.$store.dispatch('loadVoters');
      },
      computed: {
          votersLoadStatus() {
              return this.$store.getters.getVotersLoadStatus;
          },

          voters() {
              return this.$store.getters.getVoters.data;
          }
      }
  }
</script>