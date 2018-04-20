<template>
    <vue-filter class="box"
        :options="activeOptions"
        icons
        title="Active"
        v-model="filters.voters.acquired">
    </vue-filter>

</template>

<script>
    import VueFilter from '../enso/bulma/VueFilter.vue';
    export default {
        components: { VueFilter },
        data() {
            return {
                activeOptions: [
                    { value: true, label: 'check', class: 'has-text-success' },
                    { value: false, label: 'times', class: 'has-text-danger' },
                ],
                filters: {
                    voters: {
                        acquired: null,
                    },
                },
                path: 'http://voter.test/voters/table/init'
            };
        },
    };
</script>