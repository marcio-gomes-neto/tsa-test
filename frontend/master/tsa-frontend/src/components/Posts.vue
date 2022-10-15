<template>
  <div class="content">
    <div class="main-content">
      <div class="dropdown">
        <button class="drop-btn"> Select User
          <i class="fa fa-lg fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <li href="#">Link 1</li>
          <li href="#">Link 2</li>
          <li href="#">Link 3</li>
        </div>
      </div>
      <div class="posts-area">
        <h2>Posts</h2>
        <div class="posts">
          <li>Link 1 <mdicon name="pencil-outline"/> <mdicon name="trash-can-outline"/> </li>
          <li>Link 2</li>
          <li>Link 3</li>
        </div>
      </div>
    </div>
    <div class="form-area">
      <h2>Create/Edit Post</h2>
      <form>
        <input type="text" placeholder="Title post" class="title-post"/>
        <textarea type="text" placeholder="Post Body" class="post-body"/>
        <input type="button" value="Save"/>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Post-page',
  components: {
  }
}
</script>

<style scoped>
.main-content {
  float:left;
  width: 40%;
}
.posts-area{
  display: flex;
  flex-direction: column;
  padding: 7% 8%;
}
.posts-area h2{
  color: var(--main-light);
  text-align: left;
}
.posts-area .posts li {
  transition-duration: 0.3;
  list-style-type: none;
  text-align: left;
  margin-bottom: 3%;
  padding: 3% 6%;
  font-weight: bolder;
  border-radius: 10px;
  background-color: var(--secondary-light);
  box-shadow : 0px  4px  4px  rgba(0, 0, 0, 0.25);
}
.posts-area .posts li span{
  margin-top: -2px;
  padding: 0px 2%;
  float:right;
}
.posts-area .posts li span:hover{
  cursor: pointer;
}
.content {
  display: inline;
  width: 100%;
}
.form-area {
  float:right;
  display: flex;
  flex-direction: column;
  width: 50%;
  padding-top: 5%;
}
.form-area h2{
  text-align: left;
  color: var(--main-light)
}

.form-area form{
  text-align: left;
  display: flex;
  flex-direction: column;
}
.form-area form input[type=text]{
  width: 40%;
  margin-bottom: 2%;
  padding: 10px 15px;
  border: 0;
  border-radius: 8px;
  box-shadow : 0px  4px  4px  rgba(0, 0, 0, 0.25);
  font-size: 20px;
  background-color: var(--grey);
  font-family: inherit;
}
.form-area form input[type=button]{
  transition-duration: 0.3s;
  background-color: var(--grey);
  width: 20%;
  margin-top: 2%;
  padding: 10px 15px;
  border: 1px solid var(--grey);
  border-radius: 8px;
  box-shadow : 0px  4px  4px  rgba(0, 0, 0, 0.25);
  font-size: 20px;
  font-family: inherit;
}

.form-area form input[type=button]:hover{
  background-color: white;
}

.form-area form .post-body{
  width:75%;
  height: 200px;
  padding: 10px 15px;
  font-size: 20px;
  background-color: var(--grey);
  border: 0;
  border-radius: 10px;
  box-shadow : 0px  4px  4px  rgba(0, 0, 0, 0.25);
  resize: vertical;
  font-family: inherit;
}
.drop-btn {
  background-color: var(--main-light);
  color: white;
  padding: 12px 80px;
  font-size: 16px;
  border-radius: 50px;
  box-shadow : 0px  4px  4px  rgba(0, 0, 0, 0.25);
  font-weight: 600;
  border: none;
  cursor: pointer;
}
.drop-btn i {
  position: absolute;
  right: 23px;
}
.dropdown {
  min-width: 250px;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  left: 18px;
  position: absolute;
  background-color: white;
  border-radius: 0px 0px 10px 10px;
  min-width: 205px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content li {
  transition-duration: 0.3s;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  border-bottom: 1px solid grey;
  cursor: pointer;
  display: block;
}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown-content li:last-child:hover {
  background-color: #f1f1f1;
  border-radius: 0px 0px 10px 10px;
};
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

.dropdown-content li:hover {
  background-color: #f1f1f1;
}
.dropdown li:last-child {
  border: 0;
};
::placeholder{
  color: black;
  opacity: 60%;
  font-weight: 500;
}
</style>
