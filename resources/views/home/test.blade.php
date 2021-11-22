<!DOCTYPE html>
<html>
<head>
    <title>Laravel Test Page</title>
</head>
<body>

<h1>Laravel Test</h1>
Id no: {{$id}} <br>
Name: {{$name}} <br><br>
<?php
echo "Id number:", $id;
echo "<br>Name     :", $name;
for ($i=1;$i<=$id;$i++)
{
    echo "<br> $i - $name";
}
?>
<br>
<a href="{{route('home')}}">Home page</a>
</body>
</html>
