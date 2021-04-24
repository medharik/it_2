
var x = 100;
function h(b = true) {
    if (b) {
        let x = 8
        console.log('interne', x)
    }
    console.log('externe1', x)

}
console.log('externe2', x)
// h()
h(false)
console.log(window.x)