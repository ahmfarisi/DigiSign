<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Tidak dapat menentukan pengaturan database berdasarkan Connection String yang Anda kirimkan.';
$lang['db_unable_to_connect'] = 'Tidak dapat terhubung ke server database Anda menggunakan pengaturan yang disediakan.';
$lang['db_unable_to_select'] = 'Tidak dapat memilih database: %s';
$lang['db_unable_to_create'] = 'Tidak dapat membuat database: %s';
$lang['db_invalid_query'] = 'Query Anda tidak sah';
$lang['db_must_set_table'] = 'Anda harus menentukan tabel database untuk digunakan oleh query Anda.';
$lang['db_must_use_set'] = 'Anda harus menggunakan metode set "set" untuk meng-update sebuah entri.';
$lang['db_must_use_index'] = 'Anda harus menentukan sebuah index untuk dicocokkan pada batch update.';
$lang['db_batch_missing_index'] = 'Satu atau lebih baris yang disubmit pada batch update tidak memiliki index.';
$lang['db_must_use_where'] = 'Update tidak diperbolehkan tanpa menggunakan "where".';
$lang['db_del_must_use_where'] = 'Delete tidak diperbolehkan tanpa menggunakan "where" atau "like".';
$lang['db_field_param_missing'] = 'Nama tabel dibutuhkan untuk mengambil field.';
$lang['db_unsupported_function'] = 'Fitur ini tidak tersedia pada database yang anda gunakan.';
$lang['db_transaction_failure'] = 'Transaksi gagal: terjadi Rollback.';
$lang['db_unable_to_drop'] = 'Gagal menghapus database.';
$lang['db_unsupported_feature'] = 'Platform database yang anda gunakan tidak didukung.';
$lang['db_unsupported_compression'] = 'Format kompresi file yang anda pilih tidak didukung oleh server anda.';
$lang['db_filepath_error'] = 'Tidak dapat menulis data pada path file yang anda submit.';
$lang['db_invalid_cache_path'] = 'Path cache yang anda submit tidak valid.';
$lang['db_table_name_required'] = 'Nama tabel dibutuhkan untuk operasi tersebut.';
$lang['db_column_name_required'] = 'Nama kolom dibutuhkan untuk operasi tersebut.';
$lang['db_column_definition_required'] = 'Definisi kolom dibutuhkan untuk operasi tersebut.';
$lang['db_unable_to_set_charset'] = 'Tidak dapat menentukan set karakter koneksi klien : %s';
$lang['db_error_heading'] = 'Terjadi kesalahan pada database';
