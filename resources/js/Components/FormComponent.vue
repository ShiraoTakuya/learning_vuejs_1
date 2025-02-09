<template>
  <div class="form-item">
    <label :for="label">{{ label }}</label>
    <input
      :type="type"
      :placeholder="placeholder"
      :value="value"
      :name="name"
      @input="$emit('update:value', $event)"
      class="border p-2 rounded w-full"
    />
    <button @click="sendWord">sendWord</button>
    <button @click="testfunc">testfunc</button>
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
  },
  methods: {
    sendWord(){
      this.$emit("my-click", "やったぜ");
    },
  },
};
</script>

<style scoped>
.form-item {
  margin-bottom: 1rem;
}
</style>