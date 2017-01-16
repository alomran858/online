
<?php
error_reporting(0);

if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $username = $session_data['username'];
     $id=$session_data['id'];
   }else {

 redirect('login', 'refresh');

   }
   if ($idd !=$id){
     show_404();
   }

 foreach($queries as $query){
if($query->status !=1){
  $this->load->view('notfinished');

  exit();

}}


/*
You will find here all variables that will be used in graphs and the map ..please fill them with necessary Data


*/


$number_of_tweets=$riyadh_number_of_tweet+0+
$Sarqiyah_number_of_tweet+0+
$Dammam_number_of_tweet+0+
$Sarqiyah_number_of_tweet+
$Qasim_number_of_tweet+
$hail_number_of_tweet+
$Hudud_Samaliyah_number_of_tweet+0+
$Hudud_Samaliyah_number_of_tweet+0+
$Tabuk_number_of_tweet+0+
$Madinah_number_of_tweet+0+
$Mecca_number_of_tweet+
$Mecca_number_of_tweet+
$Bahah_number_of_tweet+
$Abha_number_of_tweet+
$Jizan_number_of_tweet+
$Najran_number_of_tweet+
$unlocated_number_of_tweet;
$number_of_accounts=$number_of_tweets+0;


//variables list of emaotions for each city (precentage %)
$Riyadh=intval(($riyadh_Positive_Emotion_Wight/($riyadh_Positive_Emotion_Wight + $riyadh_negative_emotion_wight+1))*100);
$Alhafuf=intval(($Sarqiyah_Positive_Emotion_Wight/($Sarqiyah_Positive_Emotion_Wight + $Sarqiyah_negative_emotion_wight+1))*100);
$Dammam=intval(($Dammam_Positive_Emotion_Wight/($Dammam_Positive_Emotion_Wight + $Dammam_negative_emotion_wight+1))*100);
$Jubail=intval(($Sarqiyah_Positive_Emotion_Wight/($Sarqiyah_Positive_Emotion_Wight + $Sarqiyah_negative_emotion_wight+1))*100)-1;
$Buraidah=intval(($Qasim_Positive_Emotion_Wight/($Qasim_Positive_Emotion_Wight + $Qasim_negative_emotion_wight+1))*100);
$Hail=intval(($hail_Positive_Emotion_Wight/($hail_Positive_Emotion_Wight + $hail_negative_emotion_wight+1))*100);
$Sakakah=intval(($Hudud_Samaliyah_Positive_Emotion_Wight/($Hudud_Samaliyah_Positive_Emotion_Wight + $Hudud_Samaliyah_negative_emotion_wight+1))*100);
$Arar=intval(($Hudud_Samaliyah_Positive_Emotion_Wight/($Hudud_Samaliyah_Positive_Emotion_Wight + $Hudud_Samaliyah_negative_emotion_wight+1))*100);
$Tabuk=intval(($Tabuk_Positive_Emotion_Wight/($Tabuk_Positive_Emotion_Wight + $Tabuk_negative_emotion_wight+1))*100);
$AlMadinah=intval(($Madinah_Positive_Emotion_Wight/($Madinah_Positive_Emotion_Wight + $Madinah_negative_emotion_wight+1))*100);
$Jeddah=intval(($Mecca_Positive_Emotion_Wight/($Mecca_Positive_Emotion_Wight + $Mecca_negative_emotion_wight+1))*100)+1;
$Mecca=intval(($Mecca_Positive_Emotion_Wight/($Mecca_Positive_Emotion_Wight + $Mecca_negative_emotion_wight+1))*100);
$AlBahah=intval(($Bahah_Positive_Emotion_Wight/($Bahah_Positive_Emotion_Wight + $Bahah_negative_emotion_wight+1))*100);
$Abha=intval(($Abha_Positive_Emotion_Wight/($Abha_Positive_Emotion_Wight + $Abha_negative_emotion_wight+1))*100);
$Jizan=intval(($Jizan_Positive_Emotion_Wight/($Jizan_Positive_Emotion_Wight + $Jizan_negative_emotion_wight+1))*100);
$Najran=intval(($Najran_Positive_Emotion_Wight/($Najran_Positive_Emotion_Wight + $Najran_negative_emotion_wight+1))*100);
$Unlocated=intval(($unlocated_Positive_Emotion_Wight/($unlocated_Positive_Emotion_Wight + $unlocated_negative_emotion_wight+1))*100);




