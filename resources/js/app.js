import './bootstrap';
import { createApp } from 'vue';
import Counter from './Components/Counter.vue'; // Counter.vue のパスを確認

const app = createApp({});
app.component('Counter', Counter); // Counter を登録
app.mount('#app');