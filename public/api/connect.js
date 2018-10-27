

var careerjet = require('careerjet');
 
const careerjetAPI = new careerjet('en_CA', 'youraffidkey');
 
careerjetAPI
    .location('London')
    .keywords('developer')
    .query(
        function (results) {
            // do something with the success results
            console.log(results);
        },
        function (error) {
            // do something with the error results
            console.error(error);
      });