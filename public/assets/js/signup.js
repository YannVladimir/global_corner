$().ready(function(){
           $("#contactform").validate({
                rules: {
                 firstname:{
                    required:true,
                    minlength:2,
                    maxlength:100
                  },
                  lastname:{
                    required:true,
                    minlength:2,
                    maxlength:100
                  },
                  password:{ 
                    required:true, 
                    minlength:6,
                    maxlength:100
                  },
                  repassword:{
                    equalTo:"#password"
                  },
                  email:{
                    email:true
                  },
                  phone:{
                    minlength:10,
                    maxlength:10,
                    digits:true
                  }
            
            },
           /* errorClass: "my-error-class",
            validClass: "my-valid-class",*/

          messages: 
           {     
                  firstname:{
                    required:"*Required field",
                    minlength:"*Too short",
                    maxlength:"*Too long"
                  },
                  lastname:{
                    required:"*Required field",
                    minlength:"*Too short",
                    maxlength:"*Too long"
                  },
                  password:{
                    required:"*Required field",
                    minlength:"*Too short ( minimum 6 characters are required",
                    maxlength:"*Too long"
                  },
                  repassword:{
                    equalTo:"*Has to be same with password"
                  },
                  email: {
                    email:"*Invalid email adress"
                  },
                  phone:{
                    minlength:"*Invalid number ( Eg: 07-------- )",
                    maxlength:"*Invalid number ( Eg: 07-------- )",
                    digits:"*Invalid number ( Eg: 07-------- )"
                  }
           
            }
        });
        $("#h6").css({"background-color": "yellow", "font-size": "200%", "color": "red"});
       });