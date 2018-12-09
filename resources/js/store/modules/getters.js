export default {
    posts: state => state.posts,
    currentPost: state => state.currentPost,
    isLoggedIn: state => state.isLoggedIn,
    getUserId: state => localStorage.getItem('id')
};