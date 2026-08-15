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
 * RUNTIME EXECUTABLE :: /_R/_config/config.resource_wildcards.secure/crnrstn.resource_wildcards.runtime_exe.php
 * EXECUTABLE VERSION :: 1.00.0000
 * DATE               :: Monday, July 22, 2024 @ 1030 hrs.
 * AUTHOR             :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                :: http://evifweb.jony5.com/
 * TITLE              :: The CRNRSTN :: Lightsaber
 *                       SOAP Services Layer Wild Card
 *                       Resources (WCR) Initialization
 *                       Runtime Executable
 * DESCRIPTION        :: Configure any runtime
 *                       initialized CRNRSTN ::
 *                       Lightsaber Wild Card Resources
 *                       (WCR) for all environments
 *                       that the CRNRSTN :: Lightsaber
 *                       SOAP Services Layer will
 *                       support at runtime.
 *
 *                       These configuration driven
 *                       WCR resources can be
 *                       accessed anytime by method
 *                       call through the CRNRSTN ::
 *                       Lightsaber SOAP Services
 *                       Layer framework anywhere
 *                       that the framework goes.
 *
 *
 *                       5
 *
 *                       Monday, July 22, 2024 @ 0843 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * HISTORY :: The CRNRSTN :: Wild Card Resource (WCR)
 *            was the first fully self-contained and
 *            data type sensitive data storage
 *            solution implemented within CRNRSTN ::
 *
 *            The CRNRSTN :: WCR is the mother of the
 *            CRNRSTN :: Decoupled Data Object (DDO)
 *            and grandmother to the CRNRSTN ::
 *            Lightsaber SOAP Services Layer Multi-
 *            Channel Decoupled Data Object (MC-DDO).
 *
 *            The CRNRSTN :: WCR was re-packaged and
 *            re-released internally as version 1.0
 *            of the CRNRSTN :: Decoupled Data Object
 *            (DDO), a more robust OOP data
 *            storage solution.
 *
 *            Today, the CRNRSTN :: WCR stands upon
 *            the CRNRSTN :: Lightsaber Multi-Channel
 *            Decoupled Data Object (MC-DDO)
 *            Services Layer.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * The CRNRSTN :: Lightsaber SOAP
 * Services Layer Multi-Channel
 * Decoupled Data Object (MC-DDO)
 * Services Layer proprietary
 * data transport architectures
 * or channels are defined
 * as follows:
 *
 *    G :: HTTP $_GET Request
 *
 *         An OpenSSL encrypted JSON
 *         object appended to every
 *         system generated HTML link
 *         for system data
 *         payload carry.
 *
 *    P :: HTTP $_POST Request
 *
 *         This is an OpenSSL encrypted
 *         JSON object <INPUT type="hidden">
 *         to every system generated HTML form
 *         for system data payload carry.
 *
 *    H :: PHP SERVER Session
 *
 *         This is an OpenSSL encrypted
 *         JSON object stored in the
 *         $_SESSION Super Global Array.
 *
 *    S :: CRNRSTN :: SOAP Services Data Tunnel
 *         Layer Architecture (SSDTLA) Packet.
 *
 *         This is a SOAP wrapped Pseudo-SOAP
 *         Services Data Tunnel Layer
 *         Architecture (PSSDTLA) packet.
 *
 *         The browser will talk like a server.
 *
 *    J :: CRNRSTN :: Pseudo-SOAP Services Data
 *         Tunnel Layer Architecture
 *         (PSSDTLA) Packet.
 *
 *         An OpenSSL encrypted JSON object
 *         stored in the browser HTML as
 *         hidden form <INPUT> data.
 *
 *    C :: CRNRSTN :: Carrier Pigeon (Cookie)
 *
 *         An avian of homing variant...or a
 *         browser cookie...within which is
 *         stored an OpenSSL encrypted
 *         JSON object.
 *
 *    D :: Database (MySQLi Connection)
 *
 *         This is an OpenSSL encrypted
 *         JSON object stored in
 *         the database.
 *
 *    R :: Runtime
 *
 *         The CRNRSTN :: MC-DDO
 *         system default.
 *
 *    O :: Simple Object Access Protocol
 *         (NuSOAP 0.9.5, SOAP 1.1)
 *
 *    M :: Remote Direct Memory Access 
 *
 *         Remote Direct Memory 
 *         Access  (RDMA, RoCE, or  
 *         RoCEv2) Data Storage and  
 *         Application Acceleration  
 *         Architecture, or simply  
 *         "the R" in CLR-SSL.
 *
 *    F :: Server Local File System
 *
 *         This is an OpenSSL encrypted
 *         JSON object written to the
 *         file system.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * The CRNRSTN :: Lightsaber
 * SOAP Services Layer system
 * default order of operations
 * for the initialization of
 * its proprietary data transport
 * architectures, protocols,
 * and channels is as follows:
 *
 * GPHSJCDROMF
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE            :: MIT | https://crnrstn.jony5.com/licensing/
 *
 */
