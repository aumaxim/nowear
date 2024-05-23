// vuetify.js
import "vuetify/styles";
import { createVuetify } from "vuetify";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";

const customTheme = {
    dark: false,
    colors: {
        primary: "#404040",
        secondary: "#D9D9D9",

        // Other colors...
    },
};

export default createVuetify({
    theme: {
        themes: {
            light: customTheme,
        },
    },
    components,
    directives,
});
