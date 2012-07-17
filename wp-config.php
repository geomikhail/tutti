<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'laM6!`y=ZcH*{-:W/4c@p~o~)[[B|w>jfm>-P,(/%m/MwzZ~tJ%VWAhVC$/g#X,C');
define('SECURE_AUTH_KEY',  '^8o;gj7YyN7*@lj:LC^$w1ZtVev*<7w8[5SksgZGu+]!q@{XNntFaJVSp`jo eLl');
define('LOGGED_IN_KEY',    '-;lON)&bPF:RoSCJ(UgS|A}%nd;z!56BkG&8[D.T,+;9uk`p8;ev+XJC9w(=$~)0');
define('NONCE_KEY',        '|++e*xE9Bd-Frj~MeA{kNuU`GF&?%(r,$](zI EIK4TRJZ6npwE lf<M_)Vx11P]');
define('AUTH_SALT',        '6rMB2%D$_{v[@PRZRQnw?*`^&;)x96sjfDH$7j usm{?dD>_nWjsAj_XWH3ajfI9');
define('SECURE_AUTH_SALT', 'x!,50g/EFcC4xJ3}jc(CXx%;em$bcWO%5Thv)9N+5UK|ea&E~HWaf89QsN{(vmTx');
define('LOGGED_IN_SALT',   'YCwu[$|Sa%+euq+R-oePaIOhLVg;?)iOgVOD}BG)CkUyRA_*!Pl][~B<PL/3`@b9');
define('NONCE_SALT',       'UKYmVUYk6_d&Jsuh$NcCgh.vz:#`=!:] Z+Gq]zDdz|ala-oZ;T4YK+;=vXl%n<S');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
