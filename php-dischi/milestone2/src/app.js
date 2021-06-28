const app = new Vue({
  el: '#app',
  data: {
    url: '/api/albums.php',
    albums: null,
    error: null
  },
  methods: {

  },
  mounted() {
    axios
      .get(this.url)
      .then(resp => {
        console.log(resp);
        this.albums = resp.data;
      })
      .catch(e => {
        console.error(e);
        this.error = "Sorry could not connect to the API " + e
      })
  }
})
