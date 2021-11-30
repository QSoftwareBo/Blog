<?php require 'view.Header.php';?>
<link rel="stylesheet" href="css/estilos.css">

  <form class="form-style-9" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <ul>
    
    <label for="IdUser">Id de Usuario</label>
    <li>
    <input type="text" name="IdUser" id="IdUser" value="<?php echo $user['Id'];?>" class="field-style field-split align-left" />
    </li>
    
    <label for="Nombre">Nombre de Usuario</label>
    <li>
    <input disabled type="text" name="Nombre" id="Nombre" value="<?php echo $user['Nombre'];?>" class="field-style field-split align-left" />
    </li>

    <label for="Fecha">Fecha de Registro</label>
    <li>
    <input type="text" name="Fecha" id="Fecha" value="<?php echo $user['FechaRegistro']?>" class="field-style field-split align-left" disabled/>
    </li>

    <label for="rolA">Rol Actual Del usuario</label>
    <li>
    <input type="text" name="rolA" id="rolA" value="<?php echo $user['Rol']?>" class="field-style field-split align-left" disabled/>
    </li>

    <label for="rolB">Cambiar A Rol</label>
    <li>
        <select name="rolB" id="rolB">
            <option value="PUBLICO"></option>
            <option value="PUBLICO">PUBLICO</option>
            <option value="ESCRITOR">ESCRITOR</option>
            <option value="EDITOR">EDITOR</option>
        </select>
    </li>

    <li>
    <input type="submit" value="Modificar" />
    </li>

    </ul>
  </form>
<?php 
require 'view.Footer.php';
?>