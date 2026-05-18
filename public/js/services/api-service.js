const API_BASE_URL = 'https://jsonplaceholder.typicode.com';

class APIService {
    constructor() {
        this.baseURL = API_BASE_URL;
    }

    async get(endpoint) {
        try {
            const response = await fetch(`${this.baseURL}${endpoint}`);
            if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
            const data = await response.json();
            return { success: true, data };
        } catch (error) {
            console.error('API GET Error:', error.message);
            return { success: false, error: error.message };
        }
    }

    async post(endpoint, data) {
        try {
            const response = await fetch(`${this.baseURL}${endpoint}`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data)
            });
            const result = await response.json();
            return { success: true, data: result };
        } catch (error) {
            console.error('API POST Error:', error.message);
            return { success: false, error: error.message };
        }
    }

    async put(endpoint, data) {
        try {
            const response = await fetch(`${this.baseURL}${endpoint}`, {
                method: 'PUT',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data)
            });
            const result = await response.json();
            return { success: true, data: result };
        } catch (error) {
            console.error('API PUT Error:', error.message);
            return { success: false, error: error.message };
        }
    }

    async delete(endpoint) {
        try {
            const response = await fetch(`${this.baseURL}${endpoint}`, {
                method: 'DELETE'
            });
            return { success: response.ok };
        } catch (error) {
            console.error('API DELETE Error:', error.message);
            return { success: false, error: error.message };
        }
    }

    async getUsers() {
        return this.get('/users');
    }

    async getUserById(id) {
        return this.get(`/users/${id}`);
    }

    async getPosts() {
        return this.get('/posts');
    }

    async getComments() {
        return this.get('/comments');
    }

    async createPost(data) {
        return this.post('/posts', data);
    }

    async updatePost(id, data) {
        return this.put(`/posts/${id}`, data);
    }

    async deletePost(id) {
        return this.delete(`/posts/${id}`);
    }
}

export const api = new APIService();