<?php

ob_start();
$API_KEY = "7283631968:AAGOJaiPIpsXeUxaAV902aQx2nhtEzIvWa0";
define('API_KEY',$API_KEY);
echo "<a href='https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."'>setwebhook</a>";
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}
else
{
return json_decode($res);
}
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$reply = $message->reply_to_message->message_id;
$message = $update->message;
$text = $message->text;
$message_id2 = $update->callback_query->message->message_id;
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
$admin = uu;
$name = $update->message->from->first_name;
$username = $update->message->from->username;
$date = "https://api.rangatiratan.ga/tiq.php";
$g = file_get_contents($date);
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$js = json_decode($g);
$da = $js->Date;
$time = $js->Time;
$bot = bot('getme',['bot'])->result->username;
echo "<br><a  href='https://t.me/$bot'>@$bot</a>";
$i = "
• Now send video or photo link 🔱 •
• الان ارسل رابط الفيديو او الصورة 🔱•";
$m = "
• Now send video  link 🔱 •
• الان ارسل رابط الفيديو🎥،";
$ch = "@BoTs0";

$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
$username = $update->message->from->username;
$reply = $message->reply_to_message->message_id;
$list = file_get_contents("blocklist.txt");
$rep = $message->reply_to_message->forward_from; 
$id = $rep->id; 
$sudo = 500144557;
$ch = "@BoTs0";
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"• عذرا - sorry⚠️
• Subscribe first💗
• اشترك اولا
Ch: - @BoTs0",
]);
  bot("sendmessage",[
    "chat_id"=>$sudo,
    "text"=>"- العضو قام بألاشتراك في قناة البوت ، 📌
- معلومات العضو الذي قام بألاشتراك ؛

• الاسم ؛ $name 
• الايدي ؛ $from_id
• المعرف ؛ @$username
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎	",
    ]);
    die('مشيولي');
}

$ebu = explode("\n",$list);
if(in_array($from_id,$ebu)){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"▪️ انت محظور من قبل صاحب البوت ،
▫️ لا يمكنك استخدام البوت ، 🚫
 ﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🌐؛](https://t.me/$chs)
 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
      ]);
    
}
if ($text == '/start'){
  bot('sendMessage',[
  'chat_id' => $chat_id,
  'text' => "• *Welcome to the download bot. Please choose your language*

• مرحبا بك في بوت التحميل. اختر لغتك",
  'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'Arabic🇮🇶','callback_data'=>'ar'],['text'=>'English🇱🇷','callback_data'=>'en']]
]  
])
 ]);
}
if($data == "en"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*Please choose a site to download from*",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"Instagram",'callback_data'=>'b']],
[["text"=>"Musically",'callback_data'=>'c'],["text"=>"YouTube",'callback_data'=>'d']],
[["text"=>"Facebook",'callback_data'=>'facebook'],["text"=>"الـxnxx",'callback_data'=>'xnxx']],
[["text"=>"help",'callback_data'=>'m']]
] 
]) 
]); 
}
if($data == 'm'){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'• Just send the video link
• The xnxx download must be 2 minutes',
 'show_alert'=>true
 ]);      
}
if($data == "ar"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"• مرحبا بك مجددا . قم بأختيار احد المواقع",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"الانستكرام",'callback_data'=>'b']],
[["text"=>"الميوزكلي",'callback_data'=>'c'],["text"=>"اليوتيوب",'callback_data'=>'d']],
[["text"=>"الفيسبوك",'callback_data'=>'facebook'],["text"=>"الـxnxx",'callback_data'=>'xnxx']],
[["text"=>"مساعده",'callback_data'=>'e']]
] 
]) 
]); 
}
if($data == 'j'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
- اهلا بك عزيزي في بوت التحميل
- اختر احد المواقع للتحميل منه",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"الانستكرام",'callback_data'=>'b']],
[["text"=>"الميوزكلي",'callback_data'=>'c'],["text"=>"اليوتيوب",'callback_data'=>'d']],
[["text"=>"الفيسبوك",'callback_data'=>'facebook'],["text"=>"الـxnxx",'callback_data'=>'xnxx']],
[["text"=>"مساعده",'callback_data'=>'e']]
] 
]) 
]); 
}
if (preg_match('/facebook.com\/[a-z1-9.-_]+/', $text)) {
    $get = file_get_contents('https://keepvid.com/?url='.$text);
    $ex  = explode('class="al"', $get);
    $url = explode('-- ', str_replace('>Original MP4 ', '', $ex[3]));
    $url = explode('href="', $url[0]);
    $url = explode('"', $url[1]);
    $url = trim($url[0]);
    if (bot('sendVideo',[
        'chat_id'=>$chat_id,
        'video'=>$url,
        'caption'=>'By : MaTThEw'
        ])->ok == true) {
        echo "string";
    } elseif(bot('sendDocument',[
        'chat_id'=>$chat_id,
        'document'=>$url,
        'caption'=>'By : MaTTheW'
        ])->ok == true) {
        echo "string";
    } else {
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"- an error occurred❌
- حدث خطأ❌" 
        ]);
    }
}
if($data == 'a' or $data == 'b' or $data == 'c'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=> "$i",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'• رجوع - Back','callback_data'=>'j']]    
]    
])
]);
}
if($data == 'd'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"$m",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'• رجوع - Back','callback_data'=>'j']]    
]    
])
]);
}
if($data == 'e'){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'• عزيزي قم بأختيار الموقع الي تريده
• بعدها قم بأرسال رابط الفيديو للتحميل',
 'show_alert'=>true
 ]);      
}
if(preg_match('/.*instagram\.com.*/i',$text)){
 bot('sendmessage',[
  'chat_id'=>$chat_id,
    'text'=> "• جار التحميل . . .
    • loading . . .",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"تابعنا - Follow us🌿'",'url'=>"t.me/BoTs0"]],   
        ]
    ])
    ]);
