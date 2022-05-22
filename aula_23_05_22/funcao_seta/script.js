//Arrow function
/* (a,b) => {
    return a + b
}

(a, b) => a + b */

// let a = 5
// let b = 10

// let c = (a, b) => a + b

// console.log(c(a,b))

// let d = (x,y)=>{
//     if(x>5){
//         op = x * y
//     }else{
//         op = x / y
//     }
//     return op
// }

// console.log(d(a,b))

// let frase = 'O Prof Anderson é um ótimo dev'
// let frase_array = (frase) => frase.split(' ')
// console.log(frase_array(frase))

// //Casos de uso
// let roupas = [
//     {produto: 'Camisa', preco: 25, cor: 'Amarelo'},
//     {produto: 'Calça', preco: 80, cor: 'Azul'},
//     {produto: 'Jaqueta', preco: 100, cor: 'Preto'},
//     {produto: 'Camiseta', preco: 15, cor: 'Rosa'},
//     {produto: 'Calção', preco: 20, cor: 'Azul'},
// ]

// let precoMaiorQue50 = roupas.filter((roupa)=>{
//     return roupa.preco >= 50
// })

// console.log(precoMaiorQue50)

// setTimeout(()=>{
//     console.log("Deu tempo!")
// }, 5000) 

//Alterando uma classe com arrow function
let btn = document.getElementById('btn')
console.log(btn)

btn.addEventListener('click', function(){
    this.classList.toggle('classe_nova')
})