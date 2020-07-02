function validate()
		{
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			if ( username == "admin" && password == "admin123")
			{
				open ("new_admin.php"); 
				return false;
			}
			else
			{

				alert("Wrong ID or Password");
			}
		}