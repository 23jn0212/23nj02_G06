<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.0.0-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/">
    <meta charset="utf-8">
    <title>在庫変更</title>
</head>
<body>  
    <div class="container">

        <h3 class="" align="center">カード状況変更</h3>

        <div class="row">

            <table class="table table-bordered">

                <tr class="table-info textbox">
                    <th>収録弾</th>
                    <th>カード名</th>
                    <th>総在庫数</th>
                    <th>状態</th>
                    <th>カード在庫数</th>
                    <th>販売状況</th>
                    <th>おすすめ</th>
                </tr>

                <tr class="table-warning">
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                </tr>

            </table>

        </div>

        <div class="row">
            <input type="button" value="在庫を増やす" onclick="location.href='http://10.32.97.1/SOTSU/2024/23JN02/G06/GoodsStockAdd.php'" class="col-4">
            <input type="button" value="在庫を減らす" onclick="location.href='http://10.32.97.1/SOTSU/2024/23JN02/G06/GoodsStockDelete.php'" class="col-4">
            <input type="button" value="おすすめ商品設定" onclick="location.href='http://10.32.97.1/SOTSU/2024/23JN02/G06/GoodsStockRecommendation.php'" class="col-4" >
            <input type="button" value="値段変更" onclick="location.href='http://10.32.97.1/SOTSU/2024/23JN02/G06/GoodsStockPrice.php'" class="col-4">
            <input type="button" value="1つ前に戻る" onclick="location.href='http://10.32.97.1/SOTSU/2024/23JN02/G06/GoodsSearch.php'" class="col-4">
        </div>
    </div>


</body>
</html>