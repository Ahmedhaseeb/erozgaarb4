<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSS - FLOAT Property</title>
	<style>
		.box{
			height: 50px;
			width: 50px;
			border:1px solid #000;
			box-sizing: border-box;
		}
		.box:first-child{
			float: left;
		}
		.box:nth-child(2){
			float: left;
		}
		.box:nth-child(3){
			float: left;
		}
		.clearfix{
			clear:left;
		}
	</style>
</head>
<body>
	


	<div class="box box1">
		
	</div>
	<div class="box"></div>
	<div class="box"></div>
	<div class="clearfix"></div>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque neque recusandae libero quis, molestiae, placeat deleniti voluptate dignissimos cumque alias omnis delectus dolorem, quas dolor ab reiciendis deserunt harum! Illum explicabo maxime corporis labore velit laboriosam sit, dignissimos, quasi id, dolores ipsam accusantium nisi ex natus. Est nihil, suscipit accusamus laboriosam sit non quas earum reprehenderit doloremque harum, fugit optio dicta nam iusto iste facere odit aspernatur laudantium animi magni! Hic dolorem nisi iusto necessitatibus reprehenderit, quas itaque, nostrum sapiente neque nobis, beatae quibusdam quidem aliquam fuga rerum exercitationem deleniti molestias voluptas perferendis commodi. Incidunt illo tempora sunt ut repudiandae.</p>

</body>
</html>