<template>
    <div>
        <li>
        <h4>
            {{this.reply.body}}
        </h4>
        </li>
    </div>
</template>

<script>
export default {
    name: 'reply',
    props: ['reply']
}
</script>
