<template>
    <div class="title">
      これはただのタイトルです
    </div>
    <div>
      <dynamic-form-component
        :form-route="formRoute"
        :initial-data="initialData"
        :old="old"
        :errors="errors"
      />
      <button @click="showModal = true">モーダルを開く</button>
      <modal-form :show="showModal" @close="showModal = false" />
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue'
  import DynamicFormComponent from './DynamicFormComponent.vue'
  import ModalForm from './ModalForm.vue'
  
  // propsの定義
  defineProps({
    formRoute: String,
    initialData: Object,
    old: Object,
    errors: Object
  })
  
  // モーダル表示状態（リアクティブ）
  const showModal = ref(false)
  </script>
  
  <style scoped>
  .title {
    font-size: 32px;
    font-weight: 800;
    display: flex;
    justify-content: center;
    margin: 16px;
  }
  button {
    border: 1px solid black;
    padding: 4px;
    display: flex;
    justify-self: center;
  }
  </style>