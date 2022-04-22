
   

 <head>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>

</head>
 
     
  
<form id="my-form" name="wle">
    
     <input type="text" value="wole" name="collect" id="collect" />
<div class="dropzone"></div>

    
<button id="startUpload">Upload</button>
    
</form>
   


<script>

    Dropzone.autoDiscover = false;

    $(document).ready(function () {
        var myDropzone = new Dropzone(".dropzone", {
            init: function () {

                $('#startUpload').click(function () {
                    myDropzone.processQueue();
                });
            },
            url: "upload.php",
            type: 'POST',
            autoProcessQueue: false,
             maxFilesize: 20,
  paramName: "file",
        maxFiles: 5,
        addRemoveLinks: true,
        acceptedFiles: ".jpg,.JPG.jpeg,.JPEG,.PNG,.png,.gif",
    
        //send all the form data along with the files:
        
    
            success: function () {
                //do stuff
            },
            error: function () {
                //do error notification
            }


        });
            
             $(document).ready(function() {
                <!--#my-form grabs the form id-->
                $("#my-form").submit(function(e) {
                    e.preventDefault();
               
                });
            });
            
         myDropzone.on("sending", function(file, xhr, formData) {
  // Will send the filesize along with the file as POST data.
  

  var collect=document.getElementById("collect").value;
  formData.append("filesize", file.size);
  formData.append("collects", collect);
});
    });
    
   
</script>