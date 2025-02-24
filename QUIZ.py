# QUIZ
import telebot
import time
import random
from telebot import types

TOKEN = "7769329974:AAHEwfIzPDZ1-KCSAKsxepmNtC35lYXvlMs"
CHANNEL_ID = "@NOOX00"
bot = telebot.TeleBot(TOKEN)

language_pairs = {
    "يرجى ملء الاستمارة": "يرجى املاء الاستمارة",
    "علم سابق": "علم مسبق",
    "أسست المدرسة": "تأسست المدرسة",
    "هذا مستشفى": "هذه مستشفى",
    "تساهل عليه": "تساهل معه",
    "بالرفاء والبنين": "بالرفاه والبنين",
    "بالرغم من التبعات": "رغم التبعات",
    "صحح الأوراق": "صلح الأوراق",
    "فعلها لمصلحتك": "فعلها لصالحك",
    "الخافر": "الخفر",
    "المحور الاساسي": "المحور الاساس",
    "تم إيفاده شهرا": "تم إيفاده لمدة شهر",
    "تسلم": "استلم",
    "مبارك": "مبروك",
    "عنوانات": "عناوين",
    "مديرون": "مدراء",
    "مرافقات": "مرفقات",
    "المدير العام": "مدير عام",
    "اعتذر عن عدم الحضور": "اعتذر عن الحضور",
    "اختصاصي": "أخصائي",
    "مساهمة منا": "إسهاما منا",
    "لافت للنظر": "ملفت للنظر",
    "الى الأقسام كافة": "الى كافة الأقسام",
    "كتابكم ذي الرقم": "كتابكم المرقم",
    "على الموظفين الحضور": "على الموظفين التواجد",
    "لن نوافق": "سوف لن نوافق"
}

user_data = {}

@bot.message_handler(commands=["start"])
def start(message):
    """بدء الاختبار"""
    user_id = message.chat.id
    user_data[user_id] = {
        "username": message.from_user.username or "مجهول",
        "correct": 0,
        "wrong": 0,
        "start_time": time.time(),
        "remaining_words": list(language_pairs.items())
    }
    
    ask_language_question(user_id)

def ask_language_question(user_id):
    """إرسال سؤال جديد"""
    if not user_data[user_id]["remaining_words"]:
        send_results(user_id)
        return

    word_pair = user_data[user_id]["remaining_words"].pop(0)
    correct_word, wrong_word = word_pair

    choices = [correct_word, wrong_word]
    random.shuffle(choices)

    keyboard = types.InlineKeyboardMarkup()
    keyboard.row(
        types.InlineKeyboardButton(choices[0], callback_data=f"lang_{choices[0]}"),
        types.InlineKeyboardButton(choices[1], callback_data=f"lang_{choices[1]}")
    )

    bot.send_message(user_id, "📌 اختر الإجابة الصحيحة:", reply_markup=keyboard)

@bot.callback_query_handler(func=lambda call: call.data.startswith("lang_"))
def handle_language_answer(call):
    """معالجة إجابة المستخدم"""
    user_id = call.message.chat.id
    selected_word = call.data.split("_")[1]

    correct_words = language_pairs.keys()
    if selected_word in correct_words:
        user_data[user_id]["correct"] += 1
        bot.edit_message_text("✅ إجابة صحيحة!", user_id, call.message.message_id)
    else:
        user_data[user_id]["wrong"] += 1
        bot.edit_message_text("❌ إجابة خاطئة!", user_id, call.message.message_id)

    ask_language_question(user_id)

def send_results(user_id):
    """إرسال النتائج"""
    username = user_data[user_id]["username"]
    correct = user_data[user_id]["correct"]
    wrong = user_data[user_id]["wrong"]
    elapsed_time = round(time.time() - user_data[user_id]["start_time"], 2)
    minutes, seconds = divmod(elapsed_time, 60)

    if correct >= 10:
        rating = "🏅 ممتاز"
    elif correct >= 5:
        rating = "📊 متوسط"
    else:
        rating = "🔴 مقبول"

    result_message = f"""
🚨 نتائج الاختبار!  
👤 المستخدم: @{username}  
✅ إجابات صحيحة: {correct}  
❌ إجابات خاطئة: {wrong}  
⏱️ الوقت المستغرق: {int(minutes)} دقيقة و {int(seconds)} ثانية  
📢 التقييم: {rating}  
"""
    bot.send_message(user_id, result_message, parse_mode="Markdown")
    bot.send_message(CHANNEL_ID, result_message, parse_mode="Markdown")

# ✅ تشغيل البوت باستمرار وعدم توقفه
while True:
    try:
        print("🚀 تشغيل البوت...")
        bot.polling(none_stop=True, interval=2, timeout=20)
    except Exception as e:
        print(f"⚠️ حدث خطأ: {e}")
        time.sleep(5)  # إعادة تشغيل البوت بعد 5 ثوانٍ
