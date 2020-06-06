<template>
  <div class="container">
    <div class="py-3 text-center">
      <h2>Billing Information</h2>
      <p
        class="lead"
      >Below the billing information is given for a person. The information can be edited using the tab.</p>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="view-tab" data-toggle="tab" href="#view" role="tab">View</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="edit-tab" data-toggle="tab" href="#edit" role="tab">Edit</a>
      </li>
    </ul>
  </div>
</template>


<script>
export default {
  name: "Header",
  props: ["tab"],
  data() {
    return {
      //
    };
  }
};
</script>