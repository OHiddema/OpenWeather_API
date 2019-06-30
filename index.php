<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <script>
      function getdata() {
         var output = document.getElementById('output');
         output.innerHTML="";
         var input = document.getElementById('plaats');
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
               output.innerHTML = this.responseText;
            }
         };
         xmlhttp.open('GET', 'getdata.php?q=' + input.value, true);
         xmlhttp.send();
      }
   </script>

   Plaats: <input type="text" id="plaats"><br><br>
   <button onclick='getdata()'>Get data</button><br><br>
   Output:<br>
   <textarea id="output"></textarea>
 
</body>
</html>