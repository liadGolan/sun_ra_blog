<template>
    <div>
        <h3>
            Login
        </h3>
        <br>
        <input type="email" placeholder="email" v-model="email">
        <br>
        <input type="password" placeholder="password" v-model="password">
        <br>
        <button @click="submit" type="button">Submit</button>
    </div>
</template>

<script>
import { mapActions } from 'vuex';

export default {
    name: 'login-component',

    data: function() {
        return {
            email:'',
            password:'',
        }
    },

    methods: {
        ...mapActions([
            'login'
        ]),

        submit: function(event) {
            let data = {
                email: this.email, 
                password: this.password
            };

            this.login(data);
        }
    }
}
</script>
