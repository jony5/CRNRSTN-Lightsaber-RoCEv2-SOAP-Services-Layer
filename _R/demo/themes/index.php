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
 *
 * CLASS DEFINITION :: index.php
 * CLASS VERSION    :: 2.00.0001
 * DATE             :: Thursday, May 28, 2026 @ 0746 hrs.
 * AUTHOR           :: Jonathan '5' Harris, jharris@eVifweb.com, eVifweb@gmail.com.
 * URI              :: http://evifweb.jony5.com/
 * TITLE            :: The CRNRSTN :: Lightsaber 
 *                     RoCEv2 SOAP Services Layer
 *                     (CLR-SSL) Interact UI Theme
 *                     Testing Endpoint
 * DESCRIPTION      :: The CRNRSTN :: Lightsaber 
 *                     RoCEv2 SOAP Services Layer 
 *                     (CLR-SSL) Vanilla Install 
 *                     Website Root index.php that
 *                     tests, verifies, and 
 *                     demonstrates a clean and 
 *                     fully functional 
 *                     implementation of the 
 *                     CLR-SSL. 
 *
 *
 *                     5
 *
 *                     Thursday, February 12, 2026 @ 2207 hrs.
 *                     Last Modifed: Thursday, February 12, 2026 @ 2214 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 *
 * LICENSE          :: MIT | https://crnrstn.jony5.com/licensing/
 *
 */

namespace CRNRSTN;

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * CRNRSTN :: Lightsaber RoCEv2 SOAP 
 * Services Layer (CLR-SSL) 
 *
 *
 * 5 :: Sunday, September 1, 2024 @ 0150 hrs.
 *
 * # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * CRNRSTN (The R, ...just.) :: 
 * Debug Options: 
 * -----
 * CRNRSTN_DEBUG_OFF                  = (int) 0
 * CRNRSTN_DEBUG_ON                   = (int) 1
 * CRNRSTN_DEBUG_SYSLOG               = (int) 2
 */
$R_debug_mode_override         = 0;

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * PHPMailer® Debug Options: 
 * -----
 * CRNRSTN_PHPMAILER_DEBUG_OFF        = (int) 0
 * CRNRSTN_PHPMAILER_DEBUG_CLIENT     = (int) 1 
 * CRNRSTN_PHPMAILER_DEBUG_SERVER     = (int) 2 
 * CRNRSTN_PHPMAILER_DEBUG_CONNECTION = (int) 3 
 * CRNRSTN_PHPMAILER_DEBUG_LOWLEVEL   = (int) 4 // <-- Will expose SMTP/POP3 username and password data.
 */
$PHPMailer_debug_mode_override = 0;

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * WordPress® Debug Options: 
 * -----
 * OFF                                = [(int) 0, (bool) false, (string) Off]
 * ON                                 = [(int) 1, (bool) true, (string) On]
 */
$WordPress_debug_mode_override = false;

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Initialize the 
 * application folder 
 * and the framework 
 * directory. 
 *
 * Where,  
 * /var/www/html/lightbox_helper/_R/class/crnrstn/crnrstn.class.php
 * is 
 * /var/www/html/{APPLICATION_DIRECTORY [optional]}/{FRAMEWORK_DIRECTORY}/class/crnrstn/crnrstn.class.php
 *
 * E.g.: 
 * $application_directory = '';
 * $application_directory = 'lightbox_helper';
 * 
 *
 * 5
 *
 * Thursday, August 29, 2024 @ 0106 hrs.
 *
 */
$application_directory = 'sysops';
$R_framework_directory = '_R';
#$R_hmac_algorithm_override = 'sha256';

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * CRNRSTN (The R, ...just.) :: 
 * Resource Name Options: 
 * -----
 * (string) 'crnrstn_registry_user'
 * (string) 'lightbox_helper_by_eVifweb'
 * (string) 'crnrstn' (default)
 */
$R_resource_name = 'crnrstn';

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Including the file, 
 * crnrstn.runtime_exe.php, 
 * instantiates the $R 
 * in The CLR-SSL. 
 *
 *
 * 5 :: Sunday, March 29, 2026 @ 2111 hrs.
 *
 */
