// desiging sms sending code with api?

const Nexmo = require('nexmo')

const nexmo = new Nexmo({
    apiKey: '*****',
    apiSecret: '*****',
});
var to = 'numberTo';
var from = 'brandName';
var text = 'someText';
nexmo.message.sendSms(from, to, text);


