<?php
include(quot;config.php quot;);

?&gt
&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd&quot;&gt;
&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;&gt;
&lt;head&gt;
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot; /&gt;
&lt;title&gt;WELCOME&lt;/title&gt;
&lt;link href=&quot;css/bootstrap.css&quot; rel=&quot;stylesheet&quot; /&gt;
&lt;link href=&quot;css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; /&gt;
&lt;link href=&quot;font-awesome-4.1.0/css/font-awesome.min.css&quot; rel=&quot;stylesheet&quot; /&gt;
&lt;script src=&quot;js/bootstrap.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;js/jquery-1.11.0.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;js/bootstrap.min.js&quot;&gt;&lt;/script&gt;
&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width,initial-scale=1&quot; /&gt;
&lt;style&gt;
.my_menu .navbar-default
{

padding-right:50px;

background:none;
border:none;

}
.mob-cart-ico {
background: url(images/sprite.png) no-repeat -78px -518px;
width: 32px;

height: 28px;
display: block;

padding: 0px;

padding: 0 15px;
font-size: 1.5em;
margin-left:1320px;
margin-top: 40px;
margin-bottom: -62px;

}

.img-responsive{
margin-top:30px;

}
.conn
{
margin-top:15px;
}

.footer
{

background-color:#CCC;
padding:35px;

}
.footer li
{

list-style:none;

}
.top_menu ul li a:hover
{

color:#FFF;
background-color:#000;

}
.my_menu1
{

background-color:#CCC;

}
body {overflow-x: hidden;}
.boot
{ margin-top:32px;

}

.topps
{

}
.topp
{

margin-top:170px;

}
.logo
{

margin-left:200px;
margin-top: 25px;
margin-bottom: -15px;

}
.icons
{
margin:-3rem;
float: left;
text-align: center;
padding: 5px;
color: white;
text-decoration: none;
font-size: 25px;
width: 120px; /* Set a specific width */

position: absolute;
margin-bottom: -17px;
margin-top: 19px;
}
.header
{

color: #fff;
width: 100%;
padding: 7px 2%;
border-bottom: 1px solid #e5e5e5;
float: left;
background: #ed1c24;
box-sizing: border-box;
text-align: center;
font-size: 12px;
letter-spacing: .5px;
position: fixed;
top: 0;
left: 0;
height: 32px;
z-index: 999;

}

.button{
position: absolute;
padding: 20px 20px;
top: 60%;
left: 50%;
transform: translate(-50%,-50%);
}
.social_icons

{

padding: 0px;
margin-right: 4px;
padding: 0 15px;
font-size: 0.75em;
text-align: center;
clear: both;
padding: 50px;
color: #ccc;
margin-top: 5px;
margin-bottom: -17px;

}
.container
{

padding-left: 49px !important;

padding-right: 50px !important;
margin-left: 50px !important;
margin-right: 50px;
padding: 0 15px;
}
.login
{
margin-left:10px;
margin-top: 55px;
margin-bottom: -45px;
}
&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div class=&quot;header&quot;&gt;
&lt;p&gt;REGISTER AND GET RS.50 AS CASHBACK IN YOUR METRO WALLET | GET ADDITIONAL 5%OFF ON
PREPAID ORDERS.&lt;/p&gt;

&lt;/div&gt;

&lt;a href=&quot;cart.php&quot; class=&quot;mob-cart-ico&quot;&gt;&lt;i class=&quot;fa fa-shopping-cart&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt; &lt;span class=&quot;cart-
text&quot;&gt;My cart

&lt;input type=&quot;hidden&quot; id=&quot;isRegisterLogin&quot; value=&quot;&quot;&gt;
&lt;/span&gt;&lt;/a&gt;

&lt;div class=&quot;login&quot;&gt;
&lt;a href=&quot;adminlogin.php&quot;&gt;LOGIN&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;container-fluid&quot;&gt;
&lt;div class=&quot;container&quot;&gt;
&lt;div class=&quot;col-sm-2&quot;&gt;
&lt;div class=&quot;icons&quot;&gt;

