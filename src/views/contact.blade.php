<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 align="center">Contact Form</h2>
        <form action="{{ route('SubmitContactForm') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Email Id" name="email">
            </div>
            <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile">
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" name="address"></textarea>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message"></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <footer class="footer">
        <strong>Package Developed By <a href="https://greefitech.com">Greefi Technologies</a> Salem.</strong>
    </footer>
</body>
</html>
