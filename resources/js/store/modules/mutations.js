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
        localStorage.setItem("token", payload.data.access_token);
        localStorage.setItem("id", payload.data.user_id)
    },

    LOGIN(state, payload) {
        state.isLoggedIn = true;
        localStorage.setItem("token", payload.data.access_token);
        localStorage.setItem("id", payload.data.user_id)
    },

    LOGOUT(state, payload) {
        state.isLoggedIn = false;
        localStorage.clear();
    },

    CREATE_POST(state, payload) {
        state.posts.push(payload);
    },

    CREATE_COMMENT(state, payload) {
        console.log(state.currentPost.comments)
        state.currentPost.comments.push(payload);
    },

    CREATE_REPLY(state, payload) {
        state.currentPost.comments[payload.id].replies.push(payload);
    },
};