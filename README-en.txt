
XOOPS / ImpressCMS / XOOPS Cube Legacy ----------------------------------------
add CMS frame - WAKU 1.22
---------------------------------------- Presented by Keiichi SHIGA, 2004-2011.


This module with XOOPS 2.0 specifications,
You can use WAKU in CMS that the module of XOOPS 2.0 specifications works.

- XOOPS 2.0 / after 2.3 ( main support )
- ImpressCMS
- XOOPS Cube Legacy after 2.1 ( can work as a legacy module )
- others CMS corresponding to the module of XOOPS 2.0 specifications


About of WAKU ? ---------------------------------------------------------------

Puts index.html in waku documents folder,
and refer to the following URL:

	XOOPS/modules/waku/index.php/index.html

Then displayed including a header and footer of CMS.


"WAKU" is "frame" in Japanese.
In a meaning to surround the documents file prose with CMS frame,
I use this name.

It was shown by the name of an "Auth module" in the days of XOOPS 2.0,
but changes a name to WAKU because a name and a real use were changing.


Install and Use ---------------------------------------------------------------

You can change folder name "waku" for a favorite name.
Please change this name depending on a use.
And folder "sample" becomes the file displayed by a user.
You had better put this folder in the place that user cannot refer to in URL.

Change of file "xoops_version.php" and "config.php"
You will not need to be at a loss in what became the English notation in WAKU.

You upload WAKU, and please install WAKU of CMS admin.
You confirm that member can refer from CMS.

When you install folder in "waku"
The URL to refer to is as follows:

	CMS/modules/waku/index.php/(file name)

For example, if index.html in sample displays:

	CMS/modules/waku/index.php/index.html

There does not need to be the file to refer to by HTML. PHP works.
You can refer to the picture files, too.
And you can add the file freely.
WAKU can refer even if you make a folder in a document folder.

Depending on environment, You may not do movement of the expectation.

With Apache after 2.0.30, it can solve this problem by AcceptPathInfo.
For example, it will be all right when .htaccess works
if you add the following sentences:

	AcceptPathInfo On

There is the means to support by changing delimiter of config.php


WAKU enables the execution of CGI (Perl, Ruby, Python, ...)
However, I do not mention it in this file to need special correspondence.


History -----------------------------------------------------------------------

Date format: YYYY/MM/DD

- 2011/08/22 WAKU version 1.22
change of the writing name from "2 8 6" to "Keiichi SHIGA"
change of the source code. (delete of file bottom "?>" )

- 2010/03/13 WAKU version 1.21
add module icon of XOOPS Cube Legacy and ImpressCMS

- 2010/02/14 WAKU version 1.20
start English support

- 2004/05/14 Auth module version 1.00
show it as a XOOPS 2.0 modules for Japan

Support and Latest Information ------------------------------------------------

XOOPS Project is a support in the English. ( ID: KeiichiSHIGA )
	XOOPS Project http://www.xoops.org/

XOOPS.me is a support in Japan.
	XOOPS.me http://xoops.me/
	XOOPS Japanese Support http://xoopscms.jp/

Keiichi SHIGA (Japanese)
	Keiichi SHIGA web http://www.keiichi.st/
	Facebook http://facebook.com/keiichishiga
	Twitter @Keiichi_SHIGA http://twitter.com/Keiichi_SHIGA
