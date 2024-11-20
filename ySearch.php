<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/SearchStyle.css">
    <meta charset="utf-8">
    
</head>
<body>
    
    <form action="">
    <div id="ALL">
        <div id="boto"style="margin-bottom:10px;">
            属性
            <input type="radio" name="box.Ymizu" value="水">水
            <input type="radio" name="box.Yhonoo" value="炎">炎
            <input type="radio" name="box.Ykaze" value="風">風
            <input type="radio" name="box.Yyami" value="闇">闇
            <input type="radio" name="box.Yhikari" value="光">光
            <input type="radio" name="box.Yhikari" value="地">地
            <input type="radio" name="box.Ykami" value="神">神
        </div>
        <div>
        <div id="boto" style="margin-bottom:10px;">
            カード名
            <input type="text" name="txt_Yname">
            </div>
            <div>
                <div style="margin-bottom:10px;">
            収録弾
            <select name="txt.Ydan" id="boto"style="margin-bottom:10px;">
                <option value="">選択してください</option>
                </div>
            </select>
            </div>
        </div>
        <div id="boto"style="margin-bottom:10px;">
        星
        <input type="text" name="txt_Ykosuto">
        </div>
        <div>
            <div id="boto" style="margin-bottom:10px;">
            カードの種類
            <select name="txt_Ysyurui" id="boto"style="margin-bottom:10px;">
                <option value="">選択してください</option>
            </select>
            </div>
            <div>
            種族
            <select name="txt_Ysyuzoku" id="boto"style="margin-bottom:10px;">
                <option value="1">選択してください</option>
            </select> 
            </div>
        </div>
        
        <div>
            <input type="submit" value="検索">
        </div>
    </form>
</body>
</html>