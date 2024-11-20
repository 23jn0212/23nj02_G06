<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/SearchStyle.css">
    <meta charset="utf-8">
    
</head>
<body>
    
    <form action="">
        <div id="ALL">
            
        <div style="margin-bottom:10px;">
            属性
            <input type="radio" name="box.Ymizu" value="水">水
            <input type="radio" name="box.Yhonoo" value="火">火
            <input type="radio" name="box.Ykaze" value="自然">自然
            <input type="radio" name="box.Ykaze" value="闇">闇
            <input type="radio" name="box.Yyami" value="光">光
            <input type="radio" name="box.Yhikari" value="ゼロ">ゼロ
            <input type="radio" name="box.Yhikari" value="闇">闇
        </div>

        <div>
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
    </form>
</body>
</html>
