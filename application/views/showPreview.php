<html>
    <head>
        <style type="text/css">

            table, th, td {
            border: 1px solid black;
        }
        </style>
    </head>

    <body>

        <div>
			<a href="urlPreview"  >
            <input type="button" value="Add" />
            </a>
            <table style="width:50%">
                <tr>
                    <th>Title</th>
                    <th>description</th> 
                    <th>Image</th>
                </tr>

                <?php
                foreach ($showPreview as $key => $value) {
                ?>

                 <tr>
                    <td><?php echo $value['title']; ?></td>
                    <td><?php echo $value['description']; ?></td>
                    <td><?php echo $value['image']; ?></td>
                 </tr>
                 
                <?php }?>
            </table>

        </div>
        <?php echo $paginglinks; ?>

    </body>

</html>