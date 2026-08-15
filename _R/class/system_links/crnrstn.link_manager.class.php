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
 * CLASS DEFINITION :: crnrstn_link_manager
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: November 13, 2023 @ 1800 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer
 *                     System Uniform Resource
 *                     Location (URL) Manager
 * DESCRIPTION      :: In order to properly
 *                     support the CRNRSTN ::
 *                     Lightsaber SOAP Services
 *                     Layer with a rich and
 *                     helpful UI/UX experience,
 *                     we need a place to put
 *                     about five (5) literal
 *                     metric tons of system
 *                     links...literally.
 *
 *                     From this static URL
 *                     repository + meta the
 *                     CRNRSTN :: Lightsaber
 *                     user interaction prompts
 *                     will come with more
 *                     insightful error logs
 *                     and those latest tech
 *                     references to be found
 *                     in documentation...
 *
 *                     ...always accurate.
 *
 *
 *                     5
 *
 *                     Tuesday, July 22, 2024 @ 0105 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * @package CRNRSTN
 * @version 2.00.0001 CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer.
 * @author Jonathan '5' Harris <jharris@eVifweb.com>
 * @copyright Copyright © 2012-2026 eVifweb® development All Rights Reserved.
 * @license https://crnrstn.jony5.com/licensing/ MIT
 * @link https://crnrstn.jony5.com/ CRNRSTN :: Project Website.
 * @link https://twitter.com/CRNRSTN_v2_0_0 CRNRSTN :: on Twitter.
 * @link http://evifweb.jony5.com/ eVifweb :: Corporate Sponsor.
 * @return object 
 * @access public
 *
 */
