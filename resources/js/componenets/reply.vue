<template>
    <div>
        <h4>
            {{this.reply.body}}
        </h4>
    </div>
</template>

<script>
export default {
    name: 'reply',
    props: ['reply']
}
</script>
