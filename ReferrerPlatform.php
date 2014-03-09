<?php
/*
Script Name: ReferrerPlatform
Author URI: http://www.victoria-holland.info
Description: Captures details about when your users visited your site, their user-agent string and their referrer.
Version: 1.0
License: GPL3

Copyright 2010  Victoria Holland  (email : victoria@victoria-holland.info)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 3, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

#assign environment variable values
$address = $_SERVER['REMOTE_ADDR'];
$referer = $_SERVER['HTTP_REFERER'];
$viewer = $_SERVER['HTTP_USER_AGENT'];

#find out the official name of the user's browser
$browser = "an unidentified browser";
if( preg_match( "/MSIE/i", "$viewer" ) )
{ $browser = "Internet Explorer"; }
else if( preg_match( "/Netscape/i", "$viewer" ) )
{ $browser = "Netscape"; }
else if( preg_match( "/Opera/i", "$viewer") )
{ $browser = "Opera"; }
else if( preg_match( "/Firefox/i", "$viewer") )
{ $browser = "Mozilla Firefox"; }
else if( preg_match( "/Chrome/i", "$viewer") )
{ $browser = "Google Chrome"; }
else if( preg_match( "/Safari/i", "$viewer") )
{ $browser = "Safari"; }

#find out the name of the user's platform
$platform = "an unidentified operating system";
if( preg_match( "/Windows/i", "$viewer") )
{ $platform = "Microsoft Windows"; }
else if( preg_match( "/Linux/i", "$viewer") )
{ $platform = "Linux"; }

#open the log file
$file = fopen("log.html", "a") or die("Error opening log file");

#write the time of access
$time = date("H:i dS F");
fwrite($file, "<strong>Time:</strong> $time<br />" );

#write the user's IP address if available
if( $address != null)
{ 
  fwrite($file,"<strong>IP Address:</strong> $address<br />"); 
}

#write the URL of the forwarding page if available
if( $referer != null)
{ 
  fwrite($file,"<strong>Referer:</strong> $referer<br />"); 
}

#write the user's browser details
fwrite($file,"<strong>Browser:</strong> $browser<br />");

#write the user's platform details
fwrite($file,"<strong>Platform:</strong> $platform<br />");

#write the user's user agent string
fwrite($file,"<strong>User agent string:</strong> $viewer<hr />");

#close the log file
fclose($file);
?> 



