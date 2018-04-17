<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress_espace_membres');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';o>g-nnBEPg}%39i+ #RGPwQ:SK<pn,4^4fv^eVc:<Z]55,l^8m?5UsMtY#JdVAD');
define('SECURE_AUTH_KEY',  '`rRq1;bZtC-,,_,zRBz-ts6w v*kf,4F^1G+@TWTXR)1}Mts3 fu^eh2V,2B@uX]');
define('LOGGED_IN_KEY',    'lS:,dnm1/7lg]4PV[K#Cw%eka28P81Jt/+mErkCP6@rsC/)&pQAd=vAxmTLRYi5Q');
define('NONCE_KEY',        'VQHD+aH5S7Wf33,Tu~:_ERGJX)N1Hh,M,IA&u8Lo?[(]Igc~oHs@g5BfVMmr+mG.');
define('AUTH_SALT',        'OR1XI,l%39NgMS-0,ym* W::UX;mAIOd0O?R8X}*kQE1KWR(T/>Xz|zay6&GD[;>');
define('SECURE_AUTH_SALT', 'P[#@]s4&XS6YN.vb)BQWWhQAPjrrQ nk<0,CxB@[.r@.~u/YOzpqtT u @C;ck)#');
define('LOGGED_IN_SALT',   '%$K5$t8O:NM87ZtkTM[El+H5r#^Nu,/d,xi(u1[l5Uu4[08fBV3E3=^ginVx{fLE');
define('NONCE_SALT',       'nUe{2>?Wd(OoWtsTJXmuWqQ:MIC7/ET9V/I>B4=jvL P2*G.2guOq%9<A-:*v!jm');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');