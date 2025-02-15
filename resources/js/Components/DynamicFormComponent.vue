<template>
  <div>
    <div v-for="(field, index) in fields" :key="index">
      <input type="text" v-model="field.value" :placeholder="'フィールド ' + (index + 1)" />
      <button @click="removeField(index)">削除</button>
      <input v-model.number="num">
      <select v-model.number="num">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </div>
    <button @click="addField">項目追加</button>
    word: {{word}}
    <div v-for="n in num" :key="n">
      <FormComponent
        :label="'a'+n"
        :name="'a'+n"
        type="text"
        :value="n"
        placeholder="Enter your email"
        @my-click="receiveWord"
      />
    </div>
    fixed_num: {{fixed_num}}
  </div>
</template>

<script>
import FormComponent from "./FormComponent.vue";

export default {
  created(){
    this.fixed_num = this.fixed_num??this.num;
  },
  data() {
    return {
      fields: [{ value: '' }],
      form: {
        email: '',
      },
      word: '',
      num: 5,
      fixed_num: null,
    };
  },
  methods: {
    addField() {
      this.fields.push({ value: '' });
    },
    removeField(index) {
      this.fields.splice(index, 1);
    },
    receiveWord(value){
      this.word = value;
    }
  },
  components: {
    FormComponent,
  },
  props: {
    initialData: {
      type: Object,
      required: true
    }
  }
};
</script>