<template>
  <form style="width: 100%; padding-bottom: 150px;" id="form_login">
    <div class="form-group">
      <label for="validationServer03">User</label>
      <input type="text" class="form-control" v-model="fields.username" placeholder="Your Username" value="" required>
      <div class="invalid-feedback">

      </div>




    </div>

    <div class="form-group">
      <label for="validationServer03">Username</label>
      <input type="text" class="form-control" v-model="fields.username" placeholder="Your Username" value="" required>
      <div class="invalid-feedback">
      </div>
    </div>

    <div class="form-group">
      <div id="message_login"></div>
    </div>
</form>
</template>


<script>
export default{
  data() {
    return {
      username: '',
      password: '',
      errors: undefined,
      fields: [],
    }
  },
  methods: {
    submit_login: function(){
      if(this.validate(this.fields.username, this.fields.password)){
        this.log_user_in(this.fields.username, this.fields.password);
      }else{
        console.log("not correct");
      }
    },
    validate: function(username, password){
       if(!username || !password){
         return false;
       }else{
         return true;
       }
    },
    log_user_in: function(username,password){

      axios({
        method: 'post',
        url: '/u/login',
        data: {
          username: username,
          password: password
        }
      })
      .then(function (response) {
         if(response.data == "success"){
          $("#message_login").html("<div class='alert alert-success'>Loggedin</div>");
         }else{
          $("#message_login").html("<div class='alert alert-danger'>not loggedin</div>");
         }
      });

    }
  }
}

</script>
