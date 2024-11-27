<header>
    <!-- 配置はcssで整える -->
    <link rel="stylesheet" href="css/HeaderStyle.css">
    <div id="logo">
        <a href="titleSelect.php">
            <img src="images/logo1.png" alt="ロゴ">
        </a>
    </div>


    <div id="link">
        <a href="cart.php">
            <img src="images/cart.png" alt="カート">
        </a>
    </div>

    <div id="link2">
        <!-- if文で表示してるページのジャンルのSerchに遷移するようにする。 -->
        <form action="dSerchResults.php" method="GET">
            <input type="text" name="text_Serach" value="" id="serach">
            <input type="submit" value="検索">
        </form>
    </div>

    
   

    <div id="clear">
        <hr>
    </div>
</header>