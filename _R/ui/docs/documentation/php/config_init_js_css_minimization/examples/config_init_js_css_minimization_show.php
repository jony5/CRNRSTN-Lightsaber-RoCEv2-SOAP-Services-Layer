<?php
/*
// 5 ::
// Code is Poetry */

//
// Initialize the
// application folder.
$tmp_slsh = DIRECTORY_SEPARATOR;
$tmp_application_folder = $tmp_slsh . 'lightbox_helper';
$tmp_framework_dir = $tmp_slsh . '_lightbox_helper';

//
// Initialize session.
//
// TODO :: Move this to
//         the system registry.
//         5 :: Friday, August 2, 2024 @ 0018 hrs.
$tmp_file_path = $_SERVER['DOCUMENT_ROOT'] . $tmp_application_folder . $tmp_framework_dir . $tmp_slsh . 'class' . $tmp_slsh . 'session' . $tmp_slsh;
require($tmp_file_path . 'crnrstn.session_id_start.runtime_exe.php');

//
// Initialize the directory
// offset in support of
// the runtime executable,
// crnrstn.system_path_initialization.runtime_exe.php
//
//
// 5
$CRNRSTN_ROOT_OFFSET = '../../../';

//
// Initialize system
// directory paths.
//
// TODO :: Move this to
//         the system registry.
//         5 :: Friday, August 2, 2024 @ 0019 hrs.
$tmp_file_path = $_SERVER['DOCUMENT_ROOT'] . $tmp_application_folder .  $tmp_slsh . '_lightbox_helper' . $tmp_slsh . '_config' . $tmp_slsh . 'config.system_paths' . $tmp_slsh;
require($tmp_file_path . 'crnrstn.system_paths.function.php');
require($tmp_file_path . 'crnrstn.system_path_initialization.runtime_exe.php');

//
// THIS LINE WITHIN THE CONFIGURATION FILE SPECIFIES THAT A CHAD
// MACBOOK PRO LAMP STACK IS *NOT* TO LOAD THE PROD VERSIONS OF JS/CSS.
// THEREFORE, DEVELOPMENT VERSIONS OF ANY REQUESTED FRAMEWORK RESOURCES WILL BE USED.
$oCRNRSTN->config_init_js_css_minimization('LOCALHOST_CHAD_MACBOOKPRO', false);

//
// CAUTION: ONLY LOCALHOST_CHAD_MACBOOKPRO WILL RUN THIS CORRECTLY. CUSTOM CONFIG
// SETTINGS FOR THE RUNNING ENVIRONMENT WILL DRIVE THE BELOW.
//
// HERE IS A QUICK CHECK TO SEE IF THE BIT IS FLIPPED.
if($oCRNRSTN->is_bit_set((int) self::$R_data['int_flag']['R_js_css_min_mode']) === true){

    echo 'PROD ACTIVE. Loading filename.min.js and filename.min.css resources.';

}else{

    echo 'DEV ACTIVE. Loading filename.js and filename.css resources.';

}

?>