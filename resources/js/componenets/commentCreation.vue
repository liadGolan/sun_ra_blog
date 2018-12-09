<template>
    <div>
        <div v-if="!isLoggedIn">
            Please Log In to make a comment
        </div>
        <div v-else>
        <h4>
            Create New comment
        </h4>
        <input type="text" placeholder="body" v-model="body">
        <br>
        <button @click="submit" type="button">Submit</button>
        </div>
    </div>
</template>

<script>
import {mapGetters} from 'vuex';
import {mapActions} from 'vuex';

export default {
    name: 'comment-creation',

    data: function() {
        return {
            body:'',
        }
    },

    computed: {
        ...mapGetters([
            'isLoggedIn',
            'getUserId',
            'currentPost'
        ])
    },

    methods: {
        ...mapActions([
            'createComment'
        ]),

        submit: function(event) {
            let data = {
                user_id: parseInt(this.$store.getters.getUserId, 10),
                post_id: this.$store.getters.currentPost.id,
                body: this.body
            };

            this.createComment(data);
        },
    },
}
</script>
