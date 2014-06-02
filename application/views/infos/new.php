<center>
<form method="post" action="<?php echo base_url("insert"); ?>">
<div id="insertbox">
標題: <input type="text"  value="" id="titlemake" name="title"><br><br>
分類: <select id="categorymake" name="category">
 <option value="intern">實習資訊</option>
 <option value="internation">國際交流</option>
 <option value="art">藝文活動</option>
</select> <br><br>

子分類: <select id="sub_categorymake" name="sub_category">
 <option value="business"></option>
 <option value="engineer">交換計畫</option>
 <option value="design">國際志工</option>
 <option value="media">藝文活動</option>
 <option value="other">藝文活動</option>
</select> <br><br>

時間: <input type="text" name="time" value="" id="timemake" name="start_date" placeholder="xxxx-xx-xx"><br><br>
內文: <br>
<textarea cols=50 rows=6 name="content"></textarea><br>

<input type="submit" />


</div>
</form>

</center>