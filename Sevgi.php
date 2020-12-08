<?php

define('API_KEY','1217949046:AAGwkjpmqD4PwNj-l2OQiuCSnRjbbI9yuN4');
$botuser = "@Test_LoVe_robot";
$admin = "953109403"; 
function del($nomi){
array_map('unlink', glob("$nomi"));
}
// Bu Kod @WebCoding_Uz Kanali Orqali Tarqatildi Kod Yozuvchi @UzB_CyBeR 
function put($fayl,$nima){
file_put_contents("$fayl","$nima");
}
function get($fayl){
$get = file_get_contents("$fayl");
return $get;
}
function ty($ch){ 
return bot('sendChatAction', [
'chat_id' => $ch,
'action' => 'typing',
]);
}
function editMessageText(
        $chatId,
        $messageId,
        $text,
        $parseMode = null,
        $disablePreview = false,
        $replyMarkup = null,
        $inlineMessageId = null
    ) {
       return bot('editMessageText', [
            'chat_id' => $chatId,
            'message_id' => $messageId,
            'text' => $text,
            'inline_message_id' => $inlineMessageId,
            'parse_mode' => $parseMode,
            'disable_web_page_preview' => $disablePreview,
            'reply_markup' => $replyMarkup,
        ]);
    }
function ACL($callbackQueryId, $text = null, $showAlert = false)
{
     return bot('answerCallbackQuery', [
        'callback_query_id' => $callbackQueryId,
        'text' => $text,
        'show_alert'=>$showAlert,
    ]);
}
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
// Bu Kod @WebCoding_Uz Kanali Orqali Tarqatildi Kod Yozuvchi @UzB_CyBeR 
$update = json_decode(get('php://input'));
$message = $update->message;
$text = $message->text;
$cid = $message->chat->id;
$uid = $message->from->id;
$fname = $message->from->first_name;
$user = $message->from->username;
$data = $message->contact;
$nomer = $message->contact->phone_number;
$name = $message->contact->first_name;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$name = $message->chat->first_name;
$user = $message->from->username;
$tx = $message->text;
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$mes = $callback->message;
$mid = $mes->message_id;
$cmtx = $mes->text;
$mmid = $callback->inline_message_id;
$idd = $callback->message->chat->id;
$cbid = $callback->from->id;
$cbuser = $callback->from->username;
$data = $callback->data;
$ida = $callback->id;
$cqid = $update->callback_query->id;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;
$step = file_get_contents("step/$cid.step");
$menu = file_get_contents("step/$cid.menu");
$stepe = file_get_contents("step/$cbid.step");
$menue = file_get_contents("step/$cbid.menu");
mkdir("step");
// Bu Kod @WebCoding_Uz Kanali Orqali Tarqatildi Kod Yozuvchi @UzB_CyBeR 
$url = 'https://daryo.uz/feed/';
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
    $line = $item->title;
    $link = $item->link;
    break;
}  

