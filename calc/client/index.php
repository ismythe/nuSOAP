<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Calculadora WSD</title>
    </head>
    <body>
        <form method="post" action="calc_client.php">
            <label for="num">Operand 1</label><input type="text" name="num" /><br/>
            <label for="num2">Operand 2</label><input type="text" name="num2" /><br/>
            <select name="oper">
                <option value="Suma">Suma</option>
                <option value="Resta">Resta</option>
                <option value="Multiplicacio">Multiplicació</option>
                <option value="Divisio">Divisió</option>
            </select>
            <button type="submit">Calcular</button>
        </form>
    </body>   
</html>