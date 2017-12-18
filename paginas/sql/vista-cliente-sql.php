<?php 
            //Selecciona todos las ordenes pertenecientes al cliente logueado que tengan como estado espera aprobacion". Vendrian a ser presupuestos
            $sql = "SELECT O.*, A.nombre_em, P.tipo, P.marca, P.modelo , OT.nombreTipoOrd, OE.nombreEstadoOrd, O.descripcion
            FROM ordenes O JOIN administradores A ON A.idUsuario = O.idAdmin
                       JOIN productos P ON P.idProducto = O.idProducto
                       JOIN ordenes_tipos OT ON OT.idTIpo = O.idTipo
                       JOIN ordenes_estados OE ON O.idEstado = OE.idEstado
                       WHERE O.idCliente = '".$_SESSION["idUsuario"]."'  
                       AND O.idEstado = '5' ";
                       
            $rs = mysqli_query($conexion, $sql);
            $nPre = mysqli_num_rows($rs);
?>