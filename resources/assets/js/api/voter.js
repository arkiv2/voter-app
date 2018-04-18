import { VOTER_CONFIG } from '../config.js';
import Axios from 'axios';

export default {
    getVoters: function() {
        return Axios.get( VOTER_CONFIG.API_URL + '/voters' );
    },
    getVoter: function(voterID){
        return Axios.get( VOTER_CONFIG.API_URL + '/voters/' + voterID );
    },
    postAddVoter: function(first_name, last_name, zone, precint_number){
        return Axios.post( VOTER_CONFIG.API_URL + '/voters', {
            first_name: first_name,
            last_name: last_name,
            zone: zone,
            precint_number: precint_number,
        });
    },
}