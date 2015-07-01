<html>
    <head>
        <title id="title"></title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <pre>
            <code>
                <?php
                    $seed = str_split('abcdefghijklmnopqrstuvwxyz'
                                     .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                                     .'0123456789');
                    shuffle($seed); // probably optional since array_is randomized; this may be redundant
                    $rand = '';
                    foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];
                    
                    $directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']); 
                    $uploadsDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . '/files/'; 
                    $post = $_POST;
                    if ($post["code"] && $post["ext"]) {
                        $code = $post["code"];
                        $ext = $post["ext"];
                    } else {
                        die("please specify code, language and file extension");
                    }
                        
                    $id = uniqid();
                    $file = $rand . "." . $ext;

                    if(file_exists($uploadsDirectory . $file)) {
                        die("error uploading");
                    } else {
                        file_put_contents("/files/" . $file, $code);
                        header("Location: http://quickiebin.heroku.com/files/" . $file); /* Redirect browser */
                        exit();
                    }
                ?>
            </code>
        </pre>
    </body>
</html>