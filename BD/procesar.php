<table>
    <thead>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cilindraje</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        {foreach $motos as $moto}
        <tr>
            <td>{$moto->marca}</td>
            <td>{$moto->modelo}</td>
            <td>{$moto->cilindraje}</td>
            <td>{$moto->nombre}</td>
        </tr>
        {/foreach}
    </tbody>
</table><?php
echo ("Procesando...");
print_r($_POST);

echo ("Hola ".$_REQUEST['nombre'] );