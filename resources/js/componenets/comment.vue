<template>
    <div>
        <h4>
            {{this.comment.body}}
        </h4>
        <div v-if="this.comment.replies != null && this.comment.replies.length > 0">
            ------------------------------------------------------------
            <h3>
                Replies
            </h3>
            <reply v-for="reply in this.comment.replies" :key="reply.body" :reply="reply"></reply>
            ------------------------------------------------------------
        </div>
    </div>
</template>

<script>
import reply from './reply.vue'

export default {
    name: 'comment',
    props: ['comment'],

    components: {
        reply
    }
}
</script>
