const { createApp } = Vue;

createApp ({
    data() {
      return {
        discs: []
      };
    },
    methods: {
      getDiscs() {
        axios
            .get('http://localhost/php-dischi-json/api.php') 
            .then((res) => {

              console.log(res.data);
              this.discs = res.data;  
            });
      }
    },
    created() {
      this.getDiscs();  
    }
}).mount('#app');

console.log(discs)