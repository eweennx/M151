<html>

    <head>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

a{
    margin-right:20px;
}
</style>

        <title>Alle Produkte</title>

    </head> 


    <body>
        <h1>Willkommen zum Webshop für Blumentöpfe und Gärtnerzubehör</h1> 
        <a href="login">Einloggen</a>
        <a href="register">Registrieren</a>
        <br><br>

        <table>
  <tr>
    <th>Name</th>
    <th>Preis</th>
    <th>Infos</th>
  </tr>
  @foreach ($products as $product)
            <tr>
                <td>{{$product->name }}</td>
                <td>{{$product->price }}</td>
                <td><a href="/product/{{$product->id }}">Mehr</a></td>
            </tr>
  @endforeach

</table>
    </body>

</html>