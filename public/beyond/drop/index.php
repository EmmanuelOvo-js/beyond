<!doctype html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="dropzone.css" rel="stylesheet" type="text/css">
        <script src="dropzone.js" type="text/javascript"></script>
    </head>
    <body >
        <div class="container" >
            <div class='content'>
            <form action="upload.php">
                
            </form>  
            <div class="dropzone" id="dropzone"></div>
            </div> 
        </div>
    </body>
</html>
<script type="text/javascript">
//<![CDATA[

    
Dropzone.autoDiscover = false;

// Dropzone class:
var myDropzone = new Dropzone("div#dropzone", { url: "/file/post"});

// If you use jQuery, you can use the jQuery plugin Dropzone ships with:
$("div#dropzone").dropzone({ url: "/file/post" });


//]]></script>