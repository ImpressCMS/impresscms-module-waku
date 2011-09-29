
XOOPS / ImpressCMS / XOOPS Cube Legacy ----------------------------------------
add CMS frame - WAKU 1.22
---------------------------------------- Presented by Keiichi SHIGA, 2004-2011.


このモジュールは XOOPS 2.0 仕様のモジュールとしているため、
XOOPS 2.0 仕様のモジュールが動作する CMS で動作する事が可能です。

・XOOPS 2.0 / 2.3 以降 ( XOOPS Project 提供・メイン対応)
・ImpressCMS
・XOOPS Cube Legacy 2.1 以降 (互換モジュールとして動作可能)
・その他 XOOPS 2.0 仕様のモジュールに対応した CMS

下記では XOOPS という表記を用いていますが、
それぞれご利用の CMS に読み替えてご参照下さい。


・WAKU とは？ -----------------------------------------------------------------

index.html を waku のドキュメントフォルダに置いて

　XOOPS/modules/waku/index.php/index.html

とすれば XOOPS のヘッダ・フッタを含めて表示されます。


「枠」= WAKU
　　　　・周囲をふちどる線、四方を取り囲むもの。
　　　　・器具・建具などの縁(ふち)にしたもの。

XOOPS でファイル文章等を囲むという意味で、この名称を用いています。

XOOPS 2.0 時代は「Auth モジュール」という名前で公開されていましたが、
名前と実際の用途が変化しつつあったため、名称を WAKU に改めています。


・インストールと使用方法 ------------------------------------------------------

フォルダ(ディレクトリ) waku は変更しても動作するようになっています。
用途に応じて変更を行って下さい。
また、sample が指定ユーザに表示されるファイルとなります。
できれば URL で参照できない場所に置くのがおすすめです。

合わせて xoops_version.php を変更します。
WAKU では英語表記になりましたが、日本語表記を下記に示します。
サブメニューも追加したい場合は記載の通り追記して下さい。

	// ● モジュール名
	// メインメニューに表示される名称です。
	$modversion['name'] = 'WAKU sample';

	// ● 保管先ディレクトリ
	// ディレクトリ auth から別の名前にした場合は変更して下さい。
	$modversion['dirname'] = "waku";

	// ● サブメニュー
	// サブメニューを追加したい場合は以下の記載を追加します。
	//  $modversion['sub'][1]['name'] = "メニュー名";
	//  $modversion['sub'][1]['url'] = 'index.php/ファイル名';
	// Rewrite を用いる場合は index.php を外します。
	//  $modversion['sub'][1]['name'] = "メニュー名";
	//  $modversion['sub'][1]['url'] = 'ファイル名';
	// 言語別にメニュー名を分けたい場合は 
	//  $modversion['sub'][1]['name'] = _AT_MENU_1;
	//  $modversion['sub'][1]['url'] = 'index.php/ファイル名';
	// とし、lunguage/(言語)/main.php に以下を追加します。
	//  define ( "_AT_MENU_1" , "メニュー名"); 

