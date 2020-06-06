require("./bootstrap");

window.Vue = require("vue");
import App from "./components/App.vue";

// Vue.component("app-main", require("./components/App.vue"));
// Vue.component("informations", require("./components/Informations.vue").default);
// Vue.component(
//     "editinformations",
//     require("./components/EditInformations.vue").default
// );
// Vue.component("navbar", require("./components/Header.vue").default);

const app = new Vue({
    render: h => h(App),
    el: "#app"
});
