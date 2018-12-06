<template>
    <div>
        <login-header></login-header>
        <router-link :to="'/'">Back to Home</router-link>
        <div v-if="currentPost != []">
            <post-page></post-page>
        </div>
    </div>
</template>

<script>
import postPage from '../componenets/postPage.vue'
import loginHeader from '../componenets/loginHeader.vue';

import { mapGetters } from 'vuex';
export default {
    name: 'post',
    components: {
        postPage,
        loginHeader
    },

    beforeMount() {
        this.$store.dispatch('getCurrentPost', this.$route.params.id);
    },

    computed: {
        ...mapGetters([
            'currentPost'
        ])
    }
}
</script>

