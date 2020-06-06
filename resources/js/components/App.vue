<template>
  <div>
    <Header></Header>
    <div class="container tab-content" id="myTabContent">
      <Information></Information>
      <EditInformation></EditInformation>
    </div>
  </div>
</template>


<script>
import axios from "axios";

import Information from "./Informations.vue";
import EditInformation from "./EditInformations.vue";
import Header from "./Header.vue";

export default {
  name: "App",
  components: {
    Information,
    EditInformation,
    Header
  },
  data() {
    return {
      tab: 1
    };
  },
  created() {
    // this.getInfo();
  },
  methods: {
    // getInfo() {
    //   axios({ method: "GET", url: "api/informations" }).then(res => {
    //     this.informations = res.data;
    //   });
    //   error => {
    //     console.error(error);
    //   };
    // }
  }
};
</script>

