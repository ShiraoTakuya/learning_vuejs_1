<template>
  <div class="container">
    <form :action="form_route" method="post">
      <input type="hidden" name="_token" :value="csrfToken">
      <div v-for="(item, index) in initialData.form_register" :key="index">
        <component
          :is="item.type"
          :item="item"
          :old="old"
          :errors="errors"
          @child_input="child_input"
        />
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
</template>

<script>
import InputType1 from "./InputType1.vue";
import * as script from '../../../public/js/script.js';

export default {
  data() {
    return {
      csrfToken: script.get_csrf(),
      InputType1: InputType1, // InputType1を変数に設定
    };
  },
  components: {
    InputType1,
  },
  props: {
    initialData: {
      type: Object,
      required: true
    },
    form_route: {
      type: String,
      required: true
    },
    old: {
      type: Object,
      required: true
    },
    errors: {
      type: Object,
      required: true
    },
  }
};
</script>

<style scoped>
button{
  border: 1px solid black;
  padding: 4px;
}
.container{
  width: 99%;
  margin: 0 auto;
}

</style>