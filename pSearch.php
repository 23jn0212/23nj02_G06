<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/SearchStyle.css">
    <meta charset="utf-8">
    
</head>
<body>
    
    <form action="pSerchResults.php">
        <div id="ALL">

            <div style="margin-bottom:10px;">
                属性
                <input type="checkbox" name="box.Pmizu" value="水">水
                <input type="checkbox" name="box.Phonoo" value="炎">炎
                <input type="checkbox" name="box.Pkusa" value="草">草
                <input type="checkbox" name="box.Pchou" value="超">超
                <input type="checkbox" name="box.Pkaminari" value="雷">雷
                <input type="checkbox" name="box.Ptou" value="闘">闘
                <input type="checkbox" name="box.Paku" value="悪">悪
                <input type="checkbox" name="box.Phagane" value="鋼">鋼
                <input type="checkbox" name="box.Pmu" value="無">無
                <input type="checkbox" name="box.Pdoragon" value="ドラゴン">ドラゴン
                <input type="checkbox" name="box.Pfeari" value="フェアリー">フェアリー
            </div>

            <div style="margin-bottom:10px;">
                星
                <input type="text" name="txt_Ykosuto">
            </div>
            
        

            <div style="margin-bottom:10px;">
                カード名
                <input type="text" name="txt_Yname">
            </div>

            <div style="margin-bottom:10px;">
                収録弾
                <select name="txt.Ydan" id="boto">
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
        </div>
    </form>
</body>
</html>
