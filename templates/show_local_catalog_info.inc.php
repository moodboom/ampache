<?php
/*

 Copyright (c) 2001 - 2007 Ampache.org
 All Rights Reserved

 this program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License
 as published by the Free Software Foundation; either version 2
 of the License, or (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

*/

?>
<?php show_box_top(_('Catalog Statistics')); ?>
<table cellspacing="1" cellpadding="3" border="0"> 
<tr class="table-header">
	<td><?php echo _('Connected Users'); ?></td>
	<td><?php echo _('Total Users'); ?></td>
	<td><?php echo _('Albums'); ?></td>
	<td><?php echo _('Artists'); ?></td>
	<td><?php echo _('Songs'); ?></td>
	<td><?php echo _('Genres'); ?></td>
	<td><?php echo _('Catalog Size'); ?></td>
	<td><?php echo _('Catalog Time'); ?></td>
</tr>
<tr>
	<td><?php echo $stats['connected']; ?></td>
	<td><?php echo $stats['users'] ?></td>
	<td><?php echo $stats['albums']; ?></td>
	<td><?php echo $stats['artists']; ?></td>
	<td><?php echo $stats['songs']; ?></td>
	<td><?php echo $stats['genres']; ?></td>
	<td><?php echo $stats['total_size']; ?> <?php echo $stats['size_unit']; ?></td>
	<td><?php echo $stats['time_text']; ?></td>
</tr>
</table>
<?php show_box_bottom(); ?>
