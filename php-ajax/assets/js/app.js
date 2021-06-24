const app = new Vue({
  /* Options object */
  el: '#app',
  data: {
    products: null
  },
  methods: {

  },
  mounted() {
    axios.get('/api/products.php')
      .then(resp => {
        console.log(resp);
        this.products = resp.data
      }).catch(e => {
        console.log(e);
      })
  }
})