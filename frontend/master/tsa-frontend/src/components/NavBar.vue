<template>
    <div class="topnav">
        <h1>Post-List</h1>
        <div class="nav-list">
          <div class="nav-item">
            <router-link to="/">Post</router-link> 
          </div>
          <div class="nav-item">
            <router-link to="/users">Users</router-link>
          </div>
        </div>
    </div>
</template>
  
<script>
export default {
    name: 'NavBar'
}
</script>

<style scoped>
.topnav {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
}
.topnav h1{
  margin: -1px;
  width: 100%;
  padding: 18px 16px;
  background-color: var(--main-light);
  color: var(--white);
}
.topnav .nav-list {
  width: 100%;
  text-align: left;
  background-color: var(--main-dark);
  padding: 14px 16px;
  font-size: 20px;
}
.topnav .nav-item{
  display: inline;
  padding: 0px 7%;
}
.topnav a{
  transition-duration: 0.3s;
  text-decoration: none;
  color: var(--secondary-dark);
  font-weight: bold;
}
.topnav a.router-link-active {
  color: var(--white);
}
.topnav a:hover {
  color: var(--white);
  cursor:pointer;
}
</style>
  