/*
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Added a data handling architecture 
 *       to the stack behind SOAP: 
 *
 *       M :: Remote Direct Memory 
 *            Access (RDMA, RoCE, or 
 *            RoCEv2) Data Storage 
 *            and Application Acceleration 
 *            Architecture, or simply 
 *            "the R" in CLR-SSL.
 *
 *            GPHSJCDROMF
 *
 *       5 :: Saturday, February 7, 2026 @ 1505 hrs.
 *
 */

/*
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * BEGIN INITIALIZATION 
 * OF ENVIRONMENTALLY 
 * RELEVANT RESOURCE 
 * WILDCARDS. 
 *
 * Begin A NEW WILD 
 * CARD RESOURCE.
 *
 */
$oWCR_BLUEHOST_JONY5 = $this->define_wildcard_resource('BLUEHOST_JONY5', 'CRNRSTN::INTEGRATIONS::WCR');
$oWCR_BLUEHOST_JONY5->add_attribute('EMAIL_SEND_ACTIVE', true);

/*
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * REQUIRED BY SOAP 
 * CONNECTION MANAGER. 
 *
 */
$oWCR_BLUEHOST_JONY5->add_attribute('CRNRSTN_SOAP_SVC_AUTH_KEY', '12345678987ftygyugyugg676t@5');
$oWCR_BLUEHOST_JONY5->add_attribute('CRNRSTN_SOAP_SVC_ENCRYPTION_KEY', '5jfu8chH#5%BNufn49fn4k3nvn9mmN!)000m32N3jN#');
$oWCR_BLUEHOST_JONY5->add_attribute('CRNRSTN_SOAP_SVC_USERNAME', '0364087231749672543475966333893875');
$oWCR_BLUEHOST_JONY5->add_attribute('CRNRSTN_SOAP_SVC_PASSWORD', '83g#k487fg5hY%@i4fs84jfmdld8!~lf;|Qkeiur84');
$oWCR_BLUEHOST_JONY5->add_attribute('WSDL_URI', 'http://jony5.com/_R/soa/?wsdl');

$oWCR_BLUEHOST_JONY5->add_attribute('SOA_NAMESPACE', 'http://www.w3.org/2003/05/soap-encoding');
$oWCR_BLUEHOST_JONY5->add_attribute('WSDL_CACHE_TTL', 80);
$oWCR_BLUEHOST_JONY5->add_attribute('NUSOAP_USECURL', true);
$oWCR_BLUEHOST_JONY5->add_attribute('SOAP_ENCRYPT_CIPHER', 'sm4');
$oWCR_BLUEHOST_JONY5->add_attribute('SOAP_ENCRYPT_OPTIONS', OPENSSL_RAW_DATA);
$oWCR_BLUEHOST_JONY5->add_attribute('SOAP_ENCRYPT_HMAC_ALG', 'haval256,5');

//$oWCR_BLUEHOST_JONY5->add_attribute('LOCAL_DIR_FILEPATH', '/var/www/html/_backup_test/_tmp/');
//$oWCR_BLUEHOST_JONY5->add_attribute('LOCAL_MKDIR_MODE', 775);
/*
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * EMAIL AND FTP 
 * ATTRIBUTE NAMES 
 * MATCH INTERNAL SYSTEM 
 * AND 3RD PARTY VALUES. 
 *
 */
