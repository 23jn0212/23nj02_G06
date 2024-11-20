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
            <input type="radio" name="box.Yhonoo" value="炎">炎
            <input type="radio" name="box.Ykaze" value="草">草
            <input type="radio" name="box.Yyami" value="超">超
            <input type="radio" name="box.Yhikari" value="雷">雷
            <input type="radio" name="box.Yhikari" value="闘">闘
            <input type="radio" name="box.Ykami" value="悪">悪
            <input type="radio" name="box.Ymizu" value="鋼">鋼
            <input type="radio" name="box.Ymizu" value="無">無
            <input type="radio" name="box.Ymizu" value="ドラゴン">ドラゴン
            <input type="radio" name="box.Ymizu" value="フェアリー">フェアリー
        </div>

        <div style="margin-bottom:10px;">
        星
        <input type="text" name="txt_Ykosuto">
        </div>
            
        

        <div>
            <div style="margin-bottom:10px;">
            カード名
            <input type="text" name="txt_Yname">
            </div>

            <div style="margin-bottom:10px;">
                収録弾
                <select name="txt.Ydan" id="boto">
            </div>
                <option value="">選択してください</option>
            </select>
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
    </form>
</body>
</html>
