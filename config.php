<?php

// XOOPS - WAKU version 1
// Maked by Keiichi SHIGA.


// document folder (fullpath is possible):

$waku_dir = "sample";
// (appoint the outside of DocumentRoot as measures of the security)
// $waku_dir = "/home/user/waku";


// delimiter:
// .../auth/index.php#filename is a part "#".
// "/" = index.php/filename ... can execution of CGI (Perl, Ruby, python ...)
// "?" = index.php?filename ... When there is a problem of "/"

$waku_delimiter = "/";


// use of rewrite:
// 0 = not use ... waku/index.php#filename (# = delimiter)
// 1 = use ....... waku/filename ( .htaccess is necessary )

$waku_rewrite = 0;


// page move mode:
// 0 = use of Location ................ usually
// 1 = use of XOOPS redirect_header ... when a server adds a banner

$waku_redirect = 0;


// Deny word:

$waku_deny = "/deny/";


// movement of the user:
// index.php is not usable, Index uses html and default.php instead

$waku_user = array (
	"/default"	=> "index.html" );

//$waku_user = array (
//	"user name"	=> "filename, URL or deny word"
//	"user123"	=> "user.html",
//	"user234"	=> "user.html",
//	"userurl"	=> "http://url.com/user.html",
//	"/guest"	=> "/deny/",
//	"/default"	=> "index.html" );


// MIME-Type:
// "Extension" => "MIME-Type"