$oWCR_BLUEHOST_JONY5->add_attribute('EMAIL_PROTOCOL', 'MAIL');     //SMTP, MAIL, QMAIL, SENDMAIL
//        $oWCR_BLUEHOST_JONY5->add_attribute('SMTP_AUTH', true);
//        $oWCR_BLUEHOST_JONY5->add_attribute('SMTP_SERVER', 'mail.DOMAIN.com;mail.DOMAIN.com');
//        $oWCR_BLUEHOST_JONY5->add_attribute('SMTP_PORT_OUTGOING', '587');
//        $oWCR_BLUEHOST_JONY5->add_attribute('SMTP_USERNAME', 'website_admin@DOMAIN.com');
//        $oWCR_BLUEHOST_JONY5->add_attribute('SMTP_PASSWORD', 'password123456789987654321');
//        $oWCR_BLUEHOST_JONY5->add_attribute('SMTP_KEEPALIVE', false);
//        $oWCR_BLUEHOST_JONY5->add_attribute('SMTP_SECURE', '');
//        $oWCR_BLUEHOST_JONY5->add_attribute('SMTP_AUTOTLS', true);
//        $oWCR_BLUEHOST_JONY5->add_attribute('SMTP_TIMEOUT', 5);
//        $oWCR_BLUEHOST_JONY5->add_attribute('DIBYA_SAHOO_SSL_CERT_BYPASS', true); // PER PHP +5.6, SEE RESEARCH [lnum 2906] [file /_R/class/environment/crnrstn.environment.class.php]
//        $oWCR_BLUEHOST_JONY5->add_attribute('SENDMAIL_PATH', '/usr/sbin/sendmail');
//        $oWCR_BLUEHOST_JONY5->add_attribute('USE_SENDMAIL_OPTIONS', true);

$oWCR_BLUEHOST_JONY5->add_attribute('FROM_EMAIL', 'website_admin@DOMAIN.com');
$oWCR_BLUEHOST_JONY5->add_attribute('FROM_NAME', 'CRNRSTN :: v2.00.0000 Mailer');
$oWCR_BLUEHOST_JONY5->add_attribute('REPLYTO_EMAIL_PIPED', 'website_admin@DOMAIN.com');
$oWCR_BLUEHOST_JONY5->add_attribute('REPLYTO_NAME_PIPED', 'Website Administrator');

$oWCR_BLUEHOST_JONY5->add_attribute('WORDWRAP', 79);
$oWCR_BLUEHOST_JONY5->add_attribute('ISHTML', true);
$oWCR_BLUEHOST_JONY5->add_attribute('PRIORITY', 'NORMAL');
$oWCR_BLUEHOST_JONY5->add_attribute('DUP_SUPPRESS', true);
$oWCR_BLUEHOST_JONY5->add_attribute('CHARSET', 'iso-8859-1');
$oWCR_BLUEHOST_JONY5->add_attribute('MESSAGE_ENCODING', '8bit');
$oWCR_BLUEHOST_JONY5->add_attribute('ALLOW_EMPTY', false);

/*
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * EXCEPTION HANDLING 
 * NOTIFICATIONS EMAIL 
 * ENDPOINTS. 
 *
 */
$oWCR_BLUEHOST_JONY5->add_attribute('RECIPIENTS_EMAIL_PIPED', 'Jonathan J5 Harris eVifweb@gmail.com||jharris@eVifweb.com||j5@jony5.com');
$oWCR_BLUEHOST_JONY5->add_attribute('RECIPIENTS_NAME_PIPED', '||Jonathan Harris||J5');

/*
WHAT ABOUT LIKE THIS....
$oWCR_BLUEHOST_JONY5->add_attribute('RECIPIENTS_EMAIL', 'Jonathan J5 Harris eVifweb@gmail.com');

$oWCR_BLUEHOST_JONY5->add_attribute('RECIPIENTS_EMAIL', 'jharris@eVifweb.com',);
$oWCR_BLUEHOST_JONY5->add_attribute('RECIPIENTS_NAME', 'Jonathan Harris');

$oWCR_BLUEHOST_JONY5->add_attribute('RECIPIENTS_EMAIL', 'j5@jony5.com');
$oWCR_BLUEHOST_JONY5->add_attribute('RECIPIENTS_NAME', 'J5');

*/

//$oCRNRSTN_oWCR_ARRAY[$oWCR_BLUEHOST_JONY5->return_resource_key()] = $oWCR_BLUEHOST_JONY5;

