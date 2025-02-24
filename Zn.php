<?php 
ob_start();
$API_KEY = "7283631968:AAGOJaiPIpsXeUxaAV902aQx2nhtEzIvWa0";#توكن البوت
define('API_KEY',$API_KEY);
echo "<a href='https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."'>setwebhook</a>";
echo file_get_contents("https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
    $tzzzz = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$tzzzz";
        $medo = file_get_contents($url);
        return json_decode($medo);
}
$update   = json_decode(file_get_contents('php://input'));
$message  = $update->message;
$text     = $message->text;
$chat_id  = $message->chat->id;
$name     = $message->from->first_name;
$user     = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);

if ($text == '/start' && !in_array($chat_id, $band)){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
         'text' => "- اهلا بك ؛ [$name](tg://user?id=$chat_id)
- ارسل اسمك بالانكليزيةه وانتظر قليلا ، 🕊 '
- يمنع استخدام الاحرف العربية او الرموز ، 📄'
- يحتوي البوت على اكثر من *4* انوع ، 🌀'
- ارسل اسمك وقم بتجربته بنفسك ، 🌼'
• يتم اضافةه حروف جديد كل يوم ،♥!' 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا ، 📢 '](https://t.me/M1_M2S)",
'parse_mode' => "MarkDown", 'disable_web_page_preview' => true, 'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "• اضغط هنا وتابع قناة البوت ، 🔰'", 'url' => "https://t.me/M1_M2s"]], ]]) ]);
}
if($_GET['s']){
    $text = 'sssasa';
    echo $count = count($text); 
}
if($text != '/start'and$text!='/us' and $text!='🏷 الرموز'){
  $items = ['𝆔𝆕','𝆮','𝆯𝆴','𝆳𝆺','𝆹𝅥𝅯','𝆺𝅥𝅮','𝆹𝅥𝅮','𝆺𝅥𝅯','𝇕','𝅘𝅥𝅯','𝅘𝅥𝅮','𝄵','𝄮','𝄬','𝄋','𖠛','𖠜','𖠲','𖡥'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $k = strtolower('a','𝐴',$k); 
 $a = str_replace('b','𝐵',$k); 
 $k = str_replace('c','𝐶',$k); 
 $k = str_replace('d','𝐷',$k); 
 $k = str_replace('e','𝐸',$k); 
 $k = str_replace('f','𝐹',$k); 
 $k = str_replace('g','𝐺',$k); 
 $k = str_replace('h','𝐻',$k); 
 $k = str_replace('i','𝐼',$k); 
 $k = str_replace('j','𝐽',$k); 
 $k = str_replace('k','𝐾',$k); 
 $k = str_replace('l','𝐿',$k); 
 $k = str_replace('m','𝑀',$k); 
 $k = str_replace('n','𝑁',$k); 
 $k = str_replace('o','𝑂',$k); 
 $k = str_replace('p','𝑃',$k); 
 $k = str_replace('q','𝑄',$k); 
 $k = str_replace('r','𝑅',$k); 
 $k = str_replace('s','𝑆',$k); 
 $k = str_replace('t','𝑇',$k); 
 $k = str_replace('u','𝑈',$k); 
 $k = str_replace('v','𝑉',$k); 
 $k = str_replace('w','𝑊',$k); 
 $k = str_replace('x','𝑋',$k); 
 $k = str_replace('y','𝑌',$k); 
 $k = str_replace('z','𝑍',$k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]); 
   $k = $text;
$k = str_replace('a','𝐀',$text); 
 $k = str_replace('b','𝐁',$k); 
 $k = str_replace('c','𝐂',$k); 
 $k = str_replace('d','𝐃',$k); 
 $k = str_replace('e','𝐄',$k); 
 $k = str_replace('f','𝐅',$k); 
 $k = str_replace('g','𝐆',$k); 
 $k = str_replace('h','𝐇',$k); 
 $k = str_replace('i','𝐈',$k); 
 $k = str_replace('j','𝐉',$k); 
 $k = str_replace('k','𝐊',$k); 
 $k = str_replace('l','𝐋',$k); 
 $k = str_replace('m','𝐌',$k); 
 $k = str_replace('n','𝐍',$k); 
 $k = str_replace('o','𝐎',$k); 
 $k = str_replace('p','𝐏',$k); 
 $k = str_replace('q','𝐐',$k); 
 $k = str_replace('r','𝐑',$k); 
 $k = str_replace('s','𝐒',$k); 
 $k = str_replace('t','𝐓',$k); 
 $k = str_replace('u','𝐔',$k); 
 $k = str_replace('v','𝐕',$k); 
 $k = str_replace('w','𝐖',$k); 
 $k = str_replace('x','𝐗',$k); 
 $k = str_replace('y','𝐘',$k); 
 $k = str_replace('z','𝐙',$k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]); 
   $k = $text;
   $k = str_replace('a','𝖆',$text); 
 $k = str_replace('b','𝖇',$k); 
 $k = str_replace('c','𝖈',$k); 
 $k = str_replace('d','𝖉',$k); 
 $k = str_replace('e','𝖊',$k); 
 $k = str_replace('f','𝖋',$k); 
 $k = str_replace('g','𝖌',$k); 
 $k = str_replace('h','𝖍',$k); 
 $k = str_replace('i','𝖎',$k); 
 $k = str_replace('j','𝖏',$k); 
 $k = str_replace('k','𝖐',$k); 
 $k = str_replace('l','𝖑',$k); 
 $k = str_replace('m','𝖒',$k); 
 $k = str_replace('n','𝖓',$k); 
 $k = str_replace('o','𝖔',$k); 
 $k = str_replace('p','𝖕',$k); 
 $k = str_replace('q','𝖖',$k); 
 $k = str_replace('r','𝖗',$k); 
 $k = str_replace('s','𝖘',$k); 
 $k = str_replace('t','𝖙',$k); 
 $k = str_replace('u','𝖚',$k); 
 $k = str_replace('v','𝖛',$k); 
 $k = str_replace('w','𝖜',$k); 
 $k = str_replace('x','𝖝',$k); 
 $k = str_replace('y','𝖞',$k); 
 $k = str_replace('z','𝖟',$k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]); 
   $k = $text;
   $k = str_replace('a','𝙰',$text); 
 $k = str_replace('b','𝙱',$k); 
 $k = str_replace('c','𝙲',$k); 
 $k = str_replace('d','𝙳',$k); 
 $k = str_replace('e','𝙴',$k); 
 $k = str_replace('f','𝙵',$k); 
 $k = str_replace('g','𝙶',$k); 
 $k = str_replace('h','𝙷',$k); 
 $k = str_replace('i','𝙸',$k); 
 $k = str_replace('j','𝙹',$k); 
 $k = str_replace('k','𝙺',$k); 
 $k = str_replace('l','𝙻',$k); 
 $k = str_replace('m','𝙼',$k); 
 $k = str_replace('n','𝙽',$k); 
 $k = str_replace('o','𝙾',$k); 
 $k = str_replace('p','𝙿',$k); 
 $k = str_replace('q','𝚀',$k); 
 $k = str_replace('r','𝚁',$k); 
 $k = str_replace('s','𝚂',$k); 
 $k = str_replace('t','𝚃',$k); 
 $k = str_replace('u','𝙺',$k); 
 $k = str_replace('v','𝚅',$k); 
 $k = str_replace('w','𝚆',$k); 
 $k = str_replace('x','𝚇',$k); 
 $k = str_replace('y','𝚈',$k); 
 $k = str_replace('z','𝚉',$k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
   $k = $text;
$k = str_replace('a','𝒂',$text); 
 $k = str_replace('b','𝒃',$k); 
 $k = str_replace('c','𝒄',$k); 
 $k = str_replace('d','𝒅',$k); 
 $k = str_replace('e','𝒆',$k); 
 $k = str_replace('f','𝒇',$k); 
 $k = str_replace('g','𝒈',$k); 
 $k = str_replace('h','𝒉',$k); 
 $k = str_replace('i','𝒊',$k); 
 $k = str_replace('j','𝒋',$k); 
 $k = str_replace('k','𝒌',$k); 
 $k = str_replace('l','𝒍',$k); 
 $k = str_replace('m','𝒎',$k); 
 $k = str_replace('n','𝒏',$k); 
 $k = str_replace('o','𝒐',$k); 
 $k = str_replace('p','𝒑',$k); 
 $k = str_replace('q','𝒒',$k); 
 $k = str_replace('r','𝒓',$k); 
 $k = str_replace('s','𝒔',$k); 
 $k = str_replace('t','𝒕',$k); 
 $k = str_replace('u','𝒖',$k); 
 $k = str_replace('v','𝒗',$k); 
 $k = str_replace('w','𝒘',$k); 
 $k = str_replace('x','𝒙',$k); 
 $k = str_replace('y','𝒚',$k); 
 $k = str_replace('z','𝒛',$k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
$k = $text;
$k = str_replace('a','Ꭿ',$text); 
$k = str_replace('A','Ꭿ',$k);
$k = str_replace("b","Ᏸ",$k);
$k = str_replace("B","Ᏸ",$k);
$k = str_replace("c","Ꮸ",$k);
$k = str_replace("C","Ꮸ",$k);
$k = str_replace("d","Ꮷ",$k);
$k = str_replace("D","Ꮷ",$k);
$k = str_replace("e","Ꮛ",$k);
$k = str_replace("E","Ꮛ",$k);
$k = str_replace("f","Ꭶ",$k);
$k = str_replace("F","Ꭶ",$k);
$k = str_replace("g","Ᏻ",$k);
$k = str_replace("G","Ᏻ",$k);
$k = str_replace("h","Ᏺ",$k);
$k = str_replace("H","Ᏺ",$k);
$k = str_replace("i","Ꭸ",$k);
$k = str_replace("I","Ꭸ",$k);
$k = str_replace("j","Ꮰ",$k);
$k = str_replace("J","Ꮰ",$k);
$k = str_replace("k","Ꮵ",$k);
$k = str_replace("K","Ꮵ",$k);
$k = str_replace("l","Ꮭ",$k);
$k = str_replace("L","Ꮭ",$k);
$k = str_replace("m","ᗰ",$k);
$k = str_replace("M","ᗰ",$k);
$k = str_replace("n","Ꮑ",$k);
$k = str_replace("N","Ꮑ",$k);
$k = str_replace("o","Ꭷ",$k);
$k = str_replace("O","Ꭷ",$k);
$k = str_replace("p","Ꭾ",$k);
$k = str_replace("P","Ꭾ",$k);
$k = str_replace("q","Ꮕ",$k);
$k = str_replace("Q","Ꮕ",$k);
$k = str_replace("r","ᖇ",$k);
$k = str_replace("R","ᖇ",$k);
$k = str_replace("s","Ꮥ",$k);
$k = str_replace("S","Ꮥ",$k);
$k = str_replace("t","Ꮱ",$k);
$k = str_replace("T","Ꮱ",$k);
$k = str_replace("u","Ꮼ",$k);
$k = str_replace("U","Ꮼ",$k);
$k = str_replace("v","Ꮙ",$k);
$k = str_replace("V","Ꮙ",$k);
$k = str_replace("w","Ꮗ",$k);
$k = str_replace("W","Ꮗ",$k);
$k = str_replace("x","Ꮂ",$k);
$k = str_replace("X","Ꮂ",$k);
$k = str_replace("y","Ꮍ",$k);
$k = str_replace("Y","Ꮍ",$k);
$k = str_replace("z","ᔓ",$k);
$k = str_replace("Z","ᔓ",$k);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile,
]);
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"🏷 يمكنك رؤيه الرموز ايضأ",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$msid,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"🏷 الرموز"]]
] 
]) 
]); 
}
if($text == "🏷 الرموز"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"𓅄 𓅅 𓅆 𓅇 𓅈 𓅉 𓅊 𓅋 𓅌 𓅍 𓅎 𓅏 𓅐 𓅑 𓅒 𓅓 𓅔𓅕 𓅖 𓅗 𓅘 𓅙 𓅚 𓅛 𓅜 𓅝 𓅞 𓅟 𓅠 𓅡 𓅢 𓅣 𓅤 𓅥 𓅦 𓅧 𓅨 𓅩 𓅫 𓅬 𓅭 𓅮 𓅯 𓅰 𓅱 𓅲 𓅳 𓅴 
‏𓅵 𓅶 𓅷 𓅸 𓅹 𓅺 𓅻 
‏ ☤ 𓅾 𓅿 𓆀 𓆁 𓆂
‏𓀀 𓀁 𓀂 𓀃 𓀄 𓀅 𓀆 𓀇 𓀈 𓀉 𓀊 𓀋 𓀌 𓀍 𓀎 𓀏 𓀐 𓀑 𓀒 𓀓 𓀔 𓀕 𓀖 𓀗 𓀘 𓀙 𓀚 𓀛 𓀜 𓀝 𓀞 𓀟 𓀠 𓀡 𓀢 𓀣 𓀤 𓀥 𓀦 𓀧 𓀨 𓀩 𓀪 𓀫 𓀬 𓀭 𓀮 𓀯 𓀰 𓀱 𓀲 𓀳 𓀴 𓀵 𓀶 𓀷 𓀸 𓀹 𓀺 𓀻 𓀼 𓀽 𓀾 𓀿 𓁀 𓁁 𓁂 𓁃 𓁄 𓁅 𓁆 𓁇 𓁈 𓁉 𓁊 𓁋 𓁌 𓁍 𓁎 𓁏 𓁐 𓁑 𓁒 𓁓 𓁔 𓁕 𓁖 𓁗 𓁘 𓁙 𓁚 𓁛 𓁜 𓁝 𓁞 𓁟 𓁠 𓁡 𓁢 𓁣 𓁤 𓁥 𓁦 𓁧 𓁨 𓁩 𓁪 𓁫 𓁬 𓁭 𓁮 𓁯 𓁰 𓁱 𓁲 𓁳 𓁴 𓁵 𓁶 𓁷 𓁸 𓁹 𓁺 𓁻 𓁼 𓁽 𓁾 𓁿 𓂀𓂅 𓂆 𓂇 𓂈 𓂉 𓂊 𓂋 𓂌 𓂍 𓂎 𓂏 𓂐 𓂑 𓂒 𓂓 𓂔 𓂕 𓂖 𓂗 𓂘 𓂙 𓂚 𓂛 𓂜 𓂝 𓂞 𓂟 𓂠 𓂡 𓂢 𓂣 𓂤 𓂥 𓂦 𓂧 𓂨 𓂩 𓂪 𓂫 𓂬 𓂭 𓂮 𓂯 𓂰 𓂱 𓂲 𓂳 𓂴 𓂵 𓂶 𓂷 𓂸 𓂹 𓂺 𓂻 𓂼 𓂽 𓂾 𓂿 𓃀 𓃁 𓃂 𓃃 𓃅 𓃆 𓃇 𓃈 𓃉 𓃊 𓃋 𓃌 𓃍 𓃎 𓃏 𓃐 𓃑 𓃒 𓃓 𓃔 𓃕 𓃖 𓃗 𓃘 𓃙 𓃚 𓃛 𓃜 𓃝 𓃞 𓃟 𓃠 𓃡 𓃢 𓃣 𓃤 𓃥 𓃦 𓃧 𓃨 𓃩 𓃪 𓃫 𓃬 𓃭 𓃮 𓃯 𓃰 𓃱 𓃲 𓃳 𓃴 𓃵 𓃶 𓃷 𓃸 𓃹 𓃺 𓃻 𓃼 𓃽 𓃾 𓃿 𓄀 𓄁 𓄂 𓄃 𓄄 𓄅 𓄆 𓄇 𓄈 𓄉 𓄊 𓄋 𓄌 𓄍 𓄎 𓄏 𓄐 𓄑 𓄒 𓄓 𓄔 𓄕 𓄖 𓄙 𓄚 𓄛 𓄜 𓄝 𓄞 𓄟 𓄠 𓄡 𓄢 𓄣 𓄤 𓄥 𓄦 𓄧 𓄨 𓄩 𓄪 𓄫 𓄬 𓄭 𓄮 𓄯 𓄰 𓄱 𓄲 𓄳 𓄴 𓄵 𓄶 𓄷 𓄸 𓄹 𓄺   𓄼 𓄽 𓄾 𓄿 𓅀 𓅁 𓅂 𓅃 𓅄 𓅅 𓅆 𓅇 𓅈 𓅉 𓅊 𓅋 𓅌 𓅍 𓅎 𓅏 𓅐 𓅑 𓅒 𓅓 𓅔 𓅕 𓅖 𓅗 𓅘 𓅙 𓅚 𓅛 𓅜 𓅝 𓅞 𓅟 𓅠 𓅡 𓅢 𓅣 𓅤 𓅥 𓅦 𓅧 𓅨 𓅩 𓅪 𓅫 𓅬 𓅭 𓅮 𓅯 𓅰 𓅱 𓅲 𓅳 𓅴 𓅵 𓅶 𓅷 𓅸 𓅹 𓅺 𓅻 𓅼 𓅽 𓅾 𓅿 𓆀 𓆁 𓆂 𓆃 𓆄 𓆅 𓆆 𓆇 𓆈 𓆉 𓆊 𓆋 𓆌 𓆍 𓆎 𓆐 𓆑 𓆒 𓆓 𓆔 𓆕 𓆖 𓆗 𓆘 𓆙 𓆚 𓆛 𓆜 𓆝 𓆞 𓆟 𓆠 𓆡 𓆢 𓆣 𓆤 𓆥 𓆦 𓆧 𓆨 𓆩𓆪 𓆫 𓆬 𓆭 𓆮 𓆯 𓆰 𓆱 𓆲 𓆳 𓆴 𓆵 𓆶 𓆷 𓆸 𓆹 𓆺 𓆻 𓆼 𓆽 𓆾 𓆿 𓇀 𓇁 𓇂 𓇃 𓇄 𓇅 𓇆 𓇇 𓇈 𓇉 𓇊 𓇋 𓇌 𓇍 𓇎 𓇏 𓇐 𓇑 𓇒 𓇓 𓇔 𓇕 𓇖 𓇗 𓇘 𓇙 𓇚 𓇛 𓇜 𓇝 𓇞 𓇟 𓇠 𓇡 𓇢 𓇣 𓇤 𓇥 𓇦 𓇧 𓇨 𓇩 𓇪 𓇫 𓇬 𓇭 𓇮 𓇯 𓇰 𓇱 𓇲 𓇳 𓇴 𓇵 𓇶 𓇷 𓇸 𓇹 𓇺 𓇻 𓇼 𓇾 𓇿 𓈀 𓈁 𓈂 𓈃 𓈄 𓈅 𓈆 𓈇 𓈈 𓈉 𓈊 𓈋 𓈌 𓈍 𓈎 𓈏 𓈐 𓈑 𓈒 𓈓 𓈔 𓈕 𓈖 𓈗 𓈘 𓈙 𓈚 𓈛 𓈜 𓈝 𓈞 𓈟 𓈠 𓈡 𓈢 𓈣 𓈤  𓈥 𓈦 𓈧 𓈨 𓈩 𓈪 𓈫 𓈬 𓈭 𓈮 𓈯 𓈰 𓈱 𓈲 𓈳 𓈴 𓈵 𓈶 𓈷 𓈸 𓈹 𓈺 𓈻 𓈼 𓈽 𓈾 𓈿 𓉀 𓉁 𓉂 𓉃 𓉄 𓉅 𓉆 𓉇 𓉈 𓉉 𓉊 𓉋 𓉌 𓉍 𓉎 𓉏 𓉐 𓉑 𓉒 𓉓 𓉔 𓉕 𓉖 𓉗 𓉘 𓉙 𓉚 𓉛 𓉜 𓉝 𓉞 𓉟 𓉠 𓉡 𓉢 𓉣 𓉤 𓉥 𓉦 𓉧 𓉨 𓉩 𓉪 𓉫 𓉬 𓉭 𓉮 𓉯 𓉰 𓉱 𓉲 𓉳 𓉴 𓉵 𓉶 𓉷 𓉸 𓉹 𓉺 𓉻 𓉼 𓉽 𓉾 𓉿 𓊀 𓊁 𓊂 𓊃 𓊄 𓊅 𓊈 𓊉 𓊊 𓊋 𓊌 𓊍 𓊎 𓊏 𓊐 𓊑 𓊒 𓊓 𓊔 𓊕 𓊖 𓊗 𓊘 𓊙 𓊚 𓊛 𓊜 𓊝 𓊞 𓊟 𓊠 𓊡 𓊢 𓊣 𓊤 𓊥 𓊦 𓊧 𓊨 𓊩 𓊪 𓊫 𓊬 𓊭 𓊮 𓊯 𓊰 𓊱 𓊲 𓊳 𓊴 𓊵 𓊶 𓊷 𓊸 𓊹 𓊺 𓊻 𓊼 𓊽 𓊾 𓊿 𓋀 𓋁 𓋂 𓋃 𓋄 𓋅 𓋆 𓋇 𓋈 𓋉 𓋊 𓋋 𓋌 𓋍 𓋎 𓋏 𓋐 𓋑 𓋒 𓋓 𓋔 𓋕 𓋖 𓋗 𓋘 𓋙 𓋚 𓋛 𓋜 𓋝 𓋞 𓋟 𓋠 𓋡 𓋢 𓋣 𓋤 𓋥 𓋦 𓋧 𓋨 𓋩 𓋪 𓋫 𓋬 𓋭 𓋮 𓋯 𓋰 𓋱 𓋲 𓋳 𓋴 𓋵 𓋶 𓋷 𓋸 𓋹 𓋺 𓋻 𓋼 𓋽 𓋾 𓋿 𓌀 𓌁 𓌂 𓌃 𓌄 𓌅 𓌆 𓌇 𓌈 𓌉 𓌊 𓌋 𓌌 𓌍 𓌎 𓌏 𓌐 𓌑 𓌒 𓌓 𓌔 𓌕 𓌖 𓌗 𓌘 𓌙 𓌚 𓌛 𓌜 𓌝 𓌞 𓌟 𓌠 𓌡 𓌢 𓌣 𓌤 𓌥 𓌦 𓌧 𓌨 𓌩 𓌪 𓌫 𓌬 𓌭 𓌮 𓌯 𓌰 𓌱 𓌲 𓌳 𓌴 𓌵 𓌶 𓌷 𓌸 𓌹 𓌺 𓌻 𓌼 𓌽 𓌾 𓌿 𓍀 𓍁 𓍂 𓍃 𓍄 𓍅 𓍆 𓍇 𓍈 𓍉 𓍊 𓍋 𓍌 𓍍 𓍎 𓍏 𓍐 𓍑 𓍒 𓍓 𓍔 𓍕 𓍖 𓍗 𓍘 𓍙 𓍚 𓍛 𓍜 𓍝 𓍞 𓍟 𓍠 𓍡 𓍢 𓍣 𓍤 𓍥 𓍦 𓍧 𓍨 𓍩 𓍪 𓍫 𓍬 𓍭 𓍮 𓍯 𓍰 𓍱 𓍲 𓍳 𓍴 𓍵 𓍶 𓍷 𓍸 𓍹 𓍺 𓍻 𓍼 𓍽 𓍾 𓍿 𓎀 𓎁 𓎂 𓎃 𓎄 𓎅 𓎆 𓎇 𓎈 𓎉 𓎊 𓎋 𓎌 𓎍 𓎎 𓎏 𓎐 𓎑 𓎒 𓎓 𓎔 𓎕 𓎖 𓎗 𓎘 𓎙 𓎚 𓎛 𓎜 𓎝 𓎞 𓎟 𓎠 𓎡 𓏋 𓏌 𓏍 𓏎 𓏏 𓏐 𓏑 𓏒 𓏓 
‏ 𓏕 𓏖 𓏗 𓏘 𓏙 𓏚 𓏛 𓏜 𓏝 𓏞 𓏟 𓏠 𓏡 𓏢 𓏣 𓏤 𓏥 𓏦 𓏧 𓏨 𓏩 𓏪 𓏫 𓏬 𓏭 𓏮 𓏯 𓏰 𓏱 𓏲 𓏳 𓏴 𓏶 𓏷 𓏸 𓏹 𓏺 𓏻 𓏼 𓏽 𓏾 𓏿 𓐀 𓐁 𓐂 𓐃 𓐄 𓐅 𓐆",
]);
}