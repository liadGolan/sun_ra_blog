<template>
    <div>
        <div>
            <h1>
                {{this.currentPost.title}}
            </h1>
            <h2>
                {{this.currentPost.body}}
            </h2>
        </div>
        <div>
            <h3>
                Comments
            </h3>
        </div>
        <ul>
            <div v-if="this.currentPost.comments != null && this.currentPost.comments.length > 0">
                <comment v-for="comment in this.currentPost.comments" :key="comment.title" :comment="comment"></comment>
            </div>
        </ul>
    </div>
</template>

<script>
import { mapGetters } from 'vuex';
import comment from './comment.vue';
export default {
    name: 'post-page',

    components: {
        comment,
    },

    computed: {
        ...mapGetters([
            'currentPost'
        ]),
    },
}
</script>