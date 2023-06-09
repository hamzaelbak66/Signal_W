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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'plugin' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'r^u$N7zh5Wx+]*lhKD`9XcPq%}eYYSaD0#wu`YJ_p8/?R^L)m>_9x<bSM?vBU[0$' );
define( 'SECURE_AUTH_KEY',  ']DM|PVFIs@7{MC&utc/=Dm6EK5</mfosFN3B%y93#p*6rJ]{.kw<V[:L%D]?1A:E' );
define( 'LOGGED_IN_KEY',    'eO!NNC$p{5F<UFG}iD,9xW2Z/!4&8tc]NaqDrjEsTG1IO=M$f9B:GS:4++8o<7&+' );
define( 'NONCE_KEY',        'k|wzD8)aNMKAR]]o9%7&JW*4wj4T8>YTZW]o,#05(puyQbXl-X(LAr!lyOKAwONC' );
define( 'AUTH_SALT',        'UXqfmd3>3VpqHu$X^R-7*t Hp7iqX}v`NjzUZCTK?h qu}%LYc.~&7EMeW<t H2)' );
define( 'SECURE_AUTH_SALT', 'u.O$P%xHjuu4gVomismtU?d2))2+SxUYwI-v#<dI9q+K]<qqdXmtRd,35JyW4 rs' );
define( 'LOGGED_IN_SALT',   '/,>8$Pe(GYMKpZ^RyZ=5WInW1&MYyU,W>,6U7o2@cZ<}=oei8b15r|`(r!UI3,S&' );
define( 'NONCE_SALT',       '{f?i[$jf@@]_uB!KilGi!Q5Le/Pw(HNhAWru>ELT-t<_GG$%{Q`8?a]>vibY;$=$' );
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