$waku_mimetype = array (
//	"ext"	=> "MIME-Type"
	"ai"	=> "application/postscript" ,
	"aif"	=> "audio/x-aiff" ,
	"aifc"	=> "audio/x-aiff" ,
	"aiff"	=> "audio/x-aiff" ,
	"asc"	=> "text/plain" ,
	"au"	=> "audio/basic" ,
	"avi"	=> "video/x-msvideo" ,
	"bcpio"	=> "application/x-bcpio" ,
	"bin"	=> "application/octet-stream" ,
	"bmp"	=> "image/bmp" ,
	"cdf"	=> "application/x-netcdf" ,
	"class"	=> "application/octet-stream" ,
	"cpio"	=> "application/x-cpio" ,
	"cpt"	=> "application/mac-compactpro" ,
	"csh"	=> "application/x-csh" ,
	"css"	=> "text/css" ,
	"dcr"	=> "application/x-director" ,
	"dir"	=> "application/x-director" ,
	"djv"	=> "image/vnd.djvu" ,
	"djvu"	=> "image/vnd.djvu" ,
	"dll"	=> "application/octet-stream" ,
	"dms"	=> "application/octet-stream" ,
	"doc"	=> "application/msword" ,
	"dvi"	=> "application/x-dvi" ,
	"dxr"	=> "application/x-director" ,
	"eps"	=> "application/postscript" ,
	"etx"	=> "text/x-setext" ,
	"exe"	=> "application/octet-stream" ,
	"ez"	=> "application/andrew-inset" ,
	"gif"	=> "image/gif" ,
	"gtar"	=> "application/x-gtar" ,
	"hdf"	=> "application/x-hdf" ,
	"hqx"	=> "application/mac-binhex40" ,
	"htm"	=> "text/html" ,
	"html"	=> "text/html" ,
	"ice"	=> "x-conference/x-cooltalk" ,
	"ief"	=> "image/ief" ,
	"iges"	=> "model/iges" ,
	"igs"	=> "model/iges" ,
	"jpe"	=> "image/jpeg" ,
	"jpeg"	=> "image/jpeg" ,
	"jpg"	=> "image/jpeg" ,
	"js"	=> "application/x-javascript" ,
	"kar"	=> "audio/midi" ,
	"latex"	=> "application/x-latex" ,
	"lha"	=> "application/octet-stream" ,
	"lzh"	=> "application/octet-stream" ,
	"m3u"	=> "audio/x-mpegurl" ,
	"man"	=> "application/x-troff-man" ,
	"me"	=> "application/x-troff-me" ,
	"mesh"	=> "model/mesh" ,
	"mid"	=> "audio/midi" ,
	"midi"	=> "audio/midi" ,
	"mif"	=> "application/vnd.mif" ,
	"mov"	=> "video/quicktime" ,
	"movie"	=> "video/x-sgi-movie" ,
	"mp2"	=> "audio/mpeg" ,
	"mp3"	=> "audio/mpeg" ,
	"mpe"	=> "video/mpeg" ,
	"mpeg"	=> "video/mpeg" ,
	"mpg"	=> "video/mpeg" ,
	"mpga"	=> "audio/mpeg" ,
	"ms"	=> "application/x-troff-ms" ,
	"msh"	=> "model/mesh" ,
	"mxu"	=> "video/vnd.mpegurl" ,
	"nc"	=> "application/x-netcdf" ,
	"oda"	=> "application/oda" ,
	"pbm"	=> "image/x-portable-bitmap" ,
	"pdb"	=> "chemical/x-pdb" ,
	"pdf"	=> "application/pdf" ,
	"pgm"	=> "image/x-portable-graymap" ,
	"pgn"	=> "application/x-chess-pgn" ,
	"png"	=> "image/png" ,
	"pnm"	=> "image/x-portable-anymap" ,
	"ppm"	=> "image/x-portable-pixmap" ,
	"ppt"	=> "application/vnd.ms-powerpoint" ,
	"ps"	=> "application/postscript" ,
	"qt"	=> "video/quicktime" ,
	"ra"	=> "audio/x-realaudio" ,
	"ram"	=> "audio/x-pn-realaudio" ,
	"ras"	=> "image/x-cmu-raster" ,
	"rgb"	=> "image/x-rgb" ,
	"rm"	=> "audio/x-pn-realaudio" ,
	"roff"	=> "application/x-troff" ,
	"rpm"	=> "audio/x-pn-realaudio-plugin" ,
	"rtf"	=> "text/rtf" ,
	"rtx"	=> "text/richtext" ,
	"sgm"	=> "text/sgml" ,
	"sgml"	=> "text/sgml" ,
	"sh"	=> "application/x-sh" ,
	"shar"	=> "application/x-shar" ,
	"silo"	=> "model/mesh" ,
	"sit"	=> "application/x-stuffit" ,
	"skd"	=> "application/x-koan" ,
	"skm"	=> "application/x-koan" ,
	"skp"	=> "application/x-koan" ,
	"skt"	=> "application/x-koan" ,
	"snd"	=> "audio/basic" ,
	"so"	=> "application/octet-stream" ,
	"spl"	=> "application/x-futuresplash" ,
	"src"	=> "application/x-wais-source" ,
	"sv4crc"	=> "application/x-sv4cpio" ,
	"swf"	=> "application/x-shockwave-flash" ,
	"t"	=> "application/x-troff" ,
	"tar"	=> "application/x-tar" ,
	"tcl"	=> "application/x-tcl" ,
	"tex"	=> "application/x-tex" ,
	"texi"	=> "application/x-texinfo" ,
	"texinfo"	=> "application/x-texinfo" ,
	"tif"	=> "image/tiff" ,
	"tiff"	=> "image/tiff" ,
	"tr"	=> "application/x-troff" ,
	"tsv"	=> "text/tab-separated-values" ,
	"txt"	=> "text/plain" ,
	"ustar"	=> "application/x-ustar" ,
	"vcd"	=> "application/x-cdlink" ,
	"vrml"	=> "model/vrml" ,
	"wav"	=> "audio/x-wav" ,
	"wbmp"	=> "image/vnd.wap.wbmp" ,
	"wbxml"	=> "application/vnd.wap.wbxml" ,
	"wml"	=> "text/vnd.wap.wml" ,
	"wmlc"	=> "application/vnd.wap.wmlc" ,
	"wmls"	=> "text/vnd.wap.wmlscript" ,
	"wmlsc"	=> "application/vnd.wap.wmlscriptc" ,
	"wrl"	=> "model/vrml" ,
	"xbm"	=> "image/x-xbitmap" ,
	"xht"	=> "application/xhtml+xml" ,
	"xhtml"	=> "application/xhtml+xml" ,
	"xls"	=> "application/vnd.ms-excel" ,
	"xml"	=> "text/xml" ,
	"xpm"	=> "image/x-xpixmap" ,
	"xsl"	=> "text/xml" ,
	"xwd"	=> "image/x-xwindowdump" ,
	"xyz"	=> "chemical/x-xyz" ,
	"zip"	=> "application/zip" );

