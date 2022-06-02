<?php
              include('pro_security.php');
              if(isset($_POST['logout']))
				{
					session_destroy();
					unset($_SESSION['customer']);
					header('Location: index.php');
				}
?>