<template>
 
    <v-layout >
      <v-flex xs12 sm12 offset-sm0>
        <v-card flat >
          <v-img class="animated fadeInRightBig white--text" height="400px" :src="'/storage/image/'+articles[0].image">
            <v-container fill-height fluid>
              <v-layout fill-height>
                <v-flex xs12 align-end flexbox mt-5 pt-5>
                  <span class="white--text">{{articles[0].created_at}}</span>
                  <br>
                  <span class="headline"></span>
                </v-flex>
              </v-layout>
            </v-container>
          </v-img>
         
          <v-container fill-height fluid>
            <v-layout fill-height>
             
              <v-flex xs0 sm3 justify offset-sm0 mr-5 mt-3 pt-3>
               </v-flex>
               <v-flex xs12 sm6 justify offset-sm0 mr-5 mt-3 pt-3>
                <span class="headline">{{articles[0].title}}</span>
                <p style="line-height:30px; font-size:12px;text-align:justify; word-space:1px">
                  {{articles[0].description}}
                </p>
                <v-spacer></v-spacer>
                 
               </v-flex>
                <v-flex xs0 sm3 justify offset-sm0 mr-5 mt-3 pt-3>
               </v-flex>
            </v-layout>
          </v-container>
        </v-card>
      </v-flex>
    </v-layout>
 
</template>

<script>
export default {
     data() {
        return {
              post: this.$route.query.postid,
              articles:[],
        }
    },
  
     mounted() {
        window.axios.get('api/show/'+this.post).then(res => {
              console.log(res.data);
            this.articles = res.data
        })
     },
}
</script>
 <li class="list-group-item" v-for = "content in articles" :key="content.id">
                    <div class="row">
                        <div class="col-md-8">
                            <p  >{{content.id}}</p>
                            <p  >{{content.title}}</p>
                        </div>
                        <div class="col-md-4" style="text-align:right">
   
                        </div>
                    </div>
            </li>







