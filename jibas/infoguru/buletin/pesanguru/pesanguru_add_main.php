<?
/**[N]**
 * JIBAS Road To Community
 * Jaringan Informasi Bersama Antar Sekolah
 * 
 * @version: 2.5.2 (October 5, 2011)
 * @notes: JIBAS Education Community will be managed by Yayasan Indonesia Membaca (http://www.indonesiamembaca.net)
 * 
 * Copyright (C) 2009 PT.Galileo Mitra Solusitama (http://www.galileoms.com)
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 **[N]**/ ?>
<?
require_once('../../include/sessioninfo.php');
$bulan="";
if (isset($_REQUEST['bulan']))
	$bulan=$_REQUEST['bulan'];
$tahun="";
if (isset($_REQUEST['tahun']))
	$tahun=$_REQUEST['tahun'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> New Document </TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
</HEAD>
<FRAMESET COLS="*,245" FRAMEBORDER="yes" border="0">
	<frame src="pesanguru_add.php" name="pesanguru_add" id="pesanguru_add" scrolling="auto">
	<!--<frame src="tujuanpesan.php?bulan=<?=$bulan?>&tahun=<?=$tahun?>" name="pesanguru_tujuan" id="pesanguru_tujuan" scrolling="auto">-->
	<frameset rows="39,*">
		<frame src="pesanguru_tujuan.php?bulan=<?=$bulan?>&tahun=<?=$tahun?>" name="tujuan_header" id="tujuan_header" scrolling="no">
		<frame src="pesanguru_tujuan_footer.php" name="tujuan_footer" id="tujuan_footer">
	</frameset>
</frameset>
</HTML>