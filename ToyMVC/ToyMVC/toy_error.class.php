<?php
class ToyError{ //view class
    public function display($message){
?>
        <!DOCTYPE HTML>
        <html>
        <head>
            <title>ToyMVC Error</title>
            <link type="text/css" rel="stylesheet" href="includes/style.css" />
        </head>
        <body>
        <table width='500'>
            <tr>
                <td valign='center' align='center'>
                    <img src='includes/kaboom.png' border='0'/>
                </td>
                <td valign='top' align='left'>
                    <h3> We're sorry, but an error has occurred.</h3>
                    <?php echo $message; ?>
                    <p><a href="index.php">HOME</a></p>
                </td>
            </tr>
        </table>
        </body>
        </html>
<?php
    }
}
?>
