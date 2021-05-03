<html>
<body>
<form id="addnew">
    <input type="text" class="id">
    <input type="text" class="content">
    <input type="submit" value="Add">
</form>
<script>
    jQuery(function($) {
        $('#form_addjts').submit(function(){
			<?php 
$file = 'db.txt';
$var=0;
$content="hi";
file_put_contents($file,$content,FILE_APPEND | LOCK-EX);
			?>
            
            return false;
        }); 
        function writeToFile(data){
            var fso = new ActiveXObject("Scripting.FileSystemObject");
            var fh = fso.OpenTextFile("./db.txt", 8);
            fh.WriteLine(data.id + ',' + data.content);
            fh.Close(); 
        } 
    }); 
</script>
</body>
</html>