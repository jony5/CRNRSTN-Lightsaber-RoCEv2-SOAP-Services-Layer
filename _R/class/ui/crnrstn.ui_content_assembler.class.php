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
 * CLASS DEFINITION :: crnrstn_ui_content_assembler
 * CLASS VERSION    :: 2.00.0000
 * DATE             :: June 10, 2020 @ 2130 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            ::
 * DESCRIPTION      :: The User Interface (UI) page
 *                     content assembly controller
 *                     for the CRNRSTN :: Lightsaber
 *                     SOAP Services Layer.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * @package CRNRSTN
 * @version 2.00.0000 CRNRSTN :: Lightsaber RoCEv2 SOAP Services Layer.
 * @author Jonathan '5' Harris <jharris@eVifweb.com>
 * @copyright Copyright © 2012-2026 eVifweb® development All Rights Reserved.
 * @license https://crnrstn.jony5.com/licensing/ MIT
 * @link https://crnrstn.jony5.com/ CRNRSTN :: Project Website.
 * @link https://twitter.com/CRNRSTN_v2_0_0 CRNRSTN :: on Twitter.
 * @link http://evifweb.jony5.com/ eVifweb® :: Corporate Sponsor.
 * @return object 
 * @access public
 *
 */
class crnrstn_ui_content_assembler extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_ui_content_assembler 
     *       class object by applying an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Thursday, March 19, 2026 @ 1609 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed private static $oContentGen
     *       for the crnrstn_ui_content_assembler 
     *       class to protected $R_content_gen. 
     *       5 :: Thursday, March 19, 2026 @ 1616 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Changed visibility of 
     *       private static $page_path in the
     *       crnrstn_ui_content_assembler class
     *       to protected $page_path. 
     *       5 :: Thursday, March 19, 2026 @ 1622 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Changed the scope visibility 
     *       of protected $R_content_gen 
     *       and $page_path to private 
     *       static $R_content_gen. 
     *       5 :: Monday, June 29, 2026 @ 0504 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed crcINT() implementations 
     *       to crc_int32(). 
     *       5 :: Wednesday, July 1, 2026 @ 0536 hrs.
     *
     */

	private static $R_content_gen;
    //private static $R_content_src_ctrlr;

	private static $page_path;

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function __construct()
    {

        $tmp_page_path = $_SERVER['SCRIPT_NAME'];
        //$tmp_page_path = \str_replace('index.php', '', $tmp_page_path);

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * The CRNRSTN :: constructor has 
         * this class as a dependency. 
         *
         * We don't have config yet[now we do], 
         * which would allow us to 
         * bring URL path data from 
         * configuration into 
         * this constructor. 
         *
         * The next line is yet 
         * to be supported[we are testing 
         * CLR-SSL config integrations now] 
         * in the 
         * crnrstn_ui_content_assembler:: __construct(). 
         *
         *
         * 5
         * Last Modified: Monday, June 29, 2026 @ 0522 hrs.
         *
         */
        //$tmp_page_path = \str_replace($this->crnrstn_http_endpoint(), "", $tmp_page_path);
        $tmp_page_path = \str_replace($this->get_crnrstn('application_https'), '', $tmp_page_path);

        self::$page_path = $tmp_page_path;

	}


    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function sauce($resource)
    {

        if(!isset(self::$R_content_gen)){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return an instantiation 
             * of The CRNRSTN :: Lightsaber 
             * RoCEv2 SOAP Services Layer 
             * (CLR-SSL) Content 
             * Generator class object. 
             *
             * self::$oContentGen = new crnrstn_content_generator(
             *                          $this->oCRNRSTN, 
             *                          $this, 
             *                          $resource);
             *
             * self::$R_content_gen = $this->return_registered_resource(
             *                               'new',
             *                               'crnrstn_content_generator',
             *                               $this,
             *                               $resource);
             *
             *
             * Last Modified: Thursday, July 9, 2026 @ 0358 hrs.
             *
             */

            $spice_salt_mem_ptr = NULL;
            // 5 :: Thursday, July 9, 2026 @ 0353 hrs.
            $this->compound_ointment(
                   $spice_salt_mem_ptr,
                   'crnrstn_content_generator',
                   $this,
                   $resource);
            // 5 :: Thursday, July 9, 2026 @ 0354 hrs.
            $this->anoint(
                   'crnrstn_content_generator',
                   self::$R_content_gen);

        }

	    //
        // Initialize.
        return self::$R_content_gen->sauce($resource);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function initialize_page_content($module_key_override = NULL)
    {

	    $tmp_override = false;

        if(isset($module_key_override)){

            if(strlen($module_key_override) > 0){

                $tmp_override = true;

            }

        }

        if($tmp_override){

            //
            // Deep link override.
            $tmp_module_page_key = $module_key_override;

        }else{

            //
            // SSDTLA parameter extraction.
            $tmp_module_page_key = $this->get_crnrstn('crnrstn_interact_ui_link_text_click');

        }

        if(!isset(self::$R_content_gen)){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return an instantiation 
             * of The CRNRSTN :: Lightsaber 
             * RoCEv2 SOAP Services Layer 
             * (CLR-SSL) Content 
             * Generator class object. 
             *
             * self::$oContentGen = new crnrstn_content_generator(
             *                          $this->oCRNRSTN, 
             *                          $this, 
             *                          $tmp_module_page_key);
             *
             * self::$R_content_gen = $this->return_registered_resource(
             *                               'new',
             *                               'crnrstn_content_generator',
             *                               $this,
             *                               $tmp_module_page_key);
             *
             *
             * Last Modified: Thursday, July 9, 2026 @ 0403 hrs.
             *
             */

            $spice_salt_mem_ptr = NULL;
            // 5 :: Thursday, July 9, 2026 @ 0353 hrs.
            $this->compound_ointment(
                   $spice_salt_mem_ptr,
                   'crnrstn_content_generator',
                   $this,
                   $tmp_module_page_key);
            // 5 :: Thursday, July 9, 2026 @ 0354 hrs.
            $this->anoint(
                   'crnrstn_content_generator',
                   self::$R_content_gen);

        }

        self::$R_content_gen->load_page($tmp_module_page_key);

        return self::$R_content_gen->return_page_serial();

    }

/*
Removed: Monday, June 29, 2026 @ 0524 hrs.

    public function return_int_const_profile($resource_constant){

        $this->oCRNRSTN_CS_CONTROLLER->return_int_const_profile($resource_constant);

    }

 */

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_page_path()
    {

	    return self::$page_path;

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function index_page()
    {

	    if($this->get_resource('INDEX_PAGE_4SEARCH')){

            $tmp_page_serial = self::$R_content_gen->return_page_serial();

            //$tmp_page_content = self::$R_content_gen->return_page_html($tmp_page_serial, 'index');
            //$this->index_page_content();

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function index_page_content()
    {

        $oQueryProfileMgr = NULL;
	    //error_log('67 side bitch usr - ' . $page_content);
        //$oQueryProfileMgr           = new crnrstn_sql_profile_manager($this);

        $spice_salt_mem_ptr = NULL;
        // 5 :: Thursday, July 9, 2026 @ 0530 hrs.
        $this->compound_ointment(
               $spice_salt_mem_ptr,
               'crnrstn_sql_profile_manager',
               $this);
        // 5 :: Thursday, July 9, 2026 @ 0530 hrs.
        $this->anoint(
               'crnrstn_sql_profile_manager',
               $oQueryProfileMgr);

        $tmp_page_serial            = self::$R_content_gen->returnPageSerial();
        $tmp_page_content_ARRAY     = $this->return_page_html($tmp_page_serial, 'index');

        $tmp_page_content           = $tmp_page_content_ARRAY['page_content'];
        $tmp_search_result_display  = $tmp_page_content_ARRAY['page_result_display'];

        //error_log('73 side bitch usr - ' . $tmp_page_content);

        $tmp_chunk_title            = $tmp_page_content_ARRAY['page_title'];
        $tmp_page_content_len       = strlen($tmp_page_content);

        $ts                         = $this->return_query_date_time_stamp();

        /*
        search_content
        CONTENT_ID              char(70)
        PAGE_SERIAL             int(11) unsigned
        ISACTIVE                tinyint(1) default 1
        LANGCODE                char(2)
        CONTENT_PATH            varchar(200)
        PAGE_CONTENT_RAW        blob
        CONTENT_LENGTH_RAW      int(11) unsigned
        MODIFIED_BY_IP          varbinary(16)
        CREATED_BY_IP           varbinary(16)
        MODIFIED_BY_USERAGENT   varchar(500)
        CREATED_BY_USERAGENT    varchar(500)
        DATEMODIFIED            datetime
        DATECREATED             timestamp

        search_content_chunked
        CHUNK_ID                char(70)
        CONTENT_ID              FK :: char(70)
        PAGE_SERIAL             FK :: int(11) unsigned
        ISACTIVE                tinyint(1) default 1
        LANGCODE                char(2)
        ...

        INET6_ATON("' . $_SERVER['REMOTE_ADDR'] . '")

        */

        $oCRNRSTN_MySQLi = $this->return_crnrstn_mysqli();
        $mysqli          = $oCRNRSTN_MySQLi->return_conn_object();

        //
        // Clear chunked data.
        $query = 'DELETE FROM `search_content_chunked`
                  WHERE `search_content_chunked`.`PAGE_SERIAL`="' . $mysqli->real_escape_string($tmp_page_serial) . '" 
                  AND `search_content_chunked`.`PAGE_SERIAL_CRC`="' . $this->crc_int32($tmp_page_serial) . '";';

        $oQueryProfileMgr->loadQueryProfile($oCRNRSTN_MySQLi, 'INIT_PAGE_SEARCH', '!jesus_is_my_dear_lord!', 'DELETE_CHUNKED');
        $this->add_database_query($oQueryProfileMgr, 'DELETE_CHUNKED', $query);

        $query_select = 'SELECT `search_content`.`CONTENT_ID`,
                            `search_content`.`PAGE_SERIAL`,
                            `search_content`.`PAGE_SERIAL_CRC`,
                            `search_content`.`ISACTIVE`,
                            `search_content`.`LANGCODE`,
                            `search_content`.`CONTENT_PATH`,
                            `search_content`.`BOOLEAN_TEST`,
                            `search_content`.`PAGE_CONTENT_RAW`,
                            `search_content`.`CONTENT_LENGTH_RAW`,
                            `search_content`.`MODIFIED_BY_IP`,
                            `search_content`.`CREATED_BY_IP`,
                            `search_content`.`MODIFIED_BY_USERAGENT`,
                            `search_content`.`CREATED_BY_USERAGENT`,
                            `search_content`.`DATEMODIFIED`,
                            `search_content`.`DATECREATED`
                        FROM `search_content`
                        WHERE `search_content`.`PAGE_SERIAL`="' . $mysqli->real_escape_string($tmp_page_serial) . '"
                        AND `search_content`.`PAGE_SERIAL_CRC`="' . $this->crc_int32($tmp_page_serial) . '" LIMIT 1;';

        $oQueryProfileMgr->loadQueryProfile($oCRNRSTN_MySQLi, 'INIT_PAGE_SEARCH', '!jesus_is_my_dear_lord!', 'CHECK_PAGE_INDEX_EXISTS');
        $this->add_database_query($oQueryProfileMgr, 'CHECK_PAGE_INDEX_EXISTS', $query_select);

        //
        // Process all query 
        // to connections(s). 
        $this->process_query(true);

        $tmp_record_cnt = $this->return_record_count($oQueryProfileMgr, 'CHECK_PAGE_INDEX_EXISTS');

        //$this->closeConnection_MySQLi($mysqli);

        if($tmp_record_cnt > 0){

            $oCRNRSTN_MySQLi = $this->return_crnrstn_mysqli();
            $mysqli = $oCRNRSTN_MySQLi->return_conn_object();

            $tmp_content_id = $this->return_db_value($oQueryProfileMgr, 'CHECK_PAGE_INDEX_EXISTS', 'CONTENT_ID');

            $oQueryProfileMgr->loadQueryProfile($oCRNRSTN_MySQLi, 'UPDATE_SEARCH', '!jesus_is_my_dear_lord!!', 'SEARCH_CONTENT');

            //
            // Update.
            $query = 'UPDATE `search_content`
                     SET
                     `PAGE_CONTENT_RAW` = "' . $mysqli->real_escape_string($tmp_page_content) . '",
                     `BOOLEAN_TEST` = true,
                     `CONTENT_LENGTH_RAW` = "' . $tmp_page_content_len . '",
                     `MODIFIED_BY_IP` = "' . $this->client_ip() . '",
                     `MODIFIED_BY_USERAGENT` = "' . $_SERVER['HTTP_USER_AGENT'] . '",
                     `DATEMODIFIED` = "' . $ts . '"
                     WHERE `CONTENT_ID`= "' . $tmp_content_id . '"
                     AND `CONTENT_ID_CRC`= "' . $this->crc_int32($tmp_content_id) . '"
                     AND `PAGE_SERIAL` = "' . $tmp_page_serial . '" AND `PAGE_SERIAL_CRC` = "' .
                    $this->crc_int32($tmp_page_serial) . '";';

            $this->add_database_query($oQueryProfileMgr, 'SEARCH_CONTENT', $query);

            //
            // Remove links...etc.
            $tmp_page_content = strip_tags($tmp_page_content);
            $tmp_search_result_display = strip_tags($tmp_search_result_display);

            //
            // Break content
            // into chunks.
            $tmp_page_content = $this->str_sanitize($tmp_page_content, 'index');
            $tmp_search_result_display = $this->str_sanitize($tmp_search_result_display, 'index');

            $oChunkRestrictData = $this->chunkPageData($tmp_search_result_display, 200);
            $tmp_sresult_array['chunked_content'] = $oChunkRestrictData->return_linesArray();
            $tmp_search_result_display = $tmp_sresult_array['chunked_content'][0];

            //error_log('186 side bitch usr - content=>' . $tmp_page_content);
            $oChunkRestrictData = $this->chunkPageData($tmp_page_content, 1000);
            $tmp_chunked_array['chunked_content'] = $oChunkRestrictData->return_linesArray();

            $chunk_cnt = sizeof($tmp_chunked_array['chunked_content']);

            for($i = 0; $i < $chunk_cnt; $i++){

                $tmp_chunk_id         = $this->generate_new_key(70);
                $tmp_chunk_search     = strtolower($this->str_sanitize($tmp_chunked_array['chunked_content'][$i], 'search'));

                $tmp_chunk_len_search = strlen($tmp_chunk_search);
                $tmp_chunk_len_raw    = strlen($tmp_chunked_array['chunked_content'][$i]);
                //error_log('203 side bitch usr - chunk=' . $tmp_chunked_array[$i]);

                $query_chunked        = 'INSERT INTO `search_content_chunked`
                                        (`CHUNK_ID`, 
                                        `CONTENT_ID`, 
                                        `PAGE_SERIAL`, 
                                        `PAGE_SERIAL_CRC`, 
                                        `SEARCH_RESULT_DISPLAY`, 
                                        `PAGE_CONTENT_SEARCH`, 
                                        `PAGE_CONTENT_RAW`, 
                                        `PAGE_CONTENT_TITLE`, 
                                        `CONTENT_LENGTH_SEARCH`, 
                                        `CONTENT_LENGTH_RAW`, 
                                        `MODIFIED_BY_IP`, 
                                        `CREATED_BY_IP`, 
                                        `MODIFIED_BY_USERAGENT`, 
                                        `CREATED_BY_USERAGENT`, 
                                        `DATEMODIFIED`)
                                        VALUES
                                        ("' . $tmp_chunk_id . '", 
                                        "' . $tmp_content_id . '", 
                                        "' . $mysqli->real_escape_string($tmp_page_serial) . '", 
                                        "' . $this->crc_int32($tmp_page_serial) . '", 
                                        "' . $mysqli->real_escape_string($tmp_search_result_display) . '", 
                                        "' . $mysqli->real_escape_string($tmp_chunk_search) . '", 
                                        "' . $mysqli->real_escape_string($tmp_chunked_array['chunked_content'][$i]) . '", 
                                        "' . $mysqli->real_escape_string($tmp_chunk_title) . '",
                                        "' . $tmp_chunk_len_search . '",
                                        "' . $tmp_chunk_len_raw . '",
                                        "' . $this->client_ip() . '",
                                        "' . $this->client_ip() . '",
                                        "' . $_SERVER['HTTP_USER_AGENT'] . '",
                                        "' . $_SERVER['HTTP_USER_AGENT'] . '",
                                        "' . $ts . '");';

                $oQueryProfileMgr->loadQueryProfile($oCRNRSTN_MySQLi, 'UPDATE_SEARCH', '!jesus_is_my_dear_lord!!', 'NEW_SEARCH_CHUNK_PUSH_' . $i);
                $this->add_database_query($oQueryProfileMgr, 'NEW_SEARCH_CHUNK_PUSH_' . $i, $query_chunked);

            }

        }else{

            //$oCRNRSTN_MySQLi = $this->return_crnrstn_mysqli();
            //$mysqli = $oCRNRSTN_MySQLi->return_conn_object();

            //
            // Insert.
            $tmp_content_id = $this->generate_new_key(70);

            $query = 'INSERT INTO `search_content`
                    (`CONTENT_ID`,
                    `CONTENT_ID_CRC`,
                    `PAGE_SERIAL`,
                    `PAGE_SERIAL_CRC`,
                    `BOOLEAN_TEST`,
                    `CONTENT_PATH`,
                    `PAGE_CONTENT_RAW`,
                    `CONTENT_LENGTH_RAW`,
                    `MODIFIED_BY_IP`,
                    `CREATED_BY_IP`,
                    `MODIFIED_BY_USERAGENT`,
                    `CREATED_BY_USERAGENT`,
                    `DATEMODIFIED`)
                    VALUES
                    ("' . $tmp_content_id . '",
                    "' . $this->crc_int32($tmp_content_id) . '",
                    "' . $mysqli->real_escape_string($tmp_page_serial) . '",
                    "' . $this->crc_int32($tmp_page_serial) . '",
                    true,
                    "' . $mysqli->real_escape_string(self::$page_path) . '",
                    "' . $mysqli->real_escape_string($tmp_page_content) . '",
                    "' . $tmp_page_content_len . '",
                    "' . $this->client_ip() . '",
                    "' . $this->client_ip() . '",
                    "' . $_SERVER['HTTP_USER_AGENT'] . '",
                    "' . $_SERVER['HTTP_USER_AGENT'] . '",
                    "' . $ts . '");';

            $oQueryProfileMgr->loadQueryProfile($oCRNRSTN_MySQLi, 'NEW_SEARCH', '!jesus_is_my_dear_lord!!', 'NEW_SEARCH_PUSH');
            $this->add_database_query($oQueryProfileMgr, 'NEW_SEARCH_PUSH', $query);

            //
            // Remove links...etc.
            $tmp_page_content          = strip_tags($tmp_page_content);
            $tmp_search_result_display = strip_tags($tmp_search_result_display);

            //
            // Break content
            // into chunks.
            $tmp_page_content          = $this->str_sanitize($tmp_page_content, 'index');
            $tmp_search_result_display = $this->str_sanitize($tmp_search_result_display, 'index');

            $oChunkRestrictData                   = $this->chunkPageData($tmp_search_result_display, 200);
            $tmp_sresult_array['chunked_content'] = $oChunkRestrictData->return_linesArray();
            $tmp_search_result_display            = $tmp_sresult_array['chunked_content'][0];

            //
            // Break content
            // into chunks.
            //error_log('252 side bitch usr - content=' . $tmp_page_content);
            $oChunkRestrictData                   = $this->chunkPageData($tmp_page_content, 1000);
            $tmp_chunked_array['chunked_content'] = $oChunkRestrictData->return_linesArray();
            $chunk_cnt                            = sizeof($tmp_chunked_array['chunked_content']);

            for($i = 0; $i < $chunk_cnt; $i++){

                $tmp_chunk_id         = $this->generate_new_key(70);
                $tmp_chunk_search     = strtolower($this->str_sanitize($tmp_chunked_array['chunked_content'][$i], 'search'));
                $tmp_chunk_len_search = strlen($tmp_chunk_search);
                $tmp_chunk_len_raw    = strlen($tmp_chunked_array['chunked_content'][$i]);

                $query_chunked = 'INSERT INTO `search_content_chunked`
                    (`CHUNK_ID`,
                    `CONTENT_ID`,
                    `PAGE_SERIAL`,
                    `PAGE_SERIAL_CRC`,
                    `SEARCH_RESULT_DISPLAY`,
                    `PAGE_CONTENT_SEARCH`,
                    `PAGE_CONTENT_RAW`,
                    `PAGE_CONTENT_TITLE`,
                    `CONTENT_LENGTH_SEARCH`,
                    `CONTENT_LENGTH_RAW`,
                    `MODIFIED_BY_IP`,
                    `CREATED_BY_IP`,
                    `MODIFIED_BY_USERAGENT`,
                    `CREATED_BY_USERAGENT`,
                    `DATEMODIFIED`)
                    VALUES
                    ("' . $tmp_chunk_id . '",
                    "' . $tmp_content_id . '",
                    "' . $mysqli->real_escape_string($tmp_page_serial) . '",
                    "' . $this->crc_int32($tmp_page_serial) . '",
                    "' . $mysqli->real_escape_string($tmp_search_result_display) . '",
                    "' . $mysqli->real_escape_string($tmp_chunk_search) . '",
                    "' . $mysqli->real_escape_string($tmp_chunked_array['chunked_content'][$i]) . '",
                    "' . $mysqli->real_escape_string($tmp_chunk_title) . '",
                    "' . $tmp_chunk_len_search . '",
                    "' . $tmp_chunk_len_raw . '",
                    "' . $this->client_ip() . '",
                    "' . $this->client_ip() . '",
                    "' . $_SERVER['HTTP_USER_AGENT'] . '",
                    "' . $_SERVER['HTTP_USER_AGENT'] . '",
                    "' . $ts . '");';

                $oQueryProfileMgr->loadQueryProfile($oCRNRSTN_MySQLi, 'NEW_SEARCH', '!jesus_is_my_dear_lord!!', 'NEW_SEARCH_CHUNK_PUSH_' . $i);
                $this->add_database_query($oQueryProfileMgr, 'NEW_SEARCH_CHUNK_PUSH_' . $i, $query_chunked);

            }

        }

        //
        // Process all query 
        // to connections(s). 
        $this->process_query(true);

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
    function return_page_search_results_html(
             $serial, 
             $channel = 'desktop')
    {

        return self::$R_content_gen->return_page_search_results_html(
                                     $this, 
                                     $serial, 
                                     $channel);

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
    function return_search_result_html(
             $page_path, 
             $return_content, 
             $content_title, 
             $ugc_search_str)
    {

        $tmp_result_id  = $this->generate_new_key(10);
        $page_path      = ltrim($page_path, "/");
        $tmp_page_uri   = $this->crnrstn_http_endpoint() . $page_path;

        if($content_title != ''){

            $content_title = '<span class="s_result_title">' . $content_title .
            ' ::</span> ';

            $result_HTML = '<div id="sresult_' . $tmp_result_id .
            '" class="s_resultfull_wrapper" onmouseover="ajax_search_result(\'#sresult_' .
            $tmp_result_id . '\', \'mouseover\'); return false;" onmouseout="ajax_search_result(\'#sresult_' .
            $tmp_result_id . '\', \'mouseout\'); return false;" onclick="loadPage(\'' .
            $tmp_page_uri . '\'); return false;">' .
            $content_title.$return_content . '...</div>';

        }else{

            $result_HTML = '';

        }

        return $result_HTML;

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
    function return_search_result_mobile(
             $page_path, 
             $return_content, 
             $content_title, 
             $ugc_search_str)
    {

        $tmp_result_id  = $this->generate_new_key(10);
        $page_path      = ltrim($page_path, "/");
        $tmp_page_uri   = $this->crnrstn_http_endpoint() . $page_path;

        if($content_title != ''){

            $content_title = '<span class="s_result_title">' . $content_title . ' ::</span> ';

            //$result_HTML = '<div id="sresult_' . $tmp_result_id . '" class="s_resultfull_wrapper" onmouseover="ajax_search_result(\'#sresult_' . $tmp_result_id . '\', \'mouseover\'); return false;" onmouseout="ajax_search_result(\'#sresult_' . $tmp_result_id . '\', \'mouseout\'); return false;" onclick="loadPage(\'' . $tmp_page_uri.'\'); return false;">' . $content_title.$return_content.'...</div>';

            /*
            $result_HTML = '<div class="ui-corner-all custom-corners" onclick="loadPage(\'' . $tmp_page_uri . '\'); return false;">
              <div class="ui-bar ui-bar-a">
                <h3>' . $content_title . '</h3>
              </div>
              <div class="ui-body ui-body-a">
                <p>' . $return_content.'...</p>
              </div>
            </div>';

            */

            $result_HTML = '<div class="ui-body ui-body-a ui-corner-all" style="background-color:#FFF; border-bottom:0;" onclick="loadPage(\'' . $tmp_page_uri . '\'); return false;">
                <h3>' . $content_title . '</h3>
                      <p>' . $return_content . '...</p>
                      <div id="custom-border-radius_' . $tmp_result_id . '" class="ui-shadow-icon">
                            <a href="' . $tmp_page_uri . '" class="ui-btn ui-btn-icon-right ui-icon-carat-r ui-btn-icon-notext ui-shadow-icon" style="float: right;" data-ajax="false">Go</a>
                        </div>
                  </div>';

        }else{

            $result_HTML = '<div class="ui-body ui-body-a ui-corner-all" style="background-color:#FFF; border-bottom:0;" onclick="loadPage(\'' . $tmp_page_uri . '\'); return false;">
                  <p>' . $return_content.'...</p>
                  <div id="custom-border-radius_' . $tmp_result_id . '" class="ui-shadow-icon">
                        <a href="' . $tmp_page_uri . '" class="ui-btn ui-btn-icon-right ui-icon-carat-r ui-btn-icon-notext ui-shadow-icon" style="float: right;" data-ajax="false">Go</a>
                    </div>
              </div>';

        }

        return $result_HTML;

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
    function return_ajax_search_result_mobile(
             $ugc_search_str, 
             $page_path, 
             $return_content, 
             $content_title)
    {

        //$tmp_result_id    = $this->generate_new_key(10);
        $page_path          = ltrim($page_path, "/");
        $tmp_page_uri       = $this->crnrstn_http_endpoint() . $page_path;

        //if($content_title!=''){
        //     $content_title = '<span class="s_result_title">' . $content_title . ' ::</span> ';
        //}

        //$result_HTML = '<li id="sresult_' . $tmp_result_id . '" onmouseover="ajax_search_result(\'#sresult_' . $tmp_result_id . '\', \'mouseover\'); return false;" onmouseout="ajax_search_result(\'#sresult_' . $tmp_result_id . '\', \'mouseout\'); return false;" onclick="loadPage(\'' . $tmp_page_uri.'\'); return false;">' . $content_title.$return_content.'...</li>';

        $result_JSON = '{"kivotosname":"' . $content_title . '","kivotosuri":"' . $tmp_page_uri . '","kivotossearch":"' . $ugc_search_str . '"},';

        return $result_JSON;

    }

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
    function return_ajax_search_result_html(
             $page_path, 
             $return_content, 
             $content_title)
    {

	    $tmp_result_id  = $this->generate_new_key(10);
        $page_path      = ltrim($page_path, "/");
	    $tmp_page_uri   = $this->crnrstn_http_endpoint().$page_path;

	    if($content_title != ''){

            $content_title = '<span class="s_result_title">' . $content_title . ' ::</span> ';

	    }

        $result_HTML = '<li id="sresult_' .
        $tmp_result_id . '" onmouseover="ajax_search_result(\'#sresult_' .
        $tmp_result_id . '\', \'mouseover\'); return false;" onmouseout="ajax_search_result(\'#sresult_' .
        $tmp_result_id . '\', \'mouseout\'); return false;" onclick="loadPage(\'' .
        $tmp_page_uri . '\'); return false;">' .
        $content_title . $return_content . '...</li>';

	    return $result_HTML;

    }

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * SOURCE  :: https://www.php.net/manual/en/function.preg-split.php
     * COMMENT :: https://www.php.net/manual/en/function.preg-split.php#92632
     * AUTHOR  :: buzoganylaszlo at yahoo dot com
     *
     */
    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function process_quoted_search($ugc_str)
    {

        $words = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", 
                      $ugc_str, 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

        //error_log('399 side bitch usr - '.sizeof($words));

        return $words;

        /*
        $search_expression = "apple bear \"Tom Cruise\" or 'Mickey Mouse' another word";

        The result will be:
        Array
        (
            [0] => apple
            [1] => bear
            [2] => Tom Cruise
            [3] => or
            [4] => Mickey Mouse
            [5] => another
            [6] => word
        )

	     */

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function initialize_page($key)
    {

        try{

            switch($key){
                case 'PAGE':

                    //
                    // After testing...may
                    // need to make more
                    // robust if appending
                    // $_GET params to links.
                    $tmp_uri = $_SERVER['SCRIPT_NAME'];
                    $tmp_uri = str_replace('index.php', '', $tmp_uri);

                    self::$R_content_gen->page_uri = $tmp_uri;
//                    self::$R_content_gen->page_category_name = $category_name;
//                    self::$R_content_gen->page_subcategory_name = $subcategory_name;
//                    self::$R_content_gen->page_subsubcateg_name = $subsubcat_name;

                    //
                    // Generate unique
                    // handle for
                    // this data.
                    return self::$R_content_gen->initialize_page();

//                    self::$R_content_gen->page_category_name_ARRAY[self::$R_content_gen->page_serial] = $category_name;
//                    self::$R_content_gen->page_subcategory_name_ARRAY[self::$R_content_gen->page_serial] = $subcategory_name;
//                    self::$R_content_gen->page_subsubcateg_name_ARRAY[self::$R_content_gen->page_serial] = $subsubcat_name;

                break;
                default:

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Error building page from provided key [' .
                        $key . '].');

                break;

            }

        }catch(Exception $e){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Exception handling performed 
             * by the Logging Services Layer 
             * of the CRNRSTN :: Lightsaber 
             * RoCEv2 SOAP Services 
             * Layer (CLR-SSL). 
             *
             * Allow the CLR-SSL to handle 
             * this exception per the 
             * configured logging profile of 
             * the running application on 
             * this server. 
             *
             *
             * 5
             *
             * Sunday, June 30, 2024 @ 1619 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e, 
                   \LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

            return false;

        }

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
    function add_page_element(
             $serial, 
             $key, 
             $data_ARRAY, 
             $output_type = 'SSDTLA')
    {

	    if($output_type == 'sauce'){

	        return NULL;

        }

	    //error_log(__LINE__ . ' ui cnt mgr $serial[' . $serial . ']. $key[' . $key . '].');

        try{

            if(strlen($key) < 1){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('Error adding [' . $key .
                    '] element with data [' .
                    print_r($data_ARRAY, true) . '].');

            }

            switch($key){
                case 'PAGE_TITLE':
                case 'NOTE':
                case 'TECH_SPECS':
                case 'GENERAL_COPY_NAKED':
                case 'GENERAL_COPY_R_STONE':
                case 'METHOD_DEFINITION':
                case 'PARAMETER_DEFINITION':
                case 'RETURN_VALUE':
                case 'RELATED_METHODS':
                case 'PAGE_STATISTICS':
                case 'EXAMPLE_CONTENT':

                    self::$R_content_gen->add_page_element($serial, $key, $data_ARRAY);

                break;
                default:

                    //$oSideBitch_Usr->add_page_element($tmp_page_serial, 'EXAMPLE', $tmp_example_title_str, $tmp_example_description_str, $tmp_example_presentation_file, $tmp_example_execute_file);
                    //self::$R_content_gen->add_page_element($serial, $key, $data_ARRAY, $attribute_01, $attribute_02, $attribute_03);

                break;

            }

        }catch(Exception $e){

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Exception handling performed 
             * by the Logging Services Layer 
             * of the CRNRSTN :: Lightsaber 
             * RoCEv2 SOAP Services 
             * Layer (CLR-SSL). 
             *
             * Allow the CLR-SSL to handle 
             * this exception per the 
             * configured logging profile of 
             * the running application on 
             * this server. 
             *
             *
             * 5
             *
             * Sunday, June 30, 2024 @ 1620 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->catch_exception(
                   $e,
                   LOG_ERR,
                   __METHOD__,
                   __NAMESPACE__);

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function get_category($serial)
    {

	    return self::$R_content_gen->page_category_name_ARRAY[$serial];

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function get_sub_category($serial)
    {

        return self::$R_content_gen->page_subcategory_name_ARRAY[$serial];

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
    function return_page_html(
             $serial, 
             $channel = 'DESKTOP')
    {

        return self::$R_content_gen->return_page_html(
                                     $serial, 
                                     $channel);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_page_serial()
    {

        return self::$R_content_gen->return_page_serial();

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function nav_visible_state($nav_copy)
    {

        if(strtolower($nav_copy) == strtolower(self::$R_content_gen->page_subcategory_name_ARRAY[self::$R_content_gen->page_serial])){

            echo ' style="display:inline;"';

        }else{

            echo '';

        }

        return NULL;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function nav_active_state($nav_copy)
    {

        //error_log('317 side bitch usr - serial='.self::$R_content_gen->page_serial);
	    if(strtolower($nav_copy) == strtolower(self::$R_content_gen->page_subcategory_name_ARRAY[self::$R_content_gen->page_serial])){

            echo ' subnav_active';

        }else{

	        echo '';
	
        }

	    return NULL;

    }

    //
    // SOURCE :: https://gist.github.com/breakermind forked from https://gist.github.com/jasny/2000705
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
     * @return
     * @access private
     * @access public
     *
     */
    private function linkify(
                     $showimg = 1, 
                     $value, 
                     $protocols = array(
                                  'http', 
                                  'mail', 
                                  'https'), 
                     $attributes = array('target' => '_blank'))
    {

        //
        // Link attributes.
        $attr = '';

        foreach($attributes as 
            $key => $val)
        {

            $attr = ' ' . 
                    $key . '="' . 
                    \htmlentities($val) . 
                    '"';

        }

        $links = array();

        // Extract existing links and tags
        $value = \preg_replace_callback('~(<a .*?>.*?</a>|<.*?>)~i', function ($match) use (&$links){ return '<' . 
                                     \array_push($links, $match[1]) . 
                                     '>'; }, $value);

        // Extract text links for each protocol. 
        foreach((array)$protocols as $protocol){

            switch($protocol){
                case 'http':
                case 'https':   $value = \preg_replace_callback('~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i',
                    function ($match) use ($protocol, &$links, $attr, $showimg){
                        if($match[1]){

                            $protocol = $match[1]; $link = $match[2] ?: $match[3];

                            // Youtube
                            if($showimg == 1){

                                if((\strpos($link, 'youtube.com') > 0) || 
                                    (\strpos($link, 'youtu.be') > 0))
                                {

                                    $link = '<iframe width="100%" height="315" ' . 
                                            'src="https://www.youtube.com/embed/' . 
                                            \end(\explode('=', $link)) . 
                                            '?rel=0&showinfo=0&color=orange&iv_load_policy=3" ' . 
                                            'frameborder="0" allowfullscreen></iframe>';

                                    return '<' . 
                                           \array_push($links, $link) . 
                                           '></a>';

                                }

                                if((\stripos($link, '.png') > 0) || 
                                    (\stripos($link, '.jpg') > 0) || 
                                    (\stripos($link, '.jpeg')>0) || 
                                    (\stripos($link, '.gif') > 0) || 
                                    (\stripos($link, '.bmp') > 0))
                                {

                                    return '<' . 
                                           \array_push($links, "<a $attr href=\"$protocol://$link\" ' . 
                                           'class=\"htmllink\"><img src=\"$protocol://$link\" ' . 
                                           'class=\"htmlimg\">") . 
                                           '></a>';

                                }

                            }

                            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                             * Proxy check here. 
                             * Do we have external link? 
                             *
                             * If so, proxy it. 
                             *
                             * self::$transform_output_ARRAY['QUERY'/'STYLED_CONTENT']
                             *
                             */
                            if(\stripos($link, 'evifweb.com') > 0){

                                if($this->getSessionParam('DEVICETYPE') == 'm'){

                                    // Return Jquery Mobile® <a> structure.
                                    return '<' . 
                                           \array_push($links, "<a $attr href=\"$protocol://$link\" ' . 
                                           'class=\"htmllink\" data-ajax=\"false\">$link</a>") . '>';

                                }else{

                                    // Return desktop <a> structure.
                                    return '<' . 
                                           \array_push($links, "<a $attr href=\"$protocol://$link\" ' . 
                                           'class=\"htmllink\">$link</a>") . '>';

                                }

                            }else{

                                //
                                // Link needs
                                // to be proxied.
                                # $tmp_output_ARRAY[0]=PROTOCOL $tmp_output_ARRAY[1]=LINK
                                $tmp_output_ARRAY = $this->buildProxy($protocol, $link);


                                if($this->getSessionParam('DEVICETYPE') == 'm'){

                                    return '<' . 
                                           \array_push($links, "<a $attr ' . 
                                           'href=\"$tmp_output_ARRAY[0]://$tmp_output_ARRAY[1]\" ' . 
                                           'class=\"htmllink\" data-ajax=\"false\">$link</a>") . '>';

                                }else{

                                    return '<' . 
                                           \array_push($links, "<a $attr ' . 
                                           'href=\"$tmp_output_ARRAY[0]://$tmp_output_ARRAY[1]\" ' . 
                                           'class=\"htmllink\">$link</a>") . '>';

                                }

                            }

                        }

                    }, $value); break;

                case 'mail':    $value = preg_replace_callback('~([^\s<]+?@[^\s<]+?\.[^\s<]+)(?<![\.,:])~', function ($match) use (&$links, $attr){ return '<' . array_push($links, "<a $attr href=\"mailto:{$match[1]}\" class=\"htmllink\">{$match[1]}</a>") . '>'; }, $value); break;
                case 'twitter': $value = preg_replace_callback('~(?<!\w)[@#](\w++)~', function ($match) use (&$links, $attr){ return '<' . array_push($links, "<a $attr href=\"https://twitter.com/" . ($match[0][0] == '@' ? '' : 'search/%23') . $match[1]  . "\" class=\"htmllink\">{$match[0]}</a>") . '>'; }, $value); break;
                default:        $value = preg_replace_callback('~' . preg_quote($protocol, '~') . '://([^\s<]+?)(?<![\.,:])~i', function ($match) use ($protocol, &$links, $attr){ return '<' . array_push($links, "<a $attr href=\"$protocol://{$match[1]}\" class=\"htmllink\">{$match[1]}</a>") . '>'; }, $value); break;

            }

        }

        //
        // Insert all link.
        return preg_replace_callback('/<(\d+)>/', function ($match) use (&$links){ return $links[$match[1] - 1]; }, $value);

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