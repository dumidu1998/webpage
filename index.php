<!doctype html>
<html>
<head>

<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> 
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Philosopher" rel="stylesheet"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	h1{font-family: 'Kaushan Script', cursive; 
	color:#9DE6EF;
	text-shadow: 2px 2px black;}
	
	h3{font-family: 'Philosopher', sans-serif;}
	
	.button {
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	font-family: 'Merriweather', serif;
	border-radius: 10px;
	display: inline-block;
	transition-duration: 0.4s;
    cursor: pointer;
	}
	.button1 {
    background-color: #CEF1F5; 
    color: black; 
    border: 2px solid #9DE6EF;
	box-shadow: 0 6px 14px 0 rgba(0,0,0,0.2), 0 4px 18px 0 rgba(0,0,0,0.19);
	}
	.button1:hover {
    background-color: #9DE6EF;
    color: black;
	box-shadow: 0 4px 6px 0 rgba(0,0,0,0.2), 0 4px 10px 0 rgba(0,0,0,0.19);
	}
	
	.fa {
  	padding: 20px;
  	font-size: 30px;
  	width: 70px;
	border-radius: 50%;
  	text-align: center;
  	text-decoration: none;
  	margin: 5px 2px;
	align-items: center;
	}
		
	.fa:hover {
    opacity: 5;
	}
	.fa-facebook {
 	background: #3B5998;
  	color: white;
	}
	.fa-twitter {
 	background: #55ACEE;
  	color: white;
	}
	
	.SQR{
		background-color: #A8A4A4;
		width: 100%;
		padding: 10px;
	}
</style>

<script>
	var QuoteArray=["Be happy for this moment. This moment is your life.",
					"We must let go of the life we have planned, so as to accept the one that is waiting for us.",
				   "Smile in the mirror. Do that every morning and you'll start to see a big difference in your life.",
					"Not how long, but how well you have lived is the main thing.",
				   "t is better to be hated for what you are than to be loved for what you are not.",
					"Life is like playing a violin in public and learning the instrument as one goes on.",
					"In the end, it’s not the years in your life that count. It’s the life in your years.",
					"Believe that life is worth living and your belief will help create the fact.",
					"Do not take life too seriously. You will never get out of it alive.",
					"Do stuff. Be clenched, curious. Not waiting for inspiration’s shove or society’s kiss on your forehead. Pay attention. It’s all about paying attention. Attention is vitality. It connects you with others. It makes you eager. Stay eager.",
					"Get busy living or get busy dying."
				   ]
	x='default';
	function DisplayQuote(){
		x = QuoteArray[Math.floor(Math.random() * (9 - 0 + 1)) + 0];
		document.getElementById("quote").innerHTML = x+'<a href="https://twitter.com/intent/tweet?text='+x+'" target="_blank" class="fa fa-twitter"></a>';
		
		;
	}
	
</script>

<script>
	
</script>

<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<title>Random Quotes</title>
</head>

<body>
<br>
<div class="container-fluid container">
<div class="jumbotron">
 
  <h1 align="center" style="color: #A0E6FC">Random Quotes</h1>
  <h1>hello sam this is a test</h1>
  <h2>Dumidu Kasun</h2>
  <hr width="95%" align="center"><br>
  <h3 id="quote" align="center"></h3><br>
  <div class="row">
  	<div class="col-md-4"></div>
  	<div class="col-md-4">
  	<button type="button" onclick="DisplayQuote()" class="btn-block button button1">New Quote</button></div>
  	<div class="col-md-4"></div>
  </div><br>
  
  <div class="row SQR">
  
	<div  align="left" class="col-xs-4">
  		<br>
   		<h4>by <a href="https://codepen.io/Dumidu/">Dumidu</a></h4>
    </div>
    <div class="col-xs-4"></div>
	<div align="right" class="col-xs-4">
    	
    </div>
  </div>

</div>
</div>

</body>
</html>
