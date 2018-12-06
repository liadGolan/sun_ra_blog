export default {
    GET_POSTS(state, payload) {
        state.posts = payload.data;
    },

    GET_CURRENT_POST(state, payload) {
        state.currentPost = payload.data;
    },

    CLEAR_CURRENT_POST(state, payload) {
        state.currentPost = [];
    },

    SIGN_UP(state, payload) {
        state.isLoggedIn = true;
    },

    LOGIN(state, payload) {
        state.isLoggedIn = true;
    },

    LOGOUT(state, payload) {
        state.isLoggedIn = false;
    },
};