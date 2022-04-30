var pessoas = {fname:"John", lname:"Doe", age:25};

var text = "";
for (var x in pessoas) {
    console.log(`Valor do x ==> ${x}`)
    text += pessoas[x];
    console.log(text)
}


