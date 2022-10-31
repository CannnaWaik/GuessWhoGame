<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'guess_who' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';;m0IDG!CxR*E`RC?}8JL7aa[ASy-[8F%$OeJ6XFtPd3x6*&T4?>=DI%_~IQb&1o' );
define( 'SECURE_AUTH_KEY',  'eXW%&+_(gh,Ag2A,se=L+V,iJj%#n!l6H%3,sm:Eq4q$xAa}S#N4UhTZN2i?Cw?N' );
define( 'LOGGED_IN_KEY',    ']Vz]#?Us].X?&wIPRPtPTAdxaMs^sGrP<DDbpmOAC9Zr<RgwkW}5A~-Og6s}!^@+' );
define( 'NONCE_KEY',        'W~La[M8xrrQTgdLAU)z?vKrTdFf{E8ay:FUWdr{mix*]Hx#xX*VWBv]D(0*6+VDa' );
define( 'AUTH_SALT',        'Z3(,)ax&-O]u/:>Iz]]>ct-T1*Gxk|f 2NgsVO@$|As8B Pp%,KpEut%e|ZQ(y&M' );
define( 'SECURE_AUTH_SALT', 'qg%P{%gmKqUD}t!zv5ofAG[uN4+q2mzwG4LD97A(H+z>A~q*D3cC4{j>CuE{kVy2' );
define( 'LOGGED_IN_SALT',   '< ?k?}Tl)]4pK&S~s.zXje.F=od99cDK0VHNoq3vIE!/teJK,R}$76./kn@Z*07V' );
define( 'NONCE_SALT',       'yK*7 !u)|${;KX9KlY=~GvZ8jVJ*%Ub[2@Xf=^<;;^R{$4&#kNsJ=`UwNr(%v[n>' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
