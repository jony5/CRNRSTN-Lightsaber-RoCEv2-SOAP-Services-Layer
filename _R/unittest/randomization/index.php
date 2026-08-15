<?php
/*
 * 5 :: 
 * Code is Poetry 
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 *       CRNRSTN :: The CRNRSTN :: Lightsaber 
 *                  RoCEv2 SOAP Services 
 *                  Layer, The CLR-SSL, is an 
 *                  advanced, open source, 
 *                  and distributed compute 
 *                  PHP framework providing: 
 *                  - a distributed and free 
 *                    instant messaging 
 *                    communications platform, 
 *                  - a distributed and free 
 *                    cloud-based file storage 
 *                    system with a built in 
 *                    photo gallery experience 
 *                    and with full social media 
 *                    integrations, and 
 *                  - a distributed, RAID 
 *                    style, schedulable, and 
 *                    RTM-automatable web site 
 *                    maintenance and back-up 
 *                    protocol with one click 
 *                    back-up recovery. 
 *
 *                  Here, at the end of this, 
 *                  the age of the church...
 *                  the age of grace, and 
 *                  looking to when the 
 *                  kingdom of this world 
 *                  shall become the kingdom 
 *                  of our Lord and of His 
 *                  His Christ (Rev. 11:15), 
 *                  the CLR-SSL is 
 *                  intentionally and 
 *                  specifically being 
 *                  prepared to function as a 
 *                  heavenly-hosted and 
 *                  enterprise licensed 
 *                  (MIT License) architecture 
 *                  that will connect the 
 *                  people in the heavens 
 *                  together with the people 
 *                  on the earth for much 
 *                  north-south fellowship. 
 *
 *                  The CLR-SSL is the 
 *                  practical and prophetic 
 *                  fulfillment of the Son of 
 *                  Man, the heavenly ladder, 
 *                  with angels of God ascending 
 *                  and descending upon the 
 *                  Son of Man as mentioned by 
 *                  the King of kings, 
 *                  Jesus Christ our Lord, in 
 *                  His word to our brother 
 *                  Nathanael in John 1:47-51 
 *                  and with the first mention 
 *                  in Holy Scriptures coming 
 *                  from Moses in his Genesis 
 *                  Chapter 28 account of 
 *                  Jacob's stone-pillow 
 *                  dream (28:12). 
 *
 *
 *                  5
 *
 *                  Last Modified: Saturday, August 15, 2026 @ 0420 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 *       Version :: 2.00.0001
 * Last Modified :: Tuesday, February 24, 2026 @ 04:20:01.120273 2026.
 *   Launch Date :: July 4, 2018 - Happy Independence Day from 
 *      (v1.0.0)                   my dog and I to you...wherever 
 *                                 and whenever you are. 
 *        Author :: Jonathan '5' Harris, CEO, CTO, Lead Full Stack 
 *                  Developer, and as of Q3 in 2025, Chief Creative 
 *                  here at eVifweb® 
 *                  jharris@eVifweb.com. eVifweb@gmail.com. 
 *           URI :: https://crnrstn.jony5.com
 *      Overview :: The CRNRSTN :: Lightsaber RoCEv2 
 *                  SOAP Services Layer, The CLR-SSL, 
 *                  is an advanced, open source, and 
 *                  distributed compute PHP 
 *                  framework providing: 
 *                  - a distributed and free 
 *                    instant messaging 
 *                    communications platform, 
 *                  - a distributed and free 
 *                    cloud-based file storage 
 *                    system with a built in 
 *                    photo gallery experience 
 *                    and with full social media 
 *                    integrations, and 
 *                  - a distributed and free, 
 *                    RAID style, schedulable, 
 *                    and RTM-automatable web 
 *                    site maintenance and 
 *                    back-up protocol with one 
 *                    click back-up recovery. 
 *
 *                  CRNRSTN :: is powered by eVifweb®
 *
 *                  CRNRSTN :: is powered by eCRM 
 *                             Strategy and Execution, Web 
 *                             Design & Development, and 
 *                             Only The Best Coffee. 
 *
 *
 *                  5
 *
 *                  Copyright © 2012-2027 eVifweb® development.
 *
 *                  All Rights Reserved.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 *   Description :: The CRNRSTN :: Lightsaber RoCEv2 
 *                  SOAP Services Layer, The CLR-SSL 
 *                  is an advanced open source PHP 
 *                  class library that will 
 *                  facilitate and spread (via a 
 *                  SOAP services layer powered by 
 *                  NuSOAP v1.124) the operations of 
 *                  a web application across 
 *                  multiple servers or environments 
 *                  (e.g. localhost, stage, preprod, 
 *                  and n+1 production or a 
 *                  distributed compute of IoT). 
 *
 *                  With this tool, data and 
 *                  functionality possessing 
 *                  characteristics that inherently 
 *                  create distinctions between one 
 *                  environment and another can all 
 *                  be managed through one framework 
 *                  for an entire application. 
 *
 *                  IP address restrictions, error 
 *                  logging profiles, and database 
 *                  authentication credentials are 
 *                  a few areas within an 
 *                  application's architecture that 
 *                  the CLR-SSL has been designed 
 *                  to excel within. 
 *
 *                  Once the CLR-SSL has been 
 *                  configured to support all of a 
 *                  web application's running 
 *                  servers, one can seamlessly RTM 
 *                  the codebase of the web site 
 *                  without having to modify the 
 *                  configuration to account for any 
 *                  unique and environmentally 
 *                  specific parameters. 
 *
 *                  Receive the benefit of a robust 
 *                  and polished framework that will 
 *                  bubble up logs from exception 
 *                  notifications to any output 
 *                  channel (email, hidden HTML 
 *                  comment, native default,...etc.) 
 *                  of one's own choosing. 
 *
 *                  Stand on top of the CLR-SSL in 
 *                  order to, for example, organize 
 *                  and strengthen the 
 *                  communications architecture of 
 *                  any web application. 
 *
 *                  By supporting many-to-one proxy 
 *                  messaging relationships between 
 *                  slaves and a master 
 *                  "communications server", 
 *                  the CLR-SSL is able to 
 *                  streamline and simplify the 
 *                  management of web application 
 *                  communications. 
 *
 *                  One can configure everything 
 *                  from SMTP credentials to the 
 *                  character count for line 
 *                  wrapping in the text versions 
 *                  of multi-part HTML email. 
 *
 *                  The CLR-SSL is the "King's Highway" 
 *                  (Num. 20:17) for communications 
 *                  between the kingdom of our Lord 
 *                  Jesus Christ in heaven, and the 
 *                  people in His earthly kingdom 
 *                  here below. 
 *
 * Numbers 20:17 :: Please let us pass through your 
 *                  land. We will not pass through 
 *                  field or through vineyard, nor 
 *                  will we drink water from any well; 
 *                  we will go along the King’s Highway, 
 *                  not turning aside to the right or 
 *                  to the left, until we pass through 
 *                  your territory. 
 *
 *                  https://text.recoveryversion.bible/04_Numbers_20.htm#Num20-17
 *
 *
 *                  5
 *
 *                  Last Modified: Tuesday, February 24, 2026 @ 0502 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 *       License :: MIT 
 *                  Permission is hereby granted, 
 *                  free of charge, to any person 
 *                  obtaining a copy of this 
 *                  software and associated 
 *                  documentation files (the 
 *                  "Software"), to deal in the 
 *                  Software without restriction, 
 *                  including without limitation 
 *                  the rights to use, copy, modify, 
 *                  merge, publish, distribute, 
 *                  sublicense, and/or sell copies 
 *                  of the Software, and to permit 
 *                  persons to whom the Software is 
 *                  furnished to do so, subject to 
 *                  the following conditions: 
 *
 *                  The above copyright notice and 
 *                  this permission notice shall be 
 *                  included in all copies or 
 *                  substantial portions of 
 *                  the Software. 
 *
 *                  THE SOFTWARE IS PROVIDED 
 *                  "AS IS", WITHOUT WARRANTY OF ANY 
 *                  KIND, EXPRESS OR IMPLIED, 
 *                  INCLUDING BUT NOT LIMITED TO THE 
 *                  WARRANTIES OF MERCHANTABILITY, 
 *                  FITNESS FOR A PARTICULAR PURPOSE 
 *                  AND NONINFRINGEMENT. IN NO EVENT 
 *                  SHALL THE AUTHORS OR COPYRIGHT 
 *                  HOLDERS BE LIABLE FOR ANY CLAIM, 
 *                  DAMAGES OR OTHER LIABILITY, 
 *                  WHETHER IN AN ACTION OF 
 *                  CONTRACT, TORT OR OTHERWISE, 
 *                  ARISING FROM, OUT OF OR IN 
 *                  CONNECTION WITH THE SOFTWARE OR 
 *                  THE USE OR OTHER DEALINGS IN 
 *                  THE SOFTWARE. 
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * CLASS DEFINITION :: index.php
 * CLASS VERSION    :: 2.00.0001
 * DATE             :: Thursday, February 12, 2026 @ 2207 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber 
 *                     RoCEv2 SOAP Services Layer
 *                     (CLR-SSL) Randomization 
 *                     Testing index.php 
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber 
 *                     RoCEv2 SOAP Services Layer 
 *                     (CLR-SSL) Vanilla Install 
 *                     Randomization testing index.php.
 *
 *
 *                     5
 *
 *                     Thursday, May 28, 2026 @ 1312 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 */

