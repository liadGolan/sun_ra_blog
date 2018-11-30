export default {
    GET_POSTS(state, payload) {
        state.posts = payload.data;
    },

    GET_CURRENT_POST(state, payload) {
        state.currentPost = payload.data;
    },

    CLEAR_CURRENT_POST(state, payload) {
        state.currentPost = [];
    }
};