/*
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Begin A NEW WILD 
 * CARD RESOURCE. 
 *
 */
$oWCR_BLUEHOST_EVIFWEB = $this->define_wildcard_resource('BLUEHOST_EVIFWEB', 'CRNRSTN::INTEGRATIONS::WCR');
$oWCR_BLUEHOST_EVIFWEB->add_attribute('EMAIL_SEND_ACTIVE', true);

/*
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * REQUIRED BY SOAP 
 * CONNECTION MANAGER.
 *
 */
$oWCR_BLUEHOST_EVIFWEB->add_attribute('CRNRSTN_SOAP_SVC_AUTH_KEY', '12345678987ftygyugyugg676t@5');
$oWCR_BLUEHOST_EVIFWEB->add_attribute('CRNRSTN_SOAP_SVC_ENCRYPTION_KEY', '5jfu8chH#5%BNufn49fn4k3nvn9mmN!)000m32N3jN#');
$oWCR_BLUEHOST_EVIFWEB->add_attribute('CRNRSTN_SOAP_SVC_USERNAME', '0364087231749672543475966333893875');
$oWCR_BLUEHOST_EVIFWEB->add_attribute('CRNRSTN_SOAP_SVC_PASSWORD', '83g#k487fg5hY%@i4fs84jfmdld8!~lf;|Qkeiur84');
$oWCR_BLUEHOST_EVIFWEB->add_attribute('WSDL_URI', 'http://www.jony5.com/_R/soa/?wsdl');
$oWCR_BLUEHOST_EVIFWEB->add_attribute('SOA_NAMESPACE', 'http://www.w3.org/2003/05/soap-encoding');
$oWCR_BLUEHOST_EVIFWEB->add_attribute('WSDL_CACHE_TTL', 80);
$oWCR_BLUEHOST_EVIFWEB->add_attribute('NUSOAP_USECURL', true);
$oWCR_BLUEHOST_EVIFWEB->add_attribute('SOAP_ENCRYPT_CIPHER', 'sm4');
$oWCR_BLUEHOST_EVIFWEB->add_attribute('SOAP_ENCRYPT_OPTIONS', OPENSSL_RAW_DATA);
$oWCR_BLUEHOST_EVIFWEB->add_attribute('SOAP_ENCRYPT_HMAC_ALG', 'haval256,5');

//$oWCR_BLUEHOST_EVIFWEB->add_attribute('LOCAL_DIR_FILEPATH', '/var/www/html/_backup_test/_tmp/');
//$oWCR_BLUEHOST_EVIFWEB->add_attribute('LOCAL_MKDIR_MODE', 775);

/*
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * REQUIRED BY 
 * SOAP CONNECTION 
 * MANAGER. 
 *
 */
$oWCR_BLUEHOST_EVIFWEB->add_attribute('EMAIL_PROTOCOL', 'MAIL');     //SMTP, MAIL, QMAIL, SENDMAIL
//        $oWCR_BLUEHOST_EVIFWEB->add_attribute('SMTP_AUTH', true);
//        $oWCR_BLUEHOST_EVIFWEB->add_attribute('SMTP_SERVER', 'mail.DOMAIN.com;mail.DOMAIN.com');
//        $oWCR_BLUEHOST_EVIFWEB->add_attribute('SMTP_PORT_OUTGOING', '587');
//        $oWCR_BLUEHOST_EVIFWEB->add_attribute('SMTP_USERNAME', 'website_admin@DOMAIN.com');
//        $oWCR_BLUEHOST_EVIFWEB->add_attribute('SMTP_PASSWORD', 'password123456789987654321');
//        $oWCR_BLUEHOST_EVIFWEB->add_attribute('SMTP_KEEPALIVE', false);
//        $oWCR_BLUEHOST_EVIFWEB->add_attribute('SMTP_SECURE', '');
//        $oWCR_BLUEHOST_EVIFWEB->add_attribute('SMTP_AUTOTLS', true);
//        $oWCR_BLUEHOST_EVIFWEB->add_attribute('SMTP_TIMEOUT', 5);
//        $oWCR_BLUEHOST_EVIFWEB->add_attribute('DIBYA_SAHOO_SSL_CERT_BYPASS', true); // PER PHP +5.6, SEE RESEARCH [lnum 2906] [file /_R/class/environment/crnrstn.environment.class.php]
//        $oWCR_BLUEHOST_EVIFWEB->add_attribute('SENDMAIL_PATH', '/usr/sbin/sendmail');
//        $oWCR_BLUEHOST_EVIFWEB->add_attribute('USE_SENDMAIL_OPTIONS', true);

