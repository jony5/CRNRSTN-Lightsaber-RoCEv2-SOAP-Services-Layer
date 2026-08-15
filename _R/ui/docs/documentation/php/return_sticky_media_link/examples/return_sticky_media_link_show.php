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
// HTML STRING DATA FOR A SMALL SOUNDCLOUD MEDIA ICON WITH
// A STICKY LINK IS RETURNED FOR USE IN EMAIL (OR WHENEVER A
// SIMPLE ANCHOR TAG WRAPPED <IMG> IS DESIRED).
echo 'HTML Email Compatible (small)<br>';
echo $oCRNRSTN->return_sticky_media_link('SOUNDCLOUD_SMALL', 'https://soundcloud.com/jonathan-harris-772368100', '_blank', true);

echo '<div class="crnrstn_cb_20"></div>';
echo 'Image Sprite (medium):<br>';

//
// HTML FOR A MEDIUM SOUNDCLOUD MEDIA ICON WITH A STICKY LINK IS
// RETURNED WITH A SYSTEM IMAGE SPRITE IN USE. THIS WILL
// GRACEFULLY DEGRADE TO A SIMPLE ANCHOR TAG WRAPPED <IMG> IF
// THE SPRITE COORDINATES HAVE NOT YET BEEN APPROVED.
echo $oCRNRSTN->return_sticky_media_link('SOUNDCLOUD_MEDIUM', 'https://soundcloud.com/jonathan-harris-772368100', '_blank');

echo '<div class="crnrstn_cb_20"></div>';
echo 'Image Sprite (large):<br>';
echo $oCRNRSTN->return_sticky_media_link('SOUNDCLOUD_LARGE', 'https://soundcloud.com/jonathan-harris-772368100', '_blank');

?>