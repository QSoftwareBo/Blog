
<link rel="stylesheet" href="css/estilos.css">
  <form class="form-style-9" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <ul>
    
    <label for="IdPost">Id & Título</label>
    <li>
    <input disabled type="text" name="Titulo" id="Titulo" value="<?php echo $post['Id'].'.- '.$post['Titulo']?>" class="field-style field-split align-left" />
    </li>
    
    <label for="Fecha">Fecha de Publicación</label>
    <li>
    <input type="text" name="Fecha" id="Fecha" value="<?php echo $post['FechaDePublicacion']?>" class="field-style field-split align-left" disabled/>
    </li>

    <label for="Autor">Id Autor</label>
    <li>
    <input type="text" name="Autor" id="Autor" value="<?php echo $post['IdAutor']?>" class="field-style field-split align-left" disabled/>
    </li>

    <label for="Contenido">Contenido del Post</label>
    <li>
    <textarea name="Contenido" id="Contenido" class="field-style" 
      <?php if ($post['Estado']!='BORRADOR'):?> 
      disabled <?php endif; ?>><?php echo $post['Contenido'];?></textarea>
    </li>

    <li>
    <input type="submit" <?php if ($post['Estado']!='BORRADOR'):?>disabled <?php endif; ?>value="Guardar" />
    <input disabled type="submit" value="Enviar Para Revisión" />
    </li>
    <li>
    <input disabled type="submit" value="Aceptar y Publicar" />
    <input disabled type="submit" value="Rechazar" />
    </li>

    </ul>
  </form>
<?php 
require 'view.Footer.php';
?>