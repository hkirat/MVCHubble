<?php
session_start();
$name=$_SESSION["userid"];
?>

<html>
<head>
<style>
 .textbox { 
    border: 2px; 
    border-radius: 5;
    height:70px; 
    width: 700px; 

  } 
.a1{

	 position: relative;
    left: 450px;top:0px;z-index: 1;
}
.a2{-webkit-animation:mythird 5s  infinite; /* Chrome, Safari, Opera */
    animation: mythird 5s;
	 position: relative;
    left: 10px;top:3px;z-index: 1;
}
@-webkit-keyframes mythird {
    0%,100%   {left:105px; transform: rotate(0deg);}
50%  {left :324px; transform: rotate(-180deg);}
}
.a3{ -webkit-animation:mysecond 5s  infinite;
    animation: mysecond 5s;
	 position: relative;
    left: 312px;top:3;z-index: 1;
}
@-webkit-keyframes mysecond {
	    0%,100%   {position: relative;left :240px;right:1px;}
50%  {position: relative;left:20px; }
    }
body {
       -webkit-animation:myfirst 20s linear infinite;
}

@-webkit-keyframes myfirst {
0%,100%   {background:rgb(100,149,255);}
50%  {background:purple;}
}
</style>
<title>
HubbleH
</title>
</head>
<body>
<div style=" margin:0 auto;">
<span class="a1">
<img src="./assets/images/UBBLE.png">
</span>
<span CLASS="a2">
<img src="./assets/images/H1.png">
</span>
<span CLASS="a3">
<img src="./assets/images/H1.png">
</span>
</div>
<center>
<form  action="/newPost" method="post">
<input class="textbox"type="text" name="message" autocomplete='off'> 
<input type="hidden" name="user" value=<?php echo $name; ?>> 
<br><br>
<input  type="submit">
</form>

{{message}}

{% for post in posts %}

<br>
<div style="width:800px;font-family: monospace; margin:0 auto;background-color:silver;border-radius: 7;box-shadow: 2px 2px 2px #888888;"><font size="5">	<font color="white"><?php
<p>{{post.user}}</p>
{{post.message}}

</div>
{% endfor %}

{{message}}
</center>
</body>
</html>
