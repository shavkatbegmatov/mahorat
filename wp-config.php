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
define( 'DB_NAME', 'wordpress_mahorat' );

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
define( 'AUTH_KEY',         'k@1Fre4HS~V_eJ3>8%v-J+]-[&a&``b<1KV5v}yr3b`z?3lrW}bQfTYM|r_B$!MG' );
define( 'SECURE_AUTH_KEY',  '^QJyHN-3I!>c[(#ohoA &Byy>@j4*V7_?|zHe09Nx_`2IDL&yGg~+u74Jxth7H`E' );
define( 'LOGGED_IN_KEY',    ',XB=T%y_I)A)u7TzB>4r`Q*:FOeFzbqOLu6xg4dp6]Z}f=LqOTGbY+G}nY@z`l`|' );
define( 'NONCE_KEY',        'C}.(C7oj0!%DO^n2FN^LQHeNmB6YvM4w_>HC#{jSos|DcnqAbaTOO`Xds?}hF<h#' );
define( 'AUTH_SALT',        'rE-DP$G9Hu^-@Ob& 1(9z+ipt&Q354mBBir| YcY<.$A}X7W5&JQ1jXyKZdR7Y!6' );
define( 'SECURE_AUTH_SALT', 'JO0n_^pSMlg|f_s<sRr?<{YI?o2uUWK_onV:Ch%bffzl(:) hlIe`<lB7tP&g+UB' );
define( 'LOGGED_IN_SALT',   'C/BNQe~f!X#Ox-%E<R6I0_EN1IQhL)2NF<)/DGW[zQ@gd 1d(&_}VOk48(eFPMd/' );
define( 'NONCE_SALT',       'G)q]5E*`vA<6F]r~ uG6X!-=,:wyph)u$4AuuMD(LKDX <Lx(#hGBan+IaK.N2N_' );

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
