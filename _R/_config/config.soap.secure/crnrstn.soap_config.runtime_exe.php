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

/**
 * R :: Content Pending. 
 *
 * RUNTIME EXECUTABLE :: /_R/_config/config.soap.secure/crnrstn.soap.config.runtime_exe.php
 * EXECUTABLE VERSION :: 1.00.0000
 * DATE               :: Monday, July 22, 2024 @ 1132 hrs.
 * AUTHOR             :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                :: http://evifweb.jony5.com/
 * TITLE              :: The CRNRSTN :: Lightsaber
 *                       SOAP Services Layer SOAP Client
 *                       and SOAP Client Group Application
 *                       Resource Requirements Profile
 *                       Initialization and Resource
 *                       Access Profile Authorization Key
 *                       Generation Runtime Executable
 * DESCRIPTION        :: To support research and design
 *                       ahead of database driven
 *                       account maintenance and setup
 *                       where server SOAP account
 *                       passwords will not be kept in
 *                       flat files such as it is with
 *                       WordPress database config...
 *
 *                       For now, we will manually
 *                       configure SOAP authorization
 *                       profiles, or "machine user
 *                       accounts" to support R&D SOAP
 *                       development as can be required
 *                       by the CRNRSTN :: Lightsaber
 *                       SOAP Services Layer.
 *
 *                       Configure all SOAP authorization
 *                       profiles for each server
 *                       environment that the CRNRSTN ::
 *                       Lightsaber SOAP Services Layer
 *                       will support at runtime.
 *
 *
 *                       5
 *
 *                       Monday, July 22, 2024 @ 1132 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE            :: MIT | https://crnrstn.jony5.com/licensing/
 *
 */
/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Changed the file name from
 *       crnrstn.soap.config.runtime_exe.php
 *       to crnrstn.soap_config.runtime_exe.php.
 *       5 :: Saturday, August 22, 2026 @ 1140 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Initialize resource
 * authorization profiles to
 * facilitate access of resources
 * through the CRNRSTN :: Lightsaber
 * SOAP Services Layer.
 *
 */
$CRNRSTN_NUSOAP_SVC_debugMode = false;
$oSOAP_access_manager = new crnrstn_soap_access_manager('BLUEHOST_JONY5', $CRNRSTN_NUSOAP_SVC_debugMode, $this);
$oSOAP_access_manager->init_soap_encryption_config('BLUEHOST_JONY5', 'AES-192-OFB', 'cXAXAq_It g=5?]8iL@sKq&lWD7BW1=f', 'sha256', OPENSSL_RAW_DATA);

$oSOAP_access_manager = new crnrstn_soap_access_manager('BLUEHOST_GITHUB', $CRNRSTN_NUSOAP_SVC_debugMode, $this);
$oSOAP_access_manager->init_soap_encryption_config('BLUEHOST_GITHUB', 'AES-192-OFB', ' +-ubkEG=W{uR_X8-q{fq.t0N2+UpKDj', 'sha256', OPENSSL_RAW_DATA);

$oSOAP_access_manager = new crnrstn_soap_access_manager('LOCALHOST_MACBOOKTERMINAL', $CRNRSTN_NUSOAP_SVC_debugMode, $this);
$oSOAP_access_manager->init_soap_encryption_config('LOCALHOST_MACBOOKTERMINAL', 'AES-256-CTR', 'EkN9{{WCOS2igN%G{6?@vWCv#c_&Fsic', 'ripemd256', OPENSSL_RAW_DATA);

$oSOAP_access_manager = new crnrstn_soap_access_manager('LOCALHOST_PC', $CRNRSTN_NUSOAP_SVC_debugMode, $this);
$oSOAP_access_manager->init_soap_encryption_config('LOCALHOST_PC', 'AES-256-CTR', 'n~]CbiPI&LoLn0_ }C.o~q}IQ%#k6u.(', 'ripemd256', OPENSSL_RAW_DATA);

$oSOAP_access_manager = new crnrstn_soap_access_manager('LOCALHOST_CHAD_MACBOOKPRO', $CRNRSTN_NUSOAP_SVC_debugMode, $this);
$oSOAP_access_manager->init_soap_encryption_config('LOCALHOST_CHAD_MACBOOKPRO', 'AES-256-CTR', 'GL2AL)t8g).550i3Rla3ZTncUFX7}:vn', 'ripemd256', OPENSSL_RAW_DATA);

