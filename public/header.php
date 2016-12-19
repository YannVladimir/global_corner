<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row"> 
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +250782767289</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> 250trade.com@gmail.com</a></li>
							</ul>
						</div> 
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="logo pull-left">
							<a href="home.php"><img src="assets/images/home/trade250.png" style="width:148px;" alt="" /></a>
						</div>
						<script language="JavaScript">
TargetDate = "01/31/2017 00:00 AM";
BackColor = "white";
ForeColor = "#3AACEB";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "Starting in <br>%%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";
FinishMessage = "It is finally here!";
function calcage(secs, num1, num2) {
  s = ((Math.floor(secs/num1))%num2).toString();
  if (LeadingZero && s.length < 2)
    s = "0" + s;
  return "<b>" + s + "</b>";
}

function CountBack(secs) {
  if (secs < 0) {
    document.getElementById("cntdwn").innerHTML = FinishMessage;
    return;
  }
  DisplayStr = DisplayFormat.replace(/%%D%%/g, calcage(secs,86400,100000));
  DisplayStr = DisplayStr.replace(/%%H%%/g, calcage(secs,3600,24));
  DisplayStr = DisplayStr.replace(/%%M%%/g, calcage(secs,60,60));
  DisplayStr = DisplayStr.replace(/%%S%%/g, calcage(secs,1,60));

  document.getElementById("cntdwn").innerHTML = DisplayStr;
  if (CountActive)
    setTimeout("CountBack(" + (secs+CountStepper) + ")", SetTimeOutPeriod);
}

function putspan(backcolor, forecolor) {
 document.write("<span id='cntdwn' style='font-size:25px; background-color:" + backcolor + 
                "; color:" + forecolor + "'></span>");
}

if (typeof(BackColor)=="undefined")
  BackColor = "white";
if (typeof(ForeColor)=="undefined")
  ForeColor= "black";
if (typeof(TargetDate)=="undefined")
  TargetDate = "12/31/2020 5:00 AM";
if (typeof(DisplayFormat)=="undefined")
  DisplayFormat = "%%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";
if (typeof(CountActive)=="undefined")
  CountActive = true;
if (typeof(FinishMessage)=="undefined")
  FinishMessage = "";
if (typeof(CountStepper)!="number")
  CountStepper = -1;
if (typeof(LeadingZero)=="undefined")
  LeadingZero = true;


CountStepper = Math.ceil(CountStepper);
if (CountStepper == 0)
  CountActive = false;
var SetTimeOutPeriod = (Math.abs(CountStepper)-1)*1000 + 990;
putspan(BackColor, ForeColor);
var dthen = new Date(TargetDate);
var dnow = new Date();
if(CountStepper>0)
  ddiff = new Date(dnow-dthen);
else
  ddiff = new Date(dthen-dnow);
gsecs = Math.floor(ddiff.valueOf()/1000);
CountBack(gsecs);
</script>


						<!--<div class="btn-group pull-right">
							
							<div class="btn-group">
								<button type="button" class="btn btn-group dropdown-toggle country" data-toggle="dropdown">
									Select Your Language
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">English</a></li>
									<li><a href="">Kinyarwanda</a></li>
									<li><a href="">Kiswahili</a></li>
								</ul>
							</div>
						</div>-->
					</div>
					
					<?php
                   if(isset($_SESSION['email']))
                   {
                   echo "
                    <div class='col-sm-4'>
						<div class='shop-menu pull-right'>
							<ul class='nav navbar-nav'>
								<li><a href='my_acount.php'><i class='fa fa-user'></i> My Account</a></li>
								<li><a href='home.php?var=logout'><i class='fa fa-lock'></i> Logout</a></li>
							</ul>
						</div>
					</div>";
                   }
                   else
                   {
              echo "<div class='col-sm-5'>
						<div class='shop-menu pull-right'>
							<ul class='nav navbar-nav'>
								<li><a></a></li>
								<li><a href='login.php'><i class='fa fa-lock'></i> Login</a></li>
							</ul>
						</div>
					</div>";
                   }
                 ?>
				</div>
			</div>
		</div><!--/header-middle--> 
		
		