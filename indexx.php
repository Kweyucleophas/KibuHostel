<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="hostel.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOSTEL MANAGEMENT</title>
<style type="text/css">
<!--
.shout_box {
	background: #627BAE;
	width: 200px;
	overflow: hidden;
	position: fixed;
	bottom: 0;
	right: 2%;
	z-index:9;
}
.ln a{
	text-align:center;
	
	
}
.shout_box .header .close_btn {
	background: url(images/close_btn.png) no-repeat 0px 0px;
	float: right;
	width: 15px;
	height: 15px;
}
.shout_box .header .close_btn:hover {
	background: url(images/close_btn.png) no-repeat 0px -16px;
}

.shout_box .header .open_btn {
	background: url(images/close_btn.png) no-repeat 0px -32px;
	float: right;
	width: 15px;
	height: 15px;
}
.shout_box .header .open_btn:hover {
	background: url(images/close_btn.png) no-repeat 0px -48px;
}
.shout_box .header{
	padding: 5px 3px 5px 5px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	font-weight: bold;
	color:#fff;
	border: 1px solid rgba(0, 39, 121, .76);
	border-bottom:none;
	cursor: pointer;
}
.shout_box .header:hover{
	background-color: blue;
}
.shout_box .message_box {
	background: #FFFFFF;
	height: 200px;
	overflow:auto;
	border: 1px solid #CCC;
}
.shout_msg{
	margin-bottom: 10px;
	display: block;
	border-bottom: 1px solid #F3F3F3;
	padding: 0px 5px 5px 5px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	color:#7C7C7C;
}
.message_box:last-child {
	border-bottom:none;
}
time{
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	font-weight: normal;
	float:right;
	color: blue;
}
.shout_msg .username{
	margin-bottom: 10px;
	margin-top: 10px;
}
.user_info input {
	width: 98%;
	height: 25px;
	border: 1px solid blue;
	border-top: none;
	padding: 3px 0px 0px 3px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
}
.shout_msg .username{
	font-weight: bold;
	display: block;
}
-->
</style>

<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	// load messages every 1000 milliseconds from server.
	load_data = {'fetch':1};
	window.setInterval(function(){
	 $.post('shout.php', load_data,  function(data) {
		$('.message_box').html(data);
		var scrolltoh = $('.message_box')[0].scrollHeight;
		$('.message_box').scrollTop(scrolltoh);
	 });
	}, 1000);
	
	//method to trigger when user hits enter key
	$("#shout_message").keypress(function(evt) {
		if(evt.which == 13) {
				var iusername = $('#shout_username').val();
				var imessage = $('#shout_message').val();
				post_data = {'username':iusername, 'message':imessage};
			 	
				//send data to "shout.php" using jQuery $.post()
				$.post('shout.php', post_data, function(data) {
					
					//append data into messagebox with jQuery fade effect!
					$(data).hide().appendTo('.message_box').fadeIn();
	
					//keep scrolled to bottom of chat!
					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					
					//reset value of message box
					$('#shout_message').val('');
					
				}).fail(function(err) { 
				
				//alert HTTP server error
				alert(err.statusText); 
				});
			}
	});
	
	//toggle hide/show shout box
	$(".close_btn").click(function (e) {
		//get CSS display state of .toggle_chat element
		var toggleState = $('.toggle_chat').css('display');
		
		//toggle show/hide chat box
		$('.toggle_chat').slideToggle();
		
		//use toggleState var to change close/open icon image
		if(toggleState == 'block')
		{
			$(".header div").attr('class', 'open_btn');
		}else{
			$(".header div").attr('class', 'close_btn');
		}
		 
		 
	});
});

</script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

</head>

<body>


	<header id="head"><hgroup id="hed">
		
  <tr>
    <th scope="row"><ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="home.php">Home</a>        </li>
      <li><a href="Studend2.php">Join</a></li>
      <li><a  href="#">About</a>
      </li>
      <li><a href="dashboard.php">Clearence</a></li>
      <li><a href="contactus.php">contact us</a></li>
      <li><a href="#">Logout</a></li>
    </ul></th>
  </tr>
  <tr style="background-color:#003; color:#FFF;">
    <th scope="row"><img src="logo.png" width="70" height="70" align="right" /><h2 >KIBABII HOSTEL</h2>
    <h1 style="text-align:justify;"> </h1></th>
  </tr>
</table>
    	</header>
        <div class="content">
        <section style="text-align:center">
        <img src="image.jpeg" width="190px" height="190px" />
        <img src="download (1).jfif" width="190px" height="190px" />
        <img src="download (2).jfif" width="190px" height="190px" />
        <img src="download.jfif" width="190px" height="190px" />
        <img src="download (3).jfif" width="190px" height="190px" />
        </section>
        <article style="padding:20px 90px; text-transform:capitalize; text-align:center; color:#000; text-height:4em; "> <p>this system is for hostel management and all users within the system must register before they can start to access key essential part of the sytem</p><p>you are allowed to register in the system if and only if you are a student or worker based in Kibabii university</p> <h2>for students after entering your details kindly visit you hostel manager to sign up and when you sign out of your room</h2><p>use the portals below to log in / sign up into the system</p>
        
        <p>for emergency in the room or around the hostel kindly use the online chat on your left</p><center><p class="ln"><a class="button_small" href="indexhostel.php" style="height: 25px; text-decoration:none; text-transform:none; color:#FFF;">LOG IN</a><a class="button_small" href="studentsregister.php" style="height: 25px; text-decoration:none; text-transform:none; color:#FFF;">STUDENTS SIGN UP PORTAL</a><a class="button_small" href="workersreg.php" style="height: 25px; text-decoration:none; text-transform:none; color:#FFF;">WORKERS SIGN UP PORTAL</a></p></center></p></article>
<div class="shout_box">
<div class="header">online hostel chat click x to minimize<div class="close_btn">&nbsp;</div></div>
  <div class="toggle_chat">
  <div class="message_box">
    </div>
    <div class="user_info">
    <input name="shout_username" id="shout_username" type="text" placeholder="Your Name" maxlength="15" />
   <input name="shout_message" id="shout_message" type="text" placeholder="Type Message Hit Enter" maxlength="100" /> 
    </div>
    </div></div>
</div>
<footer style=" text-align:center;" class="foot"><br />copy right Kibabii University &copy; 2022
<h2>this system have been developed for purpose of kibabii university student to be able register as resident and to clearence if she or he want to a non-resident of kibabii for more information contact as using this email kibabii56@gmail.com/ kibu.ac.ke hostel for any question.</footer>
</body>
</html>
