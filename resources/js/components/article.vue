<template>
    <div>
        <p>Articles List</p>
          
        <ul class="list-group">
            <li class="list-group-item" v-for = "content in articles" :key="content.id">
                    <div class="row">
                        <div class="col-md-8">
                            <p  >{{content.title}}</p>
                        </div>
                        <div class="col-md-4" style="text-align:right">
                            <button class="btn btn-info">Details</button>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </div>
                    </div>
            </li>
        </ul>
    </div>    
</template>

<script>
export default {
//      const routes = [
//     {
//         path: '/login',
//         name: 'login',
//                 components: {
//             Login: login,
//         }
//     },
// ],
    props:['articles'],
    mounted(){
        console.log(this.articles);
    },
    
}
</script>