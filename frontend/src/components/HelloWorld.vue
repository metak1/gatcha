<template>
  <div class="hello">
      {{ data }}
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'HelloWorld',
  data: () => {
      return {
        data: [],
        errors: []
      }
  },
  mounted() {
    axios.get('http://localhost:8082/api/units').then(response => {
      // JSON responses are automatically parsed.
      this.data = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
