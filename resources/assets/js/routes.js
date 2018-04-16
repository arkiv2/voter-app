import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        {
            path: '/',
            name: 'layout',
            component: Vue.component('Layout', require('./pages/Layout.vue')),
            children: [
                {
                    path: 'dashboard',
                    name: 'dashboard',
                    component: Vue.component('Dashboard', require('./pages/Dashboard.vue'))
                },
                {
                    path: 'voters',
                    name: 'voters',
                    component: Vue.component('Voters', require('./pages/Voters/Index.vue'))
                },
                {
                    path: 'voters/new',
                    name: 'newvoter',
                    component: Vue.component('NewVoter', require('./pages/Voters/Create.vue'))
                },
                {
                    path: 'voters/:id',
                    name: 'voter',
                    component: Vue.component('Voter', require('./pages/Voters/Show.vue'))
                },
                {
                    path: 'candidates',
                    name: 'candidates',
                    component: Vue.component('Candidates', require('./pages/Candidates/Index.vue'))
                },
                {
                    path: 'candidates/new',
                    name: 'newcandidate',
                    component: Vue.component('NewCandidate', require('./pages/Candidates/Create.vue'))
                },
                {
                    path: 'candidates/:id',
                    name: 'candidate',
                    component: Vue.component('Candidate', require('./pages/Candidates/Show.vue'))
                },
            ]
        },
    ]
})