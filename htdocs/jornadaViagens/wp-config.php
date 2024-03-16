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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'JornadaViagens' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '*g[-X.i;d6|q;^7;nM_$@0~hYI_wFA&:!4vRb{G4AgTL]u0MGP(D|uaec?L3bG7A' );
define( 'SECURE_AUTH_KEY',  '7)=5(TU<(V4ME`BI7&=u1uY!~Yx;.`*@qH<%fH/`=?Vy:.g^`57X+@6&tT|O}3$L' );
define( 'LOGGED_IN_KEY',    ')SXB!:}+$EI866o3K53+@<Sn^*(={B71IgX@Ha`ScPO/6WT&<d:Nf SYB{.LIo>a' );
define( 'NONCE_KEY',        'ARkPm?c,sdZbKw|*<-v:syC`3<[lxM;Duwo<r-i>Q:OuDI:}),;htlwF8KcoDbRu' );
define( 'AUTH_SALT',        'eFqP!l4O_pnw?:Cd(aX1s0KJ{B?b%d}x@`4Qm)2Q(>( 6>b{$/T{S:ZZ*_*p]1Di' );
define( 'SECURE_AUTH_SALT', '*RqhUNYryu9.L@-`1#f!=%wPcGd*an?Otc{Kfv7S]^=;GYJMd3W23Ne+@ZB.J2HF' );
define( 'LOGGED_IN_SALT',   'aEa bP O(qR|=Ipa*a2i2I}mm4XN2Nc5X.=X?f0[{9Cd[S4j8>db05zM}b bAiqG' );
define( 'NONCE_SALT',       '/UAwwiy2g8aP,^1HFlAU5o?!@_}tXq$z,nuGk5OHCO%K,LkoXp4&.(MuxXV+ELT<' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'jvwp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