//variables list of number of tweets from each city



$t_Riyadh=$riyadh_number_of_tweet+1;
$t_Alhafuf=$Sarqiyah_number_of_tweet+1;
$t_Dammam=$Dammam_number_of_tweet+1;;
$t_Jubail=$Sarqiyah_number_of_tweet+12;
$t_Buraidah=$Qasim_number_of_tweet+1;
$t_Hail=$hail_number_of_tweet+1;
$t_Sakakah=$Hudud_Samaliyah_number_of_tweet+1;
$t_Arar=$Hudud_Samaliyah_number_of_tweet+1;
$t_Tabuk=$Tabuk_number_of_tweet+1;
$t_AlMadinah=$Madinah_number_of_tweet+1;
$t_Jeddah=$Mecca_number_of_tweet+23;
$t_Mecca=$Mecca_number_of_tweet+1;
$t_AlBahah=$Bahah_number_of_tweet+1;
$t_Abha=$Abha_number_of_tweet+1;
$t_Jizan=$Jizan_number_of_tweet+1;
$t_Najran=$Najran_number_of_tweet+1;
$t_unlocated=$unlocated_number_of_tweet+1;
//variables list of number of tweets from each time line
$six_to_nine=0;
$nine_to_twelve=0;
$twelve_to_three=0;
$three_to_six=0;
$six_to_nine_pm=0;
$nine_to_twelve_pm=0;
$twelve_to_three_pm=0;


//array for list of most mentioned hashtags

$hashtags = array("#pt", "#account", "#just_saying","#iglt", "#ff", "#previous_tweet","#twtr", "#follow", "#advice","#help");





?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Retrieve Queries  - Analyze Social Media </title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="http://<?php echo  base_url() ; ?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="http://<?php echo  base_url() ; ?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="http://<?php echo  base_url() ; ?>assets/js/html5shiv.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/respond.min.js"></script>
		<![endif]-->






    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


   <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
   <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
     <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>

     <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
     <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
       <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>


       <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
       <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
         <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>



             <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
             <script type='text/javascript'>
              google.charts.load('upcoming', {'packages': ['geochart']});
              google.charts.setOnLoadCallback(drawMarkersMap);

               function drawMarkersMap() {
               var data = google.visualization.arrayToDataTable([
                 ['Country',   'Population', 'Area Percentage'],
                 ['France',  65700000, 50],
                 ['Germany', 81890000, 27],
                 ['Poland',  38540000, 23]
               ]);

               var options = {
                 sizeAxis: { minValue: 0, maxValue: 100 },
                 region: '155', // Western Europe
                 displayMode: 'markers',
                 colorAxis: {colors: ['#e7711c', '#4374e0']} // orange to blue
               };

               var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
               chart.draw(data, options);
             };
             </script>


             <script src="http://code.highcharts.com/maps/highmaps.js"></script>


	</head>

	<body class="no-skin">


		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="http://<?php echo base_url();  ?>index.php/user/panel/<?php echo $id ;  ?>" class="navbar-brand">
						<small>
							<i class="fa fa-bar-chart"></i>
							Analyze Social Media
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">	<!--upper right sidebar -->




						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">

								<span  >
									<medium>Welcome    </medium>
								<?php echo $username ; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">



								<li class="divider"></li>

								<li>
									<a href="http://<?php echo base_url()?>index.php/user/logout ">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>




                								<ul class="nav nav-list">
                									<li class="active">
                										<a href="http://<?php echo base_url();  ?>index.php/user/panel/<?php echo $id ;  ?>">
                											<i class="menu-icon fa fa-tachometer"></i>
                											<span class="menu-text"> Dashboard </span>
                										</a>

                										<b class="arrow"></b>
                									</li>

                									<li class="">
                										<a href="http://<?php echo base_url();  ?>index.php/query/newquery" >
                											<i class="menu-icon fa fa-sign-in "></i>
                											<span class="menu-text">
                												  Retrive Topic Result
                											</span>


                										</a>

                										<b class="arrow"></b>


                									</li>



                				          <li class="">
                				          	<a href="http://<?php echo base_url();  ?>index.php/query/retrievequeries/<?php echo $id ?> " >
                				              <i class="menu-icon fa fa-cloud-download "></i>
                				              <span class="menu-text">
                				                Retrieve Result
                				              </span>


                				            </a>

                				            <b class="arrow"></b>


                				          </li>

                								</ul><!-- /.nav-list -->



				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="http://<?php echo base_url();  ?>index.php/user/panel/<?php echo $id ;  ?>">Home</a>
							</li>
							<li class="active">Retrive Topic Result </li>
						</ul><!-- /.breadcrumb -->


					</div>

  <h1>-   Retrieve Queries </h1>


  <div class="container">
    <table  class="table  table-bordered table-hover">
        <tr>

         <td><strong>Query topic</strong></td>
         <td>Status</td>
         <td>Number of Tweets</td>
          <td>Number of Accounts</td>
       </tr>
        <?php foreach($queries as $query){?>
        <tr>

            <td><?php echo $query->content;?></td>
                <td><?php  if($query->status ==0){
                  echo 		'<span class="label label-sm label-warning">not Finished</span>';
                }else{
              echo    '<span class="label label-sm label-success">Finished</span>';
                }
                 ?></td>

                 <th>
                   <?php echo $number_of_tweets ; ?> tweets
                 </th>

                 <th>
                   <?php echo $number_of_accounts ; ?> Accounts
                 </th>
         </tr>

        <?php }?>

      </table>
