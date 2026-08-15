<?php
/*
// 5 ::
// Code is Poetry */
//$channel_constant = $this->oCRNRSTN->return_set_bits($this->oCRNRSTN->system_device_channel_constants());
$channel_constant = $this->oCRNRSTN->device_type_bit();
/*error_log(__LINE__ . 
 *    ' mit lic [' . 
 *    print_r($this->oCRNRSTN_USR->system_device_channel_constants(), true) . 
 *    '] $channel_constant=' . 
 *    print_r($channel_constant, true));
 * 
 */
/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
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
 *       5 :: Saturday, February 7, 2026 @ 2230 hrs.
 *
 */
/*
self::$R_data['int_flag']['R_channel_ALL'] // Support for ALL & ~int_flag bitwise logics.
self::$R_data['int_flag']['R_channel_GET']
self::$R_data['int_flag']['R_channel_POST']
self::$R_data['int_flag']['R_channel_RUNTIME']
self::$R_data['int_flag']['R_channel_DATABASE']
self::$R_data['int_flag']['R_channel_SSDTLA']
self::$R_data['int_flag']['R_channel_PSSDTLA']
self::$R_data['int_flag']['R_channel_SESSION']
self::$R_data['int_flag']['R_channel_COOKIE']
self::$R_data['int_flag']['R_channel_SOAP']
self::$R_data['int_flag']['R_channel_RDMA']
self::$R_data['int_flag']['R_channel_FILE']

*/

/*
self::$R_data['int_flag']['R_authorize_all']
self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_GET']
self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_POST']
self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_RUNTIME']
self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_DATABASE']
self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_SSDTLA']
self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_PSSDTLA']
self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_SESSION']
self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_COOKIE']
self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_SOAP']
self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_RDMA']
self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_channel_FILE']
self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_email']
self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_username']
self::$R_data['int_flag']['R_authorize'] & self::$R_data['int_flag']['R_password']

*/

