<template>
  <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="profile-tab">
    <div class="row">
      <div class="col-md-12 order-md-1 mt-5">
        <h4 class="mb-3">Billing address</h4>
        <form>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="fname">First name</label>
              <input v-model="informations.fname" type="text" class="form-control" id="fname" />
              <div class="invalid-feedback">Valid first name is required.</div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lname">Last name</label>
              <input
                v-model="informations.lname"
                type="text"
                class="form-control"
                id="lname"
                placeholder
                value
                required
              />
              <div class="invalid-feedback">Valid last name is required.</div>
            </div>
          </div>

          <div class="mb-3">
            <label for="username">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input v-model="informations.username" type="text" class="form-control" id="username" />
              <div class="invalid-feedback" style="width: 100%;">Your username is required.</div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">
              Email
              <span class="text-muted">(Optional)</span>
            </label>
            <input v-model="informations.email" type="email" class="form-control" id="email" />
            <div class="invalid-feedback">Please enter a valid email address for shipping updates.</div>
          </div>

          <div class="mb-3">
            <label for="address">Address</label>
            <input v-model="informations.email" type="text" class="form-control" id="address" />
            <div class="invalid-feedback">Please enter your shipping address.</div>
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="country">Country</label>
              <input v-model="informations.country" type="text" class="form-control" id="country" />
              <div class="invalid-feedback">Please select a valid country.</div>
            </div>

            <div class="col-md-4 mb-3">
              <label for="state">State</label>
              <input v-model="informations.state" type="text" class="form-control" id="state" />
              <div class="invalid-feedback">Please provide a valid state.</div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="zip">Zip</label>
              <input v-model="informations.zip" type="text" class="form-control" id="zip" />
              <div class="invalid-feedback">Zip code required.</div>
            </div>
          </div>
        </form>
        <button
          @click="updateInfo( informations._id )"
          class="btn btn-primary btn-lg btn-block"
        >Submit</button>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "EditInformations",
  // props: ["refreshData"],
  data() {
    return {
      informations: "",
      refreshData: ""
    };
  },
  created() {
    this.getInfo();
  },
  methods: {
    getInfo() {
      axios({ method: "GET", url: "api/informations" }).then(res => {
        this.informations = res.data;
      });
      error => {
        console.error(error);
      };
    },
    updateInfo(_id) {
      // console.log(_id);
      axios.put("api/informations/" + _id, this.informations).then(res => {
        console.log(res);
        // this.getInfo();
        // this.refreshData();
      });
    }
    // refreshData() {
    //   this.$emit("refreshData");
    // }
  }
};
</script>

