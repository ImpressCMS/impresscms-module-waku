<?php

// XOOPS - WAKU version 1
// Presented by Keiichi SHIGA, 2004-2011.

require ( '../../mainfile.php' );
require ( 'config.php' );

if ( empty($xoopsUser) )
{
    $user = "/guest";
}
else
{
    $user = $xoopsUser->getVar('uname','E');
}

$inserver = $_SERVER;

$url = XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/index.php"
     . $waku_delimiter;
$files = XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/files/";
$paths = XOOPS_ROOT_PATH . "/modules/" . $xoopsModule->dirname()
       . "/index.php" . $waku_delimiter;

if ( array_key_exists ( $user , $waku_user ) )
{
    if ( ( $waku_user [ $user ] == "" )
      && ( $waku_user ['/default'] == $waku_deny ) )
    {
        redirect_header ( XOOPS_URL , 0 , _NOPERM );
    }

    if ( $waku_user [ $user ] == $waku_deny )
    {
        redirect_header ( XOOPS_URL , 0 , _NOPERM );
    }
}
else
{
    if ( $waku_user ['/default'] == $waku_deny )
    {
        redirect_header ( XOOPS_URL , 0 , _NOPERM );
    }
}

if ( $waku_delimiter != "?" )
{
    $page = $_SERVER['PATH_INFO'];
}
else
{
    $page = "?" . $_SERVER['QUERY_STRING'];
}

if ( preg_match ( "/\:/" , $page ) )
{
    echo "WAKU is WAKU WAKU :-D";
    exit ();
}

if ( ( $page == "" )
  || ( preg_match ( "/\/$/" , $page ) )
  || ( preg_match ( "/\?$/" , $page ) )
  || ( preg_match ( "/index\.php$/" , $page ) ) )
{
    $url = XOOPS_URL . "/modules/" . $xoopsModule->dirname();

    if ( ! $waku_user [ $user ] == "" )
    {
        $next = $waku_user [ $user ];
    }
    else
    {
        $next = $waku_user ['/default'];
    }

    if ( preg_match ( "/\:/" , $next ) )
    {
        if ( $waku_redirect == 0 )
        {
            header ( "Location: $next" );
            exit ();
        }
        else
        {
            redirect_header ( $next , 0 , _PLEASEWAIT );
            exit ();
        }
    }
    else if ( ( $next != "" ) && ( $next != "index.php" ) )
    {
        $next = ereg_replace ( "../" , "" , $next ); 

        if ( $waku_rewrite != 0 )
        {
            if ( $waku_redirect == 0 )
            {
                header ( "Location: $url/" . $next );
                exit ();
            }
            else
            {
                redirect_header ( "$url/" . $next , 5 , _PLEASEWAIT );
                exit ();
            }
        }
        else
        {
            if ( $waku_redirect == 0 )
            {
                header ( "Location: $url/index.php" . $waku_delimiter . $next );
                exit ();
            }
            else
            {
                redirect_header ( "$url/index.php" . $waku_delimiter . $next
                                , 5 , _PLEASEWAIT );
                exit ();
            }
        }
    }
    else
    {
        redirect_header ( XOOPS_URL , 0 , _NOPERM );
        exit ();
    }
}

if ( $waku_delimiter != "/" )
{
    $page = "/" . substr ( $page , 1 );
}

$page = $waku_dir . $page;

if ( ! is_file ( $page ) )
{
    redirect_header ( XOOPS_URL , 0 , _MODULENOEXIST );
}

if ( ( strpos ( $page , ".html")  !== false )
  || ( strpos ( $page , ".php")   !== false )
  || ( strpos ( $page , ".cgi")   !== false ) )
{
   include ( XOOPS_ROOT_PATH . '/header.php' );
}
else
{
    $ext = substr ( strrchr ( $page , "." ) , 1 );

    if ( isset ( $waku_mimetype [ $ext ] ) )
    {
        $set_mimetype = $waku_mimetype [ $ext ];
        header ( "Content-Type: $set_mimetype" );
    }
    else
    {
        header ( "Content-Type: application/octet-stream" );
    }
}

if ( ( strpos ( $page , ".html") !== false )
  || ( strpos ( $page , ".htm")  !== false )
  || ( strpos ( $page , ".php")  !== false )
  || ( strpos ( $page , ".php5") !== false )
  || ( strpos ( $page , ".php4") !== false )
  || ( strpos ( $page , ".php3") !== false ) )
{
    include_once ( $page );
}
else if ( ( strpos ( $page , ".cgi") !== false )
       || ( strpos ( $page , ".pl")  !== false ) )
{
    foreach ( $inserver as $name => $value )
    {
        putenv ( $name . "=" . $value );
    }

    foreach ( $_POST as $name => $value )
    {
        if ( ! $inpost == "" )
        {
            $inpost .= "&";
        }

        $inpost .= urlencode ( $name ) . "=" . urlencode ( $value );
    }

    putenv ( "POST_DATA="  . $inpost );
    putenv ( "URL_DATA="   . $url );
    putenv ( "PATHS_DATA=" . $paths );
    putenv ( "FILES_DATA=" . $files );
    putenv ( "USER_DATA="  . $user );

    if ( ! empty($xoopsUser) )
    {
        if ( is_object ( $xoopsUser ) && $xoopsUser->isAdmin() )
        {
            putenv ( "USER_DATA_ADMIN=" . $xoopsUser->getVar('uname') );
        }

        putenv ( "USER_DATA_UID="     . $xoopsUser->getVar('uid') );
        putenv ( "USER_DATA_UNAME="   . $xoopsUser->getVar('uname') );
        putenv ( "USER_DATA_AVATAR="  . $xoopsUser->getVar('user_avatar') );
        putenv ( "USER_DATA_NAME="    . $xoopsUser->getVar('name') );
        putenv ( "USER_DATA_URL="     . $xoopsUser->getVar('url') );
        putenv ( "USER_DATA_MAIL="    . $xoopsUser->getVar('email') );

        if ( $xoopsUser->getVar('user_viewemail') == 1 )
        {
            putenv ( "USER_DATA_EMAIL=". $xoopsUser->getVar('email') );
        }

        putenv ( "USER_DATA_ICQ="     . $xoopsUser->getVar('user_icq') );
        putenv ( "USER_DATA_AIM="     . $xoopsUser->getVar('user_aim') );
        putenv ( "USER_DATA_YIM="     . $xoopsUser->getVar('user_yim') );
        putenv ( "USER_DATA_MSNM="    . $xoopsUser->getVar('user_msnm') );
        putenv ( "USER_DATA_FROM="    . $xoopsUser->getVar('user_from') );
        putenv ( "USER_DATA_OCC="     . $xoopsUser->getVar('user_occ') );
        putenv ( "USER_DATA_INTREST=" . $xoopsUser->getVar('user_intrest') );
    }

    passthru ( $page );
}
else
{
    $filename = substr ( strrchr ( $page , "/" ) , 1 );
    $filesize = filesize ( $page );

    mb_http_output ( "pass" );
//    header ( "Content-Disposition: inline; filename=$filename" );
    header ( "Content-length: $filesize" );
    header ( "Cache-Control: public" );
    header ( "Pragma: public" );
    readfile ( $page );
}

if ( ( strpos ( $page , ".html")  !== false )
  || ( strpos ( $page , ".php")   !== false )
  || ( strpos ( $page , ".cgi")   !== false ) )
{
    include ( XOOPS_ROOT_PATH . '/footer.php' );
}

