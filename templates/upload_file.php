<form action="action_upload_file.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="cat_id" value=<?=$restaurant[id]?> >
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
