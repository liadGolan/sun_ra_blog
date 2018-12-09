export default {
    getPosts(context) {
        window.axios.get(`api/posts`)
            .then((response) => {
                context.commit('GET_POSTS', response);
            })
            .catch((error) => {
                
            });
    },

    getCurrentPost(context, payload) {
        window.axios.get('api/post/' + payload)
            .then((response) => {
                context.commit('GET_CURRENT_POST', response);
            })
            .catch((error) => {

            });
    },

    clearCurrentPost(context,payload) {
        context.commit('CLEAR_CURRENT_POST');
    },

    signUp(context, payload) {
        window.axios.post('api/auth/signup', payload)
            .then((response) => {
                context.commit('SIGN_UP', response);
            })
            .catch((error) => {

            });
    },

    login(context, payload) {
        window.axios.post('api/auth/login', payload)
            .then((response) => {
                context.commit('LOGIN', response);
            })
            .catch((error) => {

            });
    },

    logout(context, payload) {
        window.axios.post('api/auth/logout')
            .then((response) => {
                context.commit('LOGOUT', response);
            })
            .catch((error) => {

            });
    },

    createPost(context, payload) {
        window.axios.post('api/createPost', payload)
            .then((response) => {
                context.commit('CREATE_POST', payload);
            })
            .catch((error) => {

            })
    },

    createComment(context, payload) {
        window.axios.post('api/createComment', payload)
            .then((response) => {
                context.commit('CREATE_COMMENT', payload);
            })
            .catch((error) => {
                
            })
    },

    createReply(context, payload) {
        window.axios.post('api/createReply', payload)
            .then((response) => {
                context.commit('CREATE_REPLY', payload);
            })
            .catch((error) => {
                
            })
    }
};