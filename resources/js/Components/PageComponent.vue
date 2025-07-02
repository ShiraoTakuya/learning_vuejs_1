<template>
    <div class="title">
      これはただのタイトルです
    </div>
    <div>
        <div v-if="showDynamic">
          <dynamic-form-component
            :form-route="props.data.formRoute"
            :initial-data="props.data.initialData"
            :old="props.data.old"
            :errors="props.data.errors"
          />
        </div>
        <button @click="showDynamic=showDynamic?false:true">Show/Hide Form</button>
      <button @click="showModal = true">モーダルを開く</button>
      <modal-form :show="showModal" @close="showModal = false" />
    </div>
    <Link href="/page2">ページ2へ移動（SPA）</Link>

</template>
  
  <script setup>
import { Link } from '@inertiajs/vue3'
  import { ref } from 'vue'
  import DynamicFormComponent from './DynamicFormComponent.vue'
  import ModalForm from './ModalForm.vue'
  
import AppLayout from '@/Layouts/AppLayout.vue'
defineOptions({
  layout: AppLayout,
})
  
  // propsの定義
  const props = defineProps({
  data: Object,
})
  
  // モーダル表示状態（リアクティブ）
  const showModal = ref(false)
  const showDynamic = ref(true)
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