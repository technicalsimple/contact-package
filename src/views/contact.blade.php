<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Contact Us</title>
</head>
<body>
 <div class="container">
  <h1>Contact Us</h1>
    @if(session()->has('success'))
    <div class="alert alert-success">
        <strong>Success! </strong> {{ session()->get('success') }}
    </div>
    @endif
    <form action="{{route('contact')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="email">Name:</label>
         <input type="text" required name="name" placeholder="Please enter name">
        </div>
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" required name="email" placeholder="Please enter email"><br><br>
        </div>
        <div class="form-group">
        <label for="email">Message:</label>
        <textarea name="message" required placeholder="Please enter message"></textarea><br><br>
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-success" value="Submit">
        </div>
    </form>
</div>
</body>
</html>