window.Vue = require('vue').default;

import Vuetify from "vuetify";
window.Vue.use(Vuetify);

import 'vuetify/dist/vuetify.min.css'

// const DashboardContainer = require('../containers/DashboardContainer').default
import DashboardContainer from "../containers/DashboardContainer";

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    components: {
        DashboardContainer,
    },
    data() {
        return {
            bookmarks: [],
        }
    },
    created() {
        console.log(document.getElementById('jsEntryPoint'));
        this.bookmarks = JSON.parse(document.getElementById('jsEntryPoint').dataset.bookmarks);
    }
});
