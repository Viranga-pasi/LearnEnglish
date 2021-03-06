<!-- php add -->

<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link
			href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap"
			rel="stylesheet"
		/>
		
		<script src="https://kit.fontawesome.com/717367e0a7.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css"/>
		<title>LearnEnglish - Tenses</title>
	</head>
	<!-- create body -->
	<body>
		<?php
			if(!isset($_SESSION['userName'])){
				header("location: login.php?Error=notLogging");
			}
		?>



		<header class="myHeader">
			
			<div class="logo-container">
				<img src="./img/le-logo.png" alt="logo" onclick="mainPage()" />
				
				

				<h4><a  class="logo" href="index.php">LearnEnglish</a> </h4>
			</div>

			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					
					<li><a href="#">Learn more <i class="fa fa-caret-down"></i></a>
						<ul>
							<li><a href="speech.php">&#10097 8 Parts of Speech</a></li>
							<li><a href="tenses.php">&#10097 12 Verb Tenses</a></li>
								
						</ul>
					</li>

					<li><a href="#">Take a Quiz <i class="fa fa-caret-down"></i></a>
						<ul>
							<li><a href="quiz-speech.php">&#10097 Quiz on 8 Parts of Speech</a></li>
							<li><a href="quiz-tenses.php">&#10097 Quiz on 12 Verb Tenses</a></li>
								
						</ul>
					</li>
		
					<li><a href="#">Games <i class="fa fa-caret-down"></i></a>
						<ul>
							<li><a href="hide&seek.php">&#10097 Hide & Seek</a></li>
							<li><a href="catch-eggs.php">&#10097 Catch Eggs</a></li>
						</ul>
					</li>
				</ul>
				




			</nav>





			<div class="avatar">
				<i class="fas fa-user" onclick="profile()"><span class="display-label">Profile</span></i>
				<form action="logout.inc.php" method="post">
					<button type="submit"><i class="fas fa-sign-out-alt"><span class="display-label" name="logout">Log Out</span></i></button>
				</form>
			</div>
		</header>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></button>

		<main>
            	<!--profile details-->
			<!-- php add -->
			<section class="profile-details">
				<div class="profile-outer">
					<div class="close">
						<i class="fas fa-times" onclick="exitUd()"></i>
					</div>
					<div class="profile-container">
						
						<img class="p-img" src="./img/profile.svg" alt="">
						<div class="profile-cont">
							<h1>Hi, <?php echo ($_SESSION['userName']); ?></h1>
							<br>
							<img class="profile-img" src="./img/avatar.png" alt="avatar" />
							
							<h4>Name : <?php echo ($_SESSION['userName']); ?></h4>
							<h4>Email : <?php echo ($_SESSION['userMail']); ?></h4>
							<!-- <h4>Logging Time : <span class="utime"></span></h4> -->
						</div>
						
					</div>
					
				</div>
				
			</section>
			
	
			<!--back circles-->
			<img class="big-circle" src="./img/big-eclipse.svg" alt="" />
			<img class="medium-circle" src="./img/mid-eclipse.svg" alt="" />
			


			<!--heading content-->
			<section class="presentation">
				<div class="introduction">
					<div class="intro-text">
						<h1>THE 12 VERB TENSES IN ENGLISH</h1>
						
						<p>Verb tenses identify the time period when an action occurs. The verb walks communicates not only how many people completed the action (it’s singular), but also when it occurred. In this case, the tense is present. The person walks right now.</p>
                    <p>Interestingly, not all languages treat verb tenses the same way. In English, the ending on a verb communicates what tense it’s in. (Walk becomes walks and walked.) In some cases, an auxiliary verb is required as well.</p>
                    <p>To better understading use our previous lesson on 8 parts of speech.</p>
					</div>
					<div class="cta">
						<button class="cta-style"  ><a href="speech.php" target ="_blank">8 Parts of Speech</a></button>
						
					</div>
				</div>
				<div class="cover">
					<img src="./img/teaching.svg" alt="teaching" />
				</div>
            </section>
           
        
            <!--content-->
			<section class="presentation scroll">
                <div class="cover scroll">
					<img src="./img/teacher.png" alt="teaching" />
				</div>
				<div class="introduction scroll">
					<div class="intro-text">
						<h1>Here the List of them</h1>
						<p>Before we begin, here’s a list of the 12 verb tenses in English:</p>
						
						<h3>Simple Tense</h3>
						<div class ="tense continuous">Simple Past Tense</div>
                        <div class ="tense continuous">Simple Present Tense</div>
						<div class ="tense continuous">Simple Future Tense</div>

							<br>
						<h3>Continuous Tense</h3>

                        <div class ="tense continuous">Past Continuous Tense</div>
                        <div class ="tense continuous">Present Continuous Tense</div>
						<div class ="tense continuous">Future Continuous Tense</div>
						<br>
						<h3>Perfect Tense</h3>

                        <div class ="tense perfect">Past Perfect Tense</div>
                        <div class ="tense perfect">Present Perfect Tense</div>
						<div class ="tense perfect">Future Perfect Tense</div>
						<br>
						<h3>Perfect Continuous Tense</h3>

                        <div class ="tense perfeccont">Past Perfect Continuous Tense</div>
                        <div class ="tense perfeccont">Present Perfect Continuous Tense</div>
                        <div class ="tense perfeccont">Future Perfect Continuous Tense</div>
						
						<br>
						<p>Click following tabs to learn more <i class="fas fa-angle-down"></i></p>
						<br>
						
						
					</div>
				</div>
		
			</section>
			
			
			
			<!-- Tabs -->



			<div class="tab">
				<button class="tablinks" onclick="openTab(event, 'Simple')">Simple Tense</button>
				<button class="tablinks" onclick="openTab(event, 'Continuous')">Continuous Tense</button>
				<button class="tablinks" onclick="openTab(event, 'Perfect')">Perfect Tense</button>
				<button class="tablinks" onclick="openTab(event, 'pc')">Perfect Continuous Tense</button>
			</div>
			  
			  <!-- Tab content -->



			<!-- Simple Tense -->


			<div id="Simple" class="tabcontent">

				<br>
				<section class="presentation2 scroll">
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h1>Simple Tense</h1>
							
							<p>Simple tense definition:<br>
								The simple tense is a tense in English with no aspect that expresses actions occurring in the past, present, and future.</p>
							<div class="cta">
								<button class="cta-style"><a href ="#simplepasttense">Simple Past Tense <i class="fas fa-angle-right"></i></a></button>								
							
								<button class="cta-style"><a href ="#simplepresenttense">Simple Present Tense <i class="fas fa-angle-right"></i></a></button>								
							
								<button class="cta-style"><a href ="#simplefuturetense">Simple Future Tense <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="cover">
						<img src="./img/simple-t.svg" alt="simple tense" />
					</div>
					
				</section>

				

					<!-- simplepasttense -->

				<p class="content-hidden"><a target name = "simplepasttense">simplepresenttense</a></p>

				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h2>Simple Past Tense</h2>
							
							<p>The simple past is a verb tense use to talk about things or situations which happened in the past, that is, before the present time of speaking.</p>
							<br>
							<br>
							<p>Form : <strong>((I/he/she/it) + infinitive + -ed</strong></p>
							<div class="cta">
								<button class="cta-style"><a href ="#simplepasttenseexamples">Examples <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h4>Uses</h4>
							
							<p><i class="fas fa-angle-right"></i></a> Action finished in the past, 
							mostly connected with an expression of time (no connection to the present)</p>
						</div>
						
					</div>
					
				</section>

				<p class="content-hidden"><a target name = "simplepasttenseexamples">simplepresenttense</a></p>
				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Affirmative</h3>
							<p>I worked.</p>
							<p>He worked.</p>
							<p>I went.</p>
							<p>He went.</p>		
									
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Negative</h3>
							<p>I didn't work.</p>
							<p>He didn't work.</p>
							<p>I didn't go.</p>
							<p>He didn't go.</p>
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Interrogative</h3>
							<p>Did I work?</p>
							<p>Did he work?</p>
							<p>Did I go?</p>
							<p>Did he go?</p>
						</div>
					</div>
				</section>

				<hr class="content-hr">

				<!-- simplepresenttense -->

				<p class="content-hidden"><a target name = "simplepresenttense">simplepresenttense</a></p>

				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h2>Simple Present Tense</h2>
							
							<p>The simple present is a verb tense with two main uses. We use the simple present tense when an action is happening right now, or when it happens regularly.</p>
							<br>
							<br>
							<p>Form : <strong>(hI/e/she/it) + infinitive + -s</strong></p>
							<div class="cta">
								<button class="cta-style"><a href ="#simplepresenttenseexamples">Examples <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h4>Uses</h4>
							
							<p><i class="fas fa-angle-right"></i></a> something happens repeatedly<br>
								<i class="fas fa-angle-right"></i></a> How often something happens<br>
								<i class="fas fa-angle-right"></i></a> Things in general<br>
								<i class="fas fa-angle-right"></i></a> things in general<br>
								<i class="fas fa-angle-right"></i></a> With the following verbs (to love, to hate, to think, etc.)<br>
								<i class="fas fa-angle-right"></i></a> Future meaning: timetables, programmes</p>
						</div>
						
					</div>
					
				</section>

				<p class="content-hidden"><a target name = "simplepresenttenseexamples">simplepresenttense</a></p>
				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Affirmative</h3>
							<p>I work.</p>
							<p>He works.</p>
							<p>I go.</p>
							<p>He goes.</p>
							
							
								
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Negative</h3>
							<p>I don't work..</p>
							<p>He doesn't work.</p>
							<p>I don't go.</p>
							<p>He doesn't go.</p>
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Interrogative</h3>
							<p>Do I work?</p>
							<p>Does he work?</p>
							<p>Do I go?</p>
							<p>Does he go?</p>
						</div>
					</div>
				</section>
				
				<hr class="content-hr">

				<!-- simplefuturetense -->

				<p class="content-hidden"><a target name = "simplefuturetense"></a><simplefuturetense/p>

				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h2>Simple Future Tense</h2>
							
							<p>The simple present is a verb tense with two main uses. We use the simple present tense when an action is happening right now, or when it happens regularly.</p>
							<br>
							<br>
							<p>Form : <strong>(I/he/she/it) + will + infinitive</strong></p>
							<div class="cta">
								<button class="cta-style"><a href ="#simplefuturetenseexamples">Examples <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h4>Uses</h4>
							
							<p><i class="fas fa-angle-right"></i></a> Action in the future that cannot be influenced<br>
								<i class="fas fa-angle-right"></i></a> Spontaneous decision<br>
								<i class="fas fa-angle-right"></i></a> Assumption with regard to the future</p>
						</div>
						
					</div>
					
				</section>

				<p class="content-hidden"><a target name = "simplefuturetenseexamples">simplepresenttense</a></p>
				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Affirmative</h3>
							<p>I'll work.</p>
							<p>He'll work.</p>
							<p>I'll go.</p>
							<p>He'll go.</p>
									
		
		
	
							
								
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Negative</h3>
							<p>I won't work.</p>
							<p>He won't work.</p>
							<p>I won't go.</p>
							<p>He won't go.</p>
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Interrogative</h3>
							<p>Will I work?</p>
							<p>Will he work?</p>
							<p>Will I go?</p>
							<p>Will he go?</p>
						</div>
					</div>
				</section>

				




			</div>




			<!------------------------------------------------------------------------------------------->
			
			<!-- Continuous Tense -->


			<div id="Continuous" class="tabcontent">
				<br>
				<section class="presentation2 scroll">
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h1>Continuous Tense</h1>
							
							<p>The continuous tense shows an action that is, was, or will be in progress at a certain time.<br>
								The continuous tense is formed with the verb ‘be’ + -ing form of the verb.</p>
							<div class="cta">
								<button class="cta-style"><a href ="#pastcontinuoustense">Past Continuous Tense <i class="fas fa-angle-right"></i></a></button>								
							
								<button class="cta-style"><a href ="#presentcontinuoustense">Present Continuous Tense <i class="fas fa-angle-right"></i></a></button>								
							
								<button class="cta-style"><a href ="#futurecontinuoustense">Future Continuous Tense <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="cover">
						<img src="./img/continuous-t.svg" alt="continuous tense" />
					</div>
					
				</section>



				<!-- Past Continuous Tense -->


				<p class="content-hidden"><a target name = "pastcontinuoustense"></a>pastcontinuoustense</p>

				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h2>Past Continuous Tense</h2>
							
							<p>The past continuous tense, also known as the past progressive tense, refers to a continuing action or state that was happening at some point in the past.</p>
							<br>
							<br>
							<p>Form : <strong>(I/he/she/it) + was/were + infinitive + -ing</strong></p>
							<div class="cta">
								<button class="cta-style"><a href ="#pastcontinuoustenseexamples">Examples <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h4>Uses</h4>
							
							<p><i class="fas fa-angle-right"></i></a> An action happened in the middle of another action<br>
								<i class="fas fa-angle-right"></i></a> Someone was doing sth. at a certain time (in the past) - you do not know whether it was finished or not</p>
						</div>
						
					</div>
					
				</section>

				<p class="content-hidden"><a target name = "pastcontinuoustenseexamples">pastcontinuoustense</a></p>
				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Affirmative</h3>
							<p>I was working.</p>
							<p>He was working.</p>
							<p>I was going.</p>
							<p>He was going.</p>
							
						
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Negative</h3>
							<p>I wasn't working.</p>
							<p>He wasn't working.</p>
							<p>I wasn't going.</p>
							<p>He wasn't going.</p>
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Interrogative</h3>
							<p>Was I working?</p>
							<p>Was he working?</p>
							<p>Was I going?</P>
							<P>Was he going?</p>
						</div>
					</div>
				</section>



				<!-- Present Continuous Tense  -->
				<p class="content-hidden"><a target name = "presentcontinuoustense"></a></p>

				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h2>Present Continuous Tense</h2>
							
							<p>The present continuous verb tense indicates that an action or condition is happening now, frequently, and may continue into the future.</p>
							<br>
							<br>
							<p>Form : <strong>(I/he/she/it) + (am/are/is) + infinitive + -ing</strong></p>
							<div class="cta">
								<button class="cta-style"><a href ="#presentcontinuoustenseexamples">Examples <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h4>Uses</h4>
							
							<p><i class="fas fa-angle-right"></i></a> Something is happening at the same time of speaking or around it<br>
								<i class="fas fa-angle-right"></i></a> Future meaning: when you have already decided and arranged to do it (a fixed plan, date)</p>
						</div>
						
					</div>
					
				</section>

				<p class="content-hidden"><a target name = "presentcontinuoustenseexamples">simplepresenttense</a></p>
				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Affirmative</h3>
							<p>I'm working.</p>
							<p>He's working.</p>
							<p>I'm going.</p>
							<p>He's going.</p>
					
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Negative</h3>
							<p>I'm not working.</p>
							<p>He isn't working.</p>
							<p>I'm not going.</p>
							<p>He isn't going.</p>
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Interrogative</h3>
							<p>Am I working?</p>
							<p>Is he working?</p>
							<p>Am I going?</p>
							<p>Is he going?</p>
						</div>
					</div>
				</section>


				<!-- future continuous tense -->
				<p class="content-hidden"><a target name = "futurecontinuoustense"></a></p>

				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h2>Future Continuous Tense</h2>
							
							<p>The future continuous tense, is a verb tense that indicates that something will occur in the future and continue for an expected length of time.</p>
							<br>
							<br>
							<p>Form : <strong>(I/he/she/it) + will + be + infinitive + -ing</strong></p>
							<div class="cta">
								<button class="cta-style"><a href ="#futurecontinuoustenseexamples">Examples <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h4>Uses</h4>
							
							<p><i class="fas fa-angle-right"></i></a> Action that is going on at a certain time in the future<br>
								<i class="fas fa-angle-right"></i></a> Action that is sure to happen in the near future</p>
						</div>
						
					</div>
					
				</section>

				<p class="content-hidden"><a target name = "futurecontinuoustenseexamples">simplepresenttense</a></p>
				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Affirmative</h3>
							<p>I'll be working.</p>
							<p>He'll be working.</p>
							<p>I'll be going.</p>
							<p>He'll be going.</p>
								
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Negative</h3>
							<p>I won't be working.</p>
							<p>He won't be working.</p>
							<p>I won't be going.</p>
							<p>He won't be going.</p>
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Interrogative</h3>
							<p>Will I be working?</p>
							<p>Will he be working?</p>
							<p>Will I be going?</p>
							<p>Will he be going?</p>
						</div>
					</div>
				</section>


			</div>
			

			<!------------------------------------------------------------------------------------------->

			<!-- Perfect Tense -->


			<div id="Perfect" class="tabcontent">
				<br>
				<section class="presentation2 scroll">
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h1>Perfect Tense</h1>
							
							<p>The perfect form is the verb tense used to indicate a completed, or "perfected," action or condition. <br>
								Verbs can appear in any one of three perfect tenses: present perfect, past perfect, and future perfect.<br>

								Verbs in the perfect form use a form of "have" or "had" + the past participle. (It is the form of the helping verb that indicates the tense.)</p>
							<div class="cta">
								<button class="cta-style"><a href ="#pastperfecttense">Past Perfect Tense <i class="fas fa-angle-right"></i></a></button>								
							
								<button class="cta-style"><a href ="presentperfecttense">Present Perfect Tense <i class="fas fa-angle-right"></i></a></button>								
							
								<button class="cta-style"><a href ="#futureperfecttense">Future Perfect Tense <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="cover">
						<img src="./img/perfect-t.svg" alt="perfect tense" />
					</div>
					
				</section>
				



				<!--Past Perfect Tense  -->
				<p class="content-hidden"><a target name = "pastperfecttense"></a></p>
				
				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h2>Past Perfect Tense</h2>
							
							<p>The past perfect, is a verb tense used to talk about actions that were completed before some point in the past (something that happened before something else).</p>
							<br>
							<br>
							<p>Form : <strong>(I/he/she/it) + had + past participle</strong></p>
							<div class="cta">
								<button class="cta-style"><a href ="#pastperfecttenseexamples">Examples <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h4>Uses</h4>
							
							<p><i class="fas fa-angle-right"></i></a> Mostly when two actions in a story are related to each other: the action which had already happened is put into Past Perfect, the other action into Simple Past
								<br>the past of Present Perfect</p>
						</div>
						
					</div>
					
				</section>

				<p class="content-hidden"><a target name = "pastperfecttenseexamples">simplepresenttense</a></p>
				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Affirmative</h3>
							<p>I had worked.</p>
							<p>He had worked.</p>
							<p>I had gone.</p>
							<p>He had gone.</p>
									
								
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Negative</h3>
							<p>I hadn't worked.</p>
							<p>He hadn't worked.</p>
							<p>I hadn't gone.</p>
							<p>He hadn't gone.</p>
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Interrogative</h3>
							<p>Had I worked?</p>
							<p>Had he worked?</p>
							<p>Had I gone?</p>
							<p>Had he gone?</p>
						</div>
					</div>
				</section>


				<!-- presentperfecttense -->
				<p class="content-hidden"><a target name = "presentperfecttense"></a></p>

				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h2>Present Perfect Tense</h2>
							
							<p>The present perfect tense refers to an action or state that either occurred at an indefinite time in the past or began in the past and continued to the present time.</p>
							<br>
							<br>
							<p>Form : <strong>(I/he/she/it) + have/has + past participle</strong></p>
							<div class="cta">
								<button class="cta-style"><a href ="#presentperfecttenseexamples">Examples <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h4>Uses</h4>
							
							<p><i class="fas fa-angle-right"></i></a> Express past action which is not definedby a time of occurance.<br>
								<i class="fas fa-angle-right"></i></a> Express an action which started in the past and has continued up until now.</p>
						</div>
						
					</div>
					
				</section>

				<p class="content-hidden"><a target name = "presentperfecttenseexamples">simplepresenttense</a></p>
				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Affirmative</h3>
							<p>I have worked.</p>
							<p>He has worked.</p>
							<p>I have gone.</p>
							<p>He has gone.</p>
									
						
						
						
							
								
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Negative</h3>
							<p>I haven't worked.</p>
							<p>He hasn't worked.</p>
							<p>I haven't gone.</p>
							<p>He hasn't gone.</p>
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Interrogative</h3>
							<p>Have I worked?</p>
							<p>Has he worked?</p>
							<p>Have I gone?</p>
							<p>Has he gone?</p>
						</div>
					</div>
				</section>



				<!-- futureperfecttense -->
				<p class="content-hidden"><a target name = "futureperfecttense"></a></p>

				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h2>Future Perfect Tense</h2>
							
							<p>The future perfect tense is for talking about an action that will be completed between now and some point in the future.</p>
							<br>
							<br>
							<p>Form : <strong>(I/he/she/it) + will + have + past participle</strong></p>
							<div class="cta">
								<button class="cta-style"><a href ="#futureperfecttenseexamples">Examples <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h4>Uses</h4>
							
							<p><i class="fas fa-angle-right"></i></a>Express an action that will be completed before another event takes place.</p>
						</div>
						
					</div>
					
				</section>

				<p class="content-hidden"><a target name = "futureperfecttenseexamples">simplepresenttense</a></p>
				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Affirmative</h3>
							<p>I'll have worked.</p>
							<p>He'll have worked.</p>
							<p>I'll have gone.</p>
							<p>He'll have gone.</p>
							
							
									
									
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Negative</h3>
							<p>I won't have worked.</p>
							<p>He won't have worked.</p>
							<p>I won't have gone.</p>
							<p>He won't have gone.</p>
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Interrogative</h3>
							<p>Will I have worked?</p>
							<p>Will he have worked?</p>
							<p>Will I have gone?</p>
							<p>Will he have gone?</p>
						</div>
					</div>
				</section>

			</div>


			<!------------------------------------------------------------------------------------------->

			<!-- Perfect Continuous Tense -->
			<div id="pc" class="tabcontent">
				<br>

				<section class="presentation2 scroll">
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h1>Perfect Continuous Tense</h1>
							
							<p>Perfect progressive tenses often answer the question how long? There are three perfect progressive tenses: the present perfect progressive, the past perfect progressive, and the future perfect progressive.</p>
							<div class="cta">
								<button class="cta-style"><a href ="#pastperfectconttense">Past Perfect Continuous Tense <i class="fas fa-angle-right"></i></a></button>								
							
								<button class="cta-style"><a href ="#presentperfectconttense">Present Perfect Continuous Tense <i class="fas fa-angle-right"></i></a></button>								
							
								<button class="cta-style"><a href ="#efutureperfectconttense">Future Perfect Continuous Tense <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="cover">
						<img src="./img/perfectcont-t.svg" alt="simple tense" />
					</div>
					
				</section>


								
				<!-- Past Perfect Continuous Tense  -->
				<p class="content-hidden"><a target name = "pastperfectconttense"></a></p>

				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h2>Past Perfect Continuous Tense </h2>
							
							<p>For colloquial English, we don’t use past perfect continuous very often. But in text books, it’s a bit more common. This very tense has a complete action that happened before a second action. But in this case, you can describe how long.</p>
							<br>
							<br>
							<p>Form : <strong>(I/he/she/it) + had + been + infinitive + ing</strong></p>
							<div class="cta">
								<button class="cta-style"><a href ="#pastperfectconttenseexamples">Examples <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h4>Uses</h4>
							
							<p><i class="fas fa-angle-right"></i></a> Describe an action in the past that began before a certain point in the past and continued up until that time.</p>
						</div>
						
					</div>
					
				</section>

				<p class="content-hidden"><a target name = "pastperfectconttenseexamples">simplepresenttense</a></p>
				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Affirmative</h3>
							<p>I had been working.</p>
							<p>He had been working.</p>
							<p>I had been going.</p>
							<p>He had been going.</p>
							
								
								
									
								
								
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Negative</h3>
							<p>I hadn't been working.</p>
							<p>He hadn't been working.</p>
							<p>I hadn't been going.</p>
							<p>He hadn't been going.</p>
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Interrogative</h3>
							<p>Had I been working?</p>
							<p>Had he been working?</p>
							<p>Had I been going?</p>
							<p>Had he been going?</p>
						</div>
					</div>
				</section>






				<!-- Present Perfect Continuous Tense -->
				<p class="content-hidden"><a target name = "presentperfectconttense"></a></p>

				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h2>Present Perfect Continuous Tense</h2>
							
							<p>In this verb tense, an action starts in the past but it’s still continuing now. You have been performing the action and still are performing the action in the present.</p>
							<br>
							<br>
							<p>Form : <strong>Express an action which started at xome point in the past and may not be complete.</strong></p>
							<div class="cta">
								<button class="cta-style"><a href ="#presentperfectconttenseexamples">Examples <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h4>Uses</h4>
							
							<p><i class="fas fa-angle-right"></i></a> Express an action which started at xome point in the past and may not be complete.</p>
						</div>
						
					</div>
					
				</section>

				<p class="content-hidden"><a target name = "presentperfectconttenseexamples">simplepresenttense</a></p>
				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Affirmative</h3>
							<p>I have been working.</p>
							<p>He has been working.</p>
							<p>I have been going.</p>
							<p>He has been going.</p>

							
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Negative</h3>
							<p>I haven't been working.</p>
							<p>He hasn't been working.</p>
							<p>I haven't been going.</p>
							<p>He hasn't been going.</p>
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Interrogative</h3>
							<p>Have I been working?</p>
							<p>Has he been working?</p>
							<p>Have I been going?</p>
							<p>Has he been going?</p>
						</div>
					</div>
				</section>









				<!--Future Perfect Continuous Tense  -->
				<p class="content-hidden"><a target name = "efutureperfectconttense"></a></p>

				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h2>Future Perfect Continuous Tense</h2>
							
							<p>An action will be continuing in the future when it is interrupted by another action. In this future verb tense, it often includes an indication of how long the action has been happening.</p>
							<br>
							<br>
							<p>Form : <strong>(I/he/she/it) + will + have + been + infinitive + ing</strong></p>
							<div class="cta">
								<button class="cta-style"><a href ="#efutureperfectconttenseexamples">Examples <i class="fas fa-angle-right"></i></a></button>								
							</div>
						</div>
						
					</div>
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h4>Uses</h4>
							
							<p><i class="fas fa-angle-right"></i></a> Describe an action that will have not be complete yet at a certain point in the future.</p>
						</div>
						
					</div>
					
				</section>

				<p class="content-hidden"><a target name = "efutureperfectconttenseexamples">simplepresenttense</a></p>
				<section class="presentation2 scroll">
					
					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Affirmative</h3>
							<p>I'll have been working.</p>
							<p>He'll have been working.</p>
							<p>I'll have been going.</p>
							<p>He'll have been going.</p>
					
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Negative</h3>
							<p>I won't have been working.</p>
							<p>He won't have been working.</p>
							<p>I won't have been going.</p>
							<p>He won't have been going.</p>
						</div>
					</div>


					<div class="introduction2 scroll">
						<div class="intro-text">
							<h3>Examples Interrogative</h3>
							<p>Will I have been working?</p>
							<p>Will he have been working?</p>
							<p>Will I have been going?</p>
							<p>Will he have been going?</p>
						</div>
					</div>
				</section>



			</div>


			<!------------------------------------------------------------------------------------------->

			<br>
			<hr class="content-hr">




			<section class="presentation">
				<div class="introduction">
					<div class="intro-text">
						<h1>Summary of this lesson</h1>
						
					</div>
				</div>
				<div class="cover img-zoom">
					<img src="./img/tense-summary.jpg" alt="summary of tenses" />
				</div>
			</section>












			<!-- quiz -->

			<hr class="content-hr">


            <section class="presentation scroll">
                
                <div class="introduction scroll">
					<div class="intro-text">
						<h1>Would you like to take a Quiz </h1>
                    </div>
                    <div class="cta">
                        <button class="cta-style"><a href="quiz-tenses.php">Let's Go <i class="fas fa-angle-double-right"></i></a></button>
                    </div>
                </div>
                
                <div class="cover scroll">
					<img src="./img/quiz.gif" alt="quiz" />
                </div>
                
				
                
          
            </section>






		</main>
		


		<footer class="footer">
			<p><i class="far fa-copyright"></i> Copyrights Reserved | LearnEnglish </p>   
		</footer> 
		
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.3/jquery.sticky.min.js'></script>
		
		
		<script type="text/javascript" src="javascript/script.js"></script>
	</body>
</html>
