<?php

###############################################################################
# japanese_utf-8.php
# This is the japanese_utf-8 language page for the Geeklog Dbman Plug-in!
#
# Copyright (C) 2006 mystral_kk - mystral_kk AT ddlinks DOT net
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################
# $Id$

/*
 * This is the japanese_utf-8 language page for the Geeklog Dbman Plug-in! 
 */

###############################################################################
# Array Format:
# $LANGXX[YY]:	$LANG - variable name
#		  	XX - file id number
#			YY - phrase id number
###############################################################################
/*
 * the Dbman plugin's lang array
 * 
 * @global array $LANG_DBMAN
 */

$LANG_DBMAN = array(
	'access_denied' => '���������ϵ��ݤ���ޤ�����',
	'access_denied_msg' => '���Υץ饰����δ������¤��ʤ��Τ˴������̤˥����������褦�Ȥ��ޤ��������ι԰٤ϵ�Ͽ����ޤ���',
	'add_drop_table' => '"DROP TABLE IF EXISTS"���ɲä���',
	'admin'	=> '�ץ饰�������',
	'backup_blob' => 'BLOB��Хå����åפ���(phpMyAdmin�ȸߴ����Ϥ���ޤ���)',
	'backup_failure' => '�Хå����åפǤ��ޤ���Ǥ������ܤ����ϥ��顼����������������',
	'backup_file' => '�Хå����åפ���Ƥ���ե�����',
	'backup_now' => '�Хå����å׳���',
	'backup_success' => '�Хå����åפ��ޤ�����',
	'bytes' => '�Х���',
	'check_all' => '���٤ƥ����å�����',
	'compress_data' => 'gzip(\'.gz\') �ǰ��̤���',
	'couldnt_get_table_contents' => "(�ơ��֥�����Ƥ�����Ǥ��ޤ���Ǥ�����",
	'couldnt_get_table_contents2' => '�������Ƥ��顤���ľ���Ƥ���������)',
	'couldnt_write_backup' => "�ǡ�����Хå����åץե�����˽񤭹���ޤ���Ǥ�����",
	'db_explanation_backup' => '�ǡ����١����ΥХå����åפ���ˤϡ֥Хå����å׺����פ򥯥�å����Ƥ���������',
	'db_explanation_list' => '�Хå����å�/�ꥹ�ȥ������򤷤Ƥ���������',
	'db_explanation_restore' => '�ꥹ�ȥ�����ǡ����١����˥����å��ޡ��������줫�顤�ּ��ءפ򥯥�å����Ƥ���������',
	'db_explanation_restore_option' => '%s ����ꥹ�ȥ�����ݤΥ��ץ��������򤷤Ƥ���������',  /* %s = backup file */
	'download_as_file' => '�ե�����Ȥ��ƥ�������ɤ���',
	'enabled' => '���󥤥󥹥ȡ��뤹�����ˡ��ץ饰�����̵���ˤ��Ƥ���������',
	'install' => '���󥹥ȡ���',
	'installdoc' => '���󥹥ȡ���ʸ��',
	'installed' => '�ץ饰����ϥ��󥹥ȡ��뤵��Ƥ��ޤ���',
  'install_failed' => '���󥹥ȡ���˼��Ԥ��ޤ��������顼����������������',
	'install_header' => '�ץ饰����Υ��󥹥ȡ���/���󥤥󥹥ȡ���',
	'install_success'	=> '���󥹥ȡ�����������ޤ�����',
	'last_ten_backups' => '�Ƕ�ΥХå����å�(10����ʬ)',
	'menu_backup' => '�Хå����å׺���',
	'menu_list' => '�ե��������',
	'menu_restore' => '�ǡ����١����Υꥹ�ȥ�',
	'next' => '���� &gt;&gt;',
	'no_file_selected' => '�Хå����åץե����뤬���򤵤�Ƥ��ޤ���',
	'not_writable' => 'Backups �ǥ��쥯�ȥ꤬�񤭹����ԲĤˤʤäƤ��ޤ���',
	'operation' => '���',
	'option' => '�㥪�ץ�����',
	'other_options' => '��¾�Υ��ץ�����',
  'plugin' => 'Dbman�ץ饰����',
	'readme' => '����ä��ԤäƤ����������֥��󥹥ȡ���פ򥯥�å��������ˡ����ɤߤ���������',
	'restore' => '�ꥹ�ȥ�����',
	'restore_blob' => 'BLOB��ꥹ�ȥ�����',
	'restore_failure' => '�ꥹ�ȥ��Ǥ��ޤ���Ǥ������ܤ����ϥ��顼����������������',
	'restore_now' => '�ꥹ�ȥ�����',
	'restore_success' => '�ꥹ�ȥ����ޤ�����',
	'restore_header1' => '�ơ��֥�̾',
	'restore_header2' => '�ơ��֥빽¤',
	'restore_header3' => '�ǡ���',
	'size' => '������',
	'uncheck_all' => '���٤ƥ����å��򳰤�',
	'uninstall' => '���󥤥󥹥ȡ���',
	'uninstalled' => '�ץ饰����ϥ��󥹥ȡ��뤵��Ƥ��ޤ���',
	'uninstall_msg'	=> '���󥤥󥹥ȡ�����������ޤ�����',
	'warning'  => '�ٹ𡪡��ץ饰����ͭ���ʤޤޤǤ�',
	'dbman' => 'Dbman'
);

?>