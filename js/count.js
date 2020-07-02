function validate()
		{
			var username = document.getElementById("update").value;
			if ( username == "admin" && password == "admin123")
			{
				window.open ("new_admin.php"); 
				return false;
			}
			else
			{

				alert("Wrong ID or Password");
			}
		}
		
function closeForm() {
 document.getElementById("update").style.display = "Available=";
}