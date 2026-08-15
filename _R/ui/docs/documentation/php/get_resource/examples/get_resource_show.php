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
// CRNRSTN :: LOADS WITH $_SERVER DATA.
$system_SERVER_NAME = $oCRNRSTN->get_resource('SERVER_NAME');
echo 'SERVER_NAME: ' . $system_SERVER_NAME . '<br><br>';

//
// CUSTOM DATA.
$fruit = array('apple', 'orange', 'squash');
$veggies = '';

//
// STORE DATA.
$ddo_key_FRUIT = $oCRNRSTN->add_resource('potentially_fruit', $fruit);
$ddo_key_VEGGIES = $oCRNRSTN->add_resource('surely_not_fruit', $veggies);

//
// OUTPUT THE SYSTEM POINTER TO THE DATA STORAGE LOCATION (DDO KEY).
echo 'DDO key [FRUIT]: <span style="font-size: 70%;">' . $ddo_key_FRUIT . '</span><br><br>';
echo 'DDO key [VEGGIES]: <span style="font-size: 70%;">' . $ddo_key_VEGGIES . '</span><br><br>';

//
// GET SYSTEM RESOURCES.
$system_fruit = $oCRNRSTN->get_resource('potentially_fruit');
$system_veggies = $oCRNRSTN->get_resource('surely_not_fruit');

echo 'var_dump(potentially_fruit): ' . $oCRNRSTN->var_dump($system_fruit) . '<br><br>';
echo 'var_dump(surely_not_fruit): ' . $oCRNRSTN->var_dump($system_veggies);

?>