<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-04-15 15:12:23
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Plans\Views\Causes\Creator\index.php]
 * █ ░█─── █──█ █──█ █▀▀ ░█▀▀█ ▀█▀ █─▀█ █─▀█ ▀▀█ Copyright 2024 - CloudEngine S.A.S., Inc. <admin@cgine.com>
 * █ ░█▄▄█ ▀▀▀▀ ▀▀▀─ ▀▀▀ ░█─░█ ▀▀▀ ▀▀▀▀ ▀▀▀▀ ▀▀▀ Para obtener información completa sobre derechos de autor y licencia,
 * █                                             consulte la LICENCIA archivo que se distribuyó con este código fuente.
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ EL SOFTWARE SE PROPORCIONA -TAL CUAL-, SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O
 * █ IMPLÍCITA, INCLUYENDO PERO NO LIMITADO A LAS GARANTÍAS DE COMERCIABILIDAD,
 * █ APTITUD PARA UN PROPÓSITO PARTICULAR Y NO INFRACCIÓN. EN NINGÚN CASO SERÁ
 * █ LOS AUTORES O TITULARES DE LOS DERECHOS DE AUTOR SERÁN RESPONSABLES DE CUALQUIER
 * █ RECLAMO, DAÑOS U OTROS RESPONSABILIDAD, YA SEA EN UNA ACCIÓN DE CONTRATO,
 * █ AGRAVIO O DE OTRO MODO, QUE SURJA DESDE, FUERA O EN RELACIÓN CON EL SOFTWARE
 * █ O EL USO U OTROS NEGOCIACIONES EN EL SOFTWARE.
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ @Author Jose Alexis Correa Valencia <jalexiscv@gmail.com>
 * █ @Editor Anderson Ospina Lenis <andersonospina798@gmail.com>
 * █ @link https://www.codehiggs.com
 * █ @Version 1.5.0 @since PHP 7, PHP 8
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ Datos recibidos desde el controlador - @ModuleController
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ @var object $parent Trasferido desde el controlador
 * █ @var object $authentication Trasferido desde el controlador
 * █ @var object $request Trasferido desde el controlador
 * █ @var object $dates Trasferido desde el controlador
 * █ @var string $component Trasferido desde el controlador
 * █ @var string $view Trasferido desde el controlador
 * █ @var string $oid Trasferido desde el controlador
 * █ @var string $views Trasferido desde el controlador
 * █ @var string $prefix Trasferido desde el controlador
 * █ @var array $data Trasferido desde el controlador
 * █ @var object $model Modelo de datos utilizado en la vista y trasferido desde el index
 * █ ---------------------------------------------------------------------------------------------------------------------
 **/
