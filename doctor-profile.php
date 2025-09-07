<?php
$pathToRoot = '../'; 

$pageTitle = "Doctor Profile";
$page_css = "assets/css/pages/profile.css";

require 'header.php';
require 'nav.php';

$doctors = [
    [ 'id' => 1, 'name' => 'Dr. Carlo Potter Jr, MD', 'specialty' => 'Cardiologist', 'image' => 'doctormale.png', 'location' => '1234 Oakwood Drive, Denver, CO 80202' ],
];

$doctor = null;
if (isset($_GET['id'])) {
    $doctorId = $_GET['id'];
    foreach ($doctors as $d) {
        if ($d['id'] == $doctorId) {
            $doctor = $d;
            break;
        }
    }
}
?>

<div class="profile-container">
    <?php if ($doctor): ?>
        <img src="<?php echo $pathToRoot; ?>assets/images/<?php echo htmlspecialchars($doctor['image']); ?>" alt="Photo of <?php echo htmlspecialchars($doctor['name']); ?>">
        <h1><?php echo htmlspecialchars($doctor['name']); ?></h1>
        <p class="subtitle"><?php echo htmlspecialchars($doctor['specialty']); ?></p>
        <div class="info-line">
            <img src="<?php echo $pathToRoot; ?>assets/images/location-icon.png" class="icon">
            <span><?php echo htmlspecialchars($doctor['location']); ?></span>
        </div>
    <?php else: ?>
        <h1>Doctor Not Found</h1>
    <?php endif; ?>
    <a href="<?php echo $pathToRoot; ?>doctorstaff-page.php" class="back-btn">← Back to List</a>
</div>

<?php
require 'footer.php';
?>