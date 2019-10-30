<template>
    <div class="chat-message chat-message-own">
        <strong class="chat-message-user">Hakim</strong>
        <span class="chat-message-timestamp">12:00</span>
        <p class="chat-message-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non, voluptatem.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni cum impedit voluptates, debitis ut nobis repellat adipisci dolores pariatur dolorem!
        </p>
    </div>
</template>

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
