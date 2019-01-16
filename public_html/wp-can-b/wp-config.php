<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'canb_wp');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'password');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|GJxmh*<y`1_EiD;{.c5^32v11$n;B7K-SX1(b8|3~FZXNnnC]mGE}{Fzd,o!;<i');
define('SECURE_AUTH_KEY',  'Oyd~Pp<#:=Jj=3;*SAW+wEUS47i,AP7ZD>}E nz`3(TW(MD^s Q+7:Ly(Q[w,El ');
define('LOGGED_IN_KEY',    's!WG^f|euO0A/@ctVN7(EB`e,l80O?)<FmJ^f}r-f+,SK(&;F4yjW`>%i5*1E,f_');
define('NONCE_KEY',        'iig+)7To%>n[T[rc@_prd2{VCA+v>+Vpq?%gH5N^=d>h:0 u#sPel5fI5%@-oSN,');
define('AUTH_SALT',        '%Ae7s]]+Yd(w:-k&0U[?DJIqUb[[~]!V[xx5<Z}^9JOR_2X$1ff}U]y;p=D9~C t');
define('SECURE_AUTH_SALT', '_nRNOMtEL|[/}UU_>B8;*btir%-g_:i*`Y/%L*m09cE{G*Y+4C8XJ8Vrv#XN,fNt');
define('LOGGED_IN_SALT',   'Gbz{l[@Tacw=>^oU>Si9iEJ:|AFG&|xh[y{etnK4G#Mpc?z4rjkk^+8/J!(Rq$ws');
define('NONCE_SALT',       'KHslNFpdM?!{>@;lIvPNdpo?7$Z*qCS3L[eNP%=!/Al>-WepU7:;Dp5s;zv[gV6H');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