//case 'LOCALHOST_PC':              // TOSHIBA M100 [eVifweb] :: RADIOHEAD LAPTOP.
//
// CREATE AND CONFIGURE SINGLE/GROUP ACCESS AUTHORIZATION KEY(S)
$oAuth_single = $oSOAP_access_manager->generate_SOAPAuthKey('BLUEHOST_JONY5', 'ss~2j{P%DE3.=o)FUqO47&X*GtR~q}Fc');
$oAuth_single->update_permissions(CRNRSTN_RESOURCE_OPENSOURCE);
//$oAuth_single->IP_exclusiveAccess($_SERVER['SERVER_ADDR']);
//$oAuth_single->IP_exclusiveAccess('111.111.110.*');
//$oAuth_single->IP_denyAccess('111.111.111.112');
$oAuth_single->override_soap_encryption_config('AES-256-CTR', ' bcmUxkOT1_z2mrElii4{W4-G]m[JDv$', 'ripemd256', OPENSSL_RAW_DATA);

$oAuth_single = $oSOAP_access_manager->generate_SOAPAuthKey('BLUEHOST_EVIFWEB', 'bU&n@&LLJNM_ 63a@?bD4eMj-ol)H)dP');
$oAuth_single->update_permissions(CRNRSTN_RESOURCE_OPENSOURCE);
//$oAuth_single->IP_exclusiveAccess($_SERVER['SERVER_ADDR']);
//$oAuth_single->IP_exclusiveAccess('111.111.110.*');
//$oAuth_single->IP_denyAccess('111.111.111.112');
$oAuth_single->override_soap_encryption_config('AES-256-CTR', 'sc@4wv(YzlC2HnO6i%.qqro3XVf58e=R', 'ripemd256', OPENSSL_RAW_DATA);

$oAuth_single = $oSOAP_access_manager->generate_SOAPAuthKey('LOCALHOST_PC', 'Ko+-(f@NfgqR@n}[Mde@!Fh5b&O:uCV]');
$oAuth_single->update_permissions(CRNRSTN_RESOURCE_OPENSOURCE);
$oAuth_single->update_permissions(CRNRSTN_LOG_EMAIL);

$oAuth_single = $oSOAP_access_manager->generate_SOAPAuthKey('LOCALHOST_CHAD_MACBOOKPRO', 'B6R5PF#0v7~6QXImy.SB&*mGYvD~RrEx');
$oAuth_single->update_permissions(CRNRSTN_RESOURCE_OPENSOURCE);
$oAuth_single->update_permissions(CRNRSTN_LOG_EMAIL);

//
//$oAuth_group = $oSOAP_access_manager->generate_SOAPAuthKeyInGroup('LOCALHOST_MACBOOKTERMINAL', ';fD_EYt$4Gm$ypA6za~hFA&WTayOnI2k');
//$oAuth_group = $oSOAP_access_manager->generate_SOAPAuthKeyInGroup('LOCALHOST_MACBOOKTERMINAL', ';x_-5yTfwcruW lmXN+}N:LJH{J[TgE?', $oAuth_group);
//$oAuth_group = $oSOAP_access_manager->generate_SOAPAuthKeyInGroup('LOCALHOST_MACBOOKTERMINAL', ';WHbw)@IE+#0EBR}E}kMN@YV{RkoPMU+', $oAuth_group);
//$oAuth_group = $oSOAP_access_manager->generate_SOAPAuthKeyInGroup('LOCALHOST_MACBOOKTERMINAL', ';EB8q0q?~WG$$-}#0:2o7T6Z#+n-_9MP', $oAuth_group);
//$oAuth_group = $oSOAP_access_manager->generate_SOAPAuthKeyInGroup('LOCALHOST_MACBOOKTERMINAL', ';6 mWG+0=z6wSfWzcAO{f=zWIuATiNx6', $oAuth_group);
//
//$oAuth_group->update_permissions('FTP|FILE|EMAIL|DEFAULT|ELECTRUM');
////$oAuth_group->IP_exclusiveAccess($_SERVER['SERVER_ADDR']);
//$oAuth_group->IP_exclusiveAccess('111.111.111.*');
////$oAuth_group->IP_denyAccess('172.16.* - 172.16.195.131, 172.16.195.132 - 172.16.*');
////$oAuth_group->override_soap_encryption_config('AES-192-OFB', '[2!+b&:G**0YU{LgrN+nnFx)ZnGx2xCC', 'sha256', OPENSSL_RAW_DATA);
//$oAuth_group->override_soap_encryption_config('aes256', 'B3MoBu_LE_6YK 44-iEQw0{VZiBN%9FL', 'fnv1a32', OPENSSL_RAW_DATA);

$CRNRSTN_NUSOAP_SVC_debugMode = true;

//
// ADD USER ACCOUNT - LOCALHOST_PC
$oClient = $oSOAP_access_manager->addClient('LOCALHOST_PC', '0364087231749672543475966333893875', '83g#k487fg5hY%@i4fs84jfmdld8!~lf;|Qkeiur84', $CRNRSTN_NUSOAP_SVC_debugMode);
$oClient->override_soap_encryption_config('AES-192-OFB', '5jfu8chH#5%BNufn49fn4k3nvn9mmN!)000m32N3jN#', 'sha256', OPENSSL_RAW_DATA);
$oClient->activate_SOAP_method('mayItakeTheKingsHighway|returnCRNRSTN_UI_GLOBAL_SYNC');

