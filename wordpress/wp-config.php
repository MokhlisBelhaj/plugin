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
define( 'AUTH_KEY',         'w]HX=pNqzlj{oR8y|Q>ST>@KOwA*1oV9>,[n#aekFkXz@xEI8QYuiwwrg|VLy~6Y' );
define( 'SECURE_AUTH_KEY',  '`]`)rl$a(-7fNCJ)fcOb7yP}U2#tC#Wr->92PNs0r85kF3jKm8}<*sNE&%;q|NaS' );
define( 'LOGGED_IN_KEY',    '|IY;:9]_nxgQgQc$kw>M90?$JpuB..I4dkfLd6?Q&dZ;j{ED7;!R9{HWTv<Lr]Nh' );
define( 'NONCE_KEY',        '};#n!j]h^;DE1uBh<e%Z+lM5;5)<70(]-{`|fIX90o|G^WfgBS,Z3`mFx_9Tj]m!' );
define( 'AUTH_SALT',        'w~ofTX,Rwc>#74Ml*uvkw/5{eLNnF~y4o4&pRoXJDus%iG?on#m=Zel&Gh,uvA+d' );
define( 'SECURE_AUTH_SALT', 'ejd V]D>BV~yQ3c/-p)~4B;4Ci@9x5DR=PWVKP^1uu+; (I@uW$uKE]}jYsC:EEZ' );
define( 'LOGGED_IN_SALT',   ' 1UT]B#4tF1Vu(I7$Lk3##0AD&RR|3UDkh:mj-R}h.)VWriD^n NsR)G9o_.^q5A' );
define( 'NONCE_SALT',       'O=t.C}|1:$}I~;7Kbs 0k~vH:Ww+Q}M+XUbd,OwH{7w-(psoq[n XMZpr=q)I$ip' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'pl_';

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
