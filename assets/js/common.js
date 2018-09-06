// common js
function alertifyMessage(type, message) {

    switch (type) {
        case 'error':
            alertify.notify(message, 'error', 5);
            break;
        case 'success':
            alertify.notify(message, 'success', 5);
            break;
        case 'warning':
            alertify.notify(message, 'warning', 5);
            break;
        case 'info':
            alertify.notify(message);
            break;
        default:
            alertify.notify(message);
    }

}
