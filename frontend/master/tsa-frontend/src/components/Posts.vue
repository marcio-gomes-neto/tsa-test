
<template>
  <div class="content">
    <div class="main-content">
      <div class="dropdown" @mouseover="dropdownActive = true" @mouseleave="dropdownActive = false">
        <button class="drop-btn"> 
          {{selectedUser ? selectedUser : 'Select User' }}
          <i class="fa fa-lg fa-caret-down"></i>
        </button>
        <div class="dropdown-content" :style="{display: dropdownActive ? 'block' : 'none'}">
          <li v-for="user in users" :key="user.id" @click="getUserPosts"> 
            {{user.id === 0 ? 'Failed to load users!' : 'User ' + user.id}}
          </li>
        </div>
      </div>
      <div class="posts-area" :style="{display: selectedUser === false ? 'none' : 'block'}">
        <h2>Posts</h2>
        <div class="posts">
          <li v-for="post in posts" :key="post.id"> 
            <textarea v-model="post.name" disabled/> 
            <mdicon name="pencil-outline" @click="editPost(post.id)"/> 
            <mdicon name="trash-can-outline" @click="deletePost(post.id)"/> 
          </li>
        </div>
      </div>
    </div>
    <div class="form-area" :style="{display: selectedUser === false ? 'none' : 'block'}">
      <h2>Create/Edit Post</h2>
      <form>
        <input type="text" placeholder="Title post" class="title-post" v-model="title"/>
        <textarea type="text" placeholder="Post Body" class="post-body" v-model="body"/>
        <input type="button" value="Save" @click="savePost"/>
        <input type="button" class="cancel-btn" value="Cancel" :style="{display: editingPost === false ? 'none' : 'block'}" @click="cancelEdit"/>
      </form>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'Post-page',
  data(){
    return {
      dropdownActive: false,
      editingPost: false,
      selectedUser: false,

      users: undefined,
      posts: undefined,
      
      body:undefined,
      title:undefined,

      newId: 51,
    }
  },
  async mounted() {
    const getUsersResponse = await axios.get('https://jsonplaceholder.typicode.com/users');
    if(getUsersResponse.status === 200){
      this.users = getUsersResponse.data;
    } else {
      this.users = [{id:0}];
    }
  },
  methods:{
    async getUserPosts(event){
      this.selectedUser = event.target.innerText;
      this.dropdownActive = false;

      const getPostsResponse = await axios.get(`https://jsonplaceholder.typicode.com/posts/${event.target.innerText.slice(5)}/comments`);
      this.posts = undefined;
      this.posts = getPostsResponse.data;
    },
    deletePost(event){
      const confirmDelete = confirm('Are you sure?');
      if(!confirmDelete) return;
      //DELETE https://jsonplaceholder.typicode.com/posts/event
      if (this.editingPost === event) {
        this.title = undefined;
        this.body = undefined;
      }
      this.posts = this.posts.filter((e) => {
        return e.id === event ? undefined : e;
      });
    },
    editPost(event){
      this.editingPost = event;
      const selectedPost = this.posts.filter((e) => {
        return e.id === event ? e : undefined;
      })
      this.title = selectedPost[0].name;
      this.body = selectedPost[0].body;
    },
    savePost(){
      if(!this.body || !this.title) return alert('Post title and body need to have at least 8 characters');
      if(this.editingPost !== false){
        //PATCH https://jsonplaceholder.typicode.com/posts/event
        const editedIndex = this.posts.findIndex((e) => {return e.id === this.editingPost});
        this.posts[editedIndex].name = this.title;
        this.posts[editedIndex].body = this.body;
      } else {
        // POST https://jsonplaceholder.typicode.com/posts
        this.posts.push({
            postId: this.selectedUser.slice(5),
            id: this.newId,
            name: this.title,
            body: this.body
        })
        this.newId ++;
      }
      this.title = undefined;
      this.body = undefined;
      this.editingPost = false;
    },
    cancelEdit(){
      this.title = undefined;
      this.body = undefined;
      this.editingPost = false;
    }
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
  min-width: 217px;
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
  margin-top: 5px;
  padding: 0px 2%;
  float:right;
}
.posts-area .posts li span:hover{
  cursor: pointer;
}
.posts-area .posts li textarea {
  width: 60%;
  color: black;
  font-weight: bold;
  font-family: inherit;
  border: 0;
  background-color: transparent;
  user-select: none;
  resize: none;
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
  width: 60%;
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
@media (max-width: 750px) {
  .content {
      display: flex;
      flex-direction: column;
    }
  .main-content{
    width: 100%;
  }
  .form-area{
    margin-left: 5%;
    width: 100%;
  }
}
.drop-btn {
  width: 100%;
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
  right: 8%;
}
.dropdown {
  width: 250px;
  position: relative;
  display: inline-block;
}

.dropdown-content {
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
