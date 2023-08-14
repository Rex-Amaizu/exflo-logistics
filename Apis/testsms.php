<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BetaSMS API Form Method</title>
<style type="text/css">
body
{
 margin:0;
 padding:0;
 font:14px Arial, Helvetica, sans-serif;
}
form
{
 background-color:#F5F5F5;
 padding:30px;
 display:table;
 margin:10px auto;
 border-radius:5px;
}
form p
{
 padding:0;
 color:#464646;
}
form input,form textarea
{
 padding:8px 5px;
 width:100%;
 border:1px solid #ccc;
 border-radius:5px;
}
form input[type="submit"]
{
 width:auto;
 float:right;
 margin:5px 0 5px 5px;
 padding:10px 15px;
}
form input[type="submit"]:active
{
 font-weight:bold;
}
</style>
</head>
<body>
         <form method="post" action="SmsApi.php">
               <p>Email/Username : </p>
                <input type="email" class="login-username" placeholder="email" name="username"/>
                <p>Password : </p>
                <input type="password" placeholder="password"  name="password"/>
            <p>Recipient(s) : ( example: 234803..., 234802...)</p>
                <input type="text"  placeholder="Recipients" name="mobiles"/>
             <p>Sender : (example : GIT-SMS) max length : <b>11</b></p>
                <input type="text"  placeholder="Sender" name="sender" maxlength="11"/>
             <p>Message : max length (<b id="chars-left-message">160</b>) </p>  
             <textarea  placeholder="Message" name="message" rows="7" maxlength="160"></textarea> 
             <input type="submit" value="Send"/>
          </form>
</body>
</html>