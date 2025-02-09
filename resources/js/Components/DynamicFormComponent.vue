<template>
  <div>
    <div v-for="(field, index) in fields" :key="index">
      <FormComponent
        label="Email"
        type="email"
        value="form.email"
        @input="$emit('update:email', $event)"
        placeholder="Enter your email"
        @my-click="receiveWord"
      />
      <input type="text" v-model="field.value" :placeholder="'フィールド ' + (index + 1)" />
      <button @click="removeField(index)">削除</button>
    </div>
    <button @click="addField">項目追加</button>
    word: {{word}}
  </div>
</template>

<script>
import FormComponent from "./FormComponent.vue";

export default {
  data() {
    return {
      fields: [{ value: '' }],
      form: {
        email: '',
      },
      word: '',
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
};
</script>