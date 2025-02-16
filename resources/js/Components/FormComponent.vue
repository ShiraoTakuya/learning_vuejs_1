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
import * as script from '../../../public/js/script.js';

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
    return {
      errorMessage: script.extract_error_message(this.errors, this.item),
      def_value: script.select_def_value(this.old, this.item),
    };
  },
  methods: {
    handleInput(event) {
      const newValue = event.target.value;
      this.errorMessage = script.valdiate_value(newValue, this.item);
    },
  },
};
</script>

<style scoped>
.form-item {
  margin-bottom: 1rem;
}
</style>