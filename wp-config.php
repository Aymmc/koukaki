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
define( 'DB_NAME', 'koukaki' );

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
define( 'AUTH_KEY',         ',#<o;vBd^l5]8OhMuv<KonrZ0,PSJ]Al~6ok2Kd ^y-5p4og ^`-D^]#fCh.=Es?' );
define( 'SECURE_AUTH_KEY',  'c&!Q2*lP]o*5%ev=?qkPSFHa 8F;Hkz6v.xC$i=ReI;!?Srf5,7}pf]<G)cTF:Yl' );
define( 'LOGGED_IN_KEY',    '28MUuB-tz^0UVk*UNG&-0]w7[LT21L/vNGGB~Zh.(0V@H8Nk&oG(]!}F,mi!.:Am' );
define( 'NONCE_KEY',        '!ieAKx^(jU<|;d  nhH`DZfX.1uHSvte`2?-o.yWX.i|LFIsP7X$x-u/Di6Z;f2~' );
define( 'AUTH_SALT',        'v0IPWj-r7po,}3 vio=_(r{g#!Evkm.#PrQB{~;%0]!Yj3u)OZ=ha5vS~U&@rJbG' );
define( 'SECURE_AUTH_SALT', '81d,gDh7oE`2`_2KQH+1me64-=Y|G|nxxny%o{4bP,7(SN^Rdj>VSoE9Ti 1]P^t' );
define( 'LOGGED_IN_SALT',   '|wfkd:s&*P*dAMTlBtTL2jQU*-/oQdp.<$ytVkpbAt?RNj~4s^2Hr1%##Xl,`@)R' );
define( 'NONCE_SALT',       '%CwXju( y]$BcMI2PaR4B4?nGX<z^M3ZU[BN#s-<7`RX9rB)2e@TU_J)y>@fvo?[' );
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
