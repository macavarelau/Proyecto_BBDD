<?php include('templates/header.html');   ?>

<html>
<body>
<!-- PHP insert code will be here -->
 
<!-- html form here where the user information will be entered -->
<div class="container p-5 my-5 text-black " style="background: rgba(214, 213, 208, 95);">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <table class='table table-hover table-responsive table-bordered table-center'>
        <tr>
            <td>Nombre</td>
            <td><input type='text' name='nombre' class='form-control' /></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><input type='number' name='edad' class='form-control' /></td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td><select name="nacionalidad">
                <option value="">-- Selecciona tu sexo --</option>
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Número de pasaporte</td>
            <td><input type='text' name='pasaporte' class='form-control' /></td>
        </tr>
        <tr>
            <td>Nacionalidad</td>
            <td>
            <!--<input type='option' name='nacionalidad' class='form-control' />-->
            <select name="nacionalidad">
                <option value="">-- Selecciona tu nacionalidad --</option>
                <option value="AFGANA">AFGANA</option>
                <option value="ALEMANA">ALEMANA</option>
                <option value="AMERICANA">AMERICANA</option>
                <option value="ANGOLESA">ANGOLESA</option>
                <option value="ARABE">ARABE</option>
                <option value="ARGELIANA">ARGELIANA</option>
                <option value="ARGENTINA">ARGENTINA</option>
                <option value="AUSTRALIANA">AUSTRALIANA</option>
                <option value="AUSTRIACA">AUSTRIACA</option>
                <option value="BAHAMEÑA">BAHAMEÑA</option>
                <option value="BELGA">BELGA</option>
                <option value="BELICEÑA">BELICEÑA</option>
                <option value="BHUTANESA">BHUTANESA</option>
                <option value="BIRMANA">BIRMANA</option>
                <option value="BOLIVIANA">BOLIVIANA</option>
                <option value="BOTSWANESA">BOTSWANESA</option>
                <option value="BRASILEÑA">BRASILEÑA</option>
                <option value="BRITANICA">BRITANICA</option>
                <option value="BULGARA">BULGARA</option>
                <option value="BURKINA FASO">BURKINA FASO</option>
                <option value="BURUNDESA">BURUNDESA</option>
                <option value="CAMBOYANA">CAMBOYANA</option>
                <option value="CAMERUNESA">CAMERUNESA</option>
                <option value="CANADIENSE">CANADIENSE</option>
                <option value="CHADIANA">CHADIANA</option>
                <option value="CHECOSLOVACA">CHECOSLOVACA</option>
                <option value="CHILENA">CHILENA</option>
                <option value="CHINA">CHINA</option>
                <option value="CHIPRIOTA">CHIPRIOTA</option>
                <option value="COLOMBIANA">COLOMBIANA</option>
                <option value="COMORENSE">COMORENSE</option>
                <option value="CONGOLESA">CONGOLESA</option>
                <option value="COSTARRICENSE">COSTARRICENSE</option>
                <option value="CUBANA">CUBANA</option>
                <option value="DANESA">DANESA</option>
                <option value="DE BAHREIN">DE BAHREIN</option>
                <option value="DE BARBADOS">DE BARBADOS</option>
                <option value="DE BENNIN">DE BENNIN</option>
                <option value="DE CABO VERDE">DE CABO VERDE</option>
                <option value="DEL QATAR">DEL QATAR</option>
                <option value="DE SANTO TOME">DE SANTO TOME</option>
                <option value="DE SEYCHELLES">DE SEYCHELLES</option>
                <option value="DE ZIMBAWI">DE ZIMBAWI</option>
                <option value="DOMINICA">DOMINICA</option>
                <option value="DOMINICANA">DOMINICANA</option>
                <option value="EGIPCIA">EGIPCIA</option>
                <option value="ESLOVACA">ESLOVACA</option>
                <option value="ESLOVAQUIA">ESLOVAQUIA</option>
                <option value="ESLOVENIA">ESLOVENIA</option>
                <option value="ESPAÑOLA">ESPAÑOLA</option>
                <option value="ESTADOUNIDENSE">ESTADOUNIDENSE</option>
                <option value="ESTONIA">ESTONIA</option>
                <option value="ETIOPE">ETIOPE</option>
                <option value="FIJIANA">FIJIANA</option>
                <option value="FILIPINA">FILIPINA</option>
                <option value="FINLANDESA">FINLANDESA</option>
                <option value="FRANCESA">FRANCESA</option>
                <option value="GABONESA">GABONESA</option>
                <option value="GAMBIANA">GAMBIANA</option>
                <option value="GHANATA">GHANATA</option>
                <option value="GRANADINA">GRANADINA</option>
                <option value="GRIEGA">GRIEGA</option>
                <option value="GUINEA">GUINEA</option>
                <option value="GUINEA ECUATORIANA">GUINEA ECUATORIANA</option>
                <option value="GUYANESA">GUYANESA</option>
                <option value="HAITIANA">HAITIANA</option>
                <option value="HINDU">HINDU</option>
                <option value="HOLANDESA">HOLANDESA</option>
                <option value="HONDUREÑA">HONDUREÑA</option>
                <option value="HUNGARA">HUNGARA</option>
                <option value="INDONESA">INDONESA</option>
                <option value="IRANI">IRANI</option>
                <option value="IRAQUI">IRAQUI</option>
                <option value="IRLANDESA">IRLANDESA</option>
                <option value="ISLANDESA">ISLANDESA</option>
                <option value="ISRAELI">ISRAELI</option>
                <option value="ITALIANA">ITALIANA</option>
                <option value="JAMAIQUINA">JAMAIQUINA</option>
                <option value="JAPONESA">JAPONESA</option>
                <option value="JORDANA">JORDANA</option>
                <option value="KENIANA">KENIANA</option>
                <option value="KIRGUISTAN">KIRGUISTAN</option>
                <option value="KUWAITI">KUWAITI</option>
                <option value="LAOSIANA">LAOSIANA</option>
                <option value="LESOTHENSE">LESOTHENSE</option>
                <option value="LIBANESA">LIBANESA</option>
                <option value="LIBERIANA">LIBERIANA</option>
                <option value="LIBIA">LIBIA</option>
                <option value="LIECHTENSTENSE">LIECHTENSTENSE</option>
                 <option value="LITUANIA">LITUANIA</option>
                <option value="MACEDONIA">MACEDONIA</option>
                <option value="MALASIA">MALASIA</option>
                <option value="MALAWIANA">MALAWIANA</option>
                <option value="MALDIVA">MALDIVA</option>
                <option value="MALIENSE">MALIENSE</option>
                <option value="MALTESA">MALTESA</option>
                <option value="MARFILEÑA">MARFILEÑA</option>
                <option value="MARROQUI">MARROQUI</option>
                <option value="MAURICIANA">MAURICIANA</option>
                <option value="MAURITANA">MAURITANA</option>
                <option value="MEXICANA">MEXICANA</option>
                <option value="MICRONECIA">MICRONECIA</option>
                <option value="MOLDOVIA">MOLDOVIA</option>
                <option value="MONEGASCA">MONEGASCA</option>
                <option value="MONGOLESA">MONGOLESA</option>
                <option value="MOZAMBIQUEÑA">MOZAMBIQUEÑA</option>
                <option value="NAMIBIANA">NAMIBIANA</option>
                <option value="NAURUANA">NAURUANA</option>
                <option value="NEPALESA">NEPALESA</option>
                <option value="NICARAGUENSE">NICARAGUENSE</option>
                <option value="NIGERIANA">NIGERIANA</option>
                <option value="NIGERINA">NIGERINA</option>
                <option value="NORCOREANA">NORCOREANA</option>
                <option value="NORVIETNAMITA">NORVIETNAMITA</option>
                <option value="OMANESA">OMANESA</option>
                <option value="PAKISTANI">PAKISTANI</option>
                <option value="PANAMEÑA">PANAMEÑA</option>
                <option value="PAPUENSE">PAPUENSE</option>
                <option value="PARAGUAYA">PARAGUAYA</option>
                <option value="PORTUGUESA">PORTUGUESA</option>
                <option value="PUERTORRIQUEÑA">PUERTORRIQUEÑA</option>
                <option value="REINO UNIDO">REINO UNIDO</option>
                <option value="REINO UNIDO(BRIT. DEL EXT.)">REINO UNIDO(BRIT. DEL EXT.)</option>
                <option value="RUMANA">RUMANA</option>
                <option value="RWANDESA">RWANDESA</option>
                <option value="SALOMONESA">SALOMONESA</option>
                <option value="SALVADOREÑA">SALVADOREÑA</option>
                <option value="SAMOANA">SAMOANA</option>
                <option value="SAN MARINENSE">SAN MARINENSE</option>
                <option value="SANTA LUCIENSE">SANTA LUCIENSE</option>
                <option value="SENEGALESA">SENEGALESA</option>
                <option value="SIERRA LEONESA">SIERRA LEONESA</option>
                <option value="SINGAPORENSE">SINGAPORENSE</option>
                <option value="SIRIA">SIRIA</option>
                <option value="SOVIETICA UCRANIANA">SOVIETICA UCRANIANA</option>
                <option value="SUDAFRICANA">SUDAFRICANA</option>
                <option value="SUDANESA">SUDANESA</option>
                <option value="SUDCOREANA">SUDCOREANA</option>
                <option value="SUECA">SUECA</option>
                <option value="SUIZA">SUIZA</option>
                <option value="SURINAMENSE">SURINAMENSE</option>
                <option value="SWAZI">SWAZI</option>
                <option value="TAILANDESA">TAILANDESA</option>
                <option value="TAIWANESA">TAIWANESA</option>
                <option value="TANZANIANA">TANZANIANA</option>
                <option value="TOGOLESA">TOGOLESA</option>
                <option value="TRINITARIA">TRINITARIA</option>
                <option value="TUNECINA">TUNECINA</option>
                <option value="TURCA">TURCA</option>
                <option value="UGANDESA">UGANDESA</option>
                <option value="URUGUAYA">URUGUAYA</option>
                <option value="VATICANA">VATICANA</option>
                <option value="VENEZOLANA">VENEZOLANA</option>
                <option value="YEMENI">YEMENI</option>
                <option value="YUGOSLAVA">YUGOSLAVA</option>
                <option value="ZAIRANA">ZAIRANA</option>
                <option value="ZAMBIANA">ZAMBIANA</option>                
                </select>
                </td>
        </tr>
        <tr>
            <td>Contraseña</td>
            <td><input type='password' name='password' class='form-control' /></td>
        </tr>
        <tr>
            <td>Confirma contraseña</td>
            <td><input type='password' name='cpassword' class='form-control' /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Guardar' class='btn btn-primary' />
                <!-- <a href='index.php' class='btn btn-danger'>Back to read products</a> -->
            </td>
        </tr>
    </table>
</form>
</div>
</body>

</html>
