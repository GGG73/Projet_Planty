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
define( 'DB_NAME', 'Planty' );

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
define( 'AUTH_KEY',         '+))Av21<Mr3C2=Y<zM/_<JNFhyWT03+E>]Q(` Y/sJ~@;FVlsn>rJbSiRsw$]tCj' );
define( 'SECURE_AUTH_KEY',  'vcg9x=|RFkU;c:$QuYat^Gr^49&4/[!]ZZ=mJruT%nvl@%Go>zpO?5,@=_p<=&,s' );
define( 'LOGGED_IN_KEY',    'M@h*hA>@LBog!J9Lyg|R;!-lUJKNq+r0Vda_x72_`CC-S1ipdx<IH=8y*4v]*<+9' );
define( 'NONCE_KEY',        'vteI]X-p`$e)CJppx`%sAf=e^4W,mP?`OQ?k)],] E2]c ypy(o%[.}Kz[k1])ve' );
define( 'AUTH_SALT',        'X7DKq{Odm*I/1t$n_U63ke96:q|iF/a^,VKs:d1/v$in`B{_2GHa3p O#Ow03CG}' );
define( 'SECURE_AUTH_SALT', 'pDv0XJ>W3okmyH~Cwa=c H;RQOaJD!za#)OMYQAuZlS,u<8l)V_ahU#Yio8$$)`Z' );
define( 'LOGGED_IN_SALT',   'L jXuTN]q-.o*Wiia|l-Y!Fo>5&b!Wfm038;1nM)psM_e>qAkiH_O!|(+P<*O{x;' );
define( 'NONCE_SALT',       ',v7dguWCo>Xvpe/)Fsvnmx:BDt|4Nsx!];mrV0`[+`P3yi(RjG+P|3eXht]a+7k<' );
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
