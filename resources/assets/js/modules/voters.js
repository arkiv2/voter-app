import VoterAPI from '../api/voter.js';

export const voters = {
    state: {
        voters: [],
        votersLoadStatus: 0,

        voter: {},
        voterLoadStatus: 0,

        voterAddStatus: 0,
    },
    actions: {
        addVoter({commit, state, dispatch}, data) {
            commit('setVoterAddStatus', 1);

            VoterAPI.postAddVoter(data.first_name, data.last_name, data.zone, data.precint_number)
                .then(function(response) {
                    commit('setVoterAddStatus', 2);
                    dispatch('loadVoters');
                })
                .catch(function() {
                    commit('setVoterAddStatus', 3);
                });
        },
        loadVoters({ commit }) {
            commit('setVotersLoadStatus', 1);

            VoterAPI.getVoters()
                .then(function (response) {
                    commit('setVoters', response.data);
                    commit('setVotersLoadStatus', 2);
                })
                .catch(function () {
                    commit('setVoters', []);
                    commit('setVotersLoadStatus', 3);
                });
        },
        loadVoter({ commit }, data) {
            commit('setVoterLoadStatus', 1);

            VoterAPI.getVoter(data.id)
                .then(function (response) {
                    commit('setVoter', response.data);
                    commit('setVoterLoadStatus', 2);
                })
                .catch(function () {
                    commit('setVoter', {});
                    commit('setVoterLoadStatus', 3);
                });
        }
    },
    mutations: {
        setVotersLoadStatus(state, status) {
            state.votersLoadStatus = status;
        },
        setVoters(state, voters) {
            state.voters = voters;
        },

        setVoterLoadStatus(state, status) {
            state.voterLoadStatus = status;
        },

        setVoter(state, voter) {
            state.voter = voter;
        },

        setVoterAddStatus(state, status) {
            state.voterAddStatus = status;
        },
    },
    getters: {
        getVotersLoadStatus(state) {
            return state.votersLoadStatus;
        },
        getVoters(state) {
            return state.voters;
        },

        getVoterLoadStatus(state) {
            return state.voterLoadStatus;
        },

        getVoter(state) {
            return state.voter;
        },

        getVoterAddStatus(state) {
            return state.voterAddStatus;
        },
    }
}