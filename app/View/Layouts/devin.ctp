<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
    <link href="/css/devin/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/devin/main.css" rel="stylesheet">
    
	<link rel="stylesheet" href="/css/devin/font-awesome.min.css">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="/js/devin/jquery.min.js"></script>
    <script type="text/javascript" src="/js/devin/smoothscroll.js"></script> 
    <script src="/js/devin/Chart.js"></script>
</head>
<body data-spy="scroll" data-offset="0" data-target="#nav">

	<div id="section-topbar">
		<div id="topbar-inner">
			<div class="container">
				<div class="row">
					<div class="dropdown">
						<ul id="nav" class="nav">
							<li class="menu-item"><a class="smoothScroll" href="#about" title="About"><i class="icon-user"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#resume" title="Resume"><i class="icon-file"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#work" title="Works"><i class="icon-briefcase"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#contact" title="Contact"><i class="icon-envelope"></i></a></li>
						</ul><!--/ uL#nav -->
					</div><!-- /.dropdown -->

					<div class="clear"></div>
				</div><!--/.row -->
			</div><!--/.container -->

			<div class="clear"></div>
		</div><!--/ #topbar-inner -->
	</div><!--/ #section-topbar -->
	
	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-12">
					<h1>Hoai PT</h1>
					<h3>Web Developer | hoai.phamthanh@yahoo.com.vn</h3>
				</div><!--/.col-lg-12 -->
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/.#headerwrap -->
	

	<section id="about" name="about"></section>
	<div id="intro">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-2 col-lg-offset-1">
					<h5>ABOUT</h5>
				</div>
				<div class="col-lg-6">
					<p>I am seeking a position where I can use my knowledge of software simulation work,PHP, C# and mySQL,noSQL(mongo db)  in providing customized software solutions to the clients of the organization and also work in the development of new software.<br/>
Experiencing in using Object-Oriented Programming, Object Oriented Analysis and Design methodology, design pattern, and enterprise applications. <br/>
Have intensive experience with LAMP (Linux, Apache, MySQL, PHP) technologies.<br/>
Have experience with some open source CMS such as Cake Framework , Symfony Framework, Joomla Framework, PHP-Fusion. Have 3 year dedicated experience in developing commercial Cake , Symfony Framework.<br/>
Have solid experience with Javascript and nodejs.<br/>
Solid understanding of software development process. <br/>
Have strong teamwork experience.<br/>
Spoken/Written languages: English, Vietnamese. </p>
				</div>
				<div class="col-lg-3">
					<p><a href="/cv/CV- Pham Thanh Hoai.doc"><i class="icon-file"></i></a> <sm>MY CV</sm></p>
				</div>
				
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/ #intro -->


	<section id="resume" name="resume"></section>
	<!--EDUCATION DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>EDUCATION</h5>
				</div>
				<div class="col-lg-6">
					<p><t>National Institute of Education</t><br/>
						National Institute of Education <br/>
						<i>4 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>GRADUATING IN MAY 2011</sm>
					</p>
				</div>
	
		</div><!--/.row -->
		<br>
		<hr>
	</div><!--/.container -->
	
	
	<!--WORK DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>WORK</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Back-end Developer</t><br/>
						Black Tie Corp. <br/>
					</p>
					<p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>AUGUST 2012 - CURRENT</sm></p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Web Designer - Intern</t><br/>
						Onassis Ltd. <br/>
					</p>
					<p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>JUNE 2010 - JULY 2012</sm></p>
				</div>
		</div><!--/.row -->
		<br>
		<hr>
	</div><!--/.container -->


	<!--AWARDS DESCRIPTION -->
	<div class="container desc">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5>AWARDS</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Best Web Design</t><br/>
						Black Tie Site <br/>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>NOVEMBER 2013</sm></p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Designer of the Year</t><br/>
						Awwwards Site
					</p>
					<p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>2013</sm></p>
				</div>
		
		</div><!--/.row -->
		<br>
	</div><!--/.container -->
	
	
	<!--SKILLS DESCRIPTION -->
	<div id="skillswrap">
		<div class="container">
			<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
						<h5>SKILLS</h5>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="javascript" height="130" width="130"></canvas>
						<p>Javascript</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 70,
										color:"#1abc9c"
									},
									{
										value : 30,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("javascript").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="bootstrap" height="130" width="130"></canvas>
						<p>Bootstrap</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 90,
										color:"#1abc9c"
									},
									{
										value : 10,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("bootstrap").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="wordpress" height="130" width="130"></canvas>
						<p>Wordpress</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 65,
										color:"#1abc9c"
									},
									{
										value : 35,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("wordpress").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					
					<div class="col-lg-3 col-lg-offset-3 centered">
						<canvas id="html" height="130" width="130"></canvas>
						<p>HTML/CSS</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 80,
										color:"#1abc9c"
									},
									{
										value : 20,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("html").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="photoshop" height="130" width="130"></canvas>
						<p>Photoshop</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 70,
										color:"#1abc9c"
									},
									{
										value : 30,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("photoshop").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="illustrator" height="130" width="130"></canvas>
						<p>Illustrator</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 50,
										color:"#1abc9c"
									},
									{
										value : 50,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("illustrator").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

			</div><!--/.row -->
			<br>
		</div><!--/.container -->
	</div><!--/ #skillswrap -->



	<section id="work" name="work"></section>
	<!--PORTFOLIO DESCRIPTION -->
	<div class="container desc">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5>PORTFOLIO</h5>
				</div>
				<div class="col-lg-6">
					<p><img class="img-responsive" src="/img/port01.jpg" alt=""></p>
				</div>
				<div class="col-lg-3">
					<p>CANALS OF ENGLAND</p>
				<p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/><br/>
					<sm><i class="icon-tag"></i> design</sm></more> 
				</p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><img class="img-responsive" src="/img/port02.jpg" alt=""></p>
				</div>
				<div class="col-lg-3">
						<p>SANKEY</p>
					<p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/><br/>
						<sm><i class="icon-tag"></i> front-end</sm></more> 
					</p>
				</div>
				
				<div class="col-lg-6 col-lg-offset-3">
					<p><img class="img-responsive" src="/img/port03.jpg" alt=""></p>
				</div>
				<div class="col-lg-3">
						<p>WE GROW</p>
					<p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/><br/>
						<sm><i class="icon-tag"></i> web design</sm></more> 
					</p>
				</div>
		
		</div><!--/.row -->
		<br>
		<br>
	</div><!--/.container -->
	


	<section id="contact" name="contact"></section>
	<!--FOOTER DESCRIPTION -->
	<div id="footwrap">
		<div class="container">
			<div class="row">
			
				<div class="col-lg-2 col-lg-offset-1">
					<h5>CONTACT</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Email</t><br/>
						william@blacktie.co <br/>
					</p>
					<p><t>Adress</t><br/>
						Some Ave. 987 <br/>
						Postal 23892 <br/>
						London, England. <br/>
					</p>
					<p><t>Phone</t><br/>
						+55 8933-2383 <br/>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>SOCIAL LINKS</sm></p>
					<p>
						<a href="#"><i class="icon-dribbble"></i></a>
						<a href="#"><i class="icon-twitter"></i></a>
						<a href="#"><i class="icon-facebook"></i></a>
						<a href="#"><i class="icon-linkedin"></i></a>
						<a href="#"><i class="icon-apple"></i></a>

					</p>
				</div>
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/ #footer -->
	
	<div id="c">
		<div class="container">
			<p>Created by <a href="http://www.blacktie.co">BLACKTIE.CO</a></p>
		
		</div>
	</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/devin/bootstrap.js"></script>
  </body>
</html>
