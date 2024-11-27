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
                        <button >削除</button>
                    </td>

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
                        <select name="0">
                            1
                        </select>
                    </td>
                    
                    <td>
                        <!-- 小計 -->
                        ~円
                    </td>
                </tr>
                
            </table>          
        </div>
        <div class="row">
            <!-- これ全体を左にする -->
            <div class="col">
                <form action="cartCheck.php" method="GET">
                    <input type="button" value="一括削除" id="button">
                    <div>
                        合計:100円
                    </div>  
                    <input type="submit" value="レジに進む" id="button">
                </form>

                <button type="button" onclick="history.back()" id="button">お買い物を続ける</button>
                
            </div>
        </div>


    </div>
    
    
</body>
</html>