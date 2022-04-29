<template>
 <v-container grid-list-md offset-sm3 >
    <!-- <search/> -->
    <v-layout row wrap>
      <v-flex  style="cursor: pointer;" xs12 sm4 v-for="post in posts" :key="post.id">
          <v-card width="300px"  >
             <v-img class="animated fadeIn white--text" height="200px" :src="'/storage/image/'+post.image" @click="navigateTo({
                name: 'post',
                params: {
                  postId: post.id,
                  userId: post.userId
                }})">
            </v-img>
              <v-spacer></v-spacer>
              <v-container fill-height animated fadeInLeftBig fluid style="text-align:left">
                <v-layout fill-height>
                  <v-flex xs12 align-end flexbox>
                    <span class="subheading grey--text">{{post.title}}</span>
                    <!-- <p class="black--text">{{user.username}}</p> -->
                  </v-flex>
                </v-layout>
              </v-container>
            <v-card-actions>
            
              <!-- <v-badge color="pink" left>
                <span slot="badge">0</span>
                <v-btn icon small right>
                  <v-icon>favorite</v-icon>
                </v-btn>
              </v-badge>
              <v-btn icon small right>
                <v-icon>bookmark</v-icon>
              </v-btn> -->
<v-btn> 
              <router-link
                style="text-decoration:none;margin:2px"
                data-toggle="collapse"
                :to="{
                path: 'details',
                params: postid, // <-- changed 'props' to 'params'
                query: { postid: post.id},}">
                Details
              </router-link>
            </v-btn>               
          
         
            <v-btn class="btn btn-primary">
              <router-link
              style="text-decoration:none;margin:2px"
                
                data-toggle="collapse"
                :to="{
                path: 'edit',
                params: postid, // <-- changed 'props' to 'params'
                query: { postid: post.id},}">
                Edit  
              </router-link>
            </v-btn>
         
         <v-btn style="text-decoration:none;margin:2px" @click="deletedata(post.id)">Delete</v-btn>
            </v-card-actions>
          </v-card>
      </v-flex>
    </v-layout>
  </v-container>




  
</template>

<script>
export default {
     data() {
        return {
            posts: [],
            postid:'',
        }
    },
     mounted() {
        window.axios.get('/api/articles').then(res => {
              console.log(res.data);
            this.posts = res.data
        })
     },
    methods:{
      deletedata(id){
if(confirm("Are you sure to Delete this data ?")){
                window.axios.put(`/api/delete/${id}`).then(response=>{
                   console.log(response);
                }).catch(error=>{
                    console.log(error)
                })
            }
      },
       details(id){
            if(confirm("Are you sure to see details this data ?")){
                window.axios.get(`/api/category/${id}`).then(response=>{
                   console.log(response);
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>


 