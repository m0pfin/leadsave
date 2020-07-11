<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <style>
body {
    margin:0px;
    padding:0px;
    border:1px solid #<?=$_GET['color'];?>;
    -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; }
.wrap {margin:auto;width:100%;height:100%;}
p{
    margin:0px 0px 5px 0px;
    padding-left:5px;
    font-size:15px;
    font-family: 'PT Sans', sans-serif;}
h1{
    text-align:center;
    color:#fff;
    background:#<?=$_GET['color'];?>;
    text-transform: uppercase;
    margin-top:0px;
    margin-bottom:10px;
    height:40px;
    line-height:40px;
    font-size: 18px;
    font-weight:bold;
    font-family: 'PT Sans', sans-serif;}
.order_form {
    padding-left: 16px;
    padding-right: 16px;
    margin: 0px;
    font-family: 'PT Sans', sans-serif;}
.order_form input{
    width:90%;
    padding:5px;
    margin: 0px 10px 10px 10px;
    border: 2px solid #<?=$_GET['color'];?>;
    font-size:18px;
    -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; 
    background: #fff;
    display: block; 
    box-sizing: border-box;
    height: 30px;}
.order_form .clear{clear: both;}
.ifr_button{
    display: block;margin: 20px auto; 
    border:none; outline:none;color: #fff;font-size:24px;
    font-family: 'PT Sans', sans-serif;
    text-decoration: none;text-align: center;width: 180px;height: 51px;
    line-height: 48px;background: #<?=$_GET['color'];?>;font-weight:600;
    text-transform: uppercase;
    -webkit-border-radius: 30px;-moz-border-radius: 3px;border-radius: 30px;cursor: pointer;}	
    </style>
</head>
<html>

<body>
    <div class="wrap">
        <h1>Bestellung</h1>
        <form action="order.php" method="post" class="order_form" target="_blank">
            <p>Name:</p>
            <input class="form_input" value="" name="name" type="text" required="1">
            <p>Mob:</p>
            <input class="form_input" value="+49" name="phone" type="text" required="1">
            <div class="clear"></div>
            <input type="hidden" name="offer_id" value="4"/>
            <input type="hidden" name="country" value="AT"/>
            <input type="hidden" name="utm_medium" value="<?=$_GET['utm_medium'];?>"/>
            <input type="hidden" name="utm_campaign" value="<?=$_GET['utm_campaign'];?>"/>
            <input type="hidden" name="fb_pixel" value="<?=$_GET['fb_pixel'];?>"/>

            <input type="hidden" name="partners" value="<?=$_GET['partners'];?>"/>
            <input type="hidden" name="subid" value="<?=$_GET['subid'];?>"/>
            <button class="ifr_button" type="submit">Bestellung</button>
        </form>
    </div>
</body>
</html>
