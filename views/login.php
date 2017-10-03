<h1>Hello Form</h1>
<p style="color:red"><?= $data ?></p>
<form action="?v=login" method="post">
	<label>Name<input type="text" name="name" /></label>
	<label>Pass<input type="text" name="password" /></label>
	<button type="submit">login</button>
</form>