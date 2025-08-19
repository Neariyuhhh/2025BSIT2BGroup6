<?php
$patient = [
    'name' => 'Gian Marie',
    'age' => 65,
    'gender' => 'Male',
    'address' => '123 Mabuhay St., Brgy. Malinis, San Isidro, Laguna',
    'contact' => '+63 917 234 5678',
    'status' => 'Stable',
    'profile_image' => 'man.png',
    'medical_history' => [
        ['date' => 'Date Unknown', 'condition' => 'Atrial Fibrillation (CMS/HCC)'],
        ['date' => 'Date Unknown', 'condition' => 'Esophageal Reflux Disease'],
        ['date' => 'Date Unknown', 'condition' => 'Essential Hypertension'],
        ['date' => 'Date Unknown', 'condition' => 'Hyperglycemia'],
    ]
];
?>

<div class="main">

    <div class="top-bar">
        <input class="search-bar" type="text" placeholder="Search" />
        <div class="welcome">
            <img src="images/devicon.png" alt="User Icon" class="welcome-icon">
            Welcome, Dev!
        </div>
    </div>

    <div class="dashboard-title">Staff</div>
    <hr class="section-divider" />

    <div class="patient-info">
        <h2 class="patient-title">Patient Information</h2>
        <img src="images/<?php echo $patient['profile_image']; ?>" alt="Patient" class="profile-img">
        <div class="patient-card">
            <div class="info-columns">
                <div class="left">
                    <span>Name: <?php echo $patient['name']; ?></span>
                    <span>Age: <?php echo $patient['age']; ?></span>
                    <span>Gender: <?php echo $patient['gender']; ?></span>
                </div>
                <div class="right">
                    <span>Address: <?php echo $patient['address']; ?></span>
                    <span>Contact: <?php echo $patient['contact']; ?></span>
                    <span>Status: <?php echo $patient['status']; ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="medical-history">
        <h2 class="medical-title">Medical History</h2>
        <div class="history-columns">
            <div class="left">
                <?php foreach ($patient['medical_history'] as $history_item): ?>
                    <p class="unknown-date"><?php echo $history_item['date']; ?></p>
                <?php endforeach; ?>
            </div>
            <div class="right">
                <?php foreach ($patient['medical_history'] as $history_item): ?>
                    <p><?php echo $history_item['condition']; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <hr class="section-divider" />

    <div class="stats-cards">
        <div class="card">
            <img src="images/hospital.png" alt="Icon">
            <h4>Patients in Hospital</h4>
            <div class="number">45</div>
        </div>
        <div class="card">
            <img src="images/ambulance.png" alt="Icon">
            <h4>Sent from Rural Health Units</h4>
            <div class="number">16</div>
        </div>
    </div>
</div>