<template>
    <div>
        <router-link :to="'/'">Back to Home</router-link>
        <h1>
            The Sun Ra Blog: Space is the Place
        </h1>
        <signup></signup>
        <login-component></login-component>
    </div>
</template>

<script>
import signup from '../componenets/signup.vue';
import loginComponent from '../componenets/loginComponenet.vue';
export default {
    name: 'login',

    components: {
        signup,
        loginComponent,
    },
}
</script>