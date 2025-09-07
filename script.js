document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const navbar = document.querySelector('.navbar');

    if (menuToggle && navbar) {
        menuToggle.addEventListener('click', function() {
            navbar.classList.toggle('is-open');
        });

        document.addEventListener('click', function(event) {
            const isClickInsideNavbar = navbar.contains(event.target);
            const isClickOnToggle = menuToggle.contains(event.target);

            if (!isClickInsideNavbar && !isClickOnToggle) {
                navbar.classList.remove('is-open');
            }
        });
    }
});

let slideIndex = 1;
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");
let autoSlideInterval;

function resetAutoSlideTimer() {
    clearInterval(autoSlideInterval);
    autoSlideInterval = setInterval(() => plusSlides(1), 3000);
}

function plusSlides(n) {
    showSlides(slideIndex += n);
    resetAutoSlideTimer();
}

function currentSlide(n) {
    showSlides(slideIndex = n);
    resetAutoSlideTimer();
}

function showSlides(n) {
    if (slides.length === 0) return;
    if (n > slides.length) { 
        slideIndex = 1; 
    }
    if (n < 1) { 
        slideIndex = slides.length; 
    }

    slides.forEach(slide => slide.style.display = "none");
    dots.forEach(dot => dot.classList.remove("active"));

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].classList.add("active");
}

const prevButton = document.querySelector(".prev");
const nextButton = document.querySelector(".next");

if (prevButton) {
    prevButton.addEventListener("click", () => plusSlides(-1));
}
if (nextButton) {
    nextButton.addEventListener("click", () => plusSlides(1));
}
if (dots.length > 0) {
    dots.forEach((dot, idx) => {
        dot.addEventListener("click", () => currentSlide(idx + 1));
    });
}

const logoutButton = document.getElementById('logout-button');
if (logoutButton) {
    logoutButton.addEventListener('click', function() {
        window.location.href = 'login.html';
    });
}

function openTab(evt, tabName) {
    const tabcontent = document.getElementsByClassName("tab-content");
    for (let i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    const tablinks = document.getElementsByClassName("tab-link");
    for (let i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.classList.add("active");
}

if (slides.length > 0) {
    showSlides(slideIndex);
    resetAutoSlideTimer();
}

const patientData = {
    "2025-01-24": { hospital: 27, rural: 12 },
    "2025-04-25": { hospital: 32, rural: 18 },
    "2025-09-14": { hospital: 40, rural: 20 },
    "2025-11-10": { hospital: 24, rural: 16 }
};

function updateData() {
    const selectedDate = document.getElementById("date").value; 
    const patientsEl = document.getElementById("patients");
    const ruralEl = document.getElementById("rural");
    const patientsDateEl = document.getElementById("patients-date");
    const ruralDateEl = document.getElementById("rural-date");

    if (patientData[selectedDate]) {
        const data = patientData[selectedDate];
        patientsEl.textContent = data.hospital;
        ruralEl.textContent = data.rural;
        patientsDateEl.textContent = `Last Updated on: ${selectedDate}`;
        ruralDateEl.textContent = `Last Updated on: ${selectedDate}`;
    } else {
        patientsEl.textContent = "--";
        ruralEl.textContent = "--";
        patientsDateEl.textContent = "No data available for this date";
        ruralDateEl.textContent = "No data available for this date";
    }
}

const dateInput = document.getElementById('date');
if (dateInput) {
    dateInput.addEventListener('change', updateData);
    updateData();
}

document.addEventListener('DOMContentLoaded', function() {
    const chatContainer = document.querySelector('.chat-container');
    const doctorContacts = document.querySelectorAll('.doctor-contact');
    const backButton = document.querySelector('.chat-header .back-button');

    if (chatContainer) {
        doctorContacts.forEach(contact => {
            contact.addEventListener('click', () => {
                chatContainer.classList.add('show-chat-area');
            });
        });

        if (backButton) {
            backButton.addEventListener('click', () => {
                chatContainer.classList.remove('show-chat-area');
            });
        }
    }
});



document.addEventListener('DOMContentLoaded', function() {
    // Find elements needed for the chat page
    const chatContainer = document.querySelector('.chat-container');
    const doctorContacts = document.querySelectorAll('.doctor-contact');
    const backButton = document.querySelector('.chat-header .back-button');
    const chatHeaderImage = document.getElementById('chat-header-image');
    const chatHeaderName = document.getElementById('chat-header-name');
    const chatMessages = document.getElementById('chat-messages');
    
    // IMPORTANT: Only run chat code if we are on the chat page
    // We check if the main chat container and other elements exist.
    if (chatContainer && chatHeaderImage && chatHeaderName && chatMessages) {

        doctorContacts.forEach(contact => {
            contact.addEventListener('click', () => {
                // Manage the active state visual
                doctorContacts.forEach(c => c.classList.remove('active'));
                contact.classList.add('active');

                // Get doctor info from the HTML data attributes
                const doctorName = contact.dataset.name;
                const doctorImage = contact.dataset.image;
                const pathToRoot = document.body.dataset.pathtoroot || '';

                // Update the chat header
                chatHeaderName.textContent = doctorName;
                chatHeaderImage.src = `${pathToRoot}assets/images/${doctorImage}`;
                
                // Update the chat messages area
                chatMessages.innerHTML = ''; // Clear previous messages
                const welcomeMessage = document.createElement('div');
                welcomeMessage.classList.add('message', 'received');
                welcomeMessage.textContent = `Hello! I'm ${doctorName}. How can I assist you today?`;
                chatMessages.appendChild(welcomeMessage);

                // Handle mobile view slide
                if (window.innerWidth <= 768) {
                    chatContainer.classList.add('show-chat-area');
                }
            });
        });

        // Handle the back button on mobile
        if (backButton) {
            backButton.addEventListener('click', () => {
                chatContainer.classList.remove('show-chat-area');
            });
        }
    }
});