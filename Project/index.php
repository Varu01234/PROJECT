
<?php 
include_once"scripts/connect.php";


if ($_GET['id']) 
{
	
     $id = $_GET['id'];

} else 
{

$sql1 = mysql_query("SELECT * FROM entries ORDER BY id DESC LIMIT 0,1 ");
while($row1 = mysql_fetch_array($sql1)){ 
$id = $row1["id"];
}
}

$id = mysql_real_escape_string($id);
$id = eregi_replace("`", "", $id);
$sql = mysql_query("SELECT * FROM entries WHERE id='$id'");

while($row = mysql_fetch_array($sql))
	{ 

	$title = $row["title"];
	$contents = $row["contents"];
	$author = $row["author"];
	$date = $row["date"];
     $date = strftime("%b %d, %y", strtotime($date));	
	
     }

$sql1 = mysql_query("SELECT * FROM entries ORDER BY id DESC LIMIT 0,1 ");
while($row1 = mysql_fetch_array($sql1))
{ 
$id2 = $row1["id"];
}

$up_1 = $id+1;
$down_1 = $id-1;

if ($id2==1) 
{
$Left_move1 = '';
$Left_move2 = '';
$right_Move1 = '';
$right_Move2 = '';

} else if ($id==1)
{

$Left_move1 = '<a href="index.php?id=' . $id2 . '"><< Latest Article</a>';
$Left_move2 ='<a href="index.php?id=' . $up_1 . '">< Next Article</a>';
$right_Move1 = '';
$right_Move2 = '';

} else if ($id==$id2){

$right_Move1 =' <a href="index.php?id=' . $down_1 . '">Previous Article ></a>';
$right_Move2 ='<a href="index.php?id=1">Oldest Article >></a>';
$Left_move1 = '';
$Left_move2 = '';

} else {

$Left_move1 = '<a href="index.php?id=' . $id2 . '"><< Latest Article</a>';
$Left_move2 ='<a href="index.php?id=' . $up_1 . '">< Next Article</a>';
$right_Move1 =' <a href="index.php?id=' . $down_1 . '">Previous Article ></a>';
$right_Move2 ='<a href="index.php?id=1">Oldest Article >></a>';
}
?>

<html >
<meta property="fb:admins"          content="100003616296047" /> 
<meta property="og:type"            content="website" /> 
<meta property="og:url"             content="http://varu.ap01.aws.af.cm/" /> 
<meta property="og:title"           content="Writer's Blog-Dare to Read" /> 
<meta property="og:image"           content="http://smartmobilestudio.com/wp-content/uploads/2012/06/leather-book-preview.png" /> 
<meta property="og:description"            content="A Write's Blog" /> 

<head>
<link rel="icon" 
			type="image/jpg" 
			href="logo.jpg" />
			<title>Writer's Blog-Dare to Read</title>
<link href="style/main.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
<script src="http://tab-slide-out.googlecode.com/files/jquery.tabSlideOut.v1.3.js"></script>

    <script type="text/javascript">
    $(function(){
        $('.slide-out-div').tabSlideOut({
            tabHandle: '.handle',                     //class of the element that will become your tab
            pathToTabImage: 'images-CONTACT.png', //path to the image for the tab //Optionally can be set using css
            imageHeight: '120px',                     //height of tab image           //Optionally can be set using css
            imageWidth: '40px',                       //width of tab image            //Optionally can be set using css
            tabLocation: 'left',                      //side of screen where tab lives, top, right, bottom, or left
            speed: 300,                               //speed of animation
            action: 'click',                          //options: 'click' or 'hover', action to trigger animation
            topPos: '400px',                          //position from the top/ use if tabLocation is left or right
                                      //position from left/ use if tabLocation is bottom or top
                                //options: true makes it stick(fixed position) on scroll
        });

    });
	$(function(){
        $('.log').tabSlideOut({
            tabHandle: '.handl',                     //class of the element that will become your tab
            pathToTabImage: 'button-login.jpg', //path to the image for the tab //Optionally can be set using css
            imageHeight: '180px',                     //height of tab image           //Optionally can be set using css
            imageWidth: '2000px',                       //width of tab image            //Optionally can be set using css
            tabLocation: 'left',                      //side of screen where tab lives, top, right, bottom, or left
            speed: 300,                               //speed of animation
            action: 'click',                          //options: 'click' or 'hover', action to trigger animation
            topPos: '550px',                          //position from the top/ use if tabLocation is left or right
                                      //position from left/ use if tabLocation is bottom or top
                                //options: true makes it stick(fixed position) on scroll
        });

    });
	
 </script>
 <script>
	 
