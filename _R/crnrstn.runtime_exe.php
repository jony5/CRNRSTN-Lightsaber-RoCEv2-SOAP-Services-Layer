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
 * The (object) $R variable initialization runtime executable.
 *
 * RUNTIME EXECUTABLE :: ./_R/crnrstn.runtime_exe.php
 * EXECUTABLE VERSION :: 1.00.0000
 * DATE               :: Sunday, March 29, 2026 @ 2049 hrs.
 * AUTHOR             :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI                :: http://evifweb.jony5.com/
 * TITLE              :: The CRNRSTN :: Lightsaber 
 *                       RoCEv2 SOAP Services Layer 
 *                       (CLR-SSL) Vanilla Install 
 *                       $oCRNRSTN Object Variable 
 *                       Initialization Runtime 
 *                       Executable 
 * DESCRIPTION        :: The CRNRSTN :: Lightsaber 
 *                       RoCEv2 SOAP Services Layer 
 *                       (CLR-SSL) Vanilla Install 
 *                       $oCRNRSTN Variable 
 *                       Initialization Runtime 
 *                       Executable initializes a 
 *                       (object) $oCRNRSTN variable 
 *                       at the scope of the location 
 *                       that this CLR-SSL resource 
 *                       is implementated. 
 *
 *
 *                       5
 *
 *                       Sunday, March 29, 2026 @ 2056 hrs.
 * 
 * @package CRNRSTN
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE            :: MIT | https://crnrstn.jony5.com/licensing/
 *
 */
/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Added sysops application dir. 
 *       5 :: Thursday, October 23, 2025 @ 0258 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Commented out the lightbox_helper 
 *       application directory. 
 *       5 :: Thursday, October 23, 2025 @ 0259 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Commented out the _crnrstn 
 *       framework directory in favor of using 
 *       the global function input parameter 
 *       defaults for _crnrstn_registry_resource_filepath_return(). 
 *       5 :: Sunday, October 26, 2025 @ 2340 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * CRNRSTN :: Resource Registry 
 * Resource Path Return Function Definition 
 * for the CRNRSTN :: Lightsaber RoCEv2 SOAP 
 * Services Layer (CLR-SSL) System 
 * Resource Registry. 
 *
 * _crnrstn_registry_resource_filepath_return()
 *
 *
 * 5 ::
 *
 * Sunday, October 26, 2025 @ "01" 2345 hrs.
 *
 * "01010101...split the atom...Oh, 
 * Oh, Oh, Oh. You know what I mean. 
 *
 * Yeah, you know what I mean: 
 * "Oh, Oh, Oh"... 
 * Yeah, you know what 
 * I mean..."Oh"...yeah. ;) 
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Added function definition 
 *       function_exists() validation before 
 *       defining the CRNRSTN :: Resource 
 *       Registry Resource Path Return Function, 
 *       _crnrstn_registry_resource_filepath_return(). 
 *       5 :: Monday, October 27, 2025 @ 1252 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Removed "definition_" from the name of the 
 *       global function, 
 *       _crnrstn_registry_resource_definition_filepath_return().
 *
 *       Happy birthday to you, J5, my boy!
 *       11/11/2005 - 08/16/2021 @ 0345 hrs.
 *
 *       5 :: Tuesday November 11, 2025 @ 2257 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Added support for change directory "../../" 
 *       string data as input for $application_directory 
 *       so that one copy of the CLR-SSL framework in a 
 *       root web directory such as, 'var/www/html', can 
 *       be invoked by calling scripts running at n+1 
 *       deeper directory levels. 
 *       5 :: Tuesday, November 11, 2025 @ 2325 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: We changed the global function name from 
 *       _crnrstn_registry_resource_filepath_return() 
 *       to _crnrstn_registry_resource_return(), 
 *       and then we began the re-architecture of 
 *       the function input parameters and the return. 
 *       5 :: Monday, November 17, 2025 @ 0440 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: We changed the global-scope function 
 *       name from _crnrstn_registry_resource_return() 
 *       to _crnrstn_resource_return(). 
 *       5 :: Tuesday, March 31, 2026 @ 1221 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: We changed the global-scope 
 *       function name from 
 *       _crnrstn_resource_return() 
 *       to _R_resource_return(). 
 *       5 :: Sunday, July 26, 2026 @ 0832 hrs.
 *
 */
