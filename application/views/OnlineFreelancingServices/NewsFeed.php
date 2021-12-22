<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 
if($this->session->userdata('UserLoginSession'))
{
    $udata = $this->session->userdata('UserLoginSession');
    echo 'Welcome'.' '.$udata['email'];
}
else
{
    redirect(base_url('index.php/Loginpage'));
}
?>

<body>

    <br><br><br>
    <div>
        <!-- for filtering category-->
        <!--Work:-->
        Type of Work:
        <select name="Work">
            <option value="null">----</option>
            <option value="Work1">Work1</option>
            <option value="Work2">Work2</option>
            <option value="Work3">Work3</option>
        </select><br><br>

        <!--Location:-->
        Location:<br>
        Province: <input type="text" name="province"><br>
        City: <input type="text" name="City"><br>
        <button name="category">Apply</button>
    </div>
    <br>
    ==========================================
    <br>
    <!--AddPost button display create post at line 23 event-->
    <button>Add Post</button><br>
    ==========================================
    <!--PopUp createPost-->
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            Create Post<br>
            <div>
                <!-- ajax to fetch work id upong line 37 event -->
                <select name="Work">
                    <option value="null">----</option>
                    <option value="null" >Select</option>
                    <option value="Work1">Carpenter</option>
                    <option value="Work2">Accountant</option>
                    <option value="Work3">Architect</option>
                    <option value="Work4">Cashier</option>
                    <option value="Work5">Web Developer</option>
                    <option value="Work6">Cleaner</option>
                    <option value="Work7">Data Encoder</option>
                    <option value="Work8">Electrician</option>
                    <option value="Work9">Engineer</option>
                    <option value="Work10">Teacher</option>
                </select>
                <button name="addWorkPost">+</button>
            </div>
            <textarea name="description"></textarea><br>
            <textarea name="location" value="<?php echo $ ?>"></textarea><br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>

    <br>
    ==========================================
    <br>
    <?php include("inc/postResult.php"); ?>
    <br>
    ====================================================================================================================================<br>
    >Find Worker button clicked<br>
    ====================================================================================================================================
    <br>
    <?php include("inc/workResult.php"); ?>
</body>
</html>