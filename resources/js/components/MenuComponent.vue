<template>
    <v-app>
        <v-navigation-drawer>
            <v-list-item title="Laravel" :subtitle="userName"></v-list-item>
            <v-divider></v-divider>
            <v-list-item link title="Log in" href="login"></v-list-item>
            <v-list-item link title="Register" href="register"></v-list-item>
            <v-list-item link title="Profile" href="profile"></v-list-item>
        </v-navigation-drawer>
        <v-main>
            <v-container>
                <slot></slot>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
export default {
    name: "MenuComponent",
    props: {
        userName: {
            type: String,
            required: true,
        },
    },
};
</script>
