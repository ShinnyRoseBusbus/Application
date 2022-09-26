<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style src="{{asset('js/bootstrap.min.js')}}"></style>
</head>
<style>
    body{
        margin-left: 350px;
 
    }
    a{
        font-size: 50px;
        margin: 50px;   
 

    }
    h1{
        font-size: 50px;
        margin: 50px;   
    }

    p{  font-size: 50px;
        margin: 50px;   

    }
</style>
<body>
<h1>This is my App</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero perferendis optio illum, adipisci odit alias, velit, odio aliquid doloribus necessitatibus fugiat? Totam et sequi fugit? Quos eligendi aliquid temporibus reprehenderit.</p>
        <a href="{{url('/')}}">Home</a>
        <a href="{{url('shinnyApp')}}">Application</a>
        <a href="{{url('shinnydeveloper')}}">Developer</a>

       
   
</body>
</html>