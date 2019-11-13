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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'test' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '/V&:%B%(ut5F<wn7vY*aaX`Z51n2|7^aa-P6F4B3L=Lik)JQ:lG;S?*cCc~)E(mK' );
define( 'SECURE_AUTH_KEY',  'vp-.8{dhzXJ.{Ued7=[+^Fmh5<5<Uj_s&^5|)@m-4|$&bK9i,K86 k=O>hnV?Kry' );
define( 'LOGGED_IN_KEY',    '*NxP$P}4R9*2tfJ;!2-t;wXy3WW<e9p:9P.Y-A35S3x!c~g?|i<rZh2(%jz}+c9K' );
define( 'NONCE_KEY',        '{5Xkcy|`m d0;`KLGYAlhZvz/[JpFIyUJ#{jgddS7v<qdI]p}kutbmr^HG08{7B`' );
define( 'AUTH_SALT',        ';A4#F-P)h*&|Fu1W>Q*hC}pf|#+`i`|=$</CT?~J:ovz%5nOm+Ir(hO<<rTN&iuc' );
define( 'SECURE_AUTH_SALT', '}h;y )OtLp981T,#=yy`2Z)}d#b9jU(wFc!taUB@NA<R429ryM1=~7d}bqKveEa(' );
define( 'LOGGED_IN_SALT',   '5a|ay00[?5.Qmd=Fa)^]pZ3s.Y*,o|<Qq[e]Weol9O;}~~n+<)*? a]FWsE,};dF' );
define( 'NONCE_SALT',       '3E{wn$0i&*udUrhAf )V/j~/`k0npM%D4v/5;+2G/n3LOcl9xT}>`FoF}q2!.9%q' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
