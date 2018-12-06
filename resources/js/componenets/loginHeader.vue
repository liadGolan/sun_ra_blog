<template>
    <div>
        <div v-if="isLoggedIn">
            <a @click="logMeOut">Logout</a>
        </div>
        <div v-else>
            <router-link :to="'/login/'">Login / Signup</router-link>
        </div>

    </div>
</template>

<script>
import { mapGetters } from 'vuex';
import { mapActions } from 'vuex';

export default {
    name: 'login-header',

    computed: {
        ...mapGetters([
            'isLoggedIn'
        ])
    },

    methods: {
        ...mapActions([
            'logout'
        ]),

        logMeOut: function() {
            this.logout();
        }
    }

}
</script>

