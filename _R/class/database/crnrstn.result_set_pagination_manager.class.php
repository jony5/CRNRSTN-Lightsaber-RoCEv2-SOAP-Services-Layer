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
 * CLASS DEFINITION :: crnrstn_result_set_pagination_manager
 * CLASS VERSION    :: 1.00.0000
 * DATE             :: July 29, 2020 @ 1834 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber
 *                     SOAP Services Layer MySQL
 *                     Database Integrations
 *                     Services Layer Result Set
 *                     Pagination Manager
 *                     class object
 * DESCRIPTION      :: When this class definition
 *                     is complete, the CRNRSTN ::
 *                     Lightsaber Result Set
 *                     Pagination Manager class
 *                     object will provide an
 *                     integrated services layer
 *                     for result set processing
 *                     with an architecture that
 *                     traverses many areas of
 *                     the CRNRSTN :: Lightsaber
 *                     Database Services Layer.
 *
 *                     With browser UI HTML
 *                     link generation integrations
 *                     and a robust tool-kit of
 *                     server-side methods for
 *                     processing database
 *                     response result sets,
 *                     the CRNRSTN :: Lightsaber
 *                     Result Set Pagination
 *                     Manager will eventually
 *                     facilitate 1) server-side
 *                     application architectures
 *                     that are back of the house
 *                     as well as 2) support front
 *                     of the house UI link module
 *                     shenanigans complete with
 *                     header and footer string
 *                     buffer HTML output.
 *
 *                     The CRNRSTN :: Lightsaber
 *                     Result Set Pagination Manager
 *                     will have integrations to
 *                     support the following
 *                     architectures:
 *
 *                      - A turn-key and CSS
 *                        stylable footer HTML
 *                        output pagination module
 *                        complete with direct from
 *                        database result set
 *                        integrations.
 *                      - A headless database
 *                        result set paginator
 *                        supporting programmatic OOP
 *                        access to complete pages
 *                        of database results.
 *
 *
 *                        5
 *
 *                        Friday, July 26, 2024 @ 0937 hrs.
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
 * @link http://evifweb.jony5.com/ eVifweb® :: Corporate Sponsor.
 * @return object 
 * @access public
 *
 */
class crnrstn_result_set_pagination_manager 
{

    public $oCRNRSTN_USR;

    protected $total_results_count = array();
    protected $maximum_results_display_count = array();
    protected $current_pagination_serial;
    protected $current_pagination_sensation = array();
    protected $pagination_protocol = array();
    protected $pagination_sensation_endpoint = array();
    protected $pagination_handle_var = array();

    /**
     * R :: Content pending.
     *
     * @return
     * @access public
     *
     */
    function __construct()
    {
        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
         * CLR-SSL Database Integrations
         * Services Layer clean restart.
         *
         * 5 :: Friday, August 21, 2026 @ 0510 hrs.
         *
         */

    }

    public function ______pre_clr_ssl_construct($oCRNRSTN_USR)
    {

        $this->oCRNRSTN_USR = $oCRNRSTN_USR;

    }

