import './bootstrap';
import 'toastr/build/toastr.min.css'; // ✅ Add this line
import toastr from 'toastr';

toastr.options = {
    closeButton: true,
    progressBar: true,
    positionClass: "toast-top-right",
    timeOut: "5000"
};

window.Echo.channel('my-channel')
    .listen('.my-event', (e) => {
        console.log('Broadcast received!', e);
        toastr.success('A new task has been created!', 'Task Notification');
    });