また、config.php も設定して下さい。

	// ● ドキュメントフォルダ(ディレクトリ)
	// このディレクトリ下に置かれたファイルは
	// XOOPS の認証を経由して参照できます。
	// 　フォルダ名のみの場合は
	// 　waku フォルダの下に置かれたフォルダです。
	// 　このソースを知っている人から直接参照されるのを逃れるため、
	// 　必ず sample から変更して下さい。

	$waku_dir = "sample";

	// 直接パスを指定する事も可能です。
	// できれば trust、lib・data フォルダのように
	// URL で参照できない場所に置くのがベストです。
	// $waku_dir = "/home/user/page";


	// ● 区切り(デリミタ)
	// 通常はこのままで構いません。index.php/ファイル名 となります。
	// 不都合が生じている場合は "?" に変更して動作できます。
	// この場合は index.php?ファイル名 となります。

	$waku_delimiter = "/";


	// ● Rewrite の使用
	// Rewitre が使える場合、index.php/ を省略する事が出来ます。
	// 0 = 使用しない…… waku/index.php/ファイル waku/index.php?ファイル
	// 1 = 使用する……… waku/ファイル ( .htaccess が必要)

	$waku_rewrite = 0;


	// ● ページ変更の方法
	// 0 = Location を用いる……通常はこのままで構いません。
	// 1 = redirect_header を用いる……
	//       バナー広告が自動追加される環境はこちら。

	$waku_redirect = 0;


	// ● 拒否する文字列
	// 「許可・拒否するユーザ群」の値で
	// 下に記載した文字列を入れた場合、拒否され、参照できません。

	$waku_deny = "/deny/";


	// ● ユーザの許可・拒否およびデフォルトファイル名
	// "ユーザ名" => "ファイル名・URL または 拒否文字列", です。
	// 　ユーザ名は /guest でログインしていない状態での制御となります。
	// 　また、/default で記載されていないユーザの状態となります。
	// ファイル名は XOOPS/modules/auth/ のみで入った際に
	// 参照されるファイル名です。
	// index.html 等であっても省略せずに記載して下さい。
	// index.php は使用できません。index.html や default.php 等に
	// 変えて下さい。
	// 　URL も記載できます。その URL へ飛ばす事ができます。
	// 　http:// https:// 等も省略せずに記載して下さい。
	// 「拒否する文字列」に記載された文字列を入れると
	// そのユーザは拒否となります。

	$waku_user = array (
		"/default"	=> "index.html" );

	//$waku_user = array (
	//	"user123"	=> "user.html",
	//	"user234"	=> "user.html",
	//	"userurl"	=> "http://url.com/user.html",
	//	"/guest"	=> "/deny/",
	//	"/default"	=> "index.html" );


	// ● Content-Type に入れる MIME-Type
	// "拡張子" => "MIME-Type", です。
	// 記載されていない拡張子を表示する場合は追記して下さい。

	$auth_mimetype = array (
		"ai"	=> "application/postscript" ,
		"aif"	=> "audio/x-aiff" ,

			:

		"xyz"	=> "chemical/x-xyz" ,
		"zip"	=> "application/zip" );

このままアップロードし、管理メニューよりインストールして下さい。

これで XOOPS より参照できるか動作お試し下さい。
参照する URL は以下の通りです。
（フォルダ waku でインストールしている場合）

	xoops/modules/waku/index.php/ファイル名

例えば sample にある index.html を表示するなら

	xoops/modules/waku/index.php/index.html

となります。

HTML ファイルを変更する場合、
文字コードは XOOPS で使われている文字コードに合わせて下さい。
日本の場合、XOOPS 2.0 時代は EUC で固定されていましたが、
最近は UTF-8 で運用するケースも増えてきました。

参照するファイルは HTML でなくても構いません。PHP も動作します。
画像ファイル等も参照可能です。
また、ファイルは自由に追加する事ができます。
ドキュメントフォルダ内にフォルダをつくっても参照可能です。

.php と .html のみ XOOPS のヘッダ・フッタが付加して表示されます。
そのため、表示したくない場合は .php .html 以外の拡張子にすると良いです。
例えば .htm や .php4 等は表示されなくなります。

珍しい拡張子で正しく動作しない場合は、
MIME-Type の追加・変更で改善するかもしれません。

	// ● Content-Type に入れる MIME-Type
	// "拡張子" => "MIME-Type", です。
	// 記載されていない拡張子を表示する場合は追記して下さい。

	$auth_mimetype = array (
		"ai"	=> "application/postscript" ,
		"aif"	=> "audio/x-aiff" ,

			:

		"xyz"	=> "chemical/x-xyz" ,
		"zip"	=> "application/zip" );

メインメニュー等でクリックした場合は以下となりますが、

	XOOPS/modules/user/

この場合、ユーザ毎に設定されているファイル名へ飛びます。

	// ● ユーザの許可・拒否およびデフォルトファイル名
	// "ユーザ名" => "ファイル名・URL または 拒否文字列", です。
	// 　ユーザ名は /guest でログインしていない状態での制御となります。
	// 　また、/default で記載されていないユーザの状態となります。
	// ファイル名は XOOPS/modules/auth/ のみで入った際に
	// 参照されるファイル名です。
	// index.html 等であっても省略せずに記載して下さい。
	// index.php は使用できません。index.html や default.php 等に
	// 変えて下さい。
	// 　URL も記載できます。その URL へ飛ばす事ができます。
	// 　http:// https:// 等も省略せずに記載して下さい。
	// 「拒否する文字列」に記載された文字列を入れると
	// そのユーザは拒否となります。

	$auth_user = array (
		"user123"	=> "user.html",
		"user234"	=> "user.html",
		"userurl"	=> "http://url.com/user.html",
		"/guest"	=> "/deny/",
		"/default"	=> "index.html" );

