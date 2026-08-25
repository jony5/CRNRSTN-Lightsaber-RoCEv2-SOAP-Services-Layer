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
 * GLOBAL FUNCTION
 * RESOURCE DEFINITION :: _crnrstn_php_initialization
 * FUNCTION VERSION    :: 1.00.0000
 * DATE                :: Tuesday, September 10, 2024 @ 0210 hrs.
 * AUTHOR              :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                 :: http://evifweb.jony5.com
 * TITLE               :: The CRNRSTN :: Lightsaber
 *                        SOAP Services Layer PHP 
 *                        Version Compatibility 
 *                        Services Layer Global
 *                        Function Definition
 * DESCRIPTION         :: The initialization of 
 *                        the CRNRSTN :: Lightsaber
 *                        SOAP Services Layer PHP 
 *                        version compatibility 
 *                        services layer supports 
 *                        the architectural 
 *                        decoupling of CRNRSTN :: 
 *                        Lightsaber SOAP Services 
 *                        Layer operational profile 
 *                        characteristics from the  
 *                        server's native running 
 *                        PHP version. 
 *
 *                        Select the version of PHP 
 *                        that the CRNRSTN :: 
 *                        Lightsaber SOAP Services 
 *                        Layer needs to operate 
 *                        according to from the 
 *                        supported PHP versions 
 *                        that are listed below.
 *
 *                        Alternatively, allow the 
 *                        CRNRSTN :: Lightsaber
 *                        SOAP Services Layer PHP 
 *                        Version Compatibility 
 *                        Services Layer to 
 *                        perform the work of PHP
 *                        version detection and 
 *                        PHP version support.
 *
 *
 *                        5
 *
 *                        Tuesday, September 10, 2024 @ 0225 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * @package CRNRSTN
 * @version 1.00.0000 CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer.
 * @author Jonathan '5' Harris <jharris@eVifweb.com>
 * @copyright Copyright © 2012-2026 eVifweb® development All Rights Reserved.
 * @license https://crnrstn.jony5.com/licensing/ MIT
 * @link https://crnrstn.jony5.com/ CRNRSTN :: Project Website.
 * @link https://twitter.com/CRNRSTN_v2_0_0 CRNRSTN :: on Twitter.
 * @link http://evifweb.jony5.com/ eVifweb® :: Corporate Sponsor.
 * @return   void 
 * @access public
 *
 */
