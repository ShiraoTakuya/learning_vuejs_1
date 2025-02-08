<template>
  <div>
    <label :for="name">{{ label }}</label>
    <input type="text" :name="name" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)">
  </div>
</template>

<script>
export default {
  props: {
    label: String,
    name: String,
    modelValue: String,  // v-modelの代わりにmodelValueを使う
  },
};
</script>