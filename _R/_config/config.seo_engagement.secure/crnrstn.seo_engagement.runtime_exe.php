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
 * RUNTIME EXECUTABLE :: /_R/_config/config.seo_engagement.secure/crnrstn.seo_engagement.runtime_exe.php
 * EXECUTABLE VERSION :: 1.00.0000
 * DATE               :: Monday, July 22, 2024 @ 1050 hrs.
 * AUTHOR             :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                :: http://evifweb.jony5.com/
 * TITLE              :: The CRNRSTN :: Lightsaber
 *                       SOAP Services Layer End User
 *                       Engagement and Web Analytics
 *                       Tracking Tags Initialization
 *                       Runtime Executable
 * DESCRIPTION        :: Supporting third party
 *                       end user engagement and
 *                       tracking profiles with clean
 *                       browser HTML JavaScript tag
 *                       injections that are fully
 *                       managed by the CRNRSTN ::
 *                       Lightsaber SOAP Services
 *                       Layer Interact UI/UX
 *                       Framework, this runtime
 *                       executable will store the
 *                       prepared JavaScript tags
 *                       for string output during
 *                       web page assembly for the
 *                       browser at the server.
 *
 *                       Provide SEO engagement and
 *                       tracking profiles for each
 *                       server environment that
 *                       the CRNRSTN :: Lightsaber
 *                       SOAP Services Layer will
 *                       support at runtime.
 *
 *
 *                       5
 *
 *                       Monday, July 22, 2024 @ 1111 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE            :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * oCRNRSTN takes the place 
 * of (and internalizes) 
 * $oCRNRSTN_USR as 
 * "the handle". 
 *
 *
 * 5 ::
 *
 * Tuesday, August 16, 2022 @ 0131 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Added CRNRSTN_AUTHORIZE_ISEMAIL and 
 *       CRNRSTN_AUTHORIZE & CRNRSTN_PASSWORD.
 *       5 :: Tuesday, August 16, 2022 @ 2333 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Removed the globally defined integer 
 *       constants, 'CRNRSTN_AUTHORIZE_ISEMAIL' 
 *       and 'CRNRSTN_AUTHORIZE_ISPASSWORD' 
 *       in favor of using: 
 *
 *       (int) CRNRSTN_AUTHORIZE & 
 *       (int) CRNRSTN_EMAIL
 *
 *       (int) CRNRSTN_AUTHORIZE & 
 *       (int) CRNRSTN_PASSWORD
 *
 *       5 :: Tuesday, March 10, 2026 @ 0458 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Added the globally defined 
 *       'CRNRSTN_USERNAME' integer 
 *       constant to the CLR-SSL which 
 *       will be supported and enforced 
 *       in the distributed compute 
 *       application by an enterprise 
 *       licensing (MIT) architecture that 
 *       will be set up and maintained 
 *       by eVifweb®.
 *       5 :: Saturday, March 14, 2026 @ 0255 hrs.
 *
 */

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * CRNRSTN :: Lightsaber RoCEv2 SOAP 
 * Services Layer Advanced Configuration 
 * Parameters for the Initialization of Third
 * Party Engagement Tag Profiles.
 *
 *
 * 5
 *
 */
$tmp_str_JONY5           = 
$tmp_str_EVIFWEB         = 
$tmp_str_CHAD_MACBOOKPRO = 
$tmp_str_MACBOOKPRO      = '<!-- Global ENGAGEMENT tag :: EXAMPLE -->
<script>

    //
	// USER ENGAGEMENT TRACKING TAG JS CODE :: HERE
	//
	// E.G. GOOGLE PLACEMENT TAG.
	// https://support.google.com/campaignmanager/answer/2826636?hl=en
	
</script>';

$tmp_str_JONY5_TEST = '<!-- Global ENGAGEMENT tag - **DEMO_ENGAGEMENT_TEST**  -->
<script>
// HELLO TEST - will only load if called manually, due to is_enabled = false.
</script>
';

//
// INITIALIZE ENGAGEMENT PROFILE(S) FOR EACH ENVIRONMENT.
// $this->config_add_seo_engagement([environment-key], [data-key], [3rd-party-html-injection-string], [enabled-by-default]=true);
$this->config_add_seo_engagement('BLUEHOST_JONY5', 'DEMO_ENGAGEMENT', $tmp_str_JONY5);
$this->config_add_seo_engagement('BLUEHOST_EVIFWEB', 'DEMO_ENGAGEMENT', $tmp_str_EVIFWEB);
$this->config_add_seo_engagement('LOCALHOST_CHAD_MACBOOKPRO', 'DEMO_ENGAGEMENT_TEST', $tmp_str_JONY5_TEST, false);
$this->config_add_seo_engagement('LOCALHOST_CHAD_MACBOOKPRO', 'DEMO_ENGAGEMENT', $tmp_str_CHAD_MACBOOKPRO);
$this->config_add_seo_engagement('LOCALHOST_PC', 'DEMO_ENGAGEMENT', $tmp_str_MACBOOKPRO);