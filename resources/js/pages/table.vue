<template>
   <v-simple-table>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-left">
            No
          </th>
          <th class="text-left">
            Title
          </th>
          <th class="text-left">
            Description
          </th>
          <th class="text-left">
            Details
          </th>
          <th class="text-left">
            Edit
          </th>
          <th class="text-left">
            Delete
          </th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="(item,index) in posts"
          :key="item.name"
        >
          <td>{{ index }}</td>
          <td>{{ item.title }}</td>
          <td>{{ item.description }}</td>
          <td>
            <button class="btn btn-info" > 
              <router-link
                class="nav-link"
                data-toggle="collapse"
                :to="{
                path: 'details',
                params: postid, // <-- changed 'props' to 'params'
                query: { postid: item.id},}">
                Details
              </router-link>
            </button>               
          </td>
          <td>
            <button class="btn btn-primary">
              <router-link
                class="nav-link"
                data-toggle="collapse"
                :to="{
                path: 'edit',
                params: postid, // <-- changed 'props' to 'params'
                query: { postid: item.id},}">
                Edit  
              </router-link>
            </button>
          </td>
          <td><button class="btn btn-danger" @click="deletedata(item.id)">Delete</button></td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
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


 