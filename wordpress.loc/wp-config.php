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
define( 'DB_NAME', 'Veron' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'Veron' );

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
define( 'AUTH_KEY',         'N/uh?6DximdojD,XxaTr~Dvx>4a*C@4lk>LY2O!T,TSs2a&>Q]N1N@9^|p>+=_CZ' );
define( 'SECURE_AUTH_KEY',  'c~Ba`%3:FouuvP$O1- eds.(z)_!ogoTYx, 70kKF./i*Avzg-Cy]J)G4K6C=N3&' );
define( 'LOGGED_IN_KEY',    '8Bq+RwvhFPWp/m4^?iy2w{|ldG0h?@PM1B7&v%Y`@MG3$bvZdf ,OV.%uAfRtMr&' );
define( 'NONCE_KEY',        '79@pa*OZ#`m>31-s@^klyzLi#i26U]j/uC6RmYNC:s|7qBr^Gpks,G&+%jOJ]2_G' );
define( 'AUTH_SALT',        '8^A3d,`&/o_&UGa{>,5u{~=H,K<qkemXne-B{D#$JBwS2SlZ{;3,].j^Pab(~T*6' );
define( 'SECURE_AUTH_SALT', '*$UjbBIUfx(<~&}Ib`uoc27h:$H$,8pn1gbDV-|5rnil;Gl>=|^a Y#yP{ @]:]R' );
define( 'LOGGED_IN_SALT',   'MMG,GF}3 J*GFeA+I3+h(k|nbS[@|Q4SQy{<c 2VKrJGgzn{W.]C>ihh]K;EE?(]' );
define( 'NONCE_SALT',       'Yk1~Ou10a{,5VAGPwwiQA0nC /KP{Tu)`BJ?!C1PqgpJs.SPB[!=B{~z{8i@lA$6' );

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
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'wordpress.loc');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
