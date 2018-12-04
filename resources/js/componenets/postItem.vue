<template>
    <div>
        <li>
            <router-link :to="'/post/' + post.id">
            <h3>
                {{post.title}}
            </h3>
            <h4>
                {{post.body}}
            </h4>
            </router-link>
        </li>
    </div>
</template>

<script>
import { mapGetters } from 'vuex';
import { mapActions } from 'vuex';
export default {
    name: 'post-item',
    props: ['post'],

    data() {
        return {

        };
    },



}
</script>