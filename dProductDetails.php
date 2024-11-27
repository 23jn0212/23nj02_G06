<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>商品詳細</title>
    <link href="css/PdetailStyle.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.0.0-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include "header2.php"; ?>

    <?php include "DhuemaHeader.php"; ?>
    

    <div class="container">

    <!--詳細情報表示-->
    <div class="row" id="detailsize">

        <div class="col-4 offset-2" >
            <img src="images/エクス.jpg" class="ex1">
        </div>

        <div class="col-5">
            <table class="table table-bordered">

                <tr class="table-info textbox">
                    <th>ボルシャック・サイバーエクス</th>
                </tr>
                <tr class="table-warning">
                    <td>
                    【 クリーチャー 】<br>
                    種族 アーマード・ドラゴン / サイバー・コマンド / 文明 水/火 / パワー7000 / コスト6<br>

                    ■革命チェンジ：水または火のコスト３以上のドラゴン（自分の水または火のコスト３以上のドラゴンが攻撃する時、そのクリーチャーと手札にあるこのクリーチャーを入れ替えてもよい）<br>
                    ■スピードアタッカー<br>
                    ■W・ブレイカー<br>
                    ■このクリーチャーがバトルゾーンに出た時、次のうちいずれか１つを選ぶ。<br>
                    　▶︎相手は自身のパワーが一番小さいクリーチャーを１体選び、破壊する。<br>
                    　▶︎相手のクリーチャーを１体選び、持ち主の手札に戻す。
                    </td>
                </tr>
                <tr class="table-warning textbox">
                    <td>
                            美品 90円  110枚
                        <br>                        
                            準美品 75円  160枚
                         <br>
                            傷あり 60円  1230枚
                        <br>
                        <input type="button" name="cartadd" onclick="location.href='http://10.32.97.1/SOTSU/2024/23JN02/G06/cart.php'" value="カートに追加">
                    </td>
                </tr>
            </table>
        </div>

    </div>

    <br>

    <div class="row box" id="boxsize">
        <h3 class="relateditems" align="center">関連商品</h3>

        <!--関連商品表示（規定数繰り返し表示）-->
        <div class="col-2">
            <table align="left">
                <tr>
                    <td>
                        <img src="images/エクス.jpg" class="ex2">
                    </td>
                </tr>
                <tr>
                    <td>
                        ボルシャック・サイバーエクス        
                    </td>    
                </tr>
                <tr>
                    <td>
                        最低額 90円～
                    </td>
                </tr>
            </table>
        </div>

        <div class="col-2">
            <table align="left">
                <tr>
                    <td>
                        <img src="images/エクス.jpg" class="ex2">
                    </td>
                </tr>
                <tr>
                    <td>
                        ボルシャック・サイバーエクス        
                    </td>    
                </tr>
                <tr>
                    <td>
                        最低額 90円～
                    </td>
                </tr>
            </table>
        </div>

    </div>

    <!--コメント記入欄-->
    <div class="row box" id="boxsize">
  
            <h3 class="relateditems" align="center">コメント記入欄</h3>
        <div>
            <form method="post" action="">
                <textarea name="お問い合わせ内容" cols="130" rows="5"></textarea>
                <input type="submit" name="toukou" value="投稿">
            </form>
        </div>
    </div>

    <!--コメント読み込み欄-->
    <div class="row box" id="boxsize">
  
            <h3 class="relateditems" align="center">お客様コメント一覧</h3>
        <div>
            <form method="post" action="">
                <textarea name="お問い合わせ内容" cols="130" rows="5" readonly></textarea>
            </form>
        </div>
    </div>
    
</div>
   
</body>
</html>