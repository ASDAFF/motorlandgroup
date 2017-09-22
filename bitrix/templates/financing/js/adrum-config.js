
window['adrum-start-time'] = new Date().getTime();
(function(config){
    config.appKey = 'AD-AAB-AAC-SDF';
    config.adrumExtUrlHttp = 'http://cdn.appdynamics.com';
    config.adrumExtUrlHttps = 'https://cdn.appdynamics.com';
    config.beaconUrlHttp = 'http://col.eum-appdynamics.com';
    config.beaconUrlHttps = 'https://col.eum-appdynamics.com';
    config.xd = {enable : true};
})(window['adrum-config'] || (window['adrum-config'] = {}));
if ('https:' === document.location.protocol) {
    document.write(unescape('%3Cscript')
 + " src='/Static/scripts/rum/adrum/adrum.js' "
 + " type='text/javascript' charset='UTF-8'" 
 + unescape('%3E%3C/script%3E'));
} else {
    document.write(unescape('%3Cscript')
 + " src='/Static/scripts/rum/adrum/adrum.js' "
 + " type='text/javascript' charset='UTF-8'" 
 + unescape('%3E%3C/script%3E'));
}
