<template>
    <div>
        <div v-if="!isLoggedIn">
            Please Log In to make a reply
        </div>
        <h4>
            Create New Reply
        </h4>
        <input type="text" placeholder="body" v-model="body">
        <br>
        <button @click="submit" type="button">Submit</button>
    </div>
</template>

<script>
import {mapGetters} from 'vuex';
import {mapActions} from 'vuex';

export default {
    name: 'post-creation',

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
            'createReply'
        ]),

        submit: function(event) {
            let data = {
                body: this.body
            };

            this.createReply(data);
        },
    },
}
</script>
