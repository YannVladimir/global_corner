<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
checkUser();
checkToken();
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>250 Trade | Upload item</title>
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/yann.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script> 
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css">
      .this{
        color: white;
      }
      .hide{
            display: none;  }
      .starting{
        cursor: pointer;
        background: url("assets/images/upload.jpg")center center no-repeat;
        width:180px;
        height: 150px;
        border:3px;
      }
      
      .btnlocation{
        cursor: pointer;
        background: url("assets/images/upload.jpg")center center no-repeat;
        width:180px;
        height: 150px;
        border-style: none;
      }
      .notshowing{
        display: none;
      }
      #optionss{
        z-index: 1;
        position: absolute;
        background: white;
        border: 1px;
        border-style: solid;
        border-top-width: 0px;
        border-right-width: 0px;
        border-color: #b7c1c6;
      }
      .optionhover{
        cursor: pointer;
        display: block;
        background: white;
      }
      .optionhover label:hover{
        background: blue;
        color:white;
      }
      .ff{
        float: right;
      }
      .fon{
        font-size: 20px;
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
          <div class="col-sm-7">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="mainmenu pull-left">
              <ul class="nav navbar-nav ">
                <li><a href="home.php" class="fon">Home</a></li>
                <li><a href="upload.php" class="fon">Sell</a></li>
                <li><a href="categories.php" class="fon">Buy</a></li>
                <li class="dropdown"><a href="#">Odering<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu"> 
                        <li><a href="order.php" class="fon">Make order</a></li>
                        <li><a href="orders.php" class="fon">View orders</a></li> 
                    </ul>
                </li>
                <li><a href="contact_us.php" class="fon">Contact us</a></li>
                
                            </ul>
                        </div>
                    </div>
                    <?php
                      include('search.php');
                    ?>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
  <!--/header-->

  <section id="cart_items">
    <div class="container">
          <div class="col-sm-1"></div>
        <div class="col-sm-10 padding-right">
            <div class="contact-form align-center">
              <br>
              <h2 class="title text-center">Terms of use</h2>
              <div class="status alert alert-success" style="display: none"></div>
                  <h3 class="title text-center">Description of service and content policy</h3>
                           
                             <p>1. 250Trade is the next generation of online classifieds. 
                             	We act as a venue to allow our users who comply with these Terms to offer, 
                             	sell, and buy products and services listed on the Platform. 
                             	As a result, and as discussed in more detail in these Terms, 
                             	you hereby acknowledge and agree that 250Trade  
                             	has no control over any element or any transaction, 
                             	and shall have no liability to any party in connection with such transactions. 
                             	You use the Platform at your own risk.
                             </p>

                             <p>2. You understand that 250Trade does not control, 
                             	and is not responsible for ads, directory information,
                                 business listings/information, messages between users,
                             	including without limitation e-mails sent from outside 250trade’s 
                             	domain or other means of electronic communication, 
                             	whether through the Platform or another Third Party Website (defined below) 
                             	or offerings, comments, user postings, files, images, photos, video, sounds,
                             	 business listings/information and directory information or any other material
                             	  made available through the Platform and the Service ("Content"), 
                             	  and that by using the Platform and the Service, you may be exposed to Content
                             	   that is offensive, indecent, inaccurate, misleading, or otherwise objectionable. 
                             	   You acknowledge and agree that you are responsible for and must evaluate, 
                             	   and bear all risks associated with, the use of any Content, 
                             	   that you may not rely on said Content, and that under no circumstances will 250Trade
                             	    be liable in any way for the Content or for any loss or damage of any 
                             	    kind incurred as a result of the browsing, using or reading any Content
                             	     listed, e-mailed or otherwise made available via the Service. 
                             	     You acknowledge and agree that 250Trade cannot and does not pre-screen 
                             	     or approve any Content, but that 250Trade has the right, 
                             	     in its sole and absolute discretion, to refuse, delete or move any 
                             	     Content that is or may be available through the Service, 
                             	     for violating these Terms and such violation being brought to 250Trade’s
                             	      knowledge or for any other reason or no reason at all. 
                             	      Furthermore, the Platform and Content available through the Platform may 
                             	      contain links to other third party websites ("Third Party Websites"), 
                             	      which are completely unrelated to 250Trade.
                             	       If you link to Third Party Websites, you may be subject to those
                             	        Third Party Websites’ terms and conditions and other policies. 
                             	        250Trade makes no representation or guarantee as to the accuracy
                             	         or authenticity of the information contained in any such Third Party Website,
                             	          and your linking to any other websites is completely at your own risk and 250Trade
                             	           disclaims all liability thereto.
                             </p>
                             <p>3. You acknowledge and agree that you are solely responsible for your own 
                             	Content posted on, transmitted through, or linked from the Service and 
                             	the consequences of posting, transmitting, linking or publishing it. 
                             	More specifically, you are solely responsible for all Content that you 
                             	upload, email or otherwise make available via the Service. 
                             	In connection with such Content posted on, transmitted through, or linked 
                             	from the Service by you, you affirm, acknowledge, represent, warrant and 
                             	covenant that: (i) you own or have and shall continue to, for such time 
                             	the Content is available on the Platform, have the necessary licenses, 
                             	rights, consents, and permissions to use such Content on the Service and 
                             	Platform (including without limitation all patent, trademark, trade secret, 
                             	copyright or other proprietary rights in and to any and all such Content) 
                             	and authorize 250Trade to use such Content to enable inclusion and use of the 
                             	Content in the manner contemplated by the Service, the Platform and these 
                             	Terms; and (ii) you have the written consent, release, and/or permission of 
                             	each and every identifiable individual person or business in the Content to 
                             	use the name or likeness of each and every such identifiable individual 
                             	person or business to enable inclusion and use of the Content in the manner 
                             	contemplated by the Service, the Platform and these Terms. For clarity, you 
                             	retain all of your ownership rights in your Content; however, by submitting 
                             	any Content on the Platform, you hereby grant to 250Trade an irrevocable, 
                             	non-cancellable, perpetual, worldwide, non-exclusive, royalty-free, 
                             	sub-licensable, transferable license to use, reproduce, distribute, 
                             	prepare derivative works of, display, and perform the Content in connection 
                             	with the Platform and 250Trade's (and its successors') business, including 
                             	without limitation for the purpose of promoting and redistributing part or 
                             	all of the Platform and Content therein (and derivative works thereof) in 
                             	any media formats and through any media channels now or hereafter known. 
                             	These rights are required by 250Trade in order to host and display your 
                             	Content. Furthermore, by you posting Content to any public area of the 
                             	Service, you agree to and do hereby grant to 250Trade all rights necessary 
                             	to prohibit or allow any subsequent aggregation, display, copying, 
                             	duplication, reproduction, or exploitation of the Content on the Service 
                             	or Platform by any party for any purpose. As a part of the Service, 250Trade 
                             	may offer the facility of automatically capturing of the "Description" of 
                             	your ad based on the images uploaded by you. 250Trade makes no warranty 
                             	the veracity or the accuracy of the generated Description. 
                             	The Description may be edited by you at any time while your ad is live. 
                             	You also hereby grant each user of the Platform (a) a non-exclusive 
                             	license to access your Content through the Platform; and (b) the right 
                             	to contact you with regard to the Content posted by you through private 
                             	chat or any other means. The foregoing license to each user granted by 
                             	you terminates once you or 250Trade remove or delete such Content from 
                             	the Platform. Further, you grant 250Trade the right to make available 
                             	your Content to any third party in connection with the transaction 
                             	contemplated in your classified advertisement.
                             </p>
                             <p>4. 250Trade does not endorse any Content or any opinion, statement, 
                              recommendation, or advice expressed therein, and 250Trade expressly 
                              disclaims any and all liability in connection with user Content. 250Trade 
                              does not permit copyright infringing activities and infringement of intellectual 
                              property rights on the Platform, and 250Trade may, at its sole discretion, 
                              remove any infringing Content if properly notified in accordance with 
                              applicable law that such Content infringes on another's intellectual property rights. 
                              250Trade reserves the right to remove any Content without prior notice. 
                              250Trade may also terminate a user's access to the Platform, if they are 
                              determined to be a repeat infringer or found to be indulging in any act 
                              contrary to these Terms. A repeat infringer is a user who has been notified 
                              of infringing activity more than twice and/or has had a user submission removed 
                              from the Platform more than twice. Further, at its sole discretion, 250Trade 
                              reserves the right to decide whether any Content is appropriate and complies with 
                              these Terms.
                             </p>
                            <h3 class="title text-center">Conduct</h3>
                              You agree not to post, email, host, display, upload, modify, publish, 
                              transmit, update or share any information on the Site, or otherwise make 
                              available Content:
                            <p>
                              1. that violates any law or regulation;
                            </p>
                            <p>
                              2. that is copyrighted or patented, protected by trade secret or trademark, 
                              or otherwise subject to third party proprietary rights, including privacy 
                              and publicity rights, unless you are the owner of such rights or have permission 
                              or a license from their rightful owner to post the material and to grant 250Trade 
                              all of the license rights granted herein;
                            </p>
                            <p>
                              3. that infringes any of the foregoing intellectual property rights of any party, 
                              or is Content that you do not have a right to make available under any law, 
                              regulation, contractual or fiduciary relationship(s);
                            </p>
                            <p>
                              4. that is harmful, abusive, unlawful, threatening, harassing, blasphemous, defamatory, 
                              obscene, pornographic, paedophilic, libellous, invasive of another's privacy or other 
                              rights, hateful, or racially, ethnically objectionable, disparaging, relating or 
                              encouraging money laundering or illegal gambling or harms or could harm minors in 
                              any way or otherwise unlawful in any manner whatsoever;
                            </p><p>
                              5. that harasses, degrades, intimidates or is hateful towards any individual or group 
                              of individuals on the basis of religion, gender, sexual orientation, race, ethnicity, 
                              age, or disability;
                            </p><p>
                              6. that violates any (local) equal employment laws, including but not limited to 
                              those prohibiting the stating, in any advertisement for employment, a preference 
                              or requirement based on race, color, religion, sex, national origin, age, or 
                              disability of the applicant.
                            </p><p>
                              7. that threatens the unity, integrity, defence, security or sovereignty of Rwanda, 
                              friendly relations with foreign states, or public order or causes incitement to the 
                              commission of any cognisable offence or prevents investigation of any offence or is 
                              insulting any other nation;
                            </p><p>
                              8. that impersonates any person or entity, including, but not limited to, a 250Trade 
                              employee, or falsely states or otherwise misrepresents an affiliation with a person 
                              or entity;
                            </p><p>
                              9. deceives or misleads the addressee about the origin of such messages or communicates 
                              any information which is grossly offensive or menacing in nature;
                            </p><p>
                              10.  that includes links to commercial services or Third Party Websites, except as specifically allowed by 250Trade;
                            </p><p>
                              11. that advertises any illegal services or the sale of any items the sale of which is prohibited or restricted by 
                              applicable law, including without limitation items the sale of which is prohibited or 
                              regulated by applicable law;
                            </p><p>
                              12. that contains software viruses or any other computer code, files or programs 
                              designed to interrupt, destroy or limit the functionality of any computer software 
                              or hardware or telecommunications equipment or any other computer resource;
                            </p>
                            Additionally, you agree not to:
                            <p>
                              13. make any libellous or defamatory comments or postings to or against anyone;
                            </p><p>
                              14. collect personal data about other users or entities for commercial or unlawful purposes;
                            </p><p>
                              15. post the same item or service in multiple classified categories or forums, or in multiple metropolitan areas;
                            </p><p>
                              16. attempt to gain unauthorized access to computer systems owned or controlled by 250Trade or engage in any activity that disrupts, diminishes the quality of, interferes with the performance of, 
                              or impairs the functionality of, the Service or the Platform.
                            </p><p>
                              17. Any Content uploaded by you shall be subject to relevant laws and may disabled, 
                              or and may be subject to investigation under appropriate laws. Furthermore, if you a
                              re found to be in non-compliance with the laws and regulations, these terms, or the 
                              privacy policy of the Site, we may terminate your account/block your access to the 
                              Site and we reserve the right to remove any non-compliant Content uploaded by you.
                            </p>
                            <h3 class="title text-center">Paid serivces</h3>
                            <p>
                              250Trade may charge a fee to post Content in some areas of the Service 
                              ("Paid Services") . The fee permits certain Content to be posted in a 
                              designated area of the Platform or in excess of limits set by 250Trade. 
                              Each party posting Content to the Service is responsible for said Content 
                              and compliance with the Terms. Any such fees paid hereunder are non-refundable in 
                              the event any Content is removed from the Service for violating these Terms. Paid 
                              Services are subject to the Terms listed herein, as well as the additional terms 
                              of service, which can be viewed here.
                            </p>
                            <h3 class="title text-center">Posting agents</h3>
                            <p>
                              As used herein, the term "Posting Agent" refers to a third-party agent, service 
                              or intermediary that offers to post Content to the Service on behalf of others. 
                              250Trade prohibits the use of Posting Agents, directly or indirectly, without 
                              the express written permission of 250Trade. In addition, Posting Agents are not 
                              permitted to post Content on behalf of others, directly or indirectly, or 
                              otherwise access the Service in order to post Content on behalf of others, 
                              except with express written permission or license from 250Trade.
                            </p>
                            <h3 class="title text-center">Posting agents</h3>
                            <p>
                              As used herein, the term "Posting Agent" refers to a third-party agent, service 
                              or intermediary that offers to post Content to the Service on behalf of others. 
                              250Trade prohibits the use of Posting Agents, directly or indirectly, without 
                              the express written permission of 250Trade. In addition, Posting Agents are not 
                              permitted to post Content on behalf of others, directly or indirectly, or 
                              otherwise access the Service in order to post Content on behalf of others, 
                              except with express written permission or license from 250Trade.
                            </p>
                              <h3 class="title text-center">Intellectual property rights</h3>
                            <p>
                              19. You acknowledge and agree that the materials on the Platform, other than the user 
                              Content that you licensed under Section ii(C) of the Terms, including without limitation, 
                              the text, software, scripts, graphics, photos, sounds, music, videos, interactive features 
                              and the like ("Materials") and the trademarks, service marks and logos contained therein 
                              ("Marks"), are owned by or licensed to 250Trade, and are subject to copyright and other 
                              intellectual property rights under Dutch laws, foreign laws and international treaties and/or 
                              conventions. In connection with the Services, the Platform may display certain trademarks belonging 
                              to third parties. Use of these trademarks may be subject to license granted by third parties to 250Trade. 
                              You shall, in no event, reverse engineer, decompile, or disassemble such trademarks and 
                              nothing herein shall be construed to grant you any right in relation to such trademarks. 
                              Materials on the Platform are provided to you AS IS for your information and personal use 
                              only and may not be used, copied, reproduced, distributed, transmitted, broadcast, 
                              displayed, sold, licensed, or otherwise exploited for any other purposes whatsoever 
                              without the prior written consent of the respective owners. 250Trade reserves all rights not 
                              expressly granted herein to the Platform and the Materials. You agree to not engage 
                              in the use, copying, or distribution of any of the Materials other than as expressly 
                              permitted herein, including any use, copying, or distribution of Materials of third 
                              parties obtained through the Platform for any commercial purposes. If you download or 
                              print a copy of the Materials for personal use, you must retain all copyright and other 
                              proprietary notices contained therein. You agree not to circumvent, disable or otherwise 
                              interfere with security related features of the Platform or features that prevent or 
                              restrict use or copying of any Materials or enforce limitations on use of the Platform 
                              or the Materials therein. The Service is protected to the maximum extent permitted by 
                              copyright laws, other laws, and international treaties and/or conventions. Content 
                              displayed on or through the Service is protected by copyright as a collective work 
                              and/or compilation, pursuant to copyrights laws, other laws, and international 
                              conventions. Any reproduction, modification, creation of derivative works from or 
                              redistribution of the Platform, the Materials, or the collective work or 
                              compilation is expressly prohibited. Copying or reproducing the Platform, 
                              the Materials, or any portion thereof to any other server or location for 
                              further reproduction or redistribution is expressly prohibited. You further 
                              agree not to reproduce, duplicate or copy Content or Materials from the Service, 
                              and agree to abide by any and all copyright notices and other notices displayed 
                              on the Service. You may not decompile or disassemble, reverse engineer or otherwise 
                              attempt to discover any source code contained in the Service. Without limiting the 
                              foregoing, you agree not to reproduce, duplicate, copy, sell, resell or exploit for 
                              any commercial purposes, any aspect of the Service. 250Trade is a service mark registered 
                              with the U.S. Patent and Trademark Office, the EU-wide patent and trademark authorities 
                              and in various other jurisdictions.
                            </p>
                               <h3 class="title text-center">User submisssion</h3>
                            <p>
                              You understand that when using the Platform, you will be exposed to Content from 
                              a variety of sources, and that 250Trade is not responsible for the accuracy, usefulness, 
                              safety, or intellectual property rights of or relating to such Content, and you agree 
                              and assume all liability for your use. You further understand and acknowledge that you 
                              may be exposed to Content that is inaccurate, offensive, indecent, or objectionable, 
                              defamatory or libellous and you agree to waive, and hereby do waive, any legal or 
                              equitable rights or remedies you have or may have against 250Trade with respect thereto.
                            </p>
                               <h3 class="title text-center">Limitation and termination of service</h3>
                            <p>
                              You acknowledge and agree that 250Trade may establish limits from time to time 
                              concerning use of the Service, including among others, the maximum number of days 
                              that Content will be maintained or retained by the Service, the maximum number and 
                              size of postings, e-mail messages, or other Content that may be transmitted or 
                              stored by the Service, and the frequency and the manner in which you may access the 
                              Service or the Platform. You acknowledge that your account is identified and linked 
                              through your mobile number, Facebook account or email address through which you have 
                              registered. In the event you have more than one account linked through your mobile 
                              number, Facebook account or email address, 250Trade reserves the right to remove or 
                              restrict the usage of such duplicate accounts. You acknowledge and agree that 250Trade 
                              has no responsibility or liability for the deletion or failure to store any Content 
                              maintained or transmitted by the Platform or the Service. You acknowledge and agree 
                              that 250Trade reserves the right at any time to modify, limit or discontinue the 
                              Service (or any part thereof) with or without notice, and that 250Trade shall not be 
                              liable to you or to any third party for any such modification, suspension or 
                              discontinuance of the Service. You acknowledge and agree that 250Trade, in its sole and 
                              absolute discretion, has the right (but not the obligation) to delete or deactivate your 
                              account, block your e-mail or IP address, or otherwise terminate your access to or use of 
                              the Service (or any part thereof), immediately and without notice, and remove and discard 
                              any Content within the Service, for any reason or no reason at all, including, without 
                              limitation, if 250Trade believes that you have violated these Terms. Further, you agree 
                              that 250Trade shall not be liable to you or any third-party for any termination of your 
                              access to the Platform or the Service. Further, you agree not to attempt to use the 
                              Service after any such termination.
                            </p>
                            <h3 class="title text-center">DISCLAIMER OF WARRANTIES</h3>
                            <p>
                              YOU EXPRESSLY ACKNOWLEDGE AND AGREE THAT USE OF THE PLATFORM AND THE SERVICE IS ENTIRELY AT YOUR OWN RISK AND THAT THE PLATFORM AND THE SERVICE ARE PROVIDED ON AN "AS IS" OR "AS AVAILABLE" BASIS, WITHOUT ANY WARRANTIES OF ANY KIND. ALL EXPRESS AND IMPLIED WARRANTIES, INCLUDING, WITHOUT LIMITATION, THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT OF PROPRIETARY RIGHTS ARE EXPRESSLY DISCLAIMED TO THE FULLEST EXTENT PERMITTED BY LAW. TO THE FULLEST EXTENT PERMITTED BY LAW 250Trade, ITS OFFICERS, DIRECTORS, EMPLOYEES, AND AGENTS DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, IN CONNECTION WITH THE PLATFORM AND YOUR USE THEREOF. 250Trade MAKES NO WARRANTIES OR REPRESENTATIONS ABOUT THE ACCURACY OR COMPLETENESS OF THE PLATFORM'S CONTENT OR THE CONTENT OF ANY THIRD PARTY WEBSITES LINKED TO THE PLATFORM AND ASSUMES NO LIABILITY OR RESPONSIBILITY FOR ANY (I) ERRORS, MISTAKES, OR INACCURACIES OF CONTENT, (II) PERSONAL INJURY OR PROPERTY DAMAGE, OF ANY NATURE WHATSOEVER, RESULTING FROM YOUR ACCESS TO AND USE OF THE PLATFORM AND SERVICE, (III) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION AND/OR FINANCIAL INFORMATION STORED THEREIN, (IV) ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM THE PLATFORM, (IV) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH MAY BE TRANSMITTED TO OR THROUGH THE PLATFORM BY ANY THIRD PARTY, AND/OR (V) ANY ERRORS OR OMISSIONS IN ANY CONTENT OR FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF ANY CONTENT POSTED, EMAILED, COMMUNICATED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE PLATFORM OR THE SERVICE. 250Trade DOES NOT WARRANT, ENDORSE, GUARANTEE, OR ASSUME RESPONSIBILITY FOR ANY PRODUCT OR SERVICE ADVERTISED OR OFFERED BY A THIRD PARTY THROUGH THE PLATFORM OR ANY HYPERLINKED WEBSITE OR FEATURED IN ANY BANNER OR OTHER ADVERTISING, AND 250Trade WILL NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU AND/OR OTHER USERS AND/OR THIRD-PARTY PROVIDERS OF PRODUCTS OR SERVICES. AS WITH THE PURCHASE OF A PRODUCT OR SERVICE THROUGH ANY MEDIUM OR IN ANY ENVIRONMENT, YOU SHOULD USE YOUR BEST JUDGMENT AND EXERCISE CAUTION WHERE APPROPRIATE.
                            </p>
                            <h3 class="title text-center">ABILITY TO ACCEPT TERMS OF SERVICE
