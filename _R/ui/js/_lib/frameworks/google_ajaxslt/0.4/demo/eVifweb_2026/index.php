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
 */

namespace CRNRSTN;

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * CRNRSTN (The R, ...just.) :: 
 * Debug Options: 
 * -----
 * CRNRSTN_DEBUG_OFF                  = (int) 0
 * CRNRSTN_DEBUG_ON                   = (int) 1
 * CRNRSTN_DEBUG_SYSLOG               = (int) 2
 */
$R_debug_mode_override = 0;

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
$application_directory         = '';
$R_framework_directory         = '_R';

/*
echo 'Acquired argv[' . $_SERVER['argv'] . '].<br>';
echo 'Acquired argc[' . $_SERVER['argc'] . '].<br>';
echo 'Acquired QUERY_STRING[' . $_SERVER['QUERY_STRING'] . '].<br>';
echo 'Acquired DOCUMENT_ROOT[' . $_SERVER['DOCUMENT_ROOT'] . '].<br>';
echo 'Acquired SCRIPT_FILENAME[' . $_SERVER['SCRIPT_FILENAME'] . '].<br>';
echo 'Acquired REQUEST_TIME_FLOAT[' . $_SERVER['REQUEST_TIME_FLOAT'] . '].<br>';
echo 'Acquired REQUEST_TIME[' . $_SERVER['REQUEST_TIME'] . '].<br>';


Acquired DOCUMENT_ROOT[/var/www/html].
Acquired SCRIPT_FILENAME[/var/www/html/sysops/_R/ui/js/_lib/frameworks/google_ajaxslt/0.4/demo/eVifweb_2026/index.php].


/var/www/html/sysops/_R/_crnrstn/crnrstn.runtime_exe.php

echo 'Acquired $crnrstn_runtime_exe_path[' . $crnrstn_runtime_exe_path . '].<br>';

die();

 */

$crnrstn_runtime_exe_path = $_SERVER['DOCUMENT_ROOT'] . \DIRECTORY_SEPARATOR . 
                            $application_directory . \DIRECTORY_SEPARATOR . 
                            $R_framework_directory . \DIRECTORY_SEPARATOR . 
                            'crnrstn.runtime_exe.php';

if(\is_file($crnrstn_runtime_exe_path)){

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
  include_once($crnrstn_runtime_exe_path);

}else{

  echo '[lnum ' . 
       __LINE__ . '] [file ' . 
       __FILE__ . '] File not found: ' . 
       $crnrstn_runtime_exe_path;
  die();

}

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * SOURCE :: https://www.php.net/manual/en/function.include.php
 *
 *
 * 5 :: Tuesday, April 7, 2026 @ 1125 hrs.
 *
 */
$string = get_include_contents('.' . \DIRECTORY_SEPARATOR . 
          'common' . \DIRECTORY_SEPARATOR . 
          'xml' . \DIRECTORY_SEPARATOR . 
          'message.xml');
