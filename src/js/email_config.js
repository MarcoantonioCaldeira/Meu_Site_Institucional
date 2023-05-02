var vue = new Vue({
    el : "#app",
  
    data : {
      error : {name : "*", last_name : "*", email : "*", message : "*"},
      contact : { name : "", last_name : "", email : "", message : ""},
      urlPost : "",
      disabledButton : false,
      messageResult : ""
    },
  
    methods : {
      Send : function(){
        if(this.ValidateForm()){
          this.disabledButton = true;
          this.messageResult = "Sending, please wait!";
  
          var form = this.formData(this.contact);
          axios.post(this.urlPost, form).then(function(response){
            console.log(response.data);
            if(response.data == "send"){
              vue.ResetForm();
              vue.ResetError();
              vue.messageResult  = "Mensagem enviada com sucesso";
              vue.disabledButton = false;
            }else{
               vue.messageResult = "Algo deu errado, tente novamente.";
            }
          });
        }
      },
      formData : function(obj){
        var formData = new FormData();
        for(var key in obj){
          formData.append(key, obj[key]);
        }
        return formData;
      },
      ValidateForm : function(){
        var error = 0;
        this.ResetError();
        if(this.contact.name.length < 4){
          this.error.name = "Please, insert a valid name (4 characters)";
          error++;
        }

        if(this.contact.last_name.length < 4){
           this.error.last_name = "Please, insert a valid last_name (4 characters)";
           error++;
        }
  
        if(this.contact.email.indexOf("@") < 0){
          this.error.email = "Invalid email";
          error++;
        }

  
        if(this.contact.message.length < 4){
          this.error.message = "Invalid message (10 characters)";
          error++;
        }
        return (error === 0);
      },
      ResetForm : function(){
        this.contact.name = "";
        this.contact.last_name = "";
        this.contact.email = "";
        this.contact.message = "";
      },
      ResetError : function(){
        this.error.name = "*";
        this.error.last_name = "*";
        this.error.email = "*";
        this.error.message = "*";
      },
      OpenForm : function(show){
        if(show){
          $("#dvForm").show("slow");
          this.ResetForm();
          this.ResetError();
        }
        else{
          $("#dvForm").hide("slow");
        }
      }
    }
  });