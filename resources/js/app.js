import { createApp } from "vue"

import topComponent from "./page/top.vue";
import materialComponent from "./page/material.vue";
import headerComponent from "./Header.vue";

createApp({
    components :{
        "top-component" : topComponent,
        "header-component" : headerComponent,
        'material-component' : materialComponent
    }
}).mount("#app")