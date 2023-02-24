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
define( 'DB_NAME', 'lodki-wp' );

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
define( 'AUTH_KEY',         'IijyYqFB~j_hwie,%C3N)aLqNz6xB]bO=_V+5,%0yOoUkE$7+ZSY9PQN[U7  bn*' );
define( 'SECURE_AUTH_KEY',  '! k9^;u1R?._X!E!u~F309zZc-fV1yVZl{]M2mwtJhFLGcT+ $@9n}bE?66`Kfhx' );
define( 'LOGGED_IN_KEY',    'PX:!>e;il+.U1y~^&Z9Y{l~iGZT7}c EpkhV@cv(X2UMg[,j:Y4FQ9q{# o|d~~6' );
define( 'NONCE_KEY',        '=v|V<]a;D&kmQ/GT)&dcz8,SGKCY8h)!sl|_Bgub`)@xv{~- EJOwfv;8Q5hm9y_' );
define( 'AUTH_SALT',        'CSVb-.q$7c,_pUC`7[d-Lny%H6X+q*nNlq+e2&26c_t`y}p&t>[o+jm4q9v`]Cxj' );
define( 'SECURE_AUTH_SALT', 'zYmNuBsRh2cGTHj!4B2ANCp=10PYX |a7,M~) [}Q8K3c}_QoN>dmdp>UH(-<)?U' );
define( 'LOGGED_IN_SALT',   ' t]9cTh`a[@z5D#e(iDD4lRR]1l+Wku#/K7)ri]2qV!@<+t)h*H6u0]h`jHsfQN+' );
define( 'NONCE_SALT',       'Qd8cI$HTPaP6hmJot-AchBcC)M9bLBkH,PS5o.;J/.iFmJ-a)][Mj10G5Q7i^l(R' );

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
