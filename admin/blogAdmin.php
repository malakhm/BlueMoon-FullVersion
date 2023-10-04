<?php
require_once 'connection.php';
$nid = $_GET['news_id'];

$query = "Select * from news where news_id='$nid'";
$result = mysqli_query($con, $query);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    ?>
    <form method="post" action="blogAdmin2.php" enctype="multipart/form-data">
        <table border="border" style="margin: 0 auto">
            <tr>
                <th>News ID</th>
                <td>
                    <input type="text" name="news_id" size="30" value="<?php echo $row['news_id']; ?>" readonly/> 
                </td>
            </tr>
            <tr>
                <th>Title</th>
                <td>
                    <input type="text" name="title" size="30" value="<?php echo $row['title']; ?>"/> 
                </td>
            </tr>
            <tr>
                <th>Content</th>
                <td>
                    <input type="text" name="content" size="30" value="<?php echo $row['content']; ?>"/> 
                </td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>
                    <input type="file" name="photo" required/> 
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Update"/></td>
            </tr>

        </table>
    </form>
    <?php
}


