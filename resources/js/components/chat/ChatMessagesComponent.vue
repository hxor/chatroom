<template>
    <div class="chat-messages">
        <chat-message-component></chat-message-component>
    </div>
</template>

<script>
export default {

}
</script>
<style lang="scss">
    .chat {
        &-messages {
            height: 400px;
            max-height: 400px;
            overflow-y: scroll;
        }
    }
</style>
