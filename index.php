<?php

include 'Telegram.php';

$bot_token = '****************************';
$telegram = new Telegram($bot_token);
$text = $telegram->Text();
$chat_id = $telegram->ChatID();
$data = $telegram->getData();
$callback_query = $telegram->Callback_Query();
$reply_to_message = $telegram->ReplyToMessageID();

if ($text == '/start') {
    $content = ['chat_id' => $chat_id, 'text' => 
    "Hello! 
This Bot only works in
@BhadooCloud Group."];
    $telegram->sendMessage($content);
}

else if ($text == '/start@Bhadoo_Bot') {
    $content = ['chat_id' => $chat_id, 'text' => "Hi!
I am always active but I'm just a talking Bot, to download use other one, try writing / in group.
For Help click /help ."];
    $telegram->sendMessage($content);
}

else if ($text == '/id@Bhadoo_Bot') {
    $content = ['chat_id' => $chat_id, 'text' => "This chat's ID is " . $chat_id ];
    $telegram->sendMessage($content);
}

else if ($text == '/help@Bhadoo_Bot') {
    $content = ['chat_id' => $chat_id, 'text' => "Tell us your problem and we'll try to help you the best way we can (we are group member's :) ).
To search files use
/list <your query here>
List command won't work with Bot Name included.
Click /admin for Support"];
    $telegram->sendMessage($content);
}

else if ($text == '/help@Bhadoo_Bot') {
    $content = ['chat_id' => $chat_id, 'text' => "Tell us your problem and we'll try to help you the best way we can (we are group member's :) ).
To search files use
/list <your query here>
List command won't work with Bot Name included."];
    $telegram->sendMessage($content);
}

else if ($text == '/admin') {
    $content = ['chat_id' => $chat_id, 'text' => "Oops!
/admin only works when clicked not when typed*."];
    $telegram->sendMessage($content);
}

else if ($text == '/admin@Bhadoo_Bot') {
    $content = ['chat_id' => $chat_id, 'text' => "Hi! This Group is powered by Heroku and Google Drive.
Admin is @Bhadoo
Don't message unless any Bots are down."];
    $telegram->sendMessage($content);
}

else if ($text == '/mirror@Bhadoo1_bot') {
    $content = ['chat_id' => $chat_id, 'text' => "No URL or Magnet Found."];
    $telegram->sendMessage($content);
}

else if ($text == '/mirror@Bhadoo2_bot') {
    $content = ['chat_id' => $chat_id, 'text' => "No URL or Magnet Found."];
    $telegram->sendMessage($content);
}

else if ($text == '/mirror@Bhadoo3_bot') {
    $content = ['chat_id' => $chat_id, 'text' => "Oops!
No URL or Magnet Found."];
    $telegram->sendMessage($content);
}

else if ($text == '/mirrorstatus') {
    $content = ['chat_id' => $chat_id, 'text' => "Oops!
Incomplete Command, Please add Bot Name with it."];
    $telegram->sendMessage($content);
}

else if ($text == '/mirror') {
    $content = ['chat_id' => $chat_id, 'text' => "Oops!
Incomplete Command, Please add Bot Name with it. Also Magnet or URL Required."];
    $telegram->sendMessage($content);
}

else if ($text == '/mirrortar') {
    $content = ['chat_id' => $chat_id, 'text' => "Oops!
Incomplete Command, Please add Bot Name with it. Also Magnet or URL Required."];
    $telegram->sendMessage($content);
}

else if ($text == '/cancelmirror') {
    $content = ['chat_id' => $chat_id, 'text' => "Oops!
Incomplete Command, Please add Bot Name with it."];
    $telegram->sendMessage($content);
}
