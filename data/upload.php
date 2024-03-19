// File upload handler
<?php
if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
    $uploadDirectory = "../data/gallery/";
    $tempFilePath = $_FILES["file"]["tmp_name"];
    $targetFileName = uniqid() . '_' . basename($_FILES["file"]["name"]);
    $targetFilePath = $uploadDirectory . $targetFileName;

    // Validate file type and size here if needed

    if (move_uploaded_file($tempFilePath, $targetFilePath)) {
        echo json_encode(array("status" => "success", "message" => "File uploaded successfully"));
    } else {
        echo json_encode(array("status" => "error", "message" => "Error uploading file"));
    }
} else {
    echo json_encode(array("status" => "error", "message" => "Error uploading file"));
}
?>