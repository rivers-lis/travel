<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'travel');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1:3406');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tv:]mP*Pq/!TviRS1YDD3UoMQKQkBbzX*--!jW(#@p->6O`F%|F<+Wg5)~1zR@vf');
define('SECURE_AUTH_KEY',  'p~x+iPz959JZC/z0e/5(yE<m!|;Jzr9Q0Mi.ZeTtm=.1/zcaM)EmQ$KL=q}6a+r8');
define('LOGGED_IN_KEY',    '0)$w;sCzYQiN.L8wF1eLmdHA;U{jc_LN`bg$Gr!4-e,9Cg0J.pRcyOeY.RK%7%[|');
define('NONCE_KEY',        'B^9foIp8En{^SH+-Au65|R=(_e`c5e<b+]1.3U2oo-J|n_+14>?ko(yzU}`_kTuh');
define('AUTH_SALT',        '!(h1<i%twD0dZ1tGMv<a>ro TT)U<XvAs-|EQ3.G*<U]jFXGZ){u3H*=/kah%g; ');
define('SECURE_AUTH_SALT', 'FM&uE6|#:sCsdu9U9of-8;8_rCmtpT|i3|V{:SGiIEWFy{H].lPlVV}%+[}oOGIg');
define('LOGGED_IN_SALT',   '2ner4>|)K9ce2uKkb+(a1r1m2JCn!3D~2+-MDZ$4/,r+5|vUOotwN!i#)G+w<)(Q');
define('NONCE_SALT',       'EadmcKB96h;qD)~|`;lF+HdF|iGP`p)jZ&j/<4+}99h0E8[%QP]n,EnS@yQ5Vy%4');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
