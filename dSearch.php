<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.0.0-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/SearchStyle.css">
    <meta charset="utf-8">
    
</head>
<body>
    
    <form action="dSerchResults.php">
        <div class= "container">
            <div id="ALL">
            
                <div style="margin-bottom:10px;">
                    属性
                    <input type="checkbox" name="box.Dhi" value="火">火
                    <input type="checkbox" name="box.Dmizu" value="水">水
                    <input type="checkbox" name="box.Dsizen" value="自然">自然
                    <input type="checkbox" name="box.Dyami" value="闇">闇
                    <input type="checkbox" name="box.Dhikari" value="光">光
                    <input type="checkbox" name="box.Dzero" value="ゼロ">ゼロ
                    
                </div>

                <div style="margin-bottom:10px;">
                    カード名
                    <input type="text" name="txt_Yname">
                </div>


                <div>
                    収録弾
                    <select name="txt.Ydan" id="boto" style="margin-bottom:10px;">
                        <option value="">選択してください</option>
                    </select>
                </div>


                <div style="margin-bottom:10px;">
                    星
                    <input type="text" name="txt_Ykosuto">
                </div>


                <div>
                    カードの種類
                    <select name="txt_Ysyurui" id="boto" style="margin-bottom:10px;">
                        <option value="">選択してください</option>
                    </select>
                </div>
                
                <div>
                    <input type="submit" value="検索">
                </div>

            </div>
        </div>
    </form>
</body>
</html>
