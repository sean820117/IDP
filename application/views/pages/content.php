	<div id="mid">	
		<div id="contentinfo">
		<img src="<?php echo base_url("/public/images/date.png"); ?>" class="infopic">
		123
		<img src="<?php echo base_url("/public/images/people.png"); ?>" class="infopic">
		123
		<img src="<?php echo base_url("/public/images/heart.png"); ?>" class="infopic">
		123
		</div>
		<div id="content">
		<?php /*  實習 
			$html = file_get_html('http://career.osa.ncku.edu.tw/NCKU_CDD/activity/bbs.jsp');
			foreach($html->find('td[width=450] a') as $element)
			{ 
       			echo '<b>'.$element.'</b><br>';
       			$a_href = file_get_html("http://career.osa.ncku.edu.tw/NCKU_CDD/activity/".$element->href);
       			echo $a_href->find('td[class=bg_white] div[id=maincontent] tbody tr td',6);
       		}
       		echo 123124123;
		*/ ?>
		<? /* 國際事務處 交換 

		php 
			$html = file_get_html('http://oia.ncku.edu.tw/files/40-1018-501-2.php');
			foreach($html->find('span[class=ptname] a') as $element)
			{
       			echo '<b>'.$element->text().'</b>'.'<br>';

       			//$ahref = file_get_html($element->href);

	       		//echo $ahref->find('div[class=ptcontent clearfix floatholder]',0) ;    				
			}
			
		*/?>

		<?php   //藝術中心 
			$html = file_get_html('http://artcenter.ncku.edu.tw/bin/home.php');
			foreach($html->find('span[class=ptname] a') as $element)
			{
       			echo '<b>'.$element->text().'</b>'.'<br>';

       			//$ahref = file_get_html($element->href);

	       		//echo $ahref->find('div[class=ptcontent clearfix floatholder]',0) ;    				
			}
			
		?>
	</div>
	</div>






