<html>
<p style="width: 70%;margin: auto;margin-top: 5%;font-size:larger;text-align:center">
Download a file from any URL</p>
<form method="post" style="width: 70%;margin: auto;margin-top: 10%;">
<input name="tenfile" value="filename.zip" size="50" placeholder="Tên File" style="width: 100%;height: 10%;font-size: 1.5em;padding:10px" required>
<input name="url" value="https://khogiaodien.net/thanh-toan/download-code" size="50" placeholder="Source URL" style="width: 100%;height: 10%;font-size: 1.5em;padding:10px" required>
<input name="submit" type="submit" value="Download" style="width: 30%;height: 10%;margin: 5% auto; display: block;">
<p style="width: 70%;margin: auto;margin-top: 10%;font-size:larger;text-align:center">
To <?php echo getcwd(); ?></p>
    <p>https://wordpress.org/latest.zip</p>
<p style="width: 70%;margin: auto;font-size: smaller;text-align: center;position: fixed;bottom: 0;background: #fff;">
Powered by: <a href="https://khogiaodien.net/" target="_blank" style="color:#f60;text-decoration:none;">KhoGiaoDien.Net</a></p>
</form>
<?php
    // maximum execution time in seconds
    // set_time_limit (24 * 60 * 60);
    if (!isset($_POST['submit'])) die();
    // folder to save downloaded files to. must end with slash
    $destination_folder = '';
    $url = $_POST['tenfile'];
    $newfname = $_POST['url'];
    //$newfname = $destination_folder . basename($url);
    //$newfname = 'theme-khogiaodien.zip';
    /*  // old script
    $file = fopen ($url, "rb");
    if ($file) { $newf = fopen ($newfname, "wb");
      if ($newf)
      while(!feof($file)) { fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 ); }
    }
    if ($file) { fclose($file); }
    if ($newf) { fclose($newf); }
    */
    file_put_contents( $newfname, fopen($url, 'r'));
?>
</html>