if(!\function_exists('_R_resource_return')){    

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @param
     * @param
     * @param
     * @return object
     * @access public
     *
     */
    function _R_resource_return(
             $application_directory = '', 
             $R_framework_directory = '_R', 
             $R_resource_name = 'crnrstn', 
             $R_hmac_algorithm_override = 'sha256', 
             $R_debug_mode_override = 0, 
             $PHPMailer_debug_mode_override = 0, 
             $WordPress_debug_mode_override = 0)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Removed the 
         *       _crnrstn_resource_return() 
         *       input parameters, $slsh and 
         *       $R_log_silo_profile_override. 
         *       5 :: Sunday, May 17, 2026 @ 0545 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Added the 
         *       _crnrstn_resource_return() 
         *       input parameter, 
         *       $WordPress_debug_mode_override. 
         *       5 :: Sunday, May 17, 2026 @ 0611 hrs.
         *
         */

        $R_version_crnrstn        = '2.00.0001';
        $tmp_iso_lang_code        = 'en';
        $tmp_background_color_hex = '#FFFFFF';

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * CLR-SSL Server OS Path 
         * Compatibility Management Kit. 
         *
         *
         * 5 :: Saturday, August 1, 2026 @ 0458 hrs.
         *
         */
        if(\stripos(PHP_OS, 'WIN') === 0) 
            $os_path_dir_separator_char = '\\';
        else
            $os_path_dir_separator_char = '/';

        $directory_shift     =
        $path_chunk          =
        $R_system_colors     =
        $R_path_patterns     =
        $R_path_replacements = array();

        switch($os_path_dir_separator_char){
            case '\\':
                // Windows® OS

                $R_path_patterns[0]     = '/';
                $R_path_replacements[0] = $os_path_dir_separator_char;

            break;
            default:
                // Linux OS

                $R_path_patterns[0]     = '\\';
                $R_path_replacements[0] = $os_path_dir_separator_char;

            break;

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Initialize CLR-SSL Font CSS.
         *
         *
         * 5 :: Saturday, August 1, 2026 @ 1739 hrs.
         *
         */
        $R_system_colors['electric_white'] = '1px 1px 1px rgba(199, 213, 255, 1.0)'; // R :: Electric White.
        $R_system_colors['slimer_green']   = '1px 1px 2px rgba(87, 255, 0, 1.0)';    // R :: Slimer® Green.

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Define CLR-SSL 
         * debug modes. 
         *
         *
         * 5
         *
         * Sunday, May 10, 2024 @ 0802 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Added the initialization
         *       (or definition) of
         *       the integer constant,
         *       CRNRSTN_SYSTEM_TEST, in order
         *       to take the development of
         *       a CLR-SSL system file check
         *       automation architecture
         *       eVifweb® engineering test
         *       deeper into the framework.
         *       5 :: Monday, July 6, 2026 @ 0616 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Moved the CLR-SSL debug mode 
         *       architecture off globally 
         *       defined integer constants 
         *       and onto standard PHP 
         *       variables. 
         *
         *       We also got to briefly test 
         *       for the first time the use of 
         *       SplFixedArray technology 
         *       in CRNRSTN ::
         *
         * The original CRNRSTN :: Debug Mode 
         * Architecture (2018 - Summer of 2026):
         * @define(__NAMESPACE__ . '\CRNRSTN_DEBUG_OFF', (int) 0);
         * @define(__NAMESPACE__ . '\CRNRSTN_DEBUG_ON', (int) 1);
         * @define(__NAMESPACE__ . '\CRNRSTN_DEBUG_SYSLOG', (int) 2);
         * @define(__NAMESPACE__ . '\CRNRSTN_SYSTEM_TEST', (int) 3);
         *
         *
         * 5 :: Friday, July 10, 2026 @ 1400 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Deprecated the use of 
         *       CLR-SSL Resource Registry loading  
         *       architecture integer constants; 
         *       - CRNRSTN_LOAD_MANY_TO_1_REQUEST
         *       - CRNRSTN_LOAD_1_TO_1_REQUEST
         *       - CRNRSTN_LOAD_1_TO_1_SESSION
         *       - CRNRSTN_LOAD_ON_TTL_EXPIRE
         *
         *       Now to be represented by 
         *       these integers and strings: 
         *       - 'R_load_many_to_1_request', 9876
         *       - 'R_load_1_to_1_request', 9877;
         *       - 'R_load_1_to_1_session', 9878; 
         *       - 'R_load_on_ttl_expire', 9879; 
         *
         *       5 :: Friday, July 10, 2026 @ 2128 hrs.
         *
         * The original CRNRSTN :: Resource Registry 
         * Loading Architecture (2024 - Summer of 2026):
         * @define(__NAMESPACE__ . '\CRNRSTN_LOAD_MANY_TO_1_REQUEST', (int) 9876);
         * @define(__NAMESPACE__ . '\CRNRSTN_LOAD_1_TO_1_REQUEST', (int) 9877);
         * @define(__NAMESPACE__ . '\CRNRSTN_LOAD_1_TO_1_SESSION', (int) 9878);
         * @define(__NAMESPACE__ . '\CRNRSTN_LOAD_ON_TTL_EXPIRE', (int) 9879);
         *
         *
         * 5 :: Friday, July 10, 2026 @ 2318 hrs.
         *
         */
        if(!defined(__NAMESPACE__ . '\CRNRSTN_DEBUG_OFF') || 
            !defined(__NAMESPACE__ . '\CRNRSTN_DEBUG_ON') || 
            !defined(__NAMESPACE__ . '\CRNRSTN_DEBUG_SYSLOG') || 
            !defined(__NAMESPACE__ . '\CRNRSTN_SYSTEM_TEST'))
        {

            @define(__NAMESPACE__ . '\CRNRSTN_DEBUG_OFF', (int) 0);
            @define(__NAMESPACE__ . '\CRNRSTN_DEBUG_ON', (int) 1);
            @define(__NAMESPACE__ . '\CRNRSTN_DEBUG_SYSLOG', (int) 2);
            @define(__NAMESPACE__ . '\CRNRSTN_SYSTEM_TEST', (int) 3);

        }else{

            if(CRNRSTN_DEBUG_OFF != 0) 
                @define(__NAMESPACE__ . '\CRNRSTN_DEBUG_OFF', (int) 0);
            if(CRNRSTN_DEBUG_ON != 1) 
                @define(__NAMESPACE__ . '\CRNRSTN_DEBUG_ON', (int) 1);
            if(CRNRSTN_DEBUG_SYSLOG != 2) 
                @define(__NAMESPACE__ . '\CRNRSTN_DEBUG_SYSLOG', (int) 2);
            if(CRNRSTN_SYSTEM_TEST != 3) 
                @define(__NAMESPACE__ . '\CRNRSTN_SYSTEM_TEST', (int) 3);

        }

        $R_debug_mode = NULL;
        switch($R_debug_mode_override){
            case '3':
            case '2':
            case '1':
            case CRNRSTN_SYSTEM_TEST:
            case CRNRSTN_DEBUG_SYSLOG:
            case CRNRSTN_DEBUG_ON:

                $R_debug_mode = (int) $R_debug_mode_override;

            break;
            case CRNRSTN_DEBUG_OFF:
            default:

                $R_debug_mode = 0;

            break;

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Initialize CLR-SSL Resource 
         * Registry Loading Architecture 
         * integer flags. 
         *
         *
         * 5 :: Saturday, July 18, 2026 @ 1426 hrs.
         *
         */
        $int_flag = array('R_load_many_to_1_request' => 9876, 
                          'R_load_1_to_1_request'    => 9877, 
                          'R_load_1_to_1_session'    => 9878, 
                          'R_load_on_ttl_expire'     => 9879);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Initialize error message 
         * enrichment data structs to 
         * standardize, simplify, and 
         * add significance to 
         * resource meta nomenclature 
         * in CLR-SSL system messaging. 
         *
         *
         * 5 :: Sunday, May 3, 2026 @ 1957 hrs. 
         * lights joint.
         * cracks open can of Sweetwater® 420.
         * Last Modified: Monday, May 4, 2026 @ 0607 hrs. 
         *
         */
        $R_syntax = array(
        'resource_type' => array(
                  'SOAP_ENDPOINT'       => 'SOAP endpoint', 
                  'CLASS_DEFINITION'    => 'class definition', 
                  'FUNCTION_DEFINITION' => 'function definition', 
                  'RUNTIME_EXECUTABLE'  => 'runtime executable'),
        'loading_arch' => array(
                  $int_flag['R_load_many_to_1_request'] => 'load many to one request', 
                  $int_flag['R_load_1_to_1_request']    => 'load one to one request', 
                  $int_flag['R_load_1_to_1_session']    => 'load one to one session', 
                  $int_flag['R_load_on_ttl_expire']     => 'load on TTL expire'));

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Do we need to load the 
         * requested resource definition 
         * into memory?
         *
         * Let's initialize a boolean. 
         *
         *
         * 5 :: Monday, November 17, 2025 @ 0639 hrs.
         *
         */
        $tmp_load_resource = false;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Do we load the requested 
         * class definition resource 
         * meta data into memory? 
         *
         *
         * 5 :: Monday, November 17, 2025 @ 0648 hrs.
         *
         */
        if(!\class_exists(__NAMESPACE__ . '\\' . 
            $R_resource_name))
            $tmp_load_resource = true;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Variable Initialization.
         *
         */
        $root                  =
        $tmp_crnrstn_file_path = NULL;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Evaluate $application_directory for 
         * any change directory input commands. 
         *
         * Happy birthday to you, J5, my boy! 
         * 11/11/2005 - 08/16/2021 @ 0345 hrs. 
         *
         *
         * 5 :: Tuesday, November 11, 2025 @ 2111 hrs.
         *
         */
        if((\strpos($application_directory, '../') !== false) || 
        	($application_directory == ''))
        {

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Standardize the use of
             * directory separator based
             * on path replacement
             * patterns specific to the
             * server operating system.
             *
             *
             * 5
             *
             */
            $script_filename = \str_replace(
                                    $R_path_patterns, 
                                    $R_path_replacements, 
                                    $_SERVER['SCRIPT_FILENAME']);
            $tmp_script_filepath_ARRAY  = \explode($os_path_dir_separator_char, 
                                                   $script_filename);
            $tmp_app_directory          = \explode('../', $application_directory);
            $tmp_change_directory_depth = \sizeof($tmp_app_directory);

            for($i = 0; $i < $tmp_change_directory_depth; $i++){

                $tmp_data          = \array_pop($tmp_script_filepath_ARRAY);
                $app_dir_chunk     = \array_pop($tmp_app_directory);
                $directory_shift[] =  '../';

                if(($app_dir_chunk != '..') && ($app_dir_chunk != '.')) 
                    $path_chunk[] = $app_dir_chunk;

            }

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Remove one "../" directory shift, 
             * and then convert (implode) the 
             * $directory_shift array into 
             * string data. 
             *
             *
             * 5 :: Case of the Monday's, August 3, 2026 @ 0243 hrs. 
             * Sips coffee. 
             *
             */
            $tmp_data        = \array_pop($directory_shift);
            $directory_shift = \implode('', $directory_shift);

            if(\strlen($path_chunk[0]) > 0)
                $root = \implode($os_path_dir_separator_char, 
                                 $tmp_script_filepath_ARRAY) . 
                        $os_path_dir_separator_char . 
                        $path_chunk[0] . 
                        $os_path_dir_separator_char . 
                        $R_framework_directory;
            else
                $root = \implode($os_path_dir_separator_char, 
                                 $tmp_script_filepath_ARRAY) . 
                        $os_path_dir_separator_char . 
                        $R_framework_directory;

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Standardize the use of
             * directory separator based
             * on path replacement
             * patterns specific to the
             * server operating system.
             *
             *
             * 5
             *
             */
            $root = \str_replace(
                         $R_path_patterns, 
                         $R_path_replacements, 
                         $root);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Standardize the use of the 
             * operating system specific 
             * directory separator by 
             * reducing all double slashes 
             * to single. 
             *
             *
             * 5
             *
             */
            while(\strpos($root, 
                          $os_path_dir_separator_char . 
                          $os_path_dir_separator_char) !== false)
                $root = \str_replace(
                             $os_path_dir_separator_char . 
                             $os_path_dir_separator_char,
                             $os_path_dir_separator_char, 
                             $root);

        }

        if(!isset($root)){

            $directory_shift = '../';

            $root = $_SERVER['DOCUMENT_ROOT'] .
                    \DIRECTORY_SEPARATOR . 
                    $application_directory . 
                    \DIRECTORY_SEPARATOR . 
                    $R_framework_directory;

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Standardize the use of
             * directory separator based
             * on path replacement
             * patterns specific to the
             * server operating system.
             *
             *
             * 5
             *
             */
            $root = \str_replace(
                         $R_path_patterns, 
                         $R_path_replacements, 
                         $root);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Standardize the use of the
             * operating system specific
             * directory separator by
             * reducing all double slashes
             * to single.
             *
             *
             * 5
             *
             */
            while(\strpos($root, 
                          $os_path_dir_separator_char . 
                          $os_path_dir_separator_char) !== false)
                $root = \str_replace(
                             $os_path_dir_separator_char . 
                             $os_path_dir_separator_char,
                             $os_path_dir_separator_char, 
                             $root);

        }

        $resource          = 'R_timezone_default';
        $resource_filename = 'crnrstn.' . $resource . 
                             '.runtime_exe.php';
        $tmp_obj_exe_path  = $root . $os_path_dir_separator_char . 
                             '_config' . $os_path_dir_separator_char . 
                             '_config.defaults' . $os_path_dir_separator_char . 
                             'load_static_cache' . $os_path_dir_separator_char . 
                             $resource . $os_path_dir_separator_char . 
                             $resource_filename;

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * The default timezone is 
         * returned from here: 
         *
         * /_R/_config/_config.defaults
         * /load_static_cache/R_timezone_default
         * /crnrstn.R_timezone_default.runtime_exe.php
         *
         * The return data is a timezone identifier, 
         * like UTC, Africa/Lagos, Asia/Hong_Kong, 
         * or Europe/Lisbon. The list of valid 
         * identifiers is available. 
         *
         * Please see the list of supported 
         * timezone identifiers:
         *
         * https://www.php.net/manual/en/timezones.php
         *
         *
         * 5 :: Monday, August 10, 2026 @ 1024 hrs.
         *
         */
        if(\is_file($tmp_obj_exe_path)) 
            // Initialize $R_data with default timezone for the CLR-SSL.
            require($tmp_obj_exe_path);
        else
            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * If the file read fails, manually 
             * initialize $R_data with default 
             * timezone for the CLR-SSL. 
             *
             *
             * 5 :: Monday, August 10, 2026 @ 1050 hrs.
             *
             */
            $R_data = 'america/new_york';
        
        if(\date_default_timezone_set($R_data) == false){

            $clr_ssl_msg = 'An error was experienced while ' . 
                           'attempting to set the default ' . 
                           'timezone for ' . 
                           \strval($caller) . 
                           '.';

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * SOURCE :: NUSOAP.PHP - http://sourceforge.net/projects/nusoap/
             *
             * Get the time 
             * in ODBC canonical 
             * form with microseconds. 
             *
             * E.g., '2024-07-15 00:56:13.653016'
             *
             */
            \date_default_timezone_set('america/new_york');
            $tod  = \gettimeofday();
            $sec  = $tod['sec'];
            $usec = $tod['usec'];
            $ts   = \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                    '.' . 
                    \sprintf('%06d', $usec);

            switch($R_debug_mode_override){
                case CRNRSTN_DEBUG_SYSLOG:

                    $syslog_prefix = 'R :: [' . $ts . '] [func ' . 
                                     __FUNCTION__ . '] [lnum ' . 
                                     __LINE__ . '] [rtime ' . 
                                     _R_wall_time() . 
                                     '] ';
                    \openlog(
                        $syslog_prefix, 
                        \LOG_CONS | 
                        \LOG_NDELAY | 
                        \LOG_NOWAIT | 
                        \LOG_PID | 
                        \LOG_PERROR, 
                        \LOG_SYSLOG);
                    \syslog(
                        \LOG_DEBUG, 
                        $clr_ssl_msg);
                    \closelog();

                case CRNRSTN_SYSTEM_TEST:
                case CRNRSTN_DEBUG_ON:
                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Database Integrations Pending.
                     *
                     *
                     * 5 :: Sunday, May 17, 2026 @ 0754 hrs.
                     *
                     */

                    $syslog_prefix = 'R :: [' . $ts . '] [func ' . 
                                     __FUNCTION__ . 
                                     '] [lnum ' . 
                                     __LINE__ . '] [rtime ' . 
                                     _R_wall_time() . 
                                     '] ';
                    $message_str_elipse = '...';
                    if(\strlen($clr_ssl_msg) < 31){

                        $message_str_elipse = '';

                    }

                    //$clr_ssl_msg = \trim(\substr($clr_ssl_msg, 0, 34));
                    $clr_ssl_msg = \trim(\substr($clr_ssl_msg, 0, 0));
                    $clr_ssl_msg = $clr_ssl_msg . $message_str_elipse;
                    $clr_ssl_msg = '[Database Integrations Pending] ' . 
                                   $clr_ssl_msg;
                    \openlog(
                        $syslog_prefix, 
                        \LOG_CONS | 
                        \LOG_NDELAY | 
                        \LOG_NOWAIT | 
                        \LOG_PID | 
                        \LOG_PERROR, 
                        \LOG_SYSLOG);
                    \syslog(
                        \LOG_DEBUG, 
                        $clr_ssl_msg);
                    \closelog();

                break;
                default:
                case CRNRSTN_DEBUG_OFF:
                    // Silence is golden. 
                break;

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Load the CRNRSTN :: Lightsaber 
         * RoCEv2 SOAP Services Layer 
         * (CLR-SSL) System Registry 
         * Resource that has 
         * been requested. 
         *
         *
         * 5
         *
         * Monday, November 17, 2025 @ 0555 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Copied _crnrstn_registry_resource_return() 
         *       from the eVifweb Neural Network Data 
         *       Center SysOps Script Generator index.php 
         *       and added a switch case for 
         *       'crnrstn_dom_proxy_iframe'.
         *       5 :: Thursday, February 12, 2026 @ 2306 hrs.
         *
         * # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Moved 'crnrstn_dom_proxy_iframe' 
         *       switch case output to a method
         *       call internal to CRNRSTN :: 
         *       ui_module_out() and deleted this 
         *       switch case from the index.php. 
         *       5 :: Monday, March 9, 2026 @ 0059 hrs.
         *
         */
        switch($R_resource_name){
            case 'crnrstn_registry_user':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CRNRSTN :: Lightsaber RoCEv2 
                 * SOAP Services Layer (CLR-SSL) 
                 * Boot-Up. 
                 *
                 * Prepare to boot-up  
                 * the framework. 
                 *
                 *
                 * 5
                 *
                 * Sunday, September 1, 2024 @ 0155 hrs.
                 *
                 */
                $tmp_resource_name                      = 'crnrstn_registry_user';
                $tmp_file_name                          = 'crnrstn.registry_user.class.php';
                $tmp_type_dir                           = 'object';
                $tmp_file_path                          = $root . $os_path_dir_separator_char . 
                                                          'class' . $os_path_dir_separator_char . 
                                                          'registry' . $os_path_dir_separator_char . 
                                                          $tmp_file_name;
                $tmp_obj_exe_path                       = $root . $os_path_dir_separator_char . 
                                                          '_config' . $os_path_dir_separator_char . 
                                                          '_config.resource_registry' . $os_path_dir_separator_char . 
                                                          'resource' . $os_path_dir_separator_char . 
                                                          $tmp_type_dir  . '_return' . $os_path_dir_separator_char . 
                                                          $tmp_resource_name . $os_path_dir_separator_char . 
                                                          'crnrstn.' . $tmp_resource_name . 
                                                          '.fire_bolt_exe.php';
                $tmp_TITLE_TEXT                         = 'The CRNRSTN :: Lightsaber ' .
                                                          'RoCEv2 SOAP Services ' .
                                                          'Layer (CLR-SSL) System ' .
                                                          'Registry User';
                $tmp_LICENSE_NAME_TEXT                  = 'MIT License';
                $tmp_LICENSE_URL                        = 'https://crnrstn.jony5.com/licensing/';
                $tmp_COPYRIGHT_TEXT                     = 'Copyright © 2012-' . \date('Y') . ' ' .
                                                          'eVifweb® development All Rights Reserved.';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * SOURCE :: NUSOAP.PHP - http://sourceforge.net/projects/nusoap/
                 *
                 * Get the time 
                 * in ODBC canonical 
                 * form with microseconds. 
                 *
                 * E.g., '2024-07-15 00:56:13.653016'
                 *
                 */
                $tod            = \gettimeofday();
                $sec            = $tod['sec'];
                $usec           = $tod['usec'];
                $ts             = \strftime('%Y-%m-%d %H:%M:%S', $sec) . '.' . 
                                  \sprintf('%06d', $usec);
                $memory_pointer = \hash('sha512', $tmp_resource_name . 
                                  $ts);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Initialize a CLR-SSL 
                 * Resource Registry 
                 * data container. 
                 *
                 * $R_resp = array();
                 *
                 *
                 * 5 :: Saturday, April 4, 2026 @ 1453 hrs.
                 *
                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Edit: Renamed the data container 
                 *       to $R_resp (from $R_data) in 
                 *       order to better align to the 
                 *       CLR-SSL Resource Registry 
                 *       object and function runtime 
                 *       executables (internal system 
                 *       files) as the _crnrstn_resource_return() 
                 *       function is forcing architectural 
                 *       redundancy upon internal 
                 *       system file code for its support. 
                 *       By simply aligning the syntax, 
                 *       we can cut out the redundancy. 
                 *       5 :: Tuesday, June 2, 2026 @ 1540 hrs.
                 *
                 */
                $R_resp                                             = array();
                $R_resp['clr_ssl_resource']['memory_pointer'][]     = $memory_pointer;
                $R_resp[$memory_pointer]['resource_name']           = $tmp_resource_name;
                $R_resp[$memory_pointer]['iso_lang_code']           = $tmp_iso_lang_code;
                $R_resp[$memory_pointer]['background_color_hex']    = $tmp_background_color_hex;
                $R_resp[$memory_pointer]['title']                   = $tmp_TITLE_TEXT;
                $R_resp[$memory_pointer]['software_company']['key'] = 'eVifweb® development';
                $R_resp[$memory_pointer]['software_default']        = '1.00.0000';
                $R_resp[$memory_pointer]['license']['key']          = array('1.00.0000' => 'MIT');
                $R_resp[$memory_pointer]['license']['name']         = array('1.00.0000' => $tmp_LICENSE_NAME_TEXT);
                $R_resp[$memory_pointer]['license']['url']          = array('1.00.0000' => $tmp_LICENSE_URL);
                $R_resp[$memory_pointer]['copyright']               = array('1.00.0000' => $tmp_COPYRIGHT_TEXT);
                $R_resp[$memory_pointer]['microtime']               = $ts;
                $R_resp[$memory_pointer]['timestamp']               = \gettimeofday(); 
                $R_resp[$memory_pointer]['runtime']                 = _R_wall_time();

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * require 
                 * require_once
                 * include
                 * include_once
                 */
                $R_resp[$memory_pointer]['evaluation_protocol']     = array('1.00.0000' => 'require');

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * SOAP_ENDPOINT
                 * CLASS_DEFINITION
                 * FUNCTION_DEFINITION
                 * RUNTIME_EXECUTABLE
                 */
                $R_resp[$memory_pointer]['resource_type']           = 'CLASS_DEFINITION';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * R_load_many_to_1_request...9876
                 * R_load_1_to_1_request......9877
                 * R_load_1_to_1_session......9878
                 * R_load_on_ttl_expire.......9879
                 */
                $R_resp[$memory_pointer]['loading_arch']                          = array('1.00.0000' => $int_flag['R_load_many_to_1_request']);
                $R_resp[$memory_pointer]['namespace']                             = __NAMESPACE__;
                $R_resp[$memory_pointer]['file_path']['definition']               = array('1.00.0000' => $tmp_file_path);
                $R_resp[$memory_pointer]['file_path']['new_obj_exe']              = array('1.00.0000' => $tmp_obj_exe_path);
                $R_resp[$memory_pointer]['file_name']                             = array('1.00.0000' => $tmp_file_name);
                $R_resp[$memory_pointer]['software_version']                      = array('1.00.0000');
                $R_resp[$memory_pointer]['is_active']                             = array('1.00.0000' => true);
                $R_resp[$memory_pointer]['input_parameter_count']                 = array('1.00.0000' => 9);
                $R_resp[$memory_pointer]['input_parameter_defaults']              = array('1.00.0000' => array(
                                                                                                         $application_directory, 
                                                                                                         $R_framework_directory, 
                                                                                                         $R_hmac_algorithm_override, 
                                                                                                         $R_debug_mode_override, 
                                                                                                         $PHPMailer_debug_mode_override, 
                                                                                                         $WordPress_debug_mode_override, 
                                                                                                         NULL, 
                                                                                                         NULL,  
                                                                                                         NULL));
                $R_resp[$memory_pointer]['eval_ttl']                              = array('1.00.0000' => -1);
                $R_resp[$memory_pointer]['file_evaluate_enabled']                 = array('1.00.0000' => true);
                $R_resp[$memory_pointer]['auto_eval_mode_enabled']                = array('1.00.0000' => false);
                $R_resp[$memory_pointer]['auto_obj_mode_enabled']                 = array('1.00.0000' => true);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * view_source_safe = 0 for admin 
                 *                    only access. 
                 * -----
                 * This will grant a browser authenticated 
                 * PHP admin session read access to 
                 * source code. 
                 *
                 * Only an update to admin server 
                 * settings should change this. 
                 */
                $R_resp[$memory_pointer]['view_source_safe']                      = array('1.00.0000' => 0);
                $R_resp[$memory_pointer]['extends_class']                         = array();
                $R_resp[$memory_pointer]['dependencies']                          = array();
                $R_resp[$memory_pointer]['php_version']['removed']                = array();
                $R_resp[$memory_pointer]['php_version']['deprecated']             = array();
                $R_resp[$memory_pointer]['php_version']['supported']              = array();

                $clr_ssl_msg = 'Request received for ' . 
                               $R_syntax['resource_type'][$R_resp[$memory_pointer]['resource_type']] . ', ' . 
                               $R_resp[$memory_pointer]['resource_name'] . 
                               ' v' . 
                               $R_resp[$memory_pointer]['software_default'] . 
                               '.';
                // 5 :: Satxxxxxxxxxxxxxxxxxxxxxxxxxxx
                $msg_token = '3617df7ace8c31f059bae0f28a17eb52' . 
                             'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token = array(
                         'token'                   => $msg_token, 
                         'token_generation_date'   => $token_generation_date, 
                         'request_type'            => __FUNCTION__, 
                         'code'                    => 200, 
                         'clr_ssl_msg'             => $clr_ssl_msg, 
                         'memory_ptr'              => $memory_pointer, 
                         'resource_ping_runtime'   => $R_resp[$memory_pointer]['runtime'], 
                         'resource_ping_microtime' => $R_resp[$memory_pointer]['microtime'], 
                         'file_evaluate_enabled'   => $R_resp[$memory_pointer]['file_evaluate_enabled'][$R_resp[$memory_pointer]['software_default']], 
                         'auto_eval_mode_enabled'  => $R_resp[$memory_pointer]['auto_eval_mode_enabled'][$R_resp[$memory_pointer]['software_default']], 
                         'auto_obj_mode_enabled'   => $R_resp[$memory_pointer]['auto_obj_mode_enabled'][$R_resp[$memory_pointer]['software_default']], 
                         'namespace'               => $R_resp[$memory_pointer]['namespace'], 
                         'resource_loading_arch'   => $R_resp[$memory_pointer]['loading_arch'][$R_resp[$memory_pointer]['software_default']], 
                         'resource_eval_ttl'       => $R_resp[$memory_pointer]['eval_ttl'][$R_resp[$memory_pointer]['software_default']], 
                         'resource_type'           => $R_resp[$memory_pointer]['resource_type'], 
                         'resource_name'           => $R_resp[$memory_pointer]['resource_name'], 
                         'software_version'        => $R_resp[$memory_pointer]['software_default'], 
                         'resource_title'          => $R_resp[$memory_pointer]['title'], 
                         'software_company'        => $R_resp[$memory_pointer]['software_company']['key'], 
                         'copyright'               => $R_resp[$memory_pointer]['copyright'][$R_resp[$memory_pointer]['software_default']], 
                         'license_key'             => $R_resp[$memory_pointer]['license']['key'][$R_resp[$memory_pointer]['software_default']]);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * SOURCE :: NUSOAP.PHP - http://sourceforge.net/projects/nusoap/
                 *
                 * Get the time 
                 * in ODBC canonical 
                 * form with microseconds. 
                 *
                 * E.g., '2024-07-15 00:56:13.653016'
                 *
                 */
                $tod  = \gettimeofday();
                $sec  = $tod['sec'];
                $usec = $tod['usec'];
                $ts   = \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                        '.' . 
                        \sprintf('%06d', $usec);

                switch($R_debug_mode_override){
                    case CRNRSTN_DEBUG_SYSLOG:

                        $syslog_prefix = 'R :: [' . $ts . '] [func ' . 
                                         __FUNCTION__ . '] [lnum ' . 
                                         __LINE__ . '] [rtime ' . 
                                         _R_wall_time() . 
                                         '] ';
                        \openlog(
                            $syslog_prefix, 
                            \LOG_CONS | 
                            \LOG_NDELAY | 
                            \LOG_NOWAIT | 
                            \LOG_PID | 
                            \LOG_PERROR, 
                            \LOG_SYSLOG);
                        \syslog(
                            \LOG_DEBUG, 
                            $clr_ssl_msg);
                        \closelog();

                    case CRNRSTN_SYSTEM_TEST:
                    case CRNRSTN_DEBUG_ON:
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Database Integrations Pending.
                         *
                         *
                         * 5 :: Sunday, May 17, 2026 @ 0754 hrs.
                         *
                         */

                        $syslog_prefix = 'R :: [' . $ts . '] [func ' . 
                                         __FUNCTION__ . 
                                         '] [lnum ' . 
                                         __LINE__ . '] [rtime ' . 
                                         _R_wall_time() . 
                                         '] ';
                        $message_str_elipse = '...';
                        if(\strlen($clr_ssl_msg) < 31){

                            $message_str_elipse = '';

                        }

                        //$clr_ssl_msg = \trim(\substr($clr_ssl_msg, 0, 34));
                        $clr_ssl_msg = \trim(\substr($clr_ssl_msg, 0, 0));
                        $clr_ssl_msg = $clr_ssl_msg . $message_str_elipse;
                        $clr_ssl_msg = '[Database Integrations Pending] ' . 
                                       $clr_ssl_msg;
                        \openlog(
                            $syslog_prefix, 
                            \LOG_CONS | 
                            \LOG_NDELAY | 
                            \LOG_NOWAIT | 
                            \LOG_PID | 
                            \LOG_PERROR, 
                            \LOG_SYSLOG);
                        \syslog(
                            \LOG_DEBUG, 
                            $clr_ssl_msg);
                        \closelog();

                    break;
                    default:
                    case CRNRSTN_DEBUG_OFF:
                        // Silence is golden. 
                    break;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Do we load this class 
                 * resource definition 
                 * into memory? 
                 *
                 *
                 * 5 :: Monday, November 17, 2025 @ 0630 hrs.
                 * 
                 */
                if(($tmp_load_resource !== false) && 
                    ((bool) $R_resp[$memory_pointer]['file_evaluate_enabled'] == true))
                {

                    if(!is_file($R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']])){

                        $clr_ssl_msg = 'File not found: ' . 
                                       $R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']] . 
                                       '.';
                        // 5 :: Satxxxxxxxxxxxxxxxxxxxxxxx
                        $msg_token = '34ce6ab1e5555561336cd13f715e7c2f' . 
                                     'xxxxxxxxxxxxxxxxxxxxxxx';
                        $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxx';
                        $token = array(
                                 'token'                   => $msg_token, 
                                 'token_generation_date'   => $token_generation_date, 
                                 'request_type'            => __FUNCTION__,
                                 'code'                    => 200, 
                                 'clr_ssl_msg'             => $clr_ssl_msg, 
                                 'memory_ptr'              => $memory_pointer, 
                                 'resource_ping_runtime'   => $R_resp[$memory_pointer]['runtime'], 
                                 'resource_ping_microtime' => $R_resp[$memory_pointer]['microtime'], 
                                 'file_evaluate_enabled'   => $R_resp[$memory_pointer]['file_evaluate_enabled'][$R_resp[$memory_pointer]['software_default']], 
                                 'auto_eval_mode_enabled'  => $R_resp[$memory_pointer]['auto_eval_mode_enabled'][$R_resp[$memory_pointer]['software_default']], 
                                 'auto_obj_mode_enabled'   => $R_resp[$memory_pointer]['auto_obj_mode_enabled'][$R_resp[$memory_pointer]['software_default']], 
                                 'namespace'               => $R_resp[$memory_pointer]['namespace'], 
                                 'resource_loading_arch'   => $R_resp[$memory_pointer]['loading_arch'][$R_resp[$memory_pointer]['software_default']], 
                                 'resource_eval_ttl'       => $R_resp[$memory_pointer]['eval_ttl'][$R_resp[$memory_pointer]['software_default']], 
                                 'resource_type'           => $R_resp[$memory_pointer]['resource_type'], 
                                 'resource_name'           => $R_resp[$memory_pointer]['resource_name'], 
                                 'software_version'        => $R_resp[$memory_pointer]['software_default'], 
                                 'resource_title'          => $R_resp[$memory_pointer]['title'], 
                                 'software_company'        => $R_resp[$memory_pointer]['software_company']['key'], 
                                 'copyright'               => $R_resp[$memory_pointer]['copyright'][$R_resp[$memory_pointer]['software_default']], 
                                 'license_key'             => $R_resp[$memory_pointer]['license']['key'][$R_resp[$memory_pointer]['software_default']]);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * SOURCE :: NUSOAP.PHP - http://sourceforge.net/projects/nusoap/
                         *
                         * Get the time 
                         * in ODBC canonical 
                         * form with microseconds. 
                         *
                         * E.g., '2024-07-15 00:56:13.653016'
                         *
                         */
                        $tod  = \gettimeofday();
                        $sec  = $tod['sec'];
                        $usec = $tod['usec'];
                        $ts   = \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                '.' . 
                                \sprintf('%06d', $usec);

                        switch($R_debug_mode_override){
                            case CRNRSTN_DEBUG_SYSLOG:

                                $syslog_prefix = 'R :: [' . $ts . '] [func ' . 
                                                 __FUNCTION__ . '] [lnum ' . 
                                                 __LINE__ . '] [rtime ' . 
                                                 _R_wall_time() . 
                                                 '] ';
                                \openlog(
                                    $syslog_prefix, 
                                    \LOG_CONS | 
                                    \LOG_NDELAY | 
                                    \LOG_NOWAIT | 
                                    \LOG_PID | 
                                    \LOG_PERROR, 
                                    \LOG_SYSLOG);
                                \syslog(
                                    \LOG_DEBUG, 
                                    $clr_ssl_msg);
                                \closelog();

                            case CRNRSTN_SYSTEM_TEST:
                            case CRNRSTN_DEBUG_ON:
                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Database Integrations Pending.
                                 *
                                 *
                                 * 5 :: Sunday, May 17, 2026 @ 0754 hrs.
                                 *
                                 */

                                $syslog_prefix = 'R :: [' . $ts . '] [func ' . 
                                                 __FUNCTION__ . 
                                                 '] [lnum ' . 
                                                 __LINE__ . '] [rtime ' . 
                                                 _R_wall_time() . 
                                                 '] ';

                                $message_str_elipse = '...';
                                if(\strlen($clr_ssl_msg) < 31){

                                    $message_str_elipse = '';

                                }

                                $clr_ssl_msg = \trim(\substr($clr_ssl_msg, 0, 0));
                                $clr_ssl_msg = $clr_ssl_msg . $message_str_elipse;
                                $clr_ssl_msg = '[Database Integrations Pending] ' . 
                                               $clr_ssl_msg;
                                \openlog(
                                    $syslog_prefix, 
                                    \LOG_CONS | 
                                    \LOG_NDELAY | 
                                    \LOG_NOWAIT | 
                                    \LOG_PID | 
                                    \LOG_PERROR, 
                                    \LOG_SYSLOG);
                                \syslog(
                                    \LOG_DEBUG, 
                                    $clr_ssl_msg);
                                \closelog();

                            break;
                            default:
                            case CRNRSTN_DEBUG_OFF:
                                // Silence is golden. 
                            break;

                        }

                        // 5 :: Thursday, July 30, 2026 @ 0122 hrs.
                        __NAMESPACE__ . '\\' . 
                        _R_server_response(
                            404, 
                            false, 
                            'No file found at path: ' . 
                            $R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']], 
                            $directory_shift,
                            $R_framework_directory);

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Evaluate the class 
                     * definition file for 
                     * The CRNRSTN :: Lightsaber 
                     * RoCEv2 SOAP Services 
                     * Layer (CLR-SSL) 
                     * Registry User. 
                     *
                     *
                     * 5
                     *
                     * Wednesday, August 28, 2024 @ 0114 hrs.
                     *
                     */
                    switch($R_resp[$memory_pointer]['evaluation_protocol']){
                        case 'include':

                            include($R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']]);

                        break;
                        case 'include_once':

                            include_once($R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']]);

                        break;
                        case 'require_once':

                            require_once($R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']]);

                        break;
                        case 'require':
                        default:

                            require($R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']]);

                        break;

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Instantiate a class 
                 * object of the 
                 * CRNRSTN :: Lightsaber 
                 * RoCEv2 SOAP Services 
                 * Layer (CLR-SSL) System 
                 * Registry User. 
                 *
                 * Class :: crnrstn_registry_user
                 * __construct(
                 *     $application_directory = '', 
                 *     $R_framework_directory = '_R', 
                 *     $R_hmac_algorithm_override = NULL, 
                 *     $R_debug_mode_override = NULL, 
                 *     $PHPMailer_debug_mode_override = NULL, 
                 *     $WordPress_debug_mode_override = NULL, 
                 *     $R_cluster_id_override = NULL, 
                 *     $R_node_id_override = NULL, 
                 *     $R_client_id_override = NULL, 
                 *     $R_request_id_override = NULL, 
                 *     $R_request_serial_override = NULL, 
                 *     $R_odata = NULL){} 
                 *
                 *
                 * 5
                 *
                 * Wednesday, August 28, 2024 @ 0117 hrs.
                 * Last Modified: Monday, August 10, 2026 @ 2047 hrs.
                 *
                 */
                return require($R_resp[$memory_pointer]['file_path']['new_obj_exe'][$R_resp[$memory_pointer]['software_default']]);

            break;
            case 'lightbox_helper_by_eVifweb':

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CRNRSTN :: Lightsaber RoCEv2 
                 * SOAP Services Layer (CLR-SSL) 
                 * Boot-Up. 
                 *
                 * Prepare to boot-up 
                 * the framework. 
                 *
                 *
                 * 5
                 *
                 * Saturday, July 20, 2024 @ 1234 hrs.
                 *
                 */
                $tmp_resource_name                      = 'lightbox_helper_by_eVifweb';
                $tmp_file_name                          = 'lightbox_helper.class.php';
                $tmp_type_dir                           = 'object';
                $tmp_file_path                          = $root . $os_path_dir_separator_char . 
                                                          'class' . $os_path_dir_separator_char . 
                                                          'assets' . $os_path_dir_separator_char . 
                                                          $tmp_file_name;
                $tmp_obj_exe_path                       = $root . $os_path_dir_separator_char . 
                                                          '_config' . $os_path_dir_separator_char . 
                                                          '_config.resource_registry' . $os_path_dir_separator_char . 
                                                          'resource' . $os_path_dir_separator_char . 
                                                          $tmp_type_dir  . '_return' . $os_path_dir_separator_char . 
                                                          $tmp_resource_name . $os_path_dir_separator_char . 
                                                          'crnrstn.' . $tmp_resource_name . 
                                                          '.fire_bolt_exe.php';
                $tmp_TITLE_TEXT                         = 'The Lightbox Helper' . \PHP_EOL . 
                                                          'by eVifweb®';
                $tmp_LICENSE_NAME_TEXT                  = 'MIT License';
                $tmp_LICENSE_URL                        = 'https://crnrstn.jony5.com/licensing/';
                $tmp_COPYRIGHT_TEXT                     = 'Copyright © 2012-' . \date('Y') . ' ' .
                                                          'eVifweb® development All Rights Reserved.';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * SOURCE :: NUSOAP.PHP - http://sourceforge.net/projects/nusoap/
                 *
                 * Get the time 
                 * in ODBC canonical 
                 * form with microseconds. 
                 *
                 * E.g., '2024-07-15 00:56:13.653016'
                 *
                 */
                $tod            = \gettimeofday();
                $sec            = $tod['sec'];
                $usec           = $tod['usec'];
                $ts             = \strftime('%Y-%m-%d %H:%M:%S', $sec) . '.' . 
                                  \sprintf('%06d', $usec);
                $memory_pointer = \hash('sha512', $tmp_resource_name . 
                                  $ts);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Initialize a CLR-SSL 
                 * Resource Registry 
                 * response output 
                 * data container. 
                 *
                 * $R_resp = array();
                 *
                 *
                 * 5 :: Saturday, April 4, 2026 @ 1453 hrs.
                 *
                 */
                $R_resp                                             = array();
                $R_resp['clr_ssl_resource']['memory_pointer'][]     = $memory_pointer;
                $R_resp[$memory_pointer]['resource_name']           = $tmp_resource_name;
                $R_resp[$memory_pointer]['iso_lang_code']           = $tmp_iso_lang_code;
                $R_resp[$memory_pointer]['background_color_hex']    = $tmp_background_color_hex;
                $R_resp[$memory_pointer]['title']                   = $tmp_TITLE_TEXT;
                $R_resp[$memory_pointer]['software_company']['key'] = 'eVifweb® development';
                $R_resp[$memory_pointer]['software_default']        = '1.00.0000';
                $R_resp[$memory_pointer]['license']['key']          = array('1.00.0000' => 'MIT');
                $R_resp[$memory_pointer]['license']['name']         = array('1.00.0000' => $tmp_LICENSE_NAME_TEXT);
                $R_resp[$memory_pointer]['license']['url']          = array('1.00.0000' => $tmp_LICENSE_URL);
                $R_resp[$memory_pointer]['copyright']               = array('1.00.0000' => $tmp_COPYRIGHT_TEXT);
                $R_resp[$memory_pointer]['microtime']               = $ts;
                $R_resp[$memory_pointer]['timestamp']               = \gettimeofday(); 
                $R_resp[$memory_pointer]['runtime']                 = _R_wall_time();

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * require 
                 * require_once
                 * include
                 * include_once
                 */
                $R_resp[$memory_pointer]['evaluation_protocol']     = array('1.00.0000' => 'require');

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * SOAP_ENDPOINT
                 * CLASS_DEFINITION
                 * FUNCTION_DEFINITION
                 * RUNTIME_EXECUTABLE
                 */
                $R_resp[$memory_pointer]['resource_type']           = 'CLASS_DEFINITION';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * R_load_many_to_1_request...9876
                 * R_load_1_to_1_request......9877
                 * R_load_1_to_1_session......9878
                 * R_load_on_ttl_expire.......9879
                 */
                $R_resp[$memory_pointer]['loading_arch']                          = array('1.00.0000' => $int_flag['R_load_many_to_1_request']);
                $R_resp[$memory_pointer]['namespace']                             = __NAMESPACE__;
                $R_resp[$memory_pointer]['file_path']['definition']               = array('1.00.0000' => $tmp_file_path);
                $R_resp[$memory_pointer]['file_path']['new_obj_exe']              = array('1.00.0000' => $tmp_obj_exe_path);
                $R_resp[$memory_pointer]['file_name']                             = array('1.00.0000' => $tmp_file_name);
                $R_resp[$memory_pointer]['software_version']                      = array('1.00.0000');
                $R_resp[$memory_pointer]['is_active']                             = array('1.00.0000' => true);
                $R_resp[$memory_pointer]['input_parameter_count']                 = array('1.00.0000' => 0);
                $R_resp[$memory_pointer]['input_parameter_defaults']              = array('1.00.0000' => array(
                                                                                                         $application_directory, 
                                                                                                         $R_framework_directory, 
                                                                                                         $R_hmac_algorithm_override, 
                                                                                                         $R_debug_mode_override, 
                                                                                                         $PHPMailer_debug_mode_override, 
                                                                                                         $WordPress_debug_mode_override));
                $R_resp[$memory_pointer]['eval_ttl']                              = array('1.00.0000' => -1);
                $R_resp[$memory_pointer]['file_evaluate_enabled']                 = array('1.00.0000' => true);
                $R_resp[$memory_pointer]['auto_eval_mode_enabled']                = array('1.00.0000' => false);
                $R_resp[$memory_pointer]['auto_obj_mode_enabled']                 = array('1.00.0000' => false);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * view_source_safe = 0 for admin 
                 *                    only access. 
                 * -----
                 * This will grant a browser authenticated 
                 * PHP admin session read access to 
                 * source code. 
                 *
                 * Only an update to admin server 
                 * settings should change this. 
                 */
                $R_resp[$memory_pointer]['view_source_safe']                      = array('1.00.0000' => 0);
                $R_resp[$memory_pointer]['extends_class']                         = array();
                $R_resp[$memory_pointer]['dependencies']                          = array();
                $R_resp[$memory_pointer]['php_version']['removed']                = array();
                $R_resp[$memory_pointer]['php_version']['deprecated']             = array();
                $R_resp[$memory_pointer]['php_version']['supported']              = array();

                $clr_ssl_msg = 'Request received for ' . 
                               $R_syntax['resource_type'][$R_resp[$memory_pointer]['resource_type']] . ', ' . 
                               $R_resp[$memory_pointer]['resource_name'] . 
                               ' v' . 
                               $R_resp[$memory_pointer]['software_default'] . 
                               '.';
                // 5 :: Satxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                $msg_token = '257f1f68a8f12cc4c5fe121e7f23a16a' . 
                             'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
                $token = array(
                         'token'                   => $msg_token, 
                         'token_generation_date'   => $token_generation_date, 
                         'request_type'            => __FUNCTION__,
                         'code'                    => 200, 
                         'clr_ssl_msg'             => $clr_ssl_msg, 
                         'memory_ptr'              => $memory_pointer, 
                         'resource_ping_runtime'   => $R_resp[$memory_pointer]['runtime'], 
                         'resource_ping_microtime' => $R_resp[$memory_pointer]['microtime'], 
                         'file_evaluate_enabled'   => $R_resp[$memory_pointer]['file_evaluate_enabled'][$R_resp[$memory_pointer]['software_default']], 
                         'auto_eval_mode_enabled'  => $R_resp[$memory_pointer]['auto_eval_mode_enabled'][$R_resp[$memory_pointer]['software_default']], 
                         'auto_obj_mode_enabled'   => $R_resp[$memory_pointer]['auto_obj_mode_enabled'][$R_resp[$memory_pointer]['software_default']], 
                         'namespace'               => $R_resp[$memory_pointer]['namespace'], 
                         'resource_loading_arch'   => $R_resp[$memory_pointer]['loading_arch'][$R_resp[$memory_pointer]['software_default']], 
                         'resource_eval_ttl'       => $R_resp[$memory_pointer]['eval_ttl'][$R_resp[$memory_pointer]['software_default']], 
                         'resource_type'           => $R_resp[$memory_pointer]['resource_type'], 
                         'resource_name'           => $R_resp[$memory_pointer]['resource_name'], 
                         'software_version'        => $R_resp[$memory_pointer]['software_default'], 
                         'resource_title'          => $R_resp[$memory_pointer]['title'], 
                         'software_company'        => $R_resp[$memory_pointer]['software_company']['key'], 
                         'copyright'               => $R_resp[$memory_pointer]['copyright'][$R_resp[$memory_pointer]['software_default']], 
                         'license_key'             => $R_resp[$memory_pointer]['license']['key'][$R_resp[$memory_pointer]['software_default']]);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * SOURCE :: NUSOAP.PHP - http://sourceforge.net/projects/nusoap/
                 *
                 * Get the time 
                 * in ODBC canonical 
                 * form with microseconds. 
                 *
                 * E.g., '2024-07-15 00:56:13.653016'
                 *
                 */
                $tod  = \gettimeofday();
                $sec  = $tod['sec'];
                $usec = $tod['usec'];
                $ts   = \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                        '.' . 
                        \sprintf('%06d', $usec);

                switch($R_debug_mode_override){
                    case CRNRSTN_DEBUG_SYSLOG:

                        $syslog_prefix = 'R :: [' . $ts . '] [func ' . 
                                         __FUNCTION__ . '] [lnum ' . 
                                         __LINE__ . '] [rtime ' . 
                                         _R_wall_time() . 
                                         '] ';
                        \openlog(
                            $syslog_prefix, 
                            \LOG_CONS | 
                            \LOG_NDELAY | 
                            \LOG_NOWAIT | 
                            \LOG_PID | 
                            \LOG_PERROR, 
                            \LOG_SYSLOG);
                        \syslog(
                            \LOG_DEBUG, 
                            $clr_ssl_msg);
                        \closelog();

                    case CRNRSTN_SYSTEM_TEST:
                    case CRNRSTN_DEBUG_ON:
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Database Integrations Pending.
                         *
                         *
                         * 5 :: Sunday, May 17, 2026 @ 0754 hrs.
                         *
                         */

                        $syslog_prefix = 'R :: [' . $ts . '] [func ' . 
                                         __FUNCTION__ . 
                                         '] [lnum ' . 
                                         __LINE__ . '] [rtime ' . 
                                         _R_wall_time() . 
                                         '] ';

                        $message_str_elipse = '...';
                        if(\strlen($clr_ssl_msg) < 31){

                            $message_str_elipse = '';

                        }

                        $clr_ssl_msg = \trim(\substr($clr_ssl_msg, 0, 0));
                        $clr_ssl_msg = $clr_ssl_msg . $message_str_elipse;
                        $clr_ssl_msg = '[Database Integrations Pending] ' . 
                                       $clr_ssl_msg;
                        \openlog(
                            $syslog_prefix, 
                            \LOG_CONS | 
                            \LOG_NDELAY | 
                            \LOG_NOWAIT | 
                            \LOG_PID | 
                            \LOG_PERROR, 
                            \LOG_SYSLOG);
                        \syslog(
                            \LOG_DEBUG, 
                            $clr_ssl_msg);
                        \closelog();

                    break;
                    default:
                    case CRNRSTN_DEBUG_OFF:
                        // Silence is golden. 
                    break;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Do we load this class 
                 * resource definition 
                 * into memory? 
                 *
                 *
                 * 5 :: Monday, November 17, 2025 @ 0631 hrs.
                 *
                 */
                if(($tmp_load_resource !== false) && 
                    ((bool) $R_resp[$memory_pointer]['file_evaluate_enabled'] == true))
                {

                    if(!is_file($R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']])){

                        $clr_ssl_msg = 'File not found: ' . 
                                       $R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']] . 
                                       '.';
                        // 5 :: Satxxxxxxxxxxxxxxxxxxxxxxx
                        $msg_token = '34ce6ab1e1e9a461336cd13f715e7c2f' . 
                                     'xxxxxxxxxxxxxxxxxxxxxxx';
                        $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxx';
                        $token = array(
                                 'token'                   => $msg_token, 
                                 'token_generation_date'   => $token_generation_date, 
                                 'request_type'            => __FUNCTION__,
                                 'code'                    => 200, 
                                 'clr_ssl_msg'             => $clr_ssl_msg, 
                                 'memory_ptr'              => $memory_pointer, 
                                 'resource_ping_runtime'   => $R_resp[$memory_pointer]['runtime'], 
                                 'resource_ping_microtime' => $R_resp[$memory_pointer]['microtime'], 
                                 'file_evaluate_enabled'   => $R_resp[$memory_pointer]['file_evaluate_enabled'][$R_resp[$memory_pointer]['software_default']], 
                                 'auto_eval_mode_enabled'  => $R_resp[$memory_pointer]['auto_eval_mode_enabled'][$R_resp[$memory_pointer]['software_default']], 
                                 'auto_obj_mode_enabled'   => $R_resp[$memory_pointer]['auto_obj_mode_enabled'][$R_resp[$memory_pointer]['software_default']], 
                                 'namespace'               => $R_resp[$memory_pointer]['namespace'], 
                                 'resource_loading_arch'   => $R_resp[$memory_pointer]['loading_arch'][$R_resp[$memory_pointer]['software_default']], 
                                 'resource_eval_ttl'       => $R_resp[$memory_pointer]['eval_ttl'][$R_resp[$memory_pointer]['software_default']], 
                                 'resource_type'           => $R_resp[$memory_pointer]['resource_type'], 
                                 'resource_name'           => $R_resp[$memory_pointer]['resource_name'], 
                                 'software_version'        => $R_resp[$memory_pointer]['software_default'], 
                                 'resource_title'          => $R_resp[$memory_pointer]['title'], 
                                 'software_company'        => $R_resp[$memory_pointer]['software_company']['key'], 
                                 'copyright'               => $R_resp[$memory_pointer]['copyright'][$R_resp[$memory_pointer]['software_default']], 
                                 'license_key'             => $R_resp[$memory_pointer]['license']['key'][$R_resp[$memory_pointer]['software_default']]);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * SOURCE :: NUSOAP.PHP - http://sourceforge.net/projects/nusoap/
                         *
                         * Get the time 
                         * in ODBC canonical 
                         * form with microseconds. 
                         *
                         * E.g., '2024-07-15 00:56:13.653016'
                         *
                         */
                        $tod  = \gettimeofday();
                        $sec  = $tod['sec'];
                        $usec = $tod['usec'];
                        $ts   = \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                '.' . 
                                \sprintf('%06d', $usec);

                        switch($R_debug_mode_override){
                            case CRNRSTN_DEBUG_SYSLOG:

                                $syslog_prefix = 'R :: [' . $ts . '] [func ' . 
                                                 __FUNCTION__ . '] [lnum ' . 
                                                 __LINE__ . '] [rtime ' . 
                                                 _R_wall_time() . 
                                                 '] ';
                                \openlog(
                                    $syslog_prefix, 
                                    \LOG_CONS | 
                                    \LOG_NDELAY | 
                                    \LOG_NOWAIT | 
                                    \LOG_PID | 
                                    \LOG_PERROR, 
                                    \LOG_SYSLOG);
                                \syslog(
                                    \LOG_DEBUG, 
                                    $clr_ssl_msg);
                                \closelog();

                            case CRNRSTN_SYSTEM_TEST:
                            case CRNRSTN_DEBUG_ON:
                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Database Integrations Pending.
                                 *
                                 *
                                 * 5 :: Sunday, May 17, 2026 @ 0754 hrs.
                                 *
                                 */

                                $syslog_prefix = 'R :: [' . $ts . '] [func ' . 
                                                 __FUNCTION__ . 
                                                 '] [lnum ' . 
                                                 __LINE__ . '] [rtime ' . 
                                                 _R_wall_time() . 
                                                 '] ';

                                $message_str_elipse = '...';
                                if(\strlen($clr_ssl_msg) < 31){

                                    $message_str_elipse = '';

                                }

                                $clr_ssl_msg = \trim(\substr($clr_ssl_msg, 0, 0));
                                $clr_ssl_msg = $clr_ssl_msg . $message_str_elipse;
                                $clr_ssl_msg = '[Database Integrations Pending] ' . 
                                               $clr_ssl_msg;
                                \openlog(
                                    $syslog_prefix, 
                                    \LOG_CONS | 
                                    \LOG_NDELAY | 
                                    \LOG_NOWAIT | 
                                    \LOG_PID | 
                                    \LOG_PERROR, 
                                    \LOG_SYSLOG);
                                \syslog(
                                    \LOG_DEBUG, 
                                    $clr_ssl_msg);
                                \closelog();

                            break;
                            default:
                            case CRNRSTN_DEBUG_OFF:
                                // Silence is golden. 
                            break;

                        }

                        // 5 :: Thursday, July 30, 2026 @ 0122 hrs.
                        __NAMESPACE__ . '\\' . 
                        _R_server_response(
                            404, 
                            false, 
                            'No file found at path: ' . 
                            $R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']], 
                            $directory_shift,
                            $R_framework_directory);

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Evaluate the class 
                     * definition file for 
                     * The Lightbox Helper 
                     * by eVifweb® 
                     *
                     *
                     * 5
                     *
                     * Monday, November 17, 2025 @ 0612 hrs.
                     * 
                     */
                    switch($R_resp[$memory_pointer]['evaluation_protocol']){
                        case 'include':

                            include($R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']]);

                        break;
                        case 'include_once':

                            include_once($R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']]);

                        break;
                        case 'require_once':

                            require_once($R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']]);

                        break;
                        case 'require':
                        default:

                            require($R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']]);

                        break;

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Instantiate and return a 
                 * class object of 
                 * The Lightbox Helper 
                 * by eVifweb® 
                 *
                 * Class :: lightbox_helper_by_eVifweb
                 * __construct(
                 *     $application_directory = 'lightbox_helper', 
                 *     $R_framework_directory = '_R', 
                 *     $http_web_root = NULL, 
                 *     $images_directory = NULL, 
                 *     $thumbnail_directory = NULL, 
                 *     $lightbox_gallery_key = NULL, 
                 *     $gallery_file_type_mode = 'FORCE_PNG', 
                 *     $thumbnail_filename_prefix = NULL, 
                 *     $R_hmac_algorithm_override = 'sha256', 
                 *     $string_concat_delimiter_char = '|', 
                 *     $background_color_hex = '#FFF', 
                 *     $crnrstn_config_salt = NULL, 
                 *     $suppress_object_boot = false){}
                 *
                 *
                 * 5
                 *
                 * Sunday, September 1, 2024 @ 0306 hrs.
                 * Last Modified: Monday, August 10, 2026 @ 2050 hrs.
                 *
                 */
                return require($R_resp[$memory_pointer]['file_path']['new_obj_exe'][$R_resp[$memory_pointer]['software_default']]);

            break;
            case 'crnrstn':
            default:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CRNRSTN :: Lightsaber RoCEv2 
                 * SOAP Services Layer (CLR-SSL) 
                 * Boot-Up. 
                 *
                 * Prepare to boot-up 
                 * the framework. 
                 *
                 *
                 * 5
                 *
                 * Sunday, September 1, 2024 @ 0155 hrs.
                 *
                 */
                $tmp_resource_name                      = 'crnrstn';
                $tmp_file_name                          = 'crnrstn.class.php';
                $tmp_type_dir                           = 'object';
                $tmp_file_path                          = $root . $os_path_dir_separator_char . 
                                                          'class' . $os_path_dir_separator_char . 
                                                          'crnrstn' . $os_path_dir_separator_char . 
                                                          $tmp_file_name;
                $tmp_obj_exe_path                       = $root . $os_path_dir_separator_char . 
                                                          '_config' . $os_path_dir_separator_char . 
                                                          '_config.resource_registry' . $os_path_dir_separator_char . 
                                                          'resource' . $os_path_dir_separator_char . 
                                                          $tmp_type_dir  . '_return' . $os_path_dir_separator_char . 
                                                          $tmp_resource_name . $os_path_dir_separator_char . 
                                                          'crnrstn.' . $tmp_resource_name . 
                                                          '.fire_bolt_exe.php';
                $tmp_TITLE_TEXT                         = 'The CRNRSTN :: Lightsaber RoCEv2 ' .
                                                          'SOAP Services Layer (CLR-SSL) Class Object';
                $tmp_LICENSE_NAME_TEXT                  = 'MIT License';
                $tmp_LICENSE_URL                        = 'https://crnrstn.jony5.com/licensing/';
                $tmp_COPYRIGHT_TEXT                     = 'Copyright © 2012-' . \date('Y') . ' ' .
                                                          'eVifweb® development All Rights Reserved.';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * SOURCE :: NUSOAP.PHP - http://sourceforge.net/projects/nusoap/
                 *
                 * Get the time 
                 * in ODBC canonical 
                 * form with microseconds. 
                 *
                 * E.g., '2024-07-15 00:56:13.653016'
                 *
                 */
                $tod            = \gettimeofday();
                $sec            = $tod['sec'];
                $usec           = $tod['usec'];
                $ts             = \strftime('%Y-%m-%d %H:%M:%S', $sec) . '.' . 
                                  \sprintf('%06d', $usec);
                $memory_pointer = \hash('sha512', $tmp_resource_name . 
                                  $ts);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Initialize a CLR-SSL 
                 * Resource Registry 
                 * data container. 
                 *
                 * $R_resp = array();
                 *
                 *
                 * 5 :: Saturday, April 4, 2026 @ 1453 hrs.
                 *
                 */
                $R_resp                                             = array();
                $R_resp['clr_ssl_resource']['memory_pointer'][]     = $memory_pointer;
                $R_resp[$memory_pointer]['resource_name']           = $tmp_resource_name;
                $R_resp[$memory_pointer]['iso_lang_code']           = $tmp_iso_lang_code;
                $R_resp[$memory_pointer]['background_color_hex']    = $tmp_background_color_hex;
                $R_resp[$memory_pointer]['title']                   = $tmp_TITLE_TEXT;
                $R_resp[$memory_pointer]['software_company']['key'] = 'eVifweb® development';
                $R_resp[$memory_pointer]['software_default']        = $R_version_crnrstn;
                $R_resp[$memory_pointer]['license']['key']          = array('2.00.0001' => 'MIT');
                $R_resp[$memory_pointer]['license']['name']         = array('2.00.0001' => $tmp_LICENSE_NAME_TEXT);
                $R_resp[$memory_pointer]['license']['url']          = array('2.00.0001' => $tmp_LICENSE_URL);
                $R_resp[$memory_pointer]['copyright']               = array('2.00.0001' => $tmp_COPYRIGHT_TEXT);
                $R_resp[$memory_pointer]['microtime']               = $ts;
                $R_resp[$memory_pointer]['timestamp']               = \gettimeofday(); 
                $R_resp[$memory_pointer]['runtime']                 = _R_wall_time();

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * require 
                 * require_once
                 * include
                 * include_once
                 */
                $R_resp[$memory_pointer]['evaluation_protocol']     = array('2.00.0001' => 'require');

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * SOAP_ENDPOINT
                 * CLASS_DEFINITION
                 * FUNCTION_DEFINITION
                 * RUNTIME_EXECUTABLE
                 */
                $R_resp[$memory_pointer]['resource_type']           = 'CLASS_DEFINITION';

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * R_load_many_to_1_request...9876
                 * R_load_1_to_1_request......9877
                 * R_load_1_to_1_session......9878
                 * R_load_on_ttl_expire.......9879
                 */
                $R_resp[$memory_pointer]['loading_arch']                          = array('2.00.0001' => $int_flag['R_load_many_to_1_request']);
                $R_resp[$memory_pointer]['namespace']                             = __NAMESPACE__;
                $R_resp[$memory_pointer]['file_path']['definition']               = array('2.00.0001' => $tmp_file_path);
                $R_resp[$memory_pointer]['file_path']['new_obj_exe']              = array('2.00.0001' => $tmp_obj_exe_path);
                $R_resp[$memory_pointer]['file_name']                             = array('2.00.0001' => $tmp_file_name);
                $R_resp[$memory_pointer]['software_version']                      = array('2.00.0001');
                $R_resp[$memory_pointer]['is_active']                             = array('2.00.0001' => true);
                $R_resp[$memory_pointer]['input_parameter_count']                 = array('2.00.0001' => 6);
                $R_resp[$memory_pointer]['input_parameter_defaults']              = array('2.00.0001' => array(
                                                                                                         $application_directory, 
                                                                                                         $R_framework_directory, 
                                                                                                         $R_hmac_algorithm_override, 
                                                                                                         $R_debug_mode_override, 
                                                                                                         $PHPMailer_debug_mode_override, 
                                                                                                         $WordPress_debug_mode_override));
                $R_resp[$memory_pointer]['eval_ttl']                              = array('2.00.0001' => -1);
                $R_resp[$memory_pointer]['file_evaluate_enabled']                 = array('2.00.0001' => true);
                $R_resp[$memory_pointer]['auto_eval_mode_enabled']                = array('2.00.0001' => false);
                $R_resp[$memory_pointer]['auto_obj_mode_enabled']                 = array('2.00.0001' => false);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * view_source_safe = 0 for admin 
                 *                    only access. 
                 * -----
                 * This will grant a browser authenticated 
                 * PHP admin session read access to 
                 * source code. 
                 *
                 * Only an update to admin server 
                 * settings should change this. 
                 */
                $R_resp[$memory_pointer]['view_source_safe']                      = array('2.00.0001' => 0);
                $R_resp[$memory_pointer]['extends_class']                         = array();
                $R_resp[$memory_pointer]['dependencies']                          = array();
                $R_resp[$memory_pointer]['php_version']['removed']                = array();
                $R_resp[$memory_pointer]['php_version']['deprecated']             = array();
                $R_resp[$memory_pointer]['php_version']['supported']              = array();

                $clr_ssl_msg = 'Request received for ' . 
                               $R_syntax['resource_type'][$R_resp[$memory_pointer]['resource_type']] . ', ' . 
                               $R_resp[$memory_pointer]['resource_name'] . 
                               ' v' . 
                               $R_resp[$memory_pointer]['software_default'] . 
                               '.';
                // 5 :: Satxxxxxxxxxxxxxxxxxxxxxxx
                $msg_token = '34ce6ab1e1e9a461336cd13f715e7c2f' . 
                             'xxxxxxxxxxxxxxxxxxxxxxx';
                $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxx';
                $token = array(
                         'token'                   => $msg_token, 
                         'token_generation_date'   => $token_generation_date, 
                         'request_type'            => __FUNCTION__, 
                         'code'                    => 200, 
                         'clr_ssl_msg'             => $clr_ssl_msg, 
                         'memory_ptr'              => $memory_pointer, 
                         'resource_ping_runtime'   => $R_resp[$memory_pointer]['runtime'], 
                         'resource_ping_microtime' => $R_resp[$memory_pointer]['microtime'], 
                         'file_evaluate_enabled'   => $R_resp[$memory_pointer]['file_evaluate_enabled'][$R_resp[$memory_pointer]['software_default']], 
                         'auto_eval_mode_enabled'  => $R_resp[$memory_pointer]['auto_eval_mode_enabled'][$R_resp[$memory_pointer]['software_default']], 
                         'auto_obj_mode_enabled'   => $R_resp[$memory_pointer]['auto_obj_mode_enabled'][$R_resp[$memory_pointer]['software_default']], 
                         'namespace'               => $R_resp[$memory_pointer]['namespace'], 
                         'resource_loading_arch'   => $R_resp[$memory_pointer]['loading_arch'][$R_resp[$memory_pointer]['software_default']], 
                         'resource_eval_ttl'       => $R_resp[$memory_pointer]['eval_ttl'][$R_resp[$memory_pointer]['software_default']], 
                         'resource_type'           => $R_resp[$memory_pointer]['resource_type'], 
                         'resource_name'           => $R_resp[$memory_pointer]['resource_name'], 
                         'software_version'        => $R_resp[$memory_pointer]['software_default'], 
                         'resource_title'          => $R_resp[$memory_pointer]['title'], 
                         'software_company'        => $R_resp[$memory_pointer]['software_company']['key'], 
                         'copyright'               => $R_resp[$memory_pointer]['copyright'][$R_resp[$memory_pointer]['software_default']], 
                         'license_key'             => $R_resp[$memory_pointer]['license']['key'][$R_resp[$memory_pointer]['software_default']]);

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * SOURCE :: NUSOAP.PHP - http://sourceforge.net/projects/nusoap/
                 *
                 * Get the time 
                 * in ODBC canonical 
                 * form with microseconds. 
                 *
                 * E.g., '2024-07-15 00:56:13.653016'
                 *
                 */
                $tod  = \gettimeofday();
                $sec  = $tod['sec'];
                $usec = $tod['usec'];
                $ts   = \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                        '.' . 
                        \sprintf('%06d', $usec);

                switch($R_debug_mode_override){
                    case CRNRSTN_DEBUG_SYSLOG:

                        $syslog_prefix = 'R :: [' . $ts . '] [func ' . 
                                         __FUNCTION__ . '] [lnum ' . 
                                         __LINE__ . '] [rtime ' . 
                                         _R_wall_time() . 
                                         '] ';
                        \openlog(
                            $syslog_prefix, 
                            \LOG_CONS | 
                            \LOG_NDELAY | 
                            \LOG_NOWAIT | 
                            \LOG_PID | 
                            \LOG_PERROR, 
                            \LOG_SYSLOG);
                        \syslog(
                            \LOG_DEBUG, 
                            $clr_ssl_msg);
                        \closelog();

                    case CRNRSTN_SYSTEM_TEST:
                    case CRNRSTN_DEBUG_ON:
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Database Integrations Pending.
                         *
                         *
                         * 5 :: Sunday, May 17, 2026 @ 0754 hrs.
                         *
                         */

                        $syslog_prefix = 'R :: [' . $ts . '] [func ' . 
                                         __FUNCTION__ . 
                                         '] [lnum ' . 
                                         __LINE__ . '] [rtime ' . 
                                         _R_wall_time() . 
                                         '] ';

                        $message_str_elipse = '...';
                        if(\strlen($clr_ssl_msg) < 31){

                            $message_str_elipse = '';

                        }

                        $clr_ssl_msg = \trim(\substr($clr_ssl_msg, 0, 0));
                        $clr_ssl_msg = $clr_ssl_msg . $message_str_elipse;
                        $clr_ssl_msg = '[Database Integrations Pending] ' . 
                                       $clr_ssl_msg;
                        \openlog(
                            $syslog_prefix, 
                            \LOG_CONS | 
                            \LOG_NDELAY | 
                            \LOG_NOWAIT | 
                            \LOG_PID | 
                            \LOG_PERROR, 
                            \LOG_SYSLOG);
                        \syslog(
                            \LOG_DEBUG, 
                            $clr_ssl_msg);
                        \closelog();

                    break;
                    default:
                    case CRNRSTN_DEBUG_OFF:
                        // Silence is golden. 
                    break;

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Do we load this class 
                 * resource definition 
                 * into memory? 
                 *
                 *
                 * 5 :: Monday, November 17, 2025 @ 0632 hrs.
                 *
                 */
                if(($tmp_load_resource !== false) && 
                    ((bool) $R_resp[$memory_pointer]['file_evaluate_enabled'] == true))
                {

                    if(!is_file($R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']])){

                        $clr_ssl_msg = 'File not found: ' . 
                                       $R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']] . 
                                       '.';
                        // 5 :: Satxxxxxxxxxxxxxxxxxxxxxxx
                        $msg_token = '34ce6ab1e1e9a461336cd13f715e7c2f' . 
                                     'xxxxxxxxxxxxxxxxxxxxxxx';
                        $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxx';
                        $token = array(
                                 'token'                   => $msg_token, 
                                 'token_generation_date'   => $token_generation_date, 
                                 'request_type'            => __FUNCTION__, 
                                 'code'                    => 200, 
                                 'clr_ssl_msg'             => $clr_ssl_msg, 
                                 'memory_ptr'              => $memory_pointer, 
                                 'resource_ping_runtime'   => $R_resp[$memory_pointer]['runtime'], 
                                 'resource_ping_microtime' => $R_resp[$memory_pointer]['microtime'], 
                                 'file_evaluate_enabled'   => $R_resp[$memory_pointer]['file_evaluate_enabled'][$R_resp[$memory_pointer]['software_default']], 
                                 'auto_eval_mode_enabled'  => $R_resp[$memory_pointer]['auto_eval_mode_enabled'][$R_resp[$memory_pointer]['software_default']], 
                                 'auto_obj_mode_enabled'   => $R_resp[$memory_pointer]['auto_obj_mode_enabled'][$R_resp[$memory_pointer]['software_default']], 
                                 'namespace'               => $R_resp[$memory_pointer]['namespace'], 
                                 'resource_loading_arch'   => $R_resp[$memory_pointer]['loading_arch'][$R_resp[$memory_pointer]['software_default']], 
                                 'resource_eval_ttl'       => $R_resp[$memory_pointer]['eval_ttl'][$R_resp[$memory_pointer]['software_default']], 
                                 'resource_type'           => $R_resp[$memory_pointer]['resource_type'], 
                                 'resource_name'           => $R_resp[$memory_pointer]['resource_name'], 
                                 'software_version'        => $R_resp[$memory_pointer]['software_default'], 
                                 'resource_title'          => $R_resp[$memory_pointer]['title'], 
                                 'software_company'        => $R_resp[$memory_pointer]['software_company']['key'], 
                                 'copyright'               => $R_resp[$memory_pointer]['copyright'][$R_resp[$memory_pointer]['software_default']], 
                                 'license_key'             => $R_resp[$memory_pointer]['license']['key'][$R_resp[$memory_pointer]['software_default']]);

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * SOURCE :: NUSOAP.PHP - http://sourceforge.net/projects/nusoap/
                         *
                         * Get the time 
                         * in ODBC canonical 
                         * form with microseconds. 
                         *
                         * E.g., '2024-07-15 00:56:13.653016'
                         *
                         */
                        $tod  = \gettimeofday();
                        $sec  = $tod['sec'];
                        $usec = $tod['usec'];
                        $ts   = \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                                '.' . 
                                \sprintf('%06d', $usec);

                        switch($R_debug_mode_override){
                            case CRNRSTN_DEBUG_SYSLOG:

                                $syslog_prefix = 'R :: [' . $ts . '] [func ' . 
                                                 __FUNCTION__ . '] [lnum ' . 
                                                 __LINE__ . '] [rtime ' . 
                                                 _R_wall_time() . 
                                                 '] ';
                                \openlog(
                                    $syslog_prefix, 
                                    \LOG_CONS | 
                                    \LOG_NDELAY | 
                                    \LOG_NOWAIT | 
                                    \LOG_PID | 
                                    \LOG_PERROR, 
                                    \LOG_SYSLOG);
                                \syslog(
                                    \LOG_DEBUG, 
                                    $clr_ssl_msg);
                                \closelog();

                            case CRNRSTN_SYSTEM_TEST:
                            case CRNRSTN_DEBUG_ON:
                                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                                 * Database Integrations Pending.
                                 *
                                 *
                                 * 5 :: Sunday, May 17, 2026 @ 0754 hrs.
                                 *
                                 */

                                $syslog_prefix = 'R :: [' . $ts . '] [func ' . 
                                                 __FUNCTION__ . 
                                                 '] [lnum ' . 
                                                 __LINE__ . '] [rtime ' . 
                                                 _R_wall_time() . 
                                                 '] ';

                                $message_str_elipse = '...';
                                if(\strlen($clr_ssl_msg) < 31){

                                    $message_str_elipse = '';

                                }

                                $clr_ssl_msg = \trim(\substr($clr_ssl_msg, 0, 0));
                                $clr_ssl_msg = $clr_ssl_msg . $message_str_elipse;
                                $clr_ssl_msg = '[Database Integrations Pending] ' . 
                                               $clr_ssl_msg;
                                \openlog(
                                    $syslog_prefix, 
                                    \LOG_CONS | 
                                    \LOG_NDELAY | 
                                    \LOG_NOWAIT | 
                                    \LOG_PID | 
                                    \LOG_PERROR, 
                                    \LOG_SYSLOG);
                                \syslog(
                                    \LOG_DEBUG, 
                                    $clr_ssl_msg);
                                \closelog();

                            break;
                            default:
                            case CRNRSTN_DEBUG_OFF:
                                // Silence is golden. 
                            break;

                        }

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * 5 :: Thursday, July 30, 2026 @ "Oh" 123 hrs.
                         *
                         * You know what I mean, 
                         * "Oh, Oh, Oh"... 
                         * Yeah, you know what 
                         * I mean..."Oh"...yeah. ;) 
                         *
                         */
                        __NAMESPACE__ . '\\' . 
                        _R_server_response(
                            404, 
                            false, 
                            'No file found at path: ' . 
                            $R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']], 
                            $directory_shift,
                            $R_framework_directory);

                    }

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Evaluate the class 
                     * definition file for 
                     * The CRNRSTN :: Lightsaber 
                     * RoCEv2 SOAP Services 
                     * Layer (CLR-SSL). 
                     *
                     *
                     * 5
                     *
                     * Wednesday, August 28, 2024 @ 0114 hrs.
                     *
                     */
                    switch($R_resp[$memory_pointer]['evaluation_protocol']){
                        case 'include':

                            include($R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']]);

                        break;
                        case 'include_once':

                            include_once($R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']]);

                        break;
                        case 'require_once':

                            require_once($R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']]);

                        break;
                        case 'require':
                        default:

                            require($R_resp[$memory_pointer]['file_path']['definition'][$R_resp[$memory_pointer]['software_default']]);

                        break;

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Instantiate and return a 
                 * class object of 
                 * The CRNRSTN :: Lightsaber 
                 * RoCEv2 SOAP Services 
                 * Layer (CLR-SSL). 
                 *
                 * return __construct(
                 *            $application_directory = '',
                 *            $R_framework_directory = '_R',
                 *            $R_hmac_algorithm_override = NULL,
                 *            $R_debug_mode_override = NULL,
                 *            $PHPMailer_debug_mode_override = NULL, 
                 *            $WordPress_debug_mode_override = NULL, 
                 *            $R_odata = NULL){}
                 *
                 *
                 * 5
                 *
                 * Wednesday, August 28, 2024 @ 0117 hrs.
                 * Last Modified: Monday, August 10, 2026 @ 2051 hrs.
                 *
                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Edit: Edited the above code comment 
                 *       (lines 1-5) to: 
                 *       "Instantiate the CRNRSTN :: Lightsaber 
                 *       RoCEv2 SOAP Services Layer (CLR-SSL).". 
                 *       5 :: Monday, October 27, 2025 @ 0037 hrs.
                 *
                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Edit: Edited the code comment lines 1-5 to:
                 *       "Instantiate the CRNRSTN :: Lightsaber 
                 *       RoCEv2 SOAP Services Layer (CLR-SSL) 
                 *       class object.". 
                 *       5 :: Monday, November 17, 2025 @ 0608 hrs.
                 *
                 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Edit: Edited the code comment 
                 *       lines 1-5 to:
                 *       "Instantiate and return a 
                 *       class object of the CRNRSTN :: 
                 *       Lightsaber RoCEv2 SOAP 
                 *       Services Layer (CLR-SSL)". 
                 *       5 :: Sunay, May 17, 2026 @ 0914 hrs.
                 *
                 */
                return require($R_resp[$memory_pointer]['file_path']['new_obj_exe'][$R_resp[$memory_pointer]['software_default']]);

            break;

        }

    }

}

if(!\function_exists('_R_server_response')){

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return 
     * @access public
     *
     */
    function _R_server_response(
             $response_code = 200, 
             $return_text = false, 
             $message_html = '', 
             $directory_shift = '../',
             $R_framework_directory = '_R')
    {
        // 5 :: Thursday, July 30, 2026 @ 0029 hrs.

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Source: http://php.net/manual/en/function.http-response-code.php
         * Source of source: https://en.wikipedia.org/wiki/List_of_HTTP_status_codes
         *
         */
        $http_status_codes = array(100 => 'Continue', 
                                   101 => 'Switching Protocols', 
                                   102 => 'Processing', 
                                   200 => 'OK', 
                                   201 => 'Created', 
                                   202 => 'Accepted', 
                                   203 => 'Non-Authoritative Information', 
                                   204 => 'No Content', 
                                   205 => 'Reset Content', 
                                   206 => 'Partial Content', 
                                   207 => 'Multi-Status', 
                                   300 => 'Multiple Choices', 
                                   301 => 'Moved Permanently', 
                                   302 => 'Found', 
                                   303 => 'See Other', 
                                   304 => 'Not Modified', 
                                   305 => 'Use Proxy', 
                                   306 => '(Unused)', 
                                   307 => 'Temporary Redirect', 
                                   308 => 'Permanent Redirect', 
                                   400 => 'Bad Request', 
                                   401 => 'Unauthorized', 
                                   402 => 'Payment Required', 
                                   403 => 'Forbidden', 
                                   404 => 'Not Found', 
                                   405 => 'Method Not Allowed', 
                                   406 => 'Not Acceptable', 
                                   407 => 'Proxy Authentication Required', 
                                   408 => 'Request Timeout', 
                                   409 => 'Conflict', 
                                   410 => 'Gone', 
                                   411 => 'Length Required', 
                                   412 => 'Precondition Failed', 
                                   413 => 'Request Entity Too Large', 
                                   414 => 'Request-URI Too Long', 
                                   415 => 'Unsupported Media Type', 
                                   416 => 'Requested Range Not Satisfiable', 
                                   417 => 'Expectation Failed', 
                                   418 => 'I\'m a teapot', 
                                   419 => 'Authentication Timeout', 
                                   420 => 'Enhance Your Calm', 
                                   422 => 'Unprocessable Entity', 
                                   423 => 'Locked', 
                                   424 => 'Failed Dependency', 
                                   424 => 'Method Failure', 
                                   425 => 'Unordered Collection', 
                                   426 => 'Upgrade Required', 
                                   428 => 'Precondition Required', 
                                   429 => 'Too Many Requests', 
                                   431 => 'Request Header Fields Too Large', 
                                   444 => 'No Response', 
                                   449 => 'Retry With', 
                                   450 => 'Blocked by Windows Parental Controls', 
                                   451 => 'Unavailable For Legal Reasons', 
                                   494 => 'Request Header Too Large', 
                                   495 => 'Cert Error', 
                                   496 => 'No Cert', 
                                   497 => 'HTTP to HTTPS', 
                                   499 => 'Client Closed Request', 
                                   500 => 'Internal Server Error', 
                                   501 => 'Not Implemented', 
                                   502 => 'Bad Gateway', 
                                   503 => 'Service Unavailable', 
                                   504 => 'Gateway Timeout', 
                                   505 => 'HTTP Version Not Supported', 
                                   506 => 'Variant Also Negotiates', 
                                   507 => 'Insufficient Storage', 
                                   508 => 'Loop Detected', 
                                   509 => 'Bandwidth Limit Exceeded', 
                                   510 => 'Not Extended', 
                                   511 => 'Network Authentication Required', 
                                   598 => 'Network read timeout error', 
                                   599 => 'Network connect timeout error');

        if(!isset($http_status_codes[$response_code])) 
            $response_code = 200;

        $R_version   = '2.00.0001';
        $http_status = $http_status_codes[$response_code];

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * SOURCE :: NUSOAP.PHP - http://sourceforge.net/projects/nusoap/
         *
         * Get the time 
         * in ODBC canonical 
         * form with microseconds. 
         *
         * E.g., '2024-07-15 00:56:13.653016'
         *
         */
        $tod            = \gettimeofday();
        $sec            = $tod['sec'];
        $usec           = $tod['usec'];
        $micro_ts       = \strftime('%Y-%m-%d %H:%M:%S', $sec) . 
                          '.' . 
                          \sprintf('%06d', $usec);

        if(\strlen($message_html) > 0)
            $message_html = '<br><br>
                            <span style="font-weight:normal;">' . 
                            $message_html . '</span>';

        $R_resp = '<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="shortcut icon" type="image/x-icon" href="' . 
        $directory_shift . 
        $R_framework_directory . 
        '/ui/imgs/favicon/system/crnrstn' . 
        '/favicon.ico?crnrstn_0010111011=favicon.ico" />
        <title>' . 
            $response_code . ' ' . 
            $http_status . '</title>
    </head>
    <body style="background-color: #FFF; ' . 
            'width:100%; text-align: left; margin:' . 
            '0px auto;">
        <div style="display:block; clear:both; ' . 
                'height:0; line-height:0; overflow:hidden; ' . 
                'width:100%; font-size:1px; border-bottom: ' . 
                '2px solid #F90000;"></div>
        <div style="display:block; clear:both; ' . 
                'height:0; line-height:0; overflow:hidden; ' . 
                'width:100%; font-size:1px; border-bottom: ' . 
                '1px solid #DB1717;"></div>

        <div style=\'width:96%; margin:0 0 0 0; ' . 
                'padding:6px 2% 0 2%; color:#FFF; ' . 
                'font-family:"trebuchet MS", Verdana, ' . 
                'sans-serif;background-color:#BEBEBE; ' . 
                'height:30px; line-height: 28px;\'><h1 ' . 
                'style="font-size: 30px; overflow: ' . 
                'hidden; height:23px; padding-top:7px; ' . 
                'margin-top: 0;">Server Error</h1></div>
        <div style="display:block; clear:both;' . 
                ' height:0; line-height:0; overflow:hidden; ' . 
                'width:100%; font-size:1px; border-top: ' . 
                '2px solid #FFF;"></div>

        <div style="padding:100px 0 300px 100px; ' . 
                'float:left; font-family:arial; ' . 
                'font-weight:bold; font-size:11px;">' . 
                $response_code . ' ' . 
                $http_status . 
                $message_html . '</div>

        <div style="position:absolute; ' . 
                'padding:200px 0 0 10px; float:left;"><pre>
              ___           <span style="color:#F90000;">___</span>           ___           ___           ___                       __
             /  /\         <span style="color:#F90000;">/  /\</span>         /__/\         /  /\         /  /\          ___        /__/\
            /  /:/        <span style="color:#F90000;">/  /::\</span>        \  \:\       /  /::\       /  /:/_        /  /\       \  \:\          ___        ___
           /  /:/        <span style="color:#F90000;">/  /:/\:\</span>        \  \:\     /  /:/\:\     /  /:/ /\      /  /:/        \  \:\        /__/\      /__/\
          /  /:/  ___   <span style="color:#F90000;">/  /:/~/:/</span>    _____\__\:\   /  /:/~/:/    /  /:/ /::\    /  /:/     _____\__\:\       \__\/      \__\/
         /__/:/  /  /\ <span style="color:#F90000;">/__/:/ /:/___ /</span>__/::::::::\ /__/:/ /:/___ /__/:/ /:/\:\  /  /::\    /__/::::::::\
         \  \:\ /  /:/ <span style="color:#F90000;">\  \:\/:::::/</span> \  \:\~~\~~\/ \  \:\/:::::/ \  \:\/:/~/:/ /__/:/\:\   \  \:\~~\~~\/       ___        ___
          \  \:\  /:/   <span style="color:#F90000;">\  \::/~~~~</span>   \  \:\  ~~~   \  \::/~~~~   \  \::/ /:/  \__\/  \:\   \  \:\  ~~~       /__/\      /__/\
           \  \:\/:/     <span style="color:#F90000;">\  \:\</span>        \  \:\        \  \:\        \__\/ /:/        \  \:\   \  \:\           \__\/      \__\/
            \  \::/       <span style="color:#F90000;">\  \:\</span>        \  \:\        \  \:\         /__/:/          \__\/    \  \:\
             \__\/         <span style="color:#F90000;">\__\/</span>         \__\/         \__\/         \__\/                     \__\/



        <!--
        ASCII Artwork Generated by CRNRSTN :: Lightsaber v' .
        $R_version . '
        Artwork Title :: Isometric3
        Timestamp :: ' . 
        $micro_ts . '

        Creative Source :: http://patorjk.com/software/taag/#p=display&f=Isometric3&t=CRNRSTN%20%3A%3A
        Date :: Sunday, Jul 31, 2022 @ 0949 hrs. ::
        -->
        </pre></div>

        <div style="height:0; width:100%; ' . 
        'clear:both; display: block; ' . 
        'overflow: hidden;"></div>

    </body>
</html>';

        // Return string output?
        if($return_text !== false)
            return $R_resp;

        // Prepare response header profile.
        $R_resp_header_options   = array();
        $R_version               = '2.00.0001';
        $R_content_date          = \date('D, M j Y G:i:s T');
        $R_content_date_expire   = \date('D, M j Y G:i:s T', \strtotime('+ 7 days'));
        $R_content_date_lastmod  = \date('D, j M Y G:i:s T');
        $R_resp_header_options[] = 'Content-Language: en';
        $R_resp_header_options[] = 'Content-Type: text/html; charset=UTF-8';
        $R_resp_header_options[] = 'Cache-Control: max-age=604800';
        $R_resp_header_options[] = 'Date: ' . $R_content_date;
        $R_resp_header_options[] = 'Expires: ' . $R_content_date_expire;
        $R_resp_header_options[] = 'Last-Modified: ' . $R_content_date_lastmod;
        $R_resp_header_options[] = 'X-Powered-By: PHP v' . \PHP_MAJOR_VERSION .
            '.' . \PHP_MINOR_VERSION .
            '.' . \PHP_RELEASE_VERSION .
            ', CRNRSTN :: Lightsaber v' . $R_version;
        for($i = 0; $i < $R_resp_header_options; $i++)
            \header($R_resp_header_options[$i]);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * There are two special-case 
         * header calls. 
         *
         * The first is a header that 
         * starts with the string "HTTP/" 
         * (case is not significant), 
         * which will be used to figure 
         * out the HTTP status code 
         * to send. 
         *
         * For example, if you have 
         * configured Apache to use a 
         * PHP script to handle requests 
         * for missing files (using the 
         * ErrorDocument directive), 
         * you may want to make sure 
         * that your script generates 
         * the proper status code. 
         *
         */
        header($_SERVER['SERVER_PROTOCOL'] . 
            ' ' . 
            $response_code . 
            ' ' . 
            $http_status);

        echo $R_resp;
        exit;

    }

}

if(!\function_exists('_R_wall_time')){

    /**
     * R :: Content pending. 
     *
     * @param
     * @return 
     * @access public
     *
     */
    function _R_wall_time($sec_units = 'seconds')
    {
        // 5 :: Thursday, July 30, 2026 @ 0029 hrs.

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * SOURCE :: NUSOAP.PHP - http://sourceforge.net/projects/nusoap/
         *
         * Get the time 
         * in ODBC canonical 
         * form with microseconds. 
         *
         * E.g., '2024-07-15 00:56:13.653016'
         *
         */
        $tod         = \gettimeofday();
        $sec         = $tod['sec'];
        $usec        = $tod['usec'];
        $mtime_float = $sec . '.' . \sprintf('%06d', $usec);
        $delta_secs  = $mtime_float - $_SERVER['REQUEST_TIME_FLOAT'];
        $wall_time   = \substr($delta_secs, 0, -8);

        if(\strlen($sec_units) > 0) 
            return $wall_time . ' ' . $sec_units;

        return $wall_time;

    }

}

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * CLR-SSL framework 
 * path standardization 
 * to support a 401 HTTP 
 * response enabled script 
 * filename check against 
 * the running __FILE__. 
 *
 *
 * 5 :: Friday, July 10, 2026 @ 1956 hrs.
 *
 */
if(\stripos(PHP_OS, 'WIN') === 0)
    $os_path_dir_separator_char = '\\';
else
    $os_path_dir_separator_char = '/';

$R_path_patterns = $R_path_replacements = array();
switch($os_path_dir_separator_char){
    case '\\':
        // Windows® OS

        $R_path_patterns[0]     = '/';
        $R_path_replacements[0] = $os_path_dir_separator_char;

    break;
    default:
        // Linux OS

        $R_path_patterns[0]     = '\\';
        $R_path_replacements[0] = $os_path_dir_separator_char;

    break;

}

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Standardize the use of 
 * directory separator based 
 * on path replacement 
 * patterns specific to the 
 * server operating system 
 * to support a 401 HTTP 
 * response enabled script 
 * filename check against 
 * the running __FILE__. 
 *
 *
 * 5
 *
 */
$script_filename = \str_replace(
                   $R_path_patterns, 
                   $R_path_replacements, 
                   $_SERVER['SCRIPT_FILENAME']);
$script__file__  = \str_replace(
                   $R_path_patterns, 
                   $R_path_replacements, 
                   __FILE__);

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Standardize the use of the 
 * operating system specific 
 * directory separator by 
 * reducing all double slashes 
 * to single to support a 
 * 401 HTTP response enabled 
 * script filename check 
 * against the running __FILE__. 
 *
 *
 * 5
 *
 */
while(\strpos($script_filename, 
              $os_path_dir_separator_char . 
              $os_path_dir_separator_char) !== false)
    $script_filename = \str_replace($os_path_dir_separator_char . 
        $os_path_dir_separator_char, 
        $os_path_dir_separator_char, 
        $script_filename);
while(\strpos($script__file__, 
              $os_path_dir_separator_char . 
              $os_path_dir_separator_char) !== false)
    $script__file__ = \str_replace($os_path_dir_separator_char . 
        $os_path_dir_separator_char, 
        $os_path_dir_separator_char, 
        $script__file__);

// CLR-SSL Framework input defaults.
if(!isset($application_directory))
    $application_directory = '';

if(!isset($R_framework_directory))
    $R_framework_directory = '_R';

if(!isset($directory_shift))
    $directory_shift = '../';

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Access restriction check.
 * Maybe, this could be
 * a redirect.
 *
 *
 * 5 :: Wednesday, August 12, 2026 @ 1457 hrs.
 *
 */
if($script_filename == $script__file__)
    __NAMESPACE__ . '\\' . 
     _R_server_response(
         401,
         false,
         '',
         $directory_shift,
         $R_framework_directory);

if(!isset($R_resource_name))
    $R_resource_name = 'crnrstn';

if(!isset($R_hmac_algorithm_override))
    $R_hmac_algorithm_override = 'sha256';

if(!isset($R_debug_mode_override)) 
    $R_debug_mode_override = 0;

if(!isset($PHPMailer_debug_mode_override))
    $PHPMailer_debug_mode_override = 0;

if(!isset($WordPress_debug_mode_override))
    $WordPress_debug_mode_override = 0;

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Instantiate CRNRSTN ::
 *
 * The CRNRSTN :: Lightsaber 
 * RoCEv2 SOAP Services 
 * Layer (CLR-SSL). 
 *
 *
 * 5
 *
 * Monday, March 9, 2026 @ 0015 hrs.
 *
 */
return _R_resource_return(
             $application_directory, 
             $R_framework_directory, 
             $R_resource_name, 
             $R_hmac_algorithm_override, 
             $R_debug_mode_override, 
             $PHPMailer_debug_mode_override, 
             $WordPress_debug_mode_override);