import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();




// You can add JavaScript functionality as needed
// For example, form submission handling or dynamic content loading
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    // Add your form submission logic here
    // For example, sending the form data to a server
    alert('Form submitted!'); // Placeholder alert
});
