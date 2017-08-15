<html>
<head>
	<title>Coba Firebase</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="content">
		<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
		<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyASgehZyKYbcOORIF8YdlsMYgZsf-BMslo",
    authDomain: "testinput-95800.firebaseapp.com",
    databaseURL: "https://testinput-95800.firebaseio.com",
    projectId: "testinput-95800",
    storageBucket: "testinput-95800.appspot.com",
    messagingSenderId: "300456423590"
  };
  firebase.initializeApp(config);
</script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="app.js"></script>

		<center>
			<h1 id="heading">Tes</h1>
			<br>
			<input type="text" id="tes">
			<input type="button" value="Simpan" id="btn" onClick="tesclick()">

			<br><br>

			<table border="1" class="datatable" style="font-size:13px;"> 
				<thead>
					<tr>
						<td>NAMA</td><td>EMAIL</td>
					</tr>
				</thead>
				<tbody id="table">
				</tbody>
			</table>
		</center>
	</div>
	<div id="footer" style="cursor:default;">&copy; 2017</div>
</body>
</html>