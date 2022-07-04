<form method="post" id="form-contact">
    <label class="font-weight-bold h6 col-md-12 px-4"> Nombre(s)<br>
        <input class="w-100 my-md-2" type="text" name="given_name" id="given_name" value="" size="40" required>
    </label><br>
    <label class="font-weight-bold h6 col-md-12 px-4"> Apellido(s)<br>
        <input class="w-100 my-md-2" type="text" name="surname" id="surname" value="" size="40" required>
    </label><br>

    <label class="col-md-12 px-4 font-weight-bold h6">Celular<br>
        <input class="w-100 my-md-2" type="tel" name="phone" id="phone" value="" size="40" required>
    </label><br>

    <label class="font-weight-bold h6 col-md-12 px-4"> Email<br>
        <input class="w-100 my-md-2" type="email" name="email" id="email" value="" size="40" required>
    </label><br>

    <label class="font-weight-bold h6 col-md-12 px-4" style="<?php echo $class?>"> Comentarios <br>
        <textarea name="comments" cols="30" rows="10" class="w-100 my-md-2" style="height: 150px;"></textarea>
    </label>

    <input type="hidden" name="source" value="<?php echo $source ?>">
    <input type="hidden" name="utm_source" value="<?php echo @$_GET['utm_source'] ?>">
    <input type="hidden" name="utm_medium" value="<?php echo @$_GET['utm_medium'] ?>">
    <input type="hidden" name="utm_campaign" value="<?php echo @$_GET['utm_campaign'] ?>">
    <input type="hidden" name="utm_id" value="<?php echo @$_GET['utm_id'] ?>">
    <input type="hidden" name="utm_term" value="<?php echo @$_GET['utm_term'] ?>">
    <input type="hidden" name="utm_content" value="<?php echo @$_GET['utm_content'] ?>">

    <div class="text-center">
        <input type="button" value="Enviar" id="Enviar" class="h5">
    </div>

    <div id="imgLoading" style="display: none; text-align:center" class="div-loader">
        <p class="h5 mt-3" style="color:#02859f;">Espere un momento, su solicitud está siendo atendida...</p>
        <img src="<?php echo get_bloginfo("stylesheet_directory") ?>/assets/images/loading.gif">
    </div>
    <div id="msg" style="display:none"></div>

</form>