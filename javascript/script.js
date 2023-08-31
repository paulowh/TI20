var numero1 = 100
var numero2 = 50
var nome = "Paulo"

// if (numero1 > numero2) {
//     document.getElementById('resposta').innerHTML = '<h1>Sim o numero é MAIOR</h1>'
//     console.log("Sim o numero " + numero1 + " é MAIOR que o numero " + numero2)
// } else if (numero1 == numero2) {
//     console.log("Os numeros são iguais !!!")
// } else {
//     console.log("Não, o numero não é MAIOR")
// }

function Comparar() {
    var num1 = document.getElementById('numero1').value
    var num2 = document.getElementById('numero2').value

    console.log(num1)
    console.log(num2)

    if ( parseInt(num1) > parseInt(num2)){
        console.log("O numero: " + num1 + " é maior que o numero " + num2)
        alert("O numero: " + num1 + " é maior que o numero " + num2)
    } else if (parseInt(num1) == parseInt(num2) ){
        alert("os dois numeros são IGUAIS")
    } else {
        alert("O numero: " + num2 + " é maior que o numero " + num1)
    }


} 