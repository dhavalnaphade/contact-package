<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>
	<h1>Contact Us</h1>
	<form action="{{ route('contact') }}" method="post">
		@csrf
		<input type="text" name="name">
		<input type="email" name="email">
		<textarea name="message"></textarea>
		<input type="submit" value="submit">

	</form>
</body>
</html>