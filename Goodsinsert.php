<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/GoodsAddStyle.css" rel="stylesheet">
    <title>在庫追加画面</title>
</head>
<body>
    <form metod="post" action="Goodsinsertcheck.php">
        <div class="colum1">
            タイトル
            <br>
            <select name="title">
            <option value="からっぽ">-------------------------------</option>
            <option value="DM">デュエルマスターズ</option>
            <option value="Yu-Gi-Oh">遊戯王</option>
            <option value="Pokeca">ポケモンカードバトル</option>
            </select>
            <br>
            
            カード名
            <br>
            <input type="text" name="name">
            <br>
            
            カードの種類
            <br>
            <input type="text" name="cardtype">
            <br>
        </div>

        <div class="colum2">
            属性、タイプ、文明
            <br>
            <input type="text" name="type"> 
            <br>

            カード画像
            <br>
            <input type="text" name="gyazo">
            <br>
        
            収録弾
            <br>
            <input type="text" name="dan">
            <br>

        </div>

        <div class="colum3">
            種族
            <br>
            <input type="text" name="syuzoku">
            <br>

            価格
            <br>
            <input type="text" name="price">
            <br>

            状態
            <br>
            <select name="zyoutai">
            <option value="A">美品</option>
            <option value="B">準美品</option>
            <option value="C">傷あり</option>
            </select>
            <br>
        
            </div>

            <div class="colum4">
            カードテキスト
            <br>
            <textarea name="text" cols="80" rows="5"></textarea>
            <br>
        

        <div class="seiunsky">
        
            <br>

            <button name="add" id="q">追加</button>

            <input type="submit" name="check" id="w" value="確認">
        </div>
    </form>
    <button type="button" onclick="history.back()" id="menu">メニューに戻る</button>
    


</body>
</html>