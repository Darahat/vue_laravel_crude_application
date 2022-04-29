<template>
<nav>
  <v-toolbar text >
       <v-app-bar-nav-icon class="grey--text" @click="drawer= !drawer"></v-app-bar-nav-icon>
    <v-toolbar-title class="text-uppercase grey--text">
       <span>Todo</span>
     </v-toolbar-title>
    <v-spacer></v-spacer>
    <v-btn text color="grey">Sign out</v-btn>
  </v-toolbar>
  <v-navigation-drawer app absolute
      temporary floating clipped v-model="drawer"  >
      <v-list-item>
        <v-list-item-avatar>
          <v-img src="https://randomuser.me/api/portraits/men/78.jpg"></v-img>
        </v-list-item-avatar>

        <v-list-item-content>
          <v-list-item-title>John Leider</v-list-item-title>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>

      <v-list dense>
        <v-list-item
          v-for="item in items"
          :key="item.title"
          link
        >
          <v-list-item-icon>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title> <router-link
            style="text-decoration: none;"
               data-toggle="collapse"
              :to="{ name: item.route }"
         >{{ item.title }} </router-link></v-list-item-title>
          </v-list-item-content>
         
        </v-list-item>


 


      </v-list>
  </v-navigation-drawer>
</nav>
    <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <router-link :to="{ name: 'home' }" class="navbar-brand"
        >Laravel-Vue SPA</router-link
      >
      <button
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'home' }"
            >
              Home
            </router-link>
          </li>

          <li class="nav-item">
            <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'about' }"
            >
              About
            </router-link>
          </li>
          <li class="nav-item">
            <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'form' }"
            >
              Add Data
            </router-link>
          </li>
        </ul>
      </div>
    </nav> -->
</template>
<script>
export default {
  data(){
    return {
      drawer:false,
      items: [
          { title: 'Home', icon: 'mdi-home-city',route:'home' },
          { title: 'About', icon: 'mdi-account',route:'about' },
          { title: 'Add Post', icon: 'mdi-account-group-outline',route:'form' },
        ],
    }
  }
}
 
</script>