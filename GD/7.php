<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>验证码实例</title>
	</head>
	<body>
	<form action="8.php" method="post">
 		<table border="1">
			<tr>
				<td>
					<input type="text" name="captcha">
				</td>
				<td>
					<img src="code.php" alt="验证码"
					onclick="this.src='code.php?'+Math.random()"
					>
				</td>
			</tr>
		</table>
		<button>提交</button>
	</form>
	</body>
</html>