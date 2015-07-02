<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'mosinstruk_cms00');

/** Имя пользователя MySQL */
define('DB_USER', 'mosinstruk_wp');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'VjTsh6:V');

/** Имя сервера MySQL */
define('DB_HOST', 'mosinstruk.mysql');

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
define('AUTH_KEY',         'rh#PJ!Q!=oW%EOfW_; 9S^u{E1(mM0`vg<qb&d(*uNNT4dN`b3?n)cf/Ms`f>5ni');
define('SECURE_AUTH_KEY',  'L)^phOm GCwwwaJro??+^*<*`&10t]3(I!2@K;d7,xu3EV|x$2PcGNa)(C_SDQ_z');
define('LOGGED_IN_KEY',    '~I?` aCnCpq3<Guxm9ROy)(gyHTMieGpL./a7Rem2d$f)48njw=6TuyczeWh`&])');
define('NONCE_KEY',        '0L01QlKTLQ?,T=D5};1&Km|rmSFn6zerV.cH=YD0r41Mw:hqx4s* 2<GsX|>t:2/');
define('AUTH_SALT',        '-J!-hE(0@9y$xZB 1#Cul=@cbVwmRDoM!:`o9d8NXjCUsavGT6n11|UD-3f&GnMJ');
define('SECURE_AUTH_SALT', 'QI&>k(69l%?0894E$qSxYYpj3+PyUf/5bKC&TXp?P(lM1yaC%oynL`1tCR.s7fY=');
define('LOGGED_IN_SALT',   '_7<uJlv<mk#m,1OCQ(nFmJ2#hIu8HXZF@@b[9fj0jt,`34LojS9>A,$JF}_`aK8F');
define('NONCE_SALT',       '=HXH1~;1a-&8CCX9=7o7S]%^bH|+U?Y|+-eLM8Oo90YLs cZyEWW Ph*2MMv (7o');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
