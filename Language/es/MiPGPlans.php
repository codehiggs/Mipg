<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-02-03 16:17:54
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Plans\Views\Plans\Creator\index.php]
 * █ ░█─── █──█ █──█ █▀▀ ░█▀▀█ ▀█▀ █─▀█ █─▀█ ▀▀█ Copyright 2023 - CloudEngine S.A.S., Inc. <admin@cgine.com>
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
 * █ @link https://www.codehiggs.com
 * █ @Version 1.5.0 @since PHP 7, PHP 8
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ Datos recibidos desde el controlador - @ModuleController
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ @var object $parent
 * █ @var object $authentication
 * █ @var object $request
 * █ @var object $dates
 * █ @var string $component
 * █ @var string $view
 * █ @var string $oid
 * █ @var string $views
 * █ @var string $prefix
 * █ @var array $data
 * █ ---------------------------------------------------------------------------------------------------------------------
 **/
return [
    "Module" => "Modulo de Planes",
    "intro-1" => "Bienvenido al módulo de planes, aquí podrá gestionar y administrar los planes de trabajo de su organización. un Plan de Acción en el contexto de MiPG es una herramienta integral que facilita la ejecución efectiva de actividades al proporcionar una guía detallada de las acciones requeridas, los plazos asociados y los responsables de llevar a cabo cada tarea. Esto ayuda a garantizar una implementación exitosa de las actividades planificadas dentro del marco de gestión.",
    // - Plans fields
    "label_plan" => "Código del plan",
    "label_plan_institutional" => "Plan institucional (Alineado)",
    "label_activity" => "Código de la actividad",
    "label_manager" => "Proceso responsable del plan de acción",
    "label_manager_process_name" => "Nombre del proceso",
    "label_manager_user" => "Responsable por proceso",
    "label_manager_subprocess" => "Responsable por subproceso",
    "label_manager_position" => "Responsable por cargo",
    "label_order" => "order",
    "label_description" => "Descripción detallada del plan",
    "label_formulation" => "formulation",
    "label_value" => "Recalificación propuesta",
    "label_range" => "Fechas (Inicio/Finalización)",
    "label_start" => "Fecha Inicio",
    "label_end" => "Fecha Finalización",
    "label_evaluation" => "evaluation",
    "label_author" => "author",
    "label_created_at" => "created_at",
    "label_updated_at" => "updated_at",
    "label_deleted_at" => "deleted_at",
    "placeholder_plan" => "plan",
    "placeholder_plan_institutional" => "plan_institutional",
    "placeholder_activity" => "activity",
    "placeholder_manager" => "manager",
    "placeholder_manager_subprocess" => "manager_subprocess",
    "placeholder_manager_position" => "manager_position",
    "placeholder_order" => "order",
    "placeholder_description" => "description",
    "placeholder_formulation" => "formulation",
    "placeholder_value" => "0",
    "placeholder_start" => "start",
    "placeholder_end" => "end",
    "placeholder_evaluation" => "evaluation",
    "placeholder_author" => "author",
    "placeholder_created_at" => "created_at",
    "placeholder_updated_at" => "updated_at",
    "placeholder_deleted_at" => "deleted_at",
    "help_plan" => "Código automático",
    "help_plan_institutional" => "Seleccione uno (Requerido)",
    "help_manager_process_name" => "Nombre del proceso (Automático)",
    "help_manager_user" => "Responsable por proceso (Automático)",
    "help_activity" => "Código heredado(Automático)",
    "help_manager" => "Seleccione uno (Requerido)",
    "help_manager_subprocess" => "Subproceso + Responsable",
    "help_manager_position" => "Cargo + Responsable",
    "help_order" => "order",
    "help_description" => "Descripción detallada del plan (Requerido)",
    "help_formulation" => "formulation",
    "help_value" => "Numerico de 0-100 (Requerido)",
    "help_range" => "Fechas (Inicio/Finalización)",
    "help_start" => "start",
    "help_end" => "end",
    "help_evaluation" => "evaluation",
    "help_author" => "author",
    "help_created_at" => "created_at",
    "help_updated_at" => "updated_at",
    "help_deleted_at" => "deleted_at",
    // - Plans creator
    "info-create-title" => "Recuerde",
    "info-create-message" => "Recuerde: El criterio de calificación es el puntaje que hace referencia a la calificación de cada una de las Actividades de Gestión, y debe ir en una escala de 0 a 100. Al <u>crear directamente un plan y luego asignarlo a una actividad o similar deberá considerar el valor calificable propuesto</u> y si este se adapta al valor calificable como meta de la actividad. Esto deberá realizarlo en un procedimiento posterior al presente. Al igual que los rangos de calificación dependen de los establecidos para las actividades según el modelo que se aplique y en teoría solo deberá fijar un valor de calificación aplicable según la actividad seleccionada y su respectivo conjunto de rangos. ",
    "create-denied-title" => "Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevos planes de acción , por favor póngase en contacto con el administrador del sistema o en su efecto contacte al personal de soporte técnico para que estos le sean asignados, según sea el caso. Para continuar presioné la opción correspondiente en la parte inferior de este mensaje.",
    "create-title" => "Crear nuevo plan de acción",
    "create-errors-title" => "¡Advertencia!",
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique eh inténtelo nuevamente.",
    "create-duplicate-title" => "¡Plan de acción existente!",
    "create-duplicate-message" => "Este plan de acción ya se había registrado previamente, presioné continuar en la parte inferior de este mensaje para retornar al listado general de planes de acción .",
    "create-success-title" => "¡Plan de acción registrado exitosamente!",
    "create-success-message" => "El plan de acción se registró exitosamente, para retornar al listado general de planes de acción  presioné continuar en la parte inferior de este mensaje.",
    // - Plans viewer
    "view-denied-title" => "¡Acceso denegado!",
    "view-denied-message" => "Los roles asignados a su perfil, no le conceden los privilegios necesarios para visualizar planes de acción  en esta plataforma. Contacte al departamento de soporte técnico para información adicional, o la asignación de los permisos necesarios si es el caso. Para continuar seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "view-title" => "Plan de acción %s",
    "view-errors-title" => "¡Advertencia!",
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique eh inténtelo nuevamente.",
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Plans editor
    "edit-denied-title" => "¡Advertencia!",
    "edit-denied-message" => "Los roles asignados a su perfil, no le conceden los privilegios necesarios para actualizar planes de acción  en esta plataforma. Contacte al departamento de soporte técnico para información adicional, o la asignación de los permisos necesarios si es el caso. Para continuar seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "edit-title" => "¡Actualizar plan de acción !",
    "edit-errors-title" => "¡Advertencia!",
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique eh inténtelo nuevamente.",
    "edit-noexist-title" => "¡No existe!",
    "edit-noexist-message" => "El elemento que actualizar no existe o se elimino previamente, para retornar al listado general de planes de acción  presioné continuar en la parte inferior de este mensaje. ",
    "edit-success-title" => "¡Plan de acción actualizado exitosamente!",
    "edit-success-message" => "Los datos del plan de acción se <b>actualizaron exitosamente</b>, para retornar al listado general de planes de acción  presioné el botón continuar en la parte inferior del presente mensaje.",
    // - Plans deleter
    "delete-denied-title" => "¡Advertencia!",
    "delete-denied-message" => "Los roles asignados a su perfil, no le conceden los privilegios necesarios para eliminar planes de acción  en esta plataforma. Contacte al departamento de soporte técnico para información adicional, o la asignación de los permisos necesarios si es el caso. Para continuar seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "delete-title" => "¡Eliminar plan de acción !",
    "delete-message" => "Para confirmar la eliminación del plan de acción <b>%s</b>, presioné eliminar, para retornar al listado general de planes de acción  presioné cancelar.",
    "delete-errors-title" => "¡Advertencia!",
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique eh inténtelo nuevamente.",
    "delete-noexist-title" => "¡No existe!",
    "delete-noexist-message" => "\El elemento que intenta eliminar no existe o se elimino previamente, para retornar al listado general de planes de acción  presioné continuar en la parte inferior de este mensaje.",
    "delete-success-title" => "¡Plan de acción eliminado exitosamente!",
    "delete-success-message" => "El plan de acción se elimino exitosamente, para retornar al listado de general de planes de acción  presioné el botón continuar en la parte inferior de este mensaje.",
    // - Plans list
    "list-denied-title" => "¡Advertencia!",
    "list-denied-message" => "Los roles asignados a su perfil, no le conceden los privilegios necesarios para acceder al listado general de planes de acción  en esta plataforma. Contacte al departamento de soporte técnico para información adicional, o la asignación de los permisos necesarios si es el caso. Para continuar seleccione la opción correspondiente en la parte inferior de este mensaje.",
    "list-title" => "Listado de planes de acción ",
    "list-alert-title" => "¡Recuerde!",
    "list-alert-message" => "El listado de planes de acción que aquí se te presenta, abarca la totalidad de los planes ya ejecutados o aún en curso, todos ellos ligados a la actividad que se ha especificado previamente. Según el período de tiempo en el que hayas estado utilizando nuestra plataforma, encontrarás en este listado desde un solo plan de acción hasta varios, cada uno con su respectivo estado.",
];

?>