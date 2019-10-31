<template>
    <div class="chat-messages" ref="messages">
        <chat-message-component v-for="message in messages" :key="message.id" :message="message"></chat-message-component>
    </div>
</template>

<script>
import Bus from '../../bus';

export default {
    data () {
        return {
            messages: []
        }
    },
    mounted () {
        axios.get('/chat/messages').then((response) => {
            this.messages = response.data
        });

        Bus.$on('message.added', (message) => {
            this.messages.unshift(message);

            if (message.selfOwned) {
                this.$refs.messages.scrollTop = 0;
            }
        });
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
