<!DOCTYPE html>
<html>
<head>
    <meta chacenet="utf-8">
    <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <link href="css/Goodssearch.css" rel="stylesheet">
    <script src="bootstrap-5.0.0-dist/js/bootstrap.min.js"></script>
    <title>在庫管理検索画面</title>
</head>
<body>
    <div class="container">
        <div class="top">
            タイトル：             
            <select name="title">
            <option value="からっぽ">-------------------------------</option>
            <option value="DM">デュエルマスターズ</option>
            <option value="Yu-Gi-Oh">遊戯王</option>
            <option value="Pokeca">ポケモンカードバトル</option>
            </select>

            <button id="menu" onclick="location.href='http://10.32.97.1/SOTSU/2024/23JN02/G06/Goodsmanagement.php'">メニューに戻る</button>
        </div>

        <div class="status">
            <p>ステータス</p>
            <br>
            <form metod="get" action="">
                カード名： <input type="text" name="cardname"> 
                <br>
                絞り込み検索
                <br>
                <div class="search">
                    収録弾  <select name="packnumber">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    </select>
                    <br>
                    文明
                    <input type="checkbox" name="box.Dred" value="火">火
                    <input type="checkbox" name="box.Dblue" value="水">水
                    <input type="checkbox" name="box.Dgreen" value="自然">自然
                    <input type="checkbox" name="box.Dblack" value="闇">闇
                    <input type="checkbox" name="box.Dwhite" value="光">光
                    <input type="checkbox" name="box.Dzero" value="ゼロ">ゼロ
                    <br>
                    コスト <input type="text" name="cost">
                    <br>
                    種族 <input type="text" name="type">
                    <input type="submit" name="search" value="検索">
                    <br>
                </div>
            </form>
        </div>

        <div class="sort">
            表示順  <select name="sort">
                <option value="aiueo">五十音順</option>
                <option value="cardid">カード番号順</option>
                </select>
        </div>
        
        <div class="Goods">
            <img src="images/エクス.jpg" class="ex2">
            <br>
            <form method="post" action="GoodsStatusChange.php">
                <input type="submit" name="" value="在庫変更"> <!-- nameいじれば検索で出てきたカードごとに違うページを作れる？--> 
            </div>



    






            


</body>
</html>