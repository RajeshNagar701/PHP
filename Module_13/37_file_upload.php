<?php
/**
 * If the file is not empty.
 * If the file extension is one of .jpg, .png, .jpeg.
 * If the file size is less than or 2MB.
 * If the file dimension is within (300X200). 
 */
if (isset($_POST['btn_submit'])) {

    $path = "uploads/";
    $path = $path . basename($_FILES['input_file']['name']);
    echo "<pre>" . print_r(mime_content_type($_FILES["input_file"]["tmp_name"]), true); 
    exit;
    
    // Get Image Dimension
    $fileinfo = getimagesize($_FILES["input_file"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];

    $allowed_image_extension = [
        'png',
        'jpg',
        'jpeg',
        'gif'
    ];

    // Get image file extension
    $file_extension = pathinfo($_FILES["input_file"]["name"], PATHINFO_EXTENSION);

    // Validate file input to check if is not empty
    if (!file_exists($_FILES['input_file']['tmp_name'])) {
        $response = [
            'type' => 'danger',
            'msg' => 'Choose image file to upload.'
        ];
    }    // Validate file input to check if is with valid extension
    else if (!in_array($file_extension, $allowed_image_extension)) {
        $response = [
            'type' => 'danger',
            'msg' => 'Upload valid images. Only JPG, PNG, JPEG and GIF are allowed.'
        ];
        echo $result;
    }    // Validate image file size
    else if (($_FILES['input_file']['size'] > 2000000)) {
        $response = [
            'type' => 'danger',
            'msg' => 'Image size exceeds 2MB'
        ];
    }    // Validate image file dimension
    else if ($width > '768' || $height > '1024') {
        $response = [
            'type' => 'danger',
            'msg' => 'Image dimension should be within 768 X 1024.'
        ];
    } else {
        if (move_uploaded_file($_FILES['input_file']['tmp_name'], $path)) {
            $response = [
                'type' => 'success',
                'msg' => 'The file ' . basename($_FILES['input_file']['name']) . ' has been uploaded!'
            ];
        } else {
            $response = [
                'type' => 'danger',
                'msg' => 'There was an error uploading the file, please try again!'
            ];
        }
    }

    if (!empty($response)) {
        echo "<div class='alert alert-" . $response['type'] . " role='alert'>
                " . $response['msg'] . "
              </div>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>File Upload</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    </head>
    <body>
        <div class="container mt-5 ml-5">
            <h1>File Upload Example</h1><hr>
            <div class="card" style="width: 70%;">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <label for="formFile" class="form-label">Upload your file:</label>
                        <input class="form-control" type="file" name="input_file" id="formFile"><br>
                        <button type="submit" name="btn_submit" class="btn btn-success">Submit</button>
                    </form>
                    <!-- <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    </body>
</html>