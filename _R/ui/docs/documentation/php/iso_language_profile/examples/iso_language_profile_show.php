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
// GET THE CURRENT (HIGHEST PREFERENCE) LANGUAGE
// PROFILE. iso_639-1_2002 BY DEFAULT.
$lang_iso = $oCRNRSTN->iso_language_profile();
echo 'Preferred language: ' . $lang_iso . '.<br><br>';

//
// GET A TOTAL COUNT.
$lang_iso_count = $oCRNRSTN->iso_language_profile_count();
echo 'Count of language preference profiles: ' . $lang_iso_count . '.<br><br>';

//
// DEMONSTRATION :: LOOP THROUGH ALL LANGUAGE PROFILES FOR ONE ATTRIBUTE, native_nomination.
for($i = 0; $i < $lang_iso_count; $i++){

    //
    // WHEN EXTRACTING A SINGLE LANGUAGE PROFILE, THE OUTPUT
    // ARRAY, $iso_profile_ARRAY, WILL HAVE ALL DATA AT $iso_profile_ARRAY[0].
    $iso_profile_ARRAY = $oCRNRSTN->iso_language_profile(NULL, $i);
    echo 'The native nomination for language profile ' . $i . ' is ' . $iso_profile_ARRAY[0]['native_nomination'] . '. <br>';

}

//
// RETURN ALL THE LANGUAGE DATA FOR ALL PROFILES.
$lang_iso_ALL_profile_ARRAY = $oCRNRSTN->iso_language_profile(CRNRSTN_RESOURCE_ALL);
echo $oCRNRSTN->var_dump($lang_iso_ALL_profile_ARRAY);

//
// RETURN ALL THE LANGUAGE DATA FOR A SINGLE PROFILE (THE PREFERRED LANGUAGE).
$lang_iso_ALL_profile_ARRAY = $oCRNRSTN->iso_language_profile(NULL);
echo $oCRNRSTN->var_dump($lang_iso_ALL_profile_ARRAY);

?>