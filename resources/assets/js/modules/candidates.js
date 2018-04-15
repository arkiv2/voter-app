import CandidateAPI from '../api/candidate.js';

export const candidates = {
    state: {
        candidates: [],
        candidatesLoadStatus: 0,

        candidate: {},
        candidateLoadStatus: 0
    },
    actions: {
        loadCandidates( { commit }) {
            commit('setCandidatesLoadStatus', 1);

            CandidateAPI.getCandidates()
                .then(function(response) {
                    commit('setCandidates', response.data);
                    commit('setCandidatesLoadStatus', 2);
                })
                .catch(function() {
                    commit('setCandidates', []);
                    commit('setCandidatesLoadStatus', 3);
                });
        },
        loadCandidate( { commit }, data) {
            commit('setCandidateLoadStatus', 1);

            CandidateAPI.getCandidate(data.id)
                .then(function (response) {
                    commit('setCandidate', response.data);
                    commit('setCandidateLoadStatus', 2);
                })
                .catch(function () {
                    commit('setCandidate', {});
                    commit('setCandidateLoadStatus', 3);
                });
        }
    },
    mutations: {
        setCandidatesLoadStatus(state, status) {
            state.candidatesLoadStatus = status;
        },
        setCandidates(state, candidates) {
            state.candidates = candidates;
        },

        setCandidateLoadStatus(state, status) {
            state.candidateLoadStatus = status;
        },

        setCandidate(state, candidate) {
            state.candidate = candidate;
        }
    },
    getters: {
        getCandidatesLoadStatus(state) {
            return state.candidatesLoadStatus;
        },
        getCandidates(state) {
            return state.candidates;
        },

        getCandidateLoadStatus(state) {
            return state.candidateLoadStatus;
        },

        getCandidate(state) {
            return state.candidate;
        }
    }
}