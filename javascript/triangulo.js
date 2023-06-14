lado1 = (prompt("Ingresa la longitud del primer lado:"));
 lado2 = (prompt("Ingresa la longitud del segundo lado:"));
 lado3 = (prompt("Ingresa la longitud del tercer lado:"));

if (lado1 + lado2 > lado3 && lado1 + lado3 > lado2 && lado2 + lado3 > lado1) {
  if (lado1 === lado2 && lado2 === lado3) {
    
    document.write("El triángulo es equilátero.");
  } else if (lado1 === lado2 || lado1 === lado3 || lado2 === lado3) {
    
    document.write("El triángulo es isósceles.");
  } else {
   document.write("El triángulo es escaleno.");
  }
} else {
  codocument.write("Los lados ingresados no forman un triángulo válido.");
}
