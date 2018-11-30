<template>
    <div>
        <h1>
            The Sun Ra Blog: Space is the Place
        </h1>
        <posts-container></posts-container>
    </div>
</template>

<script>
import postsContainer from '../componenets/postsContainer.vue'
export default {
    name: 'home',

    components: {
        postsContainer,
    }
}
</script>

