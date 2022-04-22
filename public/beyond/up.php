<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
    
    

</head>

<form name="wizard-card form" id="wizard-card form" method="post" action="up.php" enctype='multipart/form-data'>
<div class="dropzone"></div>
<button id="startUpload">Upload</button>
</form>


$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = 'uploads';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
     
}
?> 

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
<script>
    Dropzone.autoDiscover = false;

    $(document).ready(function () {
        var myDropzone = new Dropzone(".dropzone", {
            init: function () {

                
                    myDropzone.processQueue();
              
            },
            url: "up.php",
           paramName: "file",
        maxFilesize: 20,
        maxFiles: 5,
        addRemoveLinks: true,
        acceptedFiles: ".jpg,.JPG.jpeg,.JPEG,.PNG,.png,.gif",
        autoProcessQueue: false,
            success: function () {
                //do stuff
            },
            error: function () {
                //do error notification
            }


        });
    });
</script>
