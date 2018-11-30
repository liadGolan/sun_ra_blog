<template>
    <div>
        <div>
            <h1>
                {{this.currentPost.title}}
            </h1>
        </div>
        <div>

        </div>
    </div>
</template>

<script>
export default {
    name: 'post-page',
    props:['currentPost']
}
</script>