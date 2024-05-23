// resources/js/app.js
import { createApp } from "vue";
import vuetify from "./vuetify"; // Assurez-vous que ce chemin est correct
import MenuComponent from "./components/MenuComponent.vue";

const app = createApp({
    data() {
        return {
            image: null,
            imagePreview: null,
        };
    },
    methods: {
        handleImageChange(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    this.imagePreview = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        },
    },
});

app.component("menu-component", MenuComponent);

app.use(vuetify).mount("#app");
