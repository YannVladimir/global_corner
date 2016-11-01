$().ready(function(){
           $("#contactform").validate({
                rules: {
                 subject:{
                    required:true,
                    minlength:2,
                    maxlength:100
                  },
                  message:{
                    required:true,
                    minlength:3
                  },
                  name:{ 
                    required:true, 
                    minlength:2,
                    maxlength:100
                  },
                  email:{
                    email:true
                  },
                  number:{
                    minlength:10,
                    maxlength:10,
                    digits:true
                  }
            
            },
           /* errorClass: "my-error-class",
            validClass: "my-valid-class",*/

          messages: 
           {     
                  subject:{
                    required:"*Required field",
                    minlength:"*your subject is very short",
                    maxlength:"*your subject is too long"
                  },
                  name:{
                    required:"*Required field",
                    minlength:"*too short",
                    maxlength:"*too long"
                  },
                  message{
                    required:"*Required field",
                    minlength:"*Your message is too short"
                  },
                  email: {
                    email:"*Invalid email adress"
                  },
                  number:{
                    minlength:"*Invalid number ( Eg: 07-------- )",
                    maxlength:"*Invalid number ( Eg: 07-------- )",
                    digits:"*Invalid number ( Eg: 07-------- )"
                  }
           
            }
        });
        $("#h6").css({"background-color": "yellow", "font-size": "200%", "color": "red"});
       });