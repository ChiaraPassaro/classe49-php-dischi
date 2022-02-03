const app = new Vue(
  {
    el: '#app',
    data: {
      cards: []
    },
    created() {
      axios.get('http://localhost:8888/classe49-php-dischi/server/controller-api.php')
        .then((result) => {
          this.cards = result.data;
      })
        .catch((error) => {
        console.log(error);
      })
    }
  }
);