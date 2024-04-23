<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator Zillan</title>
    <style>
        body{
            font-family: "Comic Sans MS";
            background-color: #F1EEDC;
            align-items: center;
            justify-content: center;
            display: flex;
            height: 100vh;
        }
        .kalkulator{
            background-image: linear-gradient(to left,  #E5DDC5, #B3C8CF, #BED7DC, #F1EEDC );
            padding: 60px;
            width: 200px;
            height: 390px;
            border-radius: 10px;
            box-shadow: 0 0 10px #948979;   
        }
        input[type="number"][name="a1"],
        input[type="number"][name="a2"]{
            padding: 15px;
            font-size: 15px;
            border: none;
            border-radius: 5px;
            background-color: #F6F5F2;
        }
        input[type="submit"][value="Tambah"],
        input[type="submit"][value="Kurang"],
        input[type="submit"][value="Kali"],
        input[type="submit"][value="Bagi"],
        input[type="submit"][value="Reset"]{
            height: 27px;
            width: 70px;
            margin: 5px;
            box-shadow: 3px 3px #DFD0B8;
            border: none;
            border-radius: 10px;
            background-color: #F1EEDC;
            font-family: "Sans Serif";
            font-size: 15px;
        }
        h1{
            margin-top: 1px;
            text-shadow: 2px 2px #F6F5F2;
            font-size: 30px;
        }
        
    </style>
</head>
<body>
    <center>
        <div class="kalkulator">
            <h1>Kalkulator</h1>
            <form action="{{ route('hitung.store') }}" method="post">
                @csrf
                <label for="a1">Masukkan Angka Pertama :</label><br><br>
                <input type="number" name="a1"><br><br>
                <label for="a2">Masukkan Angka Kedua :</label><br><br>
                <input type="number" name="a2"><br><br>
                <input type="submit" name="op" value="Tambah">
                <input type="submit" name="op" value="Kurang">
                <input type="submit" name="op" value="Kali">
                <input type="submit" name="op" value="Bagi">
                <input type="submit" name="op" value="Reset">                
            </form>
        </div>
    </center>
    
</body>
</html>
