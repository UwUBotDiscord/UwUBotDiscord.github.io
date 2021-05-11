<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>UwUBot Discord</title>
  <meta name="UwUBot Discord" content="UwUBot Discord Widget">
	<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,400;0,900;1,279;1,900&amp;display=swap" rel="stylesheet" /><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script src="./lodash.js"></script><script defer src="./script.js"></script><script defer src="./autoExpand.js"></script><script src="https://cdn.rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
<style>
  html, body {min-height: 100%;}
  body{
    background-image: url("http://assets.uwubot.org/images/background.png");
    background-size: cover;
    background-repeat: no-repeat;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  .box{
    margin: auto;
    width: 35%;
    background-color: #23272a;
    padding: 0px;
    color: white;
    font-size: 20px;
    text-align: center;
    border-radius: 25px;
    border: 1px;
    padding: 1px;
  }
  
  /*border-radius: 20px, 20px, 0, 0;*/
  
  .reloaded-msg
  {
      overflow: none;
  }
  .lightbackground
  {
      text-align: center;
      background-color: #7289da;
      border-radius: 25px     25px      0           0;
  }
  
  .button{
    color: white;
    background-color: #7289da;
    font-size: 20px;
    border: none;
  }
    
  .button2{
    color: white;
    background-color: #7289da;
    font-size: 20px;
    border: none;
    display: inline;
    box-shadow: 0 3px #999;
  }
  .msg-img
  {
      width: 50%;
      height: 50%;
  }
 .msg-img:hover
 {
      width: 100%;
      height: 100%;
      margin: 10px auto 20px;
      display: block;
 }
  
  .button2:active
  {
  background-color: #7289db;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
  }

  a, a:hover, a:link, a:visited, a:active
  {
    text-decoration: none;
    color: white;  
  }
  .avatar
  {
   width: 20%;
   height: 20%;
   border-radius: 50%;
  }
input
{

  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  background-color: #424549;
  box-sizing: border-box;
  border: none;
  color: white;

}
textarea
{

  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  background-color: #424549;
  box-sizing: border-box;
  border: none;
  color: white;

}
</style>
<body>
    <br>
    <br>
    <div class="box">
    <div class="lightbackground">
    <br>
    <img src="http://assets.uwubot.org/images/servericon.png" alt="Server icon" height="128" width="128">
    <p>UwUBot Discord Server</p>
    <br>
    <br>
    </div>
    </br>
    <?php   
    $file="http://uwubot.us.to:8080/members/";

    //read file contents
    $content="
            <code>
                <pre>".htmlspecialchars(file_get_contents("$file"))."</pre>
            </code>";

    $members="Members: ";
    //display
    echo $members . $content;
    ?>
    <?php   
    $file="http://uwubot.us.to:8080/online/";

    //read file contents
    $content="
            <code>
                <pre>".htmlspecialchars(file_get_contents("$file"))."</pre>
            </code>";

    $online="Online: ";
    //display
    echo $online . $content;
    ?>
    <button class="button"><a href='https://discord.gg/eSybT7UuXE' alt='Broken Link'>Join the server "UwUBot"</a></button>
    <br>
    <p></p>
    <br>
    <button class="button"><a href='https://disboard.org/server/802952683299930152' alt='Broken Link'>Disboard</a></button>
    <p></p>
    </div>
    <script>
    $(document).ready(function () {
    setInterval(function () {
        $('#message').load("#message .reloaded-msg > *");
    }, 3000);
    });
    </script>
    <br>
    <br>
    <br>
    <br>

    
<div class="box">
    
<h2>UwUBot Discord Guest Chat</h2>
<h2 style="display: none;">message</h2>
<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p class="validation" id="urlValidation"></p>

<div hidden="">
    
    
    
    
<h2>Embeds</h2>

<div id="embeds"></div>

<p></p>

<div class="button" id="newemb">Add Embed</div>    

<p><label for="weburl"><span class="rqs" title="This is required">*</span> Webhook URL</label> <input id="url" name="weburl" style="width: 20em" type="text" value="https://discord.com/api/webhooks/832018015532744725/pxlU-g6nUtZ9dACuCvRMETSVy4F_j37zgTElfZPb9nKdNNJZ0ObAdbfRiohG68bfr-C4" /></p>
</div>

<div class="inlblock"><label for="text">Avatar URL</label><br> <textarea class="autoExpand" placeholder="Enter avatar URL..." cols="25" data-min-rows="1" id="avatar" maxlength="2000" name="avatar" rows="1"></textarea>
<br>
<div class="inlblock"><label for="nick">Username</label><br> <input id="nick" maxlength="32" name="nick" type="text" value="" Placeholder="Enter Username..." /></div>
<br>
<div class="inlblock"><label for="text">Message Content</label><br> <textarea class="autoExpand" placeholder="Message #guest-chat" cols="25" data-min-rows="1" id="text" maxlength="2000" name="text" rows="1"></textarea><br><button class="button2" id="send">Send ▶</dbutton></div>

<div class="inlblock" hidden="" style="margin-left: 40px;"><label for="tts" style=sn"margin-bottom: 5px;">Use TTS</label> <label class="switch"> <input id="tts" name="tts" type="checkbox" /> </label>
<div class="slider round"></div>
<label class="switch"> </label></div>


    <div class="inlinetext" id="message">
    <div class="reloaded-msg">
    <p></p>
        <?php   
    $file="http://uwubot.us.to:8080/pfp/";

    //read file contents
    $content= file_get_contents($file);
    echo "<img src='$content' class='avatar' >"; 
    ?>    
    
    <br>    
    
        <?php   
    $file="http://uwubot.us.to:8080/message";

    //read file contents
    $content= file_get_contents($file);
    //display
    echo "<p>$content</p>"; 
    ?>
    
    <br>
        
    <?php   
    $file="http://uwubot.us.to:8080/img";

    //read file contents
    $content= file_get_contents($file);
    //display
    echo "<img class='msg-img' src='$content' alt='$content'>"; 
    ?>
    <br>
    <br>
    <br>
    </div>
    </div>
    </div>
</body>
</html>