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
 * CLASS DEFINITION :: crnrstn_content_source_controller
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: May 4, 2020 @ 1620 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            ::
 * DESCRIPTION      :: This is the documentation
 *                     content source control
 *                     class object that holds
 *                     official documentation for
 *                     class methods complete with
 *                     title, description, method
 *                     input parameters, technical
 *                     specifications, and code
 *                     examples for the
 *                     CRNRSTN :: Lightsaber SOAP
 *                     Services Layer.
 *
 *                     Support for deep links to
 *                     class method documentation
 *                     pages...pages that are
 *                     complete with social share
 *                     and social media preview
 *                     HTML meta data content
 *                     integrations for CRNRSTN ::
 *                     Lightsaber documentation is
 *                     80% complete.
 *
 *                     The launch Lightbox Helper
 *                     by eVifweb (Fall 2024)
 *                     will complete the social
 *                     preview integrations
 *                     architecture for the
 *                     CRNRSTN :: Lightsaber
 *                     SOAP Services Layer.
 *
 *                     The pioneering social
 *                     media preview and social
 *                     share integrations
 *                     architecture that will be
 *                     introduced to the WWW by
 *                     the Lightbox Helper by
 *                     eVifweb will be integrated
 *                     into the CRNRSTN ::
 *                     Lightsaber Content Source
 *                     Controller.
 *
 *                     Effectively, when this kit is
 *                     laid down, this will complete
 *                     and perfect support for social
 *                     share and social media
 *                     integrations across the entire
 *                     framework of the CRNRSTN ::
 *                     Lightsaber SOAP
 *                     Services Layer.
 *
 *
 *                     5
 *
 *                     Friday, July 26, 2024 @ 1216 hrs.
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
 * @return object 
 * @access public
 *
 */
class crnrstn_content_source_controller extends crnrstn 
{
    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: We modified the crnrstn_content_source_controller 
     *       class object by applying an 
     *       extension of the crnrstn object, 
     *       by deleting the 
     *       __construct($oCRNRSTN) input 
     *       parameter with its public 
     *       definition, and by removing the 
     *       object assignment to the 
     *       public $oCRNRSTN variable. 
     *       5 :: Thursday, March 19, 2026 @ 0808 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: The crnrstn_content_source_controller 
     *       class method definitions that were 
     *       deleted (or modified) in order to 
     *       honor the class OOP extension of 
     *       crnrstn are as follows: 
     *       -----
     *       [del] crnrstn_http_endpoint()
     *       [mod] private function sauce(
     *                              $sauce, 
     *                              $output_type = NULL, 
     *                              $resource = NULL)
     *       to
     *             private function clr_ssl_ccs_sauce(
     *                              $sauce, 
     *                              $output_type = NULL, 
     *                              $resource = NULL)
     *       [del] multi_lang_content_return($data_key)
     *       [del] function return_system_image(
     *                      $system_asset_constant, 
     *                      $width = NULL, 
     *                      $height = NULL, 
     *                      $hyperlink = NULL, 
     *                      $alt = NULL, 
     *                      $title = NULL, 
     *                      $target = NULL, 
     *                      $output_mode = CRNRSTN_STRING, 
     *                      $url_params_ARRAY = NULL)
     *
     *       -----
     *       [del] deleted_xxxxxxx()
     *       [mod] modified_xxxxxx()
     *       
     *       5 :: Friday, July 10, 2026 @ 0531 hrs.
     *       Last Modified: 0519 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Renamed the 
     *       crnrstn_content_source_controller->sauce  
     *       method to clr_ssl_ccs_sauce().
     *       -----
     *       [Fri Jul 10 05:37:50.940414 2026] 
     *       [:error] [pid 35314] 
     *       [client 172.16.225.1:58715] 
     *       PHP Fatal error:  Access level to 
     *       CRNRSTN\\crnrstn_content_source_controller::sauce() 
     *       must be public (as in class CRNRSTN\\crnrstn) 
     *       in /var/www/html/_crnrstn/class/ui
     *       /crnrstn.content_source_controller.class.php 
     *       on line 0
     *
     *       5 :: Friday, July 10, 2026 @ 0543 hrs.
     *
     * # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * Edit: Deleted the 
     *       crnrstn_content_source_controller 
     *       method, multi_lang_content_return.
     *       -----
     *       [Fri Jul 10 06:31:15.287129 2026] [:error] 
     *       [pid 43265] [client 172.16.225.1:54593] 
     *       PHP Warning:  Declaration of 
     *       CRNRSTN\\crnrstn_content_source_controller::multi_lang_content_return($data_key) 
     *       should be compatible with 
     *       CRNRSTN\\crnrstn::multi_lang_content_return($iso_lang_code, 
     *       $multi_lang_resource_key, $data_attribute_key, 
     *       $default_content, $css_style_ARRAY) in 
     *       /var/www/html/_crnrstn/class/ui
     *       /crnrstn.content_source_controller.class.php on 
     *       line 0 
     *
     *       5 :: Friday, July 10, 2026 @ 0634 hrs.
     *
     */

    protected $R_ui_assembler;

    public $page_path;
    public $module_key;
    public $iso_lang_code;
    private static $page_serial;

    private $R_data = array();

    protected $link_build_track_ARRAY    = array();
    protected $content_sauce_ARRAY       = array();
    protected $content_output_type_ARRAY = array();

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     */
    function __construct(
             $R_ui_assembler, 
             $module_key = NULL)
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Edit: Renamed the crnrstn_content_source_controller 
         *       __construct() input parameter,
         *       public $oCRNRSTN_UI_ASSEMBLER to 
         *       protected $R_ui_assembler.
         *       5 :: Thursday, March 19, 2026 @ 0806 hrs.
         * 
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Initialize integer flag array. 
         * 5 :: Saturday, July 18, 2026 @ 2003 hrs.
         *
         */
        $this->R_data['int_flag'] = $this->get_crnrstn('int_flag');

        /*
        if(!\is_object($R_ui_assembler)){

            $clr_ssl_msg = '@TODO :: Remove this report output after ' .
                'checking that the ' .
                $this->return_bytes(
                    $R_ui_assembler,
                    2,
                    NULL,
                    true,
                    false,
                    true) .
                ' (' .
                \gettype($R_ui_assembler) . ') ' .
                \print_r($R_ui_assembler, true) .
                ' data we are receiving from the ' .
                'CLR-SSL Resource Registry is the ' . 
                'crnrstn_ui_content_assembler, and all is well.';
            // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
            $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' .
                'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
            $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
            $token = array(
                'token'                   => $msg_token,
                'token_generation_date'   => $token_generation_date,
                'request_type'            => __METHOD__,
                'code'                    => 200,
                'clr_ssl_msg'             => $clr_ssl_msg);
            $this->error_log(
                $clr_ssl_msg,
                \LOG_NOTICE,
                \E_NOTICE,
                __LINE__,
                __METHOD__,
                __FILE__,
                $token);

            echo '<br><pre><code>[mthd ' .
                __METHOD__ . '] [lnum ' .
                __LINE__ . '] $R_ui_assembler = ' .
                \gettype($R_ui_assembler) .
                '.</code></pre>';

            $html_out = $this->clr_ssl_registry_resource_report(
                $R_ui_assembler,
                $clr_ssl_msg,
                true,
                __LINE__,
                __METHOD__);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Set the response headers.
             *
             *
             * 5 :: Wednesday, August 5, 2026 @ "00" 0100 hrs.
             *
             * "00"..."00"..."00"...Oh,
             * Oh, Oh, Oh. You know what I mean."
             *
             * Yeah, you know what I mean:
             * "Oh, Oh, Oh"...
             * Yeah, you know what
             * I mean..."Oh"...yeah. ;)
             *
             *
            $this->set_response_headers(
                'Content-Type: text/html; charset=utf-8',
                $this->data_reporting_bytes($html_out));

            die($html_out);

        }else{

            $clr_ssl_msg = '@TODO :: Remove this report output after ' .
                'checking that the ' .
                $this->return_bytes(
                    $R_ui_assembler,
                    2,
                    NULL,
                    true,
                    false,
                    true) .
                ' (' .
                \gettype($R_ui_assembler) . ') ' .
                \get_class($R_ui_assembler) .
                ' data we are receiving from the ' .
                'CLR-SSL Resource Registry is the ' . 
                'crnrstn_ui_content_assembler, and all is well.';
            // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
            $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' .
                'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
            $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
            $token = array(
                'token'                   => $msg_token,
                'token_generation_date'   => $token_generation_date,
                'request_type'            => __METHOD__,
                'code'                    => 200,
                'clr_ssl_msg'             => $clr_ssl_msg);
            $this->error_log(
                $clr_ssl_msg,
                \LOG_NOTICE,
                \E_NOTICE,
                __LINE__,
                __METHOD__,
                __FILE__,
                $token);

            $html_out = $this->clr_ssl_registry_resource_report(
                $R_ui_assembler,
                $clr_ssl_msg,
                true,
                __LINE__,
                __METHOD__);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Set the response headers.
             *
             *
             * 5 :: Wednesday, August 5, 2026 @ "00" 0100 hrs.
             *
             * "00"..."00"..."00"...Oh,
             * Oh, Oh, Oh. You know what I mean."
             *
             * Yeah, you know what I mean:
             * "Oh, Oh, Oh"...
             * Yeah, you know what
             * I mean..."Oh"...yeah. ;)
             *
             *
            $this->set_response_headers(
                'Content-Type: text/html; charset=utf-8',
                $this->data_reporting_bytes($html_out));

            die($html_out);

        }
        */
        $this->R_ui_assembler = $R_ui_assembler;

        $this->page_path  = $this->R_ui_assembler->return_page_path();
        $this->module_key = $module_key;

        $clr_ssl_msg = 'Initializing ' . __CLASS__ . ' with (' . 
                       \gettype($R_ui_assembler) . 
                       ') ' . get_class($R_ui_assembler) . 
                       ' at the endpoint ['. $this->page_path . 
                       '].';
        // 5 :: Mon May xxxxxxxxxxxxxxxxxxxxxxxxxxx
        $msg_token = 'd9c5ca131ab8615a1738c340cf44c4ff' . 
                     'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
        $token_generation_date = '2026xxxxxxxxxxxxxxxxxxxxxxxxxxx';
        $token = array(
                 'token'                   => $msg_token, 
                 'token_generation_date'   => $token_generation_date, 
                 'request_type'            => __METHOD__, 
                 'code'                    => 200, 
                 'clr_ssl_msg'             => $clr_ssl_msg);
        $this->error_log(
               $clr_ssl_msg, 
               \LOG_DEBUG, 
               \E_NOTICE, 
               __LINE__, 
               __METHOD__, 
               __FILE__, 
               $token);

    }
