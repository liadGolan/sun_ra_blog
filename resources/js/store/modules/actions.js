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
    }
};