// resources/js/app.js
import { createApp } from "vue";
import vuetify from "./vuetify"; // Assurez-vous que ce chemin est correct
import MenuComponent from "./components/MenuComponent.vue";

const app = createApp({});

app.component("menu-component", MenuComponent);

app.use(vuetify).mount("#app");
