$().ready(function(){
           $("#validation").validate({
                rules: {
                 izina:{
                    minlength:2,
                    maxlength:200,
                    required:true
                  },
                  name:{ 
                    minlength:2,
                    maxlength:100,
                    required:true
                  },
                  contact:{
                    minlength:10,
                    maxlength:10,
                    required:true
                  },
                  location:{
                    required:true
                  },
                  subcategory:{
                    required:true
                  }
            
            },
           /* errorClass: "my-error-class",
            validClass: "my-valid-class",*/

            messages: {
                       
                  izina:{
                    minlength:"*Below the minimum length of characters",
                    maxlength:"*Above the maximum length of characters",
                    required:"*this field is required..."
                  },
                  name:{
                    minlength:"*Below the minimum length of characters",
                    maxlength:"*Above the maximum length of characters",
                    required:"*This field is required"
                  },
                  contact:{
                    minlength:"*Invalid number ( Eg: 07-------- )",
                    maxlength:"*Invalid number ( Eg: 07-------- )",
                    digits:"*Invalid number ( Eg: 07-------- )",
                    required:"*This field is required"
                  },
                  location:{
                    required:"*This field is required"
                  },
                  subcategory:{
                    required:"*This field is required"
                  }
           
            }
        });
        $("#p").css({"background-color": "yellow", "font-size": "50%", "color": "red"});
       });