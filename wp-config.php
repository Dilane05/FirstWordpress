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
define( 'DB_NAME', 'firstwordpress' );

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
define( 'AUTH_KEY',         'zlkm3[lo&w;eN#8&<Pk-!%K5FY(j7pI}^Y?yybwNG_O>ETBlhs@?,!8&*gZpuV$f' );
define( 'SECURE_AUTH_KEY',  ',%73;Svs#naWB^p.7wahAdaYXe|.K&+/Wa&aoBD{yNk6=b_(u_{v_ISH4R(G#z68' );
define( 'LOGGED_IN_KEY',    'NpT}[5lH1+I9nz)f$*s9rVT7Q}U+%-8{bAecq(;~S{h&A(DD$nu@J|P1l3j[SLP%' );
define( 'NONCE_KEY',        'AMFXIMv=P~02KA0mVc%MSrm}63Ma6dLM-d{$x]-U<FS2/yHK{=,.j:IOC}ctjr~}' );
define( 'AUTH_SALT',        'e/>sr!ZnOwsp>6?Z%@vd2q2qcyxkRV4`:A[u<Z8C&P/!Ki?J$A(l_&j@ZR/eI_vY' );
define( 'SECURE_AUTH_SALT', '[6ESH(=id(qi.!b1sOl-g|wse%CPC5;*eG7xn{;x5~O4n6;dMPK8S!?WV(*:T-qk' );
define( 'LOGGED_IN_SALT',   'J4&[bQbI8tZIwO?6qw.^4r@Ki:]NRtF+NOG:4m{n+/0sOSrnI;MKx=vc>@;G+]/Q' );
define( 'NONCE_SALT',       'h#W`nWX45y6ZfOuN1qU{iINZQ#itXk=LKC^wa{]6MhJAQUBohmyHzNDy].p;T$BV' );
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
