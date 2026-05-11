import { api } from './services/api-service.js';

window.api = api;

async function initAPI() {
    console.log('🌐 API Service Initialized');
    console.log('📡 Base URL:', api.baseURL);
    
    const testResult = await api.getUsers();
    if (testResult.success) {
        console.log('✅ API Connection: SUCCESS');
        console.log('👥 Total users available:', testResult.data.length);
    } else {
        console.log('❌ API Connection: FAILED');
    }
}

initAPI();