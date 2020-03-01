$( document ).ready(function() {
    function _x(STR_XPATH) {
    var xresult = document.evaluate(STR_XPATH, document, null, XPathResult.ANY_TYPE, null);
    var xnodes = [];
    var xres;
    while (xres = xresult.iterateNext()) {
        xnodes.push(xres);
    }
    return xnodes;
}
var obj = $(_x('//*[contains(text(), \"Apples\")]')).css({'color': 'red'});
console.log(obj[0]);
console.log(obj[0].innerText);
var obj = $(_x('//*[contains(text(), \"Avocados\")]')).css({'color': 'red'});
console.log(obj[0]);
console.log(obj[0].innerText);
var obj = $(_x('//*[contains(text(), \"Bananas\")]')).css({'color': 'red'});
console.log(obj[0]);
console.log(obj[0].innerText);
var obj = $(_x('//*[contains(text(), \"Dates\")]')).css({'color': 'red'});
console.log(obj[0]);
console.log(obj[0].innerText);
var obj = $(_x('//*[contains(text(), \"Grapes\")]')).css({'color': 'red'});
console.log(obj[0]);
console.log(obj[0].innerText);
});