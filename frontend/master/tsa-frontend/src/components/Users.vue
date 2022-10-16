<template>
    <div class="content">

      <div class="main-content">
        <div class="dropdown" @mouseover="dropdownActive = true" @mouseleave="dropdownActive = false">
          <button class="drop-btn">
            {{selectedUser ? selectedUser : 'Select User' }}
            <i class="fa fa-lg fa-caret-down"></i>
          </button>
          <div class="dropdown-content" :style="{display: dropdownActive ? 'block' : 'none'}">
            <li v-for="user in users" :key="user.id" @click="getUser"> 
              {{user.id === 0 ? 'Failed to load users!' : 'User ' + user.id}}
            </li>
          </div>
        </div>

        <div class="info-area">
            <div class="grid-container">
                <div class="grid-item">
                    <label>Name</label>
                    <input v-model="name" readonly/>
                </div>
                <div class="grid-item">
                    <label>Username</label>
                    <input v-model="username" readonly/>
                </div>
                <div class="grid-item">
                    <label>Email</label>
                    <input v-model="email" readonly/>
                </div>
                <div class="grid-item">
                    <label>Phone</label>
                    <input v-model="phone" readonly/>
                </div>
                <div class="grid-item">
                    <label>Street</label>
                    <input v-model="street" readonly/>
                </div>
                <div class="grid-item">
                    <label>City</label>
                    <input v-model="city" readonly/>
                </div>
              </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';

  export default {
    name: 'Users-page',
    data(){
      return {
        dropdownActive: false,
        selectedUser:false,

        users: undefined,

        name: undefined,
        username: undefined,
        email: undefined,
        phone: undefined,
        street: undefined,
        city: undefined
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
      async getUser(event){
        this.selectedUser = event.target.innerText;
        this.dropdownActive = false;

        const getUser = await axios.get(`https://jsonplaceholder.typicode.com/users/${event.target.innerText.slice(5)}`);
        this.name = getUser.data.name
        this.username = getUser.data.username
        this.phone = getUser.data.phone
        this.email = getUser.data.email
        this.street = getUser.data.address.street
        this.city = getUser.data.address.city
      },
    }
  }
</script>
  
  <style scoped>
  .main-content {
    float:left;
    width: 100%;
  }
  .info-area{
    margin: auto;
    margin-top: 6%;
    width: 90%;
  }
  .info-area .grid-container {
    display: grid;
    grid-template-columns: auto auto auto;
  }
  @media (max-width: 750px) {
    .info-area .grid-container {
        display: grid;
        grid-template-columns: auto auto;
      }
  }
  .info-area .grid-item {
    background-color: rgba(255, 255, 255, 0.8);
    display: flex;
    flex-direction: column;
    padding: 1% 5%;
    margin: 15px;
    text-align: center;
  }
  .info-area label {
    margin-bottom: 5px;
    padding-left: 8px;
    text-align: left;
    font-size: 23px;
    font-weight: bolder;
    color: var(--secondary-dark);    
  }
  .info-area input {
    width: 100%;
    margin-bottom: 2%;
    padding: 15px 15px;
    border: 0;
    border-radius: 8px;
    box-shadow : 0px  4px  4px  rgba(0, 0, 0, 0.25);
    font-size: 20px;
    background-color: var(--grey);
    font-family: inherit;
  }
  .drop-btn {
    width: 250px;
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
    left: 22px;
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
  