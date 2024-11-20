<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>検索結果</title>
    <link href="css/serchResultStyle.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.0.0-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include "header2.php"; ?>

    <center><h2>header2</h2></center>
    <hr>

    <div class="container">

        <br>
            <div class="box5">
            <form action="index.php" method="GET">
                カード名<input type="text" name="keyword" placeholder="検索キーワード入力" />
                <input type="hidden" name="token"  />
                <input type="submit" value="検索">
            </form>
            </div>
        <br>
        
        <hr>

        <br>
            <center><h3>検索結果</h3></center>

                    <div id="sort">
                            在庫数アリのみ表示<input type="checkbox" name="check" value="在庫チェッカー"> 
                            表示順<select>
                                    <option value="downsort">降順</option>
                                    <option value="upsort">昇順</option>
                                </select>
                    </div>
        <br>

        <hr>
        <table id="goodsgroup"><center>    
                        <tr>
                            <td id="goodsimages">
                                <img src="images/エクス.jpg" class="ex1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                サイバーエクス
                            </td>
                        </tr>
                        <tr>
                            <td>
                            180円
                            </td>
                        </tr>
                        <tr>
                            <td>
                                カートに入れる
                            </td>
                        </tr>
        </table></center>
    </div>
</body>
</html>
