<template>
    <div>
        <li>
            <h4>
                {{this.comment.body}}
            </h4>
            <h3>
                Replies
            </h3>
            <div v-if="this.comment.id">
            <reply-creation :key="this.comment.id" :id="this.comment.id"></reply-creation>
            </div>
            <div v-if="this.comment.replies != null && this.comment.replies.length > 0">
                <ul>
                    <reply v-for="reply in this.comment.replies" :key="reply.body" :reply="reply"></reply>
                </ul>
            </div>
        </li>
    </div>
</template>

<script>
import reply from './reply.vue';
import replyCreation from './replyCreation.vue';

export default {
    name: 'comment',
    props: ['comment'],

    components: {
        reply,
        replyCreation
    }
}
</script>
