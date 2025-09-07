<?php
$pathToRoot = '';

$doctors = [
    [ 'id' => 1, 'name' => 'Dr. Carlo Potter Jr, MD', 'specialty' => 'Cardiologist', 'image' => 'doctormale.png', 'is_active' => true],
    [ 'id' => 2, 'name' => 'Dr. Nayeon Batumbakal, MD', 'specialty' => 'Family Doctor', 'image' => 'doctorfemale.png', 'is_active' => false],
    [ 'id' => 3, 'name' => 'Dr. Eren Yeager, MD', 'specialty' => 'Internal Medicine', 'image' => 'doctormale.png', 'is_active' => true],
    [ 'id' => 4, 'name' => 'Dr. Olivia Swift, MD', 'specialty' => 'Dermatologist', 'image' => 'doctorfemale.png', 'is_active' => true],
    [ 'id' => 5, 'name' => 'Dr. Willie Revillame, MD', 'specialty' => 'Pediatrician', 'image' => 'doctormale.png', 'is_active' => false],
    [ 'id' => 6, 'name' => 'Dr. Sophia Laforteza, MD', 'specialty' => 'Neurologist', 'image' => 'doctorfemale.png', 'is_active' => false],
    [ 'id' => 7, 'name' => 'Dr. Jeon Taehyung, MD', 'specialty' => 'Orthopedic Surgeon', 'image' => 'doctormale.png', 'is_active' => true],
    [ 'id' => 8, 'name' => 'Dr. Jennie Kim, MD', 'specialty' => 'Ophthalmologist', 'image' => 'doctorfemale.png', 'is_active' => true]
];
?>
<div class="chat-container">
    <div class="doctor-sidebar">
        <div class="sidebar-header">
            <h2>Doctors</h2>
        </div>
        <div class="doctor-list">
            <?php foreach ($doctors as $index => $doctor): ?>
                <div class="doctor-contact <?php if ($index == 0) echo 'active'; ?>">
                    <div class="profile-pic-container">
                        <img src="<?php echo $pathToRoot; ?>images/<?php echo htmlspecialchars($doctor['image']); ?>" alt="Photo of <?php echo htmlspecialchars($doctor['name']); ?>">
                        <?php if ($doctor['is_active']): ?>
                            <span class="active-dot"></span>
                        <?php endif; ?>
                    </div>
                    <div class="contact-info">
                        <h4><?php echo htmlspecialchars($doctor['name']); ?></h4>
                        <p><?php echo htmlspecialchars($doctor['specialty']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="chat-area">
        <div class="chat-header">
            <button class="back-button">←</button>
            <img src="<?php echo $pathToRoot; ?>images/doctormale.png" alt="Doctor Icon">
            <h3>Dr. Carlo Potter Jr, MD</h3>
        </div>
        <div class="chat-messages">
            <div class="message received">
                Hello! How can I help you today?
            </div>
            <div class="message sent">
                Hi Doctor, I've been experiencing some headaches for the past few days.
            </div>
            <div class="message received">
                I see. Can you describe the pain? Is it a dull ache or a sharp pain?
            </div>
            <div class="message sent">
                It's more of a dull, constant ache behind my eyes.
            </div>
        </div>
        <div class="chat-input">
            <input type="text" placeholder="Type a message...">
            <button>Send</button>
        </div>
    </div>
</div>

</div> </div> <script src="<?php echo $pathToRoot; ?>assets/js/script.js"></script>
</body>
</html>