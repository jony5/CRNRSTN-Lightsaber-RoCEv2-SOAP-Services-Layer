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
 * RUNTIME EXECUTABLE :: /_R/_config/config.system_resource.secure/crnrstn.system_resource.runtime_exe.php
 * EXECUTABLE VERSION :: 1.00.0000
 * DATE               :: Monday, July 22, 2024 @ 1142 hrs.
 * AUTHOR             :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                :: http://evifweb.jony5.com/
 * TITLE              :: The CRNRSTN :: Lightsaber SOAP
 *                       Services Layer Application
 *                       Configuration System
 *                       Resources Initialization
 *                       Runtime Executable
 * DESCRIPTION        :: Supporting general web site
 *                       design and development, use
 *                       this CRNRSTN :: Lightsaber SOAP
 *                       Services Layer system resources
 *                       initialization runtime
 *                       executable to prepare and
 *                       store custom web application
 *                       configuration data for the
 *                       running application.
 *
 *                       All stored data will be:
 *                        - SOAP services enabled
 *                          for maximum data
 *                          portability and
 *                          framework-wide
 *                          accessibility,
 *
 *                        - deeply and architecturally
 *                          data type entrenched
 *                          for maximum data and data
 *                          type integrity (or type
 *                          sensitivity) on all
 *                          reads and writes
 *                          respectively from and to
 *                          all channels of the
 *                          CRNRSTN :: Lightsaber
 *                          SOAP Services
 *                          Layer Multi-Channel
 *                          Decoupled Data Object
 *                          (MC-DDO),
 *                          including $_GET, and
 *
 *                        - subjected to all
 *                          configured channel data
 *                          storage profile ttl,
 *                          authorizations,
 *                          restrictions, and policy
 *                          including honoring the
 *                          designated channel silo
 *                          authorizations for each
 *                          stored piece of data as
 *                          well as monitoring
 *                          resource consumption
 *                          demands in order to
 *                          stick closely to being
 *                          under the maximum bytes
 *                          stored policies for
 *                          all eleven (11) CRNRSTN ::
 *                          Lightsaber MC-DDO channels.
 *
 *
 *                       5
 *
 *                       Monday, July 22, 2024 @ 1142 hrs.
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
 *         Access (RDMA, RoCE, or 
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
 * The CRNRSTN :: Lightsaber 
 * RoCEv2 SOAP Services Layer 
 * channel data storage 
 * authorization integers: 
 * -----
 * self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_GET']
 * self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_POST']
 * self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_SESSION']
 * self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_SSDTLA']
 * self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_PSSDTLA']
 * self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_COOKIE']
 * self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_DATABASE']
 * self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_RUNTIME'] (default)
 * self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_SOAP']
 * self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_RDMA']
 * self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_FILE']
 * self::$R_data['int_flag']['R_authorize_all']
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE            :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 */
 /*
 * Edit: Changed "...all ten (10) CRNRSTN :: 
 *       Lightsaber MC-DDO channels." to 
 *       "all eleven (11) CRNRSTN :: 
 *       Lightsaber MC-DDO channels."
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Added a data handling architecture 
 *       channel to the stack behind SOAP: 
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
 *       5 :: Saturday, February 7, 2026 @ 1511 hrs.
 *       Last Modified: Saturday, February 7, 2026 @ 1534 hrs.
 *
 */

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Begin system resource
 * definitions for the
 * next environment.
 *
 */
$this->config_add_resource(
	   'BLUEHOST_EVIFWEB', 
	   'WETHRBUG_APP', 
	   'https://wethrbug.jony5.com/', 
	   'CRNRSTN::RESOURCE', 
	   'R_channel_RUNTIME');
$this->config_add_resource(
	   'BLUEHOST_EVIFWEB', 
	   'CRNRSTN_UI_INTERACT_ENABLED', 
	   false);
$this->config_add_resource(
	   'BLUEHOST_EVIFWEB', 
	   'CRNRSTN_UI_INTERACT_ISVISIBLE', 
	   false);
$this->config_add_resource(
	   'BLUEHOST_EVIFWEB', 
	   'SSL_ENABLED', 
	   true);

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * BEGIN SYSTEM RESOURCE DEFINITIONS
 * FOR THE NEXT ENVIRONMENT.
 *
 * TOSHIBA M100 [eVifweb, HARDWARE
 * (XAMPP/XP PRO, SP2) CIRCA 2005].
 *
 * THIS IS THE EARLIEST OF BEGINNINGS
 * FOR SERVER CONFIGURATIONS ON TOP
 * OF CRNRSTN ::
 *
 * :: RADIOHEAD LAPTOP.
 *
 * Saturday, June 8, 2024 @ 0304 hrs.
 *
 */

/*
 * TOSHIBA M100 [eVifweb] :: 
 * RADIOHEAD LAPTOP.
$this->config_add_resource(
       'LOCALHOST_PC', 
       'WETHRBUG_APP', 
       'https://wethrbug.jony5.com/');
$this->config_add_resource(
       'LOCALHOST_PC', 
       'CRNRSTN_UI_INTERACT_ENABLED', 
       true);
$this->config_add_resource(
       'LOCALHOST_PC', 
       'CRNRSTN_UI_INTERACT_ISVISIBLE', 
       true);
$this->config_add_resource(
       'LOCALHOST_PC', 
       'SSL_ENABLED', 
       false);
 
 */

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * BEGIN SYSTEM RESOURCE 
 * DEFINITIONS FOR THE 
 * NEXT ENVIRONMENT.
 *
 */
$this->config_add_resource(
	   'LOCALHOST_CHAD_MACBOOKPRO', 
	   'WETHRBUG_APP', 
	   'https://wethrbug.jony5.com/');
$this->config_add_resource(
	   'LOCALHOST_CHAD_MACBOOKPRO', 
	   'CRNRSTN_UI_INTERACT_ENABLED', 
	   true);
$this->config_add_resource(
	   'LOCALHOST_CHAD_MACBOOKPRO', 
	   'CRNRSTN_UI_INTERACT_ISVISIBLE', 
	   true);
$this->config_add_resource(
	   'LOCALHOST_CHAD_MACBOOKPRO', 
	   'SSL_ENABLED', 
	   false);

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * BEGIN SYSTEM RESOURCE 
 * DEFINITIONS FOR ALL 
 * ENVIRONMENTS AS 
 * DESIGNATED BY PASSING 
 * CRNRSTN_RESOURCE_ALL 
 * AS ENV KEY PARAMETER.
 * 
 * Note: 
 * 'WSDL_CACHE_TTL' is 
 * REQUIRED BY the 
 * CRNRSTN :: SOAP 
 * CONNECTION MANAGER.
 * 
 * Note: 
 * 'SOA_NAMESPACE' is USED 
 * BY the CRNRSTN :: SOAP 
 * CONNECTION MANAGER.
 *
 */
$this->config_add_resource(
	   CRNRSTN_RESOURCE_ALL, 
	   'WSDL_CACHE_TTL', 
	   '80');
$this->config_add_resource(
	   CRNRSTN_RESOURCE_ALL, 
	   'SOA_NAMESPACE', 
	   'http://www.w3.org/2003/05/soap-encoding');