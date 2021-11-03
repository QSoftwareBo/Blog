<?php require 'view.Header.php';?>
<link rel="stylesheet" href="css/estilos.css">

  <form class="form-style-9" method="POST" action="#">
    <ul>

    <label for="Titulo">Id Post & Título</label>
    <li>
    <input disabled type="text" name="Titulo" id="Titulo" value="<?php echo $post['Id'].'.- '.$post['Titulo']?>" class="field-style field-split align-left" />
    </li>

    <label for="Fecha">Fecha de Publicación del Post</label>
    <li>
    <input type="text" name="Fecha" id="Fecha" value="<?php echo $post['FechaDePublicacion']?>" class="field-style field-split align-left" disabled/>
    </li>

    <label for="Estado">Estado Del Post</label>
    <li>
    <input type="text" name="Estado" id="Estado" value="<?php echo $post['Estado']?>" class="field-style field-split align-left" disabled/>
    </li>

    <label for="IdAutor">Id Autor del Post</label>
    <li>
    <input type="text" name="IdAutor" id="IdAutor" value="<?php echo $post['IdAutor']?>" class="field-style field-split align-left" disabled/>
    </li>

    <label for="Contenido">Comentarios</label>
    <li>
    <textarea disabled name="Contenido" id="Contenido"  class="field-style"><?php echo $post['Contenido'];?></textarea>
    </li>
    
    </ul>
    </form>

<?php require 'view.Header.php';?>
