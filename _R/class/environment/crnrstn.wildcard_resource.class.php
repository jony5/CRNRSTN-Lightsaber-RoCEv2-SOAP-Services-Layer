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
 * CLASS DEFINITION :: crnrstn_wildcard_resource
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: Monday, September 7, 2020 @ 1539 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer Wild
 *                     Card Resource (WCR) Open
 *                     Architecture Configuration
 *                     Data Storage Object
 * DESCRIPTION      :: The CRNRSTN :: Wild Card 
 *                     Resource (WCR) was the first 
 *                     fully self-contained and 
 *                     data type sensitive data 
 *                     storage solution implemented 
 *                     within CRNRSTN :: 
 *
 *                     After completion, the CRNRSTN ::
 *                     WCR was re-packaged and re-
 *                     released internally as version
 *                     1.0.0 of the CRNRSTN :: Decoupled
 *                     Data Object (DDO), a more
 *                     robust OOP data storage solution.
 *
 *                     Today, the CRNRSTN :: WCR stands
 *                     upon the CRNRSTN :: Lightsaber
 *                     Multi-Channel Decoupled Data
 *                     Object (MC-DDO) Services Layer.
 *
 *                     In other words, the 
 *                     CRNRSTN :: WCR is the mother of 
 *                     the CRNRSTN :: DDO and 
 *                     grandmother to the CRNRSTN :: 
 *                     Lightsaber MC-DDO. 
 *
 *                     The CRNRSTN :: Lightsaber SOAP 
 *                     Services Layer Multi-Channel 
 *                     Decoupled Data Object (MC-DDO) 
 *                     Services Layer channels are 
 *                     defined as follows:
 *                    
 *                       G :: HTTP $_GET Request
 *                               An OpenSSL encrypted 
 *                               JSON object appended 
 *                               to every system 
 *                               generated HTML link 
 *                               for system data 
 *                               payload carry.
 *                     
 *                       P :: HTTP $_POST Request
 *                               This is an OpenSSL 
 *                               encrypted JSON object 
 *                               <INPUT type="hidden">
 *                               to every system generated
 *                               HTML form for system data
 *                               payload carry.
 *                     
 *                       H :: PHP SERVER Session
 *                               This is an OpenSSL 
 *                               encrypted JSON object 
 *                               stored in the 
 *                               $_SESSION Super 
 *                               Global Array.
 *                     
 *                       S :: CRNRSTN :: SOAP Services 
 *                            Data Tunnel Layer 
 *                            Architecture (SSDTLA) Packet.
 *                               This is a SOAP wrapped 
 *                               Pseudo-SOAP Services
 *                               Data Tunnel Layer 
 *                               Architecture (CRNRSTN :: 
 *                               PSSDTLA) packet.
 *                     
 *                               The browser will talk 
 *                               like a server.
 *                     
 *                       J :: CRNRSTN :: Pseudo-SOAP 
 *                            Services Data Tunnel Layer 
 *                            Architecture (PSSDTLA) 
 *                            Packet.
 *                               An OpenSSL encrypted 
 *                               JSON object stored in the 
 *                               browser HTML as hidden 
 *                               form <INPUT> data.
 *                     
 *                       C :: CRNRSTN :: Carrier Pigeon (Cookie)
 *                               An avian of homing 
 *                               variant...or a browser 
 *                               cookie, within which is 
 *                               stored an OpenSSL 
 *                               encrypted JSON object.
 *                     
 *                       D :: Database (MySQLi Connection)
 *                               This is an OpenSSL 
 *                               encrypted JSON object 
 *                               stored in the database.
 *                     
 *                       R :: Runtime
 *                               The CRNRSTN :: MC-DDO 
 *                               system default.
 *                     
 *                       O :: Simple Object Access 
 *                            Protocol (NuSOAP 0.9.5, 
 *                            SOAP 1.1)
 *                     
 *                       F :: Server Local File System
 *                               This is an OpenSSL 
 *                               encrypted JSON object 
 *                               written to the 
 *                               file system.
 *
 *
 *                     The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer order
 *                     of operations for the
 *                     initialization of its
 *                     proprietary data transport
 *                     architectures, protocols,
 *                     and channels.
 *
 *                     GPHSJCDROF
 *
 *
 *                     5
 *
 *                     Tuesday, July 2, 2024 @ 0755 hrs.
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
class crnrstn_wildcard_resource extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_wildcard_resource 
     *       class object by adding an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Wednesday, March 12, 2026 @ 0540 hrs.
     *
     */

    protected $oDataTransportLayer;

    protected $env_key;
    protected $data_type_family;
    protected $data_authorization_profile;
    protected $attribute_key_ARRAY = array();
    protected $attribute_datatype_ARRAY = array();
    protected $attribute_set_flag_ARRAY = array();

    public $is_active;

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function __construct(
             $resource_key, 
             $data_authorization_profile = 'R_channel_RUNTIME', 
             $is_active = true)
    {

        $data_type_family = $resource_key;

        $this->is_active = $is_active;

        $this->data_type_family = $data_type_family;
        $this->data_authorization_profile = $data_authorization_profile;
        $this->oLog_output_ARRAY[] = $this->error_log('Instantiating a ' . 
                                            $data_type_family . 
                                            ' wild card resource for the ' . 
                                            $this->env_key . 
                                            ' environment.', 
                                            __LINE__, 
                                            __METHOD__, 
                                            __FILE__, 
                                            CRNRSTN_SETTINGS_CRNRSTN);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * CRNRSTN :: Lightsaber RoCEv2 
         * SOAP Services Layer (CLR-SSL) 
         * Multi-Channel Decoupled 
         * Data Object (MC-DDO) History: 
         * 
         * 
         * 5 :: Wednesday, May 24, 2023 @ 2356 hrs.
         *
         * Before CRNRSTN :: Lightsaber 
         * promoted the CRNRSTN :: Decoupled 
         * Data Object (DDO) to serve as 
         * the foundation for the CRNRSTN :: 
         * data storage layer in order to 
         * provide fast, efficient, and 
         * data type accurate storage and 
         * retrieval of application 
         * configuration data...
         *
         * The CRNRSTN :: DDO was first 
         * used here in the CRNRSTN :: 
         * Wild Card Resource (WCR) object 
         * to fix bugs that were showing 
         * up with certain kinds of data 
         * types that were showing up in 
         * configuration data such as null 
         * and strings that have a length 
         * of zero. 
         *
         * When the CRNRSTN :: DDO first 
         * came up in the CRNRSTN :: WCR, 
         * it was like, "WOW!" and "Amazing!". 
         *
         * The DDO was promoted to be *the* 
         * CRNRSTN :: data storage object for
         * all configuration within Lightsaber 
         * in Q1 of 2023. 
         *
         * In Q2 of 2023, the DDO was modified 
         * to hand the storage of the DDO
         * cache data to the Response Return 
         * Serialization Map Object for multi-
         * channel CRNRSTN :: PLAID integrations 
         * across the entire application. 
         *
         * The first ever CRNRSTN :: DDO 
         * object instantiation embedded within 
         * the CRNRSTN :: Wild Card Resource: 
         *
         * $this->oDataTransportLayer = new crnrstn_decoupled_data_object(
         *                                  self::$oCRNRSTN_n, 
         *                                  $this->resource_key, 
         *                                  'WCR_RESOURCE_KEY');
         * Where, self::$oCRNRSTN_n 
         * could be any of 
         * the following:
         * - $oCRNRSTN
         * - $oCRNRSTN_ENV
         * - $oCRNRSTN_USR
         * 
         * Last Modified:
         *
         */

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_resource_key()
    {

        return $this->data_type_family;

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
     * @return
     * @access public
     *
     */
    function add_attribute(
             $data_key, 
             $data_value, 
             $data_type_family = 'CRNRSTN::RESOURCE::WCR', 
             $index = NULL, 
             $data_authorization_profile = 'R_channel_RUNTIME', 
             $ttl = 60)
    {

        //
        // TODO :: TEST SUPPORT FOR N+1 
        //         WCR WITH SAME $data_type_family 
        //         (i.e. resource_key).
        if($this->is_active !== true){

            //
            // ABORT ALL WRITES, 
            // IF the WCR IS NOT ACTIVE. 
            //
            // ENVIRONMENTAL MISMATCH 
            // (FROM THE DETECTED 
            // ENVIRONMENT) WILL RESULT 
            // IN $is_active = FALSE. 
            return true;

        }

        if(!isset($data_type_family)){

            $data_type_family = $this->data_type_family;

        }

        $this->error_log('Receiving wild card ' . 
               'resource (WCR) data, ' . 
               $data_key . 
               ' with the data type family of ' . 
               $data_type_family . '.', 
               __LINE__, 
               __METHOD__, 
               __FILE__, 
               CRNRSTN_SETTINGS_CRNRSTN);

        $this->save_wildcard_resource($this);

        //
        // INPUT THE DATA VALUE 
        // INTO THE CRNRSTN :: 
        // MULTI-CHANNEL RRS 
        // MAP...SITUATION. 
        return $this->input_data_value(
                      $data_value, 
                      $data_key, 
                      $data_type_family . '::' . 
                      $this->data_type_family, 
                      $index, 
                      $data_authorization_profile, 
                      $ttl);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Here is the original 
         * Wild Card Resource (WCR) 
         * data storage architecture 
         * which preceded the 
         * CRNRSTN :: Lightsaber 
         * RoCEv2 SOAP Services 
         * Layer (CLR-SSL) MC-DDO: 
         *
         * WCR Data Input/Storage 
         * Method Definition:
         * public function add_attribute(
         *                 $attribute_value, 
         *                 $attribute_key)
         * {
         *    // Store data.
         * }
         *
         * Generate a WCR Storage 
         * Index Key: 
         * $attribute_key_hash = $this->hash($attribute_key);
         * 
         * WCR Data Input: 
         * $this->attribute_key_ARRAY[$this->env_key('hash')][$attribute_key_hash] = $attribute_value;
         * 
         * Set Flag: 
         * $this->attribute_set_flag_ARRAY[$this->env_key('hash')][$attribute_key_hash] = 1;
         * 
         * Last Modified: Thursday, March 12, 2026 @ 0620 hrs.
         * 
         * 
         * 5 :: CEO, CTO, Lead Full Stack Developer, 
         *      and as of Q3 in 2025, Chief Creative 
         *      here at eVifweb® development. 
         * 
         */

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function isset_WCR(
             $WCR_key, 
             $data_key, 
             $data_type_family = 'CRNRSTN::RESOURCE::WCR', 
             $channel = NULL, 
             $index = NULL)
    {

        //
        // CHECK DATA STORAGE 
        // LAYER FOR ISSET. 
        return $this->isset_resource('data_value', $data_key, $data_type_family . '::' . $WCR_key, $channel, $index);

        //
        // HERE IS THE ORIGINAL WILD CARD RESOURCE DATA STORAGE ARCHITECTURE WHICH
        // PRECEDED CRNRSTN :: Lightsaber.
//        $tmp_wc_key_hash = $this->hash($WCR_key);
//        $attribute_key_hash = $this->hash($attribute_key);
//
//        if(isset($this->attribute_set_flag_ARRAY[$tmp_wc_key_hash][$attribute_key_hash])){
//
//            return true;
//
//        }else{
//
//            return false;
//
//        }

    }

    //
    // USED IN CONTEXT 
    // OF "GET A VALUE".
    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function get_attribute(
             $wildCardKey, 
             $data_key, 
             $data_type_family = 'CRNRSTN::RESOURCE::WCR', 
             $index = NULL, 
             $channel = NULL)
    {

        return $this->get_config_cache(
                      'data_value', 
                      $data_key, 
                      $data_type_family . '::' . $wildCardKey, 
                      $index, 
                      $channel);

        //
        // Wednesday, May 24, 2023 @ 2356 hrs.
        //
        // HERE IS THE ORIGINAL WILD 
        // CARD RESOURCE DATA STORAGE 
        // ARCHITECTURE WHICH PRECEDED 
        // THE DDO BEHIND CRNRSTN :: Lightsaber.
        //
        // WHERE, public function get_attribute($wildCardKey, $attribute_key, $soap_transport = false){
//        //
//        // THROWING AN EXCEPTION HERE CAN CAUSE ETERNAL LOOP.
//        //try{
//        $tmp_wc_key_hash = $this->hash($wildCardKey);
//        $attribute_key_hash = $this->hash($attribute_key);
//
//        if($soap_transport == true){
//
//            //error_log(__LINE__ . ' env - [' . $wildCardKey . '] ' . $attribute_key);
//            $tmp_data_type = strtolower($this->get_data_type($wildCardKey, $attribute_key));
//            $tmp_data = $this->attribute_key_ARRAY[$tmp_wc_key_hash][$attribute_key_hash];
//            //error_log(__LINE__ . ' env - [' . $tmp_data_type . '] ' . $tmp_data);
//
//            switch($tmp_data_type){
//                case 'bool':
//                case 'boolean':
//
//                    if($tmp_data == true){
//
//                        error_log(__METHOD__ . ' ' . __LINE__ . ' TRACE THIS BOOLEAN REFACTOR [STRING ==> INT(1)] TO THE CRNRSTN :: SOAP Services LAYER...AND THEN DELETE THIS TRACE.');
//                        return 1;
//
//                    }else{
//
//                        error_log(__METHOD__ . ' ' . __LINE__ . ' TRACE THIS BOOLEAN REFACTOR [STRING ==> INT(0)] TO THE CRNRSTN :: SOAP Services LAYER...AND THEN DELETE THIS TRACE.');
//                        return 0;
//
//                    }
//
//                break;
//                default:
//
//                    return $tmp_data;
//
//                break;
//
//            }
//
//        }else{
//
//            /*
//            $env_key_hash = $this->hash($this->data_type_family);
//            $attribute_key_hash = $this->hash($attribute_key);
//
//            $this->oDataTransportLayer->add($attribute_value, $attribute_key);
//            $this->attribute_key_ARRAY[$env_key_hash][$attribute_key_hash] = $attribute_value;
//
//            */
//
//            //if(isset($this->attribute_key_ARRAY[$tmp_wc_key_hash][$attribute_key_hash])){
//
//                //
//                // Full conversion to DDO :: 5 :: Tuesday, April 20, 2021 1254 hrs.
//                // "Cause I don't send my music to no garbage DJs
//                // They get me." - KRS ONE
//                // SOURCE :: https://www.youtube.com/watch?v=fTmDeRsS9to
//                // TITLE :: Krs One - Mad Crew
//
//                return $this->oDataTransportLayer;
//
//            //}else{
//
//            //    error_log(__LINE__ .' env die() ['.$tmp_wc_key_hash.']['.$attribute_key_hash.'] attribute_key_ARRAY='.print_r($this->attribute_key_ARRAY, true));
//
//            //    die();
//
                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
//                //throw new Exception('An unknown wild card resource by attribute key, "'.$attribute_key.'" and by wild card key '.$wildCardKey.' has been requested.');
//            //    $this->error_log('An unknown wild card resource by wild card key '.$wildCardKey.' and by attribute key, "'.$attribute_key.'" has been requested.', __LINE__, __METHOD__, __FILE__, CRNRSTN_SETTINGS_CRNRSTN);
//
//           //     return false;
//
//            //}
//
//        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function get_data_type(
             $wildCardKey, 
             $attribute_key)
    {

        //
        // THROWING AN EXCEPTION 
        // HERE CAN CAUSE 
        // ETERNAL LOOP. 
        //try{

        $tmp_wc_key_hash    = $this->hash($wildCardKey);
        $attribute_key_hash = $this->hash($attribute_key);

        if(isset($this->attribute_key_ARRAY[$tmp_wc_key_hash][$attribute_key_hash])){

            if(isset($this->attribute_datatype_ARRAY[$tmp_wc_key_hash][$attribute_key_hash])){

                return $this->attribute_datatype_ARRAY[$tmp_wc_key_hash][$attribute_key_hash];

            }else{

                $tmp_data = $this->attribute_key_ARRAY[$tmp_wc_key_hash][$attribute_key_hash];

                $this->attribute_datatype_ARRAY[$tmp_wc_key_hash][$attribute_key_hash] = gettype($tmp_data);

                return $this->attribute_datatype_ARRAY[$tmp_wc_key_hash][$attribute_key_hash];

            }

        }else{

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * HOOOSTON, VE HAFF PROBLEM!
             * https://www.wired.com/2011/04/alt-text-spacecraft/
             *
             */
            //throw new Exception('An unknown wild card resource by attribute key, "' . $attribute_key . '" and by wild card key ' . $wildCardKey . ' has been requested.');
            $this->error_log('Data type for an unknown wild card resource by wild card key "' . $wildCardKey . '" and attribute key, "' . $attribute_key . '" has been requested.', __LINE__, __METHOD__, __FILE__, CRNRSTN_SETTINGS_CRNRSTN);

            return NULL;

        }

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