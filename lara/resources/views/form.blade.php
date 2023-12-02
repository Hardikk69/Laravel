<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">
            Registrations
        </h1>
        <form action="{{url('/')}}/register" method="post">
            @csrf
           <x-input type="text" name="name" label="Enter name"/>
           <x-input type="email" name="email" label="Enter Email"/>
           <x-input type="password" name="password" label="Enter password"/>
          <button type="submit" name="submit">submit</button>
    </div>
</body>

</html>