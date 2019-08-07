

.fetch("https://apis.datos.gob.ar/georef/api", {
  method: 'POST',
 credentials: "same-origin",
 headers: {
       "Content-Type": "application/json",
       "Accept": "application/json",
       "X-Requested-With": "XMLHttpRequest",
       "X-CSRF-Token": document.querySelector('select[name="_token"]').value
     },
 body: formulario
 })
.then(response => response.json())
.then(data=> {
  console.log(data)
})
.catch(err->console.log(err))




//window.onload

  // var productId = img.parentElement.querySelector("input[name=id]").value;
  // var userId= img.parentElement.querySelector("input[name=user_id]").value;
  // var quantity= img.parentElement.querySelector("input[name=quantity]").value;
  // var name = img.parentElement.querySelector("input[name=name]").value;
  // var description= img.parentElement.querySelector("input[name=description]").value;
  // var price= img.parentElement.querySelector("input[name=price]").value;
  //
  //
  // var campos = {
  //   id: productId,
  //   user_id:userId,
  //   quantity: quantity,
  //   name: name,
  //   description: description,
  //   price: price,
  // }
  //
  // var formulario= new FormData();
  // formulario.append('datos', JSON.stringify(campos));
  // fetch("http://127.0.0.1:8000/addtocart", {
  // method: 'POST',
  // credentials: "same-origin",
  // headers: {
  //       "Content-Type": "application/json",
  //       "Accept": "application/json",
  //       "X-Requested-With": "XMLHttpRequest",
  //       "X-CSRF-Token": document.querySelector('input[name="_token"]').value
  //     },
  // body: formulario
  // })
  // .then(function(response){
  //   return response.json();
  // })
  // .then(function(data){
  //   console.log(data);
  // })
  // .catch(function(error){
  //   console.log(error);
  // })
