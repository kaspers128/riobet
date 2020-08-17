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
define( 'DB_NAME', 'riobet' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xFf9:g/_LnJI75-T%$)gW{,_N8<zV/Jc>!Ow;3$O`U:C4XF$S)8,@y8E+F4w%^jx' );
define( 'SECURE_AUTH_KEY',  '[0w+<Qc+~su|VpC[P/vS3P8l(aAOXNLyxwi}l|y/-_rfGRy^k03t<`iF~DVV_V{7' );
define( 'LOGGED_IN_KEY',    'AP9$9%mFcH<Y5wHeGFHUW@~k*%nqH!r*R]  A2[q!(VT[?cTWOas)5|BME:)c_9K' );
define( 'NONCE_KEY',        '~wQ#xelHb/[RlN]3,!Tp_},RVCKe(Lx@?Fv][uVWGAMT|?_o7+G/zIrU~vq$T 9Y' );
define( 'AUTH_SALT',        'R7j5Nb!IoBx?[9u5O1FAyGp2_o#eKL#I{Jl&[(61olCdB1[fZ(c^]D;sFIC@E7%T' );
define( 'SECURE_AUTH_SALT', 'cPq8AjmR5c(DY7oc&LT/mL)y5FT6HjsAS6o4R>9~1l.Nm<;$q~UT/(bS]~ 7+ TX' );
define( 'LOGGED_IN_SALT',   'KA^w,Pl.hEd&(N)dE)0EUyc*+065uDQg7iarmVVl.mB-7i^w/WiId.)q?5B_[1-5' );
define( 'NONCE_SALT',       'Iou{y*8i.D%K3j2t.`!&DfBbv}bp6kzvRl_KQj%<YSf^p_i!||q[`T`$x;!A-L?P' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD','direct');
