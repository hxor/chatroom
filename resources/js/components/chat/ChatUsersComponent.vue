<template>
    <div class="users">
        <div class="users-header">1 user online</div>
        <div class="users-user">
            <a href="#">IDstack</a>
        </div>
    </div>
</template>


<style lang="scss">
    .users {
        background-color: #fff;
        border: 1px solid #d3e0e9;
        border-radius: 3px;

        &-header {
            padding: 15px;
            font-weight: 800;
            margin: 0;
        }

        &-user {
            padding: 0 15px;
            &:last-child {
                padding-bottom: 15px;
            }
        }
    }
</style>