class crnrstn_link_manager extends crnrstn 
{
    /* # # C # R # N # R # S # T # N # : : # # # #
     * Edit: We modified the crnrstn_link_manager 
     *       class object by applying an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Wednesday, July 22, 2026 @ 0758 hrs.
     *
     */
    
    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function __construct()
    {

    }

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
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function soap_data_initialization_cache_output(
             $iso_lang_code = 'en',
             $multi_lang_resource_key = NULL,
             $attribute = '',
             $HTML_data = '',
             $TEXT_data = '',
             $output_mode = 'MULTI-PART',
             $generate_version_synchronization_hash = false,
             $generate_search_algorithm_data = false,
             $css_style_ARRAY = NULL)
    {
        // 5 :: Wednesday, August 21, 2024 @ 0638 hrs.
        //
        // Edit :: Updated the CLR-SSL Link Manager
        //         soap_data_initialization_cache_output()
        //         method input parameters to honor CLR-SSL
        //         System Registry Content
        //         Library development changes.
        //         5 :: Sunday, November 9, 2025 @ 0256 hrs.

        //
        // Return initialized
        // CRNRSTN :: Lightsaber
        // SOAP Services Layer
        // content output.
        //
        //
        // 5
        //
        // Thursday, August 22, 2024 @ 0349 hrs.
        //
        // Edit :: Updated crnrstn method input
        //         parameters to honor CLR-SSL
        //         System Registry Content
        //         Library development.
        //         5 :: Sunday, November 9, 2025 @ 0237 hrs.
        return $this->oCRNRSTN->soap_data_initialization_cache_output(
            $iso_lang_code,
            $multi_lang_resource_key,
            $attribute,
            $HTML_data,
            $TEXT_data,
            $output_mode,
            $generate_version_synchronization_hash,
            $generate_search_algorithm_data,
            $css_style_ARRAY);

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function get_links(
                     $data_type, 
                     $url_data, 
                     $unit_test, 
                     $to_plaid)
    {

        //
        // WHAT COULD PASS THROUGH HERE AND BEG TO ARRIVE
        // AT A LINK? WELL...IF IT IS NOT AN ARRAY...
        /*
        [CRNRSTN_STRING]
            CRNRSTN :: PLAID SYSTEM UGC SALT => THE RELEVANT
            RESOURCE [CSS, JS, PNG, JPG, ICON, MAP] URL PER CRNRSTN ::
            CONFIGURATION ON THE SERVER.
        [CRNRSTN_INTEGER]
            CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
            CSS FRAMEWORK RESOURCE URLS.
        [CRNRSTN_INTEGER]
            CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
            (BUT ONLY WHAT IS PAGE LOADED) CSS FRAMEWORK RESOURCE URLS.
        [CRNRSTN_INTEGER]
            CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
             JS FRAMEWORK RESOURCE URLS.
        [CRNRSTN_INTEGER]
            CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
            (BUT ONLY WHAT IS PAGE LOADED) JS FRAMEWORK RESOURCE URLS.
        [CRNRSTN_STRING]
            CRNRSTN :: SYSTEM METHOD NAME (STRING) => DEEP
            LINK TO DOCUMENTATION.
        [CRNRSTN_STRING]
            PHP NATIVE METHOD NAME (STRING) => DEEP LINK TO
            PHP.NET DOCUMENTATION.

        */

        $tmp_output_ARRAY = array();

        error_log(__LINE__ . ' link mgr data_type[' . strval($data_type) . ']. url_data[' . strval($url_data) . ']. unit_test[' . strval($unit_test) . ']. to_plaid[' . strval($to_plaid) . '].');
        die();

        return $tmp_output_ARRAY;

    }

    /**
     * R :: Content pending.
     *
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function get_link_data(
             $data_type, 
             $url, 
             $unit_test = false, 
             $to_plaid = false)
    {

        $tmp_url       = '';
        $tmp_url_ARRAY = array();

        error_log('[lnum ' . __LINE__ . '] ' . __METHOD__ . ' $link_url[' . 
        print_r($to_plaid, true) . ']. data_type[' . print_r($data_type, true) . ']. url[' . 
        print_r($url, true) . ']. to_plaid[' . print_r($to_plaid, true) . '].');

        //
        // SKIP ALL LOGIC IF
        // $to_plaid = TRUE,
        // AND GO STRAIGHT TO
        // CRNRSTN :: SYSTEM
        // LINK META RETURN.
        //
        //
        // 5 :: Sunday, July 7, 2024 @ 0636 hrs.
        if(!($to_plaid !== false)){

            error_log('[lnum ' . __LINE__ . '] ' . __METHOD__ . ' $link_url[' . 
            print_r($to_plaid, true) . ']. data_type[' . print_r($data_type, true) . ']. url[' . 
            print_r($url, true) . ']. to_plaid[' . print_r($to_plaid, true) . '].');

            //
            // PLEASE NOTE THAT...
            // The CRNRSTN :: Lightsaber RoCEv2 SOAP 
            // Services Layer MIGHT NOT BE INSTANTIATED
            // AT THIS TIME. LET'S USE "BOOLEAN SWITCH"
            // LOGIC ON IF WE DO OR DO NOT
            // HAVE CRNRSTN ::
            switch(get_class($this->oCRNRSTN)){
                case 'crnrstn':

                    error_log('[lnum ' . __LINE__ . '] ' . __METHOD__ . ' $link_url[' . 
                    print_r($to_plaid, true) . ']. data_type[' . print_r($data_type, true) . ']. url[' . 
                    print_r($url, true) . ']. to_plaid[' . print_r($to_plaid, true) . '].');

                    //
                    // MUST BE ARRAY.
                    // ALSO, PLEASE DO NOT BY-PASS MULTI-CHANNEL
                    // BYTE RESTRICTIONS; THEREFORE, WE SHOULD
                    // USE THE CRNRSTN :: DECOUPLED DATA OBJECT
                    // FOR ALL PROPER SYSTEM DATA. THE CASE IN
                    // POINT, HERE WOULD BE THE PHP.NET URLS WITH
                    // ALL ASSOCIATED META SUPPORTING:
                    //  - PHP.INI PARAMETER INPUT DATA TYPE VALIDATION
                    //    THROUGH THE USE OF $oCRNRSTN->config_ini_set(),
                    //    $oCRNRSTN->ini_set(), AND $oCRNRSTN->ini_get().
                    //  - ENRICHMENT OF INPUT VALIDATION ERROR MESSAGING,
                    //  - AND THE ABSTRACTION OF CUSTTOM SETTINGS INTO
                    //    RUNTIME INTILIZRTAIONC PROIFLES
                    //    PHP.INI PROFILES WITHIN THE ADMINISTRATIVE
                    //    MANAGEMENT SECTION OF CRNRSTN :: Lightsaber.
                    $tmp_data_type_ARRAY = $this->oCRNRSTN->gettype($url, CRNRSTN_ARRAY);
                    switch($tmp_data_type_ARRAY[CRNRSTN_INTEGER]){
                        case CRNRSTN_INT:
                        case CRNRSTN_INTEGER:

                            /*
                            //
                            // WHAT COULD PASS THROUGH HERE AND BEG TO ARRIVE
                            // AT A LINK? WELL...IF IT IS NOT AN ARRAY...
                            [CRNRSTN_INTEGER]
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                CSS FRAMEWORK RESOURCE URLS.
                            [CRNRSTN_INTEGER]
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                (BUT ONLY WHAT IS PAGE LOADED) CSS FRAMEWORK
                                RESOURCE URLS.
                            [CRNRSTN_INTEGER]
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                 JS FRAMEWORK RESOURCE URLS.
                            [CRNRSTN_INTEGER]
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                (BUT ONLY WHAT IS PAGE LOADED) JS FRAMEWORK
                                RESOURCE URLS.

                            */

                            $tmp_int = $url;

                            //
                            // BUILD AN ARRAY OF CRNRSTN :: SYSTEM LINKS
                            // WHICH SAID ARRAY IS OUTPUT RELATED TO THE
                            // PROVIDED CRNRSTN :: SYSTEM
                            // CRNRSTN_INTEGER INTEGER CONSTANT.
                            $tmp_output_ARRAY[] = $this->get_links($tmp_data_type_ARRAY[CRNRSTN_INTEGER], $tmp_int, $unit_test, $to_plaid);
                            // return $tmp_output_ARRAY; // IS AT THE END OF THIS METHOD.

                            //
                            // RETURN LINK
                            // PROFILE ARRAY.
                            return $tmp_output_ARRAY;

                        break;
                        case CRNRSTN_STRING:

                            /*
                            //
                            // WHAT COULD PASS THROUGH HERE AND BEG TO ARRIVE
                            // AT A LINK? WELL...IF IT IS NOT AN ARRAY...
                            [CRNRSTN_STRING]
                                CRNRSTN :: PLAID SYSTEM UGC SALT => THE RELEVANT
                                RESOURCE [CSS, JS, PNG, JPG, ICON, MAP] URL PER CRNRSTN ::
                                CONFIGURATION ON THE SERVER.
                            [CRNRSTN_STRING]
                                CRNRSTN :: SYSTEM METHOD NAME (STRING) => DEEP
                                LINK TO DOCUMENTATION.
                            [CRNRSTN_STRING]
                                PHP NATIVE METHOD NAME (STRING) => DEEP LINK TO
                                PHP.NET DOCUMENTATION.

                            */
                            $tmp_string = $url;

                            //
                            // BUILD AN ARRAY OF CRNRSTN :: SYSTEM LINKS
                            // WHICH SAID ARRAY IS OUTPUT RELATED TO THE
                            // PROVIDED URL OR CRNRSTN :: SYSTEM
                            // CRNRSTN_STRING REPRESENTATION OF A
                            // CRNRSTN_INTEGER INTEGER CONSTANT.
                            $tmp_output_ARRAY[] = $this->get_links($tmp_data_type_ARRAY[CRNRSTN_INTEGER], $tmp_string, $unit_test, $to_plaid);
                            // return $tmp_output_ARRAY; // IS AT THE END OF THIS METHOD.

                            //
                            // RETURN LINK
                            // PROFILE ARRAY.
                            return $tmp_output_ARRAY;

                        break;
                        case CRNRSTN_ARRAY:

                            //
                            // THIS COULD BE AN ARRAY OF MIXED DATA
                            // TYPE [CRNRSTN_STRING, CRNRSTN_INTEGER].
                            //
                            // WHAT COULD PASS THROUGH HERE AND BEG TO ARRIVE
                            // AT A LINK? WELL...IF IT IS NOT AN ARRAY...
                            /*
                            [CRNRSTN_STRING]
                                CRNRSTN :: PLAID SYSTEM UGC SALT => THE RELEVANT
                                RESOURCE [CSS, JS, PNG, JPG, ICON, MAP] URL PER CRNRSTN ::
                                CONFIGURATION ON THE SERVER.
                            [CRNRSTN_INTEGER]
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                CSS FRAMEWORK RESOURCE URLS.
                            [CRNRSTN_INTEGER]
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                (BUT ONLY WHAT IS PAGE LOADED) CSS FRAMEWORK RESOURCE URLS.
                            [CRNRSTN_INTEGER]
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                 JS FRAMEWORK RESOURCE URLS.
                            [CRNRSTN_INTEGER]
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                (BUT ONLY WHAT IS PAGE LOADED) JS FRAMEWORK RESOURCE URLS.
                            [CRNRSTN_STRING]
                                CRNRSTN :: SYSTEM METHOD NAME (STRING) => DEEP
                                LINK TO DOCUMENTATION.
                            [CRNRSTN_STRING]
                                PHP NATIVE METHOD NAME (STRING) => DEEP LINK TO
                                PHP.NET DOCUMENTATION.

                            */

                            foreach($url as $index => $link_url){

                                //
                                // DEEP DIVE TO 
                                // LINK GENERATION NOW.
                                $to_plaid = true;

                                error_log('[lnum ' . __LINE__ . '] ' . __METHOD__ . ' $link_url[' . $link_url . ']. $tmp_data_type_ARRAY[CRNRSTN_INTEGER][' . print_r($tmp_data_type_ARRAY[CRNRSTN_INTEGER], true) . ']');

                                //
                                // BUILD CRNRSTN :: SYSTEM LINK OUTPUT DATA ARRAY.
                                $tmp_output_ARRAY[] = $this->get_link_data($tmp_data_type_ARRAY[CRNRSTN_INTEGER], $link_url, $unit_test, $to_plaid);
                                // return $tmp_output_ARRAY; // IS AT THE END OF THIS METHOD.

                            }

                            //
                            // RETURN LINK
                            // PROFILE ARRAY.
                            return $tmp_output_ARRAY;

                        break;

                    }

