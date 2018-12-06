<template>
    <div>
        <login-header></login-header>
        <h1>
            The Sun Ra Blog: Space is the Place
        </h1>
        <post-creation></post-creation>
        <posts-container></posts-container>
    </div>
</template>

<script>
import postsContainer from '../componenets/postsContainer.vue';
import postCreation from '../componenets/postCreation.vue';
import loginHeader from '../componenets/loginHeader.vue';
export default {
    name: 'home',

    components: {
        postsContainer,
        postCreation,
        loginHeader
    },

    beforeCreate() {
        this.$store.dispatch('getPosts');
    },
}
</script>

