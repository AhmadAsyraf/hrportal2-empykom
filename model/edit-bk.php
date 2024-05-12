<?php
// Include your database connection file
include('../dbconn.php');

// Check if bk_id is provided in the URL
if (isset($_GET['bk_id'])) {
    $bk_id = $_GET['bk_id'];

    // Fetch details of the bank with the given bk_id from the database
    $sql = "SELECT * FROM bank WHERE bk_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $bk_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $bank = $result->fetch_assoc();
    } else {
        // Handle case where no bank is found
        echo "Bank not found.";
        exit(); // Terminate the script execution
    }
} else {
    // Handle case where bk_id is not provided in the URL
    echo "Bank ID not provided.";
    exit(); // Terminate the script execution
}
?>

<?php
// Start the session
session_start();

// Check if ua_username session variable is set
if (isset($_SESSION["ua_username"])) {
    $ua_username = $_SESSION["ua_username"];
} else {
    // Handle case where session variable is not set (optional)
    $ua_username = "Guest"; // Set a default value or handle the error as needed
}
?>
<?php include('../admin/header.php') ?>
<?php include('../view/admin_nav.php') ?>
<?php include('../model/admin_menu.php') ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Bank</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Bank</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <!-- Start Bank Edit Form -->
    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Bank</h5>
                <form action="../control/edit-bk-process.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="staff_id">Admin ID:</label>
                        <input type="text" name="staff_id" class="form-control" value="<?php echo $bank['staff_id']; ?>" required>
                    </div><br>
                    <div class="form-group">
                        <label for="bk_title">Title:</label>
                        <input type="text" name="bk_title" class="form-control" value="<?php echo $bank['bk_title']; ?>" required>
                    </div><br>
                    <div class="form-group">
                        <label for="bk_category">Bank:</label>
                        <select name="bk_category" class="form-control" required>
                            <option value="">Select Bank</option>
                            <option value="Bank Rakyat" <?php if ($bank['bk_category'] == 'Bank Rakyat') echo 'selected'; ?>>Bank Rakyat</option>
                            <option value="Bank Islam" <?php if ($bank['bk_category'] == 'Bank Islam') echo 'selected'; ?>>Bank Islam</option>
                        </select>
                    </div><br>
                    <div class="form-group">
                        <label for="bk_doc">Uploaded Document:</label>
                        <span><?php echo $bank['bk_doc']; ?></span> <!-- Display file name here -->
                        <input type="file" name="bk_doc" multiple class="form-control"><br>
                    </div><br>
                    <div class="form-group">
                        <label for="bk_year">Year:</label>
                        <input type="text" name="bk_year" class="form-control" value="<?php echo $bank['bk_year']; ?>" required>
                    </div><br>
                    <!-- Hidden input field to send bk_id -->
                    <input type="hidden" name="bk_id" value="<?php echo $bk_id; ?>"> 
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section> 
    <!-- End Bank Edit Form -->

    <!-- Start Bank List -->
    <?php include('../view/disp_bank.php') ?>
    <!-- End Bank List -->

</main><!-- End #main -->
<?php include('admin_footer.php') ?>
