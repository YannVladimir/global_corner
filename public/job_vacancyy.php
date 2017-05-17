<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
//checkUser();
checkToken();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="job in rwanda, job vacancies, latest jobs, 250">
    <meta name="author" content="yann vladimir">
    <title>Job vacancies</title>
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/yann.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    
    <link href="assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="assets/images/ico/icon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css">
      .sizingimages{
        height: 200px;
      }
      .fon{
        font-size: 20px;
      }
      .sizingimagesmax{
        max-height: 190px;
      }
      .border{
        border-radius: 1px;
        border-style: solid;
        border-color: green;
      }
    </style>
</head><!--/head-->

<body>
  <?php   
    require('header.php');   
  ?>  

    <div class="header-bottom"><!--header-bottom-->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="mainmenu pull-left">
              <ul class="nav navbar-nav collapse navbar-collapse">
                 <li><a href="home.php">Home</a></li>
                <?php
                    $query = "SELECT * from categories where cat_id !=7";
                    $res = mysqli_query($con,$query);
                    while($row = mysqli_fetch_assoc($res))
                    {
              
                       echo"<li><a href='category.php?id={$row['cat_id']}&active={$row['cat_id']}' class=''>{$row['cat_name']}</a></li> ";
                      
                    }
                ?>
<li><a href="job_vacancies.php" class="active">Job Vacancies</a></li> 

                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
  
  <!--<section id="advertisement">
    <div class="container">
      <img src="images/shop/advertisement.jpg" alt="" />
    </div>

    This section is for advetisement
  </section>-->
  <section>
    <div class="container">
     <div class='row'>

            <div class='col-sm-1'></div>

            <div class='col-sm-10'>
              <br><br>
                    <h2 class="title text-center">Research Development Officer, Kigali, Rwanda</h2>
                   <p> <strong>Position Title:</strong> Research Development Officer<br>

                    <strong>Reports to:</strong> Assistant Director, Master of Science in Global Health Delivery<br>

                    <strong>Location:</strong> Kigali, Rwanda</p>
                    <p><h3>Organizational Profile</h3>
                    University of Global Health Equity (UGHE) is a new kind of university training the next generation of global leaders in health care delivery. The university launched in Rwanda in September 2015 with its flagship degree program: the Master of Science in Global Health Delivery (MGHD). UGHE is committed to an exceptional educational experience rooted in dynamic and engaging courses prioritizing a high degree of faculty mentorship and experience-based learning.<br>
                    UGHE is an initiative of Partners In Health (PIH), an internationally recognized non-profit organization whose mission is to provide a preferential option for the poor through health care.<br>
                    Members of the UGHE community are tenacious and resolute in their drive to attain social justice, make common cause with those in need, listen to and learn from others, and operate with honesty and humility as they uphold academic integrity and intellectual curiosity. The University of Global Health Equity seeks individuals committed to these values to join the team.<br>
                    </p>
                    
                    <p><h3>Role Overview</h3>
                    The Research Development Officer (RDO) will build and support the MGHD's culminating practicum capstone; an eighteen month mentored health project that students carry out at their workplace, accompanied by deliverables, mentorship, and a learning model that supports executing an independent p roject. The practicum capstone allows students to gain hands-on experience in the research and design, implementation and management, and analysis and dissemination of their project. The RDO ensures that this vision is executed by collaborating with course faculty, the UGHE teaching and learning team, and leaders across the Rwandan health sector to create robust, rigorous, and well-mentored practicum experience in responsive, dynamic, and pedagogically-innovative ways.<br>
                    At UGHE more generally, the RDO will support the growth of interdisciplinary and equity-f ocused health science research carried out by faculty, staff, students, and university partners by designing, supporting, and managing UGHE's IRB, grant and manuscript development, and the creation of initiatives to develop research skills and productivity.
                    </p>

                    <p><h3>Responsibilities</h3>
                    <ol>
                    <li><strong>Support Practicum Curriculum Design</strong>
                     <ol>
                       <li>Design an academically rich experience with attention to content and pedagogy, ensuring continuity through learning objectives, under the guidance of the Practicum Course Director and Academic Director;
                       </li>
                       <li>Conduct literature, media, and other course reviews to support the develop of high caliber pre-, post-, and in-class practicum material;
                       </li>
                       <li>Design and execute academic evaluations and course assessments;
                       </li>
                       <li>
                       Audit practicum to ensure continuous quality improvement, under the guidance of the Course Director and Academic Director</li>
              

                        </ol>
                       </li>
                       <li><strong>Manage and Support Practicum Student Experience</strong>
                     <ol>
                       <li>Serve as the primary student liaison through office hours, by identifying supplementary academic materials, and by providing feedback on assignments;</li>
                       <li>Design and facilitate supplementary programming on academic writing, literature reviews, and principles of academic integrity;
                       </li>
                       <li>Receive, collate, disseminate, and respond to student input;
                       </li>
                       <li>
                       Supervise and manage in-country and remote Practicum teaching assistants, under the guidance of the Course Director</li>
                       <li>Delivery course materials, when appropriate, under the guidance of the Course Director</li>

                        </ol>
                       </li>
                       <li><strong>Collaborate with Faculty</strong>
                     <ul>
                       <li>Collaborate with instructors who develop and deliver practicum content and mentorship to ensure continuity across programs, under the guidance of the Practicum Course Director and Academic Director;</li>
                       
                        </ul>
                       </li>
                       <li><strong>Develop Research Capacity</strong>
                     <ol>
                       <li>Manage UGHE's IRB by serving as the secretary; liaise with the IRB Chair as well as scholars submitting IRB protocols;</li>
                       <li>Provide support to UGHE leadership, faculty, and scholars around grant and manuscript development;
                       </li>
                       <li>Support the creation of initiatives to develop research skills and productivity
                       </li>
                       
                        </ol>
                       </li>
                     </ol>
                    </p>
                    <p><h3>Qualifications</h3>
                      <ol>
                        <li>Master's degree in education, public health, or related field with graduate coursework in global/public health, epidemiology, biostatistics, health care management, and strategic problem solving frameworks</li>
                        <li>Two years of professional experience working internationally with diverse health and education teams; a minimum of four years of professional work experience</li>
                        <li>Experience supporting and mentoring graduate-level health-focused implementation projects</li>
                        <li>Experience supporting content delivery, instruction, and mentorship in higher education</li>
                        <li>Experience with active learning approaches and innovations for adult learners</li>
                        <li>Experiencing managing IRB processes</li>
                        <li>Track record developing research capacity</li>
                        <li>Proven success in supporting proposal and manuscript development for health-related research projects</li>
                        <li>Exceptional written and oral communication and time management skills</li>
                        <li>Exemplary interpersonal skills; ability to effectively collaborate with diverse staff and students</li>
                        <li>Availability to work evenings and weekends when the majority of classes are held</li>
                        <li>Commitment to social justice</li>
                        <li>Proficiency in French or Kinyarwanda is beneficial, but not required</li>
                      </ol>
                    </p>
                    <p class="text-center">
                      <a href="https://jobs.jobvite.com/pih/job/oY3b5fw1?nl=1&nl=1" target="_blank"><button class="form-btn primary">More information and Application details</button></a>
                    </p>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <br><br>
        
    </div>
  </section>
  
  <br><br><br><br>
  <?php  
      require('footer.php');    
    ?>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/yann.min.js"></script>
  <script src="assets/js/jquery.scrollUp.min.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/price-range.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>
  <script type="text/javascript" src="assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/dist/js/sb-admin-2.js"></script>
  <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
  </script>

</body>
</html>





