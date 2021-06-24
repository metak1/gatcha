<template>
  <div class="hello">
      {{ data }}

      <button 
      @click="pullUnit()"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        PULL UNIT
      </button>

      <button 
      @click="equipItem(1)"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        EQUIP ITEM
      </button>
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
    this.loadUnits()
  },
  methods: {
    pullUnit() {
      axios.post('http://localhost:8082/api/user_units').then(() => {
        this.loadUnits()
      })
      .catch(e => {
        this.errors.push(e)
      })
    },
    loadUnits() {
      axios.get('http://localhost:8082/api/user_units').then(response => {
        // JSON responses are automatically parsed.
        this.data = response.data
      })
      .catch(e => {
        this.errors.push(e)
      })
    },
    equipItem($itemId) {
       axios.post('http://localhost:8082/api/user_units/'+ this.data[0].id +'/equip', {'user_item_id': $itemId}).then(() => {
        this.loadUnits()
      })
      .catch(e => {
        this.errors.push(e)
      })
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
