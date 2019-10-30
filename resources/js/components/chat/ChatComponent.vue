<template>
    <div class="chat">
        <chat-messages-component></chat-messages-component>
        <form action="#" class="chat-form">
            <textarea
                id="body"
                cols="30"
                rows="4"
                class="chat-form-input"
            ></textarea>
            <span class="chat-form-helptext">Hit return</span>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
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
