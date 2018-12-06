<template>
    <div>
        <router-link :to="'/'">Back to Home</router-link>
        <div v-if="currentPost != []">
            <post-page></post-page>
        </div>
    </div>
</template>

<script>
import postPage from '../componenets/postPage.vue'
import { mapGetters } from 'vuex';
export default {
    name: 'post',
    components: {
        postPage
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