namespace CRNRSTN;

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * CRNRSTN :: Lightsaber RoCEv2 SOAP 
 * Services Layer (CLR-SSL) 
 *
 *
 * 5 :: Sunday, September 1, 2024 @ 0150 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * CRNRSTN (The R, ...just.) :: 
 * Debug Options: 
 * -----
 * CRNRSTN_DEBUG_OFF                  = (int) 0
 * CRNRSTN_DEBUG_ON                   = (int) 1
 * CRNRSTN_DEBUG_SYSLOG               = (int) 2
 */
$R_debug_mode_override         = 0;

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * PHPMailer® Debug Options: 
 * -----
 * CRNRSTN_PHPMAILER_DEBUG_OFF        = (int) 0
 * CRNRSTN_PHPMAILER_DEBUG_CLIENT     = (int) 1 
 * CRNRSTN_PHPMAILER_DEBUG_SERVER     = (int) 2 
 * CRNRSTN_PHPMAILER_DEBUG_CONNECTION = (int) 3 
 * CRNRSTN_PHPMAILER_DEBUG_LOWLEVEL   = (int) 4 // <-- Will expose SMTP/POP3 username and password data.
 */
$PHPMailer_debug_mode_override = 0;

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * WordPress® Debug Options: 
 * -----
 * OFF                                = [(int) 0, (bool) false, (string) Off]
 * ON                                 = [(int) 1, (bool) true, (string) On]
 */