/*
Removed: Sunday, June 28, 2026 @ 1829 hrs.

    private function return_sticky_link(
                     $url, 
                     $meta_params = NULL)
    {

        if(isset($this->content_output_type_ARRAY[$this->module_key])){

            if($this->content_output_type_ARRAY[$this->module_key] == 'sauce'){

                return $url;

            }

        }

        return $this->return_sticky_link($url, $meta_params);

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     *
    private function return_sticky_media_link(
                     $media_element_key, 
                     $url = NULL, 
                     $target = '_blank')
    {

        if(isset($this->content_output_type_ARRAY[$this->module_key])){

            if($this->content_output_type_ARRAY[$this->module_key] == 'sauce'){

                return '<a href="' . $url . '">Click here.</a>';

            }

        }

        return $this->return_sticky_media_link(
                      $media_element_key, 
                      $url, 
                      $target);

    }

    */

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_content_deep_link_token($salt = NULL)
    {
        
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * This will salt the content 
         * to support string comparison 
         * checks during JavaScript driven 
         * styling at the client and 
         * for use in (search result, docs) 
         * so that deep links will have 
         * an anchor to which to 
         * auto-scroll to after the 
         * page loads. search "crawl" 
         * will strip these links out 
         * automatically and use the 
         * data to build the deep link. 
         *
         */
        return $this->return_module_deep_link_token(
                      $this->module_key, 
                      $salt);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function return_mobile_detect_magic_method_html()
    {

        $tmp_predefined_constants_html = '<div class="crnrstn_predefined_constant_title"><h2>Mobile Detect
                    Magic Methods for Device Detection ::</h2></div>';
        $tmp_predefined_constants_html .= '<div class="crnrstn_predefined_constant_title_description"><p>The
                    magic methods below were taken from the <a href="' . $this->return_sticky_link('http://demo.mobiledetect.net/', 'crnrstn_docs_' . $this->module_key . '_demo02') . '" target="_blank">demo page</a>
                    of the <a href="' . $this->return_sticky_link('http://mobiledetect.net/', 'crnrstn_docs_' . $this->module_key . '_mobile_detect_home') . '" target="_blank">Mobile Detect</a>
                    v' . $this->version_mobile_detect() . ' website.</p></div>';

        $tmp_predefined_constants_html .= '<div class="crnrstn_predefined_constant_content">
';

        //
        // Basic methods
        $tmp_ARRAY_basic = $this->return_mobile_detect_magic_methods('basic');

        //
        // Custom detection methods
        $tmp_ARRAY_custom = $this->return_mobile_detect_magic_methods('custom');

        // Experimental version() method
        $tmp_ARRAY_experiment = $this->return_mobile_detect_magic_methods('experimental');

        // Other tests
        $tmp_ARRAY_other = $this->return_mobile_detect_magic_methods('other');

        $tmp_str = '';
        $token = $this->return_content_deep_link_token();
        $tmp_predefined_constants_html .= $token . '<div class="crnrstn_predefined_constant_title"><h3>Basic detection methods</h3></div>';
        foreach($tmp_ARRAY_basic as 
            $index => $method_name)
        {

            $tmp_str .= $method_name . '<br>';

        }

        $tmp_str = $this->strrtrim($tmp_str, '<br>');
        $tmp_predefined_constants_html .= '<div class="crnrstn_documentation_dyn_content_description"><p>' . $tmp_str . '</p></div>';

        $tmp_str = '';
        $token = $this->return_content_deep_link_token();
        $tmp_predefined_constants_html .= $token . '<div class="crnrstn_predefined_constant_title"><h3>Custom detection methods</h3></div>';
        foreach($tmp_ARRAY_custom as 
            $index => $method_name)
        {

            $tmp_str .= $method_name . '<br>';

        }

        $tmp_str = $this->strrtrim($tmp_str, '<br>');
        $tmp_predefined_constants_html .= '<div class="crnrstn_documentation_dyn_content_description">' . $tmp_str . '</div>';

        $tmp_str = '';
        $token = $this->return_content_deep_link_token();
        $tmp_predefined_constants_html .= $token . '<div class="crnrstn_predefined_constant_title"><h3>Experimental version() method</h3></div>';
        foreach($tmp_ARRAY_experiment as 
            $index => $method_name)
        {

            $tmp_str .= $method_name . '<br>';

        }

        $tmp_str = $this->strrtrim($tmp_str, '<br>');
        $tmp_predefined_constants_html .= '<div class="crnrstn_documentation_dyn_content_description">' . $tmp_str . '</div>';

        $tmp_str = '';
        $token = $this->return_content_deep_link_token();
        $tmp_predefined_constants_html .= $token . '<div class="crnrstn_predefined_constant_title"><h3>Other tests</h3></div>';
        foreach($tmp_ARRAY_other as 
            $index => $method_name)
        {

            $tmp_str .= $method_name . '<br>';

        }

        $tmp_str = $this->strrtrim($tmp_str, '<br>');
        $tmp_predefined_constants_html .= '<div class="crnrstn_documentation_dyn_content_description">' . $tmp_str . '</div>';

        $tmp_predefined_constants_html .= '</div>';

        return $tmp_predefined_constants_html;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_predefined_content($predefined_dataset)
    {

        $tmp_str_out = '';

        switch($predefined_dataset){
            case 'mobile_detect_magic_methods':

                $tmp_str_out = $this->return_mobile_detect_magic_method_html();

                break;
            default:

                break;

        }

        return $tmp_str_out;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_related_methods($method_name)
    {

        /*
        //
        // RELATED METHODS
        $tmp_related_array = array();
        $tmp_related_array[0] = 'is_tablet';
        $tmp_related_array[1] = 'set_mobile';
        $tmp_related_array[2] = 'set_tablet';
        $this->R_ui_assembler->add_page_element(self::$page_serial, 'RELATED_METHODS', $tmp_related_array);

        */
        $tmp_ARRAY = array();
        $tmp_output_ARRAY = array();

        switch($method_name){
            case 'return_set_bits':
            case 'clear_all_bits_set_one':
            case 'toggle_bit':
            case 'toggle_serialized_bit':
            case 'is_bit_set':
            case 'is_serialized_bit_set':
            case 'initialize_bit':
            case 'initialize_serialized_bit':

                $tmp_ARRAY = array('clear_all_bits_set_one', 
                                   'initialize_bit', 
                                   'initialize_serialized_bit',
                                   'is_bit_set', 
                                   'is_serialized_bit_set', 
                                   'return_set_bits', 
                                   'toggle_bit', 
                                   'toggle_serialized_bit');

            break;
            case 'salt':
            case 'system_hash_algo':
            case 'hash':
            case 'generate_new_key':

                $tmp_ARRAY = array('generate_new_key', 
                                   'hash', 
                                   'salt', 
                                   'system_hash_algo');

            break;
            case 'device_type_bit':
            case 'device_type':
            case 'get_user_agent':
            case 'is_tablet':
            case 'set_mobile':
            case 'set_tablet':
            case 'is_mobile':
            case 'get_mobile_devices':
            case 'get_tablet_devices':
            case 'get_mobile_browsers':
            case 'get_mobile_os':

                $tmp_ARRAY = array('device_type', 
                                   'device_type_bit', 
                                   'get_mobile_browsers', 
                                   'get_mobile_devices',
                                   'get_mobile_os', 
                                   'get_tablet_devices', 
                                   'get_user_agent', 
                                   'is_mobile', 
                                   'is_tablet',
                                   'set_mobile', 
                                   'set_tablet');

            break;
            case 'var_dump':
            case 'print_r':
            case 'print_r_str':

                $tmp_ARRAY = array('print_r', 
                                   'print_r_str', 
                                   'var_dump');

            break;
            case 'config_add_resource':
            case 'add_resource':
            case 'get_resource':
            case 'get_resource_count':
            case 'return_data_key':

                $tmp_ARRAY = array('add_resource', 
                                   'config_add_resource', 
                                   'get_resource', 
                                   'get_resource_count', 
                                   'return_data_key');

            break;
            case 'soap_defencoding':
            case 'proper_version':
            case 'version_linux':
            case 'version_openssl':
            case 'version_mysqli':
            case 'version_soap':
            case 'version_mobile_detect':
            case 'version_php':
            case 'version_apache':
            case 'version_crnrstn':

                $tmp_ARRAY = array('proper_version', 
                                   'soap_defencoding', 
                                   'version_apache', 
                                   'version_crnrstn', 
                                   'version_linux', 
                                   'version_mobile_detect', 
                                   'version_mysqli', 
                                   'version_openssl', 
                                   'version_php', 
                                   'version_soap');

            break;
            case 'config_init_get_encryption':
            case 'config_init_post_encryption':
            case 'config_init_cookie_encryption':
            case 'config_init_session_encryption':
            case 'config_init_oersl_encryption':
            case 'config_init_database_encryption':
            case 'config_init_soap_encryption':
            case 'config_init_tunnel_encryption':
            case 'config_include_encryption':

                $tmp_ARRAY = array('config_include_encryption', 
                                   'config_init_get_encryption', 
                                   'config_init_post_encryption', 
                                   'config_init_cookie_encryption', 
                                   'config_init_database_encryption', 
                                   'config_init_oersl_encryption', 
                                   'config_init_soap_encryption', 
                                   'config_init_session_encryption', 
                                   'config_init_tunnel_encryption');

            break;
            case 'add_cookie':
            case 'add_raw_cookie':
            case 'delete_cookie':
            case 'delete_all_cookies':
            case 'get_cookie':
            case 'new cookie':

                $tmp_ARRAY = array('add_cookie', 
                                   'add_raw_cookie', 
                                   'delete_cookie', 
                                   'delete_all_cookies', 
                                   'get_cookie', 
                                   'new cookie');

            break;
            case 'config_add_seo_analytics':
            case 'config_add_seo_engagement':
            case 'config_include_seo_analytics':
            case 'config_include_seo_engagement':

                $tmp_ARRAY = array('config_add_seo_analytics', 
                                   'config_add_seo_engagement', 
                                   'config_include_seo_analytics', 
                                   'config_include_seo_engagement');

            break;
            case 'current_location':

                $tmp_ARRAY = array('current_location');

            break;
            case 'extract_data_http':
            case 'isset_http_superglobal':
            case 'isset_http_param':

                $tmp_ARRAY = array('extract_data_http', 
                                   'isset_http_param', 
                                   'isset_http_superglobal');

            break;
            case 'get_headers':
            case 'header_options_apply':
            case 'header_options_add':
            case 'header_signature_options_return':
            case 'iso_language_html':
            case 'iso_language_profile':
            case 'iso_language_profile_count':

                $tmp_ARRAY = array('get_headers', 
                                   'header_options_add', 
                                   'header_options_apply', 
                                   'header_signature_options_return', 
                                   'iso_language_html', 
                                   'iso_language_profile', 
                                   'iso_language_profile_count');

            break;
            case 'get_disk_free_size':
            case 'get_disk_free_space':
            case 'get_disk_performance_metric':
            case 'grant_permissions_fwrite':

                // get_disk_free_size, get_disk_free_space
                $tmp_ARRAY = array('get_disk_performance_metric', 
                                   'grant_permissions_fwrite');

            break;
            default:

            break;

        }

        $tmp_str = '';
        foreach($tmp_ARRAY as 
            $index => $method)
        {

            if($method !== $method_name){

                $tmp_str .= $method;

            }

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Include these related 
         * methods in content 
         * invalidation hash creation. 
         *
         */
        $this->clr_ssl_ccs_sauce($tmp_str);

        if($this->content_output_type_ARRAY[$this->module_key] == 'sauce'){

            return $tmp_str;

        }

        foreach($tmp_ARRAY as 
            $index => $method)
        {

            if($method !== $method_name){

                $tmp_output_ARRAY[] = $method;

            }

        }

        return $tmp_output_ARRAY;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_crnrstn_caution_note($caution_note)
    {

        $tmp_str = '';
        $tmp_img = $this->return_system_image(
                          'NOTICE_TRI_ALERT_HQ', 
                          '', 
                          420, 
                          NULL, 
                          NULL, 
                          NULL, 
                          NULL, 
                          $this->R_data['int_flag']['CRNRSTN_HTML']);

        $tmp_str .= '<div class="crnrstn_documentation_caution_copy_shell">
                        <div class="crnrstn_documentation_caution_copy_border_wrap">

                            <div class="crnrstn_documentation_caution_copy_wrap_rel">

                                <div class="crnrstn_documentation_caution_copy_wrap">
                                    <div class="crnrstn_documentation_caution_copy">' . $caution_note . '</div>

                                </div>

                                <div class="crnrstn_documentation_bg_caution_icon_wrapper_rel">
                                    <div class="crnrstn_documentation_bg_caution_icon_wrapper">
                                        <div class="crnrstn_documentation_bg_caution_icon">' . $tmp_img . '</div>
                                    </div>
                                </div>

                                <div class="crnrstn_hidden_void">
                                    <div class="crnrstn_documentation_caution_copy">' . $caution_note . '</div>
                                </div>

                            </div>
                            <div class="crnrstn_cb"></div>

                        </div>
                        <div class="crnrstn_cb"></div>

                    </div>';

        return $tmp_str;

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
    private function return_thirdparty_text_link(
                     $system_asset_constant, 
                     $link_copy, 
                     $url, 
                     $resource_constant = 'CRNRSTN_RESOURCE_THIRDPARTY')
    {

        if(is_string($resource_constant))
            $resource_constant = $this->R_data['int_flag'][$resource_constant];

        // 'add_resource', CRNRSTN_RESOURCE_DOCUMENTATION
        switch($resource_constant){
            case $this->R_data['int_flag']['CRNRSTN_RESOURCE_THIRDPARTY']:

                if($this->content_output_type_ARRAY[$this->module_key] == 'sauce'){

                    return '<a href="' . $url . '">' . $link_copy . '</a>';

                }

                $tmp_img = $this->return_system_image(
                                  $system_asset_constant, 
                                  '', 
                                  10, 
                                  NULL, 
                                  NULL, 
                                  NULL, 
                                  NULL, 
                                  $this->R_data['int_flag']['CRNRSTN_HTML']);

                switch($system_asset_constant){
                    case 'SOCIAL_YOUTUBE':
                    default:

                        $tmp_link_id = '';
                        if(!isset($this->link_build_track_ARRAY[$system_asset_constant])){

                            $this->link_build_track_ARRAY[$system_asset_constant][] = 1;

                        }else{

                            $tmp_link_id = count($this->link_build_track_ARRAY[$system_asset_constant]);

                        }

                        $url = $this->return_sticky_link(
                                      $url, 
                                      'crnrstn_docs_' . 
                                      $this->module_key . '_' . 
                                      strtolower($system_asset_constant) . '_' . 
                                      $tmp_link_id);
                        return '<a href="' . 
                               $url . '" target="_blank">' . 
                               $link_copy . '</a><sup class="crnrstn_the_r_text_link_sup">' . 
                               $tmp_img . '</sup>';

                    break;

                }

            break;
            default:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                $this->error_log('Error building third party text link [' . 
                       $system_asset_constant . 
                       '] due to unknown $resource_constant [' . 
                       $resource_constant . '].', 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);

            break;

        }

        return '';

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
    function return_crnrstn_text_link(
             $module_key, 
             $system_asset_constant = 'CRNRSTN_R_MD', 
             $url_override = NULL, 
             $resource_constant = 'CRNRSTN_RESOURCE_DOCUMENTATION')
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * error_log('[lnum ' . 
         *     __LINE__ . '] [mthd ' . 
         *     __METHOD__ . '] New link request. $module_key[' . 
         *     $module_key . ']. $system_asset_constant[' . 
         *     $system_asset_constant . ']. $url_override[' . 
         *     $url_override . ']. $resource_constant[' . 
         *     $resource_constant . 
         *     '].');
         *
         * [Wed Jul 22 06:45:34.972042 2026] [:error] 
         * [pid 126127] [client 172.16.225.1:53145] 
         * [lnum 1146] [mthd CRNRSTN\\crnrstn_content_source_controller::return_crnrstn_text_link] 
         * New link HTML. 
         * $module_key[define]. 
         * $system_asset_constant[PHP_ELLIPSE]. 
         * $url_override[https://www.php.net/manual/en/function.define.php]. 
         * $resource_constant[CRNRSTN_RESOURCE_OPENSOURCE].
         *
         */
        if(\is_string($resource_constant))
            $resource_constant = $this->R_data['int_flag'][$resource_constant];

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * error_log('[lnum ' . 
         *     __LINE__ . '] [mthd ' . 
         *     __METHOD__ . '] $resource_constant[' . 
         *     $resource_constant . 
         *     '].');
         *
         * [Wed Jul 22 06:52:18.754189 2026] [:error] 
         * [pid 126379] [client 172.16.225.1:55683] 
         * [lnum 1170] 
         * [mthd CRNRSTN\\crnrstn_content_source_controller::return_crnrstn_text_link] 
         * $resource_constant[8599].
         *
         */

        switch($resource_constant){
            case $this->R_data['int_flag']['CRNRSTN_RESOURCE_DOCUMENTATION']:

                if($this->content_output_type_ARRAY[$this->module_key] == 'sauce'){

                    return $module_key;

                }

                $tmp_img = $this->return_system_image(
                                  $system_asset_constant, 
                                  '', 
                                  10, 
                                  NULL, 
                                  NULL, 
                                  NULL, 
                                  NULL, 
                                  $this->R_data['int_flag']['CRNRSTN_HTML']);

                if(isset($url_override)){

                    return '<a href="' . 
                           $url_override . 
                           '" target="_blank">' . 
                           $module_key . 
                           '</a><sup class="crnrstn_the_r_text_link_sup">' . 
                           $tmp_img . 
                           '</sup>';

                }

                return '<a href="#" onclick="oCRNRSTN_JS.related_link_text_click(\'' . 
                       $module_key . '\');">' . 
                       $module_key . 
                       '</a><sup class="crnrstn_the_r_text_link_sup">' . 
                       $tmp_img . 
                       '</sup>';

            break;
            case $this->R_data['int_flag']['CRNRSTN_RESOURCE_OPENSOURCE']:

                if(isset($this->module_key)){

                    if($this->content_output_type_ARRAY[$this->module_key] == 'sauce'){

                        if(isset($url_override)){

                            return '<a href="' . $url_override . '">' . $module_key . '</a>';

                        }

                        return '<a href="https://php.net/manual-lookup.php?pattern=' . 
                               $module_key . '">' . 
                               $module_key . '</a>';

                    }

                }

                $tmp_img = $this->return_system_image(
                                  $system_asset_constant, 
                                  '', 
                                  10, 
                                  NULL, 
                                  NULL, 
                                  NULL, 
                                  NULL, 
                                  $this->R_data['int_flag']['CRNRSTN_HTML']);

                switch($system_asset_constant){
                    case 'PHP_ELLIPSE':

                        if(isset($url_override)){

                            $tmp_url = $this->return_sticky_link($url_override);

                            return '<a href="' . 
                                   $tmp_url . '" target="_blank">' . 
                                   $module_key . '</a><sup class="crnrstn_the_r_text_link_sup">' . 
                                   $tmp_img . '</sup>';

                        }

                        $tmp_url = $this->return_sticky_link(
                                          'https://php.net/manual-lookup.php?pattern=' . 
                                          $module_key);

                        error_log(
                            __LINE__ . ' csc $tmp_url[' . 
                            strval($tmp_url) . ']. $module_key[' . 
                            strval($module_key) . ']. content_output_type_ARRAY[' . 
                            print_r($this->content_output_type_ARRAY, true) . '].');

                        //die();

                        return '<a href="' . 
                               $tmp_url . '" target="_blank">' . 
                               $module_key . '</a><sup class="crnrstn_the_r_text_link_sup">' . 
                               $tmp_img . '</sup>';

                    break;

                }

            break;
            default:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                $this->error_log('Error building text link [' . 
                       $module_key . '] due to unknown $resource_constant [' . 
                       $resource_constant . '].', 
                       __LINE__, 
                       __METHOD__, 
                       __FILE__, 
                       $this->R_data['int_flag']['CRNRSTN_SETTINGS_CRNRSTN']);

            break;

        }

        return '';

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_sauce($resource)
    {

        if(strlen($resource) < 1){

            return '';

        }

        if(isset($this->content_sauce_ARRAY[$resource])){

            return $this->content_sauce_ARRAY[$resource];

        }

        return '';

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @param
     * @return
     * @access private
     *
     */
    private function clr_ssl_ccs_sauce(
                     $sauce, 
                     $output_type = NULL, 
                     $resource = NULL)
    {

        if(!isset($output_type))
            $output_type = $this->content_output_type_ARRAY[$this->module_key];

        if($output_type !== 'sauce')
            return true;

        if(!isset($resource))
            $resource = $this->module_key;

        if(!isset($this->content_sauce_ARRAY[$resource])){

            $this->content_sauce_ARRAY[$resource] = $sauce;

        }else{

            $tmp_sauce = $this->content_sauce_ARRAY[$resource];

            $tmp_sauce .= $sauce;

            $this->content_sauce_ARRAY[$resource] = $tmp_sauce;

        }

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function return_param_required_str($is_required)
    {

        if($is_required){

            return 'Required';

        }

        return 'Optional';

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function sauce_example($file_path)
    {

        $tmp_path_directory = $this->get_resource(
                                     'crnrstn_path_directory', 
                                     0, 
                                     'CRNRSTN::RESOURCE::HTTP_IMAGES');
        $tmp_system_directory = $this->get_resource(
                                       'crnrstn_system_directory', 
                                       0, 
                                       'CRNRSTN::RESOURCE::HTTP_IMAGES');

        $this->clr_ssl_ccs_sauce(file_get_contents(
               $tmp_path_directory . \DIRECTORY_SEPARATOR . 
               $tmp_system_directory . 
               $file_path, 
               true));

        return true;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function social_meta_title($str = '')
    {

        $tmp_data_type_family = 'CRNRSTN::RESOURCE::GENERAL_SETTINGS::META';

        $tmp_meta_cnt = $this->get_resource_count(
                               'HTML_HEAD_CRNRSTN_META', 
                               $tmp_data_type_family);
        for($i = 0; $i < $tmp_meta_cnt; $i++){

            $tmp_data = $this->get_resource(
                               'HTML_HEAD_CRNRSTN_META', 
                               $i, 
                               $tmp_data_type_family);
            if(is_array($tmp_data)){

                $tmp_cnt = sizeof($tmp_data);
                for($ii = 0; $ii < $tmp_cnt; $ii++){

                    $str_pos_og_title      = stripos($tmp_data[$ii], 'og:title');
                    $str_pos_twitter_title = stripos($tmp_data[$ii], 'twitter:title');
                    if($str_pos_og_title !== false){

                        $tmp_data[$ii] = '<meta property="og:title" content="' . $str . '" />
';

                    }

                    if($str_pos_twitter_title !== false){

                        $tmp_data[$ii] = '<meta property="twitter:title" content="' . $str . '" />';

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Just put the 
                 * data back into 
                 * the place from 
                 * whence it came. 
                 *
                 */
                $this->add_resource(
                       'HTML_HEAD_CRNRSTN_META', 
                       $tmp_data, 
                       $tmp_data_type_family, 
                       $this->R_data['int_flag']['R_authorize'] & 
                       $this->R_data['int_flag']['R_channel_RUNTIME'], 
                       $i);

            }else{

                $str_pos_og_title      = stripos($tmp_data, 'og:title');
                $str_pos_twitter_title = stripos($tmp_data, 'twitter:title');
                if($str_pos_og_title !== false){

                    $tmp_data = '<meta property="og:title" content="' . $str . '" />
';

                    $this->add_resource(
                           'HTML_HEAD_CRNRSTN_META', 
                           $tmp_data, 
                           $tmp_data_type_family, 
                           $this->R_data['int_flag']['R_authorize'] & 
                           $this->R_data['int_flag']['R_channel_RUNTIME'], 
                           $i);

                }

                if($str_pos_twitter_title !== false){

                    $tmp_data = '<meta property="twitter:title" content="' . $str . '" />
';

                    $this->add_resource(
                           'HTML_HEAD_CRNRSTN_META', 
                           $tmp_data, 
                           $tmp_data_type_family, 
                           $this->R_data['int_flag']['R_authorize'] & 
                           $this->R_data['int_flag']['R_channel_RUNTIME'], 
                           $i);

                }

            }

        }

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access private
     *
     */
    private function social_meta_description($str = '')
    {

        $tmp_data_type_family = 'CRNRSTN::RESOURCE::GENERAL_SETTINGS::META';

        $tmp_meta_cnt = $this->get_resource_count(
                               'HTML_HEAD_CRNRSTN_META', 
                               $tmp_data_type_family);
        for($i = 0; $i < $tmp_meta_cnt; $i++){

            $tmp_data = $this->get_resource(
                               'HTML_HEAD_CRNRSTN_META', 
                               $i, 
                               $tmp_data_type_family);
            if(is_array($tmp_data)){

                $tmp_cnt = sizeof($tmp_data);
                for($ii = 0; $ii < $tmp_cnt; $ii++){

                    $str_pos_og_description      = stripos($tmp_data[$ii], 'og:description');
                    $str_pos_twitter_description = stripos($tmp_data[$ii], 'twitter:description');
                    if($str_pos_og_description !== false){

                        $tmp_data[$ii] = '<meta property="og:description" content="' . 
                                         $str . '" />';

                    }

                    if($str_pos_twitter_description !== false){

                        $tmp_data[$ii] = '<meta property="twitter:description" content="' . 
                                         $str . '" />';

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Just put the 
                 * data back into 
                 * the place from 
                 * whence it came. 
                 *
                 */
                $this->add_resource(
                       'HTML_HEAD_CRNRSTN_META', 
                       $tmp_data, 
                       $tmp_data_type_family, 
                       $this->R_data['int_flag']['R_authorize'] & 
                       $this->R_data['int_flag']['R_channel_RUNTIME'], 
                       $i);

            }else{

                $str_pos_og_description      = stripos($tmp_data, 'og:description');
                $str_pos_twitter_description = stripos($tmp_data, 'twitter:description');
                if($str_pos_og_description !== false){

                    $tmp_data = '<meta property="og:description" content="' . 
                                $str . '" />';
                    $this->add_resource(
                           'HTML_HEAD_CRNRSTN_META', 
                           $tmp_data, 
                           $tmp_data_type_family, 
                           $this->R_data['int_flag']['R_authorize'] & 
                           $this->R_data['int_flag']['R_channel_RUNTIME'], 
                           $i);

                }

                if($str_pos_twitter_description !== false){

                    $tmp_data = '<meta property="twitter:description" content="' . 
                                $str . '" />';
                    $this->add_resource(
                           'HTML_HEAD_CRNRSTN_META', 
                           $tmp_data, 
                           $tmp_data_type_family, 
                           $this->R_data['int_flag']['R_authorize'] & 
                           $this->R_data['int_flag']['R_channel_RUNTIME'], 
                           $i);

                }

            }

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access private
     *
     */
    private function social_meta_image()
    {

        $tmp_og_str = '';
        $tmp_twitter_str = '';
        $tmp_data_type_family = 'CRNRSTN::RESOURCE::GENERAL_SETTINGS::META';

        /*error_log(
         *    __LINE__ . ' content source ' . 
         *    '$this->crnrstn_asset_family[' . 
         *    $this->crnrstn_asset_family . 
         *    ']. $this->crnrstn_asset_meta_key[' . 
         *    $this->crnrstn_asset_meta_key . 
         *    '].');
         *
         */
        if((($this->crnrstn_asset_family == 'module_key') || 
            ($this->crnrstn_asset_family == 'meta')) && 
            (strlen($this->crnrstn_asset_meta_key) > 0))
        {

            //$this->crnrstn_asset_meta_key = $tmp_salt_ugc;
            //$tmp_http_endpoint = $this->get_resource('crnrstn_http_endpoint', 0, 'CRNRSTN::RESOURCE::HTTP_IMAGES');
            //$tmp_path_directory = $this->get_resource('crnrstn_path_directory', 0, 'CRNRSTN::RESOURCE::HTTP_IMAGES');
            $tmp_system_directory = $this->get_resource(
                                           'crnrstn_system_directory', 
                                           0, 
                                           'CRNRSTN::RESOURCE::HTTP_IMAGES');

            $tmp_http = $this->crnrstn_http_endpoint($this->get_resource(
                                                            'crnrstn_system_asset_map_http_root', 
                                                            0, 
                                                            'CRNRSTN::RESOURCE::ASSET_PATH'));

            $tmp_map_http = $tmp_http . '?' . 
                            $this->session_salt() . 
                            '=meta/php/' . 
                            $this->crnrstn_asset_meta_key;

            if($this->is_bit_set(CRNRSTN_MODE_JPEG) > 0){

                $tmp_http = $tmp_http . $tmp_system_directory . '/' . 
                            'ui' . '/' . 
                            'imgs' . '/' . 
                            'jpg/meta/php/' . 
                            $this->crnrstn_asset_meta_key . '.jpg';

            }else{

                $tmp_http = $tmp_http . $tmp_system_directory . '/' . 
                            'ui' . '/' . 
                            'imgs' . '/' . 
                            'png/meta/php/' . 
                            $this->crnrstn_asset_meta_key . '.png';

            }

            if(($this->is_bit_set(self::$R_data['int_flag']['R_fs_map']) > 0) || 
                ($this->is_bit_set(self::$R_data['int_flag']['R_fs_map_proxy']) > 0))
            {

                $tmp_img_url = $tmp_map_http;

            }else{

                $tmp_img_url = $tmp_http;

            }

            /*error_log(
             *    __LINE__ . 
             *    ' content source $this->crnrstn_asset_family[' . 
             *    $this->crnrstn_asset_family . 
             *    ']. $this->crnrstn_asset_meta_key[' . 
             *    $this->crnrstn_asset_meta_key . 
             *    ']. $tmp_img_url[' . 
             *    $tmp_img_url . '].');
             *
             */

            //
            // METHOD PREVIEW IMAGE
            $tmp_og_str .= '<meta property="og:image" content="' . 
                           $tmp_img_url . '" />
';
            $tmp_twitter_str .= '<meta property="twitter:image" content="' . 
                                $tmp_img_url . '" />
';

        }

        //
        // JONY5.COM MUSTACHE
        $tmp_og_str .= '    <meta property="og:image" content="' . 
                       $this->return_system_image('STACHE_SOCIAL') . '" />
';
        $tmp_twitter_str .= '    <meta property="twitter:image" content="' . 
                            $this->return_system_image('STACHE_SOCIAL') . '" />
';
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Random branding 
         * creative. 
         *
         */
        $tmp_branding_ARRAY = array('LINUX_PENGUIN_SMALL', 
                                    'REDHAT_LOGO', 
                                    'APACHE_FEATHER', 
                                    'APACHE_POWER_VERSION', 
                                    'CRNRSTN_R', 
                                    'MYSQL_DOLPHIN', 
                                    'PHP_ELLIPSE', 
                                    'POWER_BY_PHP', 
                                    'ZEND_LOGO', 
                                    'ZEND_FRAMEWORK', 
                                    'ZEND_FRAMEWORK_3', 
                                    'REDHAT_HAT_LOGO');
        $tmp_str = $tmp_branding_ARRAY[rand(0, 11)];
        $tmp_og_str .= '    <meta property="og:image" content="' . 
                       $this->return_system_image($tmp_str) . '" />
';
        $tmp_twitter_str .= '    <meta property="twitter:image" content="' . 
                            $this->return_system_image($tmp_str) . '" />
';
        //
        // Random J5
        $tmp_og_str .= '    <meta property="og:image" content="' . 
                       $this->return_system_image('J5_WOLF_PUP_RAND') . '" />';
        $tmp_twitter_str .= '    <meta property="twitter:image" content="' . 
                            $this->return_system_image('J5_WOLF_PUP_RAND') . '" />';

        $tmp_meta_cnt = $this->get_resource_count(
                               'HTML_HEAD_CRNRSTN_META', 
                               $tmp_data_type_family);
        for($i = 0; $i < $tmp_meta_cnt; $i++){

            $tmp_data = $this->get_resource(
                               'HTML_HEAD_CRNRSTN_META', 
                               $i, 
                               $tmp_data_type_family);
            if(is_array($tmp_data)){

                $tmp_cnt = sizeof($tmp_data);
                for($ii = 0; $ii < $tmp_cnt; $ii++){

                    $str_pos_og_image      = stripos($tmp_data[$ii], 'og:image');
                    $str_pos_twitter_image = stripos($tmp_data[$ii], 'twitter:image');
                    if($str_pos_og_image !== false){

                        $tmp_data[$ii] = $tmp_og_str;

                    }

                    if($str_pos_twitter_image !== false){

                        $tmp_data[$ii] = $tmp_twitter_str;

                    }

                }

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * Just put the 
                 * data back into 
                 * the place from 
                 * whence it came. 
                 *
                 */
                $this->add_resource(
                       'HTML_HEAD_CRNRSTN_META', 
                       $tmp_data, 
                       $tmp_data_type_family, 
                       $this->R_data['int_flag']['R_authorize'] & 
                       $this->R_data['int_flag']['R_channel_RUNTIME'], 
                       $i);

            }else{

                $str_pos_og_image      = stripos($tmp_data, 'og:image');
                $str_pos_twitter_image = stripos($tmp_data, 'twitter:image');

                if($str_pos_og_image !== false){

                    $this->add_resource(
                           'HTML_HEAD_CRNRSTN_META', 
                           $tmp_og_str, 
                           $tmp_data_type_family, 
                           $this->R_data['int_flag']['R_authorize'] & 
                           $this->R_data['int_flag']['R_channel_RUNTIME'], 
                           $i);

                }

                if($str_pos_twitter_image !== false){

                    $this->add_resource(
                           'HTML_HEAD_CRNRSTN_META', 
                           $tmp_twitter_str, 
                           $tmp_data_type_family, 
                           $this->R_data['int_flag']['R_authorize'] & 
                           $this->R_data['int_flag']['R_channel_RUNTIME'], 
                           $i);

                }

            }

        }

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function return_output_type()
    {

        return $this->content_output_type_ARRAY[$this->module_key];

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
    function load_page(
             $module_key = NULL, 
             $output_type = 'SSDTLA')
    {

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Integrate document return 
         * into request return 
         * serialization map. 
         *
         * [EXCERPT]
         * The problem :: on a new 
         * asset request by method 
         * call, ...we think it 
         * does not need to be 
         * initialized. 
         *
         * We need to determine if 
         * $_GET[] driven initialization 
         * is active or not. 
         *
         * Then, we need to 
         * initialize the request 
         * here for method call 
         * asset return. 
         *
         */
        $tmp_current_return_map_family = $this->return_crnrstn_asset_family();
        $tmp_current_module_key        = $this->module_key;

        if(isset($module_key)){

            $this->module_key = $module_key;

        }

        $this->content_output_type_ARRAY[$this->module_key] = $output_type;

        $return_true_str = 'Returns boolean TRUE.';
        $tmp_path        = '';

        try{

            _crnrstn_documentation_library($this->module_key, $this);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * Return to 
             * original value. 
             *
             */
            $this->module_key = $tmp_current_module_key;

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
                   LOG_ERR, 
                   __METHOD__, 
                   __NAMESPACE__);

        }

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
    function proper_replace(
             $pattern, 
             $replacement, 
             $original_str)
    {
        // 5 :: Thursday, August 15, 2024 @ 0014 hrs.

        return $this->proper_replace(
                      $pattern, 
                      $replacement, 
                      $original_str);

    }
/*
Removed: Sunday, June 28, 2026 @ 1829 hrs.
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
     *
    function get_crnrstn(
             $name, 
             $index_0 = NULL, 
             $index_1 = NULL, 
             $index_2 = NULL, 
             $index_3 = NULL)
    {
        // 5 :: Thursday, August 15, 2024 @ 0008 hrs.

        return $this->get_crnrstn(
                      $name, 
                      $index_0, 
                      $index_1, 
                      $index_2, 
                      $index_3);

    }

    //
    // SOURCE :: https://www.php.net/manual/en/function.rtrim.php
    // AUTHOR :: pinkgothic at gmail dot com :: https://www.php.net/manual/en/function.rtrim.php#95802
    /**
     * R :: Content pending. 
     *
     * @param
     * @param
     * @return
     * @access public
     *
     *
    function strrtrim(
             $message, 
             $strip)
    {
        // 5 :: Thursday, August 15, 2024 @ 0007 hrs.

        return $this->strrtrim($message, $strip);

    }
    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     *
    function system_data_profile_constants_ARRAY()
    {
        // 5 :: Thursday, August 15, 2024 @ 0004 hrs.

        return $this->system_data_profile_constants_ARRAY();

    }

*/
    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function system_hash_algo()
    {
        // 5 :: Wednesday, August 14, 2024 @ 2359 hrs.

        return $this->system_hash_algo();

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function version_mobile_detect()
    {
        // 5 :: Wednesday, August 14, 2024 @ 2358 hrs.

        return $this->version_mobile_detect();

    }

    /**
     * Deleted this method here as 
     * we now extend crnrstn, 
     * and there is an architectural 
     * conflict within the CLR-SSL to 
     * even have this here. 
     *
     * [Thu Aug 13 03:11:08.719689 2026] [:error] 
     * [pid 4168] [client 172.16.225.1:64989] 
     * PHP Fatal error:  Maximum function nesting 
     * level of '256' reached, aborting! in 
     * /var/www/html/_R/class/ui
     * /crnrstn.content_source_controller.class.php on line 2213
     *
     * 5 :: Thursday, August 13, 2026 @ 0316 hrs.
     *
     * @param
     * @return
     * @access public
     *
    function version_crnrstn($dot_notation = false)
    {
        // 5 :: Wednesday, August 14, 2024 @ 2349 hrs.

        return $this->version_crnrstn($dot_notation);

    }

     */

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function proper_version($system = 'CRNRSTN')
    {
        // 5 :: Wednesday, August 14, 2024 @ 2350 hrs.

        return $this->proper_version($system);

    }

    /**
     * R :: Content pending. 
     *
     * @return
     * @access public
     *
     */
    function version_openssl()
    {
        // 5 :: Thursday, August 15, 2024 @ 0023 hrs.

        return $this->version_openssl();

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
        // 5 :: Wednesday, August 14, 2024 @ 2313 hrs.

        $this->R_ui_assembler->initialize_page_content($module_key_override);

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
        // 5 :: Wednesday, August 14, 2024 @ 2312 hrs.

        $this->R_ui_assembler->add_page_element(
                               $serial, 
                               $key, 
                               $data_ARRAY, 
                               $output_type);

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

        return self::$page_serial;

    }

/*    public function returnLoadedBitch(){
 *
 *        return $this->R_ui_assembler;
 *
 *    }
 */

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
    function return_int_const_profile(
             $resource_constant, 
             $attribute = 'ARRAY', 
             $iso_lang_code = NULL, 
             $unit_test = false)
    {

        $tmp_output_ARRAY = array();

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Initialize ISO language. 
         *
         * Switch case 'en' and 
         * default are the same. 
         *
         */
        if(isset($iso_lang_code)){

            $this->iso_lang_code = $iso_lang_code;

        }else{

            if(!isset($this->iso_lang_code)){

                $this->iso_lang_code = $this->iso_language_html();

            }

        }

        if(is_array($resource_constant)){

            $tmp_agg_output_ARRAY = array();

            foreach($resource_constant as 
                $index => $res_const)
            {

                $tmp_agg_output_ARRAY[$res_const] = $this->return_int_const_profile(
                                                           $res_const, 
                                                           $attribute);

            }

            return $tmp_agg_output_ARRAY;

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Articulate the CRNRSTN :: 
         * Lightsaber RoCEv2 SOAP 
         * Services Layer (CLR-SSL) 
         * System Integer Constants 
         * Meta Data Bank in order 
         * to initialize a resource 
         * constant meta 
         * data array. 
         *
         *
         * 5
         *
         * Thursday, August 15, 2024 @ 0309 hrs.
         *
         */
        $tmp_resource_constant_meta_ARRAY = _crnrstn_system_integer_bank(
                                            $resource_constant, 
                                            $this);

        if(isset($attribute)){

            $attribute = \strtoupper($attribute);

            /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
             * The $attribute default value
             * of 'ARRAY' will never be set
             * within $tmp_resource_constant_meta_ARRAY, 
             * the _crnrstn_system_integer_bank() 
             * function's output.
             *
             * This will result in the 
             * entire array being returned. 
             *
             * Please note that this may 
             * change soon with the current 
             * The Lightbox Helper re-arch 
             * being in progress. 
             *
             *
             * 5
             *
             * Thursday, August 15, 2024 @ 0444 hrs.
             *
             */
            if(isset($tmp_resource_constant_meta_ARRAY[$attribute]))
                return $tmp_resource_constant_meta_ARRAY[$attribute];

        }

        return $tmp_resource_constant_meta_ARRAY;

    }

    /**
     * R :: Content pending. 
     *
     * @param
     * @return
     * @access public
     *
     */
    function return_integer_constant_profiles($module_key = NULL)
    {

        /*
        system_theme_style_constants_ARRAY = 
        array(
            CRNRSTN_UI_PHPNIGHT, 
            CRNRSTN_UI_DARKNIGHT, 
            CRNRSTN_UI_PHP, 
            CRNRSTN_UI_GREYSKY, 
            CRNRSTN_UI_HTML, 
            CRNRSTN_UI_DAYLIGHT, 
            CRNRSTN_UI_FEATHER, 
            CRNRSTN_UI_GLASS_LIGHT_COPY, 
            CRNRSTN_UI_GLASS_DARK_COPY, 
            CRNRSTN_UI_WOOD, 
            CRNRSTN_UI_TERMINAL, 
            CRNRSTN_UI_RANDOM);

            CRNRSTN_CSS_FRAMEWORK_SIMPLE_GRID
            CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM
            CRNRSTN_CSS_FRAMEWORK_FOUNDATION
            CRNRSTN_CSS_FRAMEWORK_HTML5_BOILERPLATE
            CRNRSTN_CSS_FRAMEWORK_RESPONSIVE_GRID_SYSTEM
            CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC
            CRNRSTN_CSS_FRAMEWORK_DEAD_SIMPLE_GRID
            CRNRSTN_CSS_FRAMEWORK_SKELETON
            CRNRSTN_CSS_FRAMEWORK_RWDGRID

        Simple Grid
        https://simplegrid.io/
        Simple Grid
        http://thisisdallas.github.io/Simple-Grid/

        960 Grid System
        https://960.gs/

        Foundation
        https://get.foundation/

        HTML5 Boilerplate
        https://html5boilerplate.com/

        Responsive Grid System
        http://www.responsivegridsystem.com/

        Unsemantic
        https://unsemantic.com/

        Dead Simple Grid
        https://mourner.github.io/dead-simple-grid/

        Skeleton
        http://getskeleton.com/

        rwdgrid
        http://rwdgrid.com/

       */

        switch($module_key){
            case 'system_output_head_html':

                $tmp_output_ARRAY = array();

                // Do we need to initialize?
                if(!isset($this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_JQUERY'])){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * Master List of 
                     * CSS and JS 
                     * framework integers. 
                     *
                     * Currently, 70 integers. 
                     *
                     * The following integers are 
                     * initialized in crnrstn during 
                     * registry boot (and 
                     * so not mentioned in this 
                     * code section):
                     *  - 'CRNRSTN_JS_MAIN', 
                     *  - 'CRNRSTN_CSS_MAIN_DESKTOP', 
                     *  - 'CRNRSTN_CSS_MAIN_TABLET', and 
                     *  - 'CRNRSTN_CSS_MAIN_MOBILE'.
                     *
                     *
                     * 5 :: Saturday, July 18, 2026 @ 2108 hrs.
                     *
                     */
                    $framework_int = array('CRNRSTN_JS_FRAMEWORK_JQUERY', 
                    'CRNRSTN_JS_FRAMEWORK_JQUERY_4_0_0', 
                    'CRNRSTN_JS_FRAMEWORK_JQUERY_3_7_0', 
                    'CRNRSTN_JS_FRAMEWORK_JQUERY_3_6_1', 
                    'CRNRSTN_JS_FRAMEWORK_JQUERY_2_2_4', 
                    'CRNRSTN_JS_FRAMEWORK_JQUERY_1_12_4', 
                    'CRNRSTN_JS_FRAMEWORK_JQUERY_1_11_1', 
                    'CRNRSTN_JS_FRAMEWORK_JQUERY_UI', 
                    'CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_14_2', 
                    'CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_13_2', 
                    'CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_12_1', 
                    'CRNRSTN_JS_FRAMEWORK_JQUERY_MOBILE', 
                    'CRNRSTN_JS_FRAMEWORK_JQUERY_MOBILE_1_4_5', 
                    'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS', 
                    'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_12_0', 
                    'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_11_3', 
                    'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_10_0', 
                    'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_PLUS_JQUERY', 
                    'CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_03_3', 
                    'CRNRSTN_JS_FRAMEWORK_REACT_CDN', 
                    'CRNRSTN_JS_FRAMEWORK_REACT_CDN_18_2_0', 
                    'CRNRSTN_JS_FRAMEWORK_REACT_DOM_CDN', 
                    'CRNRSTN_JS_FRAMEWORK_REACT_DOM_CDN_18_2_0', 
                    'CRNRSTN_JS_FRAMEWORK_MITHRIL_CDN', 
                    'CRNRSTN_JS_FRAMEWORK_MITHRIL_CDN_2_2_2', 
                    'CRNRSTN_JS_FRAMEWORK_BACKBONE', 
                    'CRNRSTN_JS_FRAMEWORK_BACKBONE_1_4_1', 
                    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_UMD', 
                    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD', 
                    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_ESM', 
                    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM', 
                    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_UMD_EDGE', 
                    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_ESM_EDGE', 
                    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_CDN', 
                    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_CDN', 
                    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_UNPKG', 
                    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_UNPKG', 
                    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_PAGECDN', 
                    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_PAGECDN', 
                    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_CDNJS', 
                    'CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_CDNJS', 
                    'CRNRSTN_JS_FRAMEWORK_PROTOTYPE', 
                    'CRNRSTN_JS_FRAMEWORK_PROTOTYPE_1_7_3', 
                    'CRNRSTN_JS_FRAMEWORK_SCRIPTACULOUS', 
                    'CRNRSTN_JS_FRAMEWORK_SCRIPTACULOUS_1_9_0', 
                    'CRNRSTN_JS_FRAMEWORK_PROTOTYPE_MOOFX', 
                    'CRNRSTN_JS_FRAMEWORK_SWFOBJECT_DOT_JS', 
                    'CRNRSTN_JS_FRAMEWORK_MOOTOOLS_MORE', 
                    'CRNRSTN_JS_FRAMEWORK_MOOTOOLS_MORE_1_6_0', 
                    'CRNRSTN_JS_FRAMEWORK_MOOTOOLS_CORE', 
                    'CRNRSTN_JS_FRAMEWORK_MOOTOOLS_CORE_1_6_0', 
                    'CRNRSTN_CSS_FRAMEWORK_SIMPLE_GRID', 
                    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM', 
                    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_24COL', 
                    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_16COL', 
                    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_12COL', 
                    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_24COL_RTL', 
                    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_16COL_RTL', 
                    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_12COL_RTL', 
                    'CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_RTL', 
                    'CRNRSTN_CSS_FRAMEWORK_FOUNDATION', 
                    'CRNRSTN_CSS_FRAMEWORK_FOUNDATION_6_7_5', 
                    'CRNRSTN_CSS_FRAMEWORK_HTML5_BOILERPLATE', 
                    'CRNRSTN_CSS_FRAMEWORK_HTML5_BOILERPLATE_8_0_0', 
                    'CRNRSTN_CSS_FRAMEWORK_RESPONSIVE_GRID_SYSTEM', 
                    'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC', 
                    'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RESET', 
                    'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RESET_RTL', 
                    'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RTL', 
                    'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_ADAPT', 
                    'CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_ADAPT_RTL', 
                    'CRNRSTN_CSS_FRAMEWORK_DEAD_SIMPLE_GRID', 
                    'CRNRSTN_CSS_FRAMEWORK_SKELETON', 
                    'CRNRSTN_CSS_FRAMEWORK_RWDGRID', 
                    'CRNRSTN_CSS_FRAMEWORK_RWDGRID_2_0', 
                    'CRNRSTN_CSS_FRAMEWORK_THIS_IS_DALLAS_SIMPLE_GRID');

                    foreach($framework_int as 
                        $index => $crnrstn_constant_nom)
                    {
                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * Initialize JS and CSS 
                         * framework integers. 
                         *
                         *
                         * 5 :: Saturday, July 18, 2026 @ 2059 hrs.
                         *
                         */
                        $this->R_data['int_flag'][$name] = (int) _crnrstn_int_return($crnrstn_constant_nom);

                    }

                }

                $resource_ctrl = array($this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_JQUERY'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_JQUERY_4_0_0'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_JQUERY_3_7_0'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_JQUERY_3_6_1'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_JQUERY_2_2_4'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_JQUERY_1_12_4'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_JQUERY_1_11_1'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_JQUERY_UI'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_14_2'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_13_2'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_12_1'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_JQUERY_MOBILE'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_JQUERY_MOBILE_1_4_5'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_12_0'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_11_3'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_10_0'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_PLUS_JQUERY'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_2_03_3'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_REACT_CDN'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_REACT_CDN_18_2_0'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_REACT_DOM_CDN'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_REACT_DOM_CDN_18_2_0'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_MITHRIL_CDN'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_MITHRIL_CDN_2_2_2'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_BACKBONE'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_BACKBONE_1_4_1'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_UNDERSCORE_UMD'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_UNDERSCORE_ESM'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_UNDERSCORE_UMD_EDGE'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_UNDERSCORE_ESM_EDGE'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_CDN'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_CDN'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_UNPKG'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_UNPKG'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_PAGECDN'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_PAGECDN'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_UMD_CDNJS'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_UNDERSCORE_1_13_6_ESM_CDNJS'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_PROTOTYPE'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_PROTOTYPE_1_7_3'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_SCRIPTACULOUS'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_SCRIPTACULOUS_1_9_0'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_PROTOTYPE_MOOFX'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_SWFOBJECT_DOT_JS'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_MOOTOOLS_MORE'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_MOOTOOLS_MORE_1_6_0'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_MOOTOOLS_CORE'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_FRAMEWORK_MOOTOOLS_CORE_1_6_0'], 
                                 $this->R_data['int_flag']['CRNRSTN_JS_MAIN'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_SIMPLE_GRID'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_24COL'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_16COL'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_12COL'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_24COL_RTL'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_16COL_RTL'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_12COL_RTL'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_960_GRID_SYSTEM_RTL'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_FOUNDATION'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_FOUNDATION_6_7_5'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_HTML5_BOILERPLATE'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_HTML5_BOILERPLATE_8_0_0'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_RESPONSIVE_GRID_SYSTEM'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RESET'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RESET_RTL'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_RTL'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_ADAPT'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_UNSEMANTIC_ADAPT_RTL'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_DEAD_SIMPLE_GRID'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_SKELETON'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_RWDGRID'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_RWDGRID_2_0'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_FRAMEWORK_THIS_IS_DALLAS_SIMPLE_GRID'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_MAIN_DESKTOP'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_MAIN_TABLET'], 
                                 $this->R_data['int_flag']['CRNRSTN_CSS_MAIN_MOBILE']);

                $tmp_output_ARRAY = $this->return_int_const_profile($resource_ctrl);

            break;
            case 'system_output_footer_html':

                /* CRNRSTN_RESOURCE_DOCUMENTATION
                 * CRNRSTN_WEB_ENGAGEMENT
                 * CRNRSTN_WEB_ANALYTICS
                 * CRNRSTN_SOAP_TUNNEL
                 * CRNRSTN_RESPONSE_REPORT
                 */

                $tmp_output_ARRAY = array();

            break;
            default:

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * All constants. 
                 *
                 */
                $tmp_output_ARRAY = $this->return_global_constants_string_ARRAY();

            break;

        }

        return $tmp_output_ARRAY;

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
    function return_file_profile(
             $file_path, 
             $is_unit_test = false)
    {

        $tmp_str_html_out = '';

        $this->concat_log_string(
               $tmp_str_html_out, 
               __LINE__ . 
               ' csc received valid file path [' . 
               $file_path . '].');

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * This will be a 
         * valid file. 
         *
         */
        $tmp_filename_ARRAY = explode('.', $file_path);
        $tmp_ext            = array_pop($tmp_filename_ARRAY);

        $this->concat_log_string(
               $tmp_str_html_out, 
               '[lnum ' . 
               __LINE__ . 
               '] [mthd ' . 
               __METHOD__ . 
               '] loading profile ' . 
               'for file extension [' . 
               $tmp_ext . 
               '].');
        
        /*error_log('[lnum ' . 
         *    __LINE__ . 
         *    '] [mthd ' . 
         *    __METHOD__ . 
         *    '] loading profile for file extension [' . 
         *    $tmp_ext . 
         *    '].');
         *
         */

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * TODO :: Key off of 
         *         mime type.
         *
         */
        $tmp_file_mime_type     = mime_content_type($file_path);
        $tmp_file_profile_const = $this->asset_routing_data_key_lookup(
                                         'mime_type', 
                                         $tmp_file_mime_type);

        if(!is_int($tmp_file_profile_const)){

            $tmp_file_profile_const = $this->asset_routing_data_key_lookup(
                                            'file_ext', 
                                            '.' . $tmp_ext);

        }

        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * Load file type 
         * system profile. 
         *
         */
        $tmp_meta_profile_ARRAY = $this->return_int_const_profile(
                                         $tmp_file_profile_const, 
                                         'ARRAY', 
                                         NULL, 
                                         $is_unit_test);

        if(isset($tmp_meta_profile_ARRAY['DESCRIPTION'])){

            $this->concat_log_string(
                   $tmp_str_html_out, 
                   '[lnum ' . 
                   __LINE__ . 
                   '] [mthd ' . 
                   __METHOD__ . 
                   '] system file ' . 
                   'meta data has been ' . 
                   'loaded successfully.');

            $this->concat_log_string(
                   $tmp_str_html_out, 
                   '[lnum ' . 
                   __LINE__ . 
                   '] [mthd ' . 
                   __METHOD__ . 
                   '] DESCRIPTION=' . 
                   print_r($tmp_meta_profile_ARRAY['DESCRIPTION'], true));

            /*
            $tmp_output_ARRAY['file_sys']['DESCRIPTION_SOURCE_URL']['MAIN'][] = 'https://en.wikipedia.org/wiki/ZIP_(file_format)';
            $tmp_output_ARRAY['file_sys']['DESCRIPTION_SOURCE_LASTMODIFIED']['MAIN'][] = '6/8/2023';
            $tmp_output_ARRAY['file_sys']['trademark_owner_name'][] = '';
            $tmp_output_ARRAY['file_sys']['trademark_owner_url'][] = '';
            $tmp_output_ARRAY['file_sys']['file_ext'] = array('.zip', '.zipx');
            $tmp_output_ARRAY['file_sys']['MEDIA_ELEMENT_KEY'] = array(CRNRSTN_ZIP);
            $tmp_output_ARRAY['file_sys']['icon_label'] = 'ZIP';
            $tmp_output_ARRAY['file_sys']['icon_color_class'] = 'COMPRESSION';

            //
            // CRNRSTN :: System File 
            // Extension UI Color Classes. 
            // 5 :: Sunday, June 11, 2023 @ 0736 hrs.
            $tmp_color_class_ARRAY = array('COMPRESSION' => '#FFF', 
                                           'TEXT-BASED::CSS' => '#FFF', 
                                           'TEXT-BASED::JS' => '#FFF', 
                                           'TEXT-BASED::JSON' => '#FFF', 
                                           'MYSQLI:SQL' => '#FFF', 
                                           'PHP::INI' => '#FFF', 
                                           'CRNRSTN::PHP::BASE64' => '#FFF', 
                                           'SERVER::HTACCESS' => '#FFF', 
                                           'IMAGE::FAVICON' => '#FFF', 
                                           'IMAGE::PNG' => '#FFF', 
                                           'IMAGE::GIF' => '#FFF', 
                                           'IMAGE::JPEG' => '#FFF', 
                                           'IMAGE' => '#FFF', 
                                           'AUDIO' => '#FFF', 
                                           'VIDEO' => '#FFF', 
                                           'SERVER::SCRIPT' => '#FFF', 
                                           'EXECUTABLE' => '#FFF', 
                                           'UI_HIDDEN' => '#FFF');

            $this->config_add_resource(
                   CRNRSTN_RESOURCE_ALL, 
                   'crnrstn_system_files_color_class_ARRAY', 
                   $tmp_color_class_ARRAY, 
                   'CRNRSTN::RESOURCE::LOCAL_FILE_SYSTEM');

            //
            // CRNRSTN :: System File 
            // Extension UI Line Weight Classes. 
            // 5 :: Sunday, June 11, 2023 @ 0736 hrs.
            $tmp_color_class_ARRAY = array('COMPRESSION' => 'HEAVY', 
                                           'TEXT-BASED::CSS' => 'HEAVY', 
                                           'TEXT-BASED::JS' => 'HEAVY', 
                                           'TEXT-BASED::JSON' => 'HEAVY', 
                                           'MYSQLI:SQL' => 'HEAVY', 
                                           'PHP::INI' => 'HEAVY', 
                                           'CRNRSTN::PHP::BASE64' => 'HEAVY', 
                                           'SERVER::HTACCESS' => 'HEAVY', 
                                           'IMAGE::FAVICON' => 'HEAVY', 
                                           'IMAGE::PNG' => 'HEAVY', 
                                           'IMAGE::GIF' => 'HEAVY', 
                                           'IMAGE::JPEG' => 'HEAVY', 
                                           'IMAGE' => 'HEAVY', 
                                           'AUDIO' => 'HEAVY', 
                                           'VIDEO' => 'HEAVY', 
                                           'SERVER::SCRIPT' => 'HEAVY', 
                                           'EXECUTABLE' => 'HEAVY', 
                                           'UI_HIDDEN' => 'HEAVY');
            
            $this->config_add_resource(
                   CRNRSTN_RESOURCE_ALL, 
                   'crnrstn_system_files_line_weight_class_ARRAY', 
                   $tmp_color_class_ARRAY, 
                   'CRNRSTN::RESOURCE::LOCAL_FILE_SYSTEM');

            */

            $this->concat_log_string(
                   $tmp_str_html_out, 
                   '[lnum ' . 
                   __LINE__ . 
                   '] [mthd ' . 
                   __METHOD__ . 
                   '] completed profile ' . 
                   'load for file extension [' . 
                   $tmp_ext . '].');

            if(isset($tmp_meta_profile_ARRAY['file_sys']['icon_color_class'])){

                $this->concat_log_string(
                       $tmp_str_html_out, 
                       '[lnum ' . 
                       __LINE__ . 
                       '] [mthd ' . 
                       __METHOD__ . 
                       '] proceeding to build HTML ' . 
                       'output using system color class[' . 
                       print_r($tmp_meta_profile_ARRAY['file_sys']['icon_color_class'], true) . 
                       '].');

                /*
                [2023-06-11 06:44:02.480146 EDT] [rtime 0.960218 secs]
                19683 csc proceeding to build HTML output with system extension profile
                [/var/www/html/evifweb.com/_crnrstn/class/crnrstn/crnrstn.inc.php:16063:string 'CRNRSTN_ZIP' (length=11)

                */

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * CRNRSTN :: System File 
                 * Extension Color Classes. 
                 * Where, $tmp_color_class_ARRAY = array('COMPRESSION' => '#FFF', 
                 *                                       'TEXT-BASED::CSS' => '#FFF', ...);
                 * $tmp_color_class_ARRAY = $this->get_resource(
                 *                                 'crnrstn_system_files_color_class_ARRAY', 
                 *                                 0, 
                 *                                 'CRNRSTN::RESOURCE::LOCAL_FILE_SYSTEM');
                 * $this->concat_log_string(
                 *        $tmp_str_html_out, 
                 *        __LINE__ . 
                 *        ' csc loading digi-paper ' . 
                 *        'background color class [' . 
                 *        $tmp_color_class_ARRAY[$tmp_meta_profile_ARRAY['file_sys']['icon_color_class']] . 
                 *        '].');
                 *
                 * CRNRSTN :: System File 
                 * Extension Color Classes. 
                 * Where, $tmp_line_weight_class_ARRAY = array('COMPRESSION' => 'HEAVY', 
                 *                                             'TEXT-BASED::HTML' => 'HEAVY', 
                 *                                             'TEXT-BASED::CSS' => 'HEAVY', ...);
                 * $tmp_line_weight_class_ARRAY = $this->get_resource(
                 *                                       'crnrstn_system_files_line_weight_class_ARRAY', 
                 *                                       0, 
                 *                                       'CRNRSTN::RESOURCE::LOCAL_FILE_SYSTEM');
                 * $this->concat_log_string(
                 *        $tmp_str_html_out, 
                 *        __LINE__ . 
                 *        ' csc completed load of ' . 
                 *        'the line weight class [' . 
                 *        $tmp_meta_profile_ARRAY['file_sys']['icon_line_weight_class'] . 
                 *        '].');
                 *
                 * $this->concat_log_string(
                 *        $tmp_str_html_out, 
                 *        __LINE__ . 
                 *        ' csc completed load of ' . 
                 *        'the line color class [' . 
                 *        $tmp_meta_profile_ARRAY['file_sys']['icon_line_color_class'] . 
                 *        '].');
                 *
                 */

            }else{

                $this->concat_log_string(
                       $tmp_str_html_out, 
                       '[lnum ' . 
                       __LINE__ . 
                       '] [mthd ' . 
                       __METHOD__ . 
                       '] unknown system color ' . 
                       'class received. ' . 
                       'OK to use FFF.');

            }

        }else{

            $this->concat_log_string(
                   $tmp_str_html_out, 
                   '[lnum ' . 
                   __LINE__ . 
                   '] [mthd ' . 
                   __METHOD__ . 
                   '] system file meta data ' . 
                   'has failed to load for ' . 
                   'file_profile_const[' . 
                   $tmp_file_profile_const . 
                   '].');

        }

        return $tmp_meta_profile_ARRAY;

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

/*
PHP native text links
method name
data type declarations in method def

= = = = =
Made it 

device_type()

public function wall_time(){
public function return_query_date_time_stamp(){
public function pretty_elapsed_time(){
public function return_micro_time(){
public function return_m_start_time(){

public function hash_ddo_memory_pointer($data_key, $data_type_family = 'CRNRSTN::RESOURCE', $env_key = NULL){

public function salt($length = NULL, $chars = NULL){

public function return_set_bits($constants_int_ARRAY, $first_match = false){
public function clear_all_bits_set_one($int_const_final, $is_bit_set = true, $integer_clear_ARRAY = array()){
public function toggle_bit($integer_const, $target_state = NULL){
public function is_bit_set($integer_const){
public function is_serialized_bit_set($name, $integer_const){
public function initialize_bit($integer_constant, $default_state = true){
public function initialize_serialized_bit($name, $integer_const, $default_state = true){

public function return_sticky_link($url, $meta_params = NULL){

public function get_disk_performance_metric($profile_name){

public function ini_set($ini_setting, $ini_value){
public function ini_get($ini_setting){
public function return_total_bytes_stored(){
public function set_timezone_default($timezone_id){
public function return_server_response_code($response_code, $crnrstn_html_burn = NULL){
public function client_ip(){
public function PHPMailer_debug_mode(){
public function system_hash_algo(){
public function soap_defencoding(){
public function openssl_get_cipher_methods(){

public function current_location(){
public function explode_url($uri){
public function extract_data_http($param, $transport_protocol = 'GET', $tunnel_encrypted = false){
public function isset_http_superglobal($transport_protocol = 'POST'){
public function isset_http_param($param, $transport_protocol = 'POST'){

public function data_encrypt($data = NULL, $encryption_channel = CRNRSTN_ENCRYPT_TUNNEL, $cipher_override = NULL, $secret_key_override = NULL, $hmac_algorithm_override = NULL, $options_bitwise_override = NULL){
public function isset_encryption($encryption_channel){
public function data_decrypt($data = NULL, $encryption_channel = CRNRSTN_ENCRYPT_TUNNEL, $cipher_override = NULL, $secret_key_override = NULL, $hmac_algorithm_override = NULL, $options_bitwise_override = NULL){

public function header_options_apply(){
public function header_options_add($header_array, $overwrite_existing = true){
public function header_signature_options_return(){


==================
==================
2983 multi lang
public function device_type_bit(){

    if($this->device_type_bit == 0){

        return CRNRSTN_DESKTOP;

    }

    return $this->device_type_bit;

}

public function device_type(){

    return $this->device_type;

}

public function crnrstn_root_directory(){
public function crnrstn_path_directory(){
public function crnrstn_http_endpoint($url_override = NULL){
public function is_configured(){

// DATE
public function return_log_priority_pretty($log_priority, $format = 'TEXT'){
public function return_pretty_delta_time($delta_secs, $microsecs = 0, $mode = 'ELAPSED_VERBOSE'){
public function elapsed_delta_time($watch_key, $decimal = 8){

// STRING
public function str_sanitize($str, $type){
public function proper_replace($pattern, $replacement, $original_str){
public function strrtrim($message, $strip){
public function str_split_unicode($str, $length = 1){

// FILE
public function grant_permissions_fwrite($filepath, $minimum_bytes_required = 0){
public function better_scandir($dir, $sorting_order = SCANDIR_SORT_ASCENDING, $secondary_asort = SORT_STRING, $descending_arsort = false){
public function file_url_cache_id($file_path){
public function validate_DIR_endpoint($dir_path, $endpoint_type = 'DESTINATION', $permissions_chmod = 775){
public function encode_image($file_path, $filetype = NULL){
public function system_base64_synchronize($data_key = NULL, $img_batch_size = 5){
public function mkdir_r($dirName, $mode = 777){

// MATHS
public function format_bytes($bytes, $precision = 2, $SI_output = false){
public function number_format_keep_precision($number, $dec_places = 0, $dec_point = '.', $thou_separate = ','){
public function tidy_boolean($val){

// HTTP

public function return_int_const_profile($resource_constant, $attribute = 'ARRAY'){

public function return_language_iso_profile($output_type = 'array'){

public function is_ssl(){

public function append_url_param($param_ARRAY, $tunnel_encrypt = true, $no_encrypt_param_ARRAY = NULL, $include_no_encrypt = true){
public function explode_url($uri){
public function proper_response_return($response = NULL, $header_options_array = NULL, $crnrstn_response_profile_key = NULL){

public function return_CRNRSTN_ASCII_ART($index = NULL){
public function highlight_text($text, $theme_profile = NULL){
public function create_pwd_hash_for_storage($user_submitted_password){

public function find_filesize($file){

public function catch_exception($exception_obj, $syslog_level = LOG_DEBUG, $method = NULL, $namespace = NULL, $output_profile = NULL, $output_profile_override_meta = NULL, $wcr_override_pipe = NULL){

public function return_youtube_embed($url, $width = 560, $height = 315, $fullscreen = true){
public function return_sticky_text_link($media_element_key, $url = NULL, $target = '_blank', $email_channel = false){

public function grant_permissions_fwrite($filepath, $minimum_bytes_required = 0){
public function file_url_cache_id($file_path){
public function validate_DIR_endpoint($dir_path, $endpoint_type = 'DESTINATION', $permissions_chmod = 775){
public function encode_image($file_path, $filetype = NULL){
public function mkdir_r($dirName, $mode = 777){

*/


/*
public function memory_performance($lookup_key = NULL, $output_type = 'usage', $delta_key = NULL){

//
// RETURNS ARRAY OF DESIRED REPORTS (STRING DATA).
// E.G. "Memory Usage: TOTAL_SYS[2 MiB]. SCRIPT_SYS[410.5625 KiB]. XDEBUG[410.625 KiB]."
public function mem_report($mem_report_queue, $output_format = 'TEXT', $php_logo_height = 20, $to_plaid = false, $is_HTML = false, $report_delimiter_TEXT = '. ', $report_delimiter_HTML = '<br>'){
    // where, $mem_report_queue = array(0,3,1);
    // where, $mem_report_queue = 1;

//
// CRNRSTN :: MEMORY USAGE REPORTING
// TODO :: MOVE THIS TO DOCUMENTATION FOR $oCRNRSTN->mem_report();
// MEMORY PERFORMANCE REPORTS.
-----
SYSTEM/SCRIPT COMBINED CURRENT REPORT - Both system and script memory allocations. Real-time metrics.
$mem_report_queue[] = 0;
MEM USAGE: 2 MiB total. 410.625 KiB by CRNRSTN ::

COMPLETE CPU LOAD REPORT - Current System processor load and with averages taken over 1, 5, and 15 min.
$mem_report_queue[] = 1;
CPU LOAD: [0.1%, 0.1%, 0.1%] average in the last [1, 5, 15min] respectively.

SYSTEM/SCRIPT (COMBINED) CURRENT DELTA FROM BOOT REPORT - The DELTAS (from BOOT) of both system and script memory allocations.
$mem_report_queue[] = 2:
MEM USAGE DELTA (+/- FROM PHP BOOT): +1.67 MiB total. +210.625 KiB by CRNRSTN ::

COMPLETE PROCESSOR LOAD DELTA FROM BOOT REPORT - Current system processor load DELTA (from BOOT) and with DELTAS of load averages taken over 1, 5, and 15min respectively.
$mem_report_queue[] = 3:
SYS LOAD (+/- FROM PHP BOOT): [+0.1%, +0.1%, +0.1%] average processor load in the last [1, 5, 15min] respectively.

SYSTEM DELTA FROM BOOT REPORT - The DELTA (from BOOT) of system memory usage.
$mem_report_queue[] = 4:
MEM USAGE (+/- FROM PHP BOOT): +1.67 MiB.

SCRIPT DELTA FROM BOOT REPORT - The DELTA (from BOOT) of script memory allocation.
$mem_report_queue[] = 5:
CRNRSTN :: MEM USAGE (+/- FROM PHP BOOT): +1.67 MiB.

SYSTEM DELTA FROM BOOT REPORT - The DELTA of current system memory usage from CRNRSTN :: BOOT.
$mem_report_queue[] = 6:
MEM USAGE DELTA (+/- FROM CRNRSTN :: BOOT): +1.67 MiB.

SCRIPT DELTA FROM BOOT REPORT - The DELTA (from CRNRSTN :: BOOT) of script memory allocation vs. a memory performance snapshot of the same from CRNRSTN :: BOOT.
$mem_report_queue[] = 7:
CRNRSTN :: MEM USAGE (+/- FROM CRNRSTN :: BOOT): +1.67 MiB.

FULL MEMORY BOOT STATE REPORT - The BOOT memory performance snapshot of system, script, and XDEBUG (script) memory allocations which was taken at the start of userland in PHP.
$mem_report_queue[] = 8:
BOOT MEM: PHP [2 MiB]. CRNRSTN :: [410.5625 KiB]. XDEBUG [410.625 KiB].

CRNRSTN :: BOOT STATE REPORT - The BOOT memory performance snapshot of CRNRSTN :: which was taken at the start of CRNRSTN :: _construct().
$mem_report_queue[] = 9;
BOOT MEM USAGE: CRNRSTN :: [410.5625 KiB]. XDEBUG_CRNRSTN [410.625 KiB].

CURRENT FULL MEMORY REPORT - System, script and XDEBUG (script) memory usage.
$mem_report_queue[] = 10;
MEM USAGE: PHP [2 MiB]. CRNRSTN :: [410.5625 KiB]. XDEBUG_CRNRSTN [410.625 KiB].

*/

/*
REFERENCE OF SYSTEM CONSTANTS ::
// CRNRSTN :: DEBUG MODE
CRNRSTN_DEBUG_OFF       // DEBUG MODE OFF.
CRNRSTN_DEBUG_SYSLOG    // DEBUG MODE REAL-TIME NATIVE PHP error_log() OUT.
CRNRSTN_DEBUG_ON        // DEBUG MODE IS ON, BUT SAY NOTHING UNTIL THE END.
* * WHAT YOU SAY AND HOW WILL BE ACCORDING TO THE LOGGING PROFILE.
* * IF CRNRSTN :: IS CONFIGURED TO HANDLE ALL ERRORS, THIS WILL AFFECT HOW NATIVE PHP ERRORS ARE HANDLED AS WELL.

// CRNRSTN :: OPENSSL ENCRYPTION PROFILE INTEGER CONSTANT
CRNRSTN_ENCRYPT_TUNNEL
* * DETAILS ::
* * TUNNEL ENCRYPTION IS USED BY CRNRSTN :: FOR POINT TO POINT COMMUNICATIONS
* * AFFECTS ::
* * ~ THE CRNRSTN :: FORM INTEGRATIONS HANDLER PACKET.
* *       ENCRYPTED DATA INJECTED AS HIDDEN FIELDS INTO FORMS TO FACILITATE CRNRSTN :: (1) RECEIVING, VALIDATING
* *       AND STORING THE FORM DATA FOR ACCESS BY METHOD CALL, (2) HANDLING ANY REDIRECT OF THE USER AFTER FORM
* *       SUBMISSION, (3) SUPPORT PRE-POPULATION OF FORM INPUT DATA ON RELOAD.
* * ~ STICKY LINKS
* * ~ SYSTEM GET DATA
* * ~ CRNRSTN :: PSEUDO-SOAP Services DATA TUNNEL LAYER PACKET. A SESSION CONFIGURATION OBJECT (JSON) OUTPUTTED FROM
* *       THE SYSTEM CONFIG DDO WITH DATA FLAGGED AS AUTHORIZED FOR OUTPUT TO THE PSEUDO-SOAP Services DATA TUNNEL
* *       LAYER ARCHITECTURE (PSSDTLA) [CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_PSSDTLA].

// CRNRSTN :: OPENSSL ENCRYPTION PROFILE INTEGER CONSTANT
CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_DATABASE
* * DETAILS ::
* * DATABASE ENCRYPTION IS USED BY CRNRSTN :: WHEN SENDING TO DATABASE FOR STORAGE
* * AFFECTS ::
* * ~ THE SYSTEM SESSION CONFIGURATION OBJECT. OUTPUT FROM THE SYSTEM CONFIG DDO FLAGGED AS AUTHORIZED FOR OUTPUT TO
* *   DATABASE [CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_DATABASE].

// CRNRSTN :: OPENSSL ENCRYPTION PROFILE INTEGER CONSTANTS
CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SESSION
CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_COOKIE
CRNRSTN_ENCRYPT_TUNNEL & CRNRSTN_CHANNEL_SOAP
CRNRSTN_ENCRYPT_OERSL

// CRNRSTN :: LOG PROFILES OF THE DEBUG MODE (OR PERSUASIONS OF THE KINDS OF THINGS THAT SHOULD BE REPORTED)
CRNRSTN_LOG_ALL                 // REPORT ON EVERYTHING. 100% RETURN ON ALL CALLS OF $oCRNRSTN->error_log().
CRNRSTN_LOG_NONE                // REPORT ON NOTHING. 0% RETURN ON ALL CALLS OF $oCRNRSTN->error_log().

CRNRSTN_LOG_ELECTRUM            // REPORT ON ELECTRUM. ELECTRUM IS A DATA TRANSFORM SERVICE FOR MOVING FILES.
CRNRSTN_DATABASE                // REPORT ON DATABASE.
CRNRSTN_DATABASE_CONNECTION     // REPORT ON DATABASE CONNECTION.
CRNRSTN_DATABASE_QUERY          // REPORT ON DATABASE QUERY.
CRNRSTN_DATABASE_QUERY_SILO     // REPORT ON DATABASE QUERY SILO.
CRNRSTN_DATABASE_QUERY_DYNAMIC  // REPORT ON DYNAMICALLY ASSEMBLED DATABASE QUERY. THINK DYNAMIC SERIALIZED SHARDS.
CRNRSTN_DATABASE_RESULT         // REPORT ON DATABASE RESULT SET PROCESSING.

CRNRSTN_BARNEY                  // REPORT ON ALL ERROR.
CRNRSTN_BARNEY_DATABASE         // REPORT ON ALL DATABASE ERROR.
CRNRSTN_BARNEY_FILE             // REPORT ON ALL FILE RELATED ERROR.
CRNRSTN_BARNEY_FTP              // REPORT ON ALL FTP ERROR.
CRNRSTN_BARNEY_ELECTRUM         // REPORT ON ALL ELECTRUM ERROR (ELECTRUM IS A DATA TRANSFORM SERVICE FOR MOVING FILES).
CRNRSTN_BARNEY_GABRIEL          // REPORT ON ALL EMAIL ERROR.
CRNRSTN_BARNEY_DISK             // REPORT ON ALL DISK RELATED ERROR (READ/WRITE).

// OUTPUT FORMAT PROFILE FLAGS FOR CRNRSTN :: LOGGING
CRNRSTN_LOG_EMAIL                   // LOG TO EMAIL.
CRNRSTN_LOG_PROXY & CRNRSTN_LOG_EMAIL             // LOG TO EMAIL. SEND THE MULTI-PART HTML EMAIL THROUGH ANOTHER SERVER.
CRNRSTN_LOG_FILE                    // LOG TO FILE.
CRNRSTN_LOG_FILE_FTP                // LOG TO FILE. SEND THE FILE TO ANOTHER SERVER VIA FTP.
CRNRSTN_LOG_SCREEN_TEXT             // LOG TO SCREEN. OUTPUT LOG DATA WITH \n LINE BREAKS.
CRNRSTN_LOG_SCREEN                  // LOG TO SCREEN. OUTPUT LOG DATA WITH \n<br> LINE BREAKS.
CRNRSTN_LOG_SCREEN_HTML             // LOG TO SCREEN. OUTPUT LOG DATA WITH <br> LINE BREAKS.
CRNRSTN_LOG_SCREEN_HTML_HIDDEN      // LOG TO SCREEN. OUTPUT LOG DATA WITH \n LINE BREAKS WITHIN <!-- --> TAGS.
CRNRSTN_LOG_DEFAULT                 // LOG TO PHP NATIVE error_log().

// FLAGS FOR USER INTERFACE THEME STYLES
// -----
// CRNRSTN_UI_PHPNIGHT              // REPLICATION OF LEAD DEVELOPER IDE THEME. HOW CRNRSTN :: Lightsaber LOOKS TO ME.
// CRNRSTN_UI_DARKNIGHT             // LIKE CRNRSTN_UI_PHPNIGHT, BUT DARKER. NOTHING COULD BE DARKER. NOTHING.
// CRNRSTN_UI_PHP                   // ALL ABOUT THE BUSINESS.
// CRNRSTN_UI_GREYSKY               // ALONE AND SAD WITH A NICE CUP OF COFFEE, A RACK MOUNTED DUAL-VIDEO CARD MAC PRO, AND FOUR (4) APPLE PRO DISPLAYS.
// CRNRSTN_UI_HTML                  // BE LIGHT AND HAPPY.
// CRNRSTN_UI_DAYLIGHT              // LIKE CRNRSTN_UI_HTML BUT...LIGHTER. NOTHING COULD BE LIGHTER.
// CRNRSTN_UI_FEATHER               // LIGHTER THAN DAYLIGHT.
// CRNRSTN_UI_GLASS_LIGHT_COPY      // UI EXPERIMENTAL
// CRNRSTN_UI_GLASS_DARK_COPY       // UI EXPERIMENTAL
// CRNRSTN_UI_WOOD                  // GOT WOOD?
// CRNRSTN_UI_TERMINAL              // GREEN TEXT. BLACK BACKGROUND. HARDCORE.
// CRNRSTN_UI_RANDOM

// DEVICE TYPE FLAGS
CRNRSTN_DESKTOP
CRNRSTN_TABLET
CRNRSTN_MOBILE

// CONTENT INCLUDE CONSTANTS :: CRNRSTN :: SYSTEM JAVASCRIPT FILE
CRNRSTN_JS_MAIN
* * RECEIVED BY $oCRNRSTN->ui_content_module_out().
* * PRODUCES, oCRNRSTN_JS IN THE DOM. A REPLICATION
* * * * OF CRNRSTN :: ON THE CLIENT...BUT WITH METHODS
* * * * SUPPORTING ANIMATIONS AND EFFECTS.

// CONTENT INCLUDE CONSTANTS :: CRNRSTN :: SYSTEM CSS FILE
CRNRSTN_CSS_MAIN_DESKTOP
CRNRSTN_CSS_MAIN_TABLET
CRNRSTN_CSS_MAIN_MOBILE
* * RECEIVED BY $oCRNRSTN->ui_content_module_out().
* * RETURN CSS CONTENT BY DEVICE TYPE

// CONTENT INCLUDE CONSTANTS :: JS + CSS
CRNRSTN_JS_FRAMEWORK_JQUERY_1_11_1                     // RETURN JQUERY 1.11.1 (ASSET IS HERE. LACKS IMPLEMENTATION.).
CRNRSTN_JS_FRAMEWORK_JQUERY                            // RETURN JQUERY.
CRNRSTN_JS_FRAMEWORK_JQUERY_UI                         // RETURN JQUERY UI.
CRNRSTN_JS_FRAMEWORK_JQUERY_MOBILE                     // RETURN JQUERY MOBILE.
CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS_PLUS_JQUERY       // RETURN LIGHTBOX.JS (BUILT ON JQUERY) WITH JQUERY ALONG SIDE.
CRNRSTN_JS_FRAMEWORK_LIGHTBOX_DOT_JS                   // RETURN LIGHTBOX.JS (BUILT ON JQUERY) WITHOUT JQUERY ALONG SIDE.
* * RECEIVED BY $oCRNRSTN->ui_content_module_out().
* * RETURN JAVASCRIPT FRAMEWORK.

// CONTENT RETURN CONSTANT :: CRNRSTN :: SSDTLA SYSTEMS INTEGRATIONS FORM PACKET
CRNRSTN_SOAP_TUNNEL
* * RECEIVED BY $oCRNRSTN->ui_content_module_out().

// CONTENT RETURN CONSTANT :: CRNRSTN :: SYSTEM FORM HANDLING CONTENT INJECTION
CRNRSTN_PSSDTLA_PACKET
* * RECEIVED BY $oCRNRSTN->ui_content_module_out().
* * RETURN ENCRYPTED FORM INPUT DATA TO INTEGRATE THE FORM INTO CRNRSTN ::

// CRNRSTN :: ASSET HANDLING POLICY (ALL SYSTEM IMAGES, SYSTEM CSS, SYSTEM JS)
CRNRSTN_MODE_PNG
* * E.G. RECEIVED BY $oCRNRSTN->config_init_images_transport_mode(). CAN ALSO BE OVERRIDDEN ELSEWHERE.
* * RETURN SYSTEM IMAGES AS PNG.
* * RETURN SYSTEM CSS BY URL REFERENCE TO SERIALIZED FILE NAME.
* * RETURN SYSTEM JS BY URL REFERENCE TO SERIALIZED FILE NAME.

// CRNRSTN :: ASSET HANDLING POLICY (ALL SYSTEM IMAGES, SYSTEM CSS, SYSTEM JS)
CRNRSTN_MODE_JPEG
* * E.G. RECEIVED BY $oCRNRSTN->config_init_images_transport_mode(). CAN ALSO BE OVERRIDDEN ELSEWHERE.
* * RETURN SYSTEM IMAGES AS JPG.
* * RETURN SYSTEM CSS BY URL REFERENCE TO SERIALIZED FILE NAME.
* * RETURN SYSTEM JS BY URL REFERENCE TO SERIALIZED FILE NAME.

// CRNRSTN :: ASSET HANDLING POLICY (ALL SYSTEM IMAGES, SYSTEM CSS, SYSTEM JS)
CRNRSTN_MODE_BASE64
* * E.G. RECEIVED BY $oCRNRSTN->config_init_images_transport_mode(). CAN ALSO BE OVERRIDDEN ELSEWHERE.
* * RETURN SYSTEM IMAGES BASE64 ENCODED.
* * RETURN SYSTEM CSS BY DIRECT INJECTION OF THE RAW CSS INTO DOM.
* * RETURN SYSTEM JS BY DIRECT INJECTION OF THE RAW JAVASCRIPT INTO DOM.

// CRNRSTN :: ASSET HANDLING POLICY FOR SINGLE SERVING REQUEST FOR DATA
CRNRSTN_SOAP_TUNNEL                 // RETURN SYSTEM IMAGE FOR EXPOSURE TO SOAP TRANSPORT. SOAP = 65,535 CHAR LIMIT.
CRNRSTN_BASE64                      // RETURN BASE64 ENCODE OF PNG FORMAT.
CRNRSTN_BASE64 & CRNRSTN_PNG        // RETURN BASE64 ENCODE OF PNG FORMAT.
CRNRSTN_BASE64 & CRNRSTN_JPEG       // RETURN BASE64 ENCODE OF JPEG FORMAT.
CRNRSTN_HTML                        // RETURN SYSTEM IMAGE BASE64 ENCODED WITHIN <IMG> DOM TAGS.
CRNRSTN_JPEG                        // RETURN HTTP URI OF SYSTEM IMAGE IN JPEG FORMAT.
CRNRSTN_HTML                        // RETURN SYSTEM IMAGE AS JPEG WITHIN <IMG> DOM TAGS.
CRNRSTN_PNG                         // RETURN HTTP URI OF SYSTEM IMAGE IN PNG FORMAT.
CRNRSTN_HTML                        // RETURN SYSTEM IMAGE AS PNG WITHIN <IMG> DOM TAGS.
* * E.G. RECEIVED BY $oCRNRSTN->return_creative().

// CONTENT INCLUDE CONSTANT :: UGC ANALYTICS
CRNRSTN_WEB_ANALYTICS
* * RETURN UGC ANALYTICS TAG(S).

// CONTENT INCLUDE CONSTANT :: UGC ENGAGEMENT
CRNRSTN_WEB_ENGAGEMENT
* * RETURN UGC ENGAGEMENT TAG(S).

/////////// STILL MORE
CRNRSTN_PERFORMANCE_MONITOR
CRNRSTN_IP_SECURITY
CRNRSTN_GABRIEL
CRNRSTN_SMTP_AUTHENTICATION
CRNRSTN_EMAIL
CRNRSTN_ELECTRUM
CRNRSTN_ELECTRUM_THREAD
CRNRSTN_ELECTRUM_COMM
CRNRSTN_ELECTRUM_FTP
CRNRSTN_ELECTRUM_LOCALDIR
CRNRSTN_FILE_MANAGEMENT
CRNRSTN_CREATIVE_EMBED
CRNRSTN_FILE_RECEIVE
CRNRSTN_FILE_LOCALDIR_MOVE
CRNRSTN_FILE_FTP_SEND
CRNRSTN_FILE_FTP_RECEIVE
CRNRSTN_FILE_SOAP_SEND
CRNRSTN_FILE_SOAP_RECEIVE
CRNRSTN_FILE_CURL_SEND
CRNRSTN_FILE_CURL_RECEIVE
CRNRSTN_CSS_EMAIL_CLIENT_VALIDATE
CRNRSTN_SOAP
CRNRSTN_SOAP_SERVER
CRNRSTN_SOAP_CLIENT
CRNRSTN_PROXY_KINGS_HIGHWAY
CRNRSTN_PROXY_EMAIL
CRNRSTN_PROXY_ELECTRUM
CRNRSTN_PROXY_AUTHENTICATE

CRNRSTN_UI_INTERACT
self::$R_data['int_flag']['R_authorize_all']
CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_DATABASE
CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SSDTLA
CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_PSSDTLA
CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SESSION
CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_COOKIE
CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_SOAP
CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_GET
CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_POST
CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME
CRNRSTN_AUTHORIZE & CRNRSTN_EMAIL
CRNRSTN_AUTHORIZE & CRNRSTN_USERNAME
CRNRSTN_AUTHORIZE & CRNRSTN_PASSWORD

CRNRSTN_RESOURCE_ALL
CRNRSTN_RESOURCE_OPENSOURCE
CRNRSTN_RESOURCE_NEWS_SYNDICATION
CRNRSTN_WORDPRESS_DEBUG

ADDITIONAL FILE EXTENSIONS:
"asmx","master","xsl"


Last Modified: Saturday, July 18, 2026 @ 0815 hrs.

*/

/*
5 :: Thursday, September 14, 2023 @ 0147 hrs.

A CHECKLIST.
TODO :: DELETE LISTED ITEMS WHEN DOM UNIT TEST FILE RESOURCE PATH IS ESTABLISHED.
SEE, /_R/_config/config.mime_types       // 185+ mime-types. 260+ FILE EXTENSIONS. 336.1 MB.
-----
case 'CRNRSTN_ICO':
case 'CRNRSTN_CSS':
    // '.css' => 'CRNRSTN_CSS',
case 'CRNRSTN_JS':
    // '.js' => 'CRNRSTN_JS',
case 'CRNRSTN_IMG':
//case 'CRNRSTN_BASE64 & CRNRSTN_GIF':
//case 'CRNRSTN_BASE64 & CRNRSTN_PNG':
//case 'CRNRSTN_BASE64 & CRNRSTN_JPEG':
case 'CRNRSTN_STRING':
case 'CRNRSTN_HTML':
    // PREVIOUSLY CRNRSTN_HTML_WRAPPED
    // '.html' => 'CRNRSTN_HTML',
    public_html/_R/ui/js/_lib/frameworks/jquery_ui/1.13.2/index.html
case 'CRNRSTN_BASE64':
case 'CRNRSTN_HTM':
    // '.htm' => 'CRNRSTN_HTM',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_HTM\Populating & Retrieving Data in a listbox.htm
case 'CRNRSTN_SHTML':
    // '.shtml' => 'CRNRSTN_SHTML',
    Projects/Creative/crnrstn_lightsaber/_unit_test_src_files/CRNRSTN_SHTML/management.shtml
case 'CRNRSTN_SHTM':
    // '.shtm' => 'CRNRSTN_SHTM',
case 'CRNRSTN_STM':
    // '.stm' => 'CRNRSTN_STM',
case 'CRNRSTN_XHTML':
    // '.xhtml' => 'CRNRSTN_XHTML',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_XHTML
case 'CRNRSTN_XML':
    // '.xml' => 'CRNRSTN_XML',
    public_html/_R/ui/css/_lib/frameworks/html5_boilerplate/8.0.0/browserconfig.xml
    public_html/_R/ui/css/_lib/frameworks/rwdgrid/2.0/js/html5shiv/test/jquery-1.7.1/data/dashboard.xml
case 'CRNRSTN_XSLT':
    // '.xslt' => 'CRNRSTN_XSLT',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_XSLT\nutrition
case 'CRNRSTN_XUL':
    // '.xul' => 'CRNRSTN_XUL',
case 'CRNRSTN_CSV':
    // '.csv' => 'CRNRSTN_CSV',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_CSV\
case 'CRNRSTN_TXT':
    // '.txt' => 'CRNRSTN_TXT',
    public_html/_R/ui/js/_lib/frameworks/moo.fx/2.0/License.txt
case 'CRNRSTN_SQL':
    // '.sql' => 'CRNRSTN_SQL',
    \Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_SQL\
case 'CRNRSTN_BAT':
    // '.bat' => 'CRNRSTN_BAT',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_BAT\
case 'CRNRSTN_PHP':
    // '.php' => 'CRNRSTN_PHP',
    public_html/_R/class/thirdparty/nusoap/nusoap.php
case 'CRNRSTN_PHAR':
    // '.phar' => 'CRNRSTN_PHAR',
case 'CRNRSTN_PHTML':
    // '.phtml' => 'CRNRSTN_PHTML',
case 'CRNRSTN_PHT':
    // '.pht' => 'CRNRSTN_PHT',
case 'CRNRSTN_PHPS':
    // '.phps' => 'CRNRSTN_PHPS',
case 'CRNRSTN_AS':
    // '.as' => 'CRNRSTN_AS',
    public_html/_R/ui/js/_lib/frameworks/swfobject/2.2/src/expressInstall.as
case 'CRNRSTN_C':
    // '.C' => 'CRNRSTN_C',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_C
case 'CRNRSTN_CC':
    // '.cc' => 'CRNRSTN_CC',
case 'CRNRSTN_H':
    // '.h' => 'CRNRSTN_H',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_H

    CRNRSTN_DLL
    CRNRSTN_APS
    CRNRSTN_AS
    CRNRSTN_ASAX
    CRNRSTN_ASCX
    CRNRSTN_ASMX
    CRNRSTN_ASPX
    CRNRSTN_CFC
    CRNRSTN_CMAK
    CRNRSTN_INI
    CRNRSTN_CONFIG
    CRNRSTN_CPP
    CRNRSTN_CS
    CRNRSTN_CSPROJ
    CRNRSTN_EXE
    CRNRSTN_FLA
    CRNRSTN_FLV
    CRNRSTN_GZ
    CRNRSTN_H
    CRNRSTN_ICO
    CRNRSTN_INCR
    CRNRSTN_JWS
    CRNRSTN_LICENSES
    CRNRSTN_LICX
    CRNRSTN_MANIFEST
    CRNRSTN_MDB
    CRNRSTN_NCB
    CRNRSTN_OTF
    CRNRSTN_PDB
    CRNRSTN_PL
    CRNRSTN_PROJDATA
    CRNRSTN_RC
    CRNRSTN_RC2
    CRNRSTN_RESOURCES
    CRNRSTN_RESX
    CRNRSTN_SLN
    CRNRSTN_SQL
    CRNRSTN_SUO
    CRNRSTN_USER
    CRNRSTN_VB
    CRNRSTN_VBPROJ
    CRNRSTN_VCPROJ
    CRNRSTN_WEBINFO
    CRNRSTN_XSLT
case 'CRNRSTN_RTF':
    // '.rtf' => 'CRNRSTN_RTF',
case 'CRNRSTN_TEX':
    // '.tex' => 'CRNRSTN_TEX',
case 'CRNRSTN_JSON':
    // '.json' => 'CRNRSTN_JSON',
case 'CRNRSTN_ICS':
    // '.ics' => 'CRNRSTN_ICS',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_ICS
case 'CRNRSTN_TSV':
    // '.tsv' => 'CRNRSTN_TSV',
case 'CRNRSTN_JSONLD':
    // '.jsonld' => 'CRNRSTN_JSONLD'
case 'CRNRSTN_MJS':
    // '.mjs' => 'CRNRSTN_MJS',
case 'CRNRSTN_JAR':
    // '.jar' => 'CRNRSTN_JAR',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_JAR
case 'CRNRSTN_ZIP':
    // '.zip' => 'CRNRSTN_ZIP',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_ZIP
case 'CRNRSTN_ZIPX':
    // '.zipx' => 'CRNRSTN_ZIPX',
case 'CRNRSTN_BZ':
    // '.bz' => 'CRNRSTN_BZ',
case 'CRNRSTN_BZ2':
    // '.bz2' => 'CRNRSTN_BZ2',
case 'CRNRSTN_GZ':
    // '.gz' => 'CRNRSTN_GZ',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_GZ
case 'CRNRSTN_GZIP':
    // '.gzip' => 'CRNRSTN_GZIP',
case 'CRNRSTN_GTAR':
    // '.gtar' => 'CRNRSTN_GTAR',
case 'CRNRSTN_7Z':
    // '.7z' => 'CRNRSTN_7Z',
case 'CRNRSTN_EPUB':
    // '.epub' => 'CRNRSTN_EPUB',
case 'CRNRSTN_TAR':
    // '.tar' => 'CRNRSTN_TAR',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_TAR
case 'CRNRSTN_OTF':
    // '.otf' => 'CRNRSTN_OTF',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_OTF
case 'CRNRSTN_WOFF':
    // '.woff' => 'CRNRSTN_WOFF',
case 'CRNRSTN_WOFF2':
    // '.woff2' => 'CRNRSTN_WOFF2',
case 'CRNRSTN_TTF':
    // '.ttf' => 'CRNRSTN_TTF',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_TTF
case 'CRNRSTN_ICO':
    // '.ico' => 'CRNRSTN_ICO',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_ICO
case 'CRNRSTN_JPG':
    // '.jpg' => 'CRNRSTN_JPG',
    public_html/_R/ui/js/_lib/frameworks/mithril/2.2.3/examples/animation/flowers.jpg
case 'CRNRSTN_JPE':
    // '.jpe' => 'CRNRSTN_JPE',
case 'CRNRSTN_JPEG':
    // '.jpeg' => 'CRNRSTN_JPEG',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_JPEG
case 'CRNRSTN_JPG2':
    // '.jpg2' => 'CRNRSTN_JPG2',
case 'CRNRSTN_JIF':
    // '.jif' => 'CRNRSTN_JIF',
case 'CRNRSTN_JFIF':
    // '.jfif' => 'CRNRSTN_JFIF',
case 'CRNRSTN_JFI':
    // '.jfi' => 'CRNRSTN_JFI',
case 'CRNRSTN_GIF':
    // '.gif' => 'CRNRSTN_GIF',
case 'CRNRSTN_BMP':
    // '.bmp' => 'CRNRSTN_BMP',
case 'CRNRSTN_PNG':
    // '.png' => 'CRNRSTN_PNG',
case 'CRNRSTN_SVG':
    // '.svg' => 'CRNRSTN_SVG',
case 'CRNRSTN_TIF':
    // '.tif' => 'CRNRSTN_TIF',
case 'CRNRSTN_TIFF':
    // '.tiff' => 'CRNRSTN_TIFF',
case 'CRNRSTN_WEBP':
    // '.webp' => 'CRNRSTN_WEBP',
case 'CRNRSTN_PIC':
    // '.pic' => 'CRNRSTN_PIC',
case 'CRNRSTN_PICT':
    // '.pict' => 'CRNRSTN_PICT',
case 'CRNRSTN_AVIF':
    // '.avif' => 'CRNRSTN_AVIF',
case 'CRNRSTN_MID':
    // '.mid' => 'CRNRSTN_MID',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_MID
case 'CRNRSTN_MIDI':
    // '.midi' => 'CRNRSTN_MIDI',
case 'CRNRSTN_AAC':
    // '.aac' => 'CRNRSTN_AAC',
case 'CRNRSTN_OGA':
    // '.oga' => 'CRNRSTN_OGA',
case 'CRNRSTN_MP1':
    // '.mp1' => 'CRNRSTN_MP1',
case 'CRNRSTN_MP2':
    // '.mp2' => 'CRNRSTN_MP2',
case 'CRNRSTN_M1A':
    // '.m1a' => 'CRNRSTN_M1A',
case 'CRNRSTN_M2A':
    // '.m2a' => 'CRNRSTN_M2A',
case 'CRNRSTN_MP3':
    // '.mp3' => 'CRNRSTN_MP3',
    _R/ui/js/_lib/frameworks/script.aculo.us/1.9.0/test/functional/sword.mp3
case 'CRNRSTN_MPGA':
    // '.mpga' => 'CRNRSTN_MPGA',
case 'CRNRSTN_MPA':
    // '.mpa' => 'CRNRSTN_MPA',
case 'CRNRSTN_MPV':
    // '.mpv' => 'CRNRSTN_MPV',
case 'CRNRSTN_MPG':
    // '.mpg' => 'CRNRSTN_MPG',
case 'CRNRSTN_RA':
    // '.ra' => 'CRNRSTN_RA'
case 'CRNRSTN_RAM':
    // '.ram' => 'CRNRSTN_RAM',
case 'CRNRSTN_RMP':
    // '.rmp' => 'CRNRSTN_RMP',
case 'CRNRSTN_DAT':
    // '.dat' => 'CRNRSTN_DAT',
case 'CRNRSTN_WAV':
    // '.wav' => 'CRNRSTN_WAV',
case 'CRNRSTN_WAVE':
    // '.wave' => 'CRNRSTN_WAVE',
case 'CRNRSTN_WMA':
    // '.wma' => 'CRNRSTN_WMA',
case 'CRNRSTN_WMV':
    // '.wmv' => 'CRNRSTN_WMV',
case 'CRNRSTN_ASF':
    // '.asf' => 'CRNRSTN_ASF',
case 'CRNRSTN_WM':
    // '.wm' => 'CRNRSTN_WM',
case 'CRNRSTN_WAX':
    // '.wax' => 'CRNRSTN_WAX',
case 'CRNRSTN_WVX':
    // '.wvx' => 'CRNRSTN_WVX',
case 'CRNRSTN_ASX':
    // '.asx' => 'CRNRSTN_ASX',
case 'CRNRSTN_WMX':
    // '.wmx' => 'CRNRSTN_WMX',
case 'CRNRSTN_OGG':
    // '.ogg' => 'CRNRSTN_OGG',
case 'CRNRSTN_WEBA':
    // '.weba' => 'CRNRSTN_WEBA',
case 'CRNRSTN_3GP':
    // '.3gp' => 'CRNRSTN_3GP',
case 'CRNRSTN_3G2':
    // '.3g2' => 'CRNRSTN_3G2',
case 'CRNRSTN_OPUS':
    // '.opus' => 'CRNRSTN_OPUS',
case 'CRNRSTN_M3U':
    // '.m3u' => 'CRNRSTN_M3U',
case 'CRNRSTN_OGV':
    // '.ogv' => 'CRNRSTN_OGV',
case 'CRNRSTN_WEBM':
    // '.webm' => 'CRNRSTN_WEBM',
case 'CRNRSTN_MP4':
    // '.mp4' => 'CRNRSTN_MP4',
case 'CRNRSTN_M4A':
    // '.m4a' => 'CRNRSTN_M4A',
case 'CRNRSTN_M4P':
    // '.m4p' => 'CRNRSTN_M4P',
case 'CRNRSTN_M4B':
    // '.m4b' => 'CRNRSTN_M4B',
case 'CRNRSTN_M4R':
    // '.m4r' => 'CRNRSTN_M4R',
case 'CRNRSTN_M4V':
    // '.m4v' => 'CRNRSTN_M4V',
case 'CRNRSTN_MPE':
    // '.mpe' => 'CRNRSTN_MPE',
case 'CRNRSTN_MPEG':
    // '.mpeg' => 'CRNRSTN_MPEG',
case 'CRNRSTN_MPV2':
    // '.mpv2' => 'CRNRSTN_MPV2',
case 'CRNRSTN_M1V':
    // '.m1v' => 'CRNRSTN_M1V',
case 'CRNRSTN_M2V':
    // '.m2v' => 'CRNRSTN_M2V',
case 'CRNRSTN_MOV':
    // '.mov' => 'CRNRSTN_MOV',
case 'CRNRSTN_QT':
    // '.qt' => 'CRNRSTN_QT',
case 'CRNRSTN_QIF':
    // '.qif' => 'CRNRSTN_QIF',
case 'CRNRSTN_QTI':
    // '.qti' => 'CRNRSTN_QTI',
case 'CRNRSTN_QTIF':
    // '.qtif' => 'CRNRSTN_QTIF',
case 'CRNRSTN_QTC':
    // '.qtc' => 'CRNRSTN_QTC',
case 'CRNRSTN_MOVIE':
    // '.movie' => 'CRNRSTN_MOVIE',
case 'CRNRSTN_MV':
    // '.mv' => 'CRNRSTN_MV',
case 'CRNRSTN_SWF':
    // '.swf' => 'CRNRSTN_SWF',
    public_html/_R/ui/css/_lib/frameworks/rwdgrid/2.0/js/html5shiv/test/data/paramtracer.swf
case 'CRNRSTN_AVI':
    // '.avi' => 'CRNRSTN_AVI',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_AVI
case 'CRNRSTN_AVS':
    // '.avs' => 'CRNRSTN_AVS',
case 'CRNRSTN_MJPG':
    // '.mjpg' => 'CRNRSTN_MJPG',
case 'CRNRSTN_TS':
    // '.ts' => 'CRNRSTN_TS',
case 'CRNRSTN_EOT':
    // '.eot' => 'CRNRSTN_EOT',
case 'CRNRSTN_ABW':
    // '.abw' => 'CRNRSTN_ABW',
case 'CRNRSTN_ARC':
    // '.arc' => 'CRNRSTN_ARC',
case 'CRNRSTN_AZW':
    // '.azw' => 'CRNRSTN_AZW',
case 'CRNRSTN_BIN':
    // '.bin' => 'CRNRSTN_BIN',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_BIN
case 'CRNRSTN_CMD':
    // '.cmd' => 'CRNRSTN_CMD',
case 'CRNRSTN_BTM':
    // '.btm' => 'CRNRSTN_BTM',
case 'CRNRSTN_CDA':
    // '.cda' => 'CRNRSTN_CDA',
case 'CRNRSTN_CSH':
    // '.csh' => 'CRNRSTN_CSH',
case 'CRNRSTN_ODT':
    // '.odt' => 'CRNRSTN_ODT',
case 'CRNRSTN_ODP':
    // '.odp' => 'CRNRSTN_ODP',
case 'CRNRSTN_ODS':
    // '.ods' => 'CRNRSTN_ODS',
case 'CRNRSTN_PDF':
    // '.pdf' => 'CRNRSTN_PDF',
case 'CRNRSTN_WKS':
    // '.wks' => 'CRNRSTN_WKS',
case 'CRNRSTN_WPS':
    // '.wps' => 'CRNRSTN_WPS',
case 'CRNRSTN_WPD':
    // '.wpd' => 'CRNRSTN_WPD',
case 'CRNRSTN_DOC':
    // '.doc' => 'CRNRSTN_DOC',
case 'CRNRSTN_WORD':
    // '.word' => 'CRNRSTN_WORD',
case 'CRNRSTN_W6W':
    // '.w6w' => 'CRNRSTN_W6W',
case 'CRNRSTN_XLSX':
    // '.xlsx' => 'CRNRSTN_XLSX',
case 'CRNRSTN_PPTX':
    // '.pptx' => 'CRNRSTN_PPTX',
case 'CRNRSTN_DOCX':
    // '.docx' => 'CRNRSTN_DOCX',
case 'CRNRSTN_DOCM':
    // '.docm' => 'CRNRSTN_DOCM',
case 'CRNRSTN_DOTM':
    // '.dotm' => 'CRNRSTN_DOTM',
case 'CRNRSTN_DOTX':
    // '.dotx' => 'CRNRSTN_DOTX',
case 'CRNRSTN_PPSX':
    // '.ppsx' => 'CRNRSTN_PPSX',
case 'CRNRSTN_POTX':
    // '.potx' => 'CRNRSTN_POTX',
case 'CRNRSTN_SLDX':
    // '.sldx' => 'CRNRSTN_SLDX',
case 'CRNRSTN_VSD':
    // '.vsd' => 'CRNRSTN_VSD',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_VSD
case 'CRNRSTN_MPKG':
    // '.mpkg' => 'CRNRSTN_MPKG',
case 'CRNRSTN_OGX':
    // '.ogx' => 'CRNRSTN_OGX',
case 'CRNRSTN_RAR':
    // '.rar' => 'CRNRSTN_RAR',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_RAR
case 'CRNRSTN_SH':
    // '.sh' => 'CRNRSTN_SH',
    Projects\Creative\crnrstn_lightsaber\_unit_test_src_files\CRNRSTN_RAR
case 'CRNRSTN_DWG':
    // '.dwg' => 'CRNRSTN_DWG',
case 'CRNRSTN_ARJ':
    // '.arj' => 'CRNRSTN_ARJ',
case 'CRNRSTN_ASD':
    // '.asd' => 'CRNRSTN_ASD',
case 'CRNRSTN_ASN':
    // '.asn' => 'CRNRSTN_ASN',
case 'CRNRSTN_CCAD':
    // '.ccad' => 'CRNRSTN_CCAD',
case 'CRNRSTN_DRW':
    // '.drw' => 'CRNRSTN_DRW',
case 'CRNRSTN_DXF':
    // '.dxf' => 'CRNRSTN_DXF',
case 'CRNRSTN_UNV':
    // '.unv' => 'CRNRSTN_UNV',
case 'CRNRSTN_IGES':
    // '.iges' => 'CRNRSTN_IGES'
case 'CRNRSTN_IGS':
    // '.igs' => 'CRNRSTN_IGS',
case 'CRNRSTN_HQX':
    // '.hqx' => 'CRNRSTN_HQX',
case 'CRNRSTN_MDB':
    // '.mdb' => 'CRNRSTN_MDB'
case 'CRNRSTN_XLA':
    // '.xla' => 'CRNRSTN_XLA',
case 'CRNRSTN_XLS':
    // '.xls' => 'CRNRSTN_XLS',
case 'CRNRSTN_XLT':
    // '.xlt' => 'CRNRSTN_XLT',
case 'CRNRSTN_XLM':
    // '.xlm' => 'CRNRSTN_XLM',
case 'CRNRSTN_XLSM':
    // '.xlsm' => 'CRNRSTN_XLSM',
case 'CRNRSTN_XLSB':
    // '.xlsb' => 'CRNRSTN_XLSB',
case 'CRNRSTN_XLAM':
    // '.xlam' => 'CRNRSTN_XLAM',
case 'CRNRSTN_XLTM':
    // '.xltm' => 'CRNRSTN_XLTM',
case 'CRNRSTN_XLW':
    // '.xlw' => 'CRNRSTN_XLW',
case 'CRNRSTN_POT':
    // '.pot' => 'CRNRSTN_POT',
case 'CRNRSTN_PPS':
    // '.pps' => 'CRNRSTN_PPS',
case 'CRNRSTN_PPT':
    // '.ppt' => 'CRNRSTN_PPT',
case 'CRNRSTN_PPTM':
    // '.pptm' => 'CRNRSTN_PPTM',
case 'CRNRSTN_POTM':
    // '.potm' => 'CRNRSTN_POTM',
case 'CRNRSTN_PPAM':
    // '.ppam' => 'CRNRSTN_PPAM',
case 'CRNRSTN_PPSM':
    // '.ppsm' => 'CRNRSTN_PPSM',
case 'CRNRSTN_SLDM':
    // '.sldm' => 'CRNRSTN_SLDM',
case 'CRNRSTN_PA':
    // '.pa' => 'CRNRSTN_PA',
case 'CRNRSTN_MPP':
    // '.mpp' => 'CRNRSTN_MPP',
case 'CRNRSTN_WRI':
    // '.wri' => 'CRNRSTN_WRI',
case 'CRNRSTN_ODA':
    // '.oda' => 'CRNRSTN_ODA',
case 'CRNRSTN_FLA':
    // '.fla' => 'CRNRSTN_FLA',
case 'CRNRSTN_AI':
    // '.ai' => 'CRNRSTN_AI',
case 'CRNRSTN_PSD':
    // '.psd'
case 'CRNRSTN_EPS':
    // '.eps' => 'CRNRSTN_EPS',
case 'CRNRSTN_PS':
    // '.ps' => 'CRNRSTN_PS',
case 'CRNRSTN_PART':
    // '.part' => 'CRNRSTN_PART',
case 'CRNRSTN_PRT':
    // '.prt' => 'CRNRSTN_PRT',
case 'CRNRSTN_SET':
    // '.set' => 'CRNRSTN_SET',
case 'CRNRSTN_STL':
    // '.stl' => 'CRNRSTN_STL',
case 'CRNRSTN_SOL':
    // '.sol' => 'CRNRSTN_SOL',
case 'CRNRSTN_ST':
    // '.st' => 'CRNRSTN_ST',
case 'CRNRSTN_STEP':
    // '.step' => 'CRNRSTN_STEP',
case 'CRNRSTN_STP':
    // '.stp' => 'CRNRSTN_STP',
case 'CRNRSTN_VDA':
    // '.vda' => 'CRNRSTN_VDA',
case 'CRNRSTN_BCPIO':
    // '.bcpio' => 'CRNRSTN_BCPIO',
case 'CRNRSTN_CPIO':
    // '.cpio' => 'CRNRSTN_CPIO',
case 'CRNRSTN_DCR':
    // '.dcr' => 'CRNRSTN_DCR',
case 'CRNRSTN_DIR':
    // '.dir' => 'CRNRSTN_DIR',
case 'CRNRSTN_DXR':
    // '.dxr' => 'CRNRSTN_DXR',
case 'CRNRSTN_DVI':
    // '.dvi' => 'CRNRSTN_DVI',
case 'CRNRSTN_DWF':
    // '.dwf' => 'CRNRSTN_DWF',
case 'CRNRSTN_HDF':
    // '.hdf' => 'CRNRSTN_HDF',
case 'CRNRSTN_LATEX':
    // '.latex' => 'CRNRSTN_LATEX',
case 'CRNRSTN_MIF':
    // '.mif' => 'CRNRSTN_MIF',
case 'CRNRSTN_CDF':
    // '.cdf' => 'CRNRSTN_CDF',
case 'CRNRSTN_NC':
    // '.nc' => 'CRNRSTN_NC',
case 'CRNRSTN_SHAR':
    // '.shar' => 'CRNRSTN_SHAR',
case 'CRNRSTN_SIT':
    // '.sit' => 'CRNRSTN_SIT',
case 'CRNRSTN_SV4CPIO':
    // '.sv4cpio' => 'CRNRSTN_SV4CPIO',
case 'CRNRSTN_SV4CRC':
    // '.sv4crc' => 'CRNRSTN_SV4CRC',
case 'CRNRSTN_TCL':
    // '.tcl' => 'CRNRSTN_TCL',
case 'CRNRSTN_TEXI':
    // '.texi' => 'CRNRSTN_TEXI',
case 'CRNRSTN_TEXINFO':
    // '.texinfo' => 'CRNRSTN_TEXINFO',
case 'CRNRSTN_ROFF':
    // '.roff' => 'CRNRSTN_ROFF',
case 'CRNRSTN_T':
    // '.t' => 'CRNRSTN_T',
case 'CRNRSTN_TR':
    // '.tr' => 'CRNRSTN_TR',
case 'CRNRSTN_MAN':
    // '.man' => 'CRNRSTN_MAN',
case 'CRNRSTN_ME':
    // '.me' => 'CRNRSTN_ME',
case 'CRNRSTN_MS':
    // '.ms' => 'CRNRSTN_MS',
case 'CRNRSTN_USTAR':
    // '.ustar' => 'CRNRSTN_USTAR',
case 'CRNRSTN_SRC':
    // '.src' => 'CRNRSTN_SRC',
case 'CRNRSTN_HLP':
    // '.hlp' => 'CRNRSTN_HLP',
case 'CRNRSTN_AU':
    // '.au' => 'CRNRSTN_AU',
case 'CRNRSTN_SND':
    // '.snd' => 'CRNRSTN_SND',
case 'CRNRSTN_AIF':
    // '.aif' => 'CRNRSTN_AIF',
case 'CRNRSTN_AIFC':
    // '.aifc' => 'CRNRSTN_AIFC',
case 'CRNRSTN_AIFF':
    // '.aiff' => 'CRNRSTN_AIFF',
case 'CRNRSTN_VOC':
    // '.voc' => 'CRNRSTN_VOC',
case 'CRNRSTN_IEF':
    // '.ief' => 'CRNRSTN_IEF',
case 'CRNRSTN_RAS':
    // '.ras' => 'CRNRSTN_RAS',
case 'CRNRSTN_PNM':
    // '.pnm' => 'CRNRSTN_PNM',
case 'CRNRSTN_PBM':
    // '.pbm' => 'CRNRSTN_PBM',
case 'CRNRSTN_PGM':
    // '.pgm' => 'CRNRSTN_PGM',
case 'CRNRSTN_PPM':
    // '.ppm' => 'CRNRSTN_PPM',
case 'CRNRSTN_RGB':
    // '.rgb' => 'CRNRSTN_RGB',
case 'CRNRSTN_XBM':
    // '.xbm' => 'CRNRSTN_XBM',
case 'CRNRSTN_XPM':
    // '.xpm' => 'CRNRSTN_XPM',
case 'CRNRSTN_XWD':
    // '.xwd' => 'CRNRSTN_XWD',
case 'CRNRSTN_RTX':
    // '.rtx' => 'CRNRSTN_RTX',
case 'CRNRSTN_ETX':
    // '.etx' => 'CRNRSTN_ETX',
case 'CRNRSTN_SGM':
    // '.sgm' => 'CRNRSTN_SGM',
case 'CRNRSTN_SGML':
    // '.sgml' => 'CRNRSTN_SGML',
case 'CRNRSTN_VDO':
    // '.vdo' => 'CRNRSTN_VDO',
case 'CRNRSTN_VIV':
    // '.viv' => 'CRNRSTN_VIV',
case 'CRNRSTN_VIVO':
    // '.vivo' => 'CRNRSTN_VIVO',
case 'CRNRSTN_ICE':
    // '.ice' => 'CRNRSTN_ICE',
case 'CRNRSTN_SVR':
    // '.svr' => 'CRNRSTN_SVR',
case 'CRNRSTN_WRL':
    // '.wrl' => 'CRNRSTN_WRL',
case 'CRNRSTN_VRT':
    // '.vrt' => 'CRNRSTN_VRT',
case 'CRNRSTN_EXE':
    // '.exe' => 'CRNRSTN_EXE',
case 'CRNRSTN_BIT':
    // '.bit' => 'CRNRSTN_BIT',
case 'CRNRSTN_PAGES':
    // '.pages' => 'CRNRSTN_PAGES',
case 'CRNRSTN_KEY':
    // '.key' => 'CRNRSTN_KEY',
case 'CRNRSTN_AFPHOTO':
    // '.afphoto' => 'CRNRSTN_AFPHOTO',
case 'CRNRSTN_AFDESIGN':
    // '.afdesign' => 'CRNRSTN_AFDESIGN'
case 'CRNRSTN_CDR':
    // '.cdr'
case 'CRNRSTN_CPT':
    // '.cpt'

*/