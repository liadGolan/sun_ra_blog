<template>
    <div>
        <div v-if="!isLoggedIn">
            Please Log In to make a comment
        </div>
        <h4>
            Create New comment
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
    name: 'comment-creation',

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
            'createComment'
        ]),

        submit: function(event) {
            let data = {
                body: this.body
            };

            this.createComment(data);
        },
    },
}
</script>
