import { api } from './services/api-service.js';

async function demoGetUsers() {
    console.log('========== GET USERS ==========');
    const result = await api.getUsers();
    if (result.success) {
        console.log('Data users:', result.data.slice(0, 3));
        return result.data;
    }
    return [];
}

async function demoGetUserById() {
    console.log('========== GET USER BY ID ==========');
    const result = await api.getUserById(1);
    if (result.success) {
        console.log('User ID 1:', result.data.name, result.data.email);
        return result.data;
    }
    return null;
}

async function demoCreatePost() {
    console.log('========== CREATE POST ==========');
    const newPost = {
        title: 'Belajar Bahasa Isyarat',
        body: 'Materi bahasa isyarat sangat menyenangkan dan mudah dipahami',
        userId: 1
    };
    const result = await api.createPost(newPost);
    if (result.success) {
        console.log('Post created:', result.data);
        return result.data;
    }
    return null;
}

async function demoUpdatePost() {
    console.log('========== UPDATE POST ==========');
    const updatedPost = {
        id: 1,
        title: 'Updated: Belajar Bahasa Isyarat Dasar',
        body: 'Updated: Materi alfabet A-Z dan angka 1-10',
        userId: 1
    };
    const result = await api.updatePost(1, updatedPost);
    if (result.success) {
        console.log('Post updated:', result.data);
        return result.data;
    }
    return null;
}

async function demoDeletePost() {
    console.log('========== DELETE POST ==========');
    const result = await api.deletePost(1);
    if (result.success) {
        console.log('Post deleted successfully');
        return true;
    }
    return false;
}

async function demoPromiseAll() {
    console.log('========== PROMISE ALL ==========');
    const [users, posts, comments] = await Promise.all([
        api.getUsers(),
        api.getPosts(),
        api.getComments()
    ]);
    console.log('Users count:', users.data?.length || 0);
    console.log('Posts count:', posts.data?.length || 0);
    console.log('Comments count:', comments.data?.length || 0);
}

async function demoAsyncAwaitError() {
    console.log('========== ASYNC AWAIT WITH ERROR ==========');
    async function fetchWithRetry(url, maxRetries = 3) {
        for (let i = 1; i <= maxRetries; i++) {
            try {
                const response = await fetch(url);
                if (!response.ok) throw new Error(`HTTP ${response.status}`);
                return await response.json();
            } catch (error) {
                if (i === maxRetries) throw error;
                await new Promise(resolve => setTimeout(resolve, 1000));
            }
        }
    }
    
    try {
        const data = await fetchWithRetry('https://jsonplaceholder.typicode.com/users/1');
        console.log('Fetch success:', data.name);
    } catch (error) {
        console.error('Fetch failed:', error.message);
    }
}

async function demoArrayMethodsWithApi() {
    console.log('========== ARRAY METHODS WITH API ==========');
    const result = await api.getUsers();
    if (result.success) {
        const users = result.data;
        
        const names = users.map(user => user.name);
        console.log('Map - Names:', names.slice(0, 3));
        
        const activeUsers = users.filter(user => user.id <= 5);
        console.log('Filter - First 5 users:', activeUsers.length);
        
        const totalIds = users.reduce((sum, user) => sum + user.id, 0);
        console.log('Reduce - Total IDs:', totalIds);
    }
}

async function demoLocalStorageWithApi() {
    console.log('========== LOCALSTORAGE WITH API ==========');
    const cached = localStorage.getItem('api_users');
    
    if (cached) {
        console.log('From cache:', JSON.parse(cached).slice(0, 2));
    } else {
        const result = await api.getUsers();
        if (result.success) {
            localStorage.setItem('api_users', JSON.stringify(result.data));
            console.log('Saved to localStorage:', result.data.length, 'users');
        }
    }
}

async function runAllDemos() {
    console.log('========================================');
    console.log('REST API DEMOS - ISYARATKITA');
    console.log('========================================');
    
    await demoGetUsers();
    await demoGetUserById();
    await demoCreatePost();
    await demoUpdatePost();
    await demoDeletePost();
    await demoPromiseAll();
    await demoAsyncAwaitError();
    await demoArrayMethodsWithApi();
    await demoLocalStorageWithApi();
    
    console.log('========================================');
    console.log('ALL DEMOS COMPLETED');
    console.log('========================================');
}

export { runAllDemos };