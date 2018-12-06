<template>
    <div>
        <h3>
            Sign Up
        </h3>
        <br>
        <input type="text" placeholder="username" v-model="name">
        <br>
        <input type="email" placeholder="email" v-model="email">
        <br>
        <input type="password" placeholder="password" v-model="password">
        <br>
        <button @click="submit" type="button">Submit</button>
    </div>
</template>

<script>
import { mapActions } from 'vuex'

export default {
    name: 'sign-up',

    data: function() {
        return {
            name:'',
            email:'',
            password:'',
        }
    },

    methods: {
        ...mapActions([
            'signUp'
        ]),

        submit: function(event) {
            let data = {
                name: this.name, 
                email: this.email,
                password: this.password
            };

            this.signUp(data);
        }
    }
}
</script>
