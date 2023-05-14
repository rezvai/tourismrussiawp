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
define( 'DB_NAME', 'beautiful_russia' );

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
define( 'AUTH_KEY',         '_uIF(6TiHo;c+etnZ3R/6wFoe<2T`Icj*7[JcSxz-KUK&6rytT^d`*-9|/)1)Gc]' );
define( 'SECURE_AUTH_KEY',  'TJ`pfz1Lx uic) W+&2mmfse(%4gbQlWt}[tex,h`)tL2B+r[DW|S|Y~k|&ClI{6' );
define( 'LOGGED_IN_KEY',    'F~;l#S.se{LcM$Nv$$rI;)VjEM,Swtn!Bxesy{??%7:PhIfZ0ye<_Wps)I(h(uEJ' );
define( 'NONCE_KEY',        '<zX<F~wnQ9L_T&b(Uet~e:(dUQP%X.3@Zls,:s@iO^~ic@i-^w18sr^1T^`<XbT?' );
define( 'AUTH_SALT',        'q/vIZS^)4h_URi#p$fK3{X#_e=hG.< pAWhILa9<Q8(l[SJg#FJ[=D=)r%rSWzdS' );
define( 'SECURE_AUTH_SALT', 'C{uN$!RM03H3tVHvW#./@yV7Cmk+(>GU~J8{6tYE]}BfvDjWLK3.GFvIl#rYtD/Z' );
define( 'LOGGED_IN_SALT',   '+FxDBEGZ=!p]7=>>x.5Qbp03Tqb:{7neTpsRdifX@=DM;Rn[Rto>-CGM&4(SHKQ ' );
define( 'NONCE_SALT',       'C7~Xw^=l<u5+88M +YIRIjKOZTkcw9u}FEoMO,dwxDy<oG=YL)$Yg+Huv>5TaOc?' );

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
