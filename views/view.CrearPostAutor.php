<?php require 'view.Header.php';?>
<link rel="stylesheet" href="css/estilos.css">

  
  <form class="form-style-9" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    
    <ul>
    <h2>Nuevo Post</h2>
    <label for="IdAutor">Id Autor del Post</label>
    <li>
    <input type="text" name="IdAutor" id="IdAutor" value='1' class="field-style field-split align-left" disabled/>
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
    <input type="submit"  name= "Revision" value="Enviar para Revision">
    
    </li>

    </ul>
    </form>

<?php require 'view.Footer.php';?>
