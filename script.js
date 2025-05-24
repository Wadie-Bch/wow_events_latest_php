// Menu hamburger functionality
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

if (hamburger && navLinks) {
    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        hamburger.classList.toggle('active');
    });

    navLinks.addEventListener('click', (e) => {
        if (e.target.tagName === 'A') {
            navLinks.classList.remove('active');
            hamburger.classList.remove('active');
        }
    });

    document.addEventListener('click', (e) => {
        if (!hamburger.contains(e.target) && !navLinks.contains(e.target) && navLinks.classList.contains('active')) {
            navLinks.classList.remove('active');
            hamburger.classList.remove('active');
        }
    });
}

// Form handling
const bookingForm = document.getElementById('bookingForm');
// Form was previously handled here - now handled directly by HTML form submission

// Language switching
function switchLanguage(lang) {
    const langButtons = document.querySelectorAll('.lang-btn');
    langButtons.forEach(btn => {
        btn.classList.remove('active');
    });
    
    const activeButton = document.querySelector(`[data-lang="${lang}"]`);
    if (activeButton) {
        activeButton.classList.add('active');
    }
    
    document.querySelectorAll('[data-fr]').forEach(element => {
        if (lang === 'fr') {
            element.textContent = element.getAttribute('data-fr');
        } else if (lang === 'darija') {
            element.textContent = element.getAttribute('data-darija');
        }
    });
}

// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
            if (navLinks) {
                navLinks.classList.remove('active');
                hamburger.classList.remove('active');
            }
        }
    });
});

// Balloon Animation
class BalloonAnimation {
    constructor() {
        this.container = document.querySelector('.balloon-container');
        if (!this.container) {
            console.error('Balloon container not found');
            return;
        }
        this.colors = ['#FFD700', '#4ecdc4', '#ff6b6b', '#a8e6cf', '#ffd93d', '#ff9f43', '#ff6b6b'];
        this.balloonCount = 0;
        this.maxBalloons = 10;
        this.init();
    }

    init() {
        console.log('Initializing balloons...');
        // Initial balloon burst on page load
        setTimeout(() => {
            this.createInitialBalloons();
        }, 500);

        // Continue creating balloons periodically
        setInterval(() => {
            if (this.balloonCount < this.maxBalloons) {
                this.createBalloon();
            }
        }, 2000);
    }

    createInitialBalloons() {
        console.log('Creating initial balloons...');
        for (let i = 0; i < 8; i++) {
            setTimeout(() => {
                this.createBalloon(true);
            }, i * 200);
        }
    }

    createBalloon(isInitial = false) {
        if (!this.container) return;

        const balloon = document.createElement('div');
        balloon.className = 'balloon';
        
        // Random position, movement and rotation
        const startX = Math.random() * (window.innerWidth - 40);
        const moveX = (Math.random() - 0.5) * 300;
        const rotation = (Math.random() - 0.5) * 720;
        
        balloon.style.left = `${startX}px`;
        balloon.style.setProperty('--move-x', `${moveX}px`);
        balloon.style.setProperty('--rotation', `${rotation}deg`);
        balloon.style.backgroundColor = this.colors[Math.floor(Math.random() * this.colors.length)];

        if (isInitial) {
            const delay = Math.random() * 1000;
            balloon.style.animation = `float 15s linear infinite ${delay}ms, pop 0.3s ease-out ${1000 + delay}ms forwards`;
        } else {
            balloon.style.animation = 'float 15s linear infinite';
        }

        this.container.appendChild(balloon);
        this.balloonCount++;
        console.log('Balloon created, count:', this.balloonCount);

        // Add click event for popping
        balloon.addEventListener('click', () => this.popBalloon(balloon));

        // Remove balloon after animation
        balloon.addEventListener('animationend', (e) => {
            if (e.animationName === 'float' || e.animationName === 'pop') {
                balloon.remove();
                this.balloonCount--;
                console.log('Balloon removed, count:', this.balloonCount);
            }
        });
    }

    popBalloon(balloon) {
        balloon.classList.add('pop');
        this.createParticles(balloon);
    }

    createParticles(balloon) {
        if (!this.container) return;

        const rect = balloon.getBoundingClientRect();
        const color = window.getComputedStyle(balloon).backgroundColor;

        for (let i = 0; i < 10; i++) {
            const particle = document.createElement('div');
            particle.className = 'balloon-particle';
            particle.style.backgroundColor = color;
            particle.style.left = `${rect.left + rect.width / 2}px`;
            particle.style.top = `${rect.top + rect.height / 2}px`;

            const angle = (i / 10) * 360;
            const velocity = 150;
            const rad = angle * Math.PI / 180;
            const x = Math.cos(rad) * velocity;
            const y = Math.sin(rad) * velocity;

            particle.style.setProperty('--x', `${x}px`);
            particle.style.setProperty('--y', `${y}px`);
            particle.style.animation = 'particle 0.8s ease-out forwards';

            this.container.appendChild(particle);
            setTimeout(() => particle.remove(), 800);
        }
    }
}

// Initialize balloon animation when the page is fully loaded
window.addEventListener('load', () => {
    console.log('Page loaded, starting balloon animation...');
    new BalloonAnimation();
});

// AOS initialization
AOS.init({
    duration: 1000,
    once: true
});

// Toast notification function
function showToast(message, isError = false) {
    const toast = document.createElement('div');
    toast.className = `toast ${isError ? 'toast-error' : 'toast-success'}`;
    toast.textContent = message;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.classList.add('show');
    }, 10);
    
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => {
            toast.remove();
        }, 300);
    }, 5000);
}

// Check for success parameter in URL
console.log('Current URL:', window.location.href);

// Execute immediately and also on DOMContentLoaded
function checkSuccessParam() {
    console.log('Checking for success parameter');
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('success')) {
        console.log('Success parameter found, showing toast');
        showToast('Merci pour votre message! Nous vous contacterons bientôt.');
        history.replaceState(null, null, window.location.pathname + window.location.hash);
    }
}

// Check immediately
checkSuccessParam();

// Also check on DOMContentLoaded
window.addEventListener('DOMContentLoaded', checkSuccessParam);

// Check on load as well (backup)
window.addEventListener('load', checkSuccessParam);