$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"💋Sevgi Test💋"],['text'=>"👤 Admin 👤"]],
[['text'=>"❓ Yordam ❓"],['text'=>"⤴️ Foydali Bo'lim ⤴️"]],[['text'=>"📡Bizning kanal"]],
]
]);
$foydali = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"❄ Yangi Yil ❄"],['text'=>"🆕️ Yangiliklar 🆕️"]],
]
]);
$back = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙 Orqaga Qaytish"]],
]
]);
if($text=="🔙 Orqaga Qaytish"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🏠 *Siz Bosh Menyudasiz* 🙄",
'parse_mode'=>'markdown',
'reply_markup'=>$key,
]);
}
if($text=="/start"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👋 *Salom* [$fname](tg://user?id=$uid) *Botimizga Xush Kelibsiz* 😄\n\n*😅 Siz Bu Bot Orqali Sevgi Testi Qilishingiz Mumkin 😍* Kanalimizga obuna bo'lishni unutmang kanalimiz👉👉  @Ulmas_SHox_Official 👈👈",
'parse_mode'=>'markdown',
'reply_markup'=>$key,
]);
}
if($text=="💋Sevgi Test💋"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"
💋*Sevgi Test💋

$fname ❤️ O'z Sevgingizni Bizning Botda Test Qilib Ko'ring 🤩

📝 Ishlatish: ( Masalan 👇)*

👉  `/test Ulmas Sarvinoz`  👈

😁 *Shu Usulda* 😊",
'parse_mode'=>'markdown',
'reply_markup'=>$back,
]);
}
if(mb_stripos($text,"/test") !== false){
$loop = explode(" ", $text); 
$suz = $loop[1]; 
$javob = $loop[2]; 
$suz = file_get_contents("https://ismlar.com/search/$suz");
$exp = explode('<p class="text-size-5">',$ism);
$expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
$im = str_replace($expl[1],' ',$exp[1]);
$ims = str_replace('</p>',' ',$im);
$isms = str_replace('</div>',' ',$ims);
$ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
$ismk = str_replace('&#039;','`',$ismn);
$ismm = trim("$ismk");
if($ism==null or $ismm==null){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"Ismda xatolik bor",]);
}
$bormi=file_get_contents("natija/$suz.$javob");
if($bormi==null){
if($soz>=50){$bahoy="Sevgilar yuqori ekan qoyil yoshlar baxtli bo'lilar💏"; $smile="🥰";}else{$smile="😭"; $bahoy="Boshqasini topganiz maʼqul deb oʻylayman";}
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"
🤵 - <b>$suz
👰 - $javob</b>

<code>$smile Orangizdagi Sevgi</code> -<b>$soz</b> %

<b>Taklifimiz:</b> <code>$bahoy</code>",
'parse_mode'=>'html',
'reply_markup'=>$back,
]); 
file_put_contents("natija/$suz.$javob","$soz");}else
{
	bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🤵 - <b>$suz</b>
👰 - <b>$javob</b>

😍 Orangizdagi Sevgi <b>$bormi</b> 😊
By $botuser
Channel: @Ulmas_SHox_Official",
'parse_mode'=>'markdown',
'reply_markup'=>$back,
]); 
}}
if($text=="👤 Admin 👤"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"😎 *Administrator:* [@StudioUlmasSHox] ❔ *Muammo Bo'lsa Murojaat Qilishingiz Mumkin* 😅",
'parse_mode'=>'markdown',
'reply_markup'=>$key,
]);
}
if($text=="❓ Yordam ❓"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"😊 *Assalomu aleykum $fname Botimizga Xush Kelibsiz 👋😀

❤️ Botimizda O'z Sevgingizni Bizning Botda Test Qilib Ko'rishingiz Mumkin 🤩
Kanalimizga albatta kiring Kanalimiz👉👉 @Ulmas_SHox_Official 👈👈
😎 Hammaga Omad* 😁🖐",
'parse_mode'=>'markdown',
'reply_markup'=>$key,
]);
}
if($text=="⤴️ Foydali Bo'lim ⤴️"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🖐😌 Foydali Bo'lim ✅",
'parse_mode'=>'markdown',
'reply_markup'=>$foydali,
]);
}
if($text=="❄ Yangi Yil ❄"){
$kun1 = date('z ',strtotime('2 hour')); 
$a = 364;
$c2 = $a-$kun1;
$d = date('L ',strtotime('2 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('2 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('2 hour')); 
$a3 = 58;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('2 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*💋Sevgilim $fname ⛄ yangi yilga: $b - Kun, $b2 - Soat, $b3 - Minut, $b4 - Sekund Qoldi💋 Kirib kelayotgan yangi yilinggiz bilan💋*",
'parse_mode'=>'markdown',
'reply_markup'=>$foydali,
]);
}
if($text=="🆕️ Yangiliklar 🆕️"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🆕️ Yangilik ✅

🆕️ [$line]($link) 🤩",
'parse_mode'=>'markdown',
'reply_markup'=>$foydali,
]);
}
if($text == "Kanalimiz"){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"Bu kanalda siz mashhur qo'shiqlarni yosh ijodkor Ulmas SHox tomonidan ijro etilganini ko'rasiz va boho berasiz👌. Murojaat va takliflar uchun
https://t.me/joinchat/OM9Lm0ZtZBg1IVlHCOuYiQ 
guruhiga murojaat qiling. Hoziroq ulaning 👇👇👇
              https://t.me/Ulmas_SHox_Official"
,
]);
}