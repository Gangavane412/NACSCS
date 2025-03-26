<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $number = htmlspecialchars(trim($_POST['number']));
    $email = htmlspecialchars(trim($_POST['email']));
    $school_college = htmlspecialchars(trim($_POST['school_college']));
    $college = htmlspecialchars(trim($_POST['college']));
    $message = htmlspecialchars(trim($_POST['message']));
  
    // Validate form data
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($number)) {
        $errors[] = "Mobile number is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }
    if (empty($school_college)) {
        $errors[] = "School/College Name is required.";
    }
    if (empty($college)) {
        $errors[] = "College selection is required.";
    }
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    if (empty($errors)) {
        // Prepare the email
        $to = "vrushalibhangude123@gmail.com"; // Replace with your email address
        $subject = "New Student Admission Inquiry";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $email_body = "Name: $name\n";
        $email_body .= "Mobile Number: $number\n";
        $email_body .= "Email: $email\n";
        $email_body .= "School / College: $school_college\n";
        $email_body .= "Selected College: $college\n";
        $email_body .= "Message:\n$message\n";

        // Send the email
        if (mail($to, $subject, $email_body, $headers)) {
            $success_message = "Thank you for contacting us, $name. We will get back to you soon!";
        } else {
            $errors[] = "Sorry, something went wrong. Please try again later.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Polytechique College</title>
    <style>
        /* Your existing styles */
        input[type=text], input[type=number], input[type=email], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        .container {
            width: 700px;
            padding: 50px;
            border: 2px solid #efefef;
            border-radius: 10px;
            background-color: #edc398;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (!empty($errors)) {
            echo '<div style="color: red;"><ul>';
            foreach ($errors as $error) {
                echo '<li>' . $error . '</li>';
            }
            echo '</ul></div>';
        }
        if (!empty($success_message)) {
            echo '<div style="color: green;">' . $success_message . '</div>';
        }
        ?>
        <form method="post" action="">
            <h4>Student Admission Inquiry</h4>
            <input type="text" name="name" placeholder="Name" required>
            <input type="number" name="number" placeholder="Mobile Number" pattern="[0-9]{10}" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="school_college" placeholder="School / College Name" required>
            <select name="college" class="form-style" id="AdmissionStandard" required>
                <option value="">Select college</option>
                <option value="Dnyaneshwar Polytechnic">Dnyaneshwar Polytechnic</option>
                <option value="P.V.Belhekar College of Pharmacy">P.V.Belhekar College of Pharmacy</option>
                <option value="P.V.Belhekar Ayurvedic Medical College and Hospital (BAMS)">P.V.Belhekar Ayurvedic Medical College and Hospital (BAMS)</option>
                <option value="BSc Agri">BSc Agri</option>
                <option value="MBA">MBA</option>
                <option value="CBSC School">CBSC School</option>
                <option value="State Bord School">State Bord School</option>
                <option value="BCA">BCA</option>
                <option value="Bed">Bed</option>
                <option value="BA">BA</option>
                <option value="ITI">ITI</option>
            </select>
            <textarea name="message" placeholder="Message" required></textarea>
            <input type="submit" value="Submit" id="submit">
        </form>
    </div>
</body>
</html>