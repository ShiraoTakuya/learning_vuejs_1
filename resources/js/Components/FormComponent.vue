<template>
  <div class="form-item">
    <label :for="label">{{ item.label }}</label>
    <input
      type="input"
      :placeholder="item.placeholder"
      :name="item.name"
      @input="handleInput"
      v-model="def_value"
      class="border p-2 rounded w-full"
    />
    <div v-if="errorMessage" class="text-red-500">{{ errorMessage }}</div>
  </div>
</template>

<script>
export default {
  props: {
    item: {
      type: Object,
      required: true,
    },
    old: {
      type: String,
      required: true,
    },
    errors: {
      type: Object,
      required: true,
    },
  },
  data() {
    let errorMessage = this.errors;
    errorMessage = errorMessage[this.item.name];
    errorMessage = errorMessage? errorMessage[0]: "";
    let def_value = this.old;
    def_value = def_value[this.item.name];
    def_value = (def_value !== undefined)? def_value: eval(this.item.value_formula);
    return {
      errorMessage: errorMessage,
      def_value: def_value,
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
      if (eval(this.item.valid_formula1)) {
        this.errorMessage = this.item.error1;
      } else if (eval(this.item.valid_formula2)){
        this.errorMessage = this.item.error2;
      } else if (eval(this.item.valid_formula3)){
        this.errorMessage = this.item.error3;
      } else if (eval(this.item.valid_formula4)){
        this.errorMessage = this.item.error4;
      } else if (eval(this.item.valid_formula5)){
        this.errorMessage = this.item.error5;
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