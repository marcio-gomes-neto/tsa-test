<template>
    <div class="topnav">
        <h1>Post-List</h1>
        <div class="nav-list">
            <route-link class="active" href="#home">Home</route-link>
            <route-link href="#news">News</route-link>
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
    background-color: #333;
    overflow: hidden;
  }
  .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  .topnav a.active {
    background-color: #04AA6D;
    color: white;
  }
</style>
  