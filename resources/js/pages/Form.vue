<template>
  <v-card
      class="pa-4"
      width="800"
      outlined
    >
              <v-card-title class="text-h5">
              Article Form
              </v-card-title>
              <v-card-subtitle >Add new Article</v-card-subtitle>
    <form
      ref="form"
       lazy-validation
    @submit.prevent="submit" enctype="multipart/form-data">
              <!-- <input type="hidden" name="_token" :value="csrf"> -->
              <v-text-field
                v-model="article.title"
                 label="Name"
                required
            ></v-text-field>
              <v-textarea
                v-model="article.description"
               label="Desctiption"
              required
            ></v-textarea>
              <v-file-input
               v-model="article.image"
               @change="handleImageSelect"
                show-size
                label="File input"
                type="file"
              ></v-file-input>
            <v-card-actions>
                <v-btn type="submit"   outlined
                rounded
                text>Save</v-btn>
            </v-card-actions>
      </form>
    </v-card>
</template>
<script>
export default {
   
         
          data (){
              return {
                  props: {
                  route: String
                  },
                  csrf: document.head.querySelector('meta[name="csrf-token"]').content,
                  imagefile:'',
                  article:{
                      title:'',
                      description:'',
                      image:{},
                  },
                  edit:false,
            
          }},
          
                 methods : {
             handleImageSelect(e) {
            console.log(e);
            this.imagefile = e;
             
          },
              submit(e){
                e.preventDefault();
                  let currentObj = this;  
            
                   var formData = new FormData();
                  formData.append('image', this.article.image);
                  formData.append('description', this.article.description);
                  formData.append('title', this.article.title);
                  //  formData.append('image', this.image);
                  console.log(formData);
                    axios.post('api/store', formData
                    )  
                  .then(function (response) {  
                      currentObj.output = response.data;  
                      console.log(response.data);
                  }).catch(function (error) {  
                      currentObj.output = error;  
                        this.formErrors = error;
                  }); 
                 
              
              }
          }
          }
 
</script>

 
