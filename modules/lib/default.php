<?php
/**
 * @package Simple Groupware
 * @link http://www.simple-groupware.de
 * @copyright Simple Groupware Solutions Thomas Bley 2002-2012
 * @license GPLv2
 */

abstract class lib_default {

/**
 * get (mountpoint) directories
 * on error, sys_warning("error message");
 *
 * @param string $path current path, e.g. server/INBOX/
 * @param int $mfolder mountpoint folder id, get credentials from there
 * @param boolean $recursive true or false
 * @return array of folders
 * example return:
   [3] => Array(
          [id] => localhost/INBOX/testfolder/
          [lft] => 3, [rgt] => 4, [flevel] => 2
          [ftitle] => testfolder, [ftype] => sys_nodb_imap, [icon] => 
   [2] => Array(
          [id] => localhost/INBOX/
          [lft] => 2, [rgt] => 5, [flevel] => 1
          [ftitle] => INBOX, [ftype] => sys_nodb_imap, [icon] => sys_nodb_imap.png
*/
/*
static function get_dirs($path, $mfolder, $recursive) {
  return array();
}
*/

/**
 * returns the default values used in new/edit forms
 *
 * @param string $path current path, e.g. server/INBOX/
 * @param int $mfolder mountpoint folder id, get credentials from there
 * @return array Default values Array(fieldname => value)
 */
static function default_values($path, $mfolder) {
  return array();
}

/**
 * return the folder information values
 *
 * @see ajax::folder_info()
 * @param string $path current path, e.g. server/INBOX/
 * @param int $mfolder mountpoint folder id, get credentials from there
 * @return array info values Array(fieldname => value)
 */
static function folder_infos($path, $mfolder) {
  return array();
}

/**
 * get number of datasets in the current folder
 * on error, sys_warning("error message");
 *
 * @param string $path current path, e.g. server/INBOX/
 * @param array $where array of where statements, binding with @var_name@
 * @param array $vars bind parameters key=param name, value=param value
 * @param int $mfolder mountpoint folder id, get credentials from there
 * @return int number of datasets
 */
static function count($path, $where, $vars, $mfolder) {
  return 0;
}

/**
 * get datasets from the current folder
 * on error, sys_warning("error message");
 *
 * @param string $path folder path, e.g. folder1/folder2/
 * @param array $fields array of field names to select
 * @param array $where array of where statements, binding with @var_name@
 * @param string $order sorting with fieldname and ordering, e.g. filedata asc
 * @param array $limit array (page limit, page offset)
 * @param array $vars bind parameters key=param name, value=param value
 * @param int $mfolder mountpoint folder id, get credentials from there
 * @return array of datasets
 */
static function select($path, $fields, $where, $order, $limit, $vars, $mfolder) {
  return array();
}

/**
 * insert a new dataset to the current folder
 * on error, return "error message"
 *
 * @param string $path folder path, e.g. folder1/folder2/
 * @param array $data data array key=field name, value=field value
 * @param int $mfolder mountpoint folder id, get credentials from there
 * @return string "" success "error message" on error
 */
static function insert($path, $data, $mfolder) {
  return "";
}

/**
 * update a dataset in the current folder
 * on error, return "error message"
 *
 * @param string $path folder path, e.g. folder1/folder2/
 * @param array $data data array key=field name, value=field value
 * @param array $where array of where statements, binding with @var_name@
 * @param array $vars bind parameters array(key=id, value=asset-id)
 * @param int $mfolder mountpoint folder id, get credentials from there
 * @return string "" success "error message" on error
 */
static function update($path, $data, $where, $vars, $mfolder) {
  return "";
}

/**
 * delete a dataset from the current folder
 * on error, exit("error message")
 *
 * @param string $path folder path, e.g. folder1/folder2/
 * @param array $where array of where statements, binding with @var_name@
 * @param array $vars bind parameters key=param name, value=param value
 * @param int $mfolder mountpoint folder id, get credentials from there
 * @return string "" success, "error" on error
 */
static function delete($path, $where, $vars, $mfolder) {
  return "";
}

/**
 * create a new folder
 * on error, exit("error message");
 *
 * @param string $title new folder name, e.g. new_title
 * @param string $parent folder path, e.g. folder1/parent_title/
 * @param int $mfolder mountpoint folder id, get credentials from there
 * @return string "ok" success, "" failure
 */
static function create_folder($title, $parent, $mfolder) {
  return "";
}

/**
 * delete a folder
 * on error, exit("error message");
 *
 * @param string $path folder path, e.g. folder1/folder2/
 * @param int $mfolder mountpoint folder id, get credentials from there
 * @return string "ok" success, "" failure
 */
static function delete_folder($path, $mfolder) {
  return "";
}

/**
 * rename a folder
 * on error, exit("error message");
 *
 * @param string $title new folder name, e.g. new_title
 * @param string $path folder path, e.g. folder1/old_title/
 * @param int $mfolder mountpoint folder id, get credentials from there
 * @return string "ok" success, "" failure
 */
static function rename_folder($title, $path, $mfolder) {
  return "";
}
}