$oWCR_BLUEHOST_EVIFWEB->add_attribute('FROM_EMAIL', 'website_admin@DOMAIN.com');
$oWCR_BLUEHOST_EVIFWEB->add_attribute('FROM_NAME', 'CRNRSTN :: v2.00.0000 Mailer');
$oWCR_BLUEHOST_EVIFWEB->add_attribute('REPLYTO_EMAIL_PIPED', 'website_admin@DOMAIN.com');
$oWCR_BLUEHOST_EVIFWEB->add_attribute('REPLYTO_NAME_PIPED', 'Website Administrator');

$oWCR_BLUEHOST_EVIFWEB->add_attribute('WORDWRAP', 79);
$oWCR_BLUEHOST_EVIFWEB->add_attribute('ISHTML', true);
$oWCR_BLUEHOST_EVIFWEB->add_attribute('PRIORITY', 'NORMAL');
$oWCR_BLUEHOST_EVIFWEB->add_attribute('DUP_SUPPRESS', true);
$oWCR_BLUEHOST_EVIFWEB->add_attribute('CHARSET', 'iso-8859-1');
$oWCR_BLUEHOST_EVIFWEB->add_attribute('MESSAGE_ENCODING', '8bit');
$oWCR_BLUEHOST_EVIFWEB->add_attribute('ALLOW_EMPTY', false);

/*
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * EXCEPTION HANDLING 
 * NOTIFICATIONS EMAIL 
 * ENDPOINTS. 
 *
 */
$oWCR_BLUEHOST_EVIFWEB->add_attribute('RECIPIENTS_EMAIL_PIPED', 'Jonathan J5 Harris eVifweb@gmail.com|jharris@eVifweb.com|j5@jony5.com');
$oWCR_BLUEHOST_EVIFWEB->add_attribute('RECIPIENTS_NAME_PIPED', '|Jonathan Harris|J5');

//$oCRNRSTN_oWCR_ARRAY[$oWCR_BLUEHOST_EVIFWEB->return_resource_key()] = $oWCR_BLUEHOST_EVIFWEB;

/*
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Begin A NEW WILD  
 * CARD RESOURCE. 
 *
 */
$oWCR_LOCALHOST_CHAD_MACBOOKPRO_FTP = $this->define_wildcard_resource('LOCALHOST_CHAD_MACBOOKPRO', 'CRNRSTN_ERR_LOG_FTP');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO_FTP->add_attribute('FTP_SERVER', '172.16.225.128');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO_FTP->add_attribute('FTP_USERNAME', 'jony5');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO_FTP->add_attribute('FTP_PASSWORD', 'gY96sb21');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO_FTP->add_attribute('FTP_PORT', 21);
$oWCR_LOCALHOST_CHAD_MACBOOKPRO_FTP->add_attribute('FTP_TIMEOUT', 90);
$oWCR_LOCALHOST_CHAD_MACBOOKPRO_FTP->add_attribute('FTP_IS_SSL', false);
$oWCR_LOCALHOST_CHAD_MACBOOKPRO_FTP->add_attribute('FTP_USE_PASV', true);
$oWCR_LOCALHOST_CHAD_MACBOOKPRO_FTP->add_attribute('FTP_USE_PASV_ADDR', false);
$oWCR_LOCALHOST_CHAD_MACBOOKPRO_FTP->add_attribute('FTP_DISABLE_AUTOSEEK', false);
$oWCR_LOCALHOST_CHAD_MACBOOKPRO_FTP->add_attribute('FTP_DIR_PATH', '/var/www/html/_backup_test/dest420_FTP_WCR/');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO_FTP->add_attribute('FTP_MKDIR_MODE', 777);

//$oCRNRSTN_oWCR_ARRAY[$oWCR_LOCALHOST_CHAD_MACBOOKPRO_FTP->return_resource_key()] = $oWCR_LOCALHOST_CHAD_MACBOOKPRO_FTP;

/*
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Begin A NEW WILD 
 * CARD RESOURCE. 
 *
 */
