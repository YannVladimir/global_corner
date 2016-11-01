$().ready(function(){
           $("#validation").validate({
                rules: {
                 izina:{
                    minlength:2,
                    maxlength:200
                  },
                  name:{ 
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
                       
                  izina:{
                    minlength:"*Below the minimum length of characters",
                    maxlength:"*Above the maximum length of characters"
                  },
                  name:{
                    minlength:"*Below the minimum length of characters",
                    maxlength:"*Above the maximum length of characters"
                  },
                  contact:{
                    minlength:"*Invalid number ( Eg: 07-------- )",
                    maxlength:"*Invalid number ( Eg: 07-------- )",
                    digits:"*Invalid number ( Eg: 07-------- )"
                  }
           
            }
        });
        $("#p").css({"background-color": "yellow", "font-size": "50%", "color": "red"});
       });