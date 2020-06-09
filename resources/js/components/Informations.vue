<template>
    <div
        class="tab-pane fade show active"
        id="view"
        role="tabpanel"
        aria-labelledby="home-tab"
    >
        <div class="row">
            <div class="col-md-12 order-md-1 mt-5">
                <h4>Billing address</h4>
                <small>Last Updated: {{ informations.updated_at }}</small>
                <form>
                    <div class="row mt-3">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input
                                v-model="informations.fname"
                                type="text"
                                class="form-control"
                                id="firstName"
                                readonly
                            />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input
                                v-model="informations.lname"
                                type="text"
                                class="form-control"
                                id="lastName"
                                readonly
                            />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input
                                v-model="informations.username"
                                type="text"
                                class="form-control"
                                id="username"
                                readonly
                            />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input
                            v-model="informations.email"
                            type="email"
                            class="form-control"
                            id="email"
                            readonly
                        />
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input
                            v-model="informations.address"
                            type="text"
                            class="form-control"
                            id="address"
                            readonly
                        />
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <input
                                v-model="informations.country"
                                type="text"
                                class="form-control"
                                id="country"
                                readonly
                            />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <input
                                v-model="informations.state"
                                type="text"
                                class="form-control"
                                id="state"
                                readonly
                            />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input
                                v-model="informations.zip"
                                type="text"
                                class="form-control"
                                id="zip"
                                readonly
                            />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
export default {
    name: "Informations",
    components: {},
    data() {
        return {};
    },
    created() {
        this.getInfo();
    },
    computed: {
        ...mapGetters({
            informations: "pushdata"
        })
    },
    methods: {
        ...mapActions({
            hit: "getdata"
        }),
        getInfo() {
            this.hit();
        }
    }
};
</script>
