<template>
    <div
        class="tab-pane fade"
        id="edit"
        role="tabpanel"
        aria-labelledby="profile-tab"
    >
        <div class="row">
            <div class="col-md-12 order-md-1 mt-5">
                <h4 class="mb-3">Billing address</h4>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="fname">First name</label>
                            <input
                                v-model.trim="$v.informations.fname.$model"
                                type="text"
                                class="form-control"
                                :class="{
                                    'is-invalid': $v.informations.fname.$error,
                                    'is-valid': !$v.informations.fname.$invalid
                                }"
                                id="fname"
                            />
                            <div class="invalid-feedback">
                                <span v-if="!$v.informations.fname.required"
                                    >First name is required</span
                                >
                                <span v-if="!$v.informations.fname.minLength"
                                    >First name is required</span
                                >
                                <span v-if="!$v.informations.fname.maxLength"
                                    >First name is required</span
                                >
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lname">Last name</label>
                            <input
                                v-model="informations.lname"
                                :class="{
                                    'is-invalid': $v.informations.lname.$error,
                                    'is-valid': !$v.informations.lname.$invalid
                                }"
                                type="text"
                                class="form-control"
                                id="lname"
                            />
                            <div class="invalid-feedback">
                                <span v-if="!$v.informations.lname.required"
                                    >Last name is required</span
                                >
                                <span v-if="!$v.informations.lname.minLength"
                                    >Last name must be greater than 3
                                    letters</span
                                >
                                <span v-if="!$v.informations.lname.maxLength"
                                    >Last name must be less than 12
                                    letters</span
                                >
                            </div>
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
                                :class="{
                                    'is-invalid':
                                        $v.informations.username.$error,
                                    'is-valid': !$v.informations.username
                                        .$invalid
                                }"
                                type="text"
                                class="form-control"
                                id="username"
                            />
                            <div class="invalid-feedback" style="width: 100%;">
                                <span v-if="!$v.informations.username.required"
                                    >Username is required</span
                                >
                                <span v-if="!$v.informations.username.minLength"
                                    >Username must be greater than 3
                                    letters</span
                                >
                                <span v-if="!$v.informations.username.maxLength"
                                    >Username must be less than 10 letters</span
                                >
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input
                            v-model="informations.email"
                            :class="{
                                'is-invalid': $v.informations.email.$error,
                                'is-valid': !$v.informations.email.$invalid
                            }"
                            type="email"
                            class="form-control"
                            id="email"
                        />
                        <div class="invalid-feedback">
                            <span v-if="!$v.informations.email.required"
                                >Email is required</span
                            >
                            <span v-if="!$v.informations.email.email"
                                >Enter a valid email</span
                            >
                            <span v-if="!$v.informations.email.minLength"
                                >Email must be greater than 3 letters</span
                            >
                            <span v-if="!$v.informations.email.maxLength"
                                >Email must be less than 30 letters</span
                            >
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input
                            v-model="informations.address"
                            :class="{
                                'is-invalid': $v.informations.address.$error,
                                'is-valid': !$v.informations.address.$invalid
                            }"
                            type="text"
                            class="form-control"
                            id="address"
                        />
                        <div class="invalid-feedback">
                            <span v-if="!$v.informations.address.required"
                                >Address is required</span
                            >
                            <span v-if="!$v.informations.address.minLength"
                                >Address must be greater than 3 letters</span
                            >
                            <span v-if="!$v.informations.address.maxLength"
                                >Address must be less than 30 letters</span
                            >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <input
                                v-model="informations.country"
                                :class="{
                                    'is-invalid':
                                        $v.informations.country.$error,
                                    'is-valid': !$v.informations.country
                                        .$invalid
                                }"
                                type="text"
                                class="form-control"
                                id="country"
                            />
                            <div class="invalid-feedback">
                                <span v-if="!$v.informations.country.required"
                                    >Country is required</span
                                >
                                <span v-if="!$v.informations.country.minLength"
                                    >Country must be greater than 3
                                    letters</span
                                >
                                <span v-if="!$v.informations.country.maxLength"
                                    >Country must be less than 20 letters</span
                                >
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <input
                                v-model="informations.state"
                                :class="{
                                    'is-invalid': $v.informations.state.$error,
                                    'is-valid': !$v.informations.state.$invalid
                                }"
                                type="text"
                                class="form-control"
                                id="state"
                            />
                            <div class="invalid-feedback">
                                <span v-if="!$v.informations.country.required"
                                    >State is required</span
                                >
                                <span v-if="!$v.informations.country.minLength"
                                    >State must be greater than 3 letters</span
                                >
                                <span v-if="!$v.informations.country.maxLength"
                                    >State must be less than 10 letters</span
                                >
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input
                                v-model="informations.zip"
                                :class="{
                                    'is-invalid': $v.informations.zip.$error,
                                    'is-valid': !$v.informations.zip.$invalid
                                }"
                                type="text"
                                class="form-control"
                                id="zip"
                            />
                            <div class="invalid-feedback">
                                <span v-if="!$v.informations.country.required"
                                    >State is required</span
                                >
                                <span v-if="!$v.informations.country.minLength"
                                    >State must be greater than 3 letters</span
                                >
                                <span v-if="!$v.informations.country.maxLength"
                                    >State must be less than 5 letters</span
                                >
                            </div>
                        </div>
                    </div>
                </form>
                <button
                    @click="updateInfo(informations._id)"
                    class="btn btn-primary btn-lg btn-block"
                >
                    Submit
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import { validationMixin } from "vuelidate";
import {
    required,
    minLength,
    maxLength,
    email
} from "vuelidate/lib/validators";

export default {
    name: "EditInformations",
    mixins: [validationMixin],
    // props: ["refreshViewData"],
    validations: {
        informations: {
            fname: {
                required,
                minLength: minLength(3),
                maxLength: maxLength(10)
            },
            lname: {
                required,
                minLength: minLength(3),
                maxLength: maxLength(12)
            },
            username: {
                required,
                minLength: minLength(3),
                maxLength: maxLength(10)
            },
            email: {
                required,
                email,
                minLength: minLength(3),
                maxLength: maxLength(30)
            },
            address: {
                required,
                minLength: minLength(3),
                maxLength: maxLength(30)
            },
            country: {
                required,
                minLength: minLength(3),
                maxLength: maxLength(20)
            },
            state: {
                required,
                minLength: minLength(3),
                maxLength: maxLength(10)
            },
            zip: {
                required,
                minLength: minLength(3),
                maxLength: maxLength(5)
            }
        }
    },
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
            this.$v.$touch();
            if (!this.$v.$error) {
                axios
                    .put("api/informations/" + _id, this.informations)
                    .then(res => {
                        // this.$refs.refreshViewData.focus();
                        console.log(res);
                        alert("Information edited successfully");
                        this.getInfo();
                        // this.refreshData();
                    });
            }
        }
    }
};
</script>
