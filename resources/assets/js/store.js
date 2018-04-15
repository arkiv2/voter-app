/*
|-------------------------------------------------------------------------------
| VUEX store.js
|-------------------------------------------------------------------------------
| Builds the data store from all of the modules for the Voter app.
*/
/*
  Adds the promise polyfill for IE 11
*/

require ('es6-promise').polyfill();

import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

import { candidates } from './modules/candidates.js';

export default new Vuex.Store({
    modules: {
        candidates,
    }
});