// Side Popup Functionality
const popup = document.getElementById('service-popup');
const popupBody = document.getElementById('popup-body');

const serviceData = {
    'Insta Help': {
        title: 'Insta Help',
        description: 'Instant assistance for urgent home needs. Available 24/7.',
        image: 'https://images.unsplash.com/photo-1581578731117-104f2a417954?auto=format&fit=crop&w=600&q=80'
    },
    'Salon': {
        title: 'Women\'s Salon & Spa',
        description: 'Professional beauty services at your home.',
        image: 'https://images.unsplash.com/photo-1560750588-73207b1ef5b8?auto=format&fit=crop&w=600&q=80'
    },
    'Mens Salon': {
        title: 'Men\'s Salon & Massage',
        description: 'Expert grooming and relaxation services.',
        image: 'https://images.unsplash.com/photo-1544161515-4ab6ce6db874?auto=format&fit=crop&w=600&q=80'
    },
    'Cleaning': {
        title: 'Cleaning & Pest Control',
        description: 'Deep cleaning and effective pest management.',
        image: 'https://img.freepik.com/premium-photo/classic-luxury-living-room-interior-with-sofa-plants_1090394-26592.jpg'
    },
    'Electrician': {
        title: 'Repair & Installation',
        description: 'Expert electricians, plumbers, and carpenters.',
        image: 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=600&q=80'
    },
    'Water Purifier': {
        title: 'Native Water Purifier',
        description: 'Quality filtration for healthy living.',
        image: 'https://images.unsplash.com/photo-1588854337221-4cf9fa96059c?auto=format&fit=crop&w=600&q=80'
    },
    'Painting': {
        title: 'Professional Painting',
        description: 'Transform your space with vibrant colors.',
        image: 'https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&w=600&q=80'
    },
    'AC Repair': {
        title: 'AC & Appliance Repair',
        description: 'Maintain your appliances with expert care.',
        image: 'https://images.unsplash.com/photo-1581092921461-eab62e97a783?auto=format&fit=crop&w=600&q=80'
    },
    'Revamp': {
        title: 'Wall makeover by Revamp',
        description: 'Stunning wall redesigns and finishes.',
        image: 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=600&q=80'
    }
};

function openPopup(serviceName) {
    const data = serviceData[serviceName];
    if (!data) return;
    
    popupBody.innerHTML = `
        <img src="${data.image}" alt="${data.title}" style="width: 100%; border-radius: 10px; margin-bottom: 25px;">
        <h2 style="margin-bottom: 20px; font-family: 'Playfair Display', serif;">${data.title}</h2>
        <p style="color: #666; margin-bottom: 30px;">${data.description}</p>
        <a href="https://wa.me/yournumber" class="btn-primary" style="display: block; text-align: center;">Book Consultation</a>
    `;
    
    popup.classList.add('open');
    document.body.style.overflow = 'hidden'; // Prevent scrolling
}

function closePopup() {
    popup.classList.remove('open');
    document.body.style.overflow = 'auto'; // Re-enable scrolling
}

// Mobile Menu Toggle (Architect Hero)
function initMobileMenu() {
    const trigger = document.querySelector('.menu-trigger');
    const navLinks = document.querySelector('.v-nav-links');
    
    if (trigger && navLinks) {
        trigger.addEventListener('click', () => {
            navLinks.classList.toggle('mobile-open');
            
            // Toggle Icon
            const icon = trigger.querySelector('i');
            if(icon.classList.contains('fa-bars')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }
}

// Video Hover Auto-Play
function initVideoHover() {
    const videoItems = document.querySelectorAll('.video-item');
    
    videoItems.forEach(item => {
        const img = item.querySelector('img');
        
        // Create video element dynamically
        const video = document.createElement('video');
        video.muted = true;
        video.loop = true;
        video.playsInline = true;
        
        // Use a sample video URL - replace with actual video URLs
        video.src = 'https://www.w3schools.com/html/mov_bbb.mp4';
        
        // Add video to the item
        item.appendChild(video);
        
        // Hover to play
        item.addEventListener('mouseenter', () => {
            video.play().catch(err => console.log('Video play failed:', err));
        });
        
        // Leave to pause and reset
        item.addEventListener('mouseleave', () => {
            video.pause();
            video.currentTime = 0;
        });
    });
}

// Initialize everything on DOM Load
document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
    initVideoHover();
});

