PHP-Referrer-Platform
=====================

Captures details about when your users visited your site, their user-agent string and their referrer.

*ReferrerPlatform - README*

Thank you for downloading the Referrer Platform script created by Victoria Holland (victoria-holland.info).  This file was last updated in April 2012.  This is a basic script which captures details about when your users visited your site, their user-agent string and their referrer, and stores these details in a log file.

LICENCE

This script is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License, or (at your option) any later version.

This script is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this script.  If not, see <http://www.gnu.org/licenses/>.

INSTRUCTIONS FOR USE:

1) Upload the ReferrerPlatform.php file to your webserver.
2) On the homepage (index file) of your website, add the following code anywhere within the body. (Nothing is displayed to the user, even if they view the source of the page):
<?php include ("ReferrerPlatform.php") ?>
The above code example assumes that you have placed the ReferrerPlatform.php file in the same folder as your index file.  If you put the ReferrerPlatform.php file in a separate folder, eg inside a Scripts folder, then you will need to change the code to reflect the file path, eg:
<?php include ("Scripts/ReferrerPlatform.php") ?>
The index file must be saved with a .php extension for the script to work.
3) A file called log.html will automatically be created in the same folder as the ReferrerPlatform.php file, which will display the referrer details of each visitor.  Therefore, the file will be updated each time someone visits your homepage.



