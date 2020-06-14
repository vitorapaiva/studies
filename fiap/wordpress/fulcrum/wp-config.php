<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Veus456...' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?C6iZ$8>`zAYseRY-5Y!]I$_|pJ^ZFs<]9{J9Y11LPwl;fCZ89f8r5:u)ITPu+i1');
define('SECURE_AUTH_KEY',  'O~ENj,o[pl&e~!+Q6Yo+=CT!?_J=xRVRveJ+%YG[TfRxV)*=83x{?;U</9lwXlGm');
define('LOGGED_IN_KEY',    '-pdP-9Q}xk]e#jpMsG4o+e-ND~U^O$8,cHH0 H-eD7U2uviOo)U`hck|Xe/|+wDL');
define('NONCE_KEY',        '3U&v($wlb~KaA};)PF-AHRLZ[.xD].E>]&h2Z;SjvgY>;;tv|Fjrt}|OQ+{1{A5v');
define('AUTH_SALT',        '#Wsbha~Z;<gB.{C?3I+ZBe_@VYo;?b(4p$.a-Lm6ap,f-`u}s`eP?P8]It66t2DK');
define('SECURE_AUTH_SALT', '6L*|Jm!8])e=^~8`Ozw[zf}^xq/H5Y-+) |0evk2rj$t,KBSp$yq,22<BO%MX5g-');
define('LOGGED_IN_SALT',   'vQ)cmZw$U|RD+3#H#}l26vA5H2CPkf~Bc){]xV0WhE|M`lz2`XSP,T/)?0w6%]e*');
define('NONCE_SALT',       '_5?ADuL%}B9$kX/5c% eOx]3CIKxjrjXE1&b^BmoFZceAMVIz`%ZiKCpt5f-]IAx');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
