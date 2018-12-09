<template>
    <div>
        <div v-if="!isLoggedIn">
            Please Log In to make a reply
        </div>
        <div v-else>
        <h4>
            Create New Reply
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
    name: 'post-creation',
    props: ['id'],


    data: function() {
        return {
            body:'',
        }
    },

    computed: {
        ...mapGetters([
            'isLoggedIn'
        ])
    },

    methods: {
        ...mapActions([
            'createReply',
            'getUserid'
        ]),

        submit: function(event) {
            let data = {
                user_id: parseInt(this.$store.getters.getUserId, 10),
                comment_id: this.id,
                body: this.body
            };

            this.createReply(data);
        },
    },
}
</script>
