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
// RETRIEVE JUST WHAT IS NEEDED...FROM WHAT IS AVAILABLE.
$constant_description = $oCRNRSTN->return_int_const_profile(CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_12_1, 'DESCRIPTION');
echo 'Description: <br>' . $constant_description . '<br><br>';

//
// PASSING JUST AN INTEGER CONSTANT WILL RETURN ALL
// AVAILABLE PROFILE META AS AN ARRAY.
$constant_profile_ARRAY = $oCRNRSTN->return_int_const_profile(CRNRSTN_JS_FRAMEWORK_JQUERY_UI_1_12_1);

echo $oCRNRSTN->var_dump($constant_profile_ARRAY) . '<br><br>';

?>