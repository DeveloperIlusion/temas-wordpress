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
define( 'DB_NAME', 'projeto_x' );

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
define( 'AUTH_KEY',         'jip79Q[clR9CcMafKJ#^Qm:cVo6UnWE=/}`bwst)&@Eo&8@F~t[$(BX6uowU0+IT' );
define( 'SECURE_AUTH_KEY',  '|Nj+|H4YSGQ~XeCFyC{8:e,[AU~OHzN]o|u@8}yar.JH8niJ3%^}U@?9NG.vO(?^' );
define( 'LOGGED_IN_KEY',    ',&n&[)J^`_G:CGlmdMhGz`}eg~5_VQi-JNjhXz1WqotXJ&q.F{|.U6S]t;Nx#t%1' );
define( 'NONCE_KEY',        'uGA3=m/VBnE%b{ms6aPFKIYU} w$:]aa@C*CTa[MGgo`*assp+U5E>oV(:i[VkxW' );
define( 'AUTH_SALT',        'Yb5b:WtBJu]mott03jS8&Cwr26dw9=U7MlW<]`td=-xAEUPHARkKde2xDSK=c3fg' );
define( 'SECURE_AUTH_SALT', '!)waB9g&y%}kT-%BP#;2~37k0,6nv<moChvLh:?4wI&Nfq&&_BL{K%@mi;$$=R%I' );
define( 'LOGGED_IN_SALT',   'iSNcXlp )Q*ZKXyzvhn-TFcv{N.k#K+`._7VXE#n%[(uq$T5B~Aa?dFN}{Gj^R` ' );
define( 'NONCE_SALT',       'Xs%Q/:/zju0!c6zdvE]Vv7-{iwg[YP(60k!]Aj>A`EZfHe+{IfAL5|k-qVse]:FL' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'projeto_x_';

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
