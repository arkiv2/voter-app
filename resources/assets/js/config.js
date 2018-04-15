var api_url = '';

switch (process.env.NODE_ENV) {
    case 'development':
        api_url = 'http://voter.test/api';
        break;
    case 'production':
        api_url = 'http://voter.test/api/v1';
        break;
}

export const VOTER_CONFIG = {
    API_URL: api_url,
}