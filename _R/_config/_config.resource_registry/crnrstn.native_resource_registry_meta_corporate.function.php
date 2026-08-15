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
 * 
 *
 * GLOBAL FUNCTION
 * RESOURCE DEFINITION :: _crnrstn_native_resource_registry_meta_corporate
 * FUNCTION VERSION    :: 1.00.0000
 * DATE                :: Thursday, April 16, 2026 @ 1911 hrs.
 * AUTHOR              :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                 :: http://evifweb.jony5.com/
 * TITLE               :: The Native Resource Registry 
 *                        of...
 * DESCRIPTION         :: The native resource...
 *
 *
 *                        5
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
 * @link http://evifweb.jony5.com/ eVifweb :: Corporate Sponsor.
 * @return mixed 
 * @access public
 *
 */
function _crnrstn_native_resource_registry_meta_corporate(
         $software_company_key,
         $attribute,
         $R,
         $background_color_hex = '#FFF',
         $iso_lang_code = 'en',
         $R_debug_mode = 0,
         $generate_search_algorithm_data = false,
         $generate_content_synchronization_hash = false,
         $resource_copyright_text = NULL)
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * The _crnrstn_native_resource_registry_meta_corporate()
     * global function definition 
     * was copied from eVifweb® 
     * engineering design notes on: 
     * Thursday, April 16, 2026 @ 1911 hrs.
     *
     *
     * 5 :: Thursday, April 16, 2026 @ 1920 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed _crnrstn_native_resource_registry_meta_corporate() 
     *       global function definition 
     *       input parameter, $corp_author 
     *       to $corp_author_key. 
     *       5 :: Friday, April 17, 2026 @ 0520 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed _crnrstn_native_resource_registry_meta_corporate() 
     *       global function definition 
     *       input parameter, $corp_author_key 
     *       to $software_company_key. 
     *       5 :: Friday, April 17, 2026 @ 1050 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Added 
     *       $crnrstn_debug_mode = CRNRSTN_DEBUG_OFF 
     *       input parameter to 
     *       _crnrstn_native_resource_registry_meta_corporate(). 
     *       5 :: Tuesday, May 19, 2026 @ 0311 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed crnrstn_debug_mode 
     *       input parameter to simply, 
     *       R_debug_mode, 
     *       in order to align to 
     *       the crnrstn_registry_user 
     *       __construct() input 
     *       overhaul pivoting around 
     *       config_serial_override. 
     *       5 :: Saturday, June 20, 2026 @ 0342 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * 'COMPANY_NAME_HTML'         => $R->return_registered_resource_meta(
     *                                    $name,
     *                                    'COMPANY_NAME_HTML', 
     *                                    $tmp_background_color_hex,
     *                                    $tmp_iso_lang_code)
     *
     * 'COMPANY_NAME_TEXT'         => $R->return_registered_resource_meta(
     *                                    $name,
     *                                    'COMPANY_NAME_TEXT', 
     *                                    $tmp_background_color_hex,
     *                                    $tmp_iso_lang_code)
     *
     * 'AUTHOR_CONTRIBUTORS_HTML'  => $R->return_registered_resource_meta(
     *                                    $name,
     *                                    'AUTHOR_CONTRIBUTORS_HTML', 
     *                                    $tmp_background_color_hex,
     *                                    $tmp_iso_lang_code)
     *
     * 'AUTHOR_CONTRIBUTORS_TEXT'  => $R->return_registered_resource_meta(
     *                                    $name,
     *                                    'AUTHOR_CONTRIBUTORS_TEXT', 
     *                                    $tmp_background_color_hex,
     *                                    $tmp_iso_lang_code)
     *
     * 'MEDIA_ELEMENT_KEY'         => $R->return_registered_resource_meta(
     *                                    $name, 
     *                                    'MEDIA_ELEMENT_KEY', 
     *                                    $tmp_background_color_hex, 
     *                                    $tmp_iso_lang_code)
     *
     * 'URL'                       => $R->return_registered_resource_meta(
     *                                    $name, 
     *                                    'URL', 
     *                                    $tmp_background_color_hex, 
     *                                    $tmp_iso_lang_code)
     *
     * 'COPYRIGHT_HTML'            => $R->return_registered_resource_meta(
     *                                    $name,
     *                                    'COPYRIGHT_HTML',
     *                                    $tmp_background_color_hex, 
     *                                    $tmp_iso_lang_code,
     *                                    NULL, NULL, NULL, NULL,
     *                                    NULL, NULL, NULL, NULL, 
     *                                    NULL, NULL, NULL, NULL,
     *                                    $tmp_COPYRIGHT_TEXT)
     *
     * 'COPYRIGHT_TEXT'            => $R->return_registered_resource_meta(
     *                                    $name,
     *                                    'COPYRIGHT_TEXT',
     *                                    $tmp_background_color_hex, 
     *                                    $tmp_iso_lang_code,
     *                                    NULL, NULL, NULL, NULL,
     *                                    NULL, NULL, NULL, NULL, 
     *                                    NULL, NULL, NULL, NULL,
     *                                    $tmp_COPYRIGHT_TEXT)
     *
     *
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * CLR-SSL Resource Registry 
     * Corporate Sponsorship 
     * and Copyright Meta Data. 
     *
     * Where $corp_author_key = '{corp / author key}';
     *
     * Available Corporate Author 
     * Key Options Include: 
     * - (string) 'PHPMailer', 
     * - (string) 'Digital ITCC', 
     * - (string) 'Mobile Detect', 
     * - (string) 'NuSphere Corporation', 
     * - (string) 'The PHP Group', and 
     * - (string) 'eVifweb® development',
     *
     * and finishing with some sweet, 
     * sweet bong rips. 
     *
     *
     * 5 :: Friday, April 17, 2026 @ 1015 hrs.
     * Last Modified: Saturday, April 18, 2026 @ 0746 hrs.
     *
     */
    error_log('[lnum ' . 
        __LINE__ . '] [func ' . 
        __FUNCTION__ . 
        '] $software_company_key[' . 
        $software_company_key . 
        '] $attribute[' . 
        $attribute . '] $resource_copyright_text[' . 
        $resource_copyright_text . ']. die();');

    die();

    switch($software_company_key){
        case 'PHPMailer':

            switch($attribute){
                case 'COMPANY_NAME':
                case 'COMPANY_NAME_HTML':
                case 'COMPANY_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry 
                     * Content Library Meta Data 
                     * Output Controller. 
                     *
                     * COMPANY_NAME_HTML   = HTML Output 
                     * COMPANY_NAME_TEXT   = Text Output 
                     * COMPANY_NAME        = Multi-Part HTML 
                     *                       & Text Output 
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0420 hrs.
                     *
                     */
                    switch($attribute){
                        case 'COMPANY_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'COMPANY_NAME_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'COMPANY_NAME':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name Text data
                         * for this natively 
                         * registered resource of
                         * the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1008 hrs.
                         *
                         */
                        $tmp_data_TEXT = 'PHPMailer';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software 
                         * company name HTML data 
                         * for this natively registered 
                         * resource of the CRNRSTN :: 
                         * Lightsaber RoCEv2 SOAP 
                         * Services Layer (CLR-SSL) 
                         * System Resource Registry. 
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1008 hrs.
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['company_name'] .
                        '>PHPMailer</span>';

                break;
                case 'AUTHOR_CONTRIBUTORS':
                case 'AUTHOR_CONTRIBUTORS_HTML':
                case 'AUTHOR_CONTRIBUTORS_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * AUTHOR_CONTRIBUTORS_HTML   = HTML Output
                     * AUTHOR_CONTRIBUTORS_TEXT   = Text Output
                     * AUTHOR_CONTRIBUTORS        = Multi-Part HTML
                     *                              & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0328 hrs.
                     *
                     */
                    switch($attribute){
                        case 'AUTHOR_CONTRIBUTORS_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'AUTHOR_CONTRIBUTORS_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'AUTHOR_CONTRIBUTORS':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor Text
                         * data parameter.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1004 hrs.
                         *
                         */
                        $tmp_data_TEXT = 'Development time and resources for 
PHPMailer are provided by Smartmessages.net, 
a powerful email marketing system.

https://info.smartmessages.net/

Other contributions are gladly received, 
whether in beer, T-shirts, Amazon 
wishlist raids, or cold, hard cash. 

If you\'d like to donate to say 
"thank you" to maintainers or 
contributors, please contact them 
through individual profile pages 
via the contributors page.

https://github.com/PHPMailer/PHPMailer/graphs/contributors


History 

- PHPMailer was originally written in
  2001 by Brent R. Matzelle as a 
  SourceForge project. 

  http://sourceforge.net/projects/phpmailer/

- Marcus Bointon (coolbru on SF) and 
  Andy Prevost (codeworxtech) took 
  over the project in 2004.

- Became an Apache incubator project 
  on Google Code in 2010, managed 
  by Jim Jagielski.

- Marcus created his fork on GitHub 
  in 2008.

  https://github.com/Synchro/PHPMailer

- Jim and Marcus decide to join forces 
  and use GitHub as the canonical and 
  official repo for PHPMailer in 2013.

- PHPMailer moves to the PHPMailer
  organisation on GitHub in 2013.

  https://github.com/PHPMailer';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1004 hrs.
                         *
                         */
                        $tmp_data_HTML = '<div ' .
                        $tmp_css_data['author_contributors'] .
                        '>Development time and resources for 
PHPMailer are provided by <a ' . $tmp_css_data['copy_a'] .
' href="https://info.smartmessages.net/" target="_blank">Smartmessages.net</a>, 
a powerful email marketing system.

<div ' . $tmp_css_data['line_break'] . '><br><br></div>
<a ' . $tmp_css_data['copy_a'] .
' href="https://info.smartmessages.net/" target="_blank">' .
'<img src="https://info.smartmessages.net/wp-content/themes/smartmessages/img/vector/' .
'smartmessages-logo.svg" width="270" height="28" ' .
'alt="Smartmessages email marketing"></a>

<div ' . $tmp_css_data['line_break'] . '><br><br></div>
Other contributions are gladly received, 
whether in beer, T-shirts, Amazon 
wishlist raids, or cold, hard cash. 

<div ' . $tmp_css_data['line_break'] . '><br><br></div>
If you\'d like to donate to say 
&quot;thank you&quot; to maintainers or 
contributors, please contact them 
through individual profile pages 
via <a ' . $tmp_css_data['copy_a'] .
' href="https://github.com/PHPMailer/PHPMailer/graphs/' .
'contributors" target="_blank">the contributors page</a>.

<div ' . $tmp_css_data['line_break'] . '><br><br><br></div>
History

<div ' . $tmp_css_data['line_break'] . '><br></div>
<ul ' . $tmp_css_data['ul'] . '><li ' . $tmp_css_data['li'] .
'>PHPMailer was originally written in 
2001 by Brent R. Matzelle as a ' .
'<a ' . $tmp_css_data['copy_a'] .
' href="http://sourceforge.net/projects/phpmailer/" target="_blank">SourceForge</a> ' .
'<a ' . $tmp_css_data['copy_a'] .
' href="http://sourceforge.net/projects/phpmailer/" target="_blank">project</a>.</li>

<li ' . $tmp_css_data['li'] . '>Marcus Bointon (coolbru on SF) and 
Andy Prevost (codeworxtech) took 
over the project in 2004.</li>

<li ' . $tmp_css_data['li'] . '>Became an Apache incubator project 
on Google Code in 2010, managed 
by Jim Jagielski.</li>

<li ' . $tmp_css_data['li'] . '>Marcus created ' .
'<a ' . $tmp_css_data['copy_a'] .
' href="https://github.com/Synchro/PHPMailer" target="_blank">his fork</a> on ' .
'<a ' . $tmp_css_data['copy_a'] .
' href="https://github.com/Synchro/PHPMailer" target="_blank">GitHub</a> 
in 2008.</li>

<li ' . $tmp_css_data['li'] . '>Jim and Marcus decide to join forces 
and use GitHub as the canonical and 
official repo for PHPMailer in 2013.</li>

<li ' . $tmp_css_data['li'] . '>PHPMailer moves to the ' .
'<a ' . $tmp_css_data['copy_a'] .
' href="https://github.com/PHPMailer" target="_blank">PHPMailer organisation</a> 
on ' .
'<a ' . $tmp_css_data['copy_a'] .
' href="https://github.com/PHPMailer" target="_blank">GitHub</a> in 2013.</li></ul></div>';

                break;
                case 'MEDIA_ELEMENT_KEY':

                    return \array(
                    'CRNRSTN_LOGO'      => \array('TARGET' => '_blank', 
                                            'URL' => 'https://lightsaber.crnrstn.jony5.com/',  
                                            'ALT' => 'CRNRSTN :: Lightsaber SOAP Services Layer v' . 
                                            $R->version_crnrstn()),
                    'POWER_BY_PHP'      => \array('TARGET' => '_blank',
                                            'URL' => 'https://www.php.net/',
                                            'ALT' => 'PHP v' . 
                                            $R->version_php()),
                    'MYSQL_DOLPHIN'     => \array('TARGET' => '_blank',
                                            'URL' => 'https://www.mysql.com/',
                                            'ALT' => $tmp_version_mysqli),
                    'APACHE_POWER'      => \array('TARGET' => '_blank',
                                            'URL' => 'https://apache.org/',
                                            'ALT' => 'Powered by Apache'),
                    'LINUX_PENGUIN_LRG' => \array('TARGET' => '_blank',
                                            'URL' => 'https://www.linux.com/',
                                            'ALT' => 'Linux :: Tux the Penguin'));

                break;
                case 'URL':
                case 'URL_HTML':
                case 'URL_TEXT':

                    $tmp_url_ARRAY = \array();
                    $tmp_url_ARRAY[] = 'https://github.com/PHPMailer/PHPMailer';
                    $tmp_url_ARRAY[] = 'http://phpmailer.github.io/PHPMailer/';
                    $tmp_url_ARRAY[] = 'https://sourceforge.net/projects/phpmailer/';
                    $tmp_url_ARRAY[] = 'https://twitter.com/smartmessages';

                    return $R->get_link_data('CRNRSTN_ARRAY', $tmp_url_ARRAY, false, true);

                break;
                case 'COPYRIGHT':
                case 'COPYRIGHT_HTML':
                case 'COPYRIGHT_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry 
                     * Content Library Meta Data 
                     * Output Controller. 
                     *
                     * COPYRIGHT_HTML   = HTML Output 
                     * COPYRIGHT_TEXT   = Text Output 
                     * COPYRIGHT        = Multi-Part HTML 
                     *                    & Text Output 
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1219 hrs.
                     *
                     */
                    switch($attribute){
                        case 'COPYRIGHT_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'COPYRIGHT_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'COPYRIGHT':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Standardize the Text data 
                         * parameter variable name in 
                         * order to hold the Text 
                         * data handling parallel to 
                         * to the HTML data handling 
                         * in the same architecture. 
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $tmp_data_TEXT = $resource_copyright_text;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * copyright HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 0602 hrs.
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['copyright'] .
                        '><span ' . $tmp_css_data['copyright_mark'] .
                        '>&copy;</span> 2012 - 2017 Marcus Bointon. ' .
                        '<span ' . $tmp_css_data['copyright_mark'] .
                        '>&copy;</span> 2010 - 2012 Jim Jagielski. ' .
                        '<span ' . $tmp_css_data['copyright_mark'] .
                        '>&copy;</span> 2004 - 2009 Andy Prevost.</span>';

                break;
                default:
                    // 5 :: Friday, April 17, 2026 @ 1040 hrs.

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $attribute . 
                                   '] for ' . 
                                   $software_company_key . 
                                   '. Unable to return copy data.';

                    if(!(_crnrstn_native_resource_registry(
                        __FUNCTION__, 
                        $R, 
                        'registry_access_is_authorized',
                         NULL, 
                         $R_debug_mode) !== false))
                    {

                        // 5 :: Tuesday, May 19, 2026 @ 0747 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) || 
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG))
                        {

                            $syslog_level     = LOG_WARNING;
                            $tod              = \gettimeofday();
                            $sec              = $tod['sec'];
                            $usec             = $tod['usec'];
                            $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                            $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                            $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                                '.' . \sprintf('%06d', $usec) . 
                                                '] [func ' . 
                                                __FUNCTION__ . '] [lnum ' . 
                                                __LINE__ . '] [rtime ' . 
                                                \substr($timediff, 0, -8) . 
                                                '] ';
                            \openlog(
                                $syslog_prefix, 
                                \LOG_CONS | 
                                \LOG_NDELAY | 
                                \LOG_NOWAIT | 
                                \LOG_PID | 
                                \LOG_PERROR, 
                                \LOG_SYSLOG);
                            \syslog($syslog_level, $clr_ssl_msg);
                            \closelog();

                        }

                        return false;

                    }

                    // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                    $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token = array(
                             'token'                   => $msg_token, 
                             'token_generation_date'   => $token_generation_date, 
                             'request_type'            => __FUNCTION__, 
                             'code'                    => 200, 
                             'clr_ssl_msg'             => $clr_ssl_msg);
                    $R->error_log(
                        $clr_ssl_msg, 
                        \LOG_ERR, 
                        \E_ERROR, 
                        __LINE__, 
                        __FUNCTION__, 
                        __FILE__, 
                        $token);

                    return false;

                break;

            }

        break;
        case 'Digital ITCC':
            // 5 :: Friday, April 17, 2026 @ 1131 hrs.

            switch($attribute){
                case 'COMPANY_NAME':
                case 'COMPANY_NAME_HTML':
                case 'COMPANY_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry 
                     * Content Library Meta Data 
                     * Output Controller. 
                     *
                     * COMPANY_NAME_HTML   = HTML Output 
                     * COMPANY_NAME_TEXT   = Text Output 
                     * COMPANY_NAME        = Multi-Part HTML 
                     *                       & Text Output 
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0420 hrs.
                     *
                     */
                    switch($attribute){
                        case 'COMPANY_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'COMPANY_NAME_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'COMPANY_NAME':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name Text data
                         * for this natively 
                         * registered resource of
                         * the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $tmp_data_TEXT = 'Digital ITCC®';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1136 hrs.
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['company_name'] .
                        '>Digital ITCC<sup '  . $tmp_css_data['reg_mark'] .
                        '>&reg;</sup></span>';

                break;
                case 'AUTHOR_CONTRIBUTORS':
                case 'AUTHOR_CONTRIBUTORS_HTML':
                case 'AUTHOR_CONTRIBUTORS_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * AUTHOR_CONTRIBUTORS_HTML   = HTML Output
                     * AUTHOR_CONTRIBUTORS_TEXT   = Text Output
                     * AUTHOR_CONTRIBUTORS        = Multi-Part HTML
                     *                              & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0328 hrs.
                     *
                     */
                    switch($attribute){
                        case 'AUTHOR_CONTRIBUTORS_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'AUTHOR_CONTRIBUTORS_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'AUTHOR_CONTRIBUTORS':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor Text
                         * data parameter.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1134 hrs.
                         *
                         */
                        $tmp_data_TEXT = 'icy at digitalitcc dot com';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1134 hrs.
                         *
                         */
                        $tmp_data_HTML = '<span ' .
                        $tmp_css_data['author_contributors'] .
                        '><a ' . $tmp_css_data['copy_a'] .
                        ' href="https://www.php.net/manual/en/' .
                        'language.operators.bitwise.php#50299" ' .
                        'target="_blank">icy</a> at <a ' .
                        $tmp_css_data['copy_a'] .
                        ' href="https://www.php.net/manual/en/' .
                        'language.operators.bitwise.php#50299" ' .
                        'target="_blank">digitalitcc</a> <a ' .
                        $tmp_css_data['copy_a'] .
                        ' href="https://www.php.net/manual/en/' .
                        'language.operators.bitwise.php#50299" ' .
                        'target="_blank">dot</a> <a ' .
                        $tmp_css_data['copy_a'] .
                        ' href="https://www.php.net/manual/en/' .
                        'language.operators.bitwise.php#50299" ' .
                        'target="_blank">com</a></span>';

                break;
                case 'URL':
                case 'URL_HTML':
                case 'URL_TEXT':

                    $tmp_url_ARRAY = \array();
                    $tmp_url_ARRAY[] = 'https://www.php.net/manual/en/language.operators.bitwise.php#50299';

                    return $R->get_link_data('CRNRSTN_ARRAY', $tmp_url_ARRAY, false, true);

                break;
                case 'COPYRIGHT':
                case 'COPYRIGHT_HTML':
                case 'COPYRIGHT_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry 
                     * Content Library Meta Data 
                     * Output Controller. 
                     *
                     * COPYRIGHT_HTML   = HTML Output 
                     * COPYRIGHT_TEXT   = Text Output 
                     * COPYRIGHT        = Multi-Part HTML 
                     *                    & Text Output 
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1219 hrs.
                     *
                     */
                    switch($attribute){
                        case 'COPYRIGHT_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'COPYRIGHT_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'COPYRIGHT':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Standardize the Text data 
                         * parameter variable name in 
                         * order to hold the Text 
                         * data handling parallel to 
                         * to the HTML data handling 
                         * in the same architecture. 
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $tmp_data_TEXT = $resource_copyright_text;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * copyright HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 1132 hrs.
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['copyright'] .
                        '><span ' . $tmp_css_data['copyright_mark'] .
                        '>&copy;</span> 2001-2024 The <span ' . $tmp_css_data['php'] .
                        '>PHP</span> Group</span>';

                break;
                case 'MEDIA_ELEMENT_KEY':

                    return \array(
                    'CRNRSTN_LOGO'      => \array('TARGET' => '_blank',
                                            'URL' => 'https://lightsaber.crnrstn.jony5.com/',
                                            'ALT' => 'CRNRSTN :: Lightsaber SOAP Services Layer v' .
                                            $R->version_crnrstn()),
                    'POWER_BY_PHP'      => \array('TARGET' => '_blank',
                                            'URL' => 'https://www.php.net/',
                                            'ALT' => 'PHP v' .
                                            $R->version_php()),
                    'MYSQL_DOLPHIN'     => \array('TARGET' => '_blank',
                                            'URL' => 'https://www.mysql.com/',
                                            'ALT' => $tmp_version_mysqli),
                    'APACHE_POWER'      => \array('TARGET' => '_blank',
                                            'URL' => 'https://apache.org/',
                                            'ALT' => 'Powered by Apache'),
                    'LINUX_PENGUIN_LRG' => \array('TARGET' => '_blank',
                                            'URL' => 'https://www.linux.com/',
                                            'ALT' => 'Linux :: Tux the Penguin'));

                break;
                default:
                    // 5 :: Friday, April 17, 2026 @ 1040 hrs.

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $attribute . 
                                   '] for ' . 
                                   $software_company_key . 
                                   '. Unable to return copy data.';

                    if(!(_crnrstn_native_resource_registry(
                        __FUNCTION__, 
                        $R, 
                        'registry_access_is_authorized',
                         NULL, 
                         $R_debug_mode) !== false))
                    {

                        // 5 :: Tuesday, May 19, 2026 @ 0752 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) || 
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG))
                        {

                            $syslog_level     = LOG_WARNING;
                            $tod              = \gettimeofday();
                            $sec              = $tod['sec'];
                            $usec             = $tod['usec'];
                            $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                            $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                            $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                                '.' . \sprintf('%06d', $usec) . 
                                                '] [func ' . 
                                                __FUNCTION__ . '] [lnum ' . 
                                                __LINE__ . '] [rtime ' . 
                                                \substr($timediff, 0, -8) . 
                                                '] ';
                            \openlog(
                                $syslog_prefix, 
                                \LOG_CONS | 
                                \LOG_NDELAY | 
                                \LOG_NOWAIT | 
                                \LOG_PID | 
                                \LOG_PERROR, 
                                \LOG_SYSLOG);
                            \syslog($syslog_level, $clr_ssl_msg);
                            \closelog();

                        }

                        return false;

                    }

                    // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                    $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token = array(
                             'token'                   => $msg_token, 
                             'token_generation_date'   => $token_generation_date, 
                             'request_type'            => __FUNCTION__, 
                             'code'                    => 200, 
                             'clr_ssl_msg'             => $clr_ssl_msg);
                    $R->error_log(
                        $clr_ssl_msg, 
                        \LOG_ERR, 
                        \E_ERROR, 
                        __LINE__, 
                        __FUNCTION__, 
                        __FILE__, 
                        $token);

                    return false;

                break;

            }

        break;
        case 'Mobile Detect':
            // 5 :: Friday, April 17, 2026 @ 1138 hrs.

            switch($attribute){
                case 'COMPANY_NAME':
                case 'COMPANY_NAME_HTML':
                case 'COMPANY_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry 
                     * Content Library Meta Data 
                     * Output Controller. 
                     *
                     * COMPANY_NAME_HTML   = HTML Output 
                     * COMPANY_NAME_TEXT   = Text Output 
                     * COMPANY_NAME        = Multi-Part HTML 
                     *                       & Text Output 
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0420 hrs.
                     *
                     */
                    switch($attribute){
                        case 'COMPANY_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'COMPANY_NAME_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'COMPANY_NAME':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name Text data
                         * for this natively 
                         * registered resource of
                         * the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_TEXT = 'Mobile Detect';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['company_name'] . '><a ' .
                        $tmp_css_data['copy_a'] .
                        ' href="https://docs.mobiledetect.net/home" ' .
                        'target="_blank">Mobile Detect</a></span>';

                break;
                case 'AUTHOR_CONTRIBUTORS':
                case 'AUTHOR_CONTRIBUTORS_HTML':
                case 'AUTHOR_CONTRIBUTORS_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * AUTHOR_CONTRIBUTORS_HTML   = HTML Output
                     * AUTHOR_CONTRIBUTORS_TEXT   = Text Output
                     * AUTHOR_CONTRIBUTORS        = Multi-Part HTML
                     *                              & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0328 hrs.
                     *
                     */
                    switch($attribute){
                        case 'AUTHOR_CONTRIBUTORS_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'AUTHOR_CONTRIBUTORS_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'AUTHOR_CONTRIBUTORS':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor Text
                         * data parameter.
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $tmp_data_TEXT = 'Şerban Ghiţă. I\'m a software developer based ' .
'in Bucureşti, Romania. Software developer by day / Game designer ' .
'by night. Follow me on Twitch or YouTube for updates!

Nick Ilyin.

Original author: Victor Stanciu.

Icon by: Dragoș Gavrilă.';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Sunday, August 25, 2024 @ 0602 hrs.
                         *
                         */
                        $tmp_data_HTML = '<div ' .
                        $tmp_css_data['author_contributors'] .
                        '><div ' . $tmp_css_data['line_break'] . '><br></div>
                        <ul ' . $tmp_css_data['ul'] . '><li ' . $tmp_css_data['li'] . '>' .
                        '<a ' . $tmp_css_data['copy_a'] .
                        ' href="http://www.nusphere.com" target="_blank">' .
                        'NuSphere</a> and Dietrich Ayala</li>
    
<li ' . $tmp_css_data['li'] . '>Scott Nichol</li>

<li ' . $tmp_css_data['li'] . '><strong>f3l1x</strong><br>
Hey! I am Milan Šulc better known as ' .
'<a ' . $tmp_css_data['copy_a'] .
' href="https://f3l1x.io/" target="_blank">Felix</a>. I do  ' .
'<a ' . $tmp_css_data['copy_a'] .
' href="https://github.com/f3l1x" target="_blank">' .
'code for a living</a>.</li></ul></div>';

                break;
                case 'URL':
                case 'URL_HTML':
                case 'URL_TEXT':

                    $tmp_url_ARRAY = \array();
                    $tmp_url_ARRAY[] = 'https://github.com/serbanghita/Mobile-Detect';
                    $tmp_url_ARRAY[] = 'https://docs.mobiledetect.net/home';
                    $tmp_url_ARRAY[] = 'https://github.com/serbanghita';
                    $tmp_url_ARRAY[] = 'https://wordpress.org/plugins/tinywp-mobile-detect/';

                    return $R->get_link_data('CRNRSTN_ARRAY', $tmp_url_ARRAY, false, true);

                break;
                case 'COPYRIGHT':
                case 'COPYRIGHT_HTML':
                case 'COPYRIGHT_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry 
                     * Content Library Meta Data 
                     * Output Controller. 
                     *
                     * COPYRIGHT_HTML   = HTML Output 
                     * COPYRIGHT_TEXT   = Text Output 
                     * COPYRIGHT        = Multi-Part HTML 
                     *                    & Text Output 
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1219 hrs.
                     *
                     */
                    switch($attribute){
                        case 'COPYRIGHT_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'COPYRIGHT_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'COPYRIGHT':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Standardize the Text data 
                         * parameter variable name in 
                         * order to hold the Text 
                         * data handling parallel to 
                         * to the HTML data handling 
                         * in the same architecture. 
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $tmp_data_TEXT = $resource_copyright_text;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * copyright HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['copyright'] .
                        '>Copyright <span ' . $tmp_css_data['copyright_mark'] .
                        '>&copy;</span> 2021 Şerban Ghiţă, ' .
                        'Nick Ilyin and contributors.</span>';

                break;
                case 'MEDIA_ELEMENT_KEY':

                    return \array(
                    'CRNRSTN_LOGO'      => \array('TARGET' => '_blank', 
                                            'URL' => 'https://lightsaber.crnrstn.jony5.com/',  
                                            'ALT' => 'CRNRSTN :: Lightsaber SOAP Services Layer v' . 
                                            $R->version_crnrstn()),
                    'POWER_BY_PHP'      => \array('TARGET' => '_blank',
                                            'URL' => 'https://www.php.net/',
                                            'ALT' => 'PHP v' . 
                                            $R->version_php()),
                    'MYSQL_DOLPHIN'     => \array('TARGET' => '_blank',
                                            'URL' => 'https://www.mysql.com/',
                                            'ALT' => $tmp_version_mysqli),
                    'APACHE_POWER'      => \array('TARGET' => '_blank',
                                            'URL' => 'https://apache.org/',
                                            'ALT' => 'Powered by Apache'),
                    'LINUX_PENGUIN_LRG' => \array('TARGET' => '_blank',
                                            'URL' => 'https://www.linux.com/',
                                            'ALT' => 'Linux :: Tux the Penguin'));

                break;
                default:
                    // 5 :: Friday, April 17, 2026 @ 1040 hrs.

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $attribute . 
                                   '] for ' . 
                                   $software_company_key . 
                                   '. Unable to return copy data.';

                    if(!(_crnrstn_native_resource_registry(
                        __FUNCTION__, 
                        $R, 
                        'registry_access_is_authorized',
                         NULL, 
                         $R_debug_mode) !== false))
                    {

                        // 5 :: Tuesday, May 19, 2026 @ 0752 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) || 
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG))
                        {

                            $syslog_level     = LOG_WARNING;
                            $tod              = \gettimeofday();
                            $sec              = $tod['sec'];
                            $usec             = $tod['usec'];
                            $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                            $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                            $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                                '.' . \sprintf('%06d', $usec) . 
                                                '] [func ' . 
                                                __FUNCTION__ . '] [lnum ' . 
                                                __LINE__ . '] [rtime ' . 
                                                \substr($timediff, 0, -8) . 
                                                '] ';
                            \openlog(
                                $syslog_prefix, 
                                \LOG_CONS | 
                                \LOG_NDELAY | 
                                \LOG_NOWAIT | 
                                \LOG_PID | 
                                \LOG_PERROR, 
                                \LOG_SYSLOG);
                            \syslog($syslog_level, $clr_ssl_msg);
                            \closelog();

                        }

                        return false;

                    }

                    // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                    $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token = array(
                             'token'                   => $msg_token, 
                             'token_generation_date'   => $token_generation_date, 
                             'request_type'            => __FUNCTION__, 
                             'code'                    => 200, 
                             'clr_ssl_msg'             => $clr_ssl_msg);
                    $R->error_log(
                        $clr_ssl_msg, 
                        \LOG_ERR, 
                        \E_ERROR, 
                        __LINE__, 
                        __FUNCTION__, 
                        __FILE__, 
                        $token);

                    return false;

                break;

            }

        break;
        case 'NuSphere Corporation':
            // 5 :: Friday, April 17, 2026 @ 1220 hrs.

            switch($attribute){
                case 'COMPANY_NAME':
                case 'COMPANY_NAME_HTML':
                case 'COMPANY_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry 
                     * Content Library Meta Data 
                     * Output Controller. 
                     *
                     * COMPANY_NAME_HTML   = HTML Output 
                     * COMPANY_NAME_TEXT   = Text Output 
                     * COMPANY_NAME        = Multi-Part HTML 
                     *                       & Text Output 
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0420 hrs.
                     *
                     */
                    switch($attribute){
                        case 'COMPANY_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'COMPANY_NAME_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'COMPANY_NAME':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name Text data
                         * for this natively 
                         * registered resource of
                         * the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $tmp_data_TEXT = 'NuSphere Corporation';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['company_name'] .
                        '><a ' . $tmp_css_data['copy_a'] .
                        ' href="http://www.nusphere.com" target="_blank">' .
                        'NuSphere Corporation</a></span>';

                break;
                case 'AUTHOR_CONTRIBUTORS':
                case 'AUTHOR_CONTRIBUTORS_HTML':
                case 'AUTHOR_CONTRIBUTORS_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * AUTHOR_CONTRIBUTORS_HTML   = HTML Output
                     * AUTHOR_CONTRIBUTORS_TEXT   = Text Output
                     * AUTHOR_CONTRIBUTORS        = Multi-Part HTML
                     *                              & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0328 hrs.
                     *
                     */
                    switch($attribute){
                        case 'AUTHOR_CONTRIBUTORS_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'AUTHOR_CONTRIBUTORS_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'AUTHOR_CONTRIBUTORS':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor Text
                         * data parameter.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_TEXT = 'NuSphere and Dietrich Ayala. 

Scott Nichol. 

f3l1x. 
Hey! I am Milan Šulc better known as Felix. I do code for a living.';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_HTML = '<div ' .
                        $tmp_css_data['author_contributors'] .
                        '><div ' . $tmp_css_data['line_break'] . '><br></div>
                        <ul ' . $tmp_css_data['ul'] . '><li ' . $tmp_css_data['li'] . '>' .
                        '<a ' . $tmp_css_data['copy_a'] .
                        ' href="http://www.nusphere.com" target="_blank">' .
                        'NuSphere</a> and Dietrich Ayala</li>
    
<li ' . $tmp_css_data['li'] . '>Scott Nichol</li>

<li ' . $tmp_css_data['li'] . '><strong>f3l1x</strong><br>
Hey! I am Milan Šulc better known as ' .
'<a ' . $tmp_css_data['copy_a'] .
' href="https://f3l1x.io/" target="_blank">Felix</a>. I do  ' .
'<a ' . $tmp_css_data['copy_a'] .
' href="https://github.com/f3l1x" target="_blank">' .
'code for a living</a>.</li></ul></div>';

                break;
                case 'URL':
                case 'URL_HTML':
                case 'URL_TEXT':

                    $tmp_url_ARRAY = \array();
                    $tmp_url_ARRAY[] = 'https://github.com/f00b4r/nusoap';
                    $tmp_url_ARRAY[] = 'https://github.com/f3l1x';
                    $tmp_url_ARRAY[] = 'https://x.com/xf3l1x';
                    $tmp_url_ARRAY[] = 'http://sourceforge.net/projects/nusoap/';
                    //$tmp_url_ARRAY[] = 'http://dietrich.ganx4.com/nusoap';
                    $tmp_url_ARRAY[] = 'http://www.nusphere.com';

                    return $R->get_link_data('CRNRSTN_ARRAY', $tmp_url_ARRAY, false, true);

                break;
                case 'COPYRIGHT':
                case 'COPYRIGHT_HTML':
                case 'COPYRIGHT_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry 
                     * Content Library Meta Data 
                     * Output Controller. 
                     *
                     * COPYRIGHT_HTML   = HTML Output 
                     * COPYRIGHT_TEXT   = Text Output 
                     * COPYRIGHT        = Multi-Part HTML 
                     *                    & Text Output 
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1219 hrs.
                     *
                     */
                    switch($attribute){
                        case 'COPYRIGHT_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'COPYRIGHT_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'COPYRIGHT':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Standardize the Text data 
                         * parameter variable name in 
                         * order to hold the Text 
                         * data handling parallel to 
                         * to the HTML data handling 
                         * in the same architecture. 
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $tmp_data_TEXT = $resource_copyright_text;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * copyright HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['copyright'] .
                        '><span ' . $tmp_css_data['copyright_mark'] .
                        '>&copy;</span> 2002 NuSphere Corporation.</span>';

                break;
                case 'MEDIA_ELEMENT_KEY':

                    return \array(
                    'CRNRSTN_LOGO'      => \array('TARGET' => '_blank', 
                                            'URL' => 'https://lightsaber.crnrstn.jony5.com/',  
                                            'ALT' => 'CRNRSTN :: Lightsaber SOAP Services Layer v' . 
                                            $R->version_crnrstn()),
                    'POWER_BY_PHP'      => \array('TARGET' => '_blank',
                                            'URL' => 'https://www.php.net/',
                                            'ALT' => 'PHP v' . 
                                            $R->version_php()),
                    'MYSQL_DOLPHIN'     => \array('TARGET' => '_blank',
                                            'URL' => 'https://www.mysql.com/',
                                            'ALT' => $tmp_version_mysqli),
                    'APACHE_POWER'      => \array('TARGET' => '_blank',
                                            'URL' => 'https://apache.org/',
                                            'ALT' => 'Powered by Apache'),
                    'LINUX_PENGUIN_LRG' => \array('TARGET' => '_blank',
                                            'URL' => 'https://www.linux.com/',
                                            'ALT' => 'Linux :: Tux the Penguin'));

                break;
                default:
                    // 5 :: Friday, April 17, 2026 @ 1040 hrs.

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $attribute . 
                                   '] for ' . 
                                   $software_company_key . 
                                   '. Unable to return copy data.';

                    if(!(_crnrstn_native_resource_registry(
                        __FUNCTION__, 
                        $R, 
                        'registry_access_is_authorized',
                         NULL, 
                         $R_debug_mode) !== false))
                    {

                        // 5 :: Tuesday, May 19, 2026 @ 0753 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) || 
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG))
                        {

                            $syslog_level     = LOG_WARNING;
                            $tod              = \gettimeofday();
                            $sec              = $tod['sec'];
                            $usec             = $tod['usec'];
                            $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                            $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                            $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                                '.' . \sprintf('%06d', $usec) . 
                                                '] [func ' . 
                                                __FUNCTION__ . '] [lnum ' . 
                                                __LINE__ . '] [rtime ' . 
                                                \substr($timediff, 0, -8) . 
                                                '] ';
                            \openlog(
                                $syslog_prefix, 
                                \LOG_CONS | 
                                \LOG_NDELAY | 
                                \LOG_NOWAIT | 
                                \LOG_PID | 
                                \LOG_PERROR, 
                                \LOG_SYSLOG);
                            \syslog($syslog_level, $clr_ssl_msg);
                            \closelog();

                        }

                        return false;

                    }

                    // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                    $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token = array(
                             'token'                   => $msg_token, 
                             'token_generation_date'   => $token_generation_date, 
                             'request_type'            => __FUNCTION__, 
                             'code'                    => 200, 
                             'clr_ssl_msg'             => $clr_ssl_msg);
                    $R->error_log(
                        $clr_ssl_msg, 
                        \LOG_ERR, 
                        \E_ERROR, 
                        __LINE__, 
                        __FUNCTION__, 
                        __FILE__, 
                        $token);

                    return false;

                break;

            }

        break;
        case 'The PHP Group':
            // 5 :: Friday, April 17, 2026 @ 1223 hrs.

            switch($attribute){
                case 'COMPANY_NAME':
                case 'COMPANY_NAME_HTML':
                case 'COMPANY_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry 
                     * Content Library Meta Data 
                     * Output Controller. 
                     *
                     * COMPANY_NAME_HTML   = HTML Output 
                     * COMPANY_NAME_TEXT   = Text Output 
                     * COMPANY_NAME        = Multi-Part HTML 
                     *                       & Text Output 
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0420 hrs.
                     *
                     */
                    switch($attribute){
                        case 'COMPANY_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'COMPANY_NAME_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'COMPANY_NAME':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name Text data
                         * for this natively 
                         * registered resource of
                         * the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_TEXT = 'The PHP Foundation';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['company_name'] . '><a ' .
                        $tmp_css_data['copy_a'] .
                        ' href="https://www.php.net/" target="_blank">The <span ' .
                        $tmp_css_data['php'] . '>PHP</span> Foundation</a></span>';

                break;
                case 'AUTHOR_CONTRIBUTORS':
                case 'AUTHOR_CONTRIBUTORS_HTML':
                case 'AUTHOR_CONTRIBUTORS_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * AUTHOR_CONTRIBUTORS_HTML   = HTML Output
                     * AUTHOR_CONTRIBUTORS_TEXT   = Text Output
                     * AUTHOR_CONTRIBUTORS        = Multi-Part HTML
                     *                              & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0328 hrs.
                     *
                     */
                    switch($attribute){
                        case 'AUTHOR_CONTRIBUTORS_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'AUTHOR_CONTRIBUTORS_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'AUTHOR_CONTRIBUTORS':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor Text
                         * data parameter.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_TEXT = 'The PHP Foundation';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_HTML = '<span ' .
                        $tmp_css_data['author_contributors'] .
                        '>The <span ' . $tmp_css_data['php'] .
                        '>PHP</span> Foundation</span>';

                break;
                case 'URL':
                case 'URL_HTML':
                case 'URL_TEXT':

                    $tmp_url_ARRAY = \array();
                    $tmp_url_ARRAY[] = 'https://www.php.net/manual/en/mysqli.construct.php';
                    $tmp_url_ARRAY[] = 'https://www.php.net/manual/en/copyright.php';
                    $tmp_url_ARRAY[] = 'https://www.php.net/manual/en/cc.license.php';
                    $tmp_url_ARRAY[] = 'http://creativecommons.org/licenses/by/3.0/';

                    return $R->get_link_data('CRNRSTN_ARRAY', $tmp_url_ARRAY, false, true);

                break;
                case 'COPYRIGHT':
                case 'COPYRIGHT_HTML':
                case 'COPYRIGHT_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry 
                     * Content Library Meta Data 
                     * Output Controller. 
                     *
                     * COPYRIGHT_HTML   = HTML Output 
                     * COPYRIGHT_TEXT   = Text Output 
                     * COPYRIGHT        = Multi-Part HTML 
                     *                    & Text Output 
                     *
                     *
                     * 5 ::
                     *
                     * Thursday, November 6, 2025 @ 1219 hrs.
                     *
                     */
                    switch($attribute){
                        case 'COPYRIGHT_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'COPYRIGHT_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'COPYRIGHT':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Standardize the Text data 
                         * parameter variable name in 
                         * order to hold the Text 
                         * data handling parallel to 
                         * to the HTML data handling 
                         * in the same architecture. 
                         *
                         *
                         * 5
                         *
                         * Thursday, October 30, 2025 @ 1420 hrs.
                         *
                         */
                        $tmp_data_TEXT = $resource_copyright_text;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * copyright HTML data for this
                         * natively registered resource of
                         * the CRNRSTN :: Lightsaber RoCEv2
                         * SOAP Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['copyright'] .
                        '><span ' . $tmp_css_data['copyright_mark'] .
                        '>&copy;</span> 2001-2024 The <span ' . $tmp_css_data['php'] .
                        '>PHP</span> Group</span>';

                break;
                case 'MEDIA_ELEMENT_KEY':

                    return \array(
                    'CRNRSTN_LOGO'      => \array('TARGET' => '_blank', 
                                            'URL' => 'https://lightsaber.crnrstn.jony5.com/',  
                                            'ALT' => 'CRNRSTN :: Lightsaber SOAP Services Layer v' . 
                                            $R->version_crnrstn()),
                    'POWER_BY_PHP'      => \array('TARGET' => '_blank', 
                                            'URL' => 'https://www.php.net/',                   
                                            'ALT' => 'PHP v' . 
                                            $R->version_php()),
                    'MYSQL_DOLPHIN'     => \array('TARGET' => '_blank', 
                                            'URL' => 'https://www.mysql.com/',                 
                                            'ALT' => $tmp_version_mysqli),
                    'APACHE_POWER'      => \array('TARGET' => '_blank', 
                                            'URL' => 'https://apache.org/',                    
                                            'ALT' => 'Powered by Apache'),
                    'LINUX_PENGUIN_LRG' => \array('TARGET' => '_blank', 
                                            'URL' => 'https://www.linux.com/',                 
                                            'ALT' => 'Linux :: Tux the Penguin'),
                    'FIVE'              => \array('TARGET' => '_blank', 
                                            'URL' => 'http://evifweb.jony5.com/',              
                                            'ALT' => 'eVifweb® development'),
                    'STACHE'            => \array('TARGET' => '_blank', 
                                            'URL' => 'https://jony5.com/',                     
                                            'ALT' => 'Jonathan \'5\' Harris, CEO, ' .
                                            'CTO, Lead Full Stack Developer, ' .
                                            'Chief Creative here at eVifweb® ' . 
                                            '(as of 2025), and a ravenous ' . 
                                            'wolf of the tribe of Benjamin.'));

                break;
                default:
                    // 5 :: Friday, April 17, 2026 @ 1040 hrs.

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $attribute . 
                                   '] for ' . 
                                   $software_company_key . 
                                   '. Unable to return copy data.';

                    if(!(_crnrstn_native_resource_registry(
                        __FUNCTION__, 
                        $R, 
                        'registry_access_is_authorized',
                         NULL, 
                         $R_debug_mode) !== false))
                    {

                        // 5 :: Tuesday, May 19, 2026 @ 0753 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) || 
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG))
                        {

                            $syslog_level     = LOG_WARNING;
                            $tod              = \gettimeofday();
                            $sec              = $tod['sec'];
                            $usec             = $tod['usec'];
                            $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                            $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                            $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                                '.' . \sprintf('%06d', $usec) . 
                                                '] [func ' . 
                                                __FUNCTION__ . '] [lnum ' . 
                                                __LINE__ . '] [rtime ' . 
                                                \substr($timediff, 0, -8) . 
                                                '] ';
                            \openlog(
                                $syslog_prefix, 
                                \LOG_CONS | 
                                \LOG_NDELAY | 
                                \LOG_NOWAIT | 
                                \LOG_PID | 
                                \LOG_PERROR, 
                                \LOG_SYSLOG);
                            \syslog($syslog_level, $clr_ssl_msg);
                            \closelog();

                        }

                        return false;

                    }

                    // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                    $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token = array(
                             'token'                   => $msg_token, 
                             'token_generation_date'   => $token_generation_date, 
                             'request_type'            => __FUNCTION__, 
                             'code'                    => 200, 
                             'clr_ssl_msg'             => $clr_ssl_msg);
                    $R->error_log(
                        $clr_ssl_msg, 
                        \LOG_ERR, 
                        \E_ERROR, 
                        __LINE__, 
                        __FUNCTION__, 
                        __FILE__, 
                        $token);

                    return false;

                break;

            }

        break;
        case 'eVifweb® development':
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * 5 :: Friday, April 17, 2026 @ "01" 2345 hrs.
             *
             * "01010101...split the atom...Oh, 
             * Oh, Oh, Oh. You know what I mean."
             *
             * Yeah, you know what I mean: 
             * "Oh, Oh, Oh"... 
             * Yeah, you know what 
             * I mean..."Oh"...yeah. ;) 
             *
             */

            switch($attribute){
                case 'COMPANY_NAME':
                case 'COMPANY_NAME_HTML':
                case 'COMPANY_NAME_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry 
                     * Content Library Meta Data 
                     * Output Controller. 
                     *
                     * COMPANY_NAME_HTML   = HTML Output 
                     * COMPANY_NAME_TEXT   = Text Output 
                     * COMPANY_NAME        = Multi-Part HTML 
                     *                       & Text Output 
                     *
                     *
                     * 5 ::
                     *
                     * Friday, November 7, 2025 @ 0420 hrs.
                     *
                     */
                    switch($attribute){
                        case 'COMPANY_NAME_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'COMPANY_NAME_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'COMPANY_NAME':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the 
                     * CLR-SSL Content Library 
                     * Resource low-level 
                     * language default $iso = 'en' 
                     * Text data into server memory? 
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0336 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name Text data
                         * for this natively 
                         * registered resource of
                         * the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_TEXT = 'eVifweb®';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library 
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Thursday, November 6, 2025 @ 0338 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * company name HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['company_name'] . '>' .
                        '<a ' . $tmp_css_data['copy_a'] . ' ' .
                        'href="http://evifweb.jony5.com/" target="_blank">' .
                        'e<span ' . $tmp_css_data['eVifweb_V'] .
                        '>V</span>ifweb<sup ' . $tmp_css_data['reg_mark'] .
                        '>&reg;</sup></a></span>';

                break;
                case 'AUTHOR_CONTRIBUTORS':
                case 'AUTHOR_CONTRIBUTORS_HTML':
                case 'AUTHOR_CONTRIBUTORS_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry
                     * Content Library Meta Data
                     * Output Controller.
                     *
                     * AUTHOR_CONTRIBUTORS_HTML   = HTML Output
                     * AUTHOR_CONTRIBUTORS_TEXT   = Text Output
                     * AUTHOR_CONTRIBUTORS        = Multi-Part HTML
                     *                              & Text Output
                     *
                     *
                     * 5 ::
                     *
                     * Tuesday, November 11, 2025 @ 0535 hrs.
                     *
                     */
                    switch($attribute){
                        case 'AUTHOR_CONTRIBUTORS_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'AUTHOR_CONTRIBUTORS_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'AUTHOR_CONTRIBUTORS':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Tuesday, November 11, 2025 @ 0535 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor Text
                         * data parameter.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_TEXT = 'Jonathan \'5\' Harris, CEO, CTO, ' .
                        'Lead Full Stack Developer, and, as of 2025, ' .
                        'Chief Creative here at eVifweb® ' .
                        'eVifweb@gmail.com, ' .
                        'a ravenous wolf of the tribe of Benjamin ' .
                        'and one of the King\'s two swords, ' .
                        'an eternal son of thunder, and a web ' .
                        'professional living and working in ' .
                        'Atlanta, GA.';

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Tuesday, November 11, 2025 @ 0536 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software
                         * author contributor HTML data
                         * for this natively registered
                         * resource of the CRNRSTN ::
                         * Lightsaber RoCEv2 SOAP
                         * Services Layer (CLR-SSL)
                         * System Resource Registry.
                         *
                         *
                         * 5
                         *
                         */
                        $tmp_data_HTML = '<span ' .
                        $tmp_css_data['author_contributors'] .
                        '>Jonathan \'5\' Harris, CEO, CTO, ' .
                        'Lead Full Stack Developer, and, as of 2025, ' .
                        'Chief Creative here at <span ' . $tmp_css_data['eVifweb'] . '>' .
                        'e<span ' . $tmp_css_data['eVifweb_V'] . '>V</span>ifweb<sup ' .
                        $tmp_css_data['reg_mark'] . '>&reg;</sup></span>. ' .
                        '<a ' . $tmp_css_data['copy_a'] . ' ' .
                        'href="mailto:eVifweb@gmail.com" target="_blank">' .
                        'e<span ' . $tmp_css_data['eVifweb_V'] .
                        '>V</span>ifweb@gmail.com</a>, ' .
                        'a <a ' . $tmp_css_data['copy_a'] . ' ' .
                        'href="https://jony5.com?vv=gen49_1,25-28" target="_blank">' .
                        'ravenous wolf</a> ' .
                        'of the <a ' . $tmp_css_data['copy_a'] . ' ' .
                        'href="https://jony5.com?vv=deut33_1-4,12,29" target="_blank">' .
                        'tribe of Benjamin</a> ' .
                        'and one of the King\'s two swords, ' .
                        'an eternal son of thunder, and ' .
                        'a <a ' . $tmp_css_data['copy_a'] . ' ' .
                        'href="https://jony5.com/?scroll=WELCOME" target="_blank">web ' .
                        'professional</a> living and working in ' .
                        'Atlanta, GA.</span>';

                break;
                case 'URL':
                case 'URL_HTML':
                case 'URL_TEXT':
                    // Tuesday, July 9, 2024 @ 1635 hrs.

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * We will go and test this 
                     * with The Lightbox Helper 
                     * by eVifweb® in the class 
                     * constructor real quick 
                     * like, and then we'll 
                     * come back and do all +88 
                     * of these here (as opposed 
                     * to those over there) 
                     * CRNRSTN :: Lightsaber 
                     * SOAP Services Layer 
                     * class and global 
                     * function configuration 
                     * file resource links. 
                     *
                     * Also, we should easily
                     * finish this before the
                     * sun comes up at
                     * the latest.
                     *
                     * ...easily.
                     *
                     * [Sunday, July 7, 2024 @ 0747 hrs. UPDATE]
                     * [Sun Jul 07 07:47:33.652329 2024] [:error] [pid 54605] [client 172.16.225.1:53578]
                     *      813 _lightbox_helper_by_eVifweb_settings
                     *      tmp_dir_root_config[/var/www/html/lightbox_helper/_lightbox_helper/_config/config.lightbox_helper/].
                     *      tmp_[
                     *          Array\n(\n
                     *            [0] => \n
                     *            [1] => \n
                     *            [2] => \n)\n
                     *      ].
                     *
                     * [Sunday, July 7, 2024 @ 0747 hrs. UPDATE]
                     * I almost made it before 
                     * sunrise! I just need 
                     * to copy and paste some 
                     * URL meta data into 
                     * the CRNRSTN :: Lightsaber 
                     * SOAP Services Layer 
                     * Link Manager now. 
                     *
                     * https://www.timeanddate.com/sun/usa/atlanta
                     * -----
                     * Current Time:   Jul 7, 2024 at 8:01:15 am
                     * Sun Direction:  73.29° ENE↑
                     * Sun Altitude:   16.02°
                     * Sun Distance:   94.509 million mi
                     * Next Equinox:   Sep 22, 2024 8:43 am (Autumnal)
                     * Sunrise Today:  6:33 am↑ 62° Northeast
                     * Sunset Today:   8:51 pm↑ 298° Northwest
                     * -----
                     *
                     * The link data would be 
                     * here right now, otherwise! [END UPDATE]
                     *
                     *
                     * 5 ::
                     *
                     * Sunday, July 7, 2024 @ 0134 hrs.
                     *
                     */
                    $tmp_url_ARRAY = \array();
                    $tmp_url_ARRAY[] = 'https://github.com/jony5/CRNRSTN-v2.00.0000-PRE-ALPHA-DEV-Lightsaber';
                    $tmp_url_ARRAY[] = 'https://crnrstn.jony5.com';
                    $tmp_url_ARRAY[] = 'http://evifweb.jony5.com';
                    $tmp_url_ARRAY[] = 'https://jony5.com';

                    return $R->get_link_data('CRNRSTN_ARRAY', $tmp_url_ARRAY, false, true);

                break;
                case 'COPYRIGHT':
                case 'COPYRIGHT_HTML':
                case 'COPYRIGHT_TEXT':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * CLR-SSL Resource Registry 
                     * Content Library Meta Data 
                     * Output Controller. 
                     *
                     * COPYRIGHT_HTML   = HTML Output 
                     * COPYRIGHT_TEXT   = Text Output 
                     * COPYRIGHT        = Multi-Part HTML 
                     *                    & Text Output 
                     *
                     *
                     * 5 ::
                     *
                     * Tuesday, November 11, 2025 @ 0534 hrs.
                     *
                     */
                    switch($attribute){
                        case 'COPYRIGHT_HTML':

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Where the multi_part_output_mode 
                             * values are:
                             * - 'HTML', 
                             * - 'TEXT', and 
                             * - 'MULTI-PART'.
                             *
                             */
                            $tmp_multi_part_output_mode = 'HTML';

                        break;
                        case 'COPYRIGHT_TEXT':

                            $tmp_multi_part_output_mode = 'TEXT';

                        break;
                        case 'COPYRIGHT':
                        default:

                            $tmp_multi_part_output_mode = 'MULTI-PART';

                        break;

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * Text data into server memory?
                     *
                     *
                     * 5 :: Tuesday, November 11, 2025 @ 0534 hrs.
                     *
                     */
                    if(($tmp_multi_part_output_mode == 'TEXT') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Standardize the Text data 
                         * parameter variable name in 
                         * order to hold the Text 
                         * data handling parallel to 
                         * to the HTML data handling 
                         * in the same architecture. 
                         *
                         *
                         * 5
                         *
                         * Tuesday, November 11, 2025 @ 0534 hrs.
                         *
                         */
                        $tmp_data_TEXT = $resource_copyright_text;

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Do we temporarily load the
                     * CLR-SSL Content Library
                     * Resource low-level
                     * language default $iso = 'en'
                     * HTML data into server memory?
                     *
                     *
                     * 5 :: Tuesday, November 11, 2025 @ 0534 hrs.
                     *
                     */
                     if(($tmp_multi_part_output_mode == 'HTML') || 
                        ($tmp_multi_part_output_mode == 'MULTI-PART'))
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize the software 
                         * copyright HTML data for this 
                         * natively registered resource of 
                         * the CRNRSTN :: Lightsaber RoCEv2 
                         * SOAP Services Layer (CLR-SSL) 
                         * System Resource Registry. 
                         *
                         *
                         * 5
                         *
                         * Tuesday, November 11, 2025 @ 0535 hrs.
                         *
                         */
                        $tmp_data_HTML = '<span ' . $tmp_css_data['copyright'] . 
                        '><span ' . $tmp_css_data['copyright_mark'] . 
                        '>&copy;</span> 2012-' . date('Y') . ' ' . 
                        '<span ' . $tmp_css_data['eVifweb'] . '>e<span ' . 
                        $tmp_css_data['eVifweb_V'] . '>V</span>ifweb<sup ' . 
                        $tmp_css_data['reg_mark'] . '>&reg;</sup></span> ' . 
                        'development All Rights Reserved.</span>';

                break;
                case 'MEDIA_ELEMENT_KEY':

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Technology Software provider 
                     * CRNRSTN :: Lightsaber RoCEv2 
                     * SOAP Services Layer (CLR-SSL) 
                     * image media keys + url meta 
                     * are being added across the 
                     * entire registry. 
                     *
                     *
                     * 5
                     *
                     * Saturday, July 13, 2024 @ 1552 hrs.
                     *
                     */
                    return \array(
                    'CRNRSTN_LOGO'      => \array('TARGET' => '_blank', 
                                            'URL' => 'https://lightsaber.crnrstn.jony5.com/',  
                                            'ALT' => 'CRNRSTN :: Lightsaber SOAP Services Layer v' . 
                                            $R->version_crnrstn()),
                    'POWER_BY_PHP'      => \array('TARGET' => '_blank', 
                                            'URL' => 'https://www.php.net/',                   
                                            'ALT' => 'PHP v' . 
                                            $R->version_php()),
                    'MYSQL_DOLPHIN'     => \array('TARGET' => '_blank', 
                                            'URL' => 'https://www.mysql.com/',                 
                                            'ALT' => $tmp_version_mysqli),
                    'APACHE_POWER'      => \array('TARGET' => '_blank', 
                                            'URL' => 'https://apache.org/',                    
                                            'ALT' => 'Powered by Apache'),
                    'LINUX_PENGUIN_LRG' => \array('TARGET' => '_blank', 
                                            'URL' => 'https://www.linux.com/',                 
                                            'ALT' => 'Linux :: Tux the Penguin'),
                    'FIVE'              => \array('TARGET' => '_blank', 
                                            'URL' => 'http://evifweb.jony5.com/',              
                                            'ALT' => 'eVifweb® development'),
                    'STACHE'            => \array('TARGET' => '_blank', 
                                            'URL' => 'https://jony5.com/',                     
                                            'ALT' => 'Jonathan \'5\' Harris, CEO, ' .
                                            'CTO, Lead Full Stack Developer, ' .
                                            'Chief Creative here at eVifweb® ' . 
                                            '(as of 2025), and a ravenous ' . 
                                            'wolf of the tribe of Benjamin.'));

                break;
                default:
                    // 5 :: Friday, April 17, 2026 @ 1040 hrs.

                    $clr_ssl_msg = 'Unknown attribute key received [' . 
                                   $attribute . 
                                   '] for ' . 
                                   $software_company_key . 
                                   '. Unable to return copy data.';

                    if(!(_crnrstn_native_resource_registry(
                        __FUNCTION__, 
                        $R, 
                        'registry_access_is_authorized',
                         NULL, 
                         $R_debug_mode) !== false))
                    {

                        // 5 :: Tuesday, May 19, 2026 @ 0754 hrs.
                        if(($R_debug_mode === CRNRSTN_DEBUG_ON) || 
                            ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG))
                        {

                            $syslog_level     = LOG_WARNING;
                            $tod              = \gettimeofday();
                            $sec              = $tod['sec'];
                            $usec             = $tod['usec'];
                            $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                            $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                            $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                                '.' . \sprintf('%06d', $usec) . 
                                                '] [func ' . 
                                                __FUNCTION__ . '] [lnum ' . 
                                                __LINE__ . '] [rtime ' . 
                                                \substr($timediff, 0, -8) . 
                                                '] ';
                            \openlog(
                                $syslog_prefix, 
                                \LOG_CONS | 
                                \LOG_NDELAY | 
                                \LOG_NOWAIT | 
                                \LOG_PID | 
                                \LOG_PERROR, 
                                \LOG_SYSLOG);
                            \syslog($syslog_level, $clr_ssl_msg);
                            \closelog();

                        }

                        return false;

                    }

                    // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
                    $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                                 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                    $token = array(
                             'token'                   => $msg_token, 
                             'token_generation_date'   => $token_generation_date, 
                             'request_type'            => __FUNCTION__, 
                             'code'                    => 200, 
                             'clr_ssl_msg'             => $clr_ssl_msg);
                    $R->error_log(
                        $clr_ssl_msg, 
                        \LOG_ERR, 
                        \E_ERROR, 
                        __LINE__, 
                        __FUNCTION__, 
                        __FILE__, 
                        $token);

                    return false;

                break;

            }

        break;
        default:
            // 5 :: Friday, April 17, 2026 @ 1040 hrs.

            $clr_ssl_msg = 'Unknown key received [' . 
                           $software_company_key . 
                           ']. Unable to return copy data.';

            if(!(_crnrstn_native_resource_registry(
                __FUNCTION__, 
                $R, 
                'registry_access_is_authorized',
                 NULL, 
                 $R_debug_mode) !== false))
            {

                // 5 :: Tuesday, May 19, 2026 @ 0754 hrs.
                if(($R_debug_mode === CRNRSTN_DEBUG_ON) || 
                    ($R_debug_mode === CRNRSTN_DEBUG_SYSLOG))
                {

                    $syslog_level     = LOG_WARNING;
                    $tod              = \gettimeofday();
                    $sec              = $tod['sec'];
                    $usec             = $tod['usec'];
                    $micro_time_float = $sec . '.' . \sprintf('%06d', $usec);
                    $timediff         = (float) $micro_time_float - $_SERVER['REQUEST_TIME_FLOAT'];
                    $syslog_prefix    = 'R :: [' . \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                        '.' . \sprintf('%06d', $usec) . 
                                        '] [func ' . 
                                        __FUNCTION__ . '] [lnum ' . 
                                        __LINE__ . '] [rtime ' . 
                                        \substr($timediff, 0, -8) . 
                                        '] ';
                    \openlog(
                        $syslog_prefix, 
                        \LOG_CONS | 
                        \LOG_NDELAY | 
                        \LOG_NOWAIT | 
                        \LOG_PID | 
                        \LOG_PERROR, 
                        \LOG_SYSLOG);
                    \syslog($syslog_level, $clr_ssl_msg);
                    \closelog();

                }

                return false;

            }

            // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
            $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                         'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
            $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
            $token = array(
                     'token'                   => $msg_token, 
                     'token_generation_date'   => $token_generation_date, 
                     'request_type'            => __FUNCTION__, 
                     'code'                    => 200, 
                     'clr_ssl_msg'             => $clr_ssl_msg);
            $R->error_log(
                $clr_ssl_msg, 
                \LOG_ERR, 
                \E_ERROR, 
                __LINE__, 
                __FUNCTION__, 
                __FILE__, 
                $token);

            return false;

        break;
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * The initial scaffolding 
         * before any corp meta data 
         * was transferred from the 
         * CLR-SSL Resource Registry 
         * Content Library. 
         *
         *
         * 5 :: Saturday, April 18, 2026 @ 0723 hrs.
         * -----
         * case 'CORP_0004':
         *
         *  switch($attribute){
         *      case 'COMPANY_NAME':
         *      case 'COMPANY_NAME_HTML':
         *      case 'COMPANY_NAME_TEXT':
         *
         *      break;
         *      case 'AUTHOR_CONTRIBUTORS':
         *      case 'AUTHOR_CONTRIBUTORS_HTML':
         *      case 'AUTHOR_CONTRIBUTORS_TEXT':
         *
         *      break;
         *      case 'URL':
         *      case 'URL_HTML':
         *      case 'URL_TEXT':
         *
         *      break;
         *      case 'COPYRIGHT':
         *      case 'COPYRIGHT_HTML':
         *      case 'COPYRIGHT_TEXT':
         *
         *      break;
         *      case 'MEDIA_ELEMENT_KEY':
         *
         *      break;
         *      default:
         *          // 5 :: Friday, April 17, 2026 @ 1040 hrs.
         *
         *          $tmp_err_str = 'Unknown attribute key received [' . 
         *                         $attribute . 
         *                         '] for ' . 
         *                         $software_company_key . 
         *                         '. Unable to return copy data.';
         *
         *          switch(\get_class($R)){
         *              case __NAMESPACE__ . '\crnrstn':
         *              case __NAMESPACE__ . '\crnrstn_registry_user':
         *              case __NAMESPACE__ . '\crnrstn_registry_assistant':
         *              case __NAMESPACE__ . '\lightbox_helper_by_eVifweb':
         *
         *                  $R->error_log($tmp_err_str);
         *
         *              break;
         *              default:
         *
         *                  error_log('[lnum ' . 
         *                      __LINE__ . '] [mthd ' . 
         *                      __METHOD__ . '] [file ' . 
         *                      __FILE__ . '] ' . 
         *                      $tmp_err_str);
         *
         *              break;
         *
         *          }
         *
         *      break;
         *
         *  }
         *
         * break;
         *
         */

    }

}