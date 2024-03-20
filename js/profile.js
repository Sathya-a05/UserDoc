document.addEventListener("DOMContentLoaded", function() {
    const profileForm = document.getElementById('profileForm');

    profileForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const fullName = document.getElementById('fullName').value;
        const age = document.getElementById('age').value;
        const dob = document.getElementById('dob').value;
        const contact = document.getElementById('contact').value;

        // Simple form validation
        if (fullName.trim() === '' || age.trim() === '' || dob.trim() === '' || contact.trim() === '') {
            alert('Please fill in all fields');
            return;
        }

        // Perform form submission to update user profile
        // Example:
        // You can use fetch or XMLHttpRequest to send data to the server
        fetch('update_profile.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                fullName: fullName,
                age: age,
                dob: dob,
                contact: contact
            }),
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            // Show success message or perform other actions
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    });
});
