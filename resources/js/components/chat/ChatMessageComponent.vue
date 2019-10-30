<template>
    <div class="chat-message" v-bind:class="{ 'chat-message-own': message.selfOwned }">
        <strong class="chat-message-user">{{ message.user.name }}</strong>
        <span class="chat-message-timestamp">{{ message.created_at }}</span>
        <p class="chat-message-body">{{ message.body }}</p>
    </div>
</template>

<script>
export default {
    props: ['message']
}
</script>

<style lang="scss">
    .chat {
        &-message {
            padding: 15px;
            border-bottom: 1px solid #eee;

            &-own {
                background-color: #f0f0f0;
            }

            &-user {
                font-weight: 800;
            }

            &-body {
                margin-bottom: 0;
                white-space: pre-wrap;
            }

            &-timestamp {
                color: #aaa;
            }
        }
    }
</style>
