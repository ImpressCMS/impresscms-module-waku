
XOOPS / ImpressCMS / XOOPS Cube Legacy ----------------------------------------
add CMS frame - WAKU 1.22
---------------------------------------- Presented by Keiichi SHIGA, 2004-2011.


���̃��W���[���� XOOPS 2.0 �d�l�̃��W���[���Ƃ��Ă��邽�߁A
XOOPS 2.0 �d�l�̃��W���[�������삷�� CMS �œ��삷�鎖���\�ł��B

�EXOOPS 2.0 / 2.3 �ȍ~ ( XOOPS Project �񋟁E���C���Ή�)
�EImpressCMS
�EXOOPS Cube Legacy 2.1 �ȍ~ (�݊����W���[���Ƃ��ē���\)
�E���̑� XOOPS 2.0 �d�l�̃��W���[���ɑΉ����� CMS

���L�ł� XOOPS �Ƃ����\�L��p���Ă��܂����A
���ꂼ�ꂲ���p�� CMS �ɓǂݑւ��Ă��Q�Ɖ������B


�EWAKU �Ƃ́H -----------------------------------------------------------------

index.html �� waku �̃h�L�������g�t�H���_�ɒu����

�@XOOPS/modules/waku/index.php/index.html

�Ƃ���� XOOPS �̃w�b�_�E�t�b�^���܂߂ĕ\������܂��B


�u�g�v= WAKU
�@�@�@�@�E���͂��ӂ��ǂ���A�l�������͂ނ��́B
�@�@�@�@�E���E����Ȃǂ̉�(�ӂ�)�ɂ������́B

XOOPS �Ńt�@�C�����͓����͂ނƂ����Ӗ��ŁA���̖��̂�p���Ă��܂��B

XOOPS 2.0 ����́uAuth ���W���[���v�Ƃ������O�Ō��J����Ă��܂������A
���O�Ǝ��ۂ̗p�r���ω������������߁A���̂� WAKU �ɉ��߂Ă��܂��B


�E�C���X�g�[���Ǝg�p���@ ------------------------------------------------------

�t�H���_(�f�B���N�g��) waku �͕ύX���Ă����삷��悤�ɂȂ��Ă��܂��B
�p�r�ɉ����ĕύX���s���ĉ������B
�܂��Asample ���w�胆�[�U�ɕ\�������t�@�C���ƂȂ�܂��B
�ł���� URL �ŎQ�Ƃł��Ȃ��ꏊ�ɒu���̂��������߂ł��B

���킹�� xoops_version.php ��ύX���܂��B
WAKU �ł͉p��\�L�ɂȂ�܂������A���{��\�L�����L�Ɏ����܂��B
�T�u���j���[���ǉ��������ꍇ�͋L�ڂ̒ʂ�ǋL���ĉ������B

	// �� ���W���[����
	// ���C�����j���[�ɕ\������閼�̂ł��B
	$modversion['name'] = 'WAKU sample';

	// �� �ۊǐ�f�B���N�g��
	// �f�B���N�g�� auth ����ʂ̖��O�ɂ����ꍇ�͕ύX���ĉ������B
	$modversion['dirname'] = "waku";

	// �� �T�u���j���[
	// �T�u���j���[��ǉ��������ꍇ�͈ȉ��̋L�ڂ�ǉ����܂��B
	//  $modversion['sub'][1]['name'] = "���j���[��";
	//  $modversion['sub'][1]['url'] = 'index.php/�t�@�C����';
	// Rewrite ��p����ꍇ�� index.php ���O���܂��B
	//  $modversion['sub'][1]['name'] = "���j���[��";
	//  $modversion['sub'][1]['url'] = '�t�@�C����';
	// ����ʂɃ��j���[���𕪂������ꍇ�� 
	//  $modversion['sub'][1]['name'] = _AT_MENU_1;
	//  $modversion['sub'][1]['url'] = 'index.php/�t�@�C����';
	// �Ƃ��Alunguage/(����)/main.php �Ɉȉ���ǉ����܂��B
	//  define ( "_AT_MENU_1" , "���j���[��"); 

�܂��Aconfig.php ���ݒ肵�ĉ������B

	// �� �h�L�������g�t�H���_(�f�B���N�g��)
	// ���̃f�B���N�g�����ɒu���ꂽ�t�@�C����
	// XOOPS �̔F�؂��o�R���ĎQ�Ƃł��܂��B
	// �@�t�H���_���݂̂̏ꍇ��
	// �@waku �t�H���_�̉��ɒu���ꂽ�t�H���_�ł��B
	// �@���̃\�[�X��m���Ă���l���璼�ڎQ�Ƃ����̂𓦂�邽�߁A
	// �@�K�� sample ����ύX���ĉ������B

	$waku_dir = "sample";

	// ���ڃp�X���w�肷�鎖���\�ł��B
	// �ł���� trust�Alib�Edata �t�H���_�̂悤��
	// URL �ŎQ�Ƃł��Ȃ��ꏊ�ɒu���̂��x�X�g�ł��B
	// $waku_dir = "/home/user/page";


	// �� ��؂�(�f���~�^)
	// �ʏ�͂��̂܂܂ō\���܂���Bindex.php/�t�@�C���� �ƂȂ�܂��B
	// �s�s���������Ă���ꍇ�� "?" �ɕύX���ē���ł��܂��B
	// ���̏ꍇ�� index.php?�t�@�C���� �ƂȂ�܂��B

	$waku_delimiter = "/";


	// �� Rewrite �̎g�p
	// Rewitre ���g����ꍇ�Aindex.php/ ���ȗ����鎖���o���܂��B
	// 0 = �g�p���Ȃ��c�c waku/index.php/�t�@�C�� waku/index.php?�t�@�C��
	// 1 = �g�p����c�c�c waku/�t�@�C�� ( .htaccess ���K�v)

	$waku_rewrite = 0;


	// �� �y�[�W�ύX�̕��@
	// 0 = Location ��p����c�c�ʏ�͂��̂܂܂ō\���܂���B
	// 1 = redirect_header ��p����c�c
	//       �o�i�[�L���������ǉ��������͂�����B

	$waku_redirect = 0;


	// �� ���ۂ��镶����
	// �u���E���ۂ��郆�[�U�Q�v�̒l��
	// ���ɋL�ڂ������������ꂽ�ꍇ�A���ۂ���A�Q�Ƃł��܂���B

	$waku_deny = "/deny/";


	// �� ���[�U�̋��E���ۂ���уf�t�H���g�t�@�C����
	// "���[�U��" => "�t�@�C�����EURL �܂��� ���ە�����", �ł��B
	// �@���[�U���� /guest �Ń��O�C�����Ă��Ȃ���Ԃł̐���ƂȂ�܂��B
	// �@�܂��A/default �ŋL�ڂ���Ă��Ȃ����[�U�̏�ԂƂȂ�܂��B
	// �t�@�C������ XOOPS/modules/auth/ �݂̂œ������ۂ�
	// �Q�Ƃ����t�@�C�����ł��B
	// index.html ���ł����Ă��ȗ������ɋL�ڂ��ĉ������B
	// index.php �͎g�p�ł��܂���Bindex.html �� default.php ����
	// �ς��ĉ������B
	// �@URL ���L�ڂł��܂��B���� URL �֔�΂������ł��܂��B
	// �@http:// https:// �����ȗ������ɋL�ڂ��ĉ������B
	// �u���ۂ��镶����v�ɋL�ڂ��ꂽ������������
	// ���̃��[�U�͋��ۂƂȂ�܂��B

	$waku_user = array (
		"/default"	=> "index.html" );

	//$waku_user = array (
	//	"user123"	=> "user.html",
	//	"user234"	=> "user.html",
	//	"userurl"	=> "http://url.com/user.html",
	//	"/guest"	=> "/deny/",
	//	"/default"	=> "index.html" );


	// �� Content-Type �ɓ���� MIME-Type
	// "�g���q" => "MIME-Type", �ł��B
	// �L�ڂ���Ă��Ȃ��g���q��\������ꍇ�͒ǋL���ĉ������B

	$auth_mimetype = array (
		"ai"	=> "application/postscript" ,
		"aif"	=> "audio/x-aiff" ,

			:

		"xyz"	=> "chemical/x-xyz" ,
		"zip"	=> "application/zip" );

���̂܂܃A�b�v���[�h���A�Ǘ����j���[���C���X�g�[�����ĉ������B

����� XOOPS ���Q�Ƃł��邩���삨�����������B
�Q�Ƃ��� URL �͈ȉ��̒ʂ�ł��B
�i�t�H���_ waku �ŃC���X�g�[�����Ă���ꍇ�j

	xoops/modules/waku/index.php/�t�@�C����

�Ⴆ�� sample �ɂ��� index.html ��\������Ȃ�

	xoops/modules/waku/index.php/index.html

�ƂȂ�܂��B

HTML �t�@�C����ύX����ꍇ�A
�����R�[�h�� XOOPS �Ŏg���Ă��镶���R�[�h�ɍ��킹�ĉ������B
���{�̏ꍇ�AXOOPS 2.0 ����� EUC �ŌŒ肳��Ă��܂������A
�ŋ߂� UTF-8 �ŉ^�p����P�[�X�������Ă��܂����B

�Q�Ƃ���t�@�C���� HTML �łȂ��Ă��\���܂���BPHP �����삵�܂��B
�摜�t�@�C�������Q�Ɖ\�ł��B
�܂��A�t�@�C���͎��R�ɒǉ����鎖���ł��܂��B
�h�L�������g�t�H���_���Ƀt�H���_�������Ă��Q�Ɖ\�ł��B

.php �� .html �̂� XOOPS �̃w�b�_�E�t�b�^���t�����ĕ\������܂��B
���̂��߁A�\���������Ȃ��ꍇ�� .php .html �ȊO�̊g���q�ɂ���Ɨǂ��ł��B
�Ⴆ�� .htm �� .php4 ���͕\������Ȃ��Ȃ�܂��B

�������g���q�Ő��������삵�Ȃ��ꍇ�́A
MIME-Type �̒ǉ��E�ύX�ŉ��P���邩������܂���B

	// �� Content-Type �ɓ���� MIME-Type
	// "�g���q" => "MIME-Type", �ł��B
	// �L�ڂ���Ă��Ȃ��g���q��\������ꍇ�͒ǋL���ĉ������B

	$auth_mimetype = array (
		"ai"	=> "application/postscript" ,
		"aif"	=> "audio/x-aiff" ,

			:

		"xyz"	=> "chemical/x-xyz" ,
		"zip"	=> "application/zip" );

���C�����j���[���ŃN���b�N�����ꍇ�͈ȉ��ƂȂ�܂����A

	XOOPS/modules/user/

���̏ꍇ�A���[�U���ɐݒ肳��Ă���t�@�C�����֔�т܂��B

	// �� ���[�U�̋��E���ۂ���уf�t�H���g�t�@�C����
	// "���[�U��" => "�t�@�C�����EURL �܂��� ���ە�����", �ł��B
	// �@���[�U���� /guest �Ń��O�C�����Ă��Ȃ���Ԃł̐���ƂȂ�܂��B
	// �@�܂��A/default �ŋL�ڂ���Ă��Ȃ����[�U�̏�ԂƂȂ�܂��B
	// �t�@�C������ XOOPS/modules/auth/ �݂̂œ������ۂ�
	// �Q�Ƃ����t�@�C�����ł��B
	// index.html ���ł����Ă��ȗ������ɋL�ڂ��ĉ������B
	// index.php �͎g�p�ł��܂���Bindex.html �� default.php ����
	// �ς��ĉ������B
	// �@URL ���L�ڂł��܂��B���� URL �֔�΂������ł��܂��B
	// �@http:// https:// �����ȗ������ɋL�ڂ��ĉ������B
	// �u���ۂ��镶����v�ɋL�ڂ��ꂽ������������
	// ���̃��[�U�͋��ۂƂȂ�܂��B

	$auth_user = array (
		"user123"	=> "user.html",
		"user234"	=> "user.html",
		"userurl"	=> "http://url.com/user.html",
		"/guest"	=> "/deny/",
		"/default"	=> "index.html" );

��L�̏ꍇ�A��� user123 ���� ����� user234 ���� �ł���΁A

	XOOPS/modules/user/index.php/user.html

��L�̏ꍇ�A��� userurl ���� �ł���΁A

	http://url.com/user.html

����ȊO�̉�������

	XOOPS/modules/user/index.php/index.html

�ƂȂ�܂��B���O�C�����Ă��Ȃ��ꍇ�͋��ۂƂȂ�܂��B
/guest ���ȗ��\�ł��B���̏ꍇ�� /default �̒l�ƂȂ�܂��B
�K�� index.html ���ł����Ă��ȗ������ɋL�ڂ��ĉ������B

���ɂ���ẮA���҂��铮������Ȃ���������܂���B

�@�@Apache 2.0.30 �ȍ~�ł́AAcceptPathInfo �ɂ���āA
�@�@���̖����������鎖���ł��܂��B
�@�@�Ⴆ�� .htaccess �����삷��ꍇ�A�ȉ��̕���������Α��v�ł��傤�B

	AcceptPathInfo On

�@�@�����ŃT�[�o�����ĂĂ���ꍇ�ł���΁A
�@�@httpd.conf �ɒ��ڋL�ڂ��Ă����v�ł��B

�@�@���ꂪ�s�\�ł���ꍇ�A�܂� IIS ���̑��T�[�o�ł���ꍇ��
�@�@��؂�(�f���~�^) ��ύX���鎖�őΉ��ł��܂��B

	// �� ��؂�(�f���~�^)
	// �ʏ�͂��̂܂܂ō\���܂���Bindex.php/�t�@�C���� �ƂȂ�܂��B
	// Apache 2.0 �n�� PATH_INFO �̎擾���ł��Ȃ��ݒ�ɂ��Ă���ꍇ��
	// "?" �ɕύX���ĉ������Bindex.php?�t�@�C���� �ƂȂ�܂��B

	$auth_delimiter = "/";

�������A"?" �ɕύX���ARewrite ���g�p���Ȃ��ꍇ��
�����N�̋L�ڕ��@�ɈႢ������܂��B
�����N�Ƃ��ĊԐڎw��͂ł��܂���B�i�Ⴆ�� <a href="�t�@�C����"> �j
index.php ����L�ڂ���K�v������܂��B�i <a href="index.php?�t�@�C����"> �j
�h�L�������g�t�H���_(�f�B���N�g��)����
�X�Ƀt�H���_(�f�B���N�g��)���쐬�����ꍇ�����l�ł��B
�܂��A���̕��@�ł� CGI �̓��삪�s�\�ƂȂ�܂��̂ł����Ӊ������B


�E�֗��Ȏg���� ----------------------------------------------------------------

�t�@�C�����Ƃ��� .html .php .cgi �̏ꍇ�� XOOPS �̃w�b�_�E�t�b�^��t�����܂��B
���̊g���q�ł͕t�����܂���B
����ɂ��A�摜�t�@�C�������F�؂��s������ŕ\�����鎖���ł��܂��B


HTML �ɂ�郊���N�̍ہA�ȉ��̒l��p���鎖���ł��܂��B

�@�@<?php print $url ?>   WAKU �� URL�iindex.php/ �܂��� index.php? �܂Łj
�@�@<?php print $files ?> files �f�B���N�g��(�t�H���_)�� URL
�@�@index.php             ���E���ۂ��郆�[�U�Q�ŋL�ڂ��Ă���y�[�W��

�摜�t�@�C�����͔F�؃f�B���N�g��(�t�H���_)���ɓ���Ă��\������܂����A
���̏ꍇ�A�摜�t�@�C������ index.php �����s����ĕ\������܂��B
���̂��߁A���܂�ɗe�ʂ��傫���t�@�C���⑽���̃t�@�C�����Q�Ƃ������肷��ƁA
�T�[�o�������ׂɂȂ�A���肷��ƃT�[�o�_�E�����N�����܂��B
$files �͂��̂��߂ɗp�ӂ��ꂽ�f�B���N�g��(�t�H���_)�ł��B
�F�؂����ɕ\�����Ă��\��Ȃ��t�@�C���͂����ɓ���鎖��
<?= $files ?>�t�@�C���� �ŎQ�Ƃł��܂��B
�Ⴆ�� image.gif �� files �f�B���N�g��(�t�H���_)�ɓ���āA
<img src="<?php print $files ?>image.gif"> �ƋL�ڂ���Ε\�������킯�ł��B

�����N���Ԑڎw��i�Ⴆ�� <a href="�t�@�C����"> �j�ŋL�ڂł���̂�
��؂�(�f���~�^) �� "/" �̏ꍇ�Ɍ����܂��B
"?" �̏ꍇ�� index.php? ����̋L�ڂ��K�{�ł��B
�܂��� <?php print $url ?> �ŎQ�Ƃ��܂��B


.html .htm .php .phpN (N=3�`5) �̃t�@�C�����ł���ꍇ�A
php �̃R�[�h���L�ڂł��܂��B

�ȉ��̒l��p���鎖���ł��܂��B

�@�@$url   = Auth ���W���[���� URL�iindex.php/ �܂��� index.php? �܂Łj
�@�@$files = files �f�B���N�g��(�t�H���_)�� URL
�@�@$paths = Auth ���W���[���̃p�X�iindex.php/ �܂��� index.php? �܂Łj
�@�@$users = ���[�U��(���O�C�����Ă��Ȃ��ꍇ�� /guest )

�Ⴆ�� $users ��p���ă��[�U�ʂɈقȂ铮����s�������ł��܂��B
php �̃\�[�X������ Auth ���W���[�����œ����������\�ł��B
�@�@�@* �����R�[�h�� XOOPS �̕����R�[�h�ɂ��킹��B
�@�@�@* chdir �𓪂ɂ��āAphp �����s����p�X���J�����g�ɂ���B
�@�@�@�@�܂��͓ǂݍ��ރt�@�C�����t���p�X�ŋL�ڂ���B
�@�@�@* .php �̏ꍇ�� http�EHTML �̃w�b�_�E�t�b�^�ECookie �����O���B
�@�@�@* ���[�U���EURL�E���[������ Cookie �̑���� XOOPS ������o���B


.cgi .pl �̏ꍇ�� passthru �ɂ���� CGI �̎��s���s�Ȃ��܂��B
�i���̂��� php ���Z�[�t���[�h�ɂ��Ă���ꍇ�͓��삵�܂���B�j
����ɂ��AAuth ���W���[������ Perl ���� CGI �����s���鎖���\�ł��B
���ϐ��̎擾���\�ł��B�X�� Auth ���W���[���Ǝ��̊��ϐ�������܂��B

�@�@POST_DATA         = POST ���\�b�h�̒l
�@�@URL_DATA          = Auth ���W���[���� URL�iindex.php/�Eindex.php? �܂Łj
�@�@FILES_DATA        = files �f�B���N�g��(�t�H���_)�� URL
�@�@PATHS_DATA        = Auth ���W���[���̃p�X�iindex.php/�Eindex.php? �܂Łj
�@�@USER_DATA         = ���[�U��(���O�C�����Ă��Ȃ��ꍇ�� /guest )

1.08 ����̓A�J�E���g���i�v���t�B�[���j�̈ꕔ�����ϐ��ɓ���Ă��܂��B

�@�@USER_DATA_ADMIN   = �Ǘ��҂̏ꍇ�̓��[�U���E��ʃ��[�U�͔�L��
�@�@USER_DATA_UID     = ���[�UID
�@�@USER_DATA_UNAME   = ���[�U��(���O�C�����Ă��Ȃ��ꍇ�͔�L��)
�@�@USER_DATA_AVATAR  = �A�o�^�[
�@�@USER_DATA_NAME    = �{��
�@�@USER_DATA_URL     = �z�[���y�[�W
�@�@USER_DATA_MAIL    = ���[���A�h���X(���J�E����J�Ɍ��炸���)
�@�@USER_DATA_EMAIL   = ���[���A�h���X(����J�̏ꍇ�͔�L��)
�@�@USER_DATA_ICQ     = ICQ
�@�@USER_DATA_AIM     = AIM
�@�@USER_DATA_YIM     = YIM
�@�@USER_DATA_MSNM    = MSNM
�@�@USER_DATA_FROM    = ���Z�n
�@�@USER_DATA_OCC     = �E��
�@�@USER_DATA_INTREST = �

�ȉ��̓_�ɂ����Ӊ������B

�@�E�T�[�o�ɂ���Ă͐ݒ�ɂ�蓮�삵�Ȃ��ꍇ������܂��B�\�߂������������B
�@�EPOST ���\�b�h�Ŏ󂯓n���ꂽ�l�͊��ϐ� POST_DATA �ɓ����Ă��܂��B
�@�@�W�����͂ɂ��擾�ł͂���܂���B
�@�@�܂��A�t�@�C���A�b�v���[�h�͑Ή����Ă��܂���B
�@�@���ϐ��ɂ͕��������������邽�߁A�S�Ă̒l���擾�ł��Ȃ��\��������܂��B
�@�EApache ��p���Ă���T�[�o�� suexec ���̗p���Ă���ꍇ�ł�
�@�@PHP �� Apache ���W���[���Ŏ��s���Ă���ꍇ�Asuexec �͌����܂���B
�@�@PHP �Ɠ����悤�ȃt�@�C�������ƂȂ鎖�ɂ����Ӊ������B
�@�E���[�U���͊��ϐ� USER_DATA �ɓ����Ă��܂��B
�@�E�z�z����Ă��� CGI �� XOOPS �œ��삵�����ꍇ�A�ȉ��̓_�̉��ǂ��K�v�ł��B
�@�@�@* �����R�[�h�� XOOPS �̕����R�[�h�ɂ��킹��B
�@�@�@* chdir �𓪂ɂ��āACGI �����s����p�X���J�����g�ɂ���B
�@�@�@�@�܂��͓ǂݍ��ރt�@�C�����t���p�X�ŋL�ڂ���B
�@�@�@* .cgi �̏ꍇ�� http�EHTML �̃w�b�_�E�t�b�^�ECookie �����O���B
�@�@�@* ���[�U���EURL�E���[������ Cookie �̑���Ɋ��ϐ�������o���B
�@�@�@* POST ���]�b�g�œǂ�ł��镔����ύX����B


Apache �� mod_rewrite ��p���� index.php/ ���O�������ł��܂��B
dot-htaccess ���Q�Ƃ̏�� .htaccess �𐶐����T�[�o�ɓ���ĉ������B
config.php �́uRewrite �̎g�p�v�� 1 �ɂ��܂��B

�T�u���j���[�̏ꍇ�� index.php/ ���O���܂��B

�@$modversion['sub'][1]['name'] = "���j���[��";
�@$modversion['sub'][1]['url'] = '�t�@�C����';


�E���̑��̃q���g --------------------------------------------------------------

XOOPS.me ���� WAKU �̓��{��Ή����s���Ă��܂��B
�����ɂ͋L�ڂ��Ă��Ȃ������Ȏg�p���@���L�ڂ��Ă��܂��̂ŁA
���ЎQ�Ƃ��Ă݂ĉ������B

�������ꍇ�̑Ώ����@����������ɋL�ڂ��Ă��܂��B

�@�@XOOPS.me http://xoops.me/



�E���ӁB ----------------------------------------------------------------------

���̃��W���[�����쐬���邫�������ƂȂ����̂́A
�� XOOPS ���{�����T�C�g�̃t�H�[�����ubasic �F�؂݂����Ȃ̂���肽���B�v�ł����B
���삷�邫������������Ă��ꂽ tadashi ����Ɋ��ӂł��B^^


�E���ŕ՗� --------------------------------------------------------------------

2011/08/22 WAKU version 1.22
�@�E����ҕ\�L �� 2 8 6 ���� �u�� �c�� �ɕύX�B
�@�E�\�[�X�R�[�h�̏C���B�i�t�@�C�����[�� ?> ���폜�j

2010/03/03 WAKU version 1.21
�@�EXOOPS Cube Legacy�EImpressCMS �p�̃A�C�R����ǉ��B
�@�@�g�p���Ă��� CMS �ɍ��킹�ăA�C�R����ύX����悤�ɁB

2010/02/14 WAKU version 1.20
�@�E���W���[������ WAKU �ɕύX�B
�@�E����t�@�C�����폜���ACMS �Ɋ܂܂�錾��t�@�C�����g�p�B
�@�i�ʏ팾��t�@�C���̒ǉ��͕K�v�Ȃ��Ȃ�܂����j
�@�E�p��̐����� README-en.txt ��ǉ��B
�@�E�ݒ�t�@�C���̉p��E�ȗ����B
�@�i���{�O�ł������p����������d�l�ɂ��Ă��܂��j

2008/09/23 Auth module version 1.16
�@�E����t�@�C���� ja_utf8�i���{�� UTF-8�j��ǉ��B
�@�EXOOPS 2.3 �ɍ��킹�Ď኱�̕ύX�B

2008/07/20 Auth module version 1.15
�@�E���۔� 1.11�ixoops2_mod_auth_1.11_AdminRoute286.zip�j������
�@�@����t�@�C���̒ǉ��B�i���̂Ƃ�����{��ȊO�͑S�ĉp��L�ځB�j
�@�E�T�|�[�g�T�C�g�E�^�c�Җ��̕ύX�B
�@�E���̑��ׂ����C���B

2005/05/20 Auth module version 1.14
�@�ECGI �� PHP �Ő���ɓ��삵�Ȃ����ɑΉ��B
�@�@�i������C���^�[�l�b�g �́u������̃����^���T�[�o�v�����Y�����܂��B�j

2004/11/06 Auth module version 1.13
�@�E���[�U�Ɛݒ���e�ɂ���ăf�o�b�N���[�h�� Undefined Index ���o����ɑΉ��B

2004/08/18 Auth module version 1.12
�@�Econfig.php xoops_version.php �̏����ݒ�ɕs�s����������ɑΉ��B

2004/07/05 Auth module version 1.11
�@�EWeb �T�[�o�̎�ނɂ���Đ���ɓ��삵�Ȃ����ɑΉ��B

2004/06/21 Auth module version 1.10
�@�E�o�i�[�L����ǉ�����T�[�o�Ő���ɓ��삵�Ȃ����ɑΉ��B

2004/06/11 Auth module version 1.09
�@�E�Z�L�����e�B�΍�̋����B

2004/06/09 Auth module version 1.08
�@�ECGI �ŃA�J�E���g���i�v���t�B�[���j�̈ꕔ���擾�ł���悤�ɂ����B

2004/05/26 Auth module version 1.07
�@�E���[�U�̎擾���ł��Ă��Ȃ��s�s�������P�B
�@�Exoops_version.php �� $modversion['hasMain'] �ύX��p�~�B
�@�@�Ǘ��҃��j���[�́u���W���[���Ǘ��v�\���� �Ń��j���[���\���ɂł��܂��B

2004/05/21 Auth module version 1.06
�@�EAuth ���W���[���܂ł̃p�X $paths ��ǉ��B
�@�E.cgi .pl �� Auth ���W���[���Ǝ��̊��ϐ����g���B

2004/05/20 Auth module version 1.05
�@�E.cgi .pl �Ŋ��ϐ��̎擾�����삷��悤�ɁB

2004/05/19 Auth module version 1.04
�@�EInternet Explorer �ňꕔ�̃t�@�C�����Q�ƁE�_�E�����[�h�ł��Ȃ��������P�B

2004/05/17 Auth module version 1.03
�@�ECGI�i .cgi ����� .pl �j�ɂ�铮��ɑΉ��B
�@�Econfig.php �́u���E���ۂ��郆�[�U�Q�v�̒l�� URL ���L�ڂł���悤�ɁB
�@�Econfig.php �̃R�����g�\�L��ύX�B������₷�������B

2004/05/16 Auth module version 1.02
�@�E��؂�(�f���~�^) �� "?" �ɂ����ꍇ�̕s�s�������P�B
�@�E�e�[�}�ύX��� Not Found �ɂȂ�s�s�������P�B
�@�@�㏞�ŕ\���t�@�C���Ƃ��� index.php �g�p�s�ɁB
�@�E�f�B���N�g�����쐬���K�w�������ꍇ�̓���ɑΉ��B

2004/05/15 Auth module version 1.01
�@�Exoops_version.php �Ɂu���j���[�v�u�T�u���j���[�v��ǉ��B
�@�Econfig.php �́u���E���ۂ��郆�[�U�Q�v�̏����l��ύX�B
�@�Efiles �f�B���N�g���� $files ��ǉ��B

2004/05/14 Auth module version 1.00
�@�E���Ō��J�B


�E���₢���킹�E�ŐV���i2011�N7�����݁j--------------------------------------

���{��ł̍ŐV���� XOOPS.me �Ō��J���Ă��܂��B
�@XOOPS.me http://xoops.me/

�u�� �c�� ���^�c���Ă��� XOOPS ���{��T�|�[�g �������p���������܂��B
�@XOOPS ���{��T�|�[�g http://xoopscms.jp/
�@Twitter @XOOPSCMS http://twitter.com/XOOPSCMS
�@Facebook �y�[�W http://facebook.com/XOOPS.Japanese

�u�� �c�� ���X�^�b�t�Ƃ��ĎQ�����Ă��� ���k�w�n�n�o�r ����낵�����肢���܂��B
ID �� keiichi �ł��B
�@���k�w�n�n�o�r http://tohoku-xoops.jp/
�@Twitter @TohokuXOOPSjp http://twitter.com/TohokuXOOPSjp
�@Facebook �y�[�W http://facebook.com/pages/X/117595908327855

�p��ł� XOOPS Project �������p�������B������� ID �� KeiichiSHIGA �ł��B
�@XOOPS Project http://www.xoops.org/

�u�� �c�� �l�̃T�C�g�͉��L�̒ʂ�ł��B
�@�u�� �c�� http://www.keiichi.st/ �� Google �T�C�g �g�p
�@Twitter @Keiichi_SHIGA http://twitter.com/Keiichi_SHIGA
�@Facebook http://facebook.com/keiichishiga
