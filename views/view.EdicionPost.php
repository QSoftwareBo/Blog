<?php 
require 'view.Header.php';
require 'ComprobacionRol.php';
$acceso=AccesoSoloEscritor();
if ($acceso){
?>
<link rel="stylesheet" href="css/estilos.css">
  <form class="form-style-9" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <ul>

    <li>
    <input type="hidden" name="id" id="id" value="<?php echo $post['Id']?>" />
    </li>
    
    <label for="Titulo">Título</label>
    <li>
    <input type="text" name="Titulo" id="Titulo" value="<?php echo $post['Titulo']?>" class="field-style field-split align-left" />
    </li>
    
    <label for="Fecha">Fecha de Publicación</label>
    <li>
    <input type="text" name="Fecha" id="Fecha" value="<?php echo $post['FechaDePublicacion']?>" class="field-style field-split align-left" />
    </li>

    <label for="Autor">Autor</label>
    <li>
    <input type="text" name="Autor" id="Autor" value="<?php echo $post['NombreUsuario']?>" class="field-style field-split align-left" disabled/>
    </li>

    <label for="Contenido">Contenido del Post</label>
    <li>
      <textarea style="text-align:left" name="Contenido" id="Contenido" >
            <?php echo $post['Contenido'];?>
      </textarea>
    </li>

    <li>
    <p>Guardar como: <input type="submit" name="Borrador" value="BORRADOR"/></p>
    <P>Enviar a Revision: <input type="submit" name="Enviar" value="ENVIAR"/>
    </li>
    
    </ul>
  </form>
<hr></hr>

<table>
  <h2>Comentarios sobre el Post</h2>
        <tr>
            <th>Id de Comentario</th>
            <th>Comentario</th>
            <th>Fecha de Comentario</th>
            <th>Tipo de Comentario</th>
        <tr>
           <?php foreach ($comentarios as $dato):?>
            <tr>
            <td><?php echo $dato['IdComentario'];?></td>
            <td><?php echo $dato['Contenido'];?></td>
            <td><?php echo $dato['FechaDeComentario'];?></td>
            <td><?php echo $dato['TipoDeComentario'];?></td>
            </tr>
            <?php endforeach;?> 
        </tr>
</table>
<?php require 'view.Footer.php';
}
else {
    echo "<script>alert('Acceso Restringido')</script>";
    echo "<script>location.href='../'</script>";
}
?>
