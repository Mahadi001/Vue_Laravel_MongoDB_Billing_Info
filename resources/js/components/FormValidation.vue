<template>
    <div></div>
</template>

<script>
import { required, minLength, between } from "vuelidate/lib/validators";
export default {
    name: "FormValidation",
    data() {
        return {
            fname: "",
            lname: "",
            username: "",
            email: "",
            address: "",
            country: "",
            state: "",
            zip: ""
        };
    },
    validation: {
        fname: {
            required,
            minLength: minLength(3),
            maxLength: maxLength(10)
        },
        lname: {
            required,
            minLength: minLength(5),
            maxLength: maxLength(12)
        }
    }
};
</script>
