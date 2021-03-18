   <template>
        <div>
            <router-link :to="{ name: 'page' }" class="nav-link">Another Page</router-link>
             <h1>Hello This works</h1>
            
             <div v-for="(p) in products">
                 {{p.name}}
                 <img v-bind:src="p.image" alt="">
                 {{p.price}}

             </div>
            
        </div>
    </template>
    <script>
        export default {
            data(){
                return{
                    products: []
                }
            },
            mounted() { axios.get('/api/products/')
            .then(response => 
            
            this.products = response.data)
            
            }
            
        };
    </script>