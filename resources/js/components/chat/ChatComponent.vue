<template>
    <div class="chat">
        <chat-messages-component></chat-messages-component>
        <form action="#" class="chat-form">
            <textarea
                id="body"
                cols="30"
                rows="4"
                class="chat-form-input"
                v-model="body"
                @keydown="handleMessageInput"
            ></textarea>
            <span class="chat-form-helptext">Hit Return to send or Shift + Return for a new line</span>
        </form>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                body: null
            }
        },
        methods: {
            handleMessageInput (e) {
                if (e.keyCode === 13 && !e.shiftKey) {
                    e.preventDefault();
                    this.send();
                }
            },
            send () {
                console.log(this.body);
            }
        }
    }
</script>

<style lang="scss">
    .chat {
        background-color: #fff;
        border: 1px solid #d3e0e9;
        border-radius: 3px;

        &-form {
            border-top: 1px solid #d3e0e9;
            padding: 10px;

            &-input {
                width: 100%;
                border: 1px solid #d3e0e9;
                padding: 5px 10px;
            }

            &-helptext {
                color: #aaa;
            }
        }
    }
</style>