上記の場合、会員 user123 さん および user234 さん であれば、

	XOOPS/modules/user/index.php/user.html

上記の場合、会員 userurl さん であれば、

	http://url.com/user.html

それ以外の会員さんは

	XOOPS/modules/user/index.php/index.html

となります。ログインしていない場合は拒否となります。
/guest も省略可能です。その場合は /default の値となります。
必ず index.html 等であっても省略せずに記載して下さい。

環境によっては、期待する動作をしないかもしれません。

　　Apache 2.0.30 以降では、AcceptPathInfo によって、
　　この問題を解決する事ができます。
　　例えば .htaccess が動作する場合、以下の文を加えれば大丈夫でしょう。

	AcceptPathInfo On

　　自分でサーバを建てている場合であれば、
　　httpd.conf に直接記載しても大丈夫です。

　　これが不可能である場合、また IIS 等の他サーバである場合は
　　区切り(デリミタ) を変更する事で対応できます。

	// ● 区切り(デリミタ)
	// 通常はこのままで構いません。index.php/ファイル名 となります。
	// Apache 2.0 系で PATH_INFO の取得ができない設定にしてある場合は
	// "?" に変更して下さい。index.php?ファイル名 となります。

	$auth_delimiter = "/";

ただし、"?" に変更し、Rewrite を使用しない場合は
リンクの記載方法に違いがあります。
リンクとして間接指定はできません。（例えば <a href="ファイル名"> ）
index.php から記載する必要があります。（ <a href="index.php?ファイル名"> ）
ドキュメントフォルダ(ディレクトリ)内に
更にフォルダ(ディレクトリ)を作成した場合も同様です。
また、この方法では CGI の動作が不可能となりますのでご注意下さい。


・便利な使い方 ----------------------------------------------------------------

ファイル名として .html .php .cgi の場合に XOOPS のヘッダ・フッタを付加します。
他の拡張子では付加しません。
これにより、画像ファイル等も認証を行った上で表示する事ができます。


HTML によるリンクの際、以下の値を用いる事ができます。

　　<?php print $url ?>   WAKU の URL（index.php/ または index.php? まで）
　　<?php print $files ?> files ディレクトリ(フォルダ)の URL
　　index.php             許可・拒否するユーザ群で記載しているページへ

画像ファイル等は認証ディレクトリ(フォルダ)内に入れても表示されますが、
その場合、画像ファイル等も index.php が実行されて表示されます。
そのため、あまりに容量が大きいファイルや多くのファイルを参照させたりすると、
サーバが高負荷になり、下手するとサーバダウンを起こします。
$files はそのために用意されたディレクトリ(フォルダ)です。
認証せずに表示しても構わないファイルはここに入れる事で
<?= $files ?>ファイル名 で参照できます。
例えば image.gif を files ディレクトリ(フォルダ)に入れて、
<img src="<?php print $files ?>image.gif"> と記載すれば表示されるわけです。

リンクを間接指定（例えば <a href="ファイル名"> ）で記載できるのは
区切り(デリミタ) が "/" の場合に限られます。
"?" の場合は index.php? からの記載が必須です。
または <?php print $url ?> で参照します。


.html .htm .php .phpN (N=3～5) のファイル名である場合、
php のコードを記載できます。

以下の値を用いる事ができます。

　　$url   = Auth モジュールの URL（index.php/ または index.php? まで）
　　$files = files ディレクトリ(フォルダ)の URL
　　$paths = Auth モジュールのパス（index.php/ または index.php? まで）
　　$users = ユーザ名(ログインしていない場合は /guest )

例えば $users を用いてユーザ別に異なる動作を行う事ができます。
php のソースを入れて Auth モジュール内で動かす事も可能です。
　　　* 文字コードを XOOPS の文字コードにあわせる。
　　　* chdir を頭につけて、php を実行するパスをカレントにする。
　　　　または読み込むファイルをフルパスで記載する。
　　　* .php の場合は http・HTML のヘッダ・フッタ・Cookie 等を外す。
　　　* ユーザ名・URL・メール等は Cookie の代わりに XOOPS から取り出す。


