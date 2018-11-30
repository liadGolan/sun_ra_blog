export default {
    getPosts(context) {
        window.axios.get(`api/posts`)
            .then((response) => {
                context.commit('GET_POSTS', response);
            })
            .catch((error) => {
                
            });
    },
};