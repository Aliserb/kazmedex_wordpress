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
 * * Настройки MySQL
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
define( 'DB_NAME', 'kazmede1_med' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'kazmede1_med' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '7W_kk4b8' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'srv-pleskdb29.ps.kz:3306' );

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
define( 'AUTH_KEY',         'vWe-P;t]Tlxw$4X&X5y9=Z=Oligh6Ct%]rHVO7g.k`J>H?7nTr8DvT_dple)sF!H' );
define( 'SECURE_AUTH_KEY',  'GVDiehob3b8JzdHO9/Pdy|-V&E1VIMUvHX=c&7O0ImN}KUkbvwYw.]M*N&YTGIB}' );
define( 'LOGGED_IN_KEY',    'bi)avV5#~KQ|M;zU~^G^!EN_<K.:GIGSWIl11S`Y3]`%w`zOc8B5P&jb0oK3,(/J' );
define( 'NONCE_KEY',        'n S6CZbC%Q`DWFaCr KMrh/p2)};mm^3;e>qY-F}AuwSdQ^4Mz8SIZs:q46z6[0p' );
define( 'AUTH_SALT',        ' V|Y<W;?hh]BvxsFbbd.p2819t^cZLm[,nQWQ?#Y~u[RF;.=j~p^anpA~&x?L,wp' );
define( 'SECURE_AUTH_SALT', 'tKR hS2lp$*Ze~-O(3k(m}Xd./u-Vtu;GfO3*#S~%-1Ps&vV=nO&_A||9U@a[X$x' );
define( 'LOGGED_IN_SALT',   '((LmEYrSJws##deJv[1PGBGl45(K6~9utf`8KYx40]})-%hrze[khToxfsZR@FM!' );
define( 'NONCE_SALT',       'TY{[_9]3[%[P)0)tes~ 9qc! N.1y;,sTG%1(45B(b;-+GIYn0ZXBv9M$T%C|@j/' );

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
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