.cgi .pl の場合は passthru によって CGI の実行を行ないます。
（そのため php をセーフモードにしている場合は動作しません。）
これにより、Auth モジュール内で Perl 等の CGI を実行する事が可能です。
環境変数の取得も可能です。更に Auth モジュール独自の環境変数もあります。

　　POST_DATA         = POST メソッドの値
　　URL_DATA          = Auth モジュールの URL（index.php/・index.php? まで）
　　FILES_DATA        = files ディレクトリ(フォルダ)の URL
　　PATHS_DATA        = Auth モジュールのパス（index.php/・index.php? まで）
　　USER_DATA         = ユーザ名(ログインしていない場合は /guest )

1.08 からはアカウント情報（プロフィール）の一部も環境変数に入れています。

　　USER_DATA_ADMIN   = 管理者の場合はユーザ名・一般ユーザは非記載
　　USER_DATA_UID     = ユーザID
　　USER_DATA_UNAME   = ユーザ名(ログインしていない場合は非記載)
　　USER_DATA_AVATAR  = アバター
　　USER_DATA_NAME    = 本名
　　USER_DATA_URL     = ホームページ
　　USER_DATA_MAIL    = メールアドレス(公開・非公開に限らず代入)
　　USER_DATA_EMAIL   = メールアドレス(非公開の場合は非記載)
　　USER_DATA_ICQ     = ICQ
　　USER_DATA_AIM     = AIM
　　USER_DATA_YIM     = YIM
　　USER_DATA_MSNM    = MSNM
　　USER_DATA_FROM    = 居住地
　　USER_DATA_OCC     = 職業
　　USER_DATA_INTREST = 趣味

以下の点にご注意下さい。

　・サーバによっては設定により動作しない場合もあります。予めご了承下さい。
　・POST メソッドで受け渡された値は環境変数 POST_DATA に入っています。
　　標準入力による取得ではありません。
　　また、ファイルアップロードは対応していません。
　　環境変数には文字数制限があるため、全ての値が取得できない可能性もあります。
　・Apache を用いているサーバで suexec を採用している場合でも
　　PHP を Apache モジュールで実行している場合、suexec は効きません。
　　PHP と同じようなファイル権限となる事にご注意下さい。
　・ユーザ名は環境変数 USER_DATA に入っています。
　・配布されている CGI を XOOPS で動作したい場合、以下の点の改良が必要です。
　　　* 文字コードを XOOPS の文字コードにあわせる。
　　　* chdir を頭につけて、CGI を実行するパスをカレントにする。
　　　　または読み込むファイルをフルパスで記載する。
　　　* .cgi の場合は http・HTML のヘッダ・フッタ・Cookie 等を外す。
　　　* ユーザ名・URL・メール等は Cookie の代わりに環境変数から取り出す。
　　　* POST メゾットで読んでいる部分を変更する。


Apache の mod_rewrite を用いて index.php/ を外す事ができます。
dot-htaccess を参照の上で .htaccess を生成しサーバに入れて下さい。
config.php の「Rewrite の使用」を 1 にします。

サブメニューの場合は index.php/ を外します。

　$modversion['sub'][1]['name'] = "メニュー名";
　$modversion['sub'][1]['url'] = 'ファイル名';


・その他のヒント --------------------------------------------------------------

XOOPS.me 内で WAKU の日本語対応を行っています。
ここには記載していないいろんな使用方法が記載していますので、
ぜひ参照してみて下さい。

困った場合の対処方法等もこちらに記載しています。

　　XOOPS.me http://xoops.me/



・感謝。 ----------------------------------------------------------------------

このモジュールを作成するきっかけとなったのは、
旧 XOOPS 日本公式サイトのフォーラム「basic 認証みたいなのをやりたい。」でした。
製作するきっかけを作ってくれた tadashi さんに感謝です。^^


・改版遍歴 --------------------------------------------------------------------

2011/08/22 WAKU version 1.22
　・著作者表記 を 2 8 6 から 志賀 慶一 に変更。
　・ソースコードの修正。（ファイル末端の ?> を削除）

2010/03/03 WAKU version 1.21
　・XOOPS Cube Legacy・ImpressCMS 用のアイコンを追加。
　　使用している CMS に合わせてアイコンを変更するように。

