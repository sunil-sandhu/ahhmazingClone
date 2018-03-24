<?php

$counterFile = 'counter.txt' ;

// jQuery ajax request is sent here
if ( isset($_GET['increase']) )
{
    if ( ( $counter = @file_get_contents($counterFile) ) === false ) die('Error : file counter does not exist') ;
    file_put_contents($counterFile,$counter + 1) ;
    echo $counter ;
    return false ;
}

if ( ! $counter = @file_get_contents($counterFile) )
{
    if ( ! $myfile = fopen($counterFile,'w') )
        die('Unable to create counter file !!') ;
    chmod($counterFile,0644);
    file_put_contents($counterFile,0) ;
}

?>


<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	
	<meta name="viewport" content="width=560">	



	<title>Wealdclone!</title>

<!--	<link rel="icon" href="http://ahhmazing.me/images/favicon.png" type="image/png">-->
<!--	<link rel="shortcut icon" href="http://www.ahhmazing.me/images/favicon.png" type="image/png">-->

	
	<title>Wealdclone!</title>

     
<!--	<meta property="og:title" content="Ahhmazing!">-->
<!--	<meta property="og:type" content="website">-->
<!--	<meta property="og:image:url" content="http://ahhmazing.me/images/socialmetaimage.png">-->
<!--	<meta property="og:url" content="http://www.Ahhmazing.me">-->
<!--	<meta property="og:description" content="This is Ahhmazing!">-->
<!---->
<!---->
<!--	<meta property="twitter:card" content="summary">-->
<!--	<meta property="twitter:title" content="Ahhmazing!">-->
<!--	<meta property="twitter:description" content="This is Ahhmazing!">-->
<!--	<meta property="twitter:creator" content="@peigh">-->
<!--	<meta property="twitter:url" content="http://www.Ahhmazing.me">-->
<!--	<meta property="twitter:image" content="http://www.Ahhmazing.me/images/socialmetaimage.png"> -->
<!--	<meta property="twitter:image:alt" content="">-->

	<link href="style.css" rel="stylesheet">
	<link href="font-awesome.css" rel="stylesheet">

	<script
			src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous"></script>

    <script type="text/javascript" src="javascript.js"></script>
</head> 

<body onload="numberChange()" data-gr-c-s-loaded="true" style="background-color: rgb(0, 255, 162);">

		<div id="container">

        <h1>The Wealdclone Raider</h1>

            <div style="padding-top:30px;">
			<img id="pic1" onclick="clickOnOne()" class="pic" src="/img1.png" style="display: none;">
			<img id="pic2" onclick="clickOnTwo()" class="pic" src="/img2.png" style="display: none;">
			<img id="pic3" onclick="clickOnThree()" class="pic" src="/img3.png" style="display: block;">
            </div>

            <div id="counter"><?php echo $counter ; ?></div>

        </div>


	<audio id="audio1" controls="">
		
			<source src="wantsome1.mp3" type="audio/mpeg">

	</audio>
	
	 <audio id="audio2" controls="">
		
			<source src="wantsome2.mp3" type="audio/mpeg">

	</audio>
	
	 <audio id="audio3" controls="">
		
			<source src="giveitya.mp3" type="audio/mpeg">
 
	</audio>









</body></html>