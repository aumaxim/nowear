<template>
    <v-app>
        <v-navigation-drawer app>
            <v-list>
                <v-list-item>
                    <v-list-item-content>
                        <v-list-item-title class="title"
                            >noWear</v-list-item-title
                        >
                        <v-list-item-subtitle>{{
                            userName
                        }}</v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>
                <v-divider class="mb-10"></v-divider>
                <v-container>
                    <v-list-item
                        class="rounded-lg justify-center flex items-center"
                        v-for="(item, index) in items"
                        :key="index"
                        link
                        :href="item.href"
                        :class="{ active: isActive(item.href) }"
                    >
                        <template v-slot:prepend>
                            <v-icon :icon="item.icon"></v-icon>
                        </template>
                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                    </v-list-item>
                    <v-divider v-if="!isLoggedIn"></v-divider>

                    <v-list-item
                        class="rounded-lg mr-8 ml-8"
                        v-for="(item, index) in notlogin"
                        v-if="!isLoggedIn"
                        :key="index"
                        link
                        :href="item.href"
                        :class="{ active: isActive(item.href) }"
                    >
                        <template v-slot:prepend>
                            <v-icon :icon="item.icon"></v-icon>
                        </template>
                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                    </v-list-item>
                </v-container>
            </v-list>
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
        isLoggedIn: {
            type: Boolean,
            default: false,
        },
    },
};
</script>

<script setup>
const items = [
    { title: "Home", href: "/home", icon: "mdi-home-variant" },
    { title: "Search", href: "/search", icon: "mdi-magnify" },
    { title: "Camera", href: "/camera", icon: "mdi-camera" },
    { title: "Wardrobe", href: "/Wardrobe", icon: "mdi-wardrobe" },
    { title: "Profile", href: "/profile", icon: "mdi-account" },
    { title: "Log out", href: "/logout", icon: "mdi-logout" },
];
const notlogin = [
    { title: "Log in", href: "/login", icon: "mdi-login" },
    { title: "Register", href: "/register", icon: "mdi-account-plus" },
];

const currentPath = window.location.pathname;
console.log(currentPath);
const isActive = (href) => {
    return currentPath === href;
};
</script>

<style>
.active {
    background-color: #404040;
    border: 2px solid #404040;
    color: white;
    border-radius: 8px;
    padding-left: 8px;
    padding-right: 8px;
    margin-left: 8px;
    margin-right: 8px;
    width: calc(100% - 32px);
}
</style>
