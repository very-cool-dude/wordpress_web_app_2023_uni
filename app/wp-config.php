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
define( 'DB_NAME', 'app' );

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
define( 'AUTH_KEY',         '=-[;;si f0v1*mQ!0&?.V*L rN/K>/F2J]xBMx9pjL7~U&gGG((AGTs>g`ercMM}' );
define( 'SECURE_AUTH_KEY',  'hT/UNo?+PpBn]IO_^jt~3]Zc!n3+!S!tl?_.:wSi5(V~R#>0/W?%OWusi-d^(<Ig' );
define( 'LOGGED_IN_KEY',    ',GrD2;>AH3ij>9g5voS!{sh|W;9+q(x;SuUHm>weJ+C`h(L71o.`Y,d8+%=ICHV~' );
define( 'NONCE_KEY',        'OWAT^5Kljs5dwj;i#civi12-rPiE<V8VC&6mKZfKd/{6<o<-d`&i.[KZ +#WToul' );
define( 'AUTH_SALT',        'P:!rnrr~o,]C*#Tcy;/Fi]dQ Bm/d<eW58T2EA{):)yNCf}*vU,m@P[B:]Fk|K}&' );
define( 'SECURE_AUTH_SALT', 'X;Hck7jK2n1qR:-q76RgPk(]$-|0I )Td0eda}xg67ox|xe9icxN:Ei{G*HB+nO*' );
define( 'LOGGED_IN_SALT',   '*]^6I:3{fH[|=W#;(Vw{EWRWn=dbT.|XwDf?T*V$(T&Qf)h@>Ry5eu;X}VjD,b7>' );
define( 'NONCE_SALT',       'W.Rj::2Y$ D}l,dw^Z-S+ha[kyQ-)13!{V==rW{W8:DRjW3cZ(#Yq[ESh XLtO9T' );

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