$(document).ready(function(){
  $(".first").click(function(){
    $("#panel").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#e").click(function(){
    window.location="poll.php";
  });
  });



$(document).ready(function(){
  $("#entry").click(function(){
    window.location="All.php";
  });
});
$(document).ready(function(){
  $("#about").click(function(){
    window.location="About.php";
  });
});
$(document).ready(function(){
  $("#video").click(function(){
    window.location="video.php";
  });
});
$(function(){
 $('#entry').mouseover(function(){
  $('.sec1').animate({left:'460px'},300)
 })
}).mouseout(function(){
  $('.sec1').stop().animate({left:'615px'},300) 
}); 
 $(function(){
 $('#e').mouseover(function(){
  $('.sec2').animate({top:'100px'},300)
 })
}).mouseout(function(){
  $('.sec2').stop().animate({top:'255px'},300) 
});
$(function(){
 $('#video').mouseover(function(){
  $('.sec3').animate({left:'615px'},300)
 })
}).mouseout(function(){
  $('.sec3').stop().animate({left:'460px'},300) 
});
$(function(){
 $('#about').mouseover(function(){
  $('.sec4').animate({top:'255px'},300)
 })
}).mouseout(function(){
  $('.sec4').stop().animate({top:'100px'},300) 
});
 </script>
   <style type="text/css">
      
      .slide-out-div,.log {
          padding: 20px;
          width: 250px;
          background: #ccc;
          border: 1px solid #29216d;
      } 
		
   </style>


<title><?php 

print"$title"; ?></title>
<style type="text/css">

.style1 {font-size: 35px}
.style3 {font-size: 20px}
.style4 {font-size: 15px}
.style5 {font-size: 30px}
.style6 {font-size: 12px}
#panel
{
padding:30px;
display:none;
}
#panel
{
padding:5px;
text-align:center;

}



</style>

</head>

<body leftmargin="0">
<div id="content1">
   <a  class="first"><img src='arrow-right.png'/></a>
   <div id="panel"><font color=red face=verdana>YET TO COME</font></div>

</div>
<div id="e">
<img src="final/poll2.png" class=fir2 />
<img src="final/poll1.png" class=sec2 />

</div>

<div id="content">
    <img src=vara1.png />
</div>
<div id="entry">
   <img  src='final/entry2.png' class=fir1 /></a>
   <img src="final/entry1.png" class=sec1 />
</div>
<div id="about">
   <img  src='final/aboutus2.png' class=fir4 /></a>
   <img src="final/aboutus1.png" class=sec4 />
</div>
<div id="video">
   <img  src='final/video2.png' class=fir3 /></a>
   <img src="final/video1.png" class=sec3 />
</div>
<div id='arc'>
<u><a href='All.php'><font face=verdana color=red>ARCHIVES</font></a></u><?php
																		include_once"scripts/connect.php";
																		$arch='select count(*) from entries';
																		$id=mysql_query($arch);
																		$a=mysql_fetch_row($id);
																		$b=$a[0];
																		$str='('.$b.')';
																		echo $str;
																		
																		?><br>
<?php
$jan=0;
$feb=0;
$mar=0;
$apr=0;
$may=0;
$jun=0;
$jul=0;
$aug=0;
$sep=0;
$oct=0;
$nov=0;
$dec=0;

include_once"scripts/connect.php";
$strr='select date from entries';
$id=mysql_query($strr);
while($a=mysql_fetch_row($id))
{
	
	
	$f=explode('-',$a[0]);
	$m=$f[1];
	
	if($m=='01')
	{
		$jan++;
	}
	else if($m=='02')
	{
		$feb++;
	}
	else if($m=='03')
	{
		$mar++;
	}
	else if($m=='04')
	{
		$apr++;
	}
	else if($m=='05')
	{
		$may++;
	}
	else if($m=='06')
	{
		$jun++;
	}
	else if($m=='07')
	{
		$jul++;
	}
	else if($m=='08')
	{
		$aug++;
	}
	else if($m=='09')
	{
		$sep++;
	}
	else if($m=='10')
	{
		$oct++;
	}
	else if($m=='11')
	{
		$nov++;
	}
	else if($m=='12')
	{
		$dec++;
	}


}


?>
<font face=verdana color=blue><?php
									if($jan!=0)
									{
									$str='January'.'('.$jan.')';
									echo $str;
									echo "<br>";
									}
									?></font>
