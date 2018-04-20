<template>
    <vue-table class="box"
        :path="path"
        id="voters">
    </vue-table>
</template>

<script>
    import VueTable from '../enso/vuedatatable/VueTable.vue';
    export default {
        components: { VueTable },
        data() {
            return {
                path: 'http://voter.test/voters/table/init'
            };
        },
    };
</script>