    public function return_pagination_state_HTML($pagination_serial = NULL)
    {

        try{

            if(!isset($pagination_serial)){

                if(!isset($this->current_pagination_serial)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Pagination UI state HTML ' . 
                        'is being requested, but no ' . 
                        'pagination serial has been set.');

                }else{

                    //$tmp_pagination_serial = $this->current_pagination_serial;
                    $tmp_pagination_serial = $this->oCRNRSTN_USR->returnPaginationSerial();
                    $tmp_form_serial = 'crnrstn_' . $this->oCRNRSTN_USR->crc_int32('pagination_sensation_form_' . $tmp_pagination_serial);
                    //$tmp_form_input = 'crnrstn_' . $this->oCRNRSTN_USR->crc_int32('pagination_sensation_cell_selection');
                    $tmp_form_input = $this->get_pagination_variable_name($tmp_pagination_serial);

                    error_log('69 paginator - listen for paginate @ [' . $tmp_form_serial.'][' . $tmp_form_input.']');
                    $this->oCRNRSTN_USR->form_input_add($tmp_form_serial, $tmp_form_input, true);
                    #$this->oCRNRSTN_USR->return_serialized_input_fields($tmp_form_serial);

                    $tmp_endpoint = $this->return_pagination_endpoint();
                    $tmp_transport_protocol = $this->return_pagination_protocol();

                    //error_log('71 pagination sensation requested - input=' . $tmp_form_input);
                    $tmp_requested_position = $this->oCRNRSTN_USR->get_http_resource($tmp_form_input);
                    //error_log('73 pagination sensation requested [' . $tmp_form_input.'] via [' . $tmp_transport_protocol.'] = ' . $tmp_requested_position);
                    $this->set_current_pagination_position($tmp_requested_position);

                    $tmp_curr_page = $this->return_current_pagination();
                    $tmp_nxt_page = $tmp_curr_page+1;
                    $tmp_prev_page = $tmp_curr_page-1;
                    $tmp_max_display = $this->return_maximum_result_display_count();
                    $tmp_result_cnt_total = $this->return_result_count_total();
                    $pagination_form_html = $this->return_form_html($tmp_endpoint, $tmp_transport_protocol, $tmp_form_serial, $tmp_form_input);

                    $tmp_total_page_cnt = ceil($tmp_result_cnt_total/$tmp_max_display) + 1;

                    //error_log('80 pagination sensation - http[' . $tmp_endpoint.'][' . $tmp_transport_protocol.'] tot-page-cnt=[' . $tmp_total_page_cnt.'] now-page=[' . $tmp_curr_page.'] max-show[' . $this->return_maximum_result_display_count().'] tot-rec=[' . $this->return_result_count_total().']');

                    $pagenation_prefix = '<div class="cb_10"></div>
                    <div class="crnrstn_paginate_wrapper">
                        <div class="crnrstn_paginate_lnk_wrapper">';

                    $pagenation_postfix = '<div class="cb"></div>
                        </div>
                    </div>';

                    $tmp_cellHTML_out = '';
                    $front_half_cnt = $tmp_total_page_cnt;
                    $start_paginate = 1;
                    $start_dot = 100;
                    $end_dot = $tmp_total_page_cnt-4;

                    if($tmp_total_page_cnt < 16){

                        $start_paginate = 1;
                        $start_dot = $tmp_total_page_cnt+1;

                    }else{

                        if($tmp_total_page_cnt>16){
                            # x x x x x ... x x x
                            //$start_dot = $tmp_total_page_cnt-16;
                            $start_dot = 10;
                            $end_dot = $tmp_total_page_cnt-3;

                            if($end_dot<$start_dot){

                                $end_dot = $start_dot + 1;

                            }

                        }

                    }

                    /**

                    MAXIMUM PAGINATION LINKS SANS DOTS = 15
                    MAXIMUM PAGINATION LINKS TOTAL = 8 (5.3)
                    MINIMUM PAGINATION LINKS TRIGGER DOTS = 6, with MINIMUM OF 2 LINKS AFTER DOTS.
                    FULL COUNT =
                        * MAXIMUM PAGINATION LINKS AFTER DOTS = 3
                        * PAGINATION LINKS BEFORE DOTS = 5

                    */
                    $tmp_dot_flag = false;
                    for($i = $start_paginate; $i < $tmp_total_page_cnt; $i++){

                        if($i==$tmp_curr_page){

                            $tmp_cellHTML_out .= '<span class="crnrstn_paginate_cell crnrstn_active_pglnk">' . $i.'</span>';

                        }else{

                            if($i==$start_paginate && $tmp_curr_page>$start_paginate){

                                $tmp_cellHTML_out .= '<span class="crnrstn_paginate_cell"><a href="#" target="_self" onClick="crnrstn_' . $this->oCRNRSTN_USR->crc_int32('fire_click_event').'(' . $tmp_prev_page.'); return false;"><strong>&lt;</strong>&nbsp;Previous</a></span>';

                            }

                            if($i>$start_dot && !$tmp_dot_flag){
                                $tmp_dot_flag = true;
                                $tmp_cellHTML_out .= '<span class="crnrstn_paginate_cell crnrstn_pglnk_dots">&bullet;&nbsp;&bullet;&nbsp;&bullet;</span>';

                            }else{

                                if($i>$start_dot && $i<$tmp_total_page_cnt-5){


                                }else{

                                    $tmp_cellHTML_out .= '<span class="crnrstn_paginate_cell"><a href="#" target="_self" onClick="crnrstn_' . $this->oCRNRSTN_USR->crc_int32('fire_click_event').'(' . $i.'); return false;">' . $i.'</a></span>';

                                }

                                if($i==$tmp_total_page_cnt-1 && $tmp_curr_page<$tmp_total_page_cnt){

                                    $tmp_cellHTML_out .= '<span class="crnrstn_paginate_cell"><a href="#" target="_self" onClick="crnrstn_' . $this->oCRNRSTN_USR->crc_int32('fire_click_event').'(' . $tmp_nxt_page.'); return false;">Next&nbsp;<strong>&gt;</strong></a></span>';

                                }

                            }

                        }

                    }

                    return $pagenation_prefix.$tmp_cellHTML_out.$pagenation_postfix.$pagination_form_html;

                    /*
                    return '<div class="cb_10"></div>
                    <div class="crnrstn_paginate_wrapper">
                        <div class="crnrstn_paginate_lnk_wrapper">
                        <span class="crnrstn_paginate_cell"><a href="#" target="_self"><strong>&lt;</strong>&nbsp;Previous</a></span>
                            <span class="crnrstn_paginate_cell crnrstn_active_pglnk">1</span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">2</a></span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">3</a></span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">4</a></span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">5</a></span>
                            <span class="crnrstn_paginate_cell crnrstn_pglnk_dots">&bullet;&nbsp;&bullet;&nbsp;&bullet;</span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">25</a></span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">26</a></span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">27</a></span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">Next&nbsp;<strong>&gt;</strong></a></span>
                            <div class="cb"></div>
                        </div>
                    </div>';
                    */

                }

            }else{

                $tmp_pagination_serial = $this->oCRNRSTN_USR->returnPaginationSerial();
                $tmp_form_serial = 'crnrstn_' . $this->oCRNRSTN_USR->crc_int32('pagination_sensation_form_' . $tmp_pagination_serial);
                $tmp_form_input = $this->get_pagination_variable_name($tmp_pagination_serial);

                //error_log('69 paginator - listen for paginate @ [' . $tmp_form_serial.'][' . $tmp_form_input.']');
                $this->oCRNRSTN_USR->form_input_add($tmp_form_serial, $tmp_form_input, true);
                #$this->oCRNRSTN_USR->return_serialized_input_fields($tmp_form_serial);

                $tmp_endpoint = $this->return_pagination_endpoint();
                $tmp_transport_protocol = $this->return_pagination_protocol();

                //error_log('71 pagination sensation requested - input=' . $tmp_form_input);
                $tmp_requested_position = $this->oCRNRSTN_USR->get_http_resource($tmp_form_input);
                //error_log('73 pagination sensation requested [' . $tmp_form_input.'] via [' . $tmp_transport_protocol.'] = ' . $tmp_requested_position);
                $this->set_current_pagination_position($tmp_requested_position);

                $tmp_curr_page = $this->return_current_pagination();
                $tmp_nxt_page = $tmp_curr_page+1;
                $tmp_prev_page = $tmp_curr_page-1;
                $tmp_max_display = $this->return_maximum_result_display_count();
                $tmp_result_cnt_total = $this->return_result_count_total();
                $pagination_form_html = $this->return_form_html($tmp_endpoint, $tmp_transport_protocol, $tmp_form_serial, $tmp_form_input);

                $tmp_total_page_cnt = ceil($tmp_result_cnt_total/$tmp_max_display);

                //error_log('80 pagination sensation - http[' . $tmp_endpoint.'][' . $tmp_transport_protocol.'] tot-page-cnt=[' . $tmp_total_page_cnt.'] now-page=[' . $tmp_curr_page.'] max-show[' . $this->return_maximum_result_display_count().'] tot-rec=[' . $this->return_result_count_total().']');

                $pagenation_prefix = '<div class="cb_10"></div>
                    <div class="crnrstn_paginate_wrapper">
                        <div class="crnrstn_paginate_lnk_wrapper">';

                $pagenation_postfix = '<div class="cb"></div>
                        </div>
                    </div>';

                $tmp_cellHTML_out = '';
                for($i = 1; $i < $tmp_total_page_cnt + 1; $i++){

                    if(($i == 1) && ($tmp_curr_page > 1)){

                        $tmp_cellHTML_out .= '<span class="crnrstn_paginate_cell"><a href="#" target="_self" onClick="crnrstn_' . $this->oCRNRSTN_USR->crc_int32('fire_click_event').'(' . $tmp_prev_page.'); return false;"><strong>&lt;</strong>&nbsp;Previous</a></span>';

                    }else{

                        if($i == 1){

                            //$tmp_cellHTML_out .= '<span class="crnrstn_paginate_cell"><strong>&lt;</strong>&nbsp;Previous</span>';

                        }

                    }

                    if($i == $tmp_curr_page){

                        $tmp_cellHTML_out .= '<span class="crnrstn_paginate_cell crnrstn_active_pglnk">' . $i.'</span>';

                    }else{

                        $tmp_cellHTML_out .= '<span class="crnrstn_paginate_cell"><a href="#" target="_self" onClick="crnrstn_' . $this->oCRNRSTN_USR->crc_int32('fire_click_event').'(' . $i.'); return false;">' . $i.'</a></span>';

                    }

                    if(($i == $tmp_total_page_cnt) && 
                        ($tmp_curr_page < $tmp_total_page_cnt))
                    {

                        $tmp_cellHTML_out .= '<span class="crnrstn_paginate_cell"><a href="#" target="_self" onClick="crnrstn_' . $this->oCRNRSTN_USR->crc_int32('fire_click_event').'(' . $tmp_nxt_page.'); return false;">Next&nbsp;<strong>&gt;</strong></a></span>';

                    }else{

                        if($i == $tmp_total_page_cnt){

                            //$tmp_cellHTML_out .= '<span class="crnrstn_paginate_cell">Next&nbsp;<strong>&gt;</strong></span>';

                        }
                    }
                }

                return $pagenation_prefix . 
                       $tmp_cellHTML_out . 
                       $pagenation_postfix . 
                       $pagination_form_html;

                /**
                return '<div class="cb_10"></div>
                    <div class="crnrstn_paginate_wrapper">
                        <div class="crnrstn_paginate_lnk_wrapper">
                        <span class="crnrstn_paginate_cell"><a href="#" target="_self"><strong>&lt;</strong>&nbsp;Previous</a></span>
                            <span class="crnrstn_paginate_cell crnrstn_active_pglnk">1</span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">2</a></span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">3</a></span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">4</a></span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">5</a></span>
                            <span class="crnrstn_paginate_cell crnrstn_pglnk_dots">&bullet;&nbsp;&bullet;&nbsp;&bullet;</span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">25</a></span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">26</a></span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">27</a></span>
                            <span class="crnrstn_paginate_cell"><a href="#" target="_self">Next&nbsp;<strong>&gt;</strong></a></span>
                            <div class="cb"></div>
                        </div>
                    </div>';

                */

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
             * Sunday, June 30, 2024 @ 1601 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN_USR->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);

            return false;

        }

    }

    public function add_pagination_passthrough_input_val(
                    $input_name, 
                    $input_value, 
                    $pagination_serial)
    {

        $tmp_form_serial = 'crnrstn_' . $this->oCRNRSTN_USR->crc_int32('pagination_sensation_form_' . $pagination_serial);
        //error_log('274 pagination - [' . 
        //    $tmp_form_serial . '][' . 
        //    $input_name.'][' . 
        //    $input_value . 
        //    ']');
        $this->oCRNRSTN_USR->form_hidden_input_add(
                             $tmp_form_serial, 
                             $input_name, 
                             true, 
                             $input_value, 
                             $input_name);

    }

    private function return_form_html(
                     $tmp_endpoint, 
                     $tmp_transport_protocol, 
                     $tmp_form_serial, 
                     $tmp_form_input)
    {

        $tmp_form_html = '<form action="' . 
                         $tmp_endpoint . '" method="' . 
                         $tmp_transport_protocol . '" name="' . 
                         $tmp_form_serial . '" id="' . 
                         $tmp_form_serial . '" enctype="multipart/form-data">
        <input type="hidden" name="' . 
        $tmp_form_input . '" id="' . 
        $tmp_form_input . '" value="">
        ' . $this->oCRNRSTN_USR->ui_content_module_out(CRNRSTN_PSSDTLA_PACKET, $tmp_form_serial) . '
        </form>
        <script>
        //<!--

        function ugc_search_sync(){

            var input_handle = document.getElementById("' . $tmp_form_input . '");
            input_handle.value = 1;

            var form_handle = document.getElementById("' . $tmp_form_serial . '");
            form_handle.submit();

        }

         function crnrstn_' . $this->oCRNRSTN_USR->crc_int32('fire_click_event') . '(pagination_index){

            var input_handle = document.getElementById("' . $tmp_form_input . '");
            input_handle.value = pagination_index;

            var form_handle = document.getElementById("' . $tmp_form_serial . '");
            form_handle.submit();

         }

        //-->
        </script>
        ';

        return $tmp_form_html;

    }

    public function get_pagination_variable_name($pagination_serial = NULL)
    {

        try{

            if(!isset($pagination_serial)){

                if(!isset($this->current_pagination_serial)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Pagination variable name is ' . 
                        'being requested, but no pagination ' . 
                        'serial has been set.');

                }else{

                    return $this->pagination_handle_var[$this->current_pagination_serial];

                }

            }else{

                if(!isset($this->pagination_handle_var[$pagination_serial])){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Pagination variable name is ' . 
                        'being requested, but the provided ' . 
                        'pagination serial, "' . 
                        $pagination_serial . 
                        '", has not been set.');

                }else{

                    return $this->pagination_handle_var[$pagination_serial];

                }

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
             * Sunday, June 30, 2024 @ 1601 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN_USR->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);

            return false;

        }

    }

    public function specify_pagination_variable_name(
                    $variable_name, 
                    $pagination_serial = NULL)
    {

        if(!isset($pagination_serial)){

            if(!isset($this->current_pagination_serial)){

                $this->current_pagination_serial = $this->oCRNRSTN_USR->generate_new_key();
                $this->pagination_handle_var[$this->current_pagination_serial] = $variable_name;

            }else{

                $this->pagination_handle_var[$this->current_pagination_serial] = $variable_name;

            }

        }else{

            $this->pagination_handle_var[$pagination_serial] = $variable_name;

        }

    }

    public function set_pagination_endpoint(
                    $form_action_endpoint_uri, 
                    $pagination_serial = NULL)
    {

        if(!isset($pagination_serial)){

            if(!isset($this->current_pagination_serial)){

                $this->current_pagination_serial = $this->oCRNRSTN_USR->generate_new_key();
                $this->pagination_sensation_endpoint[$this->current_pagination_serial] = $form_action_endpoint_uri;

            }else{

                $this->pagination_sensation_endpoint[$this->current_pagination_serial] = $form_action_endpoint_uri;

            }

        }else{

            $this->pagination_sensation_endpoint[$pagination_serial] = $form_action_endpoint_uri;

        }

    }

    public function return_pagination_endpoint($pagination_serial = NULL)
    {

        try{

            if(!isset($pagination_serial)){

                if(!isset($this->current_pagination_serial)){

                    $this->current_pagination_serial = $this->oCRNRSTN_USR->generate_new_key();
                    $this->pagination_sensation_endpoint[$this->current_pagination_serial] = '#';

                }else{

                    if(!isset($this->pagination_sensation_endpoint[$this->current_pagination_serial])){

                        $this->pagination_sensation_endpoint[$this->current_pagination_serial] = '#';

                    }

                }

                return $this->pagination_sensation_endpoint[$this->current_pagination_serial];

            }else{

                if(!isset($this->pagination_sensation_endpoint[$pagination_serial])){

                    $this->pagination_sensation_endpoint[$pagination_serial] = '#';

                }

                return $this->pagination_sensation_endpoint[$pagination_serial];

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
             * Sunday, June 30, 2024 @ 1601 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN_USR->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);

            return false;

        }

    }

    public function set_pagination_protocol(
                    $transport_protocol = 'get', 
                    $pagination_serial = NULL)
    {

        $http_transport_protocol = $transport_protocol;
        $http_transport_protocol = $this->oCRNRSTN_USR->str_sanitize($http_transport_protocol, 'http_protocol_simple');

        if(!isset($pagination_serial)){

            if(!isset($this->current_pagination_serial)){

                $this->current_pagination_serial = $this->oCRNRSTN_USR->generate_new_key();
                $this->pagination_protocol[$this->current_pagination_serial] = $http_transport_protocol;

            }else{

                $this->pagination_protocol[$this->current_pagination_serial] = $http_transport_protocol;

            }

        }else{

            $this->pagination_protocol[$pagination_serial] = $http_transport_protocol;

        }

    }

    public function return_pagination_protocol($pagination_serial = NULL)
    {

        if(!isset($pagination_serial)){

            if(!isset($this->current_pagination_serial)){

                $this->current_pagination_serial = $this->oCRNRSTN_USR->generate_new_key();
                $this->pagination_protocol[$this->current_pagination_serial] = 'get';

            }else{

                if(!isset($this->pagination_protocol[$this->current_pagination_serial])){

                    $this->pagination_protocol[$this->current_pagination_serial] = 'get';

                }

            }

            return $this->pagination_protocol[$this->current_pagination_serial];

        }else{

            if(!isset($this->pagination_protocol[$pagination_serial])){

                $this->pagination_protocol[$pagination_serial] = 'get';

            }

            return $this->pagination_protocol[$pagination_serial];

        }
    }

    public function set_current_pagination_position(
                    $page_number, 
                    $pagination_serial = NULL)
    {

        if(!isset($pagination_serial)){

            if(!isset($this->current_pagination_serial)){

                $this->current_pagination_serial = $this->oCRNRSTN_USR->generate_new_key();
                $this->current_pagination_sensation[$this->current_pagination_serial] = $page_number;

            }else{

                $this->current_pagination_sensation[$this->current_pagination_serial] = $page_number;

            }

        }else{

            $this->current_pagination_sensation[$pagination_serial] = $page_number;

        }

    }

    public function return_current_pagination($pagination_serial = NULL)
    {

        try{

            if(!isset($pagination_serial)){

                if(!isset($this->current_pagination_serial)){

                    $this->current_pagination_serial = $this->oCRNRSTN_USR->generate_new_key();
                    $this->current_pagination_sensation[$this->current_pagination_serial] = 1;

                }else{

                    if(!isset($this->current_pagination_sensation[$this->current_pagination_serial])){

                        $this->current_pagination_sensation[$this->current_pagination_serial] = 1;

                    }

                }

                return $this->current_pagination_sensation[$this->current_pagination_serial];

            }else{

                if(!isset($this->current_pagination_sensation[$pagination_serial])){

                    $this->current_pagination_sensation[$pagination_serial] = 1;

                }

                return $this->current_pagination_sensation[$pagination_serial];

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
             * Sunday, June 30, 2024 @ 1601 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN_USR->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);

            return false;

        }

    }

    public function return_maximum_result_display_count($pagination_serial = NULL)
    {

        try{

            if(!isset($pagination_serial)){

                if(!isset($this->current_pagination_serial)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Pagination result set ' . 
                        'maximum display count is being ' . 
                        'requested, but no pagination ' . 
                        'serial has been set or even ' . 
                        'incremented one time.');

                }else{

                    if(!isset($this->maximum_results_display_count[$this->current_pagination_serial])){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('Pagination maximum result ' . 
                            'set display count is being ' . 
                            'requested, but this value not ' . 
                            'been initialized for the serial [' . 
                            $this->current_pagination_serial . 
                            '].');

                    }else{

                        return $this->maximum_results_display_count[$this->current_pagination_serial];

                    }

                }

            }else{

                if(!isset($this->maximum_results_display_count[$pagination_serial])){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Pagination maximum result ' . 
                        'set display count is being ' . 
                        'requested, but this value ' . 
                        'not been initialized for ' . 
                        'the serial [' . 
                        $pagination_serial . 
                        '].');

                }else{

                    return $this->maximum_results_display_count[$pagination_serial];

                }

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
             * Sunday, June 30, 2024 @ 1629 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN_USR->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);

            return false;

        }

    }

    public function set_maximum_display_result_count(
                    $maximum_display_count, 
                    $pagination_serial = NULL)
    {

        try{

            if(!isset($pagination_serial)){

                if(!isset($this->current_pagination_serial)){

                    $this->current_pagination_serial = $this->oCRNRSTN_USR->generate_new_key();
                    $this->maximum_results_display_count[$this->current_pagination_serial] = $maximum_display_count;

                }else{

                    $this->maximum_results_display_count[$this->current_pagination_serial] = $maximum_display_count;

                }

            }else{

                $this->maximum_results_display_count[$pagination_serial] = $maximum_display_count;

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
             * Sunday, June 30, 2024 @ 1629 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN_USR->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);

            return false;

        }

        return NULL;

    }

    public function increment_results_count_total(
                    $result_count = 1, 
                    $pagination_serial = NULL)
    {

        if(!isset($pagination_serial)){

            if(!isset($this->current_pagination_serial)){

                $this->current_pagination_serial = $this->oCRNRSTN_USR->generate_new_key();
                $this->total_results_count[$this->current_pagination_serial] = $result_count;

            }else{

                if(!isset($this->total_results_count[$this->current_pagination_serial])){

                    $this->total_results_count[$this->current_pagination_serial] = $result_count;

                }else{

                    $this->total_results_count[$this->current_pagination_serial] += $result_count;

                }
            }

        }else{

            if(!isset($this->total_results_count[$pagination_serial])){

                $this->total_results_count[$pagination_serial] = $result_count;

            }else{

                $this->total_results_count[$pagination_serial] += $result_count;
            }
        }
    }

    public function set_results_count_total(
                    $results_count, 
                    $pagination_serial = NULL)
    {

        if(!isset($pagination_serial)){

            if(!isset($this->total_results_count)){

                $this->current_pagination_serial = $this->oCRNRSTN_USR->generate_new_key();
                $this->total_results_count[$this->current_pagination_serial] = $results_count;

            }else{

                $this->total_results_count[$this->current_pagination_serial] = $results_count;

            }

        }else{

            $this->total_results_count[$pagination_serial] = $results_count;

        }

    }

    public function return_pagination_serial()
    {

        try{

            if(!isset($this->current_pagination_serial)){

                /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                 * HOOOSTON, VE HAFF PROBLEM!
                 * https://www.wired.com/2011/04/alt-text-spacecraft/
                 *
                 */
                throw new Exception('The pagination serial is ' . 
                    'being requested, but this value ' . 
                    'has not been set.');

            }else{

                return $this->current_pagination_serial;

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
             * Sunday, June 30, 2024 @ 1629 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN_USR->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);

            return false;

        }
    }

    public function return_result_count_total($pagination_serial = NULL)
    {

        try{

            if(!isset($pagination_serial)){

                if(!isset($this->current_pagination_serial)){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Pagination result set ' . 
                        'total is being requested, but no ' . 
                        'pagination serial has been set ' . 
                        'or even incremented one time.');

                }else{

                    if(!isset($this->total_results_count[$this->current_pagination_serial])){

                        /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                         * HOOOSTON, VE HAFF PROBLEM!
                         * https://www.wired.com/2011/04/alt-text-spacecraft/
                         *
                         */
                        throw new Exception('Pagination result set ' . 
                            'total is being requested, but ' . 
                            'total results count not been ' . 
                            'initialized or even incremented ' . 
                            'one time for the serial [' . 
                            $this->current_pagination_serial . 
                            '].');

                    }else{

                        return $this->total_results_count[$this->current_pagination_serial];

                    }

                }

            }else{

                if(!isset($this->total_results_count[$pagination_serial])){

                    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
                     * HOOOSTON, VE HAFF PROBLEM!
                     * https://www.wired.com/2011/04/alt-text-spacecraft/
                     *
                     */
                    throw new Exception('Pagination result set ' .
                        'total is being requested, but total ' . 
                        'results count not been initialized ' . 
                        'for the serial [' . $pagination_serial . 
                        '].');

                }else{

                    return $this->total_results_count[$pagination_serial];

                }

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
             * Sunday, June 30, 2024 @ 1629 hrs.
             * Last Modified: Friday, February 27, 2026 @ 0233 hrs.
             *
             */
            $this->oCRNRSTN_USR->catch_exception(
                                 $e, 
                                 LOG_ERR, 
                                 __METHOD__, 
                                 __NAMESPACE__);

            return false;

        }

    }

    public function __destruct()
    {

    }

}