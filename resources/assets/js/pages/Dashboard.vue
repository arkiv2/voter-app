<style>

</style>

<template>
  <div id="home">
     <ul>
        <li v-for="candidate in candidates">{{ candidate.last_name }}</li>
    </ul>
  </div>
</template>

<script>
  export default {
      created() {
          this.$store.dispatch('loadCandidates');
      },
      computed: {
          candidatesLoadStatus() {
              return this.$store.getters.getCandidatesLoadStatus;
          },

          candidates() {
              return this.$store.getters.getCandidates.data;
          }
      }
  }
</script>