</h3>
                            <p>
                              This Platform is intended only for adults and that you are eligible to contract as per applicable laws. If you are using/accessing this Platform as a representative of any person/entity, you acknowledge that you are legally authorised to represent that person/entity. Minors, i.e. users of under 18 years of age, are only allowed to access the Platform and use the Service, in the event of approval of their legal representatives or in the event that it concerns an act or a transaction that is usual and acceptable standard in civil life and practice. You affirm that you are either at least 18 years of age, or an emancipated minor, or possess legal parental or guardian consent, and are fully able and competent to enter into the terms, conditions, obligations, affirmations, representations, and warranties set forth in these Terms, and to abide by and comply with these Terms. In any case, you affirm that you are over the age of 13, as the Platform is not intended for children under 13.</p>
                  		
                             <p>NOTICE TO CHILDREN UNDER THE AGE OF 13 AND THEIR PARENTS OR GUARDIANS If you are under the age of 13, YOU MUST NOT USE THIS PLATFORM. Please do not send us your personal information, including your email addresses, name, and/or contact information. If you want to contact us, you may only do so through your parent or legal guardian.</p>

                              <h3 class="title text-center">GENERAL INFORMATION</h3>
                            <p>
                              These Terms and the other policies posted on the Platform constitute the complete and exclusive understanding and agreement between you and 250Trade and govern your use of the Service and the Platform superseding all prior understandings, proposals, agreements, negotiations, and discussions between the parties, whether written or oral. The Terms and the relationship between you and 250Trade shall be governed by the laws of the Netherlands. Any claim you may have against 250Trade must be submitted to the exclusive jurisdiction the courts of Amsterdam, The Netherlands. However, in the event that you are a consumer it may be that consumer law requires that another law is applicable and that a claim may be submitted to another jurisdiction. The failure of 250Trade to exercise or enforce any right or provision of the Terms shall not constitute a waiver of such right or provision. If any provision of the Terms is found by a court of competent jurisdiction to be invalid (including, without limitation, because such provision is inconsistent with the laws of another jurisdiction) or inapplicable, the parties nevertheless agree that the court should endeavour to give effect to the parties' intentions as reflected in the provision. If any provision or provisions of these Terms is held to be invalid, illegal or unenforceable, the validity, legality and enforceability of the remaining provisions of the Terms shall not in any way be affected or be impaired. YOU AGREE THAT ANY CAUSE OF ACTION BROUGHT BY YOU AND ARISING OUT OF OR RELATED TO YOUR USE OF THE SERVICE AND/OR THE PLATFORM MUST COMMENCE WITHIN A REASONABLE TIME AND IN ANY EVENT WITHIN ONE (1) YEAR AFTER THE CAUSE OF ACTION ACCRUES, EXCEPT THAT 250Trade MAY COMMENCE ANY SUCH CAUSE OF ACTION IN ACCORDANCE WITH THE APPLICABLE STATUTE OF LIMITATIONS UNDER DUTCH LAW. OTHERWISE, SUCH CAUSE OF ACTION IS PERMANENTLY BARRED. These Terms shall inure to the benefit of and be binding upon each party's successors and assigns.</p>

                              YOU EXPRESSLY ACKNOWLEDGE AND AGREE THAT USE OF THE PLATFORM AND THE SERVICE IS ENTIRELY AT YOUR OWN RISK AND THAT THE PLATFORM AND THE SERVICE ARE PROVIDED ON AN "AS IS" OR "AS AVAILABLE" BASIS, WITHOUT ANY WARRANTIES OF ANY KIND. ALL EXPRESS AND IMPLIED WARRANTIES, INCLUDING, WITHOUT LIMITATION, THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT OF PROPRIETARY RIGHTS ARE EXPRESSLY DISCLAIMED TO THE FULLEST EXTENT PERMITTED BY LAW. TO THE FULLEST EXTENT PERMITTED BY LAW 250Trade, ITS OFFICERS, DIRECTORS, EMPLOYEES, AND AGENTS DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, IN CONNECTION WITH THE PLATFORM AND YOUR USE THEREOF. 250Trade MAKES NO WARRANTIES OR REPRESENTATIONS ABOUT THE ACCURACY OR COMPLETENESS OF THE PLATFORM'S CONTENT OR THE CONTENT OF ANY THIRD PARTY WEBSITES LINKED TO THE PLATFORM AND ASSUMES NO LIABILITY OR RESPONSIBILITY FOR ANY (I) ERRORS, MISTAKES, OR INACCURACIES OF CONTENT, (II) PERSONAL INJURY OR PROPERTY DAMAGE, OF ANY NATURE WHATSOEVER, RESULTING FROM YOUR ACCESS TO AND USE OF THE PLATFORM AND SERVICE, (III) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION AND/OR FINANCIAL INFORMATION STORED THEREIN, (IV) ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM THE PLATFORM, (IV) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH MAY BE TRANSMITTED TO OR THROUGH THE PLATFORM BY ANY THIRD PARTY, AND/OR (V) ANY ERRORS OR OMISSIONS IN ANY CONTENT OR FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF ANY CONTENT POSTED, EMAILED, COMMUNICATED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE PLATFORM OR THE SERVICE. 250Trade DOES NOT WARRANT, ENDORSE, GUARANTEE, OR ASSUME RESPONSIBILITY FOR ANY PRODUCT OR SERVICE ADVERTISED OR OFFERED BY A THIRD PARTY THROUGH THE PLATFORM OR ANY HYPERLINKED WEBSITE OR FEATURED IN ANY BANNER OR OTHER ADVERTISING, AND 250Trade WILL NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU AND/OR OTHER USERS AND/OR THIRD-PARTY PROVIDERS OF PRODUCTS OR SERVICES. AS WITH THE PURCHASE OF A PRODUCT OR SERVICE THROUGH ANY MEDIUM OR IN ANY ENVIRONMENT, YOU SHOULD USE YOUR BEST JUDGMENT AND EXERCISE CAUTION WHERE APPROPRIATE.
                            </p>
            </div>
          </div>
                <div class="col-sm-3 padding-right"><!--for advertisement--></div> 
    </div>
  </section> <!--/#cart_items-->

  

  <br><br><br>
   <?php  
      require('footer.php');    
  ?>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/yann.min.js"></script>
  <script src="assets/js/jquery.scrollUp.min.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery.validate.js"></script>
  <script src="assets/js/uploading.js"></script>
  <script src="assets/js/image.upload.js"></script>
</body>
</html>
