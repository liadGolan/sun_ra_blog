<template>
    <div>
        <h2>
            Posts
        </h2>
        <post-creation></post-creation>
        <ul>
            <div v-if="this.posts != null && this.posts.length > 0">
                    <post-item v-for="post in this.posts" :key="post.title" :post="post"></post-item>
            </div>
        </ul>
    </div>
</template>

<script>
import { mapGetters } from 'vuex';
import { mapActions } from 'vuex';
import postItem from './postItem.vue';
import postCreation from '../componenets/postCreation.vue';


export default {
    name: 'posts-container',

    components: {
        postItem,
        postCreation
    },

    data() {
        return {

        };
    },

    beforeCreate() {
        this.$store.dispatch('getPosts');
    },

    computed: {
        ...mapGetters([
            'posts'
        ]),
    }


}
</script>

