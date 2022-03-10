<html>

    <head>

        <title>Detail Seite von {{$product->name}}</title>

    </head> 


    <body>

        <table>
            <tr>
                <th>Name</th>
                <th>Preis</th>
                <th>Bezeichnung</th>
            </tr>

            <tr>
                <td>{{$product->name }}</td>
                <td>{{$product->price }}</td>
                <td>{{$product->description }}</td>
            </tr>
          
        </table>
    </body>

</html>