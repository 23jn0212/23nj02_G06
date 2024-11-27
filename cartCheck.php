<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/CartStyle.css">
    <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.0.0-dist/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>ショッピングカート</title>
</head>
<body>
    <!-- 配置はプログラムができ次第調整する -->
    
        <?php include "header2.php" ?>
        <!-- 本来タイトルヘッダーをインクルードする-->
        <?php include "DhuemaHeader.php" ?>
    <div class="container">
        <h1>ショッピングカート</h1>
        <button id="button" onclick="location.href='http://10.32.97.1/SOTSU/2024/23JN02/G06/cart.php'">カートに戻る</button>
        <div calss="row" id="all">
            <table>
                <tr class="col">
                    <th>削除</th>
                    <th>商品内容</th>
                    <th>状態</th>
                    <th>数量</th>
                    <th>小計</th>
                </tr>
                
                <tr>

                    <td>
                        <!-- カード画像 -->
                        <img src="images/card100343682_1.jpg" alt="カード画像" id="card">
                    </td>
                    
                    <td>
                        カード名
                    </td>
                    
                    <td>
                        <!-- カード状態 -->
                        美品
                    </td>
                    
                    <td>
                        1
                    </td>
                    
                    <td>
                        <!-- 小計 -->
                        ~円
                    </td>
                </tr>
                <tr>
                    <td><h4>合計</h4><br>~円</td>
                </tr>
                
            </table>          
        </div>
        <div class="row">
            <!-- これ全体を左にする -->
            <div class="col">
                <button id="button" onclick="location.href='http://10.32.97.1/SOTSU/2024/23JN02/G06/CartEnd.php'">確定</button>
            </div>
        </div>


    </div>
    
    
</body>
</html>