import { createApp } from "vue"

import topComponent from "./page/top.vue";
import headerComponent from "./Header.vue";

createApp({
    components :{
        "top-component" : topComponent,
        "header-component" : headerComponent
    }
}).mount("#app")