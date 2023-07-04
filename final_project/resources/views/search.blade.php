@extends('base')
@section('title','詳細検索')
@section('main')
<form action="">
        <!--リストの作成-->
        <p>キーワードを入力してください</p>
        <input type="text">
        <p>詳細を選択してください</p>
        <select name="list" id="">
            <option hidden> 選択してください</option>
            <optgroup label="評価数">
                <option value="多い">評価が高い</option>
                <option value="少ない">評価が低い</option>
            </optgroup>
            <optgroup label="貸出回数">
                <option value="多い">貸出回数が多い</option>
                <option value="少ない">貸出回数が少ない</option>
            </optgroup>
        </select>
        <!--<p><input type="text" name="comment"></p>--><!--コメント量-->
        <!--<p><input type="text" name="evaluation"></p>--><!--評価-->
        <!--<p><input type="text" name="borrowedNumber"></p>--><!--貸出回数-->
        <h2>ジャンルを選択してください</h2><!--ジャンル-->
        <div>
        <p>文芸・人文</p>
        <input type="checkbox" name="genre" value="AA">文学
        <input type="checkbox" name="genre" value="AB">教養
        <input type="checkbox" name="genre" value="AC">サブカルチャー
        <input type="checkbox" name="genre" value="AD">エンタメ
        <input type="checkbox" name="genre" value="AE">哲学・思想<br>
        <input type="checkbox" name="genre" value="AF">心理
        <input type="checkbox" name="genre" value="AG">宗教
        <input type="checkbox" name="genre" value="AH">精神世界
        <input type="checkbox" name="genre" value="AI">歴史・地理
        <input type="checkbox" name="genre" value="AJ">文化・民族
        <input type="checkbox" name="genre" value="AK">教育
        <input type="checkbox" name="genre" value="AL">図書館
        <p>社会・ビジネス</p>
        <input type="checkbox" name="genre" value="BA">社会
        <input type="checkbox" name="genre" value="BB">政治
        <input type="checkbox" name="genre" value="BC">法律
        <input type="checkbox" name="genre" value="BD">経済
        <input type="checkbox" name="genre" value="BE">経営・ビジネス<br>
        <input type="checkbox" name="genre" value="BF">会計・財務
        <input type="checkbox" name="genre" value="BG">マーケ・流通
        <input type="checkbox" name="genre" value="BH">資格・検定
        <input type="checkbox" name="genre" value="BI">就職
        <p>医学・理工・コンピュータ</p>
        <input type="checkbox" name="genre" value="CA">医学・看護
        <input type="checkbox" name="genre" value="CB">薬学
        <input type="checkbox" name="genre" value="CC">歯科大学
        <input type="checkbox" name="genre" value="CD">栄養学
        <input type="checkbox" name="genre" value="CE">農林水産額<br>
        <input type="checkbox" name="genre" value="CF">数学
        <input type="checkbox" name="genre" value="CG">物理・科学
        <input type="checkbox" name="genre" value="CH">生物
        <input type="checkbox" name="genre" value="CI">その他理学
        <input type="checkbox" name="genre" value="CJ">土木<br>
        <input type="checkbox" name="genre" value="CK">建築
        <input type="checkbox" name="genre" value="CL">機械
        <input type="checkbox" name="genre" value="CM">電気
        <input type="checkbox" name="genre" value="CN">その他工学・工業
        <input type="checkbox" name="genre" value="CO">コンピュータ
        <p>芸術</p>
        <input type="checkbox" name="genre" value="DA">美術
        <input type="checkbox" name="genre" value="DB">写真
        <input type="checkbox" name="genre" value="DC">工芸
        <input type="checkbox" name="genre" value="DD">音楽
        <input type="checkbox" name="genre" value="DE">舞台
        <input type="checkbox" name="genre" value="DF">映画
        <p>趣味・実用</p>
        <input type="checkbox" name="genre" value="EA">スポーツ
        <input type="checkbox" name="genre" value="EB">趣味・娯楽
        <input type="checkbox" name="genre" value="EC">料理
        <input type="checkbox" name="genre" value="ED">出産・育児
        <input type="checkbox" name="genre" value="EE">健康・生活<br>
        <input type="checkbox" name="genre" value="EF">住まい・暮らし
        <input type="checkbox" name="genre" value="EG">冠婚葬祭・マナー
        <input type="checkbox" name="genre" value="EH">地図・旅行ガイド
        <input type="checkbox" name="genre" value="EI">日記・手帳
        <p>児童書</p>
        <input type="checkbox" name="genre" value="FA">絵本
        <input type="checkbox" name="genre" value="FB">読み物
        <input type="checkbox" name="genre" value="FC">児童文庫
        <input type="checkbox" name="genre" value="FD">学習図鑑
        <input type="checkbox" name="genre" value="FE">学習まんが<br>
        <input type="checkbox" name="genre" value="FF">学習
        <input type="checkbox" name="genre" value="FG">その他
        <p>語学・学参</p>
        <input type="checkbox" name="genre" value="GA">辞典・事典
        <input type="checkbox" name="genre" value="GB">語学・留学
        <input type="checkbox" name="genre" value="GC">学参(幼)
        <input type="checkbox" name="genre" value="GD">学参(小)
        <input type="checkbox" name="genre" value="GE">学参(中)
        <input type="checkbox" name="genre" value="GF">学参(高)
        <p>文庫・新書</p>
        <input type="checkbox" name="genre" value="HA">日本文学
        <input type="checkbox" name="genre" value="HB">海外文学
        <input type="checkbox" name="genre" value="HC">学術・教養文庫
        <input type="checkbox" name="genre" value="HD">雑学文庫
        <input type="checkbox" name="genre" value="HE">歴史文庫<br>
        <input type="checkbox" name="genre" value="HF">児童文庫
        <input type="checkbox" name="genre" value="HG">ビジネス文庫
        <input type="checkbox" name="genre" value="HH">ラノベ文庫
        <input type="checkbox" name="genre" value="HI">コミック文庫
        <input type="checkbox" name="genre" value="HJ">ノベルズ新書<br>
        <input type="checkbox" name="genre" value="HK">ラノベ新書
        <input type="checkbox" name="genre" value="HL">教養新書・選書
        <input type="checkbox" name="genre" value="HM">文庫・新書その他<br>
        <input type="checkbox" name="genre" value="HN">文庫その他(出版社別)
        <input type="checkbox" name="genre" value="HO">新書・選書その他(出版社別)
        <p>コミック・ゲーム</p>
        <input type="checkbox" name="genre" value="IA">少年
        <input type="checkbox" name="genre" value="IB">少女
        <input type="checkbox" name="genre" value="IC">青年
        <input type="checkbox" name="genre" value="ID">レディース
        <input type="checkbox" name="genre" value="IE">BL<br>
        <input type="checkbox" name="genre" value="IF">児童
        <input type="checkbox" name="genre" value="IG">学習
        <input type="checkbox" name="genre" value="IH">成人
        <input type="checkbox" name="genre" value="II">文庫
        <input type="checkbox" name="genre" value="IJ">コミックスその他<br>
        <input type="checkbox" name="genre" value="IK">コミックス(出版社別)
        <input type="checkbox" name="genre" value="IL">ゲーム攻略本
        <p>貸出</p>
        <input type="checkbox" name="rental">可<!--貸出可能か-->
        </div>
        <!--検索ボタン-->
        <p><input type="submit" value="検索"></p>
    </form>
@endsection