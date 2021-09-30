window.Vue = require('vue').default;

// const DashboardContainer = require('../containers/DashboardContainer').default
import DashboardContainer from "../containers/DashboardContainer";

const app = new Vue({
    el: '#app',
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
