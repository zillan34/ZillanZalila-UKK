<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalk JS</title>
    <style>
        body{
            background-color: #D5F0C1;
            align-items: center;
            justify-content: center;
            display: flex;
            height: 100vh;

        }
        
        .container{
            padding: 10px;
            width: 250px;
            height: 420px;
            background-color: #AAD9BB;
            border-radius: 10px;
            box-shadow: -5px -5px 9px, -6px -6px 10px #C7C8CC  ;
            

        }
        .calculator-buttons input[type="button"]{
            padding: 10px;
            width: 50px;
            margin-bottom: 5px;
            font-size: 15px;
            border-radius: 5px;
            background-color: #F9F7C9;
        }
        input[type="button"][value="C"]{
            width: 212px;
            margin-top: 1px;
            border-radius: 5px;
        }
        input[type="text"][name="a"]{
            text-align: center;
            width: 205px;
            height: 50px;
            font-size: 17px;
            border-radius: 5px;
        }
        h5{
            margin-top: 1px;
        }
        input[type="text"][name="a"]{
            background-color: #F9F7C9;
        }
    </style>
</head>
<body>
    <center>
    <div class="container">
        <h2>Kalkulator</h2>
        <form action="" method="post" name="form1">
            <input type="text" name="a" id=""><br><br>
            <div class="calculator-buttons">
                <input type="button" value="1" onClick="form1.a.value+='1'">
                <input type="button" value="2" onClick="form1.a.value+='2'">
                <input type="button" value="3" onClick="form1.a.value+='3'">
                <input type="button" value="4" onClick="form1.a.value+='4'">
                <input type="button" value="5" onClick="form1.a.value+='5'">
                <input type="button" value="6" onClick="form1.a.value+='6'">
                <input type="button" value="7" onClick="form1.a.value+='7'">
                <input type="button" value="8" onClick="form1.a.value+='8'">
                <input type="button" value="9" onClick="form1.a.value+='9'">
                <input type="button" value="0" onClick="form1.a.value+='0'">
                <input type="button" value="000" onClick="form1.a.value+='000'">
                <input type="button" value="+" onClick="form1.a.value+='+'">
                <input type="button" value="-" onClick="form1.a.value+='-'">
                <input type="button" value="*" onClick="form1.a.value+='*'">
                <input type="button" value="/" onClick="form1.a.value+='/'">
                <input type="button" value="=" onClick="form1.a.value=eval(form1.a.value)">
                <input type="button" value="C" onClick="form1.a.value=''">
            </div>
            <h5>zz</h5>

        </form>
    </div>
    </center>
</body>
</html>