                break;
                default:

                    //
                    // WE SHALL SATISFY THIS REQUEST
                    // WITHOUT THE USE OF THE
                    // CRNRSTN :: Lightsaber RoCEv2 SOAP
                    // Services Layer.
                    $tmp_data_type_ARRAY = $this->oCRNRSTN->gettype($url, 'CRNRSTN_ARRAY');

                    /*
                    [Sun Jul 07 07:05:22.143009 2024] [:error] [pid 54605] [client 172.16.225.1:53510] [lnum 307] 
                    crnrstn_link_manager::get_link_data 

                    $tmp_data_type_ARRAY[CRNRSTN_INTEGER][14].

                    $tmp_data_type_ARRAY[
                        Array\n(\n
                            [CRNRSTN_INTEGER]   => 14\n
                            [CRNRSTN_STRING]    => CRNRSTN_ARRAY\n
                            [PHP_NATIVE]        => array\n)\n]

                            data_type[CRNRSTN_ARRAY]. url[Array\n(\n
                                [0] => https://github.com/jony5/CRNRSTN-v2.00.0000-PRE-ALPHA-DEV-Lightsaber\n
                                [1] => https://crnrstn.jony5.com/\n
                                [2] => http://evifweb.jony5.com/\n)\n
                            ].

                    to_plaid[].

                    return array(
                        'string'                => array('CRNRSTN_INTEGER' => 7,   'CRNRSTN_STRING' => 'CRNRSTN_STRING',           'PHP_NATIVE' => 'string'),
                        'int'                   => array('CRNRSTN_INTEGER' => 8,   'CRNRSTN_STRING' => 'CRNRSTN_INT',              'PHP_NATIVE' => 'int'),
                        'integer'               => array('CRNRSTN_INTEGER' => 9,   'CRNRSTN_STRING' => 'CRNRSTN_INTEGER',          'PHP_NATIVE' => 'integer'),
                        'bool'                  => array('CRNRSTN_INTEGER' => 10,  'CRNRSTN_STRING' => 'CRNRSTN_BOOL',             'PHP_NATIVE' => 'bool'),
                        'boolean'               => array('CRNRSTN_INTEGER' => 11,  'CRNRSTN_STRING' => 'CRNRSTN_BOOLEAN',          'PHP_NATIVE' => 'boolean'),
                        'float'                 => array('CRNRSTN_INTEGER' => 12,  'CRNRSTN_STRING' => 'CRNRSTN_FLOAT',            'PHP_NATIVE' => 'float'),
                        'double'                => array('CRNRSTN_INTEGER' => 13,  'CRNRSTN_STRING' => 'CRNRSTN_DOUBLE',           'PHP_NATIVE' => 'double'),
                        'array'                 => array('CRNRSTN_INTEGER' => 14,  'CRNRSTN_STRING' => 'CRNRSTN_ARRAY',            'PHP_NATIVE' => 'array'),
                        'object'                => array('CRNRSTN_INTEGER' => 15,  'CRNRSTN_STRING' => 'CRNRSTN_OBJECT',           'PHP_NATIVE' => 'object'),
                        'resource'              => array('CRNRSTN_INTEGER' => 16,  'CRNRSTN_STRING' => 'CRNRSTN_RESOURCE',         'PHP_NATIVE' => 'resource'),
                        'resource (closed)'     => array('CRNRSTN_INTEGER' => 17,  'CRNRSTN_STRING' => 'CRNRSTN_RESOURCE_CLOSED',  'PHP_NATIVE' => 'resource (closed)'),
                        'unknown type'          => array('CRNRSTN_INTEGER' => 18,  'CRNRSTN_STRING' => 'CRNRSTN_UNKNOWN_TYPE',     'PHP_NATIVE' => 'unknown type'),
                        'NULL'                  => array('CRNRSTN_INTEGER' => 19,  'CRNRSTN_STRING' => 'CRNRSTN_NULL',             'PHP_NATIVE' => 'NULL')
                    );

                    */
                    switch($tmp_data_type_ARRAY['CRNRSTN_INTEGER']){
                        case 8:
                        case 9:
                        case 'int':
                        case 'integer':
                        case 'CRNRSTN_INT':
                        case 'CRNRSTN_INTEGER':

                            /*
                            //
                            // WHAT COULD PASS THROUGH HERE AND BEG TO ARRIVE
                            // AT A LINK? WELL...IF IT IS NOT AN ARRAY...
                            ['CRNRSTN_INTEGER']
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                CSS FRAMEWORK RESOURCE URLS.
                            ['CRNRSTN_INTEGER']
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                (BUT ONLY WHAT IS PAGE LOADED) CSS FRAMEWORK
                                RESOURCE URLS.
                            ['CRNRSTN_INTEGER']
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                 JS FRAMEWORK RESOURCE URLS.
                            ['CRNRSTN_INTEGER']
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                (BUT ONLY WHAT IS PAGE LOADED) JS FRAMEWORK
                                RESOURCE URLS.

                            */

                            $tmp_int = $url;

                            //
                            // BUILD AN ARRAY OF CRNRSTN :: SYSTEM LINKS
                            // WHICH SAID ARRAY IS OUTPUT RELATED TO THE
                            // PROVIDED CRNRSTN :: SYSTEM
                            // CRNRSTN_INTEGER INTEGER CONSTANT.
                            $tmp_output_ARRAY[] = $this->get_links($tmp_data_type_ARRAY['CRNRSTN_INTEGER'], $tmp_int, $unit_test, $to_plaid);
                            // return $tmp_output_ARRAY; // IS AT THE END OF THIS METHOD.
                            error_log('[lnum ' . __LINE__ . '] ' . __METHOD__ . ' $tmp_data_type_ARRAY[CRNRSTN_INTEGER][' . 
                            print_r($tmp_data_type_ARRAY['CRNRSTN_INTEGER'], true) . ']. $tmp_data_type_ARRAY[' . 
                            print_r($tmp_data_type_ARRAY, true) . ']data_type[' . print_r($data_type, true) . ']. url[' . 
                            print_r($url, true) . ']. tmp_output_ARRAY[' . print_r($tmp_output_ARRAY, true) . '].');

                            //
                            // RETURN LINK
                            // PROFILE ARRAY.
                            return $tmp_output_ARRAY;

                        break;
                        case 7:
                        case 'string':
                        case 'CRNRSTN_STRING':

                            /*
                            //
                            // WHAT COULD PASS THROUGH HERE AND BEG TO ARRIVE
                            // AT A LINK? WELL...IF IT IS NOT AN ARRAY...
                            [CRNRSTN_STRING]
                                CRNRSTN :: PLAID SYSTEM UGC SALT => THE RELEVANT
                                RESOURCE [CSS, JS, PNG, JPG, ICON, MAP] URL PER CRNRSTN ::
                                CONFIGURATION ON THE SERVER.
                            [CRNRSTN_STRING]
                                CRNRSTN :: SYSTEM METHOD NAME (STRING) => DEEP
                                LINK TO DOCUMENTATION.
                            [CRNRSTN_STRING]
                                PHP NATIVE METHOD NAME (STRING) => DEEP LINK TO
                                PHP.NET DOCUMENTATION.

                            */
                            $tmp_string = $url;

                            //
                            // BUILD AN ARRAY OF CRNRSTN :: SYSTEM LINKS
                            // WHICH SAID ARRAY IS OUTPUT RELATED TO THE
                            // PROVIDED URL OR CRNRSTN :: SYSTEM
                            // CRNRSTN_STRING REPRESENTATION OF A
                            // CRNRSTN_INTEGER INTEGER CONSTANT.
                            $tmp_output_ARRAY[] = $this->get_links($tmp_data_type_ARRAY['CRNRSTN_INTEGER'], $tmp_string, $unit_test, $to_plaid);

                            // return $tmp_output_ARRAY;        // IS AT THE END OF THIS METHOD.
                            // error_log('[lnum ' . __LINE__ . '] ' . __METHOD__ . ' $tmp_data_type_ARRAY[CRNRSTN_INTEGER][' . 
                            // print_r($tmp_data_type_ARRAY['CRNRSTN_INTEGER'], true) . ']. $tmp_data_type_ARRAY[' . 
                            // print_r($tmp_data_type_ARRAY, true) . ']data_type[' . print_r($data_type, true) . ']. url[' . 
                            // print_r($url, true) . ']. tmp_output_ARRAY[' . print_r($tmp_output_ARRAY, true) . '].');

                            //
                            // RETURN LINK
                            // PROFILE ARRAY.
                            return $tmp_output_ARRAY;

                        break;
                        case 14:
                        case 'array':
                        case 'CRNRSTN_ARRAY':
                        default:

                            //
                            // THIS COULD BE AN ARRAY OF MIXED DATA
                            // TYPE [CRNRSTN_STRING, CRNRSTN_INTEGER].
                            //
                            // WHAT COULD PASS THROUGH HERE AND BEG TO ARRIVE
                            // AT A LINK? WELL...IF IT IS NOT AN ARRAY...
                            /*
                            ['CRNRSTN_STRING']
                                CRNRSTN :: PLAID SYSTEM UGC SALT => THE RELEVANT
                                RESOURCE [CSS, JS, PNG, JPG, ICON, MAP] URL PER CRNRSTN ::
                                CONFIGURATION ON THE SERVER.
                            ['CRNRSTN_INTEGER']
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                CSS FRAMEWORK RESOURCE URLS.
                            ['CRNRSTN_INTEGER']
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                (BUT ONLY WHAT IS PAGE LOADED) CSS FRAMEWORK RESOURCE URLS.
                            ['CRNRSTN_INTEGER']
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                 JS FRAMEWORK RESOURCE URLS.
                            ['CRNRSTN_INTEGER']
                                CRNRSTN :: SYSTEM INTEGER CONSANT => ALL RELEVANT
                                (BUT ONLY WHAT IS PAGE LOADED) JS FRAMEWORK RESOURCE URLS.
                            ['CRNRSTN_STRING']
                                CRNRSTN :: SYSTEM METHOD NAME (STRING) => DEEP
                                LINK TO DOCUMENTATION.
                            ['CRNRSTN_STRING']
                                PHP NATIVE METHOD NAME (STRING) => DEEP LINK TO
                                PHP.NET DOCUMENTATION.

                            */

                            foreach($url as $index => $link_url){

                                //
                                // DEEP DIVE TO
                                // LINK GENERATION NOW.
                                $to_plaid = true;

                                //
                                // BUILD CRNRSTN :: Lightsaber SOAP
                                // Services Layer SYSTEM LINK OUTPUT
                                // DATA ARRAY.
                                $tmp_output_ARRAY[] = $this->get_link_data($tmp_data_type_ARRAY['CRNRSTN_INTEGER'], $link_url, $unit_test, $to_plaid);

                            }

                            // error_log('[lnum ' . __LINE__ . '] ' . __METHOD__ . ' $tmp_data_type_ARRAY[CRNRSTN_INTEGER][' . 
                            // print_r($tmp_data_type_ARRAY['CRNRSTN_INTEGER'], true) . ']. $tmp_data_type_ARRAY[' . 
                            // print_r($tmp_data_type_ARRAY, true) . ']data_type[' . print_r($data_type, true) . ']. url[' . 
                            // print_r($url, true) . ']. tmp_output_ARRAY[' . print_r($tmp_output_ARRAY, true) . '].');

                            //
                            // RETURN LINK PROFILE ARRAY.
                            return $tmp_output_ARRAY;

                        break;

                    }

                break;

            }

        }

        //
        // Return link data
        // in support of...
        //
        // The Lightbox Helper
        // by eVifweb
        //
        // The CRNRSTN :: Lightsaber
        // SOAP Services Layer.
        //
        //
        // 5
        //
        // Monday, August 12, 2024 @ 0637 hrs.
        return _crnrstn_system_link_library($url, $this);

    }

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function __destruct()
    {

    }

}