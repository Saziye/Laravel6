<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test Complelete!</h1>
    <!-- request ile gönderdiğimiz parametreyi yazar -->
    <!-- <h2><?= $name; ?></h2>  -->
    <!-- <script>alert("Hello there!")</script> gibi html ex.'ları ekrana text olarak basmak için -->
    <h2> <?= htmlspecialchars($name,ENT_QUOTES) ?> </h2> 
    <!-- for escape htlm -> {{$}}, for not escape html -> {!!$!!} -->
    <h2>{{$name}}</h2> 

</body>
</html>