<h1>Hello Form</h1>
<p style="color:red"><?= $data ?></p>
<form action="?v=submitform" method="post" enctype="multipart/form-data">
	<label>Name<input type="text" name="name" /></label>
	<label>Pass<input type="text" name="password" /></label>
	<button type="submit">Do it!</button>
</form>