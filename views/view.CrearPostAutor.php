<?php 
require 'view.Header.php';
if($acceso){
?>
<link rel="stylesheet" href="css/estilos.css">

  
  <form class="form-style-9" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    
    <ul>
    <h2>Nuevo Post</h2>
    <label for="Autor">Autor del Post</label>
    <li>
    <input type="text" name="Autor" id="Autor" value='<?php echo $Autor;?>' class="field-style field-split align-left" disabled/>
    </li>

    <label for="Titulo">Título del Post</label>
    <li>
    <input  type="text" name="Titulo" id="Titulo" class="field-style field-split align-left" />
    </li>

        
    <label for="Contenido">Contenido</label>
    <li>
    <textarea name="Contenido" id="Contenido"  class="field-style"></textarea>
    </li>
    
    <li>
    
    <input type="submit"  name= "Borrador" value="Guardar como Borrador" />
    <input type="submit"  name= "Enviar" value="Enviar para Revision">
    
    </li>

    </ul>
    </form>

<?php require 'view.Footer.php';
}
else{
    echo "<script>alert('Acceso Restringido')</script>";
    echo "<script>location.href='../'</script>";
}
?>