$oWCR_LOCALHOST_CHAD_MACBOOKPRO = $this->define_wildcard_resource('LOCALHOST_CHAD_MACBOOKPRO', 'CRNRSTN::INTEGRATIONS::WCR');

$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('CRNRSTN_SOAP_SVC_AUTH_KEY', '9898e80wq8e008f8s8f80f8s0f');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('CRNRSTN_SOAP_SVC_ENCRYPTION_KEY', 'uerrueworuu@re2wruruewuureuwuroruurw5uowerurworuwo');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('CRNRSTN_SOAP_SVC_USERNAME', '03856145387465910978456438');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('CRNRSTN_SOAP_SVC_PASSWORD', '7dj3m9d2m2d99dd2dm');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('SOA_NAMESPACE', 'http://www.w3.org/2003/05/soap-encoding');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('WSDL_URI', 'http://172.16.225.128/css.validate.jony5.com/_R/soa/?wsdl');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('WSDL_CACHE_TTL', 80);
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('NUSOAP_USECURL', true);
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('SOAP_ENCRYPT_CIPHER', 'sm4');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('SOAP_ENCRYPT_OPTIONS', OPENSSL_RAW_DATA);
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('SOAP_ENCRYPT_HMAC_ALG', 'haval256,5');

$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('LOCAL_DIR_FILEPATH', '/var/www/html/_debug_output/');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('LOCAL_MKDIR_MODE', 775);

$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('EMAIL_SEND_ACTIVE', true);
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('EMAIL_PROTOCOL', 'MAIL');     //SMTP, MAIL, QMAIL, SENDMAIL
//        $oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('SMTP_AUTH', true);
//        $oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('SMTP_SERVER', 'mail.DOMAIN.com;mail.DOMAIN.com');
//        $oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('SMTP_PORT_OUTGOING', '587');
//        $oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('SMTP_USERNAME', 'website_admin@DOMAIN.com');
//        $oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('SMTP_PASSWORD', 'password123456789987654321');
//        $oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('SMTP_KEEPALIVE', false);
//        $oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('SMTP_SECURE', '');
//        $oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('SMTP_AUTOTLS', true);
//        $oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('SMTP_TIMEOUT', 5);
//        $oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('DIBYA_SAHOO_SSL_CERT_BYPASS', true); // PER PHP +5.6, SEE RESEARCH [lnum 2906] [file /_R/class/environment/crnrstn.environment.class.php]
//        $oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('SENDMAIL_PATH', '/usr/sbin/sendmail');
//        $oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('USE_SENDMAIL_OPTIONS', true);

$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('FROM_EMAIL', 'website_admin@DOMAIN.com');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('FROM_NAME', 'CRNRSTN :: v2.00.0000 Mailer');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('REPLYTO_EMAIL_PIPED', 'website_admin@DOMAIN.com');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('REPLYTO_NAME_PIPED', 'Website Administrator');
//$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('CC_EMAIL_PIPED', 'CC_jharris@DOMAIN.com|CC2_jharris@DOMAIN.com');
//$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('CC_NAME_PIPED', '|CC2_CRNRSTN v2.0.0 :: Lead Developer');  // ONLY SECOND HAS NAME, HERE
//$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('BCC_EMAIL_PIPED', 'BCC_jharris@DOMAIN.com|BCC2_jharris@DOMAIN.com');
//$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('BCC_NAME_PIPED', 'BCC2_CRNRSTN v2.0.0 :: Lead Developer|');// ONLY FIRST HAS NAME, HERE
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('WORDWRAP', 79);
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('ISHTML', true);
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('PRIORITY', 'NORMAL');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('DUP_SUPPRESS', true);
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('CHARSET', 'iso-8859-1');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('MESSAGE_ENCODING', '8bit');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('ALLOW_EMPTY', false);

/*
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * EXCEPTION HANDLING 
 * NOTIFICATIONS EMAIL 
 * ENDPOINTS. 
 *
 */
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('RECIPIENTS_EMAIL_PIPED', 'Jonathan J5 Harris eVifweb@gmail.com|jharris@eVifweb.com|j5@jony5.com');
$oWCR_LOCALHOST_CHAD_MACBOOKPRO->add_attribute('RECIPIENTS_NAME_PIPED', '|Jonathan Harris|J5');