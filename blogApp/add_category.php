<?php
include 'mainHeader.php'; 
require 'lib/connection.php';

     if (isset($_POST['btnSubmit'])) {
    
if (isset($_POST['ptitle']) && isset($_POST['pcontent']) && isset($_POST['purl']) && isset($_POST['pcategory']) && isset($_FILES['pimage']['name']) && isset($_POST['ppublishedAt'])) {

            $title = $_POST['ptitle'];
            $content = $_POST['pcontent'];
            $url = $_POST['purl'];
            $category = $_POST['pcategory'];
            $image = $_FILES['pimage']['name'];
            $published = $_POST['ppublishedAt'];
            $tmpName = $_FILES['fileupload']['tmp_name'];
        if (!empty($title) && !empty($content) && !empty($url) && !empty($category) && !empty($image) && !empty($published)) {
                $location = 'uploads/';
                 if (move_uploaded_file($tmpName, $location.$name)) {
                             insertCategory($title, $content, $url, $category, $published);
                             
                }
                 
           }
        }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
  
</head>
<body>
<div class="container m-5">
    <section>

            <div class="container m-5">
                <h4 class="text-muted text-weight-bold">Add New Blog Post</h4>
                <br>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype ='multipart/form-data'>
  
                    <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="ptitle" id="ptitle" class="form-control" >
                                    <div id='titleErr' class="text-danger font-weight-bold"></div>
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <input type="text" name="pcontent" id="pcontent" class="form-control" >
                                    <div id='contentErr'class="text-danger font-weight-bold"></div>
                                </div>
                                <div class="form-group">
                                    <label>URL</label>
                                    <input type="text" name="purl" id="purl" class="form-control" >
                                    <div id='urlErr' class="text-danger font-weight-bold"></div>
                                </div>
                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" name="ppublishedAt" id="ppublishedAt" class="form-control" >
                                    <div id='publishedErr' class="text-danger font-weight-bold"></div>
                                </div>
                                <div class="form-group">
                                    <label>Parent Category</label>
                                    <select name="pcategory" id="pcategory" class="form-control" multiple>
                                        <option>Education</option>
                                        <option>Lifestyle</option>
                                        <option>Health</option>
                                    </select>
                                    <div id='categoryErr'class="text-danger font-weight-bold"></div>
                                </div>
                                <div class="form-group">
                                    Image&nbsp;&nbsp;&nbsp;<input type="file" name="pimage" id="pimage">
                                    <div id='imageErr'class="text-danger font-weight-bold"></div>
                                </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" name="btnSubmit"  id="btnSubmit"  onclick="return validateRecords()" value="Add"> 
                            <button type="button" class="btn btn-danger" >Close</button>
                        </div>
                        </form>
                    </div>
            </section>


        </div>
    <script type="text/javascript" src="js/add_category_js.js"></script>
</body>
</html>