<template>
  <div class="form-item">
    <label :for="label">{{ label }}</label>
    <input
      :type="type"
      :placeholder="placeholder"
      :name="name"
      @input="handleInput"
      class="border p-2 rounded w-full"
    />
    <div v-if="errorMessage" class="text-red-500">{{ errorMessage }}</div>
  </div>
</template>

<script>
import * as script from '../../../public/js/script.js';
export default {
  created(){
    script.testfunc();
  },
  name: "FormComponent",
  props: {
    label: {
      type: String,
      required: true,
    },
    type: {
      type: String,
      default: "text",
    },
    placeholder: {
      type: String,
      default: "",
    },
    value: {
      type: String,
      required: true,
    },
    validate1: {
      type: String,
      default: "",
    },
    validate2: {
      type: String,
      default: "",
    },
    validate3: {
      type: String,
      default: "",
    },
    validate4: {
      type: String,
      default: "",
    },
    validate5: {
      type: String,
      default: "",
    },
    validate6: {
      type: String,
      default: "",
    },
    validate7: {
      type: String,
      default: "",
    },
    validate8: {
      type: String,
      default: "",
    },
    validate9: {
      type: String,
      default: "",
    },
    validate10: {
      type: String,
      default: "",
    },
    error1: {
      type: String,
      default: "",
    },
    error2: {
      type: String,
      default: "",
    },
    error3: {
      type: String,
      default: "",
    },
    error4: {
      type: String,
      default: "",
    },
    error5: {
      type: String,
      default: "",
    },
    error6: {
      type: String,
      default: "",
    },
    error7: {
      type: String,
      default: "",
    },
    error8: {
      type: String,
      default: "",
    },
    error9: {
      type: String,
      default: "",
    },
    error10: {
      type: String,
      default: "",
    },
  },
  data() {
    return {
      errorMessage: "",
    };
  },
  watch: {
    value(newValue) {
      this.validateInput(newValue);
    }
  },
  methods: {
    handleInput(event) {
      const newValue = event.target.value;
      this.$emit('update:value', newValue);
      this.validateInput(newValue);
    },
    validateInput(value) {
      if (eval(this.validate1)) {
        this.errorMessage = this.error1;
      } else if (eval(this.validate2)){
        this.errorMessage = this.error2;
      } else if (eval(this.validate3)){
        this.errorMessage = this.error3;
      } else if (eval(this.validate4)){
        this.errorMessage = this.error4;
      } else if (eval(this.validate5)){
        this.errorMessage = this.error5;
      } else if (eval(this.validate6)){
        this.errorMessage = this.error6;
      } else if (eval(this.validate7)){
        this.errorMessage = this.error7;
      } else if (eval(this.validate8)){
        this.errorMessage = this.error8;
      } else if (eval(this.validate9)){
        this.errorMessage = this.error9;
      } else if (eval(this.validate10)){
        this.errorMessage = this.error10;
      } else {
        this.errorMessage = "";
      }
    },
  },
};
</script>

<style scoped>
.form-item {
  margin-bottom: 1rem;
}
</style>