<?php
$bootstrap = service("bootstrap");
$continue = "/mipg/plans/view/{$oid}";
$card = $bootstrap->get_Card("access-denied", array(
    "class" => "card-danger",
    "title" => lang("Plans.status-formulation-nocauses-title"),
    "icon" => "fa-duotone fa-triangle-exclamation",
    "text-class" => "text-center",
    "text" => lang("Plans.status-formulation-nocauses-message"),
    "footer-class" => "text-center",
    "footer-login" => true,
    "footer-continue" => $continue,
));

echo($card);

?>
