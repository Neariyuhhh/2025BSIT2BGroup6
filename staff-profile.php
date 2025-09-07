<?php
$pathToRoot = '../'; 

$pageTitle = "Staff Details";
$page_css = "assets/css/pages/profile-style.css"; 

require 'header.php';
require 'nav.php';

$staff = [
    [ 'id' => 1, 'name' => 'Byeon Woo Seok', 'role' => 'Clinic Manager', 'image' => 'stafficon.png', 'department' => 'Administration' ],
    [ 'id' => 2, 'name' => 'Radio Head', 'role' => 'Head Nurse', 'image' => 'stafficon.png', 'department' => 'Nursing' ],
    [ 'id' => 3, 'name' => 'Park Jin Young', 'role' => 'Receptionist', 'image' => 'stafficon.png', 'department' => 'Front Desk' ],
    [ 'id' => 4, 'name' => 'Camille Co', 'role' => 'Medical Assistant', 'image' => 'stafficon.png', 'department' => 'Clinical Support' ],
    [ 'id' => 5, 'name' => 'Shin Ryujin', 'role' => 'Receptionist', 'image' => 'stafficon.png', 'department' => 'Front Desk' ],
    [ 'id' => 6, 'name' => 'Min Gyu', 'role' => 'Medical Assistant', 'image' => 'stafficon.png', 'department' => 'Clinical Support' ]
];

$staffMember = null;
if (isset($_GET['id'])) {
    $staffId = $_GET['id'];
    foreach ($staff as $s) {
        if ($s['id'] == $staffId) {
            $staffMember = $s;
            break;
        }
    }
}
?>

<div class="profile-container">
    <?php if ($staffMember): ?>
        <img src="../assets/images/<?php echo htmlspecialchars($staffMember['image']); ?>" alt="Photo of <?php echo htmlspecialchars($staffMember['name']); ?>">
        <h1><?php echo htmlspecialchars($staffMember['name']); ?></h1>
        <p class="subtitle"><?php echo htmlspecialchars($staffMember['role']); ?></p>
        <div class="info-line">
            <span><strong>Department:</strong> <?php echo htmlspecialchars($staffMember['department']); ?></span>
        </div>
    <?php else: ?>
        <h1>Staff Member Not Found</h1>
        <p>Sorry, we couldn't find details for the requested staff member.</p>
    <?php endif; ?>
    <a href="doctorstaff-page.php" class="back-btn">← Back to List</a>
</div>

<?php
require 'footer.php';
?>