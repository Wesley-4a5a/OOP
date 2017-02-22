<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'fileHandlingclass.php';
$updateText = $_POST['update'];
$handler = new fileHandling("fileOneTwoThree", ".txt");
//var_dump($handler);
//$output = $handler->fileName;

//echo $handler->createFile();
echo $handler->readFile();
//echo $handler->updateFile($updateText);
//echo $handler->deleteFile();
//echo $handler->fileSize();



?>

<style>
textarea#textField {
    width:100%;
    direction:rtl;
    height: auto;
    line-height:1.5;
    padding:15px 15px 30px;
    border-radius:3px;
    border:1px solid #F7E98D;
    font:13px Tahoma, cursive;
    transition:box-shadow 0.5s ease;
    box-shadow:0 4px 6px rgba(0,0,0,0.1);
    background:linear-gradient(#F9EFAF, #F7E98D);
}
</style>
<body>
  <textarea id='textField' name="comment" rows="4" cols="50"><?php echo $handler->readFile();?></textarea>
  <form method='POST' action=''>
    <input name='update' type='text' />
    <input type='submit' />
  </form>
</body>

<script>
document.getElementById("textField").scrollTop = document.getElementById("textField").scrollHeight

</script>
