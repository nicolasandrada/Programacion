<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">¿Como se llama?</th>
            <th scope="col">¿Como se ve?</th>
            <th scope="col">¿Para que se usa?</th>
            <th scope="col">¿Como se codifica?</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>textbox o campo de texto</td>
                <td><input type="text" name="" id=""></td>
                <td>Introdicir texto de una linea</td>
                <td><code> < input type="text" name="" id=""></code></td>
            </tr>
            <tr>
                <td>Campo para contraseña</td>
                <td><input type="password" name="" id=""></td>
                <td>Introdicir texto oculto con * </td>
                <td><code> < input type="password" name="" id=""></code></td>
            </tr>
            <tr>
                <td>Campo para Numero</td>
                <td><input type="number" name="" id=""></td>
                <td>Introdicir solamente numeros</td>
                <td><code> < input type="number" name="" id=""></code></td>
            </tr>
            <tr>
                <td>Campo oculto </td>
                <td><input type="hidden" name="" id=""></td>
                <td>Introdicir informacion que el usuario no puede ver</td>
                <td><code> < input type="hidden" name="" id=""></code></td>
            </tr> 
            <tr>
                <td>Campo psdsaara fecha</td>
                <td><input type="date" name="" id=""></td>
                <td>Introdicir una fecha</td>
                <td><code> < input type="date" name="" id=""></code></td>
            </tr><tr>
                <td>Radiobutton</td>
                <td>
                    <input type="radio" name="a" id="">
                    <input type="radio" name="a" id="">
                    <input type="radio" name="a" id="">
                </td>
                <td>Para seleccionar solo un elemento de los que tengan el mismo "name"</td>
                <td><code> < input type="radio" name="" id=""></code></td>
            </tr>
            <tr>
                <td>Checkbox</td>
                <td>
                    <input type="checkbox" name="" id="">
                    <input type="checkbox" name="" id="">
                    <input type="checkbox" name="" id="">
                </td>
                <td>Para seleccionar varios elementos</td>
                <td><code> < input type="checkbox" name="" id=""></code></td>
            </tr>
            <tr>
                <td>ComboBox o lista desplegable</td>
                <td>
                    <select name="" id="">
                        <option value="a">Opcion 1 </option>
                        <option value="b">Opcion 2 </option>
                        <option value="c">Opcion 3 </option>
                    </select>
                </td>
                <td>Para seleccionar un elemento de una lista</td>
                <td>
                    <code> 
                    < select name="" id=""> <br>
                         < option value="a">Opcion 1 < /option><br>
                         < option value="b">Opcion 2 < /option><br>
                         < option value="c">Opcion 3 < /option><br>
                    < /select>
                    </code>
                </td>
            </tr>
            <tr>
                <td>Lista de seleccion multiple</td>
                <td>
                    <select name="" id="" multiple>
                        <option value="a">Opcion 1 </option>
                        <option value="b">Opcion 2 </option>
                        <option value="c">Opcion 3 </option>
                    </select>
                </td>
                <td>Para seleccionar varios elementos de una lista (con la tecla Ctrl)</td>
                <td>
                    <code> 
                        < select name="" id="" multiple> <br>
                            < option value="a">Opcion 1 < /option><br>
                            < option value="b">Opcion 2 < /option><br>
                            < option value="c">Opcion 3 < /option><br>
                        < /select>
                    </code>
                </td>
            </tr>
            <tr>
                <td>Textarea o area de texto</td>
                <td>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </td>
                <td>Introducir varias lineas de texto </td>
                <td><code> < textarea name="" id="" cols="30" rows="10">< /textarea></td>
            </tr>
            <tr>
                <td>Color</td>
                <td><input type="color" name="" id=""></td>
                <td>Introdicir un codigo de color</td>
                <td><code> < input type="color" name="" id=""></code></td>
            </tr>
            <tr>
                <td>Campo para mail</td>
                <td><input type="mail" name="" id=""></td>
                <td>Introdicir estructura de email (en celular aparece solo caracteres que se pueden ingresar en un mail)</td>
                <td><code> < input type="mail" name="" id=""></code></td>
            </tr>
            <tr>
                <td>Campo para telefono</td>
                <td><input type="tel" name="" id=""></td>
                <td>Introdicir estructura de telefono (en celular aparece solo caracteres que se pueden ingresar en un telefono)</td>
                <td><code> < input type="tel" name="" id=""></code></td>
            </tr>
            <tr>
                <td>Submit o boton para enviar</td>
                <td><input type="submit" name="" id=""></td>
                <td>Envia la informacion que se encuentre dentro del formulario al que pertenece</td>
                <td><code> < input type="submit" name="" id=""> <br> o <br> < button type="submit">< /button></code></td>
            </tr>
            <tr>
                <td>Reset</td>
                <td><input type="reset" name="" id=""></td>
                <td>Resetear los campos que pertenezcan al mismo formulario</td>
                <td><code> < input type="reset" name="" id=""> <br> o <br> < button type="reset">< /button> </code></td>
            </tr>
            <tr>
                <td>boton</td>
                <td><input type="button" name="" id=""></td>
                <td>No hace nada, por lo general se le da accion mediante Javascript</td>
                <td><code> < input type="text" name="" id=""> <br> o <br> < button></ button> </code></td>
            </tr>
            
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>