$crnrstn_runtime_exe_path = $_SERVER['DOCUMENT_ROOT'] . \DIRECTORY_SEPARATOR . 
                            $application_directory . \DIRECTORY_SEPARATOR . 
                            $R_framework_directory . \DIRECTORY_SEPARATOR . 
                            'crnrstn.runtime_exe.php';
$crnrstn_runtime_exe_path = str_replace(\DIRECTORY_SEPARATOR . 
                                        \DIRECTORY_SEPARATOR, 
                                        \DIRECTORY_SEPARATOR, 
                                        $crnrstn_runtime_exe_path);
include_once($crnrstn_runtime_exe_path);

if(isset($_GET['style'])){

    $tmp_theme_style = $_GET['style'];

}

if(!isset($tmp_theme_style)){

    $tmp_theme_style = CRNRSTN_UI_DAYLIGHT;

}

$tmp_theme_style_ARRAY = $R->return_constant_profile_ARRAY($tmp_theme_style);
$tmp_theme_style_nom = $tmp_theme_style_ARRAY[CRNRSTN_STRING];
$tmp_theme_style_int = $tmp_theme_style_ARRAY[CRNRSTN_INTEGER];

$tmp_lnk_str = '';

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Edit: Replaced use of Icy Digital ITCC
 *       Bitwise Svc Layer supported 
 *       architecture behind
 *       'system_theme_style_constants_ARRAY' 
 *       with 
 *       self::$R_data['interact_ui_theme_options'].
 *       5 :: Thursday, May 28, 2026 @ 0738 hrs.
 *
 */
$ui_theme_options = $R->get_crnrstn('system_theme_style_constants_ARRAY');

/* # C # R # N # R # S # T # N # :: # L # I # G # H # T
 * Original Icy Digital ITCC 
 * Bitwise Services Layer supported
 * initialization.
 * -----
 * $tmp_system_theme_style_constants_ARRAY = $oCRNRSTN->return_set_bits($tmp_system_theme_style_constants_ARRAY);
 *
 * New 2026 Architecture is where,
 * $ui_theme_options == self::$R_data['R_interact_ui_theme_options'].
 * -----
 * $ui_theme_options = $R->get_crnrstn('system_theme_style_constants_ARRAY');
 * $ui_theme_options['int_index']
 * $ui_theme_options['isset_options']
 *
 *
 * 5 :: Thursday, May 28, 2026 @ 0751 hrs.
 *
 */
foreach($ui_theme_options['int_index'] as 
    $index => $int_const)
{

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * $int_const can even be 
     * a string representation 
     * of the constant.
     *
     *
     * 5
     *
     */
    $tmp_ARRAY = $R->return_constant_profile_ARRAY($int_const);

    $tmp_integer  = $tmp_ARRAY[CRNRSTN_INTEGER];
    $tmp_nom      = $tmp_ARRAY[CRNRSTN_STRING];

    $tmp_serial   = $R->generate_new_key(50, '01');
    $tmp_lnk_str .= '<a href="' . 
                    $R->system_path('framework_https') . 
                    'demo/utility/?style=' . 
                    $tmp_integer . '&serial=' . 
                    $tmp_serial . 
                    '" target="_self" style="text-align: left; ' . 
                    'font-family:Courier New, Courier, ' . 
                    'monospace; font-size:15px; ' . 
                    'line-height:23px; text-decoration:none;">' . 
                    $tmp_nom . '</a><br>';

}

/*
DEMO TOPICS ::
- DATA STORAGE AND RETRIEVAL
- STICKY LINKS
- SOCIAL MEDIA LINKS
- EXCEPTION HANDLING
- TUNNEL ENCRYPTION
- UTILITY METHODS
    ~ DATETIME
    ~ STRING MANIPULATION
    ~ ERROR LOG
    ~ PRINT_R
    ~ FORMAT NUMBERS


$R->set_timezone_default('America/New_York');
$R->ini_set('max_execution_time', 60);
$R->ini_set('memory_limit', '300M');
$R->config_add_environment('BLUEHOST_JONY5', E_ALL & ~E_NOTICE & ~E_STRICT);
...
*/

