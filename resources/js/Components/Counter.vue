<script setup>
import { ref } from 'vue';
const count = ref(0);
</script>

<template>
  <div>
    {{ count }} <button @click="count++">Increment</button>
  </div>
</template>