function get_include_contents($filename){

    if(\is_file($filename)){

        \ob_start();

        include $filename;

        return \ob_get_clean();

    }

    return false;

}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head> 
    <title>Simple XSLT test</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../../../../../../../../favicon.ico" />    
    <meta name="distribution" content="global" />
    <meta name="robots" content="index,follow" />
    <script src="./common/js/misc.js" language="JavaScript"></script>
    <script src="./common/js/dom.js" language="JavaScript"></script>
    <script src="./common/js/xpath.js" language="JavaScript"></script>
    <script src="./common/js/xslt.js" type="text/javascript"></script>
    <script src="./common/js/xslt_script.js?crnrstn_=420" type="text/javascript"></script>
    <script src="../../../../prototype.js/1.7.3/prototype.js" type="text/javascript"></script>
    <script src="../../../../script.aculo.us/1.9.0/src/scriptaculous.js" type="text/javascript"></script>
    <script src="../../../../script.aculo.us/1.9.0/src/sound.js" type="text/javascript"></script>
    <script src="../../../../script.aculo.us/1.9.0/src/effects.js" type="text/javascript"></script>
    <script src="../../../../script.aculo.us/1.9.0/src/controls.js" type="text/javascript"></script>
    <script src="../../../../script.aculo.us/1.9.0/src/builder.js" type="text/javascript"></script>
    <script src="../../../../script.aculo.us/1.9.0/src/slider.js" type="text/javascript"></script>
    <script src="../../../../script.aculo.us/1.9.0/src/dragdrop.js" type="text/javascript"></script>
    <script src="../../../../script.aculo.us/1.9.0/src/unittest.js" type="text/javascript"></script>
    <script src="../../../../swfobject/2.2/swfobject.js" type="text/javascript"></script>
    <script type="text/javascript">
    swfobject.embedSWF("./common/flash/msg_relay.swf?server_addr_text=<?php 
      echo \urlencode($R->get_crnrstn('https')); ?>&application_dir_text=<?php 
      echo \urlencode($R->get_crnrstn('application_directory')); ?>&framework_dir_text=<?php 
      echo \urlencode($R->get_crnrstn('R_framework_directory')); ?>&framework_https_dir=<?php
      echo \urlencode($R->get_crnrstn('framework_https') . 'ui/js/_lib/frameworks/' . 
           'google_ajaxslt/0.4/demo/eVifweb_2026/' . 
           'common/xml/token_xml.php'); ?>&https_text=<?php 
      echo \urlencode($R->get_crnrstn('https')); ?>&token_body=<?php 
      echo \urlencode($R->generate_key('system_message_token')); ?>&token_datestamp=<?php 
      echo \urlencode('[' . 
           $R->return_query_date_time_stamp() . 
           '] [rtime ' . 
           $R->wall_time() . 
           ' secs]'); ?>&message_body=<?php 
      echo \urlencode('Waaasup, my Jr. High brothers and my sisters!'); ?>", "myContent", "800", "600", "9.0.0", "expressInstall.swf");
    </script>
  </head>
  <body onload="cleanxml()">
    <form onsubmit="test_xslt();return false">
      <table>
        <tr>
          <td>
            <textarea id="xml" cols="40" rows="10">
              <?php echo \strval($string); ?>
            </textarea>
          </td>
          <td>
            <textarea id="xslt" cols="40" rows="10">
              <xsl:stylesheet>
                <xsl:template match="/">
                  <xsl:apply-templates select="page/message"/>
                </xsl:template>
                
                <xsl:template match="page/message">
                  <div style="color:#333; 
                              font-family: Arial, Helvetica, sans-serif; 
                              font-size: 35px; 
                              font-weight: bold; 
                              width:420px; 
                              text-shadow: 1px 1px 1px rgba(199, 213, 255, 1.0), 
                                           1px 1px 2px rgba(87, 255, 0, 1.0);">
                    <xsl:value-of select="."/>
                  </div>
                </xsl:template>
              </xsl:stylesheet>
            </textarea>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" value="process" onclick="Sound.play('../../../../script.aculo.us/1.9.0/test/functional/sword.mp3');" />&nbsp;&nbsp;&nbsp;
            <a href="#" onclick="Sound.play('../../../../script.aculo.us/1.9.0/test/functional/sword.mp3'); return false">Draw the King's sword. <!-- (script.aculo.us - parallel) --></a>
            <!-- 
            <a href="#" onclick="Sound.play('../../../../script.aculo.us/1.9.0/test/functional/sword.mp3',{replace:true}); return false">Draw Sword (overwrite)</a><br><br>
            <a href="#" onclick="Sound.disable(); return false">Mute</a><br>
            <a href="#" onclick="Sound.enable(); return false">Enable sounds</a> 
            -->
          </td>
        </tr>
        <tr>
          <td>
            <textarea id="html" cols="40" rows="10">
            </textarea>
          </td>
          <td>
            <div id="htmldisplay"></div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div id="myContent">
              <h1 style="color:#333; font-family: Arial, Helvetica, sans-serif; font-size: 35px; 
                      font-weight: bold; width:420px; 
                      text-shadow: 1px 1px 1px rgba(199, 213, 255, 1.0), 
                      1px 1px 2px rgba(87, 255, 0, 1.0);">Alternative content</h1>
              <p>
                <a href="http://www.adobe.com/go/getflashplayer"><img src="./common/flash/get_flash/flash_btn.jpg" alt="Get Adobe Flash player" /></a>
              </p>
            </div>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>