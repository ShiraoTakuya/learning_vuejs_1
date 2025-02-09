<template>
  <div class="form-item">
    <label :for="label">{{ label }}</label>
    <input
      :type="type"
      :placeholder="placeholder"
      :value="value"
      @input="$emit('update:value', $event)"
      class="border p-2 rounded w-full"
    />
    <button @click="sendWord">sendWord</button>
  </div>
</template>

<script>
export default {
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