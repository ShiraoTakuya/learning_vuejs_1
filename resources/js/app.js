import './bootstrap';
import { createApp } from 'vue';
import DynamicFormComponent from './Components/DynamicFormComponent.vue';

// Vueを特定のDOM要素にマウント
const app = createApp({});
app.component('dynamic-form-component', DynamicFormComponent);
app.mount('#form1');