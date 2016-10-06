$().ready(function(){
           jQuery.validator.addMethod("lettersonly", function(value, element) 
           {
              return this.optional(element) || /^[a-z ]+$/i.test(value);
           }, "Letters and spaces only please");
           $("#main-contact-form").validate({
                rules: {
                 subject:{
                    required:true,
                    minlength:2,
                    maxlength:100
                  },
                  message{
                    required:true,
                    minlength:3
                  },
                  name:{
                    required:true, 
                    lettersonly:true,
                    minlength:2,
                    maxlength:100
                  },
                  email:{
                    email:true
                  },
                  number:{
                    minlength:5,
                    maxlength:20,
                    digits:true
                  }
            
            },
           /* errorClass: "my-error-class",
            validClass: "my-valid-class",*/

            messages: {
                         
                  subject:{
                    required:"*Required",
                    minlength:"*your subject is very short",
                    maxlength:"*your subject is too long"
                  },
                  name:{
                    required:"*Required",
                    lettersonly:"*letters only please",
                    minlength:"*too short",
                    maxlength:"*too long"
                  },
                  message{
                    required:"*required",
                    minlength:"*your message is too short"
                  },
                  email: {
                    email:"*Invalid email adress"
                  },
                  number:{
                    minlength:"*Invalid",
                    maxlength:"*Invalid",
                    digits:"*Digits only please"
                  }
           
            }
        });
        $("#h6").css({"background-color": "yellow", "font-size": "200%", "color": "red"});
       });