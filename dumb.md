Drop down menu:-


<form action="/action_page.php">
  <label for="cars">Choose a car:</label>
  <select name="cars" id="cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>


alert function:-
<html>
   <head>   
      <script type = "text/javascript">
            function fun() {


               alert ("This is an alert dialog box");
            }
      </script>     
   </head>
   
   <body>
      <p> Click the following button to see the effect </p>      
      <form>
         <input type = "button" value = "Click me" onclick = "fun();" />
      </form>     
   </body>
</html>
