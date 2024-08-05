<?php

/*
 * **
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ ░FRAMEWORK                                  2024-07-24 17:36:55
 *  ** █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Account\Views\Processes\Creator\deny.php]
 *  ** █ ░█─── █──█ █──█ █▀▀ ░█▀▀█ ▀█▀ █─▀█ █─▀█ ▀▀█ Copyright 2024 - CloudEngine S.A.S., Inc. <admin@cgine.com>
 *  ** █ ░█▄▄█ ▀▀▀▀ ▀▀▀─ ▀▀▀ ░█─░█ ▀▀▀ ▀▀▀▀ ▀▀▀▀ ▀▀▀ Para obtener información completa sobre derechos de autor y licencia,
 *  ** █                                             consulte la LICENCIA archivo que se distribuyó con este código fuente.
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ EL SOFTWARE SE PROPORCIONA -TAL CUAL-, SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O
 *  ** █ IMPLÍCITA, INCLUYENDO PERO NO LIMITADO A LAS GARANTÍAS DE COMERCIABILIDAD,
 *  ** █ APTITUD PARA UN PROPÓSITO PARTICULAR Y NO INFRACCIÓN. EN NINGÚN CASO SERÁ
 *  ** █ LOS AUTORES O TITULARES DE LOS DERECHOS DE AUTOR SERÁN RESPONSABLES DE CUALQUIER
 *  ** █ RECLAMO, DAÑOS U OTROS RESPONSABILIDAD, YA SEA EN UNA ACCIÓN DE CONTRATO,
 *  ** █ AGRAVIO O DE OTRO MODO, QUE SURJA DESDE, FUERA O EN RELACIÓN CON EL SOFTWARE
 *  ** █ O EL USO U OTROS NEGOCIACIONES EN EL SOFTWARE.
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ @Author Jose Alexis Correa Valencia <jalexiscv@gmail.com>
 *  ** █ @Editor Anderson Ospina Lenis <andersonospina798@gmail.com>
 *  ** █ @link https://www.codehiggs.com
 *  ** █ @Version 1.5.0 @since PHP 7, PHP 8
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ Datos recibidos desde el controlador - @ModuleController
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  ** █ @authentication, @request, @dates, @parent, @component, @view, @oid, @views, @prefix
 *  ** █ ---------------------------------------------------------------------------------------------------------------------
 *  **
 */
return [
    "how-is-it-rated-title" => "¿Cómo se califica?",
    "info-create-title" => "Advertencia",
    "info-create-message" => "Es poco común que se recalifique una actividad después de su fase inicial durante la configuración de la plataforma, excepto en circunstancias extraordinarias indicadas por el coordinador para asegurar la transparencia y el adecuado funcionamiento del Modelo Integrado de Planeación y Gestión (MiPG). Por ello, es imperativo detallar explícitamente los motivos que fundamentan la recalificación para que el sistema pueda registrarla apropiadamente.",
    "home-title" => "Calificaciones de la actividad",
    // - Scores fields
    "label_score" => "Código de calificación",
    "label_activity" => "Actividad asociada",
    "label_value" => "Calificación",
    "label_details" => "Detalles de la calificación (Motivos)",
    "label_description" => "Descripción",
    "label_author" => "Autor",
    "label_created_at" => "created_at",
    "label_updated_at" => "updated_at",
    "label_deleted_at" => "deleted_at",
    "label_multiplan" => "La actividad es multiplan",
    "placeholder_score" => "Calificación",
    "placeholder_activity" => "Actividad",
    "placeholder_value" => "Valor",
    "placeholder_details" => "Detalles",
    "placeholder_author" => "Autor",
    "placeholder_created_at" => "created_at",
    "placeholder_updated_at" => "updated_at",
    "placeholder_deleted_at" => "deleted_at",
    "help_score" => "Código de automático",
    "help_activity" => "Código heredado",
    "help_value" => "Número (Requerido)",
    "help_details" => "Explica detalladamente los motivos de la recalificación. (Requerido)",
    "help_author" => "Autor",
    "help_created_at" => "created_at",
    "help_updated_at" => "updated_at",
    "help_deleted_at" => "deleted_at",
    "help_description" => "Descripción de la actividad a calificar",
    // - Scores creator
    "create-denied-title" => "¡Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevas calificaciones. Por favor, póngase en contacto con el administrador del sistema o, en su defecto, con el personal de soporte técnico para que le sean asignados los permisos necesarios, si corresponde. Para continuar, presione la opción correspondiente en la parte inferior de este mensaje.",
    "create-title" => "Recalificar actividad",
    "create-errors-title" => "¡Advertencia!",
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "create-duplicate-title" => "¡Calificación existente!",
    "create-duplicate-message" => "Esta calificación ya se había registrado previamente. Presiona continuar en la parte inferior de este mensaje para regresar al listado general de calificaciones.",
    "create-success-title" => "¡Calificación registrada exitosamente!",
    "create-success-message" => "La calificación se registró exitosamente. Para regresar al listado general de calificaciones, presiona continuar en la parte inferior de este mensaje.",
    // - Scores viewer
    "view-denied-title" => "¡Acceso denegado!",
    "view-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para visualizar calificaciones en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "view-title" => "Vista",
    "view-errors-title" => "¡Advertencia!",
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Scores editor
    "edit-denied-title" => "¡Advertencia!",
    "edit-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para actualizar calificaciones en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "edit-title" => "¡Actualizar calificación!",
    "edit-errors-title" => "¡Advertencia!",
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "edit-noexist-title" => "¡No existe!",
    "edit-noexist-message" => "El elemento que intenta actualizar no existe o ha sido eliminado previamente. Para regresar al listado general de calificaciones, presione continuar en la parte inferior de este mensaje. ",
    "edit-success-title" => "¡Calificación actualizada!",
    "edit-success-message" => "Los datos de calificación se <b>actualizaron exitosamente</b>, para retornar al listado general de calificaciónes presioné el botón continuar en la parte inferior del presente mensaje.",
    // - Scores deleter
    "delete-denied-title" => "¡Advertencia!",
    "delete-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para eliminar calificaciones en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "delete-title" => "¡Eliminar calificación!",
    "delete-message" => "Para confirmar la eliminación de la calificación <b>%s</b>, presione eliminar. Para regresar al listado general de calificaciones, presione cancelar.",
    "delete-errors-title" => "¡Advertencia!",
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifique e inténtelo nuevamente.",
    "delete-noexist-title" => "¡No existe!",
    "delete-noexist-message" => "El elemento que intenta eliminar no existe o ha sido eliminado previamente. Para regresar al listado general de calificaciones, presione continuar en la parte inferior de este mensaje.",
    "delete-success-title" => "¡#Singular eliminado exitosamente!",
    "delete-success-message" => "La calificación se eliminó exitosamente. Para regresar al listado general de calificaciones, presione el botón continuar en la parte inferior de este mensaje.",
    // - Scores list
    "list-denied-title" => "¡Advertencia!",
    "list-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para acceder al listado general de calificaciones en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "list-title" => "Listado de calificaciónes",

];

?>