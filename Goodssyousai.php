<!DOCTYPE html>
<html>
<head>
    <meta chacenet="utf-8">
    <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <link href="css/GoodsCheck.css" rel="stylesheet">
    <script src="bootstrap-5.0.0-dist/js/bootstrap.min.js"></script>
    <title>在庫追加確認画面</title>
</head>
<body>
    <div class="container">
        <div class="button1">
            <button onclick="history.back()">1つ前に戻る</button>

            <button id="menu" onclick="location.href='httcen://www.google.com/'">メニューに戻る</button>
        </div>

        <div class="Gooceninfo">
            <div class="info1 ">
                <table class="table table-bordered">    
                    <tr>
                        <th>収録弾</th>
                        <th>カード名</th>
                        <th>種族</th>
                        <th>属性、タイトル、文明</th>
                        <th>価格</th>
                        <th>レアリティ</th>
                        <th>状態</th>
                        <th>在庫数</th>
                    </tr>
                    <tr>
                        <form action="">
                            <td><input type="text" class="txt1"></td>
                            <td><input type="text" class="txt1"></td>
                            <td><input type="text" class="txt1"></td>
                            <td><input type="text" class="txt1"></td>
                            <td><input type="text" class="txt1"></td>
                            <td><input type="text" class="txt1"></td>
                            <td><input type="text" class="txt1"></td>
                            <td><input type="text" class="txt1"></td>
                        </form>
                    </tr>
                </table>
            </div>
            
            
            <table class="table2 table-bordered">
                <tr>
                    <th id="cen">商品テキスト</th>
                    <th id="cen">商品画像リンク</th>
                    <th id="cen">商品画像</th>
                </tr>
                <tr>  
                <form action="">
                    <!--テキストサイズ大きくしておく -->
                    <th><input type="text" class="txt1"></th>
                    <th><input type="text" class="txt1"></th>
                    <th id="cen"><img src="images/エクス.jpg" class="Goodsimg"></th>
                </form>
                </tr>
            </table>


        </div>

        <div class="button2">
            <tr>
                <button id=submit>確定</button>
            <tr>
        </div>
        <div class="button2">
            <tr>
                <button id=submit>削除</button>
            <tr>
        </div>


    </div>
</body>
</html>