<font face=verdana color=blue><?php
									if($feb!=0)
									{
									$str='Febuary'.'('.$feb.')';
									echo $str;
									echo "<br>";
									}
									?></font>
<font face=verdana color=blue><?php
									if($mar!=0)
									{
									$str='March'.'('.$mar.')';
									echo $str;
									echo "<br>";
									}
									?></font>
<font face=verdana color=blue><?php
									if($apr!=0)
									{
									$str='April'.'('.$apr.')';
									echo $str;
									echo "<br>";
									}
									?></font>
<font face=verdana color=blue><?php
									if($may!=0)
									{
									$str='May'.'('.$may.')';
									echo $str;
									echo "<br>";
									}
									?></font>
<font face=verdana color=blue><?php
									if($jun!=0)
									{
									$str='June'.'('.$jun.')';
									echo $str;
									echo "<br>";
									}
									?></font>
<font face=verdana color=blue><?php
									if($jul!=0)
									{
									$str='July'.'('.$jul.')';
									echo $str;
									echo "<br>";
									}
									?></font>
<font face=verdana color=blue><?php
									if($aug!=0)
									{
									$str='August'.'('.$aug.')';
									echo $str;
									echo "<br>";
									}
									?></font>
<font face=verdana color=blue><?php
									if($sep!=0)
									{
									$str='September'.'('.$sep.')';
									echo $str;
									echo "<br>";
									}
									?></font>
<font face=verdana color=blue><?php
									if($oct!=0)
									{
									$str='October'.'('.$oct.')';
									echo $str;
									echo "<br>";
									}
									?></font>
<font face=verdana color=blue><?php
									if($nov!=0)
									{
									$str='November'.'('.$nov.')';
									echo $str;
									echo "<br>";
									}
									?></font>
<font face=verdana color=blue><?php
									if($dec!=0)
									{
									$str='December'.'('.$dec.')';
									echo $str;
									echo "<br>";
									}
									?></font>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<font face="Arial, Helvetica, sans-serif">
<div id=tab>


<table width="400" align=center >
<tr>
<td colspan="5" align=center >
  <span class="style1"><font face=verdana><?php 

  print"$title"; ?></font><br />
  </span>
  <tr>
 <td colspan=5 align=left>
  <span class="style3"><?php

   print"$date"; ?>
  </span><p></p></td>
</tr>
<tr>
<td colspan="5" align=center>
<img src="images/divide.png" /><br /><br /></td>
</tr>
<tr>
<tr>
<td colspan="5" >
  <p><span class="style4"><font face='verdana'><?php 
  print"$contents"; ?></font>
  </span></p></td>
</tr>
<tr>
<td colspan="5" align=left>
  <p><span class="style5"><font face='verdana'><?php 
 print"$author"; ?></font>
  </span></p></td>
</tr>
<tr>
<td colspan=5 align=left><div class="fb-like" data-href="http://varu.ap01.aws.af.cm" data-send="false" data-width="450" data-show-faces="true"></div>
<tr>
<td colspan="5" >
<img src="images/divide.png" /><br /><br /></td>
</tr>
<tr>
<td colspan=5 align=left><!-- begin htmlcommentbox.com -->
 <div id="HCB_comment_box"> is loading comments...</div>
 <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=(""+window.location || hcb_user.PAGE), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24xyQioc50bbw.wgC2R22h0%2F"+"&opts=16862&num=10");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<!-- end htmlcommentbox.com -->
<tr>
<td width="160" align="left"><span class="style4 black"><?php 
 
print"$Left_move1"; ?></span><br /><br /></td>
  <td width="160" align="right"><span class="style4 black"><?php 
   
print"$Left_move2"; ?></span><br /><br /></td>
  <td width="10" align="right"><br /><br /></td>
  <td width="160" align="left"><span class="style4 black"><?php 
 
print"$right_Move1"; ?></span><br /><br /></td>
  <td width="160" align="right"><span class="style4 black"><?php 
 
print"$right_Move2"; ?></span><br /><br /></td>
</tr>
  
</table>
</div>
</font>

 <div class="slide-out-div">
            <a class="handle" href="http://link-for-non-js-users.html">Content</a>
            <h3>Contact me</h3>
            <p><ul>
				<li><font face=verdana><a href='http://gmail.com'>varadhan198@gmail.com</a></font>
				<li><a><font face=verdana>9488235681</font><a>
				<li><a href='http://github.com/Varu01234'><font face=verdana>www.github.com/Varu01234</font></a>
				</ul></p>
 </div>
 
 
	
</body>

</html>
