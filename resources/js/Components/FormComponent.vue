<template>
  <div>
    <h1>フォーム</h1>
    <form>
      <LabelInput
        v-for="(field, index) in fields"
        :key="index"
        :label="field.label"
        :name="field.name"
        v-model="formData[field.name]"
      />
    </form>
  </div>
</template>

<script>
import LabelInput from './LabelInput.vue';

export default {
  components: {
    LabelInput,
  },
  data() {
    return {
      formData: {
        username: '',
        email: '',
        password: '',
      },
      fields: [
        { label: 'Username', name: 'username' },
        { label: 'Email', name: 'email' },
        { label: 'Password', name: 'password' },
      ],
    };
  },
}
</script>

<style scoped>
/* スタイルが必要な場合はここに書く */
</style>