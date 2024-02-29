const { createApp } = Vue

  createApp({
    data() {
      return {
        
        apiUrl: 'server.php',
        list: [],
        discoSingolo: {},
        showDiscoSingolo: false,
        test: ''
      }
    },
    mounted() {
        this.readlist()
        // this.saluto()
    },
    methods: {

        readlist(){
            axios.get(this.apiUrl).then((response)=>{
                this.list = response.data
                console.log(this.list)
            })
        },
        
        getDisco(index){


            const data = {
              //parmetro della chiamata http in post
              discoIndex: index
            }


            axios.post( this.apiUrl, data , 
              {
                headers: {
                  'Content-Type':'multipart/form-data'
                }

              })

              .then((response)=>{
                this.discoSingolo = response.data
                this.showDiscoSingolo = true
              })
        },

        closeOverlay(){
          this.showDiscoSingolo = false
        }
    },

  }).mount('#app')