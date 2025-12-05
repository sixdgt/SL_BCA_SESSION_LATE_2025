<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Validation Example</title>
</head>
<body>

<form id="myForm" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name">
    <br><br>
    <label for="email">Email:</label>
    <input type="email" name="email">
    <br><br>
    <label for="address">Address:</label>
    <input type="text" name="address" id="address">
    <br><br>
    <button type="submit">Submit</button>
</form>

<div id="response"></div>
    <!-- jQuery (must be loaded first) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- jQuery Validation Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script>
$(document).ready(function () {
    // Initialize validation
    $("#myForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            }, 
            address:{
                required: true
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Name must be at least 3 characters long"
            },
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address"
            }, 
            address: {
                required: "Please enter your address"
            }
        },
        submitHandler: function (form) {
            $.ajax({
                url: "process.php",
                type: "POST",
                data: $(form).serialize(),
                dataType: "json",
                success: function (response) {
                    if (response.status === "success") {
                        $("#response").html('<p class="success">' + response.message + '</p>');
                        $(form)[0].reset();
                        console.log(response.data);
                    } else {
                        $("#response").html('<p class="error">' + response.message + '</p>');
                    }
                },
                error: function () {
                    $("#response").html('<p class="error">An error occurred. Please try again.</p>');
                }
            });
            return false;
        }
    });
});
</script>

</body>
</html>
