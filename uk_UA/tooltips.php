<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2014-02-22 06:25+0000
// PO revision date:  2014-02-21 10:22+0000
$lang = array(
	'actions' => array(
		'add_to_category' => 'Дозволяє додавати додаткові категорії до звіту. Якщо ви виберете "Категорія1" для повідомлення, яке вже знаходиться в "Категорія2", то повідомлення буде прив\'язано до обох категорій.',
		'approve' => 'Затверджує звіт чи ні. У разі схвалення він буде відображатися публічно.',
		'assign_badge' => 'Ви зможете призначити значок для тригерного користувача. Виберіть тут значок для призначення.',
		'between_times' => 'Це діапазон годин і / або хвилин в 24-годинному форматі. Якщо ви вводите більш ранній час у друге поле, воно буде дзеркально відображено в першому. Ці значення часу повинні бути в межах одного дня. Крім того, цей час звіряється з налаштуванням часу на вашому сайті в налаштуваннях сайту і <strong> НЕ </strong> обов\'язково з часовим поясом користувача, який зв\'язується з вашим розгортанням. Залиште його з 00:00 до 00:00, щоб ігнорувати цей специфікатор.',
		'category' => 'Ви можете задати умову активації тригерів при використанні певних категорій. Наприклад, якщо ви вибрали умову "Категорія1 і Категорія2", а повідомлення прив\'язане до Категорія2 і Категорія3, то вона виконає задану умову.',
		'days_of_the_week' => 'Якщо ці дії відбуваються в певні дні тижня, задайте це тут. Майте на увазі, день визначається часовим поясом, налаштованим в розгортанні. Утримуйте shift, command, або control, для вибору декількох днів.',
		'email_body' => 'Тіло листа, який буде надіслано.',
		'email_subject' => 'Тема листа, який буде надіслано.',
		'feed_id' => 'Каналом можуть бути всі канали або конкретні канали. Якщо ви хочете тільки конкретні канали для активації тригера, ви можете вибрати їх тут. В іншому випадку, залиште «все»',
		'from' => 'Ім\'я користувача Twitter (або багато імен користувачів через коми). Якщо Ви хочете активізувати тригери тільки для повідомлень twitter від конкретного користувача, введіть його ім\'я користувача тут (без @)',
		'keywords' => 'Ви можете залишити це поле порожнім, якщо ви не хочете перевірити за ключовими словами. Якщо ви додаєте слова тут, ви повинні розділити їх комами (,). Наприклад, якщо ви хочете, щоб активувати тригер, коли хтось згадує „любов" або „мир" у своєму посланні, вам потрібно буде додати „любов, мир" у ​​вікні ключових слів.',
		'location' => 'Ви можете вибрати "де завгодно" або вказати місце розташування. Якщо ви вибрали місце розташування, ви можете вказати периметр, де відбувається дія. Наприклад, якщо ви хочете активувати тригер, коли будь-хто вкаже крапку в Івано-Франківській області, вам необхідно виділити дану область одним або декількома прямокутниками.',
		'on_specific_count' => 'Цей визначник активує тригер на N-ому числі або для бази всього колективу користувачів або для кожного окремого користувача. Залиште це поле порожнім, щоб його ігнорувати.',
		'report_title' => 'Ця типова назва для додавання в звіт.',
		'response' => 'Якщо всі критерії вище були пройдені, то тригер запустить дію - від схвалення повідомлення до електронного листа користувачу. Виберіть необхідні додаткові опції.',
		'send_to' => 'При виборі "Тригерний користувач" електронного листа буде відіслано користувачеві, який виконав дію. При використанні радіо-кнопки після поля введення ви зможете ввести будь-який інший e-mail. Це корисно, коли ви встановлюєте тригери для повідомлення користувачів про зміни, що відбулися.',
		'specific_days' => 'Ви можете вибрати кілька днів тут. Дати визначається вашими налаштуваннями часового поясу розгортання. Для того, щоб за замовчуванням залишилися всі дати, що не відзначайте жодних дат.',
		'trigger' => 'Тригер є основним елементом для налаштування "Дій за умовою". Ви можете вибрати будь-яку дію, коли хто-небудь відправить нове повідомлення, зареєструється і т. д.',
		'user' => 'Користувачем може бути будь-хто або конкретний користувач. Якщо ви хочете, щоб лише певні користувачі активували тригер, то ви будете хотіти вибрати їх тут. В іншому випадку, ви захочете залишити це як "кожному", бо більшість тригерів створені для всіх користувачів, що взаємодіють з системою',
		'verify' => 'Позначає звіт як перевірений або ні.',
	) ,
	'change_picture' => 'Аватари анкет даного сайту використовують сервіс Gravatar. Натиснувши на ваш аватар, ви будете переадресовані на їхній сайт, де зможете змінити зображення.',
	'default_value' => 'Відокремте кожне значення комою. Наприклад: Значення1, Значення2 і т. д.',
	'radio_choices' => 'Кожне значення відокремлюється комою, наприклад, value1, value2. Якщо ви хочете задати значення за замовчуванням, закінчите список опцій :: наприклад, якщо ви хочете задати value3 як замовчування, це буде value1, value2, value3 :: value3',
	'dropdown_choices' => 'Відокремте кожний елемент комою. Наприклад: пункт 1, пункт 2 і т. д.',
	'private_to' => 'Почніть набирати, щоб випав список користувачів.',
	'private_subject' => 'Тема приватного повідомлення',
	'private_message' => 'Приватне повідомлення',
	'profile_color' => 'Ви можете вибрати колір, який буде відображений під вашим аватаром. Цим кольором також будуть відображатися повідомлення, які ви відправили.',
	'profile_email' => 'Ваша Email адреса',
	'profile_name' => 'Повне ім\'я',
	'profile_new_password' => 'Якщо задано, це буде ваш новий пароль. Залиште це поле порожнім, якщо ви хочете зберегти ваш поточний пароль.',
	'profile_new_users_password' => 'Це потрібно при створенні нового користувача і буде паролем користувача. Ви повинні інформувати свого нового користувача про можливість зміни пароля після першого входу в систему.',
	'profile_notify' => 'Виберіть Так для отримання сповіщень через Email для нових повідомлень або коментарів, які були виставлені на веб сайті',
	'profile_password' => 'Ваш пароль. Залиште поле пустим якщо ви хочете залишити старий пароль',
	'profile_public' => 'Ваша анкета може бути переглянута ким завгодно, якщо ви відзначите цю опцію. Це також найпростіший спосіб показати звіти, які ви відправили, ваші повернення, значки, і т.д. все на одній сторінці.',
	'profile_public_url' => 'Це - адреса, де можна знайти ваш громадський профіль.',
	'profile_username' => 'Ім\'я користувача не может бути змінене',
	'settings_access_level' => 'Рівень доступу використовується для обмеження доступу до користувацьких полів. Володар великого рівня зможе побачити поля з меншим рівнем. Суперадміністратор має вищий рівень доступу (100). Дані, призначені для публічного перегляду мають нижчий рівень (0). Члени мають рівень доступу 10. Адміністратор має типовий рівень доступу 90.',
	'settings_alert_email' => 'Цей email буде використаний для відправки сповіщень',
	'settings_allow_alerts' => 'Дозволити користувачам підписатися на повідомлення через мережу.',
	'settings_allow_clustering' => 'Дозволяє додавати повідомлення на одну і ту же точку на карті',
	'settings_allow_comments' => 'Дозволити користувачам коментувати повідомлення на головній сторінці.',
	'settings_allow_feed' => 'Дозволяє додавання стрічки новий RSS на головній сторінці.',
	'settings_allow_feed_category' => 'Це дозволяє створити нову категорію із каналів новин RSS.',
	'settings_allow_reports' => 'Дозволити користувачам відправляти повідомлення через веб форму.',
	'settings_api_default_record_limit' => 'Кількість записів за замовчанням, отримуваних API-запитом',
	'settings_api_max_record_limit' => 'Максимальна кількість записів, отримуваних API-запитом',
	'settings_api_max_requests_per_ip' => 'Максимальна кількість API-запитів на IP-адресу',
	'settings_banner' => 'Заставка показується нагорі вашого сайту, якщо тема її підтримує. Оптимальний розмір залежить від використовуваної теми. Зверніть увагу, що заставка замінить собою назву і слоган сайту.',
	'settings_blocks_per_row' => 'Число блоків, які будуть показані у кожному ряду.',
	'settings_cache_pages' => 'Дозволити або відключити кешування сторінок. Кешування дозволяє прискорити показ сторінок. Ми рекомендуємо використовувати кешування на завантажених сайтах. Пам\'ятайте, що доповіді будуть розміщені на сторінках сайту на основі розкладу, встановленого нижче (час життя кешу).',
	'settings_cache_pages_lifetime' => 'Установити час життя кешу',
	'settings_checkins' => 'Цей параметр дозволяє checkins на розгортанні. Це спрощений тип звіту, який не модерується, перш ніж він йде на головну сторінку, що вимагає певного налаштування вашого сайту. При включенні цього, переконайтеся, що ваш часовий пояс, настройка за Гринвічем і ваша тема підтримує checkins. При включенні цього, тільки теми для checkins стануть доступними на сторінці налаштувань надбудов/тем.',
	'settings_configure_map' => 'Встановити карту для відображення окремого місцезнаходження',
	'settings_default_category_colors' => 'Вибрати один колір для всіх категорій на сайті',
	'settings_default_category_icons' => 'Вибрати одну піктограму для всіх категорій на сайті.',
	'settings_default_location' => 'Країна, де буде встановлена платформа',
	'settings_display_contact' => 'Вмикає і вимикає панель контактів на головній сторінці.',
	'settings_display_howtohelp' => 'Вмикає і вимикає панель допомоги на головній сторінці.',
	'settings_display_items_per_page' => 'Кількість повідомлень які будуть показані на одній сторінці (Головна).',
	'settings_display_items_per_page_admin' => 'Кількість повідомлень які будут показані на одній сторінці (Admin).',
	'settings_flsms_download' => 'Хаб для вхідних повідомлень',
	'settings_flsms_synchronize' => 'Синхронізує повідомлення з платформою Ushahidi',
	'settings_flsms_text_1' => 'Телефонні номери, через які були отримані повідомлення',
	'settings_google_analytics' => 'Відслідковує відвідувачів Вашого сайта. Отримайте детальну статистику про відвідувачів',
	'settings_locale' => 'Вибрати мову веб-сайта',
	'settings_manually_approve_users' => 'Якщо ви встановлюєте цей параметр "так", ви повинні схвалити кожного окремого користувача, який створить обліковий запис на вашому сайті, призначаючи їм ролі (тобто Член, Адмін, СуперАдмін).',
	'settings_map_provider' => 'Визначає, яка карта буде використана на сайті',
	'settings_map_timeline' => 'Це відображає на часовій шкалі дату і час надходження звіту',
	'settings_private_deployment' => 'Встановлення цього значення в істину або так зробить вашу Ushahidi приватною, тільки користувачі, які мають облікові записи, які ви вкажете, будуть мати доступ до системи.',
	'settings_require_email_confirmation' => 'Якщо встановлено "так", користувачі отримають email з посиланням підтвердження перед дозволом реєстрації в розгортанні. Якщо Ви дозволите це після того, як ваше розгортання брало користувачів, їм буде відправлений запит підтвердити їх обліковий запис, щоб їм дозволили продовжити використовувати її.',
	'settings_server_host' => 'Місцезнаходження повідомлень',
	'settings_server_password' => 'Пароль для Email адреси, що отримує повідомлення',
	'settings_server_port' => 'Порт для отримання доступа до вхідних повідомлень через Email',
	'settings_server_ssl_support' => 'Потрібно для більш безпечного обміну повідомленнями',
	'settings_server_type' => 'Технологія отримання доступа до вхідних повідомлень через Email',
	'settings_server_username' => 'Email адреса, на яку будуть приходити повідомлення',
	'settings_share_site_stats' => 'Дозволяє отримати статистику повідомлень через API.',
	'settings_site_copyright_statement' => 'Завжди добре додавати авторські права до роботи. Для допомоги у виборі правильної ліцензії для ваших потреб, відвідайте http://creativecommons.org/choose/.',
	'settings_site_email' => 'Це email на який будуть відправлені всі email сповіщення и повідомлення з форми контактів.',
	'settings_site_message' => 'Це назва сайта, що буде відображена в верхній частині головної сторінки. Вона корисна, якщо ви хочете повідомити щось користувачам. Щоб видалити це поле, видаліть текст.',
	'settings_site_name' => 'Це назва сайту, що показується нагорі',
	'settings_site_submit_report_message' => 'Повідомлення, яке буде показуватися користувачам на сторінці заповнення даних про новий повідомленні. Можливе використання для інформування про юридичну відповідальність або інших інструкцій.',
	'settings_site_tagline' => 'Опис веб сайта в декількох словах.',
	'settings_site_timezone' => 'Це часовий пояс, в якому ваш сайт буде працювати. Це впливає на будь-які дії, які ви задали, що використовують час і дату, а також поточний час за замовчуванням для звітів на передній і задній частині сайту.',
	'settings_twitter_configuration' => 'Вибрати хештег, який буде використаний у твіттері',
);
