<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login here</title>
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>
<body >

<form action="" method="get" align ="center">
<table cellspacing="10px" cellpadding="10px" align="center" width="200px"> 
			<tr>
				<td><u> USER LOGIN<br><br><img src="{{url('images/log.jpg')}}" ></u></td>
					
			</tr>
			<tr>
				<td><input type="text" placeholder="UserName"></td>
			</tr>
			<tr>
				<td><input type="password" placeholder="Password"></td>
			</tr>
			<tr>
				<td><button>LOGIN</button></td>
			</tr>
			
		</table>
		
	</form>
    
</body>
</html>