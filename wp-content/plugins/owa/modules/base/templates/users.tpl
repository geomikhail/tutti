<div class="panel_headline"><?php echo $headline;?></div>
<div id="panel">
<fieldset>

	<legend>
		Users <span class="legend_link">(<a href="<?php echo $this->makeLink(array('do' => 'base.usersProfile'));?>">Add New User</a>)</span>
	</legend>

	<?php if($users):?>
	
	<table class="management">
		<thead>
			<TR>
				<TH>User ID</TH>
				<TH>Real Name</TH>
				<TH>Email Address</TH>
				<TH>Role</TH>
				<TH>API Key</TH>
				<TH>Last Updated</TH>
				<TH>Options</TH>
			</TR>
		</thead>	
		<tbody>		
			<?php foreach ($users as $user => $value):?>
			<TR>
				<TD><?php echo $value['user_id'];?></TD>
				<TD><?php echo $value['real_name'];?></TD>
				<TD><?php echo $value['email_address'];?></TD>
				<TD><?php echo $value['role'];?></TD>
				<TD><?php echo $value['api_key'];?></TD>
				<TD><?php echo date("F j, Y, g:i a", $value['last_update_date']);?></TD>
				<TD><a href="<?php echo $this->makeLink(array('do' => 'base.usersProfile', 'edit' => true, 'user_id' => $value['user_id']));?>">Edit</a>  
				<?php if ($value['id'] != 1):?>
				| <a href="<?php echo $this->makeLink( array( 'do' => 'base.usersDelete', 'user_id' => $value['user_id'] ), false, false, false, true );?>">Delete</a></TD>
				<?php endif;?>
			</TR>
			<?php endforeach;?>	
		</tbody>
	</table>
	
	<?php else:?>
	There are no User Accounts.</TD>
	<?php endif;?>
</fieldset>
</div>