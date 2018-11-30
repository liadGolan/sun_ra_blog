<template>
    <div>
        <div v-if="currentPost != []">
            <post-page :post="currentPost"></post-page>
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

    created() {
        this.$store.dispatch('getCurrentPost', this.$route.params.id);
    },

    computed: {
        ...mapGetters([
            'currentPost'
        ])
    }
}
</script>