function _crnrstn_php_initialization()
{

    /*
    // These are the notes,
    // and this soon to be
    // CRNRSTN :: Lightsaber
    // native registered
    // global function
    // definition resource
    // is a continuation of
    // the same, taken from the
    // LOCALHOST_CHAD_MACBOOKPRO
    // server environment profile
    // dev machine HDD.
    //
    // File:
    // /Users/jony5/Projects/www/stage/lightbox_helper/public_html/_R/soap/_php_versions.txt.
    //
    //
    // 5
    //
    // Tuesday, September 10, 0233 hrs.

    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    5 :: Monday, September 9, 2024 @ 1651 hrs.

    https://www.php.net/releases/


    PHP 3.0.x
    ---> PHP 4.0.0
    PHP 4.0.6
    PHP 4.1.0
    PHP 4.1.2
    PHP 4.2.0
    PHP 4.2.3
    PHP 4.3.0
    PHP 4.3.11
    PHP 4.4.0
    PHP 4.4.9
    ---> PHP 5.0.0
    PHP 5.0.5
    PHP 5.1.0
    PHP 5.1.6
    PHP 5.2.0
    PHP 5.2.17
    PHP 5.3.0
    PHP 5.3.29
    PHP 5.4.0
    PHP 5.4.45
    PHP 5.5.0
    PHP 5.5.38
    PHP 5.6.0
    PHP 5.6.40
    PHP 7.0.0
    ---> PHP 7.0.33
    PHP 7.1.0
    PHP 7.1.33
    PHP 7.2.0
    PHP 7.2.34
    PHP 7.3.0
    PHP 7.3.33
    PHP 7.4.0
    PHP 7.4.33
    ---> PHP 8.0.0
    ---> PHP 8.0.30 ###### ApacheFriends XAMPP Version 8.0.30 ######
                    Xampp on Windows 10 Home.
                    Xampp for Windows 8.0.30/Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.0.30.
                    <address>Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.0.30 Server at localhost Port 80</address>
    PHP 8.1.0
    PHP 8.1.29 [home page landing]
    PHP 8.2.0
    PHP 8.2.23 [home page landing]
    PHP 8.3.0
    PHP 8.3.11 [home page landing]
    ---> PHP 8.4.0, Beta 4 [home page landing]
    [Please DO NOT use this version [sic 8.4.0, Beta 4] in production, it is an early test version.]

    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 3.0.x
    Released: 20 Oct 2000
    Announcement: None
    Download:
    PHP 3.0.18 Source Code
    PHP 3.0.17 Windows binary

    Support for PHP 3 has been discontinued since 20 Oct 2000.

    Please consider upgrading to 8.


    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 4.0.0
    Released: 22 May 2000
    Announcement: English
    ChangeLog
    Download:
    Source (tar.gz)
    Windows binary


    Support for PHP 4 has been discontinued since 07 August 2008.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 4.0.6
    Released: 23 June 2001
    Announcement: None
    ChangeLog
    Download:
    Source (tar.gz)
    Windows binary


    Support for PHP 4 has been discontinued since 07 August 2008.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 4.1.0
    Released: 10 Dec 2001
    Announcement: English French
    ChangeLog
    Download:
    Source (tar.gz)
    Windows binary


    Support for PHP 4 has been discontinued since 07 August 2008.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 4.1.2
    Released: 12 March 2002
    Announcement: English
    ChangeLog
    Download:
    Source (tar.gz)
    Windows binary
    Windows installer


    Support for PHP 4 has been discontinued since 07 August 2008.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 4.2.0
    Released: 22 April 2002
    Announcement: English French
    ChangeLog
    Download:
    Source (tar.gz)
    Windows binary
    Windows installer


    Support for PHP 4 has been discontinued since 07 August 2008.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 4.2.3
    Released: 6 September 2002
    Announcement: English
    ChangeLog
    Download:
    Source (tar.gz)
    Windows binary
    Windows installer


    Support for PHP 4 has been discontinued since 07 August 2008.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 4.3.0
    Released: 27 December 2002
    Announcement: English French
    ChangeLog
    Download:
    Source (tar.gz)
    Windows binary
    Windows installer


    Support for PHP 4 has been discontinued since 07 August 2008.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 4.3.11
    Released: 31 Mar 2005
    Announcement: English French
    ChangeLog
    Download:
    Source (tar.gz)
    Source (tar.bz2)
    Windows binary
    Windows installer


    Support for PHP 4 has been discontinued since 07 August 2008.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 4.4.0
    Released: 11 Jul 2005
    Announcement: English
    ChangeLog
    Download:
    Source (tar.gz)
    Source (tar.bz2)
    Windows binary
    Windows installer


    Support for PHP 4 has been discontinued since 07 August 2008.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 4.4.9
    Released: 07 August 2008
    Announcement: English
    ChangeLog
    Download:
    PHP 4.4.9 (tar.bz2)
    PHP 4.4.9 (tar.gz)
    PHP 4.4.9 zip package


    Support for PHP 4 has been discontinued since 07 August 2008.

    Please consider upgrading to 8.



    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 5.0.0
    Released: 13 July 2004
    Announcement: English
    ChangeLog
    Download:
    Source (tar.gz)
    Windows binary
    Windows installer
    Collection of PECL modules for PHP 5.0.0


    Support for PHP 5 has been discontinued since 10 Jan 2019.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 5.0.5
    Released: 05 Sep 2005
    Announcement: None
    ChangeLog
    Download:
    Source (tar.gz)
    Windows binary
    Windows installer
    Collection of PECL modules for PHP 5.0.5


    Support for PHP 5 has been discontinued since 10 Jan 2019.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 5.1.0
    Released: 24 Nov 2005
    Announcement: English
    ChangeLog
    Download:
    Source (tar.gz)
    Windows binary
    Windows installer


    Support for PHP 5 has been discontinued since 10 Jan 2019.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 5.1.6
    Released: 24 Aug 2006
    Announcement: English
    ChangeLog
    Download:
    Source (tar.bz2)
    Source (tar.gz)
    Windows binary
    Collection of PECL modules for PHP 5.1.6


    Support for PHP 5 has been discontinued since 10 Jan 2019.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 5.2.0
    Released: 02 Nov 2006
    Announcement: English
    ChangeLog
    Download:
    Source (tar.bz2)
    Source (tar.gz)
    Windows binary
    Collection of PECL modules for PHP 5.2.0

    Support for PHP 5 has been discontinued since 10 Jan 2019.

    Please consider upgrading to 8.


    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 5.2.17
    Released: 06 January 2011
    Announcement: English
    ChangeLog
    Download:
    PHP 5.2.17 (tar.bz2)
    PHP 5.2.17 (tar.gz)


    Support for PHP 5 has been discontinued since 10 Jan 2019.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 5.3.0
    Released: 30 June 2009
    Announcement: English
    ChangeLog
    Download:
    PHP 5.3.0 (tar.bz2)
    PHP 5.3.0 (tar.gz)


    Support for PHP 5 has been discontinued since 10 Jan 2019.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 5.3.29
    Released: 14 Aug 2014
    Announcement: English
    ChangeLog
    Download:
    PHP 5.3.29 (tar.bz2)
    sha256: c4e1cf6972b2a9c7f2777a18497d83bf713cdbecabb65d3ff62ba441aebb0091
    PHP 5.3.29 (tar.gz)
    sha256: 57cf097de3d6c3152dda342f62b1b2e9c988f4cfe300ccfe3c11f3c207a0e317
    PHP 5.3.29 (tar.xz)
    sha256: 8438c2f14ab8f3d6cd2495aa37de7b559e33b610f9ab264f0c61b531bf0c262d
    Windows 5.3.29 binaries and source


    Support for PHP 5 has been discontinued since 10 Jan 2019.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 5.4.0
    Released: 01 March 2012
    Announcement: English
    ChangeLog
    Download:
    PHP 5.4.0 (tar.bz2)
    PHP 5.4.0 (tar.gz)


    Support for PHP 5 has been discontinued since 10 Jan 2019.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 5.4.45
    Released: 03 Sep 2015
    Announcement: English
    ChangeLog
    Download:
    PHP 5.4.45 (tar.bz2)
    sha256: 4e0d28b1554c95cfaea6fa2b64aac85433f158ce72bb571bcd5574f98f4c6582
    PHP 5.4.45 (tar.gz)
    sha256: 25bc4723955f4e352935258002af14a14a9810b491a19400d76fcdfa9d04b28f
    Windows 5.4.45 binaries and source


    Support for PHP 5 has been discontinued since 10 Jan 2019.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 5.5.0
    Released: 20 Jun 2013
    Announcement: English
    ChangeLog
    Download:
    PHP 5.5.0 (tar.bz2)
    PHP 5.5.0 (tar.gz)
    PHP 5.5.0 (tar.xz)


    Support for PHP 5 has been discontinued since 10 Jan 2019.

    Please consider upgrading to 8.





    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 5.5.38
    Released: 21 Jul 2016
    Announcement: English
    ChangeLog
    Download:
    PHP 5.5.38 (tar.bz2)
    sha256: 473c81ebb2e48ca468caee031762266651843d7227c18a824add9b07b9393e38
    PHP 5.5.38 (tar.gz)
    sha256: 4f458c9b504269615715a62f182b7c2f89bb8284f484befc221b56a1571b506e
    PHP 5.5.38 (tar.xz)
    sha256: cb527c44b48343c8557fe2446464ff1d4695155a95601083e5d1f175df95580f


    Support for PHP 5 has been discontinued since 10 Jan 2019.

    Please consider upgrading to 8.





    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 5.6.0
    Released: 28 Aug 2014
    Announcement: English
    ChangeLog
    Download:
    PHP 5.6.0 (tar.bz2)
    sha256: 097af1be34fc73965e6f8401fd10e73eb56e1969ed4ffd691fb7e91606d0fc09
    PHP 5.6.0 (tar.gz)
    sha256: 284b85376c630a6a7163e5278d64b8526fa1324fe5fd5d21174b54e2c056533f
    PHP 5.6.0 (tar.xz)
    sha256: 8fc5411cd05cc6cc663247e588931fe67b1dc0e42550fa28ab2c943ad84eda02


    Support for PHP 5 has been discontinued since 10 Jan 2019.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 5.6.40
    Released: 10 Jan 2019
    Announcement: English
    ChangeLog
    Download:
    PHP 5.6.40 (tar.bz2)
    sha256: ffd025d34623553ab2f7fd8fb21d0c9e6f9fa30dc565ca03a1d7b763023fba00
    PHP 5.6.40 (tar.gz)
    sha256: 56fb9878d12fdd921f6a0897e919f4e980d930160e154cbde2cc6d9206a27cac
    PHP 5.6.40 (tar.xz)
    sha256: 1369a51eee3995d7fbd1c5342e5cc917760e276d561595b6052b21ace2656d1c


    Support for PHP 5 has been discontinued since 10 Jan 2019.

    Please consider upgrading to 8.




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 7.0.0
    Released: 03 Dec 2015
    Announcement: English
    ChangeLog
    Download:
    PHP 7.0.0 (tar.bz2)
    sha256: a92a54306832167a39f7c0ec00524fc6f3f7d985c806caa7632561d0ddedfcea
    PHP 7.0.0 (tar.gz)
    sha256: d6ae7b4a2e5c43a9945a97e83b6b3adfb7d0df0b91ef78b647a6dffefaa9c71b
    PHP 7.0.0 (tar.xz)
    sha256: 7dbdda74c502960febe0544b3e3a7c430389a7a4260e94c73fd8ca26c33b8540





    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 7.0.33 [PHP 7.0.33-57+ubuntu18.04.1+deb.sury.org+1]
    Released: 10 Jan 2019
    Announcement: English
    ChangeLog
    Download:
    PHP 7.0.33 (tar.bz2)
    sha256: 4933ea74298a1ba046b0246fe3771415c84dfb878396201b56cb5333abe86f07
    PHP 7.0.33 (tar.gz)
    sha256: d71a6ecb6b13dc53fed7532a7f8f949c4044806f067502f8fb6f9facbb40452a
    PHP 7.0.33 (tar.xz)
    sha256: ab8c5be6e32b1f8d032909dedaaaa4bbb1a209e519abb01a52ce3914f9a13d96






    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 7.1.0
    Released: 01 Dec 2016
    Announcement: English
    ChangeLog
    Download:
    PHP 7.1.0 (tar.bz2)
    sha256: 68bcfd7deed5b3474d81dec9f74d122058327e2bed0ac25bbc9ec70995228e61
    PHP 7.1.0 (tar.gz)
    sha256: 9e84c5b13005c56374730edf534fe216f6a2e63792a9703d4b894e770bbccbae
    PHP 7.1.0 (tar.xz)
    sha256: a810b3f29c21407c24caa88f50649320d20ba6892ae1923132598b8a0ca145b6




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 7.1.33
    Released: 24 Oct 2019
    Announcement: English
    ChangeLog
    Download:
    PHP 7.1.33 (tar.bz2)
    sha256: 95a5e5f2e2b79b376b737a82d9682c91891e60289fa24183463a2aca158f4f4b
    PHP 7.1.33 (tar.gz)
    sha256: 0055f368ffefe51d5a4483755bd17475e88e74302c08b727952831c5b2682ea2
    PHP 7.1.33 (tar.xz)
    sha256: bd7c0a9bd5433289ee01fd440af3715309faf583f75832b64fe169c100d52968




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 7.2.0
    Released: 30 Nov 2017
    Announcement: English
    ChangeLog
    Download:
    PHP 7.2.0 (tar.bz2)
    sha256: 2bfefae4226b9b97879c9d33078e50bdb5c17f45ff6e255951062a529720c64a
    PHP 7.2.0 (tar.gz)
    sha256: 801876abd52e0dc58a44701344252035fd50702d8f510cda7fdb317ab79897bc
    PHP 7.2.0 (tar.xz)
    sha256: 87572a6b924670a5d4aac276aaa4a94321936283df391d702c845ffc112db095




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 7.2.34
    Released: 01 Oct 2020
    Announcement: English
    ChangeLog
    Download:
    PHP 7.2.34 (tar.gz)
    sha256: 8b2777c741e83f188d3ca6d8e98ece7264acafee86787298fae57e05d0dddc78
    PHP 7.2.34 (tar.bz2)
    sha256: 0e5816d668a2bb14aca68cef8c430430bd86c3c5233f6c427d1a54aac127abcf
    PHP 7.2.34 (tar.xz)
    sha256: 409e11bc6a2c18707dfc44bc61c820ddfd81e17481470f3405ee7822d8379903




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 7.3.0
    Released: 06 Dec 2018
    Announcement: English
    ChangeLog
    Download:
    PHP 7.3.0 (tar.bz2)
    sha256: 7a267daec9969a997c5c8028c350229646748e0fcc71e2f2dbb157ddcee87c67
    PHP 7.3.0 (tar.gz)
    sha256: 391bd0f91d9bdd01ab47ef9607bad8c65e35bc9bb098fb7777b2556e2c847b11
    PHP 7.3.0 (tar.xz)
    sha256: 7d195cad55af8b288c3919c67023a14ff870a73e3acc2165a6d17a4850a560b5




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 7.3.33
    Released: 18 Nov 2021
    Announcement: English
    ChangeLog
    Download:
    PHP 7.3.33 (tar.gz)
    sha256: 9a369c32c6f52036b0a890f290327f148a1904ee66aa56e2c9a7546da6525ec8
    PHP 7.3.33 (tar.bz2)
    sha256: f412487d7d953437e7978a0d7b6ec99bf4a85cf3378014438a8577b89535451a
    PHP 7.3.33 (tar.xz)
    sha256: 166eaccde933381da9516a2b70ad0f447d7cec4b603d07b9a916032b215b90cc



    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 7.4.0
    Released: 28 Nov 2019
    Announcement: English
    ChangeLog
    Download:
    PHP 7.4.0 (tar.bz2)
    sha256: bf206be96a39e643180013df39ddcd0493966692a2422c4b7d3355b6a15a01c0
    PHP 7.4.0 (tar.gz)
    sha256: 004a1a8176176ee1b5c112e73d705977507803f425f9e48cb4a84f42b22abf22
    PHP 7.4.0 (tar.xz)
    sha256: 9bb751b20e5d6cc1ea9b1ebf23ef2d5f07f99b2d9cc417bf1d70c04f8b20ec42




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 7.4.33
    Released: 03 Nov 2022
    Announcement: English
    ChangeLog
    Download:
    PHP 7.4.33 (tar.gz)
    sha256: 5a2337996f07c8a097e03d46263b5c98d2c8e355227756351421003bea8f463e
    PHP 7.4.33 (tar.bz2)
    sha256: 4e8117458fe5a475bf203128726b71bcbba61c42ad463dffadee5667a198a98a
    PHP 7.4.33 (tar.xz)
    sha256: 924846abf93bc613815c55dd3f5809377813ac62a9ec4eb3778675b82a27b927




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 8.0.0
    Released: 26 Nov 2020
    Announcement: English
    ChangeLog
    Download:
    PHP 8.0.0 (tar.gz)
    sha256: 3ed7b48d64357d3e8fa9e828dbe7416228f84105b8290c2f9779cd66be31ea71
    PHP 8.0.0 (tar.bz2)
    sha256: 5e832dc37eabf444410b4ea6fb3d66b72e44e7407a3b49caa5746edcf71b9d09
    PHP 8.0.0 (tar.xz)
    sha256: b5278b3eef584f0c075d15666da4e952fa3859ee509d6b0cc2ed13df13f65ebb




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 8.0.30
    Released: 03 Aug 2023
    Announcement: English
    ChangeLog
    Download:
    PHP 8.0.30 (tar.gz)
    sha256: 449d2048fcb20a314d8c218097c6d1047a9f1c5bb72aa54d5d3eba0a27a4c80c
    PHP 8.0.30 (tar.bz2)
    sha256: 98a9cb6a0e27a6950cdf4b26dcac48f2be2d936d5224a502f066cf3d4cf19b92
    PHP 8.0.30 (tar.xz)
    sha256: 216ab305737a5d392107112d618a755dc5df42058226f1670e9db90e77d777d9




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 8.1.0
    Released: 25 Nov 2021
    Announcement: English
    ChangeLog
    Download:
    PHP 8.1.0 (tar.gz)
    sha256: 848705043ea4a6e022246ae12a1bff6afcf5c73ea98c6ac4d2108d6028c5c125
    PHP 8.1.0 (tar.bz2)
    sha256: 0725ed2baea125496a898455d501a77460218b2a0cfad773fa9322f491b82b61
    PHP 8.1.0 (tar.xz)
    sha256: a1317eff0723a2b3d3122bbfe107a1158570ea2822dc35a5fb360086db0f6bbc




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 8.1.29 [home page landing]




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 8.2.0
    Released: 08 Dec 2022
    Announcement: English
    ChangeLog
    Download:
    PHP 8.2.0 (tar.gz)
    sha256: 435c4c2439db648cdf34236f7cd459f93f943fb788b66723a033610d4a059fc6
    PHP 8.2.0 (tar.bz2)
    sha256: 1bf4fca663f93d9e0b4909bd6eae0583a1ce383e7f05df126f28f272fa1fd51a
    PHP 8.2.0 (tar.xz)
    sha256: 6ea4c2dfb532950fd712aa2a08c1412a6a81cd1334dd0b0bf88a8e44c2b3a943




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 8.2.23 [home page landing]




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    PHP 8.3.0
    Released: 23 Nov 2023
    Announcement: English
    ChangeLog
    Download:
    PHP 8.3.0 (tar.gz)
    sha256: 557ae14650f1d1984d3213e3fcd8d93a5f11418b3f8026d3a2d5022251163951
    PHP 8.3.0 (tar.bz2)
    sha256: de67d0833d42b196e5a66fa1a332f45e296cbe8e9472e9256b2a071c34dc5ed6
    PHP 8.3.0 (tar.xz)
    sha256: 1db84fec57125aa93638b51bb2b15103e12ac196e2f960f0d124275b2687ea54




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    ---> PHP 8.3.11 [home page landing]




    # C # R # N # R # S # T # N # :: # L # I # G # H # T
    ---> PHP 8.4.0, Beta 4 [home page landing]




    # C # R # N # R # S # T # N # :: # L # I # G # H # T

    */

}