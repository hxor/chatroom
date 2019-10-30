<template>
    <div class="chat-messages">
        <chat-message-component v-for="message in messages" :key="message.id" :message="message"></chat-message-component>
    </div>
</template>

<script>
export default {
    data () {
        return {
            messages: []
        }
    },
    mounted () {
        axios.get('/chat/messages').then((response) => {
            this.messages = response.data
        })
    }
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
