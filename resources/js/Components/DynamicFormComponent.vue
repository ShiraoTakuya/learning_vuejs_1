<template>
  <div v-for="(item, index) in initialData.form_register" :key="index">
    <component
      :is="FormComponent"
      :label="item.name"
      :name="item.name"
      :type="item.type"
      :value="item.value"
      :placeholder="item.placeholder"
      :validate1="item.validate1"
      :validate2="item.validate2"
      :validate3="item.validate3"
      :validate4="item.validate4"
      :validate5="item.validate5"
      :validate6="item.validate6"
      :validate7="item.validate7"
      :validate8="item.validate8"
      :validate9="item.validate9"
      :validate10="item.validate10"
      :error1="item.error1"
      :error2="item.error2"
      :error3="item.error3"
      :error4="item.error4"
      :error5="item.error5"
      :error6="item.error6"
      :error7="item.error7"
      :error8="item.error8"
      :error9="item.error9"
      :error10="item.error10"
      @child_input="child_input"
    />
  </div>
</template>

<script>
import FormComponent from "./FormComponent.vue";

export default {
  data() {
    return {
      FormComponent: FormComponent, // FormComponentを変数に設定
      child_input: "",
    };
  },
  methods: {
    child_input(value){
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