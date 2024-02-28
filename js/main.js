const { createApp } = Vue

  createApp({
    data() {
      return {
        
        apiUrl: 'server.php',
        list: [],
        disco: '',
      }
    },
    mounted() {
        this.readlist()
    },
    methods: {
        readlist(){
            axios.get(this.apiUrl).then((response)=>{
                this.list = response.data
                console.log(this.list)
            })

        }
    },
  }).mount('#app')