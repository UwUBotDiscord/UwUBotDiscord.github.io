#variables
Date="$(date '+DATE: %D%nTIME: %T')"
BotStatus=""
DiscordServerStatus=""

#Node
node /home4/uwubotor/public_html/status/detect.js

#check files
if [ -f /home4/uwubotor/public_html/status/bot ]; then
  echo -e "Date: ${date}/nMessage: Bot status file found" >> /home4/uwubotor/public_html/status/log
else
  echo -e "Date: ${date}/nMessage: Bot status file not found" >> /home4/uwubotor/public_html/status/log
fi

if [ -f /home4/uwubotor/public_html/status/server ]; then
  echo -e "Date: ${date}/nMessage: Server status file found" >> /home4/uwubotor/public_html/status/log
  BotStatus="online"
else
  echo -e "Date: ${date}/nMessage: Server status file not found" >> /home4/uwubotor/public_html/status/log
  BotStatus="offline"
fi

#Create page
echo "
<!DOCTYPE html>
<html lang='en-US'>
  <head>
    <meta charset='UTF-8'>
    <style>
      footer {
  	    text-align: center;
 	    padding: 3px;
  	    background-color: #157878;
  	    color: white;
	  }
    </style>
    <title>Status page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='theme-color' content='#157878'>
    <link rel='stylesheet' href='https://oxmc.github.io/assets/css/style.css?v=51a255c0822bccea2af39531718d741610ae429f'>
    <link rel='shortcut icon' type='image/gif' href='http://assets.uwubot.org/images/servericon.png'>
  </head>
  <body>
    <section class='page-header'>
      <h1 class='project-name'>Bot status</h1>
      <h2 class='project-tagline'>This page will tell you if the bot is online</h2>
    </section>
    <section class='main-content'>
      <h1 id='oxmcgithubio'>Bot:</h1>
      <p> ${BotStatus} <p>
      <h1 id='oxmcgithubio'>Server:</h1>
      <p> ${DiscordServerStatus} <p>
    </section>
    <footer>
      <p>Author: oxmc</p>
    </footer>
  </body>
</html>
" > /home4/uwubotor/public_html/status.html