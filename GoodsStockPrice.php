<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.0.0-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/">
    <meta charset="utf-8">
    <title>在庫値段変更</title>
</head>
<body>  
    <div class="container">

        <h3 class="" align="center">カード在庫値段変更</h3>

        <div class="row">

            <table class="table table-bordered">

                <tr class="table-info textbox">
                    <th>収録弾</th>
                    <th>カード名</th>
                    <th>状態</th>
                    <th>カード在庫数</th>
                    <th>現在の値段</th>
                    <th>値段変更</th>
                </tr>

                <tr class="table-warning">
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td><input type="text" name="stockprice">円</td>
                </tr>

            </table>

        </div>

        <div class="row">
            <input type="button" value="確定" onclick="myenter()" class="col-4">
            <input type="button" onclick="history.back()" value="1つ前に戻る" class="col-4">
        </div>
    </div>
    <script>
        //余裕があれば、はい、いいえのやつにして確定にもワンクッションおく
        function myenter(){
            window.location.replace('http://10.32.97.1/SOTSU/2024/23JN02/G06/GoodsStatusChange.php');
            alert(`保存しました。`);
        }
    </script>
</body>
</html>