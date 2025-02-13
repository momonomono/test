import { createApp } from "vue"

import topComponent from "./page/Top/top.vue";
import materialComponent from "./page/Material/material.vue";
import headerComponent from "./Header.vue";
import testComponent from "./page/Test/test.vue";

createApp({
    components :{
        "top-component" : topComponent,
        "header-component" : headerComponent,
        'material-component' : materialComponent,
        'test-component' : testComponent
    }
}).mount("#app")