&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-sm-1&quot;&gt;
&lt;a href=&quot;#&quot; class=&quot;social_icons&quot;&gt;
&lt;i class=&quot;fa fa-facebook&quot; style=&quot;font_size:20px; color:#666;&quot;&gt;
&lt;/i&gt;
&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm-1&quot;&gt;
&lt;a href=&quot;#&quot; class=&quot;social_icons&quot;&gt;
&lt;i class=&quot;fa fa-youtube-play&quot; style=&quot;font_size:20px; color:#666;&quot;&gt;
&lt;/i&gt;
&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm-1&quot;&gt;
&lt;a href=&quot;#&quot; class=&quot;social_icons&quot;&gt;

&lt;i class=&quot;fa fa-twitter&quot; style=&quot;font_size:20px; color:#666;&quot;&gt;
&lt;/i&gt;
&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm-1&quot;&gt;
&lt;a href=&quot;#&quot; class=&quot;social_icons&quot;&gt;
&lt;i class=&quot;fa fa-google-plus&quot; style=&quot;font_size:20px; color:#666;&quot;&gt;
&lt;/i&gt;
&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;img src=&quot;img/logo.png&quot; class=&quot;logo&quot;/&gt;
&lt;/div&gt;

&lt;div&gt;
&lt;div class=&quot;col-sm-10 boot&quot;&gt;
&lt;div class=&quot;container-fluid topps&quot;&gt;
&lt;nav class=&quot;navbar navbar-default&quot;&gt;
&lt;div class=&quot;navbar-header positions&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;navbar-toggle&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#mynavbar&quot;&gt;
&lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
&lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;mynavbar&quot;&gt;
&lt;ul class=&quot;nav navbar-nav&quot;&gt;
&lt;li class=&quot;dropdown&quot;&gt;&lt;a class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; href=&quot;#&quot; style=&quot;padding-
right:20px;&quot;&gt;NEWARRIVALS
&lt;span class=&quot;caret&quot;&gt;&lt;/span&gt;&lt;/a&gt;
&lt;ul class=&quot;dropdown-menu&quot;&gt;

&lt;li&gt;&lt;a href=&lt;&quot;sale.php&quot;&gt; sale&lt;/a&gt;&lt;/li&gt;

&lt;/ul&gt;
&lt;li class=&quot;dropdown&quot;&gt;&lt;a class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; href=&quot;#&quot; style=&quot;padding-
right:20px;&quot;&gt;WOMAN
&lt;span class=&quot;caret&quot;&gt;&lt;/span&gt;&lt;/a&gt;
&lt;ul class=&quot;dropdown-menu&quot;&gt;
&lt;li&gt;&lt;a href=&quot;kholapuri.php&quot;&gt;kholapuri&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;lifestyle shoes.php&quot;&gt;lifestyle shoes&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;flats.php&quot;&gt;flats&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;li class=&quot;dropdown&quot;&gt;&lt;a class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; href=&quot;#&quot; style=&quot;padding-
right:20px;&quot;&gt;MEN
&lt;span class=&quot;caret&quot;&gt;&lt;/span&gt;&lt;/a&gt;
&lt;ul class=&quot;dropdown-menu&quot;&gt;
&lt;li&gt;&lt;a href=&quot;formal shoes.php&quot;&gt; formal shoes&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;casual shoes.php&quot;&gt;
Casual Shoes&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;ethnic shoes.php&quot;&gt; ethnic shoes&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;sports shoes.php&quot;&gt; sports shoes&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;party shoes.php&quot;&gt; party shoes&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;li class=&quot;dropdown&quot;&gt;&lt;a class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; href=&quot;#&quot; style=&quot;padding-
right:20px;&quot;&gt;KIDS
&lt;span class=&quot;caret&quot;&gt;&lt;/span&gt;&lt;/a&gt;
&lt;ul class=&quot;dropdown-menu&quot;&gt;
&lt;li&gt;&lt;a href=&quot;casual shoes.php&quot;&gt;casual shoes&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;formal shoes.php&quot;&gt;formal shoes&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;school shoes.php&quot;&gt;school shoes&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;li class=&quot;dropdown&quot;&gt;&lt;a class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; href=&quot;#&quot; style=&quot;padding-
right:20px;&quot;&gt;BRANDS
&lt;span class=&quot;caret&quot;&gt;&lt;/span&gt;&lt;/a&gt;
&lt;ul class=&quot;dropdown-menu&quot;&gt;
&lt;li&gt;&lt;a href=&quot;crocs.php&quot;&gt;crocs&lt;/a&gt;&lt;/li&gt;

