$().ready(function(){
           jQuery.validator.addMethod("lettersonly", function(value, element) 
           {
              return this.optional(element) || /^[a-z ]+$/i.test(value);
           }, "Letters and spaces only please");
           $("#validation").validate({
                rules: {
                 firstname:{
                    required:true,
                    lettersonly:true,
                    minlength:2,
                    maxlength:80
                  },
                  lastname:{
                    required:true,
                    lettersonly:true,
                    minlength:2,
                    maxlength:80
                  },
                  email:{
                    required:true,
                    email:true
                  },
                  number:{
                    minlength:9,
                    required:true,
                    maxlength:9,
                    digits:true
                  },
                  priority:"required"
            
            },
           /* errorClass: "my-error-class",
            validClass: "my-valid-class",*/

            messages: {
                         
                  firstname:{
                    required:"*Required",
                    lettersonly:"*Invalid",
                    minlength:"*Invalid",
                    maxlength:"*Invalid"
                  },
                  lastname:{
                    required:"*Required",
                    lettersonly:"*Invalid",
                    minlength:"*Invalid",
                    maxlength:"*Invalid"
                  },
                  email: {
                    required:"*Required",
                    email:"*Invalid"
                  },
                  number:{
                    required:"*Required",
                    minlength:"*Invalid(ex: 788888888)",
                    maxlength:"*Invalid(ex: 788888888)",
                    digits:"*Invalid(ex: 788888888)"
                  },
                  priority: "*Required"
           
            }
        });
        $("#p").css({"background-color": "yellow", "font-size": "200%", "color": "red"});
       });