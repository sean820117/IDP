$(document).ready(function () {

        $("#cover").css("background-size",$("#bigp").width());
		$("#cover").css("width",$("#bigp").width()/2);

         // trims it to 17 charcters     
           $cut1=$('#titletrim').text().substr(0,5);
           $cut2=$('#titletrim').text().substr(5,25);
           $('#titletrim').text($('#titletrim').text().substr(0,5));
           // 17 charcters + .......  
          $('#titletrim').append('...');

    $('#titletrim').hover(function(){
  		$('#titletrim').text($cut2);

  },
  function(){
  		$('#titletrim').text($cut1);
  		$('#titletrim').append('...');
  }

  );


	var i=1;
	for(i=1;i<=8;i++)
	{
		(function(j){
		$("#smallp0"+j).hover(function(){
		$("#smallp0"+j).css({opacity:0.1});
		$("#smallp0"+j).animate({opacity:1},500);
		$("#smallp0"+j).attr("src","http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/public/images/smallp0"+j+"-2.png");
}
,function(){
		$("#smallp0"+j).attr("src","http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/public/images/smallp0"+j+"-1.png");
});
	
	$("#smallp0"+j).click(function(){
		$("#bigp").attr("src","http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/public/images/bigp-color0"+j+".jpg");
		$(".about_member").css({opacity:0.1});
		$(".about_member").animate({opacity:1},500);
		$("#cover").css("background","url(http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/public/images/bigp0"+j+".jpg) no-repeat");
		$("#cover").css("background-size",$("#bigp").width());
		$("#cover").css("width",$("#bigp").width()/2);



		switch(j)
		{
			case 1:
				$("#name").text("陳詳");
				$("#department").text("工程部");
				$("#about").html("Hi I'm Sean.<br>我來自台北<br>我隨性也隨和<br>愛打球及運動健身<br>喜歡在悠閒的地方過生活<br>帶給人們更便利的生活是我的志向");
				$("#pro").html("網站前後端<br>資料庫<br>Android<br>");
			break;

			case 2:
				$("#name").text("陳兆元");
				$("#department").text("工程部");
				$("#about").html("嗨大家好~我叫Harry<br>我是台北人 現在在熱情的台南唸書<br>喜歡演戲和任何好笑的事情<br>當然也熱愛電腦<br>希望能用我的能力讓大家過更有趣的生活!");
				$("#pro").html("HTML5 / PHP<br>c / c++ / c#");
			break;

			case 3:
				$("#name").text("朱柏勳");
				//$("#cover").css("width","413px");
				$("#department").text("工程部");
				$("#about").html("Comment allez-vous?I am Terry.<br>看起來好像有點害羞但是其實很開朗<br>平常都在彈吉他和努力健身增肥<br>希望能在大學時代的尾聲多認識一些不同的人!");
				$("#pro").html("網頁前後端/SQL<br>C/C++/C#<br>Android APP");
			break;

			case 4:
				$("#name").text("羅敏慈");
				//$("#cover").css("width","420px");
				$("#department").text("行銷部");
				$("#about").html("我來自水藍色的那顆星，<br>在星球上，<br>我愛運動、交朋友、熱愛冒險，<br>沒去過其他的星球，<br>如果你來自其他的星球，<br>也許可以交個朋友。");
				$("#pro").html("組織規劃<br>行銷企劃<r>產業分析<br>消費者分析");
			break;

			case 5:
				$("#name").text("鄭祖燁");
				//$("#cover").css("width","420px");
				$("#department").text("行銷部");
				$("#about").html("大家好我是Josh<br>是個喜好自由和嘗試新事務的男孩<br>沒什麼特別的興趣就是喜歡和大家玩在一塊<br>雖然看起來滄桑但內心是個百分百的小孩<br>歡迎大家來認識我");
				$("#pro").html("消費者分析<br>行銷企劃書<br>資料整合");
			break;

			case 6:
				$("#name").text("楊峻瑜");
				$("#department").text("行銷部");
				$("#about").html("嗨~我是Kevin<br>身處於艷陽高照南洋熱情的台南<br>熱情奔放隨和幽默都跟我有一點關係<br>本身也是一個熱愛運動的陽光波衣<br>不免俗的皮膚有些黝黑。但這就是成長的象徵<br>我是楊峻瑜我在SD情報網");
				$("#pro").html("企劃行銷及網路行銷<br>簡報製作與溝通<br>團隊合作與整合<br>問卷實務經驗");
			break;

			case 7:
				$("#name").text("蔡彰容");
				$("#department").text("設計部");
				$("#about").html("哈囉大家好～我是蔡彰容<br>一月一號出生的元旦寶寶<br>熱情的台南人<br>皮膚有點黑<br>平常喜歡游泳、打排球、跳舞<br>也喜歡看電影");
				$("#pro").html("心理計量<br>空間視覺的神經機制<br>工商/組織心理學");
			break;

			case 8:
				$("#name").text("蔡喬安");
				$("#department").text("設計部");
				$("#about").html("來自風城-新竹<br>已樂觀開朗的性格<br>讓生活充滿溫暖與快樂<br>喜歡繪畫、下棋、游泳");
				$("#pro").html("產品設計<br>平面繪圖<br>3D建模彩現<br>");
			break;

		}

	});
	})(i);
}

	
	});


function make() {
		$("#titlemake").val("1234");
		$("#categorymake").val("1234");
		$("#timemake").val("1234");
		$("#contentmake").val("1234");

		


		
}