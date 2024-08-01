<!DOCTYPE html>
<html lang="en">
<head>
    <title>Account Details</title>
</head>
<body>
    

    <div>
        <h1>Welcome to Barren,</h1>
        <p>hello {{ $username  }}</p>

        <p>We are thrilled to have you join us as {{ $role }}. Your account has been successfully registered.</p>
        <p>Here are your login credentials:<p>
        <p>Email : {{ $email }}</p>
        <p>Password : {{ $password }}</p>
        <p>Thank you for registering! We look forward to your active participation.</p>
        <p>If you have any questions or need assistance, feel free to reach out to our support team.</p>


    </div>
</body>
</html>