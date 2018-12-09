<template>
    <div>
        <div v-if="!isLoggedIn">
            Please Log In to make a post
        </div>
        <div v-else>
        <h4>
            Create New Post
        </h4>
        <input type="text" placeholder="title" v-model="title">
        <br>
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
    name: 'post-creation',

    data: function() {
        return {
            title:'',
            body:'',
        }
    },

    computed: {
        ...mapGetters([
            'isLoggedIn',
            'getUserId'
        ])
    },

    methods: {
        ...mapActions([
            'createPost'
        ]),

        submit: function(event) {
            let data = {
                user_id: parseInt(this.$store.getters.getUserId, 10),
                title: this.title,
                body: this.body
            };

            this.createPost(data);
        },
    },
}
</script>
