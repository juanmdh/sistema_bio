// let variable1=20;
// let variable2=10;

// let variable1=parseInt(prompt("Ingrese el primer Numero"));
// let variable2=parseInt(prompt("Ingrese el segundo Numero"));

// let suma= variable1 + variable2;

// let resta=variable1-variable2;

// let multiplicacion=variable1*variable2;

// let division=variable1/variable2;

// document.write('<div class="container">'+ '<p> Suma:'+suma+'</p>'+'<p>Resta:'+resta+'</p>'+'<p>Multiplicación:'+multiplicacion+'</p>'+'<p>División:'+division+'</p>'+'</div>');

function recibirValorInput() {
  let numero1 = parseInt(document.getElementById("numero1").value);
  let numero2 = parseInt(document.getElementById("numero2").value);

  if (numero1 >= numero2) {
    let suma = numero1 + numero2;
    let resta = numero1 - numero2;
    let multiplicacion = numero1 * numero2;
    let division = numero1 / numero2;
    alert("El valor de la suma es: " + suma);
    alert("El valor del a resta es: " + resta);
    alert("El valor de la multiplicacion es: " + multiplicacion);
    alert("El valor de la division es: " + division);
    document.write(
      '<div class="container">' +
        "<p> Suma:" +
        suma +
        "</p>" +
        "<p>Resta:" +
        resta +
        "</p>" +
        "<p>Multiplicación:" +
        multiplicacion +
        "</p>" +
        "<p>División:" +
        division +
        "</p>" +
        "</div>"
    );
  } else {
    Swal.fire({
      icon: "error",
      title: "EROR...",
      text: "El primer número tiene que ser mayor al segundo número",
    });
  }
}

function openSweet() {
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire("Deleted!", "Your file has been deleted.", "success").then(
        (resultado) => {
          if (resultado.isConfirmed) {
            Swal.fire({
              title: "Sweet!",
              text: "Modal with a custom image.",
              imageUrl: "https://unsplash.it/400/200",
              imageWidth: 400,
              imageHeight: 200,
              imageAlt: "Custom image",
            });
          }
        }
      );
    }
  });
}


function pdf(){
  const element = document.getElementById("btnCrearPdf");      
    html2pdf()
    .set({
      margin:3,
      filename:'documento.pdf',
      image:{
        type:'jpeg',
        quality: 0.98        
      },
      html2canvas:{
        scale:5,
        letterRendering:true,
        
      },
      jsDPF:{
        unit: "in",
        format: "a3",
        orientation: "portrait"
      }
    })
    .from(element)
    .save()
    .catch(err=>console.log(err));
  
}
