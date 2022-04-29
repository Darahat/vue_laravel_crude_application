<template>
 
    
    <!-- <navbar></navbar>
    <div class="container">
    </div> -->
 
  <v-app>
    <v-card>
	 <navbar></navbar>
   </v-card>
   <v-container>

<v-main>
   <v-card class="d-flex align-center justify-center pa-6" >
		      <router-view></router-view>
   </v-card>
	</v-main>

	
   
  </v-container>
	<v-footer class="caption" app inset>
		<div class="px-2">
			Copyright &copy; &mdash; Your company
		</div>
	</v-footer>
</v-app>
</template>

<script>
export default {
  watch: {
    $route() {
      $("#navbarCollapse").collapse("hide");
    },
  },
};
</script>