bot('sendphoto',[
 'chat_id'=>$chat_id,
  'photo'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"تابعنا - Follow us🌿'",'url'=>"t.me/BoTs0"]],   
        ]
    ])
    ]);
 bot('sendvideo',[
  'chat_id'=>$chat_id,
   'video'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
        'inline_keyboard'=>[
 [['text'=>"تابعنا - Follow us🌿'",'url'=>"t.me/BoTs0"]],
        ]
    ])
    ]);
    }
    
if($text != '/start' and $text != '/help' and $text != '/admin'){
	if(preg_match('/([a-z])|([A-Z])/i',$text)){
    $text = trim($text,'@');
    $insta = json_decode(file_get_contents("http://webservice.lorddeveloper.ir/instagram/?username=$text"));
$bio = $insta->results->biography;
$namei = $insta->results->full_name;
$follower = $insta->results->edge_followed_by->count;
$follows = $insta->results->edge_follow->count;
$profile = $insta->results->profile_pic_url_hd;
$follower = $insta->results->edge_followed_by->count;
$follows = $insta->results->edge_follow->count;
$postc = $insta->results->edge_owner_to_timeline_media->count;
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$profile",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$namei",'callback_data'=>"namei#".$text]],
[['text'=>"• عدد المنشورات ؛ $postc 📢 '",'callback_data'=>"post"]],
[['text'=>"• البايو ، 📬 '",'callback_data'=>"bio#".$text]],
[['text'=>"$follower Followers",'callback_data'=>"followers"],['text'=>"$follows Following",'callback_data'=>"following"]],
]
])
]);
}
}
$ssa = explode('#', $data);
if($ssa[0] == "bio"){
	$insta = json_decode(file_get_contents("http://webservice.lorddeveloper.ir/instagram/?username=".$ssa[1]));
	$bio = $insta->results->biography;
	bot('sendmessage', [
			  'chat_id'=>$chat_id2,
  'message_id'=>$message_id2,
			'text' => "*$bio*",
			'parse_mode'=>"MarkDown",
			'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تابعنا - Follow us🌿'",'url'=>"t.me/BoTs0"]], 	
		]
])
]);
}

