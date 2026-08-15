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

$data = "The quick brown fox jumped over the lazy dog.";

//
// HASH THE DATA ACCORDING TO DEFAULT HASH SETTINGS.
$data_hashed_sys_default = $oCRNRSTN->hash($data);

echo $data .'<br><br>';
echo $oCRNRSTN->system_hash_algo() . ' (system default): ' . $data_hashed_sys_default .'<br><br><br>';

//
// MD5 HASH THE SAME DATA.
$data_hashed_md5 = $oCRNRSTN->hash($data, 'md5');
echo $data .'<br><br>';
echo 'MD5: ' . $data_hashed_md5 . '<br><br>';

//
// SERVER'S AVAILABLE HASH ALGORITHM :: DISCOVERY DEMONSTRATION.
$methods = $oCRNRSTN->openssl_get_cipher_methods(false, false);

echo $oCRNRSTN->var_dump($methods);

?>