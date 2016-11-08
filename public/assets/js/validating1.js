$().ready(function(){
           jQuery.validator.addMethod("lettersonly", function(value, element) 
           {
              return this.optional(element) || /^[a-z ]+$/i.test(value);
           }, "Letters and spaces only please");
           $("#validation").validate({
                rules: {
                 ads:{
                    required:true,
                    minlength:2,
                    maxlength:80
                  },
                  select:{
                    required:true
                  },
                  text:{
                    required:true
                  },
                  image:{
                    required:true
                  },
                  name:{ 
                    required:true,
                    lettersonly:true,
                    minlength:2
                  },
                  phone:{
                    required:true,
                    number:true,
                    minlength:8
                  },
                  place:"required"
            
            },
           /* errorClass: "my-error-class",
            validClass: "my-valid-class",*/

            messages: {
                         
                  ads:{
                    required:"*required",
                    minlength:"*Invalid",
                    maxlength:"*Invalid"
                  },
                  select:{
                    required:"*required"
                  },
                  text:{
                    required:"*required"
                  },
                  image:{
                    required:"*required"
                  },
                  name:{
                    required:"*required",
                    lettersonly:"*Invalid",
                    minlength:"*Invalid"
                  },
                  phone:{
                    required:"*required",
                    number:"*Invalid",
                    minlength:"*Invalid"
                  },
                  place:"*required"
           
            }
        });
        $("#p").css({"background-color": "yellow", "font-size": "200%", "color": "red"});
       });