return [
    // - Causes fields
    "label_cause" => "Código de la causa",
    "label_plan" => "Plan de acción",
    "label_score" => "Puntuación",
    "label_description" => "Descripción",
    "label_author" => "Autor",
    "label_created_at" => "created_at",
    "label_updated_at" => "updated_at",
    "label_deleted_at" => "deleted_at",
    "placeholder_cause" => "Causa",
    "placeholder_plan" => "Plan",
    "placeholder_score" => "Calificación",
    "placeholder_description" => "Descripción",
    "placeholder_author" => "Autor",
    "placeholder_created_at" => "created_at",
    "placeholder_updated_at" => "updated_at",
    "placeholder_deleted_at" => "deleted_at",
    "help_cause" => "Código automático (Requerido)",
    "help_plan" => "Código heredado (Requerido)",
    "help_score" => "Calificación",
    "help_description" => "Descripción de la causa (Requerido)",
    "help_author" => "Autor",
    "help_created_at" => "created_at",
    "help_updated_at" => "updated_at",
    "help_deleted_at" => "deleted_at",
    // - Causes creator
    "create-denied-title" => "¡Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevos causas. Por favor, póngase en contacto con el administrador del sistema o en su efecto contacte al personal de soporte técnico para que estos le sean asignados, según sea el caso. Para continuar presioné la opción correspondiente en la parte inferior de este mensaje.",
    "create-title" => "Crear nueva Causa",
    "create-errors-title" => "¡Advertencia!",
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "create-duplicate-title" => "¡Causa existente!",
    "create-duplicate-message" => "Esta Causa ya se había registrado previamente. Presione continuar en la parte inferior de este mensaje para retornar al listado general de causas.",
    "create-success-title" => "¡Causa registrada exitosamente!",
    "create-success-message" => "La Causa se registró exitosamente. Para retornar al listado general de causas, presione continuar en la parte inferior de este mensaje.",
    // - Causes viewer
    "view-denied-title" => "¡Acceso denegado!",
    "view-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para visualizar causas en esta plataforma. Contacte al departamento de soporte técnico para información adicional o la asignación de los permisos necesarios si es el caso. Para continuar seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "view-title" => "Vista",
    "view-errors-title" => "¡Advertencia!",
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Causes editor
    "edit-denied-title" => "¡Advertencia!",
    "edit-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para actualizar causas en esta plataforma. Contacte al departamento de soporte técnico para información adicional o la asignación de los permisos necesarios si es el caso. Para continuar seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "edit-title" => "¡Actualizar Causa!",
    "edit-errors-title" => "¡Advertencia!",
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "edit-noexist-title" => "¡No existe!",
    "edit-noexist-message" => "El elemento que actualizar no existe o se elimino previamente. Para retornar al listado general de causas, presione continuar en la parte inferior de este mensaje. ",
    "edit-success-title" => "¡Causa actualizada!",
    "edit-success-message" => "Los datos de Causa se <b>actualizaron exitosamente</b>. Para retornar al listado general de causas, presione el botón continuar en la parte inferior del presente mensaje.",
    // - Causes deleter
    "delete-denied-title" => "¡Advertencia!",
    "delete-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para eliminar causas en esta plataforma. Contacte al departamento de soporte técnico para información adicional o la asignación de los permisos necesarios si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "delete-title" => "¡Eliminar Causa!",
    "delete-message" => "Para confirmar la eliminación de la Causa <b>%s</b>, presione eliminar. Para retornar al listado general de causas, presione cancelar.",
    "delete-errors-title" => "¡Advertencia!",
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "delete-noexist-title" => "¡No existe!",
    "delete-noexist-message" => "El elemento que intenta eliminar no existe o se elimino previamente. Para retornar al listado general de causas, presione continuar en la parte inferior de este mensaje.",
    "delete-success-title" => "¡Causa eliminada exitosamente!",
    "delete-success-message" => "La Causa se eliminó exitosamente. Para retornar al listado de general de causas, presione el botón continuar en la parte inferior de este mensaje.",
    // - Causes list
    "list-denied-title" => "¡Advertencia!",
    "list-denied-message" => "Los roles asignados a su perfil, no le conceden los privilegios necesarios para acceder al listado general de causas en esta plataforma. Contacte al departamento de soporte técnico para información adicional o la asignación de los permisos necesarios si es el caso. Para continuar seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "list-title" => "Listado de causas",
    "info-title" => "Información",
    "info-message" => "Recuerde que como mínimo debe establecer tres(3) causas probables para hacer un análisis, estas sirven de base como causas raíz o causas subyacentes, para ello es indispensable priorizarlas para de esta forma obtener la mayor causa probable. Enunciadas las causas, deberá evaluarlas y definir de entre ellas cual es la mayor causa probable, y posteriormente los porque asociados a la misma y de esta forma poder formular el plan de acción. En esta sección se listan todas las causas registradas en el sistema, para crear una nueva causa presioné el botón correspondiente en la parte superior derecha de este mensaje. Para ver los detalles de una causa presioné el botón ver, para editar los datos de una causa presioné el botón editar, para eliminar una causa presioné el botón eliminar.",
    "evaluation-success-title" => "¡Evaluación exitosa!",
    "evaluation-success-message" => "La evaluación de las causas se realizó exitosamente. Para ver los resultados presione continuar en la parte inferior de este mensaje.",
    "info-evaluate-title" => "¡Mayor causa probable!",
    "info-evaluate-message" => "Al calificar las causas probables su valoración unida a la de los demás participantes dará como resultado la determinación de la mayor causa probable, una vez halla valorado las causas los porcentajes se actualizarán automáticamente. "
];

?>