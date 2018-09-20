<?php get_header(); ?>
<div id="wrap_it">
	<div id="cover_all" style="background-image:url('assets/struggling.gif');">
		<div id="missing_content">
			<h1>404</h1>
			<h2>not sure how you got here<br>but let us help you out</h2>
			<a href="<?php home_url(); ?>">escape</a>
		</div>
	</div>
</div>

<style>
	@media all and (orientation:portrait) {
		#cover_all{
			margin-top:calc( 50vh - 50vw );
		}
	}
	#wrap_it{
		position:fixed;
		top:0;
		bottom:0;
		right:0;
		left:0;
		background-color:#303840;
		width:100vw;
		height:100vh;
		overflow:hidden;
	}
	#cover_all{
		position:fixed;
		top:0;
		bottom:0;
		right:0;
		left:0;
		max-height: 100vw;
		background-size: cover;
		background-position: center right;
	}
	#missing_content{
		width:100%;
		height:100%;
		display: block;
		position: absolute;
		padding:10vh 0;
		text-align:center;
	}
	#cover_all:before{
		content:'';
		width:100%;
		height:100%;
		background-color: #137e86;
		opacity: .7;
		display: block;
		position: absolute;
	}
	#missing_content > *{
		margin:auto;
		text-align:center;
		font-family: 'Montserrat', sans-serif;
		color:white;
		font-weight: 900;
	}
	#missing_content h1{
		font-size:4em;
		margin-bottom:3vh;
		margin-left: -10px;
	}
	#missing_content h2{
		font-size:2.5em;
		letter-spacing:2px;
		margin-bottom:5vh;
	}
	#missing_content a{
		color:white;
		border:3px solid white;
		font-size:2em;
		border-radius: 25px;
		padding:5px 20px 13px;
		text-decoration: none;
		opacity:1;
		transition: opacity 1s;
	}
	#missing_content a:hover{
		opacity:.7;
	}
</style>
<link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
<?php get_footer(); ?>
