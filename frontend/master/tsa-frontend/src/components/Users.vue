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

        <div class="info-area">
            <div class="grid-container">
                <div class="grid-item">
                    <label>Name</label>
                    <input readonly/>
                </div>
                <div class="grid-item">
                    <label>Username</label>
                    <input readonly/>
                </div>
                <div class="grid-item">
                    <label>Email</label>
                    <input readonly/>
                </div>
                <div class="grid-item">
                    <label>Phone</label>
                    <input readonly/>
                </div>
                <div class="grid-item">
                    <label>Street</label>
                    <input readonly/>
                </div>
                <div class="grid-item">
                    <label>City</label>
                    <input value="asdasdas" readonly/>
                </div>
              </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'Users-page',
    components: {
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
  