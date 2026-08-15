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

$fruit = array('apple', 'orange', 'a bag of some rocks');
$veggies = NULL;

//
// STORE DATA
$oCRNRSTN->add_resource('potentially_fruit', $fruit);
$oCRNRSTN->add_resource('surely_not_fruit', $veggies);

//
// COUNTS AFTER DATA STORAGE
$count_entries_FRUIT = $oCRNRSTN->get_resource_count('potentially_fruit');
$count_entries_VEGGIES = $oCRNRSTN->get_resource_count('surely_not_fruit');
echo 'Entries [FRUIT]: ' . $count_entries_FRUIT . '<br>';
echo 'Entries [VEGGIES]: ' . $count_entries_VEGGIES . '<br><br>';

//
// SIMULATE SOME APPLICATION ACTIVITY
$tmp_serial = $oCRNRSTN->generate_new_key(26);
$oCRNRSTN->add_resource('potentially_fruit', $tmp_serial . '-FRUIT');
$oCRNRSTN->add_resource('surely_not_fruit', $tmp_serial . '-VEGGIES');

//
// SIMULATE A LITTLE MORE APPLICATION ACTIVITY
for($i = 0; $i < 40; $i++){

    $tmp_serial = $oCRNRSTN->generate_new_key(26);
    $oCRNRSTN->add_resource('potentially_fruit', $tmp_serial . '-FRUITSMOOTHIE');

}

//
// COUNTS AFTER APPLICATION ACTIVITY
$count_entries_FRUIT = $oCRNRSTN->get_resource_count('potentially_fruit');
$count_entries_VEGGIES = $oCRNRSTN->get_resource_count('surely_not_fruit');
echo 'Entries [FRUIT]: ' . $count_entries_FRUIT . '<br>';
echo 'Entries [VEGGIES]: ' . $count_entries_VEGGIES . '<br><br>';

//
// FRUITS
for($i = 0; $i < $count_entries_FRUIT; $i++){

    //
    // EXTRACTING DATA BY INDEX
    $system_fruit = $oCRNRSTN->get_resource('potentially_fruit', $i);

    echo 'Item[FRUIT] ' . $i . ': ' . $oCRNRSTN->var_dump($system_fruit);

}

//
// VEGGIES
for($i = 0; $i < $count_entries_VEGGIES; $i++){

    //
    // EXTRACTING DATA BY INDEX
    $system_not_fruit = $oCRNRSTN->get_resource('surely_not_fruit', $i);

    echo 'Item[VEGGIES] ' . $i . ': ' . $oCRNRSTN->var_dump($system_not_fruit);

}

?>