let botonAtras = document.querySelector("#atras")
let botonDelante = document.querySelector("#adelante")
let cubo = document.querySelector("#cubo")

let cuboClases = ["cubo0", "cubo90", "cubo180", "cubo270",]

botonAtras.addEventListener("click", () => {
    let clasesActual = Array.from(cubo.classList)

    let index = cuboClases.indexOf(clasesActual[1])

    cubo.className = clasesActual[0] + " " + cuboClases[(4+(index-1))%4]
})

botonDelante.addEventListener("click", () => {
    let clasesActual = Array.from(cubo.classList)

    let index = cuboClases.indexOf(clasesActual[1])

    cubo.className = clasesActual[0] + " " + cuboClases[(4+(index+1))%4]
})