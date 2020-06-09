import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export default new Vuex.Store({
    namespaced: true,
    state: {
        informations: ""
    },
    getters: {
        pushdata(state) {
            return state.informations;
        }
    },
    actions: {
        async getdata({ state }) {
            let res = await axios({ method: "GET", url: "api/informations" });
            state.informations = res.data;
        }
    }
});