&lt;li&gt;&lt;a href=&quot;princess by metro.php&quot;&gt;princess by metro&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;clarks.php&quot;&gt;clarks&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;li&gt;&lt;a href=&quot;about.php&quot;&gt;ABOUTUS
&lt;/a&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/nav&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!---start of carousel----&gt;

&lt;div class=&quot;container-fluid&quot;&gt;
&lt;div id=&quot;mycar&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot; data-interval=&quot;3000&quot;&gt;
&lt;ol class=&quot;carousel-indicators&quot;&gt;
&lt;li data-target=&quot;#mycar&quot; data-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
&lt;li data-target=&quot;#mycar&quot; data-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
&lt;/ol&gt;
&lt;div class=&quot;carousel-inner&quot;&gt;
&lt;div class=&quot;item active&quot;&gt;
&lt;img src=&quot;img/100.jpg&quot; class=&quot;img-responsive&quot; style=&quot;height:350px; width:100%;&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;item&quot;&gt;
&lt;img src=&quot;img/99.jpg&quot; class=&quot;img-responsive&quot; style=&quot;height:350px; width:100%;&quot;/&gt;
&lt;/div&gt;

&lt;/div&gt;
&lt;a class=&quot;left carousel-control&quot; href=&quot;#mycar&quot; data-slide=&quot;prev&quot;&gt;
&lt;i class=&quot;fa fa-chevron-left topp&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;a class=&quot;right carousel-control&quot; href=&quot;#mycar&quot; data-slide=&quot;next&quot;&gt;
&lt;i class=&quot;fa fa-chevron-right topp&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
&lt;/a&gt;

&lt;/div&gt;
&lt;/div&gt;
&lt;!---end of carousel----&gt;

&lt;br /&gt;
&lt;h3 style=&quot;color:#999;text-align:center;&quot;&gt;&lt;i&gt;&lt;B&gt;----- Hot Deals for Men – Get Flat 50% Off-----&lt;/i&gt; &lt;/B&gt;&lt;/h3&gt;
&lt;div class=&quot;container-fluid&quot;&gt;
&lt;div class=&quot;row&quot;&gt;

&lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;
&lt;img src=&quot;img/3.jpg&quot; /&gt;
&lt;p&gt;biofoot 49-647-black causal comfort &amp;#8377;1,344(50%off)&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;
&lt;img src=&quot;img/4.jpg&quot; /&gt;
&lt;p&gt;biofoot 49-8924-brown causal slippers &amp;#8377;2,900(50%off) &lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;
&lt;img src=&quot;img/5.jpg&quot; /&gt;
&lt;p&gt;biofoot 49-8924-black causal slippers &amp;#8377;1,3745(50%off)&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;
&lt;img src=&quot;img/6.jpg&quot; /&gt;
&lt;p&gt; biofoot 49-647-black causal comfort &amp;#8377;9,543(50%off)&lt;/p&gt;
&lt;/div&gt;

&lt;/div&gt;
&lt;h3 style=&quot;color:#999;text-align:center;&quot;&gt;&lt;i&gt;&lt;B&gt;-----kholapuri chappals for women – Get Flat 50% Off-----&lt;/i&gt;
&lt;/B&gt;&lt;/h3&gt;

&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;
&lt;img src=&quot;img/55.jpg&quot; /&gt;
&lt;p&gt;Metro 32-8913-Antic Gold Ethnic Kolhapuris &amp;#8377;1,690&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;
&lt;img src=&quot;img/56.jpg&quot; /&gt;
&lt;p&gt;Metro 32-9133-Black Ethnic Kolhapuris &amp;#8377;1,230&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;
&lt;img src=&quot;img/60.jpg&quot; /&gt;
&lt;p&gt;Metro 32-9134-Black Ethnic Kolhapuris &amp;#8377;1,890&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm-3 col-xs-6&quot;&gt;
&lt;img src=&quot;img/25.jpg&quot; /&gt;
&lt;p&gt;Metro 32-8916-White Ethnic Kolhapuris &amp;#8377;1,239&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;h3 style=&quot;color:#999;text-align:center;&quot;&gt;&lt;i&gt;&lt;B&gt;----- Hot Deals (Newly arrived)– Get Flat 50% Off-----&lt;/i&gt; &lt;/B&gt;&lt;/h3&gt;
&lt;div class=&quot;container-fluid&quot;&gt;
&lt;div class=&quot;row&quot;&gt;

