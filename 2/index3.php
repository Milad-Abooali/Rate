<?php
###############################################
#    08:56 ب.ظ Wednesday, September 25, 2013  #
#    Name: Rate by M.Abooali (www.codebox.ir) #
#    Version: 1.2.0                           #
###############################################

// Do not change this sections
     require 'config.php'; 
   mb_internal_encoding('UTF-8');
   mb_http_output('UTF-8');
   mb_http_input('UTF-8');
   mb_language('uni');
   mb_regex_encoding('UTF-8');
   ob_start('mb_output_handler');
  require 'jdf.php';
  $h_date             =  jdate('l j F Y');
$site = "talanews.com";
?>
<html>
     <head>
          <title><?php echo $p_title; ?></title>
          <link rel='shortcut icon' href='favicon.ico' />
          <link rel='stylesheet' href='style/style.css' />
     </head>
     <body onload="countDown();">
         <script language="JavaScript" type="text/javascript">  
         var count =30  
         var redirect="index3.php"  
         function countDown(){  
          if (count <=0){  
           window.location = redirect;  
          }else{  
           count--;  
           document.getElementById("timer").innerHTML = count+" ثانیه مانده تا به روز رسانی صفحه"   
           setTimeout("countDown()", 1000)  
          }  
         }  
         </script>
          <div id="header">
               <div id="title">
               <h1><?php echo $p_title; ?></h1>
               </div>
               <div id="menur" class="menu">
                    <a  href="<?php echo $s_home; ?>">صفحه نخست</a>
                    <a  href="index.php">فیمت طلا</a>
                    <a  href="index2.php">قیمت سکه</a>
                    <a  href="index3.php">قیمت ارز</a>
                    <a  href="index4.php">قیمت خودرو</a>
               </div>
               <div id="menuc" class="menu">
                    <?php echo $h_date;?>
               </div>
               <div id="menul" class="menu">
                    <span id="timer"></span>
               </div>
          </div>
          <div id="body">
               <div id="toppb">
               <a href="<?php echo $bannel_11_link;?>"><img src="<?php echo $bannel_11_image;?>" alt="<?php echo $bannel_11_alt;?>" /></a>
               </div>
               <div id="topb">
               <a href="<?php echo $bannel_1_link;?>"><img src="<?php echo $bannel_1_image;?>" alt="<?php echo $bannel_1_alt;?>" /></a>
               <a href="<?php echo $bannel_2_link;?>"><img src="<?php echo $bannel_2_image;?>" alt="<?php echo $bannel_2_alt;?>" /></a>
               </div>
               <div id="botb">
               <a href="<?php echo $bannel_3_link;?>"><img src="<?php echo $bannel_3_image;?>" alt="<?php echo $bannel_3_alt;?>" /></a>
               <br /><br />
               <a href="<?php echo $bannel_4_link;?>"><img src="<?php echo $bannel_4_image;?>" alt="<?php echo $bannel_4_alt;?>" /></a>
               </div>
               <div id="cotb">
               <a href="<?php echo $bannel_13_link;?>"><img  width="120"height="auto" src="<?php echo $bannel_13_image;?>" alt="<?php echo $bannel_13_alt;?>" /></a>
               <a href="<?php echo $bannel_14_link;?>"><img  width="120"height="auto" src="<?php echo $bannel_14_image;?>" alt="<?php echo $bannel_14_alt;?>" /></a>
               </div>
               <div id="contop">
               <h2><?php echo $r_title_2; ?></h2>
<?php
	$page = file_get_contents("http://www.talanews.com/fa/index.php");
	 preg_match_all('/<table class="gold">.*?<\/[\s]*table>/s', $page, $contents);
	 $tala = $contents[0][2];
	 $tala = str_replace('<img src="http://www.talanews.com/fa/images/utime.gif" title="بروز رسانی" alt="بروز رسانی" style="vertical-align: middle;">',
                          '<img src="style/lite.png" title="بروز رسانی" alt="بروز رسانی" style="vertical-align: middle;">',
                           $tala);
	 $tala = str_replace('▲<br/>','<br/>', $tala); 
	 $tala = str_replace('▼<br/>','<br/>', $tala); 
	 $tala = str_replace('◄<br/>','', $tala);
	 $tala = str_replace('text-align:center;','display:none;', $tala);	 
	 $tala = str_replace('◄','<img src="style/noco.png" title="ثابت" alt="◄" style="vertical-align: middle;" class="ud">', $tala);
	 $tala = str_replace('▲','<img src="style/up.png" title="افزایش" alt="▲" style="vertical-align: middle;" class="ud">', $tala);
	 $tala = str_replace('▼','<img src="style/down.png" title="کاهش" alt="▼" style="vertical-align: middle;" class="ud">', $tala);
	 $tala = str_replace('بروزرسانی:',' قیمت ها به روز شده در ', $tala);
	$tala = str_replace('تومان','واحد: تومان', $tala);
	 
	echo "<script type=\"text/javascript\" src=\"http://www.google.com/jsapi\"></script>
	<script type=\"text/javascript\">google.load(\"mootools\", \"1.1.2\");</script>
	<script type=\"text/javascript\">
	window.addEvent('domready', function(){ var JTooltips = new Tips($$('.hasTip'), { maxTitleChars: 50, fixed: false}); });
	</script>
	<style>.tool-tip{direction:rtl;text-align:center;font-size:10px;font-family:Tahoma;background:#474848;border:1px solid #252525;color:#ffffff;}table.gold{font-size:10px;font-family:Tahoma;direction:rtl;color:#000;width:100%;text-indent:5px;}th.gp0,th.gp1,th.gp2{background:#666;color:#fff;font-weight:bold;text-align:right;padding:0;}tr.d0{background:#eee;line-height:17px;}tr.d1{background:#fff;line-height:17px;}.d0:hover,.d1:hover{background:#999;}tr.d0:hover,tr.d1:hover{color:white;}.dred:hover{color:#fff;background:#000;}</style>\n".$tala;
 ?>
               </div>
               <div id="cban" style="margin-top:35px;">
                <a href="<?php echo $bannel_12_link;?>"><img src="<?php echo $bannel_12_image;?>" alt="<?php echo $bannel_12_alt;?>" /></a>
               </div>
               <div id="rss" style="margin-top:75px;">
               <h2><?php echo $rss_title; ?></h2>

<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load($rss_link);

$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=9; $i++)
  {
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;

  echo ("<p class='rss'>» <a href='" . $item_link
  . "'>" . $item_title . "</a>");
  echo ("<br />");
  echo ("</p>");
  }
?>
               </div>
          </div>
          <div id="footer" style="margin-top:60px;">
               <div id="copy">
                    <?php echo $r_footer; ?>
               </div>
          </div>
 </body></html>