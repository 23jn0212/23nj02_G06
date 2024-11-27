<?php
    require_once 'DAO.php';

    class DMGoods{
        public string $title_code;  //タイトルコード
        public string $card_code;   //カードコード
        public string $name;        //カード名
        public string $recode_name; //収録弾
        public string $card_type;   //カードの種類
        public string $creature_type; //種族
        public string $card_civilization; //文明
        public int $creature_cost; //コスト
        public string $card_text; //テキスト
        public string $card_url; //画像
    }
?>