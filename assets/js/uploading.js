$().ready(function(){
           jQuery.validator.addMethod("lettersonly", function(value, element) 
           {
              return this.optional(element) || /^[a-z ]+$/i.test(value);
           }, "Letters and spaces only please");
           $("#validation").validate({
                rules: {
                 izina:{
                    minlength:2,
                    maxlength:200
                  },
                  price:{
                    digits:true
                  },
                  details:{
                    maxlength:2000
                  },
                  name:{
                    lettersonly:true,
                    minlength:2,
                    maxlength:100
                  },
                  contact:{
                    minlength:10,
                    maxlength:10,
                    digits:true
                  }
            
            },
           /* errorClass: "my-error-class",
            validClass: "my-valid-class",*/

            messages: {
                         
                  price:{
                    digits:"*Invalid, digits omly please"
                  },
                  izina:{
                    minlength:"*Invalid",
                    maxlength:"*Invalid"
                  },
                  details: {
                    maxlength:"*max length"
                  },
                  name:{
                    lettersonly:"*Invalid, letters only",
                    minlength:"*Invalid",
                    maxlength:"*max length"
                  },
                  contact:{
                    minlength:"*Invalid number",
                    maxlength:"*Invalid number",
                    digits:"*Invalid (numbers only)"
                  }
           
            }
        });
        $("#p").css({"background-color": "yellow", "font-size": "50%", "color": "red"});
       });