<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>BrannonWorks</title>
<link rel="icon" type="image/png" href="images/favicon.png" />
<link rel="apple-touch-icon" href="images/brannonworksicon.png"/>
<meta name="description" content="Brannonworks is a collection of work created by Sam Brannon"/>
<meta name="keywords" content="architecture, photography, microcosm, brannon, scale, wall, uwm, sarup, paris, toronto, milwaukee, chicago"/>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css">
<script type="text/javascript" src="shadowbox/shadowbox.js"></script>
<script type="text/javascript" src="shadowbox/shadowboxconfig.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19739952-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript" src="jquery-1.4.4.min.js"></script>
<script type="text/javascript">

/*** 
    Simple jQuery Slideshow Script
    Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
***/

function slideSwitch() {
    var $active = $('#slideshow A.active');

    if ( $active.length == 0 ) $active = $('#slideshow A:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow A:first');

    // uncomment the 3 lines below to pull the images in random order
    
    //var $sibs  = $active.siblings();
    //var rndNum = Math.floor(Math.random() * $sibs.length );
    //var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 400, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});

</script>

<style type="text/css">

/*** set the width and height to match your images **/

#slideshow {
    position:relative;
    height:460px;
	width:100%;
}

#slideshow A {
    position:absolute;
    top:0;
    left:0;
    z-index:8;
    opacity:0.0;
}

#slideshow A.active {
    z-index:10;
    opacity:1.0;
}

#slideshow A.last-active {
    z-index:9;
}

</style>

<?php include_once "nav.php"; ?>