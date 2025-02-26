<?php return [
"bot.name" => "Катенька",
"bot.start" => "Стартуем!",
"bot.error" => "Опа, кажись что-то сломалось.. 🤷‍♀️",
"bot.onlyPrivate" => "Это я могу сделать только в групповых чатах.",

"user.pickChat" => "<a href='t.me/:botName?startgroup=0'>Выбери в группу</a>, где я буду считать карму и не только. ✌😊",
"chat.greetings" => "Приветствую. Меня зовут Катенька. Я умею считать карму.\r\nИспользуй /help для подробностей и /settings для смены языка.",
"chat.help" => "<b>💬 Что я умею?</b>\r\n\r\n<b>Поднятие/опускание кармы</b>
Поставьте '+' (или 👍) в ответ на чье-то сообщение для поднятия кармы или '-' (или 👎) для её опускания.
Также понимаю сообщение формата \"+ @username\" и тому подобное.\r\n
<b>Команды</b>
/top - топ кармы в этой группе
/antitop - топ отрицательной кармы в этой группе
/mystats - своя глобальная статистика кармы
/settings - настройки: смена языка, переключение режима не комментирования (тихий режим) и смена таймера между командами пользователя",
"chat.notallowed" => "Этот чат не добавлен в список",

"user.stat.inline" => "Статистика пользователя 👤 :user",
"user.stat.title" => " ℹ️ <b>Статистика пользователя</b>",
"user.stat.name" => "👤 Имя: ",
"user.stat.inchat" => "📍 Карма в группе: ",
"user.stat.sum" => "🔮 Всего кармы: ",
"user.stat.place" => "📊 Место в рейтинге: ",
"user.stat.membership" => "👥 Карма в группах: ",

"karma.top.title" => "<b>🏆 Самые почётные люди группы «:chatName»:</b>\r\n\r\n",
"karma.top.row" => ":username (:karma)\r\n",
"karma.top.firstrow" => "⭐ :username (:karma)\r\n",
"karma.top.private" => "Топ антикармы доступен только в групповых чатах.",
"karma.antitop.title" => "<b>🏆 Самые непочётные люди группы «:chatName»:</b>\r\n\r\n",
"karma.antitop.row" => ":username (:karma)\r\n",
"karma.antitop.firstrow" => "💩 :username (:karma)\r\n",
"karma.antitop.private" => "Топ антикармы доступен только в групповых чатах.",
"karma.antitop.empty" => "В чате все хорошие 🐈",
"karma.plus" => "<b>:from (:k1)</b> увеличил карму <b>:to (:k2)</b>",
"karma.minus" => "<b>:from (:k1)</b> уменьшил карму <b>:to (:k2)</b>",
"karma.yourself" => "Больше так не делай",
"karma.tooSmallKarma" => "Ты <b>не можешь</b> голосовать с отрицательной кармой",
"karma.tooFast" => "Не так быстро. В группе установлено ограничение.",
"karma.unknownUser" => "Такого пользователя не знаю 🤷‍♀️ <i>(попробуй написать через Reply)</i>",
"karma.unknownUser.kicked" => "Пользователь не находится в этом чате 🤷‍♀️",
"karma.manualSet" => "У пользователя :0 (id=:1) в группе c id=:2 карма равна :3",

"settings.titleGroup" => "<b>🛠 Настройки</b> \r\n<i>Изменять могут только администраторы группы.</i>\r\n",
"settings.titlePrivate" => "<b>🛠 Настройки</b> \r\nОбратите внимание, что часть операций, связанных с работой группы, доступна только для администраторов группы.\r\n",
"settings.adminonly" => "Изменять могут только администраторы группы.",
"settings.title.cooldown" => "⏱ Таймер голосования: <b>:cooldown мин.</b>",
"settings.title.lang" => "🗣 Язык: <b>:lang</b>",
"settings.title.growth" => "📈 Рост кармы: <b>:type</b>",
"settings.title.access" => "👥 Карма доступна <b>:type</b>",
"settings.title.silent_mode" => "🔔 Тихий режим <b>:status</b>",
"settings.enabled" => "включен",
"settings.disabled" => "выключен",
"settings.growth.ariphmetic" => "Арифметический",
"settings.growth.geometric" => "Геометрический",
"settings.access.for_admin" => "только для администраторов группы",
"settings.access.for_everyone" => "для всех пользователей группы",
"settings.button.toggle_silent_mode" => "🔔 Тихий режим",
"settings.button.set_another_growth" => "📈 Сменить рост кармы на \":type\"",
"settings.button.set_another_access" => "👥 Сделать карму доступной :type",
"settings.button.lang" => "🗣 Язык/Language",
"settings.button.set_cooldown" => "⏱ Таймер голосования",
"settings.enable" => "Включить",
"settings.disable" => "Выключить",
"settings.minute" => " мин.",
"settings.select.cooldown" => "<b>⏱ Настройка таймера</b>\r\n<i>Таймер задает период ограничения для поднятия/опускания кармы. Отсчет начинается после последнего успешного поднятия/опускания кармы.</i>\r\n\r\nВыберите значение таймера:",
"settings.select.lang" => "<b>🗣 Настройка языка</b>\r\n<i>Язык Катеньки может быть разным.</i>\r\n\r\nВыберите из возможных:",
"settings.button.back" => "⬅️ Назад",
"settings.unfollow" => "🙅‍♂️ Удалить свою карму из группы",
"settings.erase" => "💀 Удалить всю карму из группы",
"settings.erase.title" => "Выберите группу в которой хотите очистить карму всех участников. Данные об участии в группе также будут очищены из БД. Операция доступна только для администратора группы. \r\n\r\n<b>❗️ Внимание! Операция окончательная и не может быть отменена.</b>",
"settings.erase.notallow" => "Вы не являетесь администратором в группах",
"settings.erase.confirm" => "‼️ Вы уверены, что хотите очистить карму всем участникам <b>\":chat\"</b>(:chat_id)?",
"settings.erase.success" => "Карма участников в группе <b>\":chat\"</b>(:chat_id) очищена",
"settings.erase.cancel" => "Очищение кармы участников группы <b>\":chat\"</b>(:chat_id) отменено",
"settings.groups.adminonly" => "<b>Операция доступна только для администратора группы.</b>",
"settings.unfollow.confirm" => "‼️ Вы уверены, что хотите очистить карму из <b>\":chat\"</b>(:chat_id)?",
"settings.unfollow.success" => "Ваша карма в группе <b>\":chat\"</b>(:chat_id) очищена",
"settings.unfollow.cancel" => "Очищение кармы из группы <b>\":chat\"</b>(:chat_id) отменено",
"settings.unfollow.title" => "Выберите группу в которой хотите очистить свою карму. Данные об участии в группе также будут очищены из БД. \r\n\r\n<b>❗️ Внимание! Операция окончательная и не может быть отменена.</b>",
"settings.hidden.turnon" => "👻 Не отображать участия в группах",
"settings.hidden.turnoff" => "👻 Отображать участия в группах",

"confirm.yes" => "Да",
"confirm.no" => "Нет",
];
