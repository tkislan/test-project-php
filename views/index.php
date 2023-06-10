<h1>PHP Test Application</h1>

<table class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>E-mail</th>
			<th>City</th>
			<th>Phone</th>
		</tr>
	</thead>
	<tbody>
		<? foreach ($users as $user) { ?>
			<tr>
				<td><?= $user->getName() ?></td>
				<td><?= $user->getEmail() ?></td>
				<td><?= $user->getCity() ?></td>
				<td><?= is_null($user->getPhone()) ? 'N/A' : $user->getPhone() ?></td>
			</tr>
		<? } ?>
	</tbody>
</table>

<form method="post" action="create.php" class="form-horizontal">
	<div class="form-group">
		<label for="name" class="control-label">Name:</label>
		<input name="name" input="text" id="name" class="form-control" />
	</div>
	<div class="form-group">
		<label for="email" class="control-label">E-mail:</label>
		<input name="email" input="text" id="email" class="form-control" />
	</div>
	<div class="form-group">
		<label for="city" class="control-label">City:</label>
		<input name="city" input="text" id="city" class="form-control" />
	</div>
	<div class="form-group">
		<label for="phone" class="control-label">Phone:</label>
		<input name="phone" input="text" id="phone" class="form-control" />
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-default">Create new row</button>
	</div>
</form>
