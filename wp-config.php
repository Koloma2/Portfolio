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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'u}08)073%t0;oa,aM.R`jQ<3e9R244Sl>jq3_jr6ozl+)SXu+Tde-.@Aza7t|-$|' );
define( 'SECURE_AUTH_KEY',  'u-AU3MjYyzxq]_/#_6qQYuzlff,6B /hh`(_h!++vCl, :ni3@FT;<=Ak ,fd+0f' );
define( 'LOGGED_IN_KEY',    ';j(UCoRn4&H%>O}Bd!jZfc1.5%7sQw#Yrlp*41qpVdB4L(D@q{W{j~rQuPs1FAWk' );
define( 'NONCE_KEY',        'jM^XS7VVlt|[eyg=VJ:#oETWVOlMwZmJ%a4n;t-/u%;ix4C$KEa&V5*v+/@]qCS-' );
define( 'AUTH_SALT',        '#uTAtozYQq}iVP@b0k!AtU4`tn/|r$s@xw^{x0Sy0}q4L*d6{?D1!lw0<UO4w*[k' );
define( 'SECURE_AUTH_SALT', '.YFsiQW#I5<z^NntYd^4DRB!t_@1FbJS=xM6fl}g;E+N.o#*Q#aF;zFVejNW?S]9' );
define( 'LOGGED_IN_SALT',   'oxrFB1N#wU5>6eYfl0Dnljxh02{Je9;_.}La(o;~zDwE^|PJ9(BQjH77G$<e}2Rf' );
define( 'NONCE_SALT',       '%qL>H6y%sd,A?j1*=DY,PLBDY^uhN0^brB!,?QE4,~o!;80nZ2h&K-wIjb3_CXH}' );
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
