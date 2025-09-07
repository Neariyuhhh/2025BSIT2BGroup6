<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Page</title>
    <link rel="stylesheet" href="style.css"> </head>
<body>

    <div class="main">
        <div class="top-bar">
            <input class="search-bar" type="text" placeholder="Search" />
            <div class="welcome">
                <img src="images/devicon.png" alt="User Icon" class="welcome-icon">
                Welcome, Dev!
            </div>
        </div>

        <hr class="section-divider" />

        <div class="patient-info">
            <h2 class="patient-title">Patient Information</h2>
            
            <div class="patient-profile-content">
                <img src="images/devicon.png" alt="Patient" class="profile-img">
                <div class="patient-card">
                    <div class="info-columns">
                        <div class="left">
                            <span>Name: Gian Marie</span>
                            <span>Age: 65</span>
                            <span>Gender: Male</span>
                        </div>
                        <div class="right">
                            <span>Address: 123 Mabuhay St., Brgy. Malinis, San Isidro, Laguna</span>
                            <span>Contact: +63 917 234 5678</span>
                            <span>Status: Stable</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="medical-history">
            <h2 class="medical-title">Medical History</h2>
            <div class="history-columns">
                <div class="left">
                    <p class="unknown-date">Date Unknown</p>
                    <p class="unknown-date">Date Unknown</p>
                    <p class="unknown-date">Date Unknown</p>
                    <p class="unknown-date">Date Unknown</p>
                </div>
                <div class="right">
                    <p>Atrial Fibrillation (CMS/HCC)</p>
                    <p>Esophageal Reflux Disease</p>
                    <p>Essential Hypertension</p>
                    <p>Hyperglycemia</p>
                </div>
            </div>
        </div>

        <hr class="section-divider" />

        <div class="date-picker">
            <label for="date">Choose a date: </label>
            <input type="date" id="date" onchange="updateData()">
        </div>

        <div class="stats-cards">
            <div class="card">
                <img src="images/hospital.png" alt="Icon">
                <h4>Patients in Hospital</h4>
                <div class="number" id="patients">--</div>
                <p class="last updated" id="patients-date">Select a date to see data</p>
            </div>
            <div class="card">
                <img src="images/ambulance.png" alt="Icon">
                <h4>Sent from Rural Health Units</h4>
                <div class="number" id="rural">--</div>
                <p class="last updated" id="rural-date">Select a date to see data</p>
            </div>
        </div>
    </div> 

</body>
</html>