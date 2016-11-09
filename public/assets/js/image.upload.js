      $(document).ready(function()
  {
     
        $("#selecting").click(function(){
          $("#optionss").slideToggle();
        });
       
  });
       
       $(".btn1").bind("click" , function(){
        $("#inp").click();
       });
       document.getElementById("inp").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
$(".btn2").bind("click" , function(){
        $("#inp2").click();
       });
       document.getElementById("inp2").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image2").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
$(".btn3").bind("click" , function(){
        $("#inp3").click();
       });
       document.getElementById("inp3").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image3").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
$(".btn4").bind("click" , function(){
        $("#inp4").click();
       });
       document.getElementById("inp4").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image4").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
$(".btn5").bind("click" , function(){
        $("#inp5").click();
       });
       document.getElementById("inp5").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image5").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
$(".btn6").bind("click" , function(){
        $("#inp6").click();
       });
       document.getElementById("inp6").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image6").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
$(".btn7").bind("click" , function(){
        $("#inp7").click();
       });
       document.getElementById("inp7").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image7").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
$(".btn8").bind("click" , function(){
        $("#inp8").click();
       });
       document.getElementById("inp8").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image8").src = e.target.result; 
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
/*$(".cat1").bind("click" , function(){
        $("#selecting").click();
       });
       document.getElementById("selecting").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("cat").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};*/
   