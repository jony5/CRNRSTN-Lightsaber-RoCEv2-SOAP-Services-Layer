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
// JUST NEED A VALID SERVER PATH. WE WILL WRITE NOTHING.
$tmp_write_path = $this->oCRNRSTN->get_resource('crnrstn_path_directory', 0, 'CRNRSTN::RESOURCE::HTTP_IMAGES');

//
// MAKE SOME SMALL DATA.
$tmp_small_data = $oCRNRSTN->generate_new_key(50);
$tmp_small_data_size = strlen($tmp_small_data);

//
// FAKE SOME BIG DATA. MAYBE PROD IS GOOD FOR IT?
$tmp_big_data = $oCRNRSTN->generate_new_key(50);
$tmp_big_data_size = $this->oCRNRSTN->format_bytes('100 GB');

//
// GET WRITE PERMISSIONS FOR SMALL DATA.
if($this->oCRNRSTN->grant_permissions_fwrite($tmp_write_path, $tmp_small_data_size)){

    echo 'Permission granted to write ' . $this->oCRNRSTN->format_bytes($tmp_small_data_size, 4) . ' of data.<br><br>';

}else{

    echo 'Permission DENIED to write ' . $this->oCRNRSTN->format_bytes($tmp_small_data_size, 4) . '!<br><br>';

}

//
// GET WRITE PERMISSIONS FOR BIG DATA.
if($this->oCRNRSTN->grant_permissions_fwrite($tmp_write_path, $tmp_big_data_size)){

    echo 'Permission granted to write ' . $this->oCRNRSTN->format_bytes($tmp_big_data_size, 4) . '!';

}else{

    echo 'Permission DENIED to write ' . $this->oCRNRSTN->format_bytes($tmp_big_data_size, 4) . '!';

}

?>