?>

<!DOCTYPE html>
<html lang="<?php echo $R->iso_language_profile(); ?>">
<head>
    <title>CRNRSTN :: <?php echo $R->version_crnrstn(); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?php echo $R->return_creative('CRNRSTN_ICO'); ?>
    <?php echo $R->ui_content_module_out(CRNRSTN_JS_FRAMEWORK_JQUERY) .
        $R->ui_content_module_out(CRNRSTN_JS_FRAMEWORK_JQUERY_UI).
        $R->ui_content_module_out(CRNRSTN_CSS_MAIN_DESKTOP & CRNRSTN_JS_MAIN); ?>
    <style>
        .the_R                           { color:#F90000; }
        .crnrstn_logo_wrapper                       { padding: 15px 0 20px 15px; }

        .crnrstn_j5_wolf_pup_outter_wrap            { float:right; padding:420px 0 0 0; margin:0; width:100%;}
        .crnrstn_j5_wolf_pup_inner_wrap             { position: absolute; width:98%; z-index: 2; text-align: right; padding-top: 20px;}
        .crnrstn_signin_copyright_shell             { width:578px; text-align: center; margin:0 auto; font-size: 12px; font-family: Arial, Helvetica, sans-serif; line-height: 18px; color: #333;}
        .crnrstn_signin_copyright_shell a           { text-decoration:none; color: #0066CC; text-decoration:underline;}

    </style>
</head>
<body>
<div id="crnrstn_top_shell_<?php echo $R->session_salt(); ?>"><a id="__crnrstn_top_<?php echo $R->session_salt(); ?>"></a></div>
<div class="crnrstn_logo_wrapper"><img src="<?php echo $R->return_creative('CRNRSTN_LOGO', CRNRSTN_BASE64 & CRNRSTN_PNG); ?>" height="70" alt="CRNRSTN :: v<?php echo $R->version_crnrstn(); ?>" title="CRNRSTN :: v<?php echo $R->version_crnrstn(); ?>"></div>

<?php
/*
user form_input_add
$tmp_dtf_FORM_HANDLE = 'CRNRSTN::RESOURCE::FORM_HANDLE::' . $tmp_form_handle_hash . '::' . $tmp_field_input_name_hash;
if(!$this->oCRNRSTN->isset_data_key('FORM_INPUT_NAME', $tmp_dtf_FORM_HANDLE)){






*/

echo '<div style="font-size:25px; padding: 0 0 20px 20px; font-family:Courier New, Courier, monospace; font-weight: bold;">' . $tmp_theme_style_nom  . '</div>';
echo '<div style="padding: 0 0 0 20px;">' .  $tmp_lnk_str .'</div>';

$tmp_str = '<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRNRSTN ::</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    <p>hello HTML!</p>
</body>
</html>';
$R->print_r($tmp_str, 'CRNRSTN :: HTML SNIPPET TEST.', $tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);



$tmp_str = '$tmp_hash = $R->hash($crnrstn_form_handle);';
$R->print_r($tmp_str, 'CRNRSTN :: CODE NOTES. USE OF crnrstn::system_hash_algo', $tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);

$tmp_str = '/*
    CRNRSTN :: ORDER OF OPERATIONS (PREFERENCE) FOR SPECIFICATION OF
    AUTHORIZED DATA ARCHITECTURES FOR DATA HANDLING. DSJPCR.

    RUNTIME ONLY (R) IS THE DEFAULT FOR ALL DATA PUT INTO THE SYSTEM.

    -----
    DATA HANDLING ARCHITECTURES
    -----
    G :: HTTP $_GET REQUEST.
    P :: HTTP $_POST REQUEST.
    H :: PHP SERVER SESSION ($_SESSION SUPER GLOBAL ARRAY).
    S :: CRNRSTN :: SSDTLA PACKET (SOAP WRAPPED ENCRYPTED PSSDTLA PACKET. THE BROWSER WILL TALK LIKE A SERVER).
    J :: CRNRSTN :: PSSDTLA PACKET (OPENSSL ENCRYPTED JSON OBJECT).
    C :: CARRIER PIGEON (AVIAN OF HOMING VARIANT)...OR BROWSER COOKIE...
    D :: DATABASE (MySQLi CONNECTION).
    R :: RUNTIME.
    O :: SIMPLE OBJECT ACCESS PROTOCOL (NuSOAP 0.9.5, SOAP 1.1).
    F :: SERVER LOCAL FILE SYSTEM.

    GPHSJCDROF

    -----
    CRNRSTN :: MULTI-CHANNEL DECOUPLED DATA
    OBJECT (MC-DDO) SERVICES LAYER AUTHORIZATION
    PROFILES FOR DATA HANDLING.
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
    self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_email\']
    self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_username\']
    self::$R_data[\'int_flag\'][\'R_authorize\'] & self::$R_data[\'int_flag\'][\'R_password\']

    Example ::
    $R->add_resource(\'BLUEHOST\', \'DOMAIN\', \'jony5.com\', CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME);
    For demonstration of use, see: /_R/_config/config.system_resource.secure/_crnrstn.system_resource.inc.php

    */';
$R->print_r($tmp_str, 'CRNRSTN :: CODE NOTES. crnrstn::', $tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);

$R->print_r('self::$config_serial = $R->get_crnrstn(\'config_serial\');', 'crnrstn::get_crnrstn()', $tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);

$tmp_str = '$tmp_data_key = \'crnrstn_pssdtl_packet\';
$tmp_data_type_family = \'CRNRSTN::RESOURCE::FORM_HANDLE::\' . md5($crnrstn_form_handle);
if(!$this->oCRNRSTN->isset_data_key($crnrstn_form_handle, $tmp_data_type_family)){

    // add_resource($data_key, $data_value, $data_type_family = \'CRNRSTN::RESOURCE\', $data_authorization_profile = CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME){
    $this->oCRNRSTN->add_resource($tmp_data_key, \'data_value_here\', $tmp_data_type_family, CRNRSTN_AUTHORIZE & CRNRSTN_CHANNEL_RUNTIME);

}';

$R->print_r($tmp_str, 'CRNRSTN :: SNIPPET FROM crnrstn_usr::form_serialize_new()', $tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);

$tmp_str = 'public function retrieve_data_value($data_key, $data_type_family = \'CRNRSTN::RESOURCE\', $index = NULL, $env_key = NULL, $soap_transport = false){
';
$R->print_r($tmp_str, 'CRNRSTN :: SNIPPET FROM crnrstn::retrieve_data_value()', $tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);

$tmp_str = '$this->oCRNRSTN->retrieve_data_count(\'FORM_INPUT_FIELD_NAME\', $tmp_data_type_family)';
$R->print_r($tmp_str, 'crnrstn::retrieve_data_count()', $tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);

$tmp_str = 'if($R->isset_data_key($data_key, $data_type_family){

// where, public function isset_data_key($data_key, $data_type_family = \'CRNRSTN::RESOURCE\', $env_key = NULL){}

}
';
$R->print_r($tmp_str, 'CRNRSTN :: SNIPPET FROM crnrstn::isset_data_key()', $tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);

$tmp_str = '$http_transport_protocol = strtoupper($transport_protocol);
$http_transport_protocol = $this->string_sanitize($http_transport_protocol, \'http_protocol_simple\');

if($http_transport_protocol != \'GET\' && $http_transport_protocol != \'POST\') {

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * HOOOSTON, VE HAFF PROBLEM!
     * https://www.wired.com/2011/04/alt-text-spacecraft/
     *
     */
    throw new Exception(\'CRNRSTN :: Form handling configuration error :: unable to detect transport_protocol[POST/GET] from the provided value of \' . $transport_protocol . \'.\');

}';

$R->print_r($tmp_str, 'CRNRSTN :: SNIPPET FROM crnrstn_usr::form_serialize_new()', $tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);


$tmp_str = '$tmp_stripe_key_ARRAY = $R->return_stripe_key_ARRAY(\'$env_key\', \'$encrypt_cipher\', \'$encrypt_secret_key\', \'$hmac_alg\');
$tmp_param_err_str_ARRAY = $R->return_regression_stripe_ARRAY(\'MISSING_STRING_DATA\', $tmp_stripe_key_ARRAY, $env_key, $encrypt_cipher, $encrypt_secret_key, $hmac_alg);

$tmp_param_missing_str = $tmp_param_err_str_ARRAY[\'string\'];
$tmp_param_missing_ARRAY = $tmp_param_err_str_ARRAY[\'index_array\'];

if(count($tmp_param_missing_ARRAY) > 0){

    $R->error_log(\'Missing required \' . $data_type_title . \' encryption information to complete \' . __METHOD__ .\'. \'. $tmp_param_missing_str, __LINE__, __METHOD__, __FILE__, CRNRSTN_SETTINGS_CRNRSTN);

    throw new Exception(\'CRNRSTN :: initialization ERROR :: \' . __METHOD__ . \' was called but was missing parameter information and so encryption was not able to be initialized. Some parameters are required. \' . $tmp_param_missing_str);

}';

$R->print_r($tmp_str, 'CRNRSTN :: SNIPPET FROM crnrstn::apply_encryption_profile()', $tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);


$tmp_str = '//
// CALCULATE MINIMUM BYTES REQUIRED FOR NEW FILE
$tmp_minimum_bytes_required = strlen($tmp_data_str_out);

// TODO :: BEFORE THROWING HARD EXCEPTION, PUT A "DISK FULL WARNING BUFFER" INSIDE grant_permissions_fwrite().
// ASK CRNRSTN :: TO GRANT PERMISSIONS FOR fwrite()
if(!$this->oCRNRSTN->grant_permissions_fwrite($tmp_filepath, $tmp_minimum_bytes_required)){

    /* # C # R # N # R # S # T # N # :: # L # I # G # H # T
     * HOOOSTON, VE HAFF PROBLEM!
     * https://www.wired.com/2011/04/alt-text-spacecraft/
     *
     */
    $this->oCRNRSTN->error_log(\'WARNING. Disk space exceeds \' . $this->oCRNRSTN->get_disk_performance_metric(\'maximum_disk_use\') . \'% minimum allocation of free space. File write [\' . $tmp_filepath . \'] stopped. CRNRSTN :: is configured to stop file writes when allocation of free space on disk exceeds specified limits.\', __LINE__, __METHOD__, __FILE__, CRNRSTN_BARNEY_DISK);

    $this->oCRNRSTN->print_r(\'WARNING. Disk space exceeds \' . $this->oCRNRSTN->get_disk_performance_metric(\'maximum_disk_use\') . \'% minimum allocation of free space. File write [\' . $tmp_filepath . \'] stopped. CRNRSTN :: is configured to stop file writes when allocation of free space on disk exceeds specified limits.\', \'Image Processing.\', CRNRSTN_UI_PHPNIGHT, __LINE__, __METHOD__, __FILE__);

    throw new Exception(\'WARNING. Disk space exceeds \' . $this->oCRNRSTN->get_disk_performance_metric(\'maximum_disk_use\') . \'% minimum allocation of free space. File write [\' . $tmp_filepath . \'] stopped. CRNRSTN :: is configured to stop file writes when allocation of free space on disk exceeds specified limits.\');

}';
$R->print_r($tmp_str, 'CRNRSTN :: SNIPPET FROM crnrstn_system_asset_manager::system_base64_write()', $tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);

$tmp_str = '$_SESSION[\'CRNRSTN_\' . $this->oCRNRSTN->config_serial_crc][\'CRNRSTN_EXCEPTION_PREFIX\'] = __CLASS__ . \'::\' . __METHOD__ . \'() attempted to fopen \' . $tmp_filepath . \' after the write permissions to related to same were first chmod to \' . str_pad($permissions_chmod, \'4\', \'0\', STR_PAD_LEFT) . \'. An attempt to open was again made, but \';
if($resource_file = fopen($tmp_filepath, \'w\')){

    $_SESSION[\'CRNRSTN_\'. $this->oCRNRSTN->config_serial_crc][\'CRNRSTN_EXCEPTION_PREFIX\'] = \'\';

    fwrite($resource_file, $tmp_data_str_out);
    fclose($resource_file);

    $this->oCRNRSTN->error_log(\'Success. System write of BASE64 file is complete. File: \' . $tmp_filename . \'.\', __LINE__, __METHOD__, __FILE__, CRNRSTN_LOG_ALL);

}';

$R->print_r($tmp_str, 'CRNRSTN :: SNIPPET FROM crnrstn_system_asset_manager::system_base64_write()', $tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);


$R->print_r('$R->print_r(\'Output content.\', NULL, CRNRSTN_UI_PHPNIGHT, __LINE__, __METHOD__, __FILE__);', '$R->print_r()', $tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);

$R->print_r('$tmp_str = $R->print_r_str(\'Output content.\', \'Output title.\', CRNRSTN_UI_PHPNIGHT, __LINE__, __METHOD__, __FILE__);', '$R->print_r_str()', $tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);

$R->print_r('$R->error_log(\'Output content.\', __LINE__, __METHOD__, __FILE__, INT_CONSTANT_LOG_SILO);', '$R->error_log()', $tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);

$R->print_r('echo $R->return_system_image(\'CRNRSTN_LOGO\', \'\', 1000, \'http://jony5.com/\', \'J5 MY BOY!\', \'title text\', \'_blank\', CRNRSTN_HTML);', '$R->return_system_image()',$tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);

$R->print_r('echo $R->return_youtube_embed(\'https://www.youtube.com/watch?v=NePb9UWK8Yg\', 560, 315, true);', '$R->return_youtube_embed()',$tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);

$R->print_r('$R->get_resource(\'DOCUMENT_ROOT\')', '$R->get_resource()',$tmp_theme_style_int, __LINE__, __METHOD__, __FILE__);

//$R->system_base64_synchronize();
//$R->system_base64_synchronize('CRNRSTN_LOGO');
$R->system_base64_integrate(CRNRSTN_ROOT . '/_R/demo/common/imgs/j5_my_boy/_thumb/', 5);

//
// SEND -1 AS $char_selection FOR USE OF *ALL* CHARACTERS IN RANDOM KEY
// GENERATION...ALL EXCEPT THE SEQUENCE \e ESCAPE KEY (ESC or 0x1B (27) in
// ASCII) AND NOT SPLITTING HAIRS CHOOSING BETWEEN SEQUENCE \n LINEFEED (LF or
// 0x0A (10) in ASCII) AND THE SEQUENCE \r CARRIAGE RETURN (CR or 0x0D
// (13) in ASCII)...AND ALSO SCREW BOTH \f FORM FEED (FF or 0x0C (12)
// in ASCII) AND \v VERTICAL TAB (VT or 0x0B (11) in ASCII) SEQUENCES.
//
// ALSO, CHECK OUT $char_selection=-2, AND $char_selection=-3.
// $char_selection=-3 IS THE NICEST(NO: QUOTES, COMMAS,...ETC.)...WITH
// THE MOST DISTINCT NUMBER OF CHARACTERS FOR A SERIAL, IMHO.
//
// https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double

//return $this->oCRNRSTN->generate_new_key($len, $char_selection);


//echo $R->return_system_image('CRNRSTN_LOGO', '', 1000, 'http://jony5.com/', 'J5 MY BOY!', 'AWESOME!', '_blank', CRNRSTN_HTML);

?>

<div class="crnrstn_cb_200"></div>
<?php
//
//echo '
//
//    <div style="text-align: left; font-family:Courier New, Courier, monospace; font-size:15px; line-height:23px; border-bottom: 0px solid #FFF;">//
//        <br>// ' . $R->multi_lang_content_return('PLEASE_ENTER_A_CONFIG_SERIAL') . '
//        <br>// ' . $R->multi_lang_content_return('FOR_REFERENCE_PLEASE_SEE') . ' ' . CRNRSTN_ROOT . '/_crnrstn.config.inc.php [lnum 141].' . '
//        <br>$CRNRSTN_config_salt = \'' . $R->generate_new_key(64, -3) . '\';
//        <br>// <a href="#"  style="font-family:Courier New, Courier, monospace; color: #0066CC;">' . $R->multi_lang_content_return('CLICK_HERE') . '</a> to copy the 64 ' . $R->multi_lang_content_return('TO_COPY_THE_CHAR_SERIAL_TO_CLIPBOARD') . '.
//        <br>
//
//    </div>
//
//    <div class="crnrstn_cb_5"></div>
//    <div style="text-align: left; font-family:Courier New, Courier, monospace; font-size:15px; line-height:23px; border-bottom: 0px solid #FFF;">[' . $R->return_micro_time() . '] [rtime ' . $R->wall_time() .' secs]</div>';

?>
<!---->
<!--<div id="crnrstn_curl_data_storage" style="padding:0 10px 10px 20px; width:810px;">-->
<!---->
<!--    <div style="font-weight: bold; font-size: 25px; padding: 10px 0 0 0; color: #333;">C<span class="the_R">R</span>NRSTN ::</div>-->
<!--    <div class="crnrstn_cb"></div>-->
<!--    <div style="font-size: 11px; font-weight: normal; padding: 5px 0 0 0; color: #5c5c5c;">-->
<!--        --><?php
//        echo $R->proper_version('LINUX') .
//            ', ' . $R->proper_version('APACHE') .
//            ', ' . $R->proper_version('MYSQLI') .
//            ', ' . $R->proper_version('PHP') .
//            ', ' . $R->proper_version('OPENSSL') .
//            ', ' . $R->proper_version('SOAP') .
//            ', C<span class="the_R">R</span>NRSTN :: v' . $R->version_crnrstn(); ?>
<!--    </div>-->
<!---->
<!--    <div class="crnrstn_cb_10"></div>-->
<!--    <div style="text-align:left; background-color: #04050A; border: 3px solid #9F9393; width: 780px; height: 379px; overflow: scroll; padding: 15px 20px 15px 20px;">-->
<!---->
<!--        <div class="crnrstn_log_entry">Private key encrypted data:</div>-->
<!--        <div class="crnrstn_log_entry" style="width: 758px; overflow: scroll;">-->
<!--            <div style="width: 800px;">1234567890</div>-->
<!--        </div>-->
<!--        <div class="crnrstn_cb_15"></div>-->
<!---->
<!--        ?>-->
<!--    </div>-->
<!---->
<!--</div>-->
<!---->
<!--<div class="crnrstn_cb_15"></div>-->
<!---->
<!--<form action="#" method="post" name="curl" id="curl"  enctype="multipart/form-data">-->
<!---->
<!--    --><?php
//    //echo $R->ui_content_module_out(CRNRSTN_PSSDTLA_PACKET, 'curl');
//    ?>
<!--</form>-->

<div class="crnrstn_signin_copyright_shell">&copy; 2012-<?php echo date('Y'); ?> Jonathan '5' Harris :: <?php echo $R->multi_lang_content_return('COPY_ALL_RIGHTS_PART1') . '<br>' . $R->multi_lang_content_return('COPY_ALL_RIGHTS_PART2'); ?> <a id="crnrstn_txt_lnk_mit" href="#" target="_self" onclick="oCRNRSTN_JS.crnrstn_interact_ui_ux('onclick', this);"><?php echo $R->multi_lang_content_return('COPY_ALL_RIGHTS_PART_MIT'); ?></a>.</div>

<div style="width:700px;">
    <div id="crnrstn_j5_wolf_pup_outter_wrap" class="crnrstn_j5_wolf_pup_outter_wrap">
        <div id="crnrstn_j5_wolf_pup_inner_wrap" class="crnrstn_j5_wolf_pup_inner_wrap">
            <?php
            echo $R->return_creative('J5_WOLF_PUP_RAND', CRNRSTN_HTML);
            ?>
        </div>
    </div>
</div>

<?php

    echo $R->system_output_footer_html(CRNRSTN_RESOURCE_DOCUMENTATION);

?>
</body>
</html>