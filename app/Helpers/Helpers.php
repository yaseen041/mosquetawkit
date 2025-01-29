<?php

use App\Models\PhotoChangeLog;
use App\Models\ProfileChangeLog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

if (!function_exists('admin_url')) {
	function admin_url()
	{
		return url('admin');
	}
}

if (!function_exists('formated_date')) {
	function formated_date($datee)
	{
		if(!empty($datee)){
			return date("d/m/Y", strtotime($datee));
		}
	}
}
if (!function_exists('date_formated')) {
	function date_formated($datee)
	{
		if(!empty($datee)){
			return date("d-m-Y", strtotime($datee));
		}
	}
}
if (!function_exists('date_with_month')) {
	function date_with_month($datee)
	{
		return date("F d, Y", strtotime($datee));
	}
}
if (!function_exists('db_date')) {
	function db_date($datee)
	{
		if(!empty($datee)){
			return date("Y-m-d", strtotime($datee));
		}
	}
}
if (!function_exists('js_date_formate')) {
	function js_date_formate()
	{
		return "dd/mm/yyyy";
	}
}
if (!function_exists('date_time')) {
	function date_time($time)
	{
		return $newDateTime = formated_date($time) . " " . date('h:i A', strtotime($time));
	}
}

if (!function_exists('month_date_time')) {
	function month_date_time($time)
	{
		return $newDateTime = date_with_month($time) . " " . date('h:i A', strtotime($time));
	}
}

if (!function_exists('get_complete_table')) {
	function get_complete_table($table = '', $primary_key = '', $where_value = '', $status = '')
	{
		$query = DB::table($table);
		if ($primary_key) {
			$query->where($primary_key, $where_value);
		}
		if ($status) {
			$query->where('status', $status);
		}
		$query->orderBy('id', 'DESC');
		$data = $query->get();
		return $data;
	}
}


if (!function_exists('get_users_submissions')) {
	function get_users_submissions($user_id)
	{
		$query = DB::table('submissions');
		$query->where('user_id', $user_id);
		$query->where('entrytype', '1');
		$query->where('status', '1');
		$query->orderBy('id', 'DESC');
		$data = $query->get();
		return $data;
	}
}

if (!function_exists('get_single_row')) {
	function get_single_row($table, $primary_key, $where_id, $primary_key2 = '', $where_id2 = '', $type = '', $type_value = '')
	{
		$query = DB::table($table);
		$query->where($primary_key, $where_id);
		if ($primary_key2) {
			$query->where($primary_key2, $where_id2);
		}
		if ($type) {
			$query->where($type, $type_value);
		}
		$query->orderBy('id', 'DESC');
		$data = $query->first();
		return $data;
	}
}

if (!function_exists('get_single_value')) {
	function get_single_value($table, $value, $id)
	{
		$query = DB::table($table)
		->select($value)
		->where('id', $id)
		->first();
		return $query->$value;
	}
}

if (!function_exists('get_section_content')) {
	function get_section_content($meta_tag, $meta_key)
	{
		$query = DB::table('settings')
		->select('meta_value')
		->where('meta_tag', $meta_tag)
		->where('meta_key', $meta_key)
		->first();
		return $query->meta_value;
	}
}

if (! function_exists('permanently_deleted')) {
	function permanently_deleted($table, $primary_key, $where_id)
	{
		$query = DB::table($table)->where($primary_key, $where_id)->delete();
		return true;
	}
}

if (! function_exists('softly_deleted')) {
	function softly_deleted($table, $primary_key, $where_id, $set_column, $value)
	{
		$query = DB::table($table)
		->where($primary_key, $where_id)
		->update([
			$set_column => $value
		]);
		// return $query;
		return true;
	}
}

if (!function_exists('count_table_records')) {
	function count_table_records($table, $status = '')
	{
		$query = DB::table($table);
		if ($status) {
			$query->where('status', $status);
		}
		return $query->count();
	}
}
if (!function_exists('count_records')) {
	function count_records($table, $column, $find)
	{
		$query = DB::table($table);
		$query->where($column, $find);
		return $query->count();
	}
}

if (!function_exists('count_user_pending_payments')) {
	function count_user_pending_payments($user_id)
	{
		$query = DB::table('payments');
		$query->where('status', 0);
		$query->where('user_id', $user_id);
		return $query->count();
	}
}

