import './bootstrap';
import Swal from 'sweetalert2/dist/sweetalert2.js';

Swal.fire({
    title: 'Success',
    text: response.data.message, // Assuming the response contains the notification message
    icon: 'success',
    timer: 2000, // Duration to display the notification (in milliseconds)
});