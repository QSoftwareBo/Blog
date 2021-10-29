<?php require 'view.Header.php';?>


  <form class="form-style-9" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <ul>

    <label for="Titulo">Id Post & Título</label>
    <li>
    <input disabled type="text" name="Titulo" id="Titulo" value="<?php echo $post['IdPost'].'.- '.$post['Titulo']?>" class="field-style field-split align-left" />
    </li>

    <label for="Fecha">Fecha de Publicación del Post</label>
    <li>
    <input type="text" name="Fecha" id="Fecha" value="<?php echo $post['FechaDePublicacion']?>" class="field-style field-split align-left" disabled/>
    </li>

    <label for="IdComentario">Id Comentario</label>
    <li>
    <input type="text" name="IdComentario" id="IdComentario"  class="field-style field-split align-left" disabled/>
    </li>

    <label for="FechaCom">Fecha de Comentario</label>
    <li>
    <input type="text" name="FechaCom" id="FechaCom" value="<?php echo date("d\-m\-Y")?>" class="field-style field-split align-left" disabled/>
    </li>

    <label for="IdAutor">Id Autor del Post</label>
    <li>
    <input type="text" name="IdAutor" id="IdAutor" value="<?php echo $post['IdAutor']?>" class="field-style field-split align-left" disabled/>
    </li>

    <label for="Contenido">Comentarios</label>
    <li>
    <textarea name="Contenido" id="Contenido"  class="field-style"></textarea>
    </li>
    
    <li>
    
    <input type="submit"  value="Guardar nuevo Comentario"  />
    
    
    </li>

    </ul>
    </form>
  </body>
</html>
