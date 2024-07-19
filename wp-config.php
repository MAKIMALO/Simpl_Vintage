<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Simpl_Vintage' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '=j-`4_M)J@/pVep8cW[QH|PWTb<jA|MhXx~ajm}brpCiEG;tzN3@Y;oN+2>hO(WY' );
define( 'SECURE_AUTH_KEY',  'K1B@c0B0uhhLN<,l7l}*s~O=yO5s^H=Oov4B?.8:C$AV/9&p0W.p-mOQu 6vC!tQ' );
define( 'LOGGED_IN_KEY',    '2u4FC_u8>@bBsovuZYl#uw))M/Vf<KB}9Oqi# Zorw?8n<3I.PQ mf)[MZxK>%io' );
define( 'NONCE_KEY',        'S_,fHV&f)]gqJ+s:_1)G0Z$_6isXdy;$1%ZUHx!c$(I4+*%0c!/`sxS1~^:1w0d%' );
define( 'AUTH_SALT',        '!J!qI{^sgZ5Lj&1Nb*t6EeN4)&o=kfH9WPr<5g3VIXir5<Ajb+hexEqKbMOvd.e?' );
define( 'SECURE_AUTH_SALT', ' #T04ceblz#]5PFhX8q9Ms_KlRNMxZ9-,[n,[tJn0QIwDj@jH4UX F$]HwZHZ!nv' );
define( 'LOGGED_IN_SALT',   'yc6Gt{lDHF2+xht6/g4[v@rEd%S7Vf^!8W&Bq%x5b-RaA+i?e,HPK[qil<z$%^jc' );
define( 'NONCE_SALT',       's2SMcr$~,.R_pCI{52O?hj9Jw!kAKKc+!;:*.5)/C&RH/bya*;cE:fTdi{}#B(Vu' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