$WordPress_debug_mode_override = false;

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Initialize the 
 * application folder 
 * and the framework 
 * directory. 
 *
 * Where,  
 * /var/www/html/lightbox_helper/_R/class/crnrstn/crnrstn.class.php
 * is 
 * /var/www/html/{APPLICATION_DIRECTORY [optional]}/{FRAMEWORK_DIRECTORY}/class/crnrstn/crnrstn.class.php
 *
 * E.g.: 
 * $application_directory = '';
 * $application_directory = '../../../';
 * $application_directory = 'lightbox_helper';
 * 
 *
 * 5
 *
 * Thursday, August 29, 2024 @ 0106 hrs.
 *
 */
$application_directory = '';
$R_framework_directory = '_R';

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * CRNRSTN (The R, ...just.) :: 
 * Resource Name Options: 
 * -----
 * (string) 'crnrstn_registry_user'
 * (string) 'lightbox_helper_by_eVifweb'
 * (string) 'crnrstn' (default)
 */
$R_resource_name = 'crnrstn';
#$R_hmac_algorithm_override = 'sha256';

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Including the file, 
 * crnrstn.runtime_exe.php, 
 * instantiates the $R 
 * in The CLR-SSL. 
 *
 *
 * 5 :: Sunday, March 29, 2026 @ 2111 hrs.
 *
 */

$crnrstn_runtime_exe_path = $_SERVER['DOCUMENT_ROOT'] . \DIRECTORY_SEPARATOR . 
                            $application_directory . \DIRECTORY_SEPARATOR . 
                            $R_framework_directory . \DIRECTORY_SEPARATOR . 
                            'crnrstn.runtime_exe.php';
$crnrstn_runtime_exe_path = str_replace(\DIRECTORY_SEPARATOR . 
                                        \DIRECTORY_SEPARATOR, 
                                        \DIRECTORY_SEPARATOR, 
                                        $crnrstn_runtime_exe_path);
include_once($crnrstn_runtime_exe_path);

//print_r(gd_info());

header("Content-type: image/png");
$sizex = 800;
$sizey = 800;

$img = imagecreatetruecolor(3 * $sizex, $sizey) or die('Cannot Initialize new GD image stream');
$r = imagecolorallocate($img,255, 0, 0);
$g = imagecolorallocate($img,0, 255, 0);
$b = imagecolorallocate($img,0, 0, 255);
imagefilledrectangle($img, 0, 0, 3 * $sizex, $sizey, imagecolorallocate($img, 255, 255, 255));

$p = 0;
for($i=0; $i < 100000; $i++) {
    $np = rand(0,$sizex);
    imagesetpixel($img, $p, $np, $r);
    $p = $np;
}

$p = 0;
for($i=0; $i < 100000; $i++) {
    $np = mt_rand(0,$sizex);
    imagesetpixel($img, $p + $sizex, $np, $g);
    $p = $np;
}

$p = 0;
for($i=0; $i < 100000; $i++) {
    $np = floor($sizex*(hexdec(bin2hex(openssl_random_pseudo_bytes(4)))/0xffffffff));
    imagesetpixel($img, $p + (2*$sizex), $np, $b);
    $p = $np;
}

imagepng($img);
imagedestroy($img);

// 5 :: Thursday, May 28, 2026 @ 1315 hrs.
$clr_ssl_msg = 'Image generation complete ' . 
               'for randomization test.';
// 5 :: Tuexxxxxxxxxxxxxxxxxxxxxxxxxxxxx
$msg_token = '7fb00bf45d71195b38cd913dfffaa63e' . 
             'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$token = array(
         'token'                   => $msg_token, 
         'token_generation_date'   => $token_generation_date, 
         'request_type'            => $request_type, 
         'code'                    => 200, 
         'clr_ssl_msg'             => $clr_ssl_msg);
$R->error_log(
    $clr_ssl_msg, 
    \LOG_DEBUG, 
    \E_NOTICE, 
    __LINE__, 
    __FUNCTION__, 
    __FILE__, 
    $token);