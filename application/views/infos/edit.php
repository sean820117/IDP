<center>
<form method="post" action="<?php echo base_url("update"); ?>">
<div id="insertbox">
<input type="hidden" value="<?php echo $infos_item['id']; ?>" name="id">
標題: <input type="text"  value="<?php echo $infos_item['title']; ?>" id="titlemake" name="title"><br><br>
主題: <select id="categorymake" name="category">
 <?php if ($infos_item['category']=="intern"): ?>
 <option value="intern" selected="selected">實習資訊</option>
 <option value="exchange">交換計畫</option>
 <option value="volunteer">國際志工</option>
 <option value="art">藝文活動</option>
 <?php endif; ?>

 <?php if ($infos_item['category']=="exchange"): ?>
  <option value="intern" >實習資訊</option>
 <option value="exchange" selected="selected">交換計畫</option>
 <option value="volunteer">國際志工</option>
 <option value="art">藝文活動</option>
 <?php endif; ?>

 <?php if ($infos_item['category']=="volunteer"): ?>
  <option value="intern" >實習資訊</option>
 <option value="exchange">交換計畫</option>
 <option value="volunteer" selected="selected">國際志工</option>
 <option value="art">藝文活動</option>
 <?php endif; ?>

 <?php if ($infos_item['category']=="art"): ?>
  <option value="intern" >實習資訊</option>
 <option value="exchange">交換計畫</option>
 <option value="volunteer">國際志工</option>
 <option value="art" selected="selected">藝文活動</option>
 <?php endif; ?>
</select> <br><br>
時間: <input type="text" name="time" value="<?php echo $infos_item['start_date']; ?>" id="timemake" name="start_date" placeholder="xxxx-xx-xx"><br><br>
內文: <br>
<textarea cols=50 rows=6 name="content"><?php echo $infos_item['content']; ?></textarea><br>

<input type="submit" />

</div>
</form>

</center>