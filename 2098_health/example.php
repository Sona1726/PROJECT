<!DOCTYPE html>
<html><head>

</head>
<body>
    <form method="POST" action="#" encrypte="multiple/form-data">
        <label>
            Title
        </label>
        <input type="text" name="title">
        <label>File Upload</label>
        <input type="File" name="file">
        <input type="submit" name="submit">
    </form>
</body></html>
<?php
$localhost="localhost";
$username="root";
$dbpassword="";
$dbname="dbms";
$conn=mysqli_connect($localhost,$username,$dbpassword,$dbname);
if(isset($_POST["submit"]))
{
    $file = $_FILES['file'];
$file_name = $_FILES['title'];


//Restriction to the image. You can upload any types of file for example video file, mp3 file, .doc or .pdf just mention here in OR condition. 


if(move_uploaded_file ($file_path,'C:\Example'.$file_name))//"images" is just a folder name here we will load the file.
$query=mysqli_query($conn,"insert into fileup(image,title) values ('$file','$title')");//mysql command to insert file name with extension into the table. Use TEXT datatype for a particular column in table.
 
if($query==true)
{
    echo "File Uploaded";
}
}
?>