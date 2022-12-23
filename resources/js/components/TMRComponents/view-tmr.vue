<template>
  <div class="container-fluid"> <!-- root element -->
    <div class="row">

      <div class="col-12">
        I am a view TMR
      </div>

    </div>

  </div> <!-- root element end -->
</template>


<script>
import { AtomSpinner } from 'epic-spinners'




// import store if neccesary import {store} from 'location'


export default {
  props: [],

  data: function () {
    return {

    }
  },

  computed: {

  },
  mounted() {

  },
  methods: {



    errorDisplay(valErrors) {
      var _this = this;
      var errors = valErrors;
      var errorsHTML = '<div class=""><ul>';
      $.each(errors, function(key, value){ errorsHTML += '<li>' + value + '</li>' });
      errorsHTML += '</ul></div>';
      _this.$swal({ icon: 'error', title: 'Please fix the following errors!', html: errorsHTML, duration: 10000, });
    },


  },
  components: {
    AtomSpinner,
  },


}
</script>
