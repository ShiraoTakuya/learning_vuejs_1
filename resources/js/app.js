import './bootstrap';
import { createApp } from 'vue';
import Counter from './Components/Counter.vue'; // Counter.vue のパスを確認
import FormComponent from './Components/FormComponent.vue'; // 作成したFormComponent.vueをインポート

const app = createApp({});
app.component('Counter', Counter); // Counter を登録
app.mount('#app');

const app2 = createApp({});
app2.component('FormComponent', FormComponent); // Counter を登録
app2.mount('#app2')