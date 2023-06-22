
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM customer_msg");
		$stmt->execute();
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Message already sent';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO customer_msg (firstname,lastname,email,message) VALUES (:firstname,:lastname,:email,:message)");
				$stmt->execute();
				$_SESSION['success'] = 'Message sent successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up contact form first';
	}

	header('location: contact.php');

?>