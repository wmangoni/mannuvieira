<?php


// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'mannuvieira');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'thema');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'zMv_I.(4w1[+M&3-LW[R[~a9*/vN^O=K+UBc-+D-@,~G7?Q#(#[;OouArAyaZ&Jt');
define('SECURE_AUTH_KEY',  '^LLtaK{3`F @veDH+9+M,&Keez;&x&n`Iqfo-yEWxGl=gG-Z#-gKBah7H*~ x5y#');
define('LOGGED_IN_KEY',    ' b~v<[xJg]V(>1|cOEY-EW:&67V8Je7C<Qo@<U;|-[|7A(?RA#c~H:p(=?FD++6~');
define('NONCE_KEY',        'KA3)JLqvS Svj+34sGb+TB1s$bhu(Wb|`0uFy`VBJYekiN(K|%+:AuMG&p*6sRtV');
define('AUTH_SALT',        'IsC@W_+>9 ?MgOWS$BCThYKcm2LIP<Lc$Z-v#hf:QwCn&32pp2fv)w^55=yNw([r');
define('SECURE_AUTH_SALT', 'VT_JD.;=>f.6(&2^n4Z{4Pab>LZy|F9:GP_9F(x(1Y!YCWC3z;K.+.h|G#.6,#@<');
define('LOGGED_IN_SALT',   'JZE:`*k~gaItG8 ?*2 `NM FcM[EBU%+6^fCc$Xr!u*i:^ l8fs]^&M3pjx&5tKJ');
define('NONCE_SALT',       'fj,b]F{c|=Z]p.1qyp-A%2YDn6}d*)OXDMpwyRpmPv.]:~DF<y(u.5J$>*~nhx:d');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
