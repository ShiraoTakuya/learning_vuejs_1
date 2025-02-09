import './bootstrap';
import { createApp } from 'vue';
import DynamicFormComponent from './Components/DynamicFormComponent.vue';

// Vueを特定のDOM要素にマウント
const app = createApp({});
app.component('dynamic-form-component', DynamicFormComponent);
app.mount('#form1');


// import './bootstrap';
// import { createApp } from 'vue';
// import Counter from './Components/Counter.vue'; // Counter.vue のパスを確認
// import FormComponent from './Components/FormComponent.vue'; // 作成したFormComponent.vueをインポート

// const app2 = createApp({});
// app2.component('Counter', Counter); // Counter を登録
// app2.mount('#app');

// const app2 = createApp({});
// app2.component('FormComponent', FormComponent); // Counter を登録
// app2.mount('#app2')