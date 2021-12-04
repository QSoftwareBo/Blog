<?php 
require 'view.Header.php';
if($acceso){
?>
<link rel="stylesheet" href="css/estilos.css">

  <form class="form-style-9" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <ul>
    
    <li>
    <input type="hidden" name="IdPost" id="IdPost" value="<?php echo $post['IdPost'];?>" class="field-style field-split align-left" />
    </li>

    <li>
    <input type="hidden" name="IdAutor" id="IdAutor" value="<?php echo $post['IdAutor']?>" class="field-style field-split align-left"/>
    </li>

    <label for="Titulo">Título</label>
    <li>
    <input disabled type="text" name="Titulo" id="Titulo" value="<?php echo $post['Titulo']?>" class="field-style field-split align-left" />
    </li>

    <label for="Fecha">Fecha de Publicación del Post</label>
    <li>
    <input disabled type="text" name="Fecha" id="Fecha" value="<?php echo $post['FechaDePublicacion']?>" class="field-style field-split align-left" />
    </li>

    <label for="Contenido">Contenido del Post</label>
    <li>
    <textarea disabled name="Contenido" id="Contenido"  class="field-style"><?php echo $post['Contenido'];?></textarea>
    </li>

    <label for="Comentario">Comentar</label>
    <li>
    <textarea name="Comentario" id="Comentario"  class="field-style"></textarea>
    </li>
    
    <label for="TipoDeComentario">Tipo de Comentario</label>
    <li>
      <select name="TipoDeComentario" id="TipoDeComentario">
        <option value=""></option>
        <option value="APROBACION">APROBACION</option>
        <option value="RECHAZO">RECHAZO</option>
      </select>
    </li>

    <li>
    <input type="submit"  name='comentar' value="Crear Comentario"  />
    </li>

    </ul>
    </form>
<?php
require 'view.Footer.php';  
}
else{
    echo "<script>alert('Acceso Restringido')</script>";
    echo "<script>location.href='../'</script>";
}

?>