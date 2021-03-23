<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */
if(isset($_ENV['DATABASE_URL'])) {
  $db = parse_url(getenv('DATABASE_URL') ? getenv('DATABASE_URL') : getenv('DATABASE_URL'));

  define('DB_NAME', trim($db['path'],'/'));
  define('DB_USER', $db['user']);
  define('DB_PASSWORD', $db['pass']);
  define('DB_HOST', $db['host']);
  define('DB_CHARSET', 'utf8');
  define('DB_COLLATE', '');
} else {
  

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'sharepic' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );
}
/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm{ZR P4YQjj&8H./Kes+G]m]UnvdUA|Y5Cy4G+N}j1az%.;]o5+;%%Y}o6!SYjx<' );
define( 'SECURE_AUTH_KEY',  'L.VA_Ym+54rh:-#^rMd$:W?)gex9;wFl{]CGFhE-Z&Jix*bC9wqsD~!>mYcrvxoY' );
define( 'LOGGED_IN_KEY',    'b7![dv6Ckt5+%:FM*<r8cC[+eTUaGd6ed8 oTD=Eywg~[g{z~k6rbeyS0he9ur~g' );
define( 'NONCE_KEY',        '~4JOS9UR|CfAXKeihI!OgV(&Tpc.GbVT/eYzHH_}bwURkc{s@XYA($BN$dJ]T?vd' );
define( 'AUTH_SALT',        ';,}~:lK5CNUyemz**?HwTG1RwbIUx78E(s%`FNHluBAK9z#W#%fw[Z@N1#0}?v70' );
define( 'SECURE_AUTH_SALT', '/6cT7 F ;+__v,xTSGU:Y:#.!|o<`LhsKqjz.!wvHFAsln@2KFYh$*UacEs!E9lj' );
define( 'LOGGED_IN_SALT',   'q;.T1LGZwofg6Q?Cw}fJFguqDNj(dI7%?jhu g%!2P,xxn|N_YmsX_cK8h?0!:At' );
define( 'NONCE_SALT',       '`/k%,tHKpWrL,<h([*W((hYJ}8QJi%/hz66Ud@,0Yt5Fztk(%S5Sr!t>E5v]I#S:' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
