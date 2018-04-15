import { VOTER_CONFIG } from '../config.js';
import Axios from 'axios';

export default {
    getCandidates: function() {
        return Axios.get( VOTER_CONFIG.API_URL + '/candidates' );
    },
    getCandidate: function(candidateID){
        return Axios.get( VOTER_CONFIG.API_URL + '/candidates/' + candidateID );
    },
    postAddCandidate: function(first_name, last_name){
        return Axios.post( VOTER_CONFIG.API_URL + '/candidates', {
            first_name: first_name,
            last_name: last_name,
        });
    },
}