var server = require('http').Server();
server.listen(3000);

var io = require('socket.io')(server);

var Redis = require('ioredis');
var redis = new Redis();

redis.subscribe('test-channel');

redis.on('message', function (request, response) {
    var message = JSON.parse(response);

    io.emit(request + ':' + message.event, message.data); // test-channel:UserActiveEvent

    console.log('user');
    console.log(message.data.user_name);
    console.log('------------------------------');

    console.log('event');
    console.log(message.event);
    console.log('==============================');
});