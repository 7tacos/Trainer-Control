<template>
  <div class="container-fluid"> <!-- root element -->
    <div class="breadcrumb-area">
        <h1>Training Material Request</h1>
        <ol class="breadcrumb">
            <li class="item">Create a Training Material Request</li>
        </ol>
    </div>


    <div class="row equal">
      <div class="col-12">
        <form-wizard
          title=""
          subtitle=""
          nextButtonText="Continue"
          backButtonText="Back"
          color="#336633"
          shape="circle"
          errorColor="#8b0000"
        >
          <tab-content title="Class Information" :before-change="checkClass">
            <div class="row justify-content-center">
              <div class="col-10">
                <h4>Basic information about the class.</h4>
              </div>
              <div class="col-10">
                <h6 class="text-muted">Please supply basic information about the class you are requesting materials for. Name of the agency being trained, expected student count, and the start and end date of the class.</h6>
              </div>
              <div class="col-12 col-lg-6">
                <div class="card bg-transparent ">
                  <div class="card-body ">
                    <div class="card-title h5">Class Details</div>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label class="small mb-0 pb-0">Agency being trained</label>
                          <input type="text" class="form-control" v-model="agency">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label class="small mb-0 pb-0">Student Count (expected)</label>
                          <input type="text" class="form-control" v-model="studCount">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-lg-6">
                        <div class="form-group">
                          <label class="small mb-0 pb-0 w-100" for="exampleInputEmail1">Class Start Date</label>
                          <date-picker
                            placeholder="Class Start Date"
                            :lang="lang"
                            v-model="c_start_date"
                            :clearable="false"
                            input-class="form-control"
                            value-type="format"
                            :format="dateFormat">
                          </date-picker>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <div class="form-group">
                          <label class="small mb-0 pb-0 w-100" for="exampleInputEmail1">Class End Date</label>
                          <date-picker
                            placeholder="Class End Date"
                            :lang="lang"
                            v-model="c_end_date"
                            :clearable="false"
                            input-class="form-control"
                            value-type="format"
                            :format="dateFormat">
                          </date-picker>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </tab-content>

          <tab-content title="Shipping" :before-change="checkShip">
            <div class="row justify-content-center">
              <div class="col-10">
                <h4>Neccessary shipping information.</h4>
              </div>
              <div class="col-10">
                <h6 class="text-muted">Please supply the dates and address neccessary to ensure your equipment arrives when and where you need it. "Equipment Needed Arrival Date" is the day you would like the equipment to arrive. FarrWest will calculate the shipping date based on this and the address.</h6>
              </div>
              <div class="col-12 col-lg-4">
                <div class="card bg-transparent">
                  <div class="card-title h5">Shipping Dates</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">

                          <label class="small mb-0 pb-0 w-100" for="exampleInputEmail1">Equipment Needed Arrival Date</label>
                          <date-picker
                            placeholder=""
                            :lang="lang"
                            v-model="mustDate"
                            :clearable="false"
                            input-class="form-control"
                            value-type="format"
                            :format="dateFormat">
                          </date-picker>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">

                          <label class="small mb-0 pb-0 w-100">Expected Return Shipping Date</label>
                          <date-picker
                            placeholder=""
                            :lang="lang"
                            v-model="returnDate"
                            :clearable="false"
                            input-class="form-control"
                            value-type="format"
                            :format="dateFormat">
                          </date-picker>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-12 col-lg-4">
                <div class="card bg-transparent">
                  <div class="card-body">
                    <div class="card-title h5">Shipping Location</div>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label class="small mb-0 pb-0">Attention Name</label>
                          <input type="text" class="form-control mt-0" v-model="aName">
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-group">
                          <label class="small mb-0 pb-0">Address</label>
                          <input type="text" class="form-control" v-model="aAddr">
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="small mb-0 pb-0">City</label>
                          <input type="text" class="form-control" v-model="aCity">
                        </div>
                      </div>

                      <div class="col-lg-3">
                        <div class="form-group">
                          <label class="small mb-0 pb-0">State</label>
                          <input type="text" class="form-control" v-model="aState">
                        </div>
                      </div>

                      <div class="col-lg-3">
                        <div class="form-group">
                          <label class="small mb-0 pb-0">Zip Code</label>
                          <input type="text" class="form-control" v-model="aZip">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-12 col-lg-4">
                <div class="card bg-transparent">
                  <div class="card-title h5">Shipping Notes</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                        <label class="small mb-0 pb-0">Any additional shipping details</label>
                        <textarea class="form-control" v-model="shipNotes"></textarea>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </tab-content>

          <tab-content title="Equipment">
            <div class="rowustify-content-center">
              <div class="col-10">
                <h4>Required Equipment.</h4>
              </div>
              <div class="col-10">
                <h6 class="text-muted">Select or enter each device or supply you are requesting, then click "Add to List". Once added to your request list, you can edit quantity and notes.</h6>
              </div>
            </div>
            <div class="row">
                <v-select
                 v-model="selectedItem"
                 label="title"
                 placeholder="Select or Enter an Item"
                 :options= "itemList"
                 :loading="itemLoad"
                 class="bg-white col-10"
                 :create-option="item => ({ id: '', title: item, stndrd: '', created_at: '', updated_at: ''})"
                 taggable
                 >
                  <template #option="{ title, stndrd }">
                    <strong style="margin: 0">{{ title }}</strong>
                    <em>{{ stndrd }}</em>
                  </template>
                 <template #spinner="{ loading }">
                   <div
                     v-if="loading"
                     style="border-left-color: rgba(88, 151, 251, 0.71)"
                     class="vs__spinner"
                   >
                   </div>
                 </template>
               </v-select>
               <button class="btn btn-primary col-2" @click="addToEquip">Add to List</button>

            </div>
            <div v-if="chosenEquip.length > 0" class="row">
              <div class="col-12">
                <hr />
              </div>
            </div>

            <div v-if="chosenEquip.length > 0" class="row d-flex align-items-center mb-2 py-2" >
              <div class="col-lg-1">Remove</div>
              <div class="col-lg-3">Item Name</div>
              <div class="col-lg-1">Quantity</div>
              <div class="col-lg-7">Notes</div>
            </div>
            <div v-for="(item, index) in chosenEquip" class="row d-flex align-items-center mb-2 py-2" :class="{'bg2': index % 2 === 0}">
              <div class="col-lg-1">
                <button class="btn btn-outline-danger" @click="removeList(index)">X</button>
              </div>
              <div class="col-lg-3">
                {{ item.title }}
              </div>
              <div class="col-lg-1">
                <input type="number" v-model="item.qty" class="form-control"/>
              </div>
              <div class="col-lg-7">
                <textarea v-model="item.notes" class="form-control"></textarea>
              </div>
            </div>


            <div v-if="chosenEquip.length > 0" class="row">
              <div class="col-12">
                <hr />
              </div>
            </div>

          </tab-content>

        </form-wizard>

      </div>


    </div>

  </div> <!-- root element end -->
