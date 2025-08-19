<?php
$doctors = [
    [
        'id' => 1,
        'name' => 'Dr. Carlo Potter Jr, MD',
        'specialty' => 'Cardiologist',
        'image' => 'doctormale.png',
        'location' => '1234 Oakwood Drive, Denver, CO 80202'
    ],
    [
        'id' => 2,
        'name' => 'Dr. Nayeon Batumbakal, MD',
        'specialty' => 'Family Doctor',
        'image' => 'doctorfemale.png',
        'location' => '4567 Maple Ridge Road, Suite 102, Asheville, NC 28801'
    ],
    [
        'id' => 3,
        'name' => 'Dr. Eren Yeager, MD',
        'specialty' => 'Internal Medicine',
        'image' => 'doctormale.png',
        'location' => '7890 Pine Street, Portland, OR 97204'
    ],
    [
        'id' => 4,
        'name' => 'Dr. Olivia Swift, MD',
        'specialty' => 'Dermatologist',
        'image' => 'doctorfemale.png',
        'location' => '321 Birch Avenue, Austin, TX 78701'
    ],
    [
        'id' => 5,
        'name' => 'Dr. Willie Revillame, MD',
        'specialty' => 'Pediatrician',
        'image' => 'doctormale.png',
        'location' => '654 Cedar Blvd, Miami, FL 33101'
    ],
    [
        'id' => 6,
        'name' => 'Dr. Sophia Laforteza, MD',
        'specialty' => 'Neurologist',
        'image' => 'doctorfemale.png',
        'location' => '987 Elm Court, Seattle, WA 98101'
    ],
    [
        'id' => 7,
        'name' => 'Dr. Jeon Taehyung, MD',
        'specialty' => 'Orthopedic Surgeon',
        'image' => 'doctormale.png',
        'location' => '1122 Spruce Lane, Chicago, IL 60601'
    ],
    [
        'id' => 8,
        'name' => 'Dr. Jennie Kim, MD',
        'specialty' => 'Ophthalmologist',
        'image' => 'doctorfemale.png',
        'location' => '3344 Willow Way, San Francisco, CA 94102'
    ]
];
?>

<div class="main">
    <div class="top-bar">
        <input class="search-bar" type="text" placeholder="Search Doctors" />
        <div class="welcome">
            <img src="images/devicon.png" alt="User Icon" class="welcome-icon">
            Welcome, Dev!
        </div>
    </div>
     <div class="dashboard-title">Doctors</div>

    <section class="doctors-list">

        <?php foreach ($doctors as $doctor): ?>
            <div class="doctor-card">
                <img src="images/<?php echo $doctor['image']; ?>" alt="Photo of <?php echo $doctor['name']; ?>">
                <div class="doctor-info">
                    <h3><?php echo $doctor['name']; ?></h3>
                    <p><?php echo $doctor['specialty']; ?></p>
                    <span class="review">⭐ Leave a Review</span>
                </div>
                <div class="doctor-actions">
                    <p>
                        <img src="images/location-icon.png" alt="Location Icon" class="location-icon">
                        <?php echo $doctor['location']; ?>
                    </p>
                    <a href="doctor-profile.php?id=<?php echo $doctor['id']; ?>">
                        <button class="btn">View Profile</button>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>

    </section>
</div>