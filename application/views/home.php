<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta property="og:description" content="" />            
		<meta property="og:title" content="" />
		<meta property="og:image" content="" />

		<style type="text/css">

			::selection { background-color: #E13300; color: white; }
			::-moz-selection { background-color: #E13300; color: white; }

			body {
				background-color: #fff;
				margin: 40px;
				font: 13px/20px normal Helvetica, Arial, sans-serif;
				color: #4F5155;
			}

			#body {
				margin: 29px 15px 43px 15px;
				min-height: 91px;
			}

			#container {
				margin: 78px;
    			border: 4px solid #D0D0D0;
				box-shadow: 0 0 8px #D0D0D0;
			}
			table,td {
            border: 1px solid black;
        }
		</style>
	</head>

	<body>

		<div id="container">

			<form id="body" action="urlPreview" method="post" enctype="multipart/form-data">
				<div >
					<label >Page Url</label>
					<input type="text" name="url" id="url"  placeholder="Enter Page Url"  >
					<button type="submit" class="btn btn-primary" >View</button>
					<span class="error"></span>
				</div>
				<br/>
			</form>
			<?php
			if($ogs &&  isset($ogs['image'])){?>
				<div id="body">
					<form action="save" method="post" enctype="multipart/form-data"> 
						
					<input type="hidden" name="image" value="<?php echo $ogs['image']; ?>">
					<input type="hidden" name="title" value="<?php echo $ogs['title']; ?>">
					<input type="hidden" name="description" value="<?php echo $ogs['description']; ?>">
					<input type="hidden" name="url" value="<?php echo $ogs['url']; ?>">

					<table>
							<tr>
								<td><img src="<?php echo $ogs['image']; ?>" height="50" weight="50"/> </td>
								<td><?php echo $ogs['title']; ?></td>
								<td><?php echo $ogs['description']; ?></td>
							</tr>
						</table>
						<br>
					<button type="submit" >Save</button>

					</form>
				</div>
			<?php }?>
		</div>

	</body>
</html>