</template>

<style scoped>
.bg2 { background: #e6e6e6 }

</style>


<script>
import { AtomSpinner } from 'epic-spinners'
import DatePicker from 'vue2-datepicker';
import 'vue2-datepicker/index.css';



// import store if neccesary import {store} from 'location'


export default {
  props: [],

  data: function () {
    return {
      dateFormat: 'MM-DD-YYYY',
      lang: 'en',
      disabledAfter: new Date(),

      agency: '',
      studCount: '',

      c_start_date: '',
      c_end_date: '',

      mustDate: '',
      returnDate: '',

      aName: '',
      aAddr: '',
      aCity: '',
      aState: '',
      aZip: '',

      shipNotes:'',

      selectedItem: [],
      itemLoad: false,
      itemList: [],

      chosenEquip: [],
    }
  },

  computed: {

  },
  mounted() {
    this.getItemList();
  },
  methods: {
    getItemList() {
      var _this = this;
      _this.itemList = [];
      _this.itemLoad = true;
      axios.get('/utility/tmr/utility/getitems')
        .then(function (response) {
          var a = response.data.data;
          if(a == null || a == ''){ var b = []; } else { var b = a; }
          _this.itemList = b;
          _this.itemLoad = false;
        })
    },

    addToEquip() {
      var _this = this;
      var a = _this.selectedItem;
      _this.chosenEquip.push({ title: a.title, qty: 1, notes: a.stndrd});
      _this.selectedItem = [];

    },
    removeList(x) {
      var _this = this;
      _this.chosenEquip.splice(x,1);
    },
    checkClass() {
      var _this = this;
      var check = 0;
      var msg = '<div class="text-left"><ul>'
      if(_this.agency == null || _this.agency == '') { check = check + 1; msg += '<li>Agency Name is required</li>' }
      if(_this.studCount == null || _this.studCount == '') { check = check + 1; msg += '<li>Student Count is required</li>' }
      if(_this.c_start_date == null || _this.c_start_date == '') { check = check + 1; msg += '<li>Class Start Date is required</li>' }
      msg += '</ul></div>';
      if(check > 0 ) {
        _this.failNotify(msg);
        return false;
      } else { return true; }
    },

    checkShip() {
      var _this = this;
      var check = 0;
      var msg = '<div class="text-left"><ul>'
      if(_this.mustDate == null || _this.mustDate == '') { check = check + 1; msg += '<li>Equipment Required Date is required</li>'}
      if(_this.aName == null || _this.aName == '') { check = check + 1; msg += '<li>Attention Name is required</li>' }
      if(_this.aAddr == null || _this.aAddr == '') { check = check + 1; msg += '<li>Location Address is required</li>' }
      if(_this.aCity == null || _this.aCity == '') { check = check + 1; msg += '<li>Location City is required</li>' }
      if(_this.aState == null || _this.aState == '') { check = check + 1; msg += '<li>Location State is required</li>' }
      if(_this.aZip == null || _this.aZip == '') { check = check + 1; msg += '<li>Location Zip Code is required</li>'}
      msg += '</ul></div>';
      if(check > 0 ) {
        _this.failNotify(msg);
        return false;
      } else { return true; }
    },

    failNotify(x) {
      var _this = this;
      _this.$swal({ icon: 'error', title: 'Required fields not completed', html: x, duration: 10000, });
    },

    

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
    DatePicker
  },


}
</script>
