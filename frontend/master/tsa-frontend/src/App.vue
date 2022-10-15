<template>
  <NavBar/>
  <div class="content">
    <router-view/>
  </div>
</template>

<script>
import NavBar from './components/NavBar.vue';
export default {
  name: 'App',
  components: {
    NavBar
  }
}
</script>

<style>
:root{
  --main-dark: #0379AB;
  --main-light: #009BDE;
  --secondary-dark: #004563;
  --secondary-light: #78D7FF;
  --white: #FFF;
  --grey: #DFDFDF;
  background-color: var(--white);
}

.content{
  margin-top: 150px;
}

#app {
  font-family:'Roboto';
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

</style>