switch($channel_constant){
    case 'null':
        //
        // MOBILE DEVICE EXPERIENCE
        $tmp_str = 'hello mobi world!';
        $tmp_str = '';

    break;
    case 'null_0':

        //
        // TABLET DEVICE EXPERIENCE
        /*
        To prefetch a page, add the data-prefetch attribute to a link that points to the page.
        data-prefetch="true"

        */
        $tmp_str = 'hello tablet world!';
        if(1==2) {
            ?><!DOCTYPE html>
            <html lang="en">
            <head>
                <?php
                include_once($this->oCRNRSTN->get_resource('DOCUMENT_ROOT') . 
                    $this->oCRNRSTN->get_resource('DOCUMENT_ROOT_DIR') . 
                    '/common/inc/head/head.inc.php');
                ?>
            </head>

            <body>
            <div data-role="page" id="myPage">
                <?php

                //$tmp_HTML = $oSideBitch_Usr->return_page_html($tmp_page_serial, 'mobile');

                //$tmp_formUnique = $this->oCRNRSTN->generate_new_key(4);
                //$tmp_pageName_Header = strtolower($oSideBitch_Usr->get_category($tmp_page_serial)).' ::';
                //require($tmp_path_directory . $tmp_system_directory . '/common/inc/search/search.mobi.inc.php');
                //require($tmp_path_directory . $tmp_system_directory . '/common/inc/nav/sidenav.mobi.inc.php');
                //require($tmp_path_directory . $tmp_system_directory . '/common/inc/header/header.mobi.inc.php');

                $tmp = '420';
                switch ($tmp) {
                    case '420':
                        //
                        // AV SERVICE SAINT
                        //$oMiniNav = new miniNav('avservice_saint', $this->oCRNRSTN);
                        //$oMiniNav->configureLink('streams', $this->oCRNRSTN->crnrstn_http_endpoint.'dashboard/streams/?kid=' . $this->oCRNRSTN->oHTTP_MGR->extractData($_GET, 'kid'));
                        //$oMiniNav->configureLink('obs clients', $this->oCRNRSTN->crnrstn_http_endpoint.'dashboard/obs/');
                        //$oMiniNav->configureLink('logs', $this->oCRNRSTN->crnrstn_http_endpoint.'dashboard/logs/');
                        //$oMiniNav->configureLink('refresh', $this->oCRNRSTN->crnrstn_http_endpoint.'dashboard/');

                        break;
                    case '320':
                        //
                        // SAINT SERVING TRANSLATION
                        $oMiniNav = new miniNav('translation_saint', $this->oCRNRSTN);
                        //$oMiniNav->configureLink('streams', $this->oCRNRSTN->crnrstn_http_endpoint().'_R/dashboard/streams/?kid=' . $this->oCRNRSTN->oHTTP_MGR->extractData($_GET, 'kid'));
                        $oMiniNav->configureLink('logs', $this->oCRNRSTN->crnrstn_http_endpoint() . '_R/dashboard/logs/');
                        $oMiniNav->configureLink('refresh', $this->oCRNRSTN->crnrstn_http_endpoint() . '_R/dashboard/');

                        break;

                }

                //$tmp_formUnique = $this->oCRNRSTN->generate_new_key(4);
                //$tmp_pageName_Header = 'home ::';
                //require($this->oCRNRSTN->crnrstn_http_endpoint.'/common/inc/search/search.mobi.inc.php');
                //require($this->oCRNRSTN->crnrstn_http_endpoint.'/common/inc/nav/sidenav.mobi.inc.php');
                //require($this->oCRNRSTN->crnrstn_http_endpoint.'/common/inc/header/header.mobi.inc.php');

                ?>

                <!--
                //
                // BEGIN MAIN CONTENT -->
                <div role="main" class="ui-content" id="myPage">
                    <?php
                    echo 'hello tablet world!';
                    ?>

                </div><!-- /content -->

                <?php
                require($this->oCRNRSTN->get_resource('DOCUMENT_ROOT') . 
                    $this->oCRNRSTN->get_resource('DOCUMENT_ROOT_DIR') . 
                    '/common/inc/footer/footer.inc.php');

                ?>

            </div><!-- /page -->

            </body>
            </html>

            <?php
        }

    break;
    case CRNRSTN_MOBILE:
    case CRNRSTN_TABLET:
    default:
        // CRNRSTN_DESKTOP:

        //
        // CRNRSTN :: MEMORY USAGE PERFORMANCE REPORTING.
        $tmp_text_break = '.
';

        $mem_report_queue = $this->oCRNRSTN->get_resource('mem_rpt_mit_license_modal', 0, 'CRNRSTN::RESOURCE::REPORTING');
        $tmp_mem_str = $this->oCRNRSTN->mem_report($mem_report_queue, 'TEXT', 10, false, true, $tmp_text_break, '<br>');

        //
        // DESKTOP EXPERIENCE
        $tmp_http_root = $this->oCRNRSTN->current_location();

        $tmp_str = '<!DOCTYPE html>
    <html lang="' . $this->oCRNRSTN->iso_language_profile() . '">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        ' . $this->oCRNRSTN->return_creative('CRNRSTN_ICO', CRNRSTN_ICO) . '
        ' . $this->oCRNRSTN->ui_content_module_out(CRNRSTN_JS_FRAMEWORK_JQUERY_UI) .
            $this->oCRNRSTN->ui_content_module_out(CRNRSTN_CSS_MAIN_DESKTOP & CRNRSTN_JS_MAIN) . '
    </head>
    <body>
<!--
/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * The CRNRSTN :: Lightsaber RoCEv2 SOAP 
 * Services Layer (CLR-SSL) Multi-Channel 
 * Decoupled Data Tunneling Layer (MC-DDTL) 
 * Data Storage Object is represented or 
 * embodied in an OpenSSL Encrypted JSON 
 * Token or Packet...in certain channels. 
 * This architecture is used to provide 
 * (read as generate) and maintain: 
 * - The Pseudo-SOAP Services Data Tunnel 
 *   Layer encrypted JSON data Packet 
 *   (PSSDTL-P) stored in the DOM for 
 *   certain CLR-SSL data channels: 
 *   ~ GET, 
 *   ~ POST, 
 *   ~ COOKIE, 
 *   ~ PSSDTLA, and 
 *   ~ SSDTLA. 
 *
 * - The SOAP Services Data Tunnel Layer 
 *   encrypted JSON data packet (SSDTL-P), 
 *   FORM INTEGRATIONS, 
 *  SESSION, DATABASE, AND oCRNRSTN_JS.
 * 5 :: Friday, August 5, 2022 @ 2241 hrs.
 * Last Modified: Saturday, February 7, 2026 @ 2259 hrs.
 *
 */

/*

// 5 :: Friday, August 5, 2022 @ 2241 hrs.
// IF WE\'RE TALKING SSDTLP, THEN WE NEED TO FUCK WITH SOAP
// OBJECTS NOW (YEAH, FUCK JSON!)...WHICH I AM NOT...AT THE MOMENT.

// 5 :: Sunday, September 11, 2022 @ 0230 hrs.
// WE WILL WRAP THE PSSDTL WITH THE SSDTL. SO SOAP-WRAPPED PSSDTLP IS #WINNING.
// A CRNRSTN :: DATA PACKET IS AN ENCRYPTED JSON OBJECT WRAPPED IN A SOAP OBJECT (FUCK YEAH! JSON!).
//
// CRNRSTN :: DATA PACKET IS A THING NOW.
//preach($data_attribute = \'value\', $data_key = NULL, $data_auth_request = CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME, $index = 0)

$tmp_str = $this->oCRNRSTN_CONFIG_MGR->oCRNRSTN_DDO->preach(\'crnrstn_data_packet\', $data_key = NULL, CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME, $index = 0);

$tmp_str_out .= \'
{
    "HASH" : \' . $this->oCRNRSTN->hash($tmp_attribute_key . $this->oCRNRSTN->hash($this->data_value_ARRAY[$tmp_attribute_key][$tmp_iterator], \'md5\') . $this->data_type_ARRAY[$tmp_attribute_key][$tmp_iterator], \'md5\') . \'",
    "KEY" : "\' . $this->oCRNRSTN->return_clean_json_string($tmp_attribute_key) . \'",
    "LENGTH" : "\' . $tmp_val_len . \'",
    "TYPE" : "\' . $this->data_type_ARRAY[$tmp_attribute_key][$tmp_iterator] . \'",
    "VALUE" : \' . $this->oCRNRSTN->return_clean_json_string($tmp_val) . \',
    "TTL" : \'$this->oCRNRSTN->return_clean_json_string($this->ttl_profile_ARRAY[$data_key][$index])\',
    "AUTH_PROFILE" : \' . $this->oCRNRSTN->return_clean_json_string($tmp_val) . \'
},\';

-----
CRNRSTN :: MULTI-CHANNEL DECOUPLED DATA 
OBJECT (MC-DDO) SERVICES LAYER AUTHORIZATION 
PROFILES FOR DATA HANDLING.
-----
where $data_auth_request = 
-----
self::$R_data[\'int_flag\'][\'R_authorize_all\']
self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_channel_GET\']
self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_channel_POST\']
self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_channel_COOKIE\']
self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_channel_SESSION\']
self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_channel_DATABASE\']
self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_channel_SSDTLA\']
self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_channel_PSSDTLA\']            
self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_channel_RUNTIME\']
self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_channel_SOAP\']
self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_channel_RDMA\']
self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_channel_FILE\']
self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_email\']
self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_username\']
self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_password\']

# C # R # N # R # S # T # N # :: # L # I # G # H # T
The CRNRSTN :: Lightsaber RoCEv2 SOAP
Services Layer (CLR-SSL) Multi-Channel
Decoupled Data Object (MC-DDO)
Services Layer channels are
defined as follows:
-----
G :: HTTP $_GET[] Request

        An OpenSSL encrypted JSON
        object appended to every
        system generated HTML link
        for system data
        payload carry.

P :: HTTP $_POST[] Request

        This is an OpenSSL encrypted
        JSON object <INPUT type="hidden">
        to every system generated HTML form
        for system data payload carry.

H :: PHP SERVER Session

        This is an OpenSSL encrypted
        JSON object stored in the
        $_SESSION Super Global Array.

S :: CRNRSTN :: SOAP Services Data Tunnel
     Layer Architecture (SSDTLA) Packet.

        This is a SOAP wrapped Pseudo-SOAP
        Services Data Tunnel Layer
        Architecture (PSSDTLA) packet.

        The browser will talk like a server.

J :: CRNRSTN :: Pseudo-SOAP Services Data
     Tunnel Layer Architecture
     (PSSDTLA) Packet.

        An OpenSSL encrypted JSON object
        stored in the browser HTML as
        hidden form <INPUT> data.

T :: CRNRSTN :: Document Object Model (DOM) 
     Generated HTML Form.

        An OpenSSL encrypted JSON object
        tunneled through the browser HTML as 
        hidden form <INPUT> data. 

C :: CRNRSTN :: Carrier Pigeon (Cookie)

        An avian of homing variant...or a
        browser cookie...within which is
        stored an OpenSSL encrypted
        JSON object.

D :: Database (MySQLi Connection)

        This is an OpenSSL encrypted
        JSON object stored in
        the database.

R :: Runtime

        The CRNRSTN :: MC-DDO
        system default.

O :: Simple Object Access Protocol
     (NuSOAP 0.9.5, SOAP 1.1)

M :: Remote Direct Memory Access 
     (RDMA, RoCE, or RoCEv2) Data  
     Storage and Application 
     Acceleration Architecture, or 
     simply "the R" in CLR-SSL. 

F :: Server Local File System

        This is an OpenSSL encrypted
        JSON object written to the
        file system.


The CLR-SSL order of
operations for the 
initialization of 
proprietary data transport 
architectures, protocols, 
and channels. 
-----

GPHSJTCDROMF


5 :: Tuesday, July 2, 2024 @ 0755 hrs.


*/
-->

    <div class="crnrstn_body_wrapper">

        <div class="crnrstn_dyn_signin_hdr_branding_shell">

            <div class="crnrstn_env_select_wrapper">
                <div class="crnrstn_env_select_component_wrapper">
                    <select name="crnrstn_host_endpoint" style="height: 15px; font-size: 11px; display:inline;">
                        <option value="0">-</option>
                        <option value="7">Apache v' . $this->oCRNRSTN->version_apache() . '</option>
                        <option value="8">MySQLi v' . $this->oCRNRSTN->version_mysqli() . '</option>
                        <option value="9">PHP v' . $this->oCRNRSTN->version_php() . '</option>
                    </select>
                </div>
                <div class="crnrstn_cb"></div>
                
                <div class="crnrstn_static_hdr_branding_shell">
                    <div class="crnrstn_static_hdr_branding_copy">C<span class="the_R">R</span>NRSTN :: v' . $this->oCRNRSTN->version_crnrstn() . '</div>
                </div>

            </div>

            <div class="crnrstn_dyn_branding_elem_wrapper signin">
                <div class="crnrstn_dyn_branding_elem_shell">' . $this->oCRNRSTN->return_branding_creative(true, CRNRSTN_HTML) . '</div>
            </div>

                <div class="crnrstn_cb_5"></div>
                
        </div>

        <div class="crnrstn_section_outter_wrapper signin">
            <div id="crnrstn_signin_bdr01_' . $this->page_serial . '"  class="crnrstn_section_inner_wrapper signin">

                <div class="crnrstn_signin_meta_time_stats_wrapper">
                    <div id="crnrstn_signin_meta00_' . $this->page_serial . '" class="crnrstn_signin_meta_time_stats">[' . $this->oCRNRSTN->return_micro_time() . ' ' . date('T') . '] [rtime ' . $this->oCRNRSTN->wall_time() . ' secs]</div>
                    <div id="crnrstn_signin_meta01_' . $this->page_serial . '" class="crnrstn_signin_meta_5_logo">' . $this->oCRNRSTN->return_creative('FIVE', CRNRSTN_HTML) . '</div>

                    <div class="crnrstn_signin_backdrop_logo">' . $this->oCRNRSTN->return_system_image('CRNRSTN_LOGO', '', 250, '', '', '', '', CRNRSTN_HTML) . '</div>                   
                    <div class="crnrstn_cb"></div>
                </div>

                <div class="crnrstn_cb"></div>

                <div class="crnrstn_signin_form_outter_wrapper">

                    <div class="crnrstn_signin_form_inner_wrapper crnrstn_mit_landing">

                        <div class="crnrstn_signin_form_inner_wrapper_rel">

                            <div class="crnrstn_mit_back_copy_outter_shell">
                                <div class="crnrstn_mit_back_copy_inner_shell">
                                    <!--<a href="' . $this->oCRNRSTN->return_back_link() . '" target="_self" class="crnrstn_mit_copy_back">BACK</a>-->
                                </div>
                            </div>
                            
                            <div class="crnrstn_mit_license_wrapper">
                                <code><pre>MIT License
                               
Copyright (c) 2012-' . date('Y') . ' Jonathan \'5\' Harris

Permission is hereby granted, free of charge, to any person obtaining 
a copy of this software and associated documentation files (the 
"Software"), to deal in the Software without restriction, including 
without limitation the rights to use, copy, modify, merge, publish, 
distribute, sublicense, and/or sell copies of the Software, and to 
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be 
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, 
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF 
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. 
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY 
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, 
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE 
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
</pre></code>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="crnrstn_signin_reflection_wrapper">
            <div class="crnrstn_signin_reflection_wrapper_rel">
                <div class="crnrstn_signin_reflection_img_shell">' . $this->oCRNRSTN->return_creative('BG_ELEMENT_REFLECTION_SIGNIN', CRNRSTN_HTML) . '</div>
            </div>
        </div>
        
        <div class="crnrstn_cb_20"></div>

        <div class="crnrstn_signin_copyright_shell">&copy; 2012-' . date('Y') . ' Jonathan \'J\' Harris :: All Rights Reserved in accordance with<br>the latest version of the <a href="#" target="_self">MIT License</a>.</div>
        
        <div class="crnrstn_cb_40"></div>

        <div id="crnrstn_j5_wolf_pup_outter_wrap" class="crnrstn_j5_wolf_pup_outter_wrap">
            <div id="crnrstn_j5_wolf_pup_inner_wrap" class="crnrstn_j5_wolf_pup_inner_wrap">
                ' . $this->oCRNRSTN->return_creative('J5_WOLF_PUP_RAND', CRNRSTN_HTML) . '
            </div>
        </div>

        <div class="crnrstn_cb"></div>

    </div>
    
    ' . $this->oCRNRSTN->system_output_footer_html() . '
    
    </body>
    </html>';

    break;

}