if($ssa[0] == "namei"){
	$insta = json_decode(file_get_contents("http://webservice.lorddeveloper.ir/instagram/?username=".$ssa[1]));
	$namei = $insta->results->full_name;
	bot('sendmessage',[
			  'chat_id'=>$chat_id2,
			'text' => "*$namei*",
			'parse_mode'=>"MarkDown",
]);
}
				
		if($data == "followers"){
			bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text'=>$as[array_rand($as,1)],
		]);     
		}
		if($data == "post"){
			bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text'=>$as[array_rand($as,1)],
		]);     
		}
		if($data == "following"){
			bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text'=>$as[array_rand($as,1)],
		]);    
		}
		 if(preg_match('/.*musical\.ly.*/i',$text)){
 bot('sendmessage',[
  'chat_id'=>$chat_id,
    'text'=>"• جار التحميل . . .
    • loading . . .",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"تابعنا - Follow us🌿'",'url'=>"https://t.me/BoTs0"]],   
        ]
    ])
    ]);
bot('sendphoto',[
 'chat_id'=>$chat_id,
  'photo'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"تابعنا - Follow us🌿",'url'=>"https://t.me/BoTS0"]],   
        ]
    ])
    ]);
 bot('sendvideo',[
  'chat_id'=>$chat_id,
   'video'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"تابعنا - Follow us🌿",'url'=>"https://t.me/BoTs0"]],    
        ]
    ])
    ]);
    }
    if($text != '/start'){
	if(preg_match('/(http(s|):|)\/\/(www\.|)yout(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $text)){
            $url = json_decode(file_get_contents('http://wapi.ga/dlv2/?url='.$text)); 
            if ($url->status =='ok') {
            	$duration = explode(':',$url->resutl->duration);
            	$dura = (int)$duration[0];
               if($dura <= 10){ bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>'📢┇يرجى الانتظار قليلا ،'
     ]);
               file_put_contents($chat_id.'.mp4',file_get_contents( $url->result->video[2]->url )); 
    bot('sendphoto',[
      'chat_id'=>$chat_id,
        'photo'=>$text,
        'caption'=>"📌┇الان قم بأختيار احد الصيغ ؛",
               'reply_markup'=>json_encode([
               'inline_keyboard'=>[
               [['text'=>'🎤┇ملف صوتي ؛','callback_data'=>"au##$text"], ['text'=>'🎼┇تسجيل صوتي ؛','callback_data'=>"vo##$text"] ],[['text'=>'🎬┇فيديو ،','callback_data'=>"vi##$text"] ]
               ]
               ])]);
                unlink($chat_id.'.mp4');
            }
            }
      } else {
      	$item = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/search?part=snippet&q=".urlencode($text)."&type=video&key=AIzaSyBdKFK59eajOVchi0TpuKkNGbYx4ZpiduI&maxResults=10"))->items;
      	$keyboard["inline_keyboard"]=[];
      	for ($i=0; $i < count($item); $i++) { 
      		$keyboard["inline_keyboard"][$i] = [['text'=>$item[$i]->snippet->title,'switch_inline_query_current_chat'=>$item[$i]->id->videoId]];
      	}
      	$reply_markup=json_encode($keyboard);
      	bot('sendMessage',[
      		'chat_id'=>$chat_id,
      		'text'=>'',
      		'reply_markup'=>$reply_markup
      	]);
      }
    }

