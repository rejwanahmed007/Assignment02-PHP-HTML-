<html>
    <head>
        <title>Student Name</title>
    </head>
    <body>
        <form method="POST">
            <fieldset >
                <legend>
                <b>NAME</b>
                </legend>
                <table border="0">
                    <tr>
						<td><input type="text" name="name" size="50" ></td>
						<td>
                            <?php
                            if(isset($_REQUEST['submit']))
                            {
                                echo $_REQUEST['name'];

                            }
                            
							?>
						</td>
                    </tr>
                    

                </table> 
                <hr>
                <table border="0">
                    <tr>
                        <td><input type="submit" name="submit" ></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>