<?php
session_start();
?>
<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Polyglot</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
		<header>
			<p class="text-center">
				Welcome <?php if(!empty($_SESSION['name'])){echo $_SESSION['name']; echo "<form action='logout.php'><button class='btn btn-success btn-block' type='submit'>Logout</button></form>";} else {echo "<a href='mongo_login.php'>Login</a>";}?>
			</p>
		</header>
		<div class="container container_index">
			<div class="row">
				<div class="col-xs-14 col-sm-7 col-lg-7">
					<div class='image'>
						<img src="image/logo.png" class="img-responsive"/>
					</div>
				</div>
				<div class="col-xs-10 col-sm-5 col-lg-5">
					<div class="intro">
						<p class="text-center">
							Please enter your name
						</p>
						<?php if(empty($_SESSION['name'])){?>
						<form class="form-signin" method="post" id='signin' name="signin" action="questions.php">
							<div class="form-group">
								<input type="text" id='name' name='name' class="form-control" placeholder="Enter your Name"/>
								<span class="help-block"></span>
							</div>
							<div class="form-group">
								<select class="form-control" name="category" id="category">
								      <option value="">Choose your quiz category</option>
								<?php
								$res = mysql_query("SELECT category_name FROM categories WHERE 1") or die(mysql_error());
								$num_rows = mysql_num_rows($res);
								$val_counter = 1;
								while( $row_result=mysql_fetch_array($res) ){?>
	                                  <option value='<?php echo $row_result["category_name"];?>'><?php echo $row_result['category_name'];?></option>
	                                  <?php
	                                  //$val_counter++;?>
	                                  <!--<option value="2">Kana</option>
	                                  <option value="3">Vocab</option>
	                                  <option value="4">Comprehension</option>-->
	                            <?php } ?>                                
	                            </select>
                                <span class="help-block"></span>
							</div>
						
							<br>
							<button id="start_button" class="btn btn-success btn-block" type="submit">
								Start
							</button>
						</form>
							<div id="quiz_button" class="btn btn-success btn-block">
								Quiz
							</div>
						<form class="form-signin" method="post" id='create_quiz_form' name="create_quiz_form" action="create_quiz.php">
							<button id="create_button" class="btn btn-success btn-block" type="submit">
								Create Quiz
							</button>
						</form>
						<form class="form-signin" method="post" id='edit_quiz_form' name="edit_quiz_form" action="edit_quiz.php">
							<button id="edit_button" class="btn btn-success btn-block" type="submit">
								Edit Quiz
							</button>
						</form>

						<?php }else{?>
						    <form class="form-signin" method="post" id='signin' name="signin" action="questions.php">
                            <div class="form-group">
                                <select class="form-control" name="category" id="category">
                                  <option value="">Choose your quiz category</option>
                                  <option value="1">Kanji</option>
                                  <option value="2">Kana</option>
                                  <option value="3">Vocab</option>
                                  <option value="4">Comprehension</option>                                
                                </select>
                                <span class="help-block"></span>
                            </div>

                            <br>
                            <button class="btn btn-success btn-block" type="submit">
                                Start
                            </button>
                        </form>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<p class="text-center" id="foot">
				Nathan Lapinski Web Design 2014
			</p>
		</footer>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/jquery.validate.min.js"></script>

		<script>
			$(document).ready(function() {
				$("#signin").validate({
					submitHandler : function() {
					    console.log(form.valid());
						if (form.valid()) {
						    alert("sf");
							return true;
						} else {
							return false;
						}

					},
					rules : {
						name : {
							required : true,
							minlength : 3,
							remote : {
								url : "check_name.php",
								type : "post",
								data : {
									username : function() {
										return $("#name").val();
									}
								}
							}
						},
						category:{
						    required : true
						}
					},
					messages : {
						name : {
							required : "Please enter your name",
							remote : "Name is already taken, Please choose some other name"
						},
						category:{
                            required : "Please choose your category to start Quiz"
                        }
					},
					errorPlacement : function(error, element) {
						$(element).closest('.form-group').find('.help-block').html(error.html());
					},
					highlight : function(element) {
						$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
					},
					success : function(element, lab) {
						var messages = new Array("Good");
						var num = Math.floor(Math.random() * 6);
						$(lab).closest('.form-group').find('.help-block').text(messages[num]);
						$(lab).addClass('valid').closest('.form-group').removeClass('has-error').addClass('has-success');
					}
				});
			});
		</script>
		<script>
		//for handling quiz start and quiz create buttons
		$("#quiz_button").click(function(){
			$("#start_button").fadeIn("slow");
			$(this).fadeOut("slow");
			$("#create_button").fadeOut("slow");
			$("#edit_button").fadeOut("slow");
		});
		</script>
	</body>
</html>