$pt = explode('##',$data);
if($pt[0] == 'au'){
	 $text = $pt[1];
	 $url = json_decode(file_get_contents('http://wapi.ga/dlv2/?url='.$text)); 
	 bot('sendMessage',[
      'chat_id'=>$chat_id2,
      'text'=>'📢┇يرجى الانتظار قليلا ،'
     ]);
               file_put_contents($chat_id2.'.mp3',file_get_contents( $url->result->video[2]->url )); bot('sendaudio',['chat_id'=>$chat_id2,'audio'=>new CURLFile($chat_id2.'.mp3'),'performer'=>"@iiiiz",'title'=>$url->result->info->title,'duration'=>$url->result->info->duration ,
 ]);
                unlink($chat_id2.'.mp3');
}
if($pt[0] == 'vo'){
	 $text = $pt[1];
	 $url = json_decode(file_get_contents('http://wapi.ga/dlv2/?url='.$text)); 
	 bot('sendMessage',[
      'chat_id'=>$chat_id2,
      'text'=>'📢┇يرجى الانتظار قليلا ،'
     ]);
              file_put_contents($chat_id2.'.ogg',file_get_contents( $url->result->video[2]->url )); 
       bot('sendvoice',[
         'chat_id'=>$chat_id2,
           'voice'=>new CURLFile($chat_id2.'.ogg'), 
 ]);
                unlink($chat_id2.'.ogg');
}
if($pt[0] == 'vi'){
	$text = $pt[1];
	 $url = json_decode(file_get_contents('http://wapi.ga/dlv2/?url='.$text)); 
	 bot('sendMessage',[
      'chat_id'=>$chat_id2,
      'text'=>'📢┇يرجى الانتظار قليلا ،'
     ]);
              file_put_contents($chat_id2.'.mp4',file_get_contents( $url->result->video[2]->url ));
      bot('sendvideo',[
        'chat_id'=>$chat_id2,
           'video'=>new CURLFile($chat_id2.'.mp4'),
 ]);                unlink($chat_id2.'.mp4');
}
if ($update->inline_query) {
	$info = json_decode(file_get_contents("http://wapi.ga/dlv2/?url=https://www.youtube.com/watch?v=".$update->inline_query->query))->result;
	$title = $info->info->title;
	$view_count = $info->info->view_count;
	$duration = $info->info->duration;
	$like_count = $info->info->like_count;
	bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'article',
                'id'=>base64_encode(rand(5,555)),
                'title'=>$title,
                'thumb_url'=>$info->video[0]->img,
                'description'=>'👁‍🗨 = '.$view_count.' - 🕐 = '.$duration.' - 👍🏾 = '.$like_count,
             'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"https://www.youtube.com/watch?v=".$update->inline_query->query],
          ]])
        ]);
}
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
$admin = 500144557;
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
  if ($text == "/admin" and $chat_id == $admin ) {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
      'text'=>"
☑️￤اهلا عزيزي :- المطور .
▫️￤اليك الاوامر الان حدد ماتريده 📩
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'رسالة للكل ','callback_data'=>'ce']],
[['text'=>'عدد الاعضاء ','callback_data'=>'co']],
            ]
            ])
        ]);
}
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
      'text'=>"
☑️￤اهلا عزيزي :- المطور .
▫️￤اليك الاوامر الان حدد ماتريده 📩
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'رسالة للكل ','callback_data'=>'ce']],
[['text'=>'عدد الاعضاء ','callback_data'=>'co']],
            ]
            ])
]);
file_put_contents('usr.txt', '');
}
#                   المشتركين                   #
if($data == "co" and $update->callback_query->message->chat->id == $admin ){ 
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"
        عدد مشتركين البوت📢 :- [ $c ] .
        ",
        'show_alert'=>true,
]);
}
#                   رسالة للكل                   #
if($data == "ce" and $update->callback_query->message->chat->id == $admin){ 
    file_put_contents("usr.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$update->callback_query->message->chat->id,
    'message_id'=>$update->callback_query->message->message_id,
    'text'=>"▪️ ارسل رسالتك الان 📩 وسيتم نشرها لـ [ $c ] مشترك . 
   ",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>' الغاء 🚫 •','callback_data'=>'off']]    
        ]
    ])
    ]);
}
if($text and $modxe == "yas" and $chat_id == $admin ){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
    file_put_contents("usr.txt","no");

} 
}