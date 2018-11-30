<template>
    <div>
        <h3>
            {{post.title}}
        </h3>
        <h4>
            {{post.body}}
        </h4>
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