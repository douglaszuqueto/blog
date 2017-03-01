// importScripts("https://js.pusher.com/4.0/pusher.worker.min.js");
//
// var pusher = new Pusher('a40d6974ca933a602c50', {
//     encrypted: false
// });
//
// var channel = pusher.subscribe('articles');
//
//
// channel.bind('new-article', function (data) {
//     let message = JSON.parse(JSON.stringify(data));
//     let options = {
//         icon: 'https://blog.dev/images/logo_2.png',
//     };
//     console.log(message);
//     // var notification = new Notification(message.title, options);
//     //
//     // notification.onclick = function (event) {
//     //   event.preventDefault();
//     //   window.open(message.url, '_blank');
//     // }
//     registration.showNotification(message.title, {
//         icon: options.icon,
//     });
// });