2010/02/14 WAKU version 1.20
　・モジュール名を WAKU に変更。
　・言語ファイルを削除し、CMS に含まれる言語ファイルを使用。
　（通常言語ファイルの追加は必要なくなりました）
　・英語の説明文 README-en.txt を追加。
　・設定ファイルの英語・簡略化。
　（日本外でもご利用いただける仕様にしています）

2008/09/23 Auth module version 1.16
　・言語ファイルに ja_utf8（日本語 UTF-8）を追加。
　・XOOPS 2.3 に合わせて若干の変更。

2008/07/20 Auth module version 1.15
　・国際版 1.11（xoops2_mod_auth_1.11_AdminRoute286.zip）を元に
　　言語ファイルの追加。（今のところ日本語以外は全て英語記載。）
　・サポートサイト・運営者名の変更。
　・その他細かい修正。

2005/05/20 Auth module version 1.14
　・CGI 版 PHP で正常に動作しない問題に対応。
　　（さくらインターネット の「さくらのレンタルサーバ」等が該当します。）

2004/11/06 Auth module version 1.13
　・ユーザと設定内容によってデバックモードで Undefined Index が出る問題に対応。

2004/08/18 Auth module version 1.12
　・config.php xoops_version.php の初期設定に不都合がある問題に対応。

2004/07/05 Auth module version 1.11
　・Web サーバの種類によって正常に動作しない問題に対応。

2004/06/21 Auth module version 1.10
　・バナー広告を追加するサーバで正常に動作しない問題に対応。

2004/06/11 Auth module version 1.09
　・セキュリティ対策の強化。

2004/06/09 Auth module version 1.08
　・CGI でアカウント情報（プロフィール）の一部を取得できるようにした。

2004/05/26 Auth module version 1.07
　・ユーザの取得ができていない不都合を改善。
　・xoops_version.php の $modversion['hasMain'] 変更を廃止。
　　管理者メニューの「モジュール管理」表示順 でメニューを非表示にできます。

2004/05/21 Auth module version 1.06
　・Auth モジュールまでのパス $paths を追加。
　・.cgi .pl で Auth モジュール独自の環境変数を拡張。

2004/05/20 Auth module version 1.05
　・.cgi .pl で環境変数の取得が動作するように。

2004/05/19 Auth module version 1.04
　・Internet Explorer で一部のファイルが参照・ダウンロードできない問題を改善。

2004/05/17 Auth module version 1.03
　・CGI（ .cgi および .pl ）による動作に対応。
　・config.php の「許可・拒否するユーザ群」の値に URL を記載できるように。
　・config.php のコメント表記を変更。分かりやすくした。

2004/05/16 Auth module version 1.02
　・区切り(デリミタ) を "?" にした場合の不都合を改善。
　・テーマ変更後に Not Found になる不都合を改善。
　　代償で表示ファイルとして index.php 使用不可に。
　・ディレクトリを作成し階層化した場合の動作に対応。

2004/05/15 Auth module version 1.01
　・xoops_version.php に「メニュー」「サブメニュー」を追加。
　・config.php の「許可・拒否するユーザ群」の初期値を変更。
　・files ディレクトリと $files を追加。

2004/05/14 Auth module version 1.00
　・初版公開。


・お問い合わせ・最新情報（2011年7月現在）--------------------------------------

日本語での最新情報は XOOPS.me で公開しています。
　XOOPS.me http://xoops.me/

志賀 慶一 が運営している XOOPS 日本語サポート もご利用いただけます。
　XOOPS 日本語サポート http://xoopscms.jp/
　Twitter @XOOPSCMS http://twitter.com/XOOPSCMS
　Facebook ページ http://facebook.com/XOOPS.Japanese

志賀 慶一 もスタッフとして参加している 東北ＸＯＯＰＳ もよろしくお願いします。
ID は keiichi です。
　東北ＸＯＯＰＳ http://tohoku-xoops.jp/
　Twitter @TohokuXOOPSjp http://twitter.com/TohokuXOOPSjp
　Facebook ページ http://facebook.com/pages/X/117595908327855

英語では XOOPS Project をご利用下さい。こちらの ID は KeiichiSHIGA です。
　XOOPS Project http://www.xoops.org/

志賀 慶一 個人のサイトは下記の通りです。
　志賀 慶一 http://www.keiichi.st/ ※ Google サイト 使用
　Twitter @Keiichi_SHIGA http://twitter.com/Keiichi_SHIGA
　Facebook http://facebook.com/keiichishiga