//
// ADD USER ACCOUNT - LOCALHOST_PC
$oClient = $oSOAP_access_manager->addClient('LOCALHOST_PC', '03856145387465910978456438', '7dj3m9d2m2d99dd2dm', $CRNRSTN_NUSOAP_SVC_debugMode);
//$oClient_044->override_soap_encryption_config('AES-192-OFB', '4$#HDBidjh7&$*tn4njfn3f7&&*(*', 'sha256', OPENSSL_RAW_DATA);
$oClient->activate_SOAP_method('mayItakeTheKingsHighway|returnCRNRSTN_UI_GLOBAL_SYNC');
$oClient->update_permissions(CRNRSTN_RESOURCE_OPENSOURCE);
//$oClient->IP_denyAccess('111.111.111.112');
//$oClient->IP_exclusiveAccess($_SERVER['SERVER_ADDR']);

//
// ADD USER ACCOUNT - LOCALHOST_CHAD_MACBOOKPRO
$oClient = $oSOAP_access_manager->addClient('LOCALHOST_CHAD_MACBOOKPRO', '0364087231749672543475966333893875', '83g#k487fg5hY%@i4fs84jfmdld8!~lf;|Qkeiur84', $CRNRSTN_NUSOAP_SVC_debugMode);
$oClient->override_soap_encryption_config('AES-192-OFB', '5jfu8chH#5%BNufn49fn4k3nvn9mmN!)000m32N3jN#', 'sha256', OPENSSL_RAW_DATA);
$oClient->activate_SOAP_method('mayItakeTheKingsHighway|returnCRNRSTN_UI_GLOBAL_SYNC');

//
// ADD USER ACCOUNT - LOCALHOST_CHAD_MACBOOKPRO
$oClient = $oSOAP_access_manager->addClient('LOCALHOST_CHAD_MACBOOKPRO', '03856145387465910978456438', '?Lu:Q9W(ISA6-1MZ@cqE0&1_UIX5Iu@N', $CRNRSTN_NUSOAP_SVC_debugMode);
//$oClient_044->override_soap_encryption_config('AES-192-OFB', '4$#HDBidjh7&$*tn4njfn3f7&&*(*', 'sha256', OPENSSL_RAW_DATA);
$oClient->activate_SOAP_method('mayItakeTheKingsHighway|returnCRNRSTN_UI_GLOBAL_SYNC');
$oClient->update_permissions(CRNRSTN_RESOURCE_OPENSOURCE);
//$oClient->IP_denyAccess('111.111.111.112');
//$oClient->IP_exclusiveAccess($_SERVER['SERVER_ADDR']);

//$oClient_group_007 = $oSOAP_access_manager->addClientToGroup('LOCALHOST_MACBOOKTERMINAL', 'hello_un00737289745665293879240', '0N?KTJ$$O.?Qo2oz+uh3C=EwY?q%%p2x');
//$oClient_group_007 = $oSOAP_access_manager->addClientToGroup('LOCALHOST_MACBOOKTERMINAL', 'hello_un01737289745665293879240', 'f!GOs~i+XYe9ctTbPHPF4wZtHa4ecKKy', $oClient_group_007);
//$oClient_group_007 = $oSOAP_access_manager->addClientToGroup('LOCALHOST_MACBOOKTERMINAL', '00737289745665293879240', 'nA55DN{Fu&zZIFBsiaPw6LWe! Qj3Tq(', $oClient_group_007, $CRNRSTN_NUSOAP_SVC_debugMode);
//$oClient_group_007 = $oSOAP_access_manager->addClientToGroup('LOCALHOST_MACBOOKTERMINAL', 'hello_un03737289745665293879240', 'UV7pjj=P6C(O5-O =G+*zK$3]+%OG~V2', $oClient_group_007);
//$oClient_group_007 = $oSOAP_access_manager->addClientToGroup('LOCALHOST_MACBOOKTERMINAL', 'hello_un04737289745665293879240', 'j$f)D@HK)+Gbk(%z}*Wc@@XEFfV)YE[f', $oClient_group_007);
//
//$oClient_group_007->update_permissions('EMAIL|FTP|FILE|DEFAULT|ELECTRUM');
//$oClient_group_007->override_soap_encryption_config('AES-192-OFB', 'poi++wJb?ki2s OY 9sMcGMniCetT)Jg', 'sha256', OPENSSL_RAW_DATA);
//
//$oClient_group_007->activate_SOAP_method('mayItakeTheKingsHighway');
//$oClient_group_007->activate_SOAP_method('takeTheKingsHighway');
//$oClient_group_007->deactivate_SOAP_method('sendElectrumPerformanceReport');
//$oClient_group_007->IP_exclusiveAccess('111.111.111.111');