&lt;?php
include &quot;conn.php&quot; ;
// $itemname =$_POST[&#39;itemname&#39;];
// $price = $_POST[&#39;price&#39;];

// $image = $_POST[&#39;file&#39;];
$q = &quot;select * from crudtable &quot; ;
$query = mysqli_query($con,$q);

?&gt;
&lt;html&gt;
&lt;head&gt;

&lt;title&gt;&lt;/title&gt;
&lt;meta charset=&quot;utf-8&quot;&gt;
&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css&quot;&gt;
&lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js&quot;&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div class=&quot;row&quot;&gt;
&lt;br&gt;&lt;br&gt;
&lt;?php
include &quot;conn.php&quot;;

$q = &quot;select * from crudtable &quot; ;
$query = mysqli_query($con,$q);
while ($res = mysqli_fetch_array($query))

{

?&gt;
&lt;div class=&quot;text-center&quot;&gt;
&lt;div class=&quot;col-sm-3 col-sm-6&quot;&gt;
&lt;form name=&quot;f1&quot; method=&quot;post&quot; action=&quot;cart.php?action=add&amp;id=&lt;?php echo $res[&quot;id&quot;]; ?&gt;&quot; &gt;
&lt;h4 class=&quot;text-info&quot;&gt;&lt;img src=&quot; &lt;?php echo $res[&#39;image&#39;]; ?&gt;&quot; height=&quot;200px&quot; width=&quot;200px&quot;&gt;&lt;/h4&gt;
&lt;h4 class=&quot;text&quot;&gt;&lt;?php echo $res[&#39;id&#39;]; ?&gt;&lt;/h4&gt;
&lt;h4 class=&quot;text&quot;&gt;&lt;?php echo $res[&#39;itemname&#39;]; ?&gt;&lt;/h4&gt;
&lt;h4 class=&quot;text&quot;&gt;&amp;#8377;&lt;?php echo $res[&#39;price&#39;]; ?&gt; &lt;/h4&gt;
&lt;!--&lt;form method=&quot;post&quot; action=&quot;cart.php?action=add&amp;id=&lt;?php echo $res[&quot;id&quot;]; ?&gt;&quot;&gt;--&gt;
&lt;input type=&quot;text&quot; name=&quot;quantity&quot; placeholder=&quot;quantity&quot; required class=&quot;form-control&quot; value=&quot;&quot; /&gt;
&lt;input type=&quot;hidden&quot; name=&quot;hidden_name&quot; value=&quot;&lt;?php echo $res[&quot;itemname&quot;]; ?&gt;&quot;/&gt;
&lt;input type=&quot;hidden&quot; name=&quot;hidden_price&quot; value=&quot;&lt;?php echo $res[&quot;price&quot;]; ?&gt;&quot;/&gt;
&lt;input type=&quot;submit&quot; name=&quot;add_to_cart&quot; style=&quot;margin-top:5px;&quot; class=&quot;btn btn-success&quot; value=&quot;add to cart&quot; /&gt;
&lt;/form&gt;
&lt;/div&gt;&lt;/div&gt;
&lt;?php
}
?&gt;

&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
&lt;br/&gt;
&lt;div class=&quot;container-fluid&quot;&gt;
&lt;div class=&quot;row&quot;&gt;
&lt;h1&gt;&lt;b&gt;&lt;i&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp
;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nb
sp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;
nbsp;&amp;nbsp;.........Popular Brands.........&lt;/i&gt;&lt;/b&gt;&lt;/h1&gt;
&lt;/div&gt;
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-sm-4 col-xs-12&quot;&gt;
&lt;hr /&gt;
&lt;h4&gt;The shoes are magnificent and way more beautiful than I was expecting.&lt;/h4&gt;&lt;img src=&quot;img/40.jpg&quot;
class=&quot;img-responsive&quot; /&gt;
&lt;p&gt;&lt;i&gt;The picture does not do this ring credit as it is too much of a close up, the rose detailing is way more precious
than it looks here and the ring is magnificent and way more beautiful than I was expecting. Next day delivery was
perfect, although it came at the very end of my day, and customer support was excellent when my nerves of not
receiving it in time got the better of me. Nothing bad to say about this company or this website at all.&lt;/i&gt;&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;col-sm-4 col-xs-12&quot;&gt;
&lt;hr /&gt;
&lt;h4&gt;The quality is brilliant and my wife loves it.&lt;/h4&gt;&lt;img src=&quot;img/41.jpg&quot; class=&quot;img-responsive&quot; /&gt;&lt;br /&gt;
&lt;p&gt;&lt;i&gt;Ordered this as a birthday present for me wife. It arrived the next day. The quality is brilliant and she loves it.
She is already choosing which charms she wants to go on it, which makes buying her presents a lot easier for myself
in the future We both have Clogau wedding rings and it is a lovely way to continue celebrating our Welsh heritage
now that we have crossed the border.
&lt;/i&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm-4 col-xs-12&quot;&gt;
&lt;hr /&gt;
&lt;h4&gt;To say I am really pleased is an understatement.&lt;/h4&gt;&lt;img src=&quot;img/43.png&quot; class=&quot;img-responsive&quot; /&gt;&lt;br /&gt;
&lt;p&gt;&lt;i&gt;Thank you for delivering my order so quickly and to my delight when opening box I was delighted with
neatness and sparkle, also the presentation of the certificate and story, today a brochure came and I have gone
through it several times to take in assortment. To say I am really pleased is an understatement. I look forward to
buying more jewellery and recommending to my friends and family.&lt;/i&gt;&lt;/p&gt;
&lt;/div&gt;

&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;container-fluid footer&quot;&gt;
&lt;div class=&quot;container&quot;&gt;
&lt;div class=&quot;col-sm-8 col-xs-30&quot;&gt;
&lt;img src=&quot;img/30.jpg&quot; /&gt;
&lt;br /&gt;
&lt;p style=&quot;font-size:18px&quot;&gt; &#39;CRAZINESS IN A SHOE IS GREAT- YOU CAN HAVE MUCH MORE FREEDOM, YOU
CAN EXAGGERATE AND IT DOESN&#39;T FEEL STUPID. BUT TO HAVE TOO MUCH CRAZINESS NEAR YOUR
FACE THAT WOULD JUST FEEL WEIRD.&#39;

&lt;/p&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm-4 col-xs-12&quot;&gt;
&lt;h3&gt;&lt;strong&gt;Quick Links&lt;/strong&gt;&lt;/h3&gt;&lt;br /&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href=&quot;index3.php&quot; style=&quot;color:#000;font-size:18px&quot;&gt;&amp;raquo;HOME&lt;/a&gt;&lt;/li&gt;&lt;br /&gt;
&lt;li&gt;&lt;a href=&quot;about.php&quot; style=&quot;color:#000;font-size:18px&quot;&gt;&amp;raquo;ABOUT US&lt;/a&gt;&lt;/li&gt;&lt;br /&gt;
&lt;li&gt;&lt;a href=&quot;myaccount.php&quot; style=&quot;color:#000;font-size:18px&quot;&gt;&amp;raquo;MY ACCOUNT&lt;/a&gt;&lt;/li&gt;&lt;br /&gt;
&lt;li&gt;&lt;a href=&quot;sale.php&quot; style=&quot;color:#000;font-size:18px&quot;&gt;&amp;raquo;SALE&lt;/a&gt;&lt;/li&gt;&lt;br /&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm-4 col-xs-12&quot;&gt;
&lt;h3&gt;&lt;strong&gt;CONTACT US&lt;/strong&gt;&lt;/h3&gt;&lt;br /&gt;
&lt;p style=&quot;font-size:18px&quot;&gt;
Address: DELHI,INDIA(India)&lt;/p&gt;
&lt;p style=&quot;font-size:18px&quot;&gt;
Email:onlineshoe@gmail.com,
&lt;/p&gt;
&lt;p style=&quot;font-size:18px&quot;&gt;
Phone No. 8837662010.

&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;&lt;!--end of container--&gt;
&lt;/div&gt;&lt;!---end of container fluid--&gt;

&lt;/body&gt;
&lt;/html&gt;