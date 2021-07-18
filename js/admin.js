function validate()
		{
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			if ( username == "admin" && password == "admin123")
			{
				window.location = "new_admin.php"; 
				return true;
			}
			else
			{

				alert("Wrong ID or Password");
			}
		}