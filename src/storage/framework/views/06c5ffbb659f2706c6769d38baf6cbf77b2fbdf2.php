<div id="sidemenu">
    <form action="">
        <div>
            <p>キーワード</p>
            <input type="text" placeholder="キーワード">
        </div>
        <div>
            <p>シーン</p>
            <select id="scene">
                <option value="">シーンを選択</option>
                <option value="birthday">誕生日</option>
            </select>
        </div>
        <div>
            <p>関係性</p>
            <select id="relationship">
                <option value="">お相手様を選択</option>
                <option value="girlfriend">彼女</option>
            </select>
        </div>
        <div>
            <p>年代</p>
            <select id="age">
                <option value="">年代を選択</option>
                <option value="teenager">10代</option>
            </select>
        </div>
        <div>
            <p>カテゴリー</p>
            <select name=" " id="category">
                <option value="">カテゴリーを選択</option>
                <option value="cosmetic-beauty">コスメ・ビューティー</option>
            </select>
        </div>
        <div>
            <p>値段</p>
            <ul>
                <li>
                    <div>
                        <select id="min_category">
                            <option value="0">下限なし</option>
                            <option value="cosmetic-beauty">コスメ・ビューティー</option>
                        </select>
                    </div>
                </li>
                <p>〜</p>
                <li>
                    <div>
                        <select id="max_category">
                            <option value="0">上限なし</option>
                            <option value="cosmetic-beauty">コスメ・ビューティー</option>
                        </select>
                    </div>
                </li>
            </ul>
        </div>
        <div>
            <p>配送</p>
            <input type="checkbox">
            <span>お急ぎ便(1日以内に発送)</span>
        </div>
        <div>
            <p>ギフトオプション</p>
            <div>
                <input type="checkbox">
                <span>メッセージカード</span>
            </div>
            <div>
                <input type="checkbox">
                <span>熨斗</span>
            </div>
            <div>
                <input type="checkbox">
                <span>ラッピング</span>
            </div>
            <div>
                <input type="checkbox">
                <span>ギフトボックス</span>
            </div>
            <div>
                <input type="checkbox">
                <span>包装紙</span>
            </div>
            <div>
                <input type="checkbox">
                <span>名入れ刻印</span>
            </div>
            <div>
                <input type="checkbox">
                <span>名入れ刺繍</span>
            </div>
            <div>
                <input type="checkbox">
                <span>フラワー</span>
            </div>
            <div>
                <input type="checkbox">
                <span>紙袋</span>
            </div>
            <div>
                <input type="checkbox">
                <span>宝箱</span>
            </div>
        </div>
        <div>
            <p>クーポン</p>
        </div>
        <div>
            <p>販売状態</p>
            <div>
                <input type="checkbox">
                <span>販売中のみ</span>
            </div>
        </div>
        <button>検索する</button>
    </form>
</div>
<?php /**PATH /var/www/resources/views/layouts/sidemenu.blade.php ENDPATH**/ ?>