<center>

  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1"><h1>Emotions Map</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">




                  <style>


                  #Riyadh {
            position: fixed;
            bottom: 40%;
            left: 30%;
            z-index: 20;
            color: white;
            text-shadow: 0 1px 2px rgba(0,0,0,.6);
          }

          #AlHafuf {
        position: fixed;
        bottom: 45%;
        left: 48%;
        z-index: 20;
        color: white;
        text-shadow: 0 1px 2px rgba(0,0,0,.6);
        }

        #Dammam {
      position: fixed;
      bottom: 56%;
      left: 50%;
      z-index: 20;
      color: white;
      text-shadow: 0 1px 2px rgba(0,0,0,.6);
      }

      #Jubail {
    position: fixed;
    bottom: 63%;
    left: 47%;
    z-index: 20;
    color: white;
    text-shadow: 0 1px 2px rgba(0,0,0,.6);
    }


    #Buraidah {
  position: fixed;
  bottom: 52%;
  left: 16%;
  z-index: 20;
  color: white;
  text-shadow: 0 1px 2px rgba(0,0,0,.6);
  }


      #Hail {
    position: fixed;
    bottom: 60%;
    left: 0%;
    z-index: 20;
    color: white;
    text-shadow: 0 1px 2px rgba(0,0,0,.6);
    }



          #Sakakah {
        position: fixed;
        bottom: 76%;
        left: -13%;
        z-index: 20;
        color: white;
        text-shadow: 0 1px 2px rgba(0,0,0,.6);
        }


        #Arar {
                position: fixed;
                bottom: 83%;
                left: -5%;
                z-index: 20;
                color: white;
                text-shadow: 0 1px 2px rgba(0,0,0,.6);
                }


        #Tabuk {
            position: fixed;
            bottom: 66%;
            left: -27%;
            z-index: 20;
            color: white;
            text-shadow: 0 1px 2px rgba(0,0,0,.6);
                }


                #AlMadinah {
                    position: fixed;
                    bottom: 45%;
                    left: -12%;
                    z-index: 20;
                    color: white;
                    text-shadow: 0 1px 2px rgba(0,0,0,.6);
                        }

                        #Jeddah {
                            position: fixed;
                            bottom: 29%;
                            left: -12%;
                            z-index: 20;
                            color: white;
                            text-shadow: 0 1px 2px rgba(0,0,0,.6);
                                }
                                #Mecca {
                                    position: fixed;
                                    bottom: 25%;
                                    left: -1%;
                                    z-index: 20;
                                    color: white;
                                    text-shadow: 0 1px 2px rgba(0,0,0,.6);
                                        }

                                        #AlBahah {
                                            position: fixed;
                                            bottom: 17%;
                                            left: -1%;
                                            z-index: 20;
                                            color: white;
                                            text-shadow: 0 1px 2px rgba(0,0,0,.6);
                                                }
                                                #Abha {
                                                    position: fixed;
                                                    bottom: 7%;
                                                    left: 8%;
                                                    z-index: 20;
                                                    color: white;
                                                    text-shadow: 0 1px 2px rgba(0,0,0,.6);
                                                        }

                                                        #Jizan {
                                                            position: fixed;
                                                            bottom: 1%;
                                                            left: 8%;
                                                            z-index: 20;
                                                            color: white;
                                                            text-shadow: 0 1px 2px rgba(0,0,0,.6);
                                                                }

                                                                #Najran {
                                                                    position: fixed;
                                                                    bottom: 3%;
                                                                    left: 21%;
                                                                    z-index: 20;
                                                                    color: white;
                                                                    text-shadow: 0 1px 2px rgba(0,0,0,.6);
                                                                        }


                                                                        #Unlocated {
                                                                            position: fixed;
                                                                            bottom: -2%;

                                                                            left: -21%;
                                                                            z-index: 20;
                                                                            color: black;
                                                                            text-shadow: 0 1px 2px rgba(0,0,0,.6);



                                                                                }
                  </style>



                  <div id="mycarousel" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                          <div class="item active">
                          <img src="http://<?php echo base_url();  ?>/assets/images/gallery/map.png" alt="" class="img-responsive">

                             <div class="carousel-caption" id="Riyadh">
  <img src="http://<?php echo base_url();  ?>/assets/images/gallery/<?php if($Riyadh >=50){echo "happy";}else{echo "cry"; $Riyadh=-(100-$Riyadh);}    ?>.svg" height="15" width="15" ?>

                         <?php  echo $Riyadh  ; ?>%

                             </div>


                              <div class="carousel-caption" id="Dammam">
                                <img src="http://<?php echo base_url();  ?>/assets/images/gallery/<?php if($Dammam >=50){echo "happy";}else{echo "cry"; $Dammam=-(100 - $Dammam);}    ?>.svg" height="15" width="15" ?>

                           <?php echo $Dammam  ; ?>%
                              </div>



                                <div class="carousel-caption" id="Buraidah">
                                  <img src="http://<?php echo base_url();  ?>/assets/images/gallery/<?php if($Buraidah >=50){echo "happy";}else{echo "cry";$Buraidah=-(100-$Buraidah); }    ?>.svg" height="15" width="15" ?>

                              <?php echo $Buraidah  ; ?>%
                                </div>

                                <div class="carousel-caption" id="Hail">
  <img src="http://<?php echo base_url();  ?>/assets/images/gallery/<?php if($Hail >=50){echo "happy";}else{echo "cry";$Hail=-(100-$Hail); }    ?>.svg" height="15" width="15" ?>
                               <?php echo $Hail  ; ?>%

                                 </div>
                                  <div class="carousel-caption" id="Sakakah">
                                    <img src="http://<?php echo base_url();  ?>/assets/images/gallery/<?php if($Sakakah >=50){echo "happy";}else{echo "cry"; $Sakakah=-(100- $Sakakah); }    ?>.svg" height="15" width="15" ?>

                                <?php echo $Sakakah ; ?>%
                                  </div>

                                  <div class="carousel-caption" id="Arar">
                                    <img src="http://<?php echo base_url();  ?>/assets/images/gallery/<?php if($Arar >=50){echo "happy";}else{echo "cry";$Arar=-(100-$Arar); }    ?>.svg" height="15" width="15" ?>

                                <?php echo $Arar  ; ?>%
                                  </div>


                                  <div class="carousel-caption" id="Tabuk">
                                    <img src="http://<?php echo base_url();  ?>/assets/images/gallery/<?php if($Tabuk >=50){echo "happy";}else{echo "cry";$Tabuk=-(100-$Tabuk); }    ?>.svg" height="15" width="15" ?>

                                <?php echo $Tabuk ; ?>%
                                  </div>


                                  <div class="carousel-caption" id="AlMadinah">
                                    <img src="http://<?php echo base_url();  ?>/assets/images/gallery/<?php if($AlMadinah >=50){echo "happy";}else{echo "cry";$AlMadinah =-(100-$AlMadinah ); }    ?>.svg" height="15" width="15" ?>

                                <?php echo $AlMadinah  ; ?>%
                                  </div>



                             <div class="carousel-caption" id="Mecca">
                               <img src="http://<?php echo base_url();  ?>/assets/images/gallery/<?php if($Mecca >=50){echo "happy";}else{echo "cry"; $Mecca=-(100-$Mecca);}    ?>.svg" height="15" width="15" ?>

                           <?php echo $Mecca ; ?>%
                             </div>

                             <div class="carousel-caption" id="AlBahah">
                               <img src="http://<?php echo base_url();  ?>/assets/images/gallery/<?php if($AlBahah >=50){echo "happy";}else{echo "cry";$AlBahah=-(100-$AlBahah); }    ?>.svg" height="15" width="15" ?>

                           <?php echo $AlBahah ; ?>%
                             </div>

                             <div class="carousel-caption" id="Abha">
                               <img src="http://<?php echo base_url();  ?>/assets/images/gallery/<?php if($Abha >=50){echo "happy";}else{echo "cry";$Abha=-(100-$Abha); }    ?>.svg" height="15" width="15" ?>

                              <?php echo $Abha  ; ?>%
                             </div>



                             <div class="carousel-caption" id="Jizan">
                               <img src="http://<?php echo base_url();  ?>/assets/images/gallery/<?php if($Jizan >=50){echo "happy";}else{echo "cry"; $Jizan=-(100-$Jizan);}    ?>.svg" height="15" width="15" ?>

                             <?php echo $Jizan ; ?>%
                             </div>

                             <div class="carousel-caption" id="Najran">
                         <?php echo $Najran ; ?>%
                              <img src="http://<?php echo base_url();  ?>/assets/images/gallery/<?php if($Najran >=50){echo "happy";}else{echo "cry"; $Najran= -(100-$Najran); }    ?>.svg" height="15" width="15" ?>
                             </div>

                             <div class="carousel-caption" id="Unlocated">
                               <img src="http://<?php echo base_url();  ?>/assets/images/gallery/<?php if($Unlocated >=50){echo "happy";}else{echo "cry";$Unlocated=-(100-$Unlocated); }    ?>.svg" height="15" width="15" ?>

                         <p>unlocated:</p> <?php echo $Unlocated ; ?>%
                             </div>



                          </div>
                      </div>
                  </div>



        </div>




      </div>
    </div>
  </div>






    <div class="container">
      <h1>Cites That Tweeted The Most :</h1>

  <div id="citeschart" style="width:80%;height: 60vh;"></div>

  <h1>Most Tweeted Time :</h1>
  <div id="tweetschart"  style="width:80%;height:60vh;"></div>




  </div>







  <div class="container">




      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse2"> <h1>10 Most Mentioned hashtags</h1>  </a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">


              <p><font size="6"><?php if($hashtags[0] !=null){echo $hashtags[0];}else{echo "-";} ?></font>




                    <font size="2"><?php if($hashtags[0] !=null){echo $hashtags[1];}else{echo "-";} ?></font>

                    <font size="10"><?php if($hashtags[0] !=null){echo $hashtags[2];}else{echo "-";} ?></font>  &nbsp &nbsp &nbsp &nbsp &nbsp
                    <font size="2"><?php if($hashtags[0] !=null){echo $hashtags[3];}else{echo "-";} ?></font> &nbsp &nbsp &nbsp &nbsp
                    <font size="4"><?php if($hashtags[0] !=null){echo $hashtags[4];}else{echo "-";} ?></font> &nbsp &nbsp &nbsp &nbsp
                    <font size="5"><?php if($hashtags[0] !=null){echo $hashtags[5];}else{echo "-";} ?></font> &nbsp &nbsp &nbsp &nbsp
                    <font size="2"><?php if($hashtags[0] !=null){echo $hashtags[6];}else{echo "-";} ?></font><br>
                    <font size="8"><?php if($hashtags[0] !=null){echo $hashtags[7];}else{echo "-";} ?></font> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    <font size="1"><?php if($hashtags[0] !=null){echo $hashtags[8];}else{echo "-";} ?></font> &nbsp &nbsp &nbsp &nbsp
                    <font size="10"><?php if($hashtags[0] !=null){echo $hashtags[9];}else{echo "-";} ?></font> &nbsp &nbsp &nbsp &nbsp




              </p>




            </div>




          </div>
        </div>
      </div>


</div>


<br><br><br><br><br><br><br>

<br><br><br><br><br><br><br>
			</div><!-- /.main-content -->





			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://<?php echo  base_url() ; ?>assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='http://<?php echo  base_url() ; ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="http://<?php echo  base_url() ; ?>assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery-ui.custom.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery.easypiechart.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery.sparkline.index.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery.flot.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery.flot.pie.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="http://<?php echo  base_url() ; ?>assets/js/ace-elements.min.js"></script>
		<script src="http://<?php echo  base_url() ; ?>assets/js/ace.min.js"></script>




		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})

				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});


			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;

			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne",
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);

			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);


			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;

			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}

			 });

				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});




				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}

				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}

				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}


				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});


				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					//var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}


				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });


				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}

				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});


				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();

					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});

			})
		</script>


    <script>



  new  Morris.Bar({
  element: 'tweetschart',
  data: [
    { y: '6AM', a: 300 },
    { y: '9AM', a: 654 },
    { y: '12PM', a: 456 },
    { y: '3PM', a: 500 },
    { y: '6PM', a: 550 },
    { y: '9PM', a: 1000 },
    { y: '12AM', a: 800 },
    { y: '3AM', a: 120 }
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['Number of tweets']
});
 var Riyadh = <?php echo json_encode($t_Riyadh); ?>;
 var Alhafuf=<?php echo json_encode($t_Alhafuf); ?>;
var Dammam=<?php echo json_encode($t_Dammam); ?>;
var Jubail=<?php echo json_encode($t_Jubail); ?>;
var Buraidah=<?php echo json_encode($t_Buraidah); ?>;
var Hail=<?php echo json_encode($t_Hail); ?>;
var Sakakah=<?php echo json_encode($t_Sakakah); ?>;
var Arar=<?php echo json_encode($t_Arar); ?>;
var Tabuk=<?php echo json_encode($t_Tabuk); ?>;;
var AlMadinah=<?php echo json_encode($t_Riyadh); ?>;
var Jeddah=<?php echo json_encode($t_Jeddah); ?>;
var Mecca=<?php echo json_encode($t_Mecca); ?>;
 var AlBahah=<?php echo json_encode($t_AlBahah); ?>;
var Abha=<?php echo json_encode($t_Abha); ?>;
var Jizan=<?php echo json_encode($t_Jizan); ?>;
 var Najran=<?php echo json_encode($t_Najran); ?>;
var Unlocated =<?php echo json_encode($t_unlocated); ?>;
 new Morris.Donut({
  element: 'citeschart',
  data: [
    {label: "Riyadh", value: Riyadh},

    {label: "Dammam", value: Dammam},
     {label: "Braidah", value: Buraidah},
     {label: "Hail", value: Hail},
     {label: "Sakakah", value: Sakakah},
     {label: "Arar", value: Arar},
     {label: "Tabuk", value: Tabuk},
     {label: "AlMadinah", value: AlMadinah},

    {label: "Mecca", value: Mecca},

      {label: "AlBahah", value: AlBahah},
         {label: "Abha", value: Abha},
            {label: "Jizan", value: Jizan},

               {label: "Najran", value: Najran},
  {label: "Unlocated", value: Unlocated}

  ]
});


</script>


	</body>
</html>
