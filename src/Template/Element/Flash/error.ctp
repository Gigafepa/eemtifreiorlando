<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<script>
    $.notify({
        icon: 'ti ti-close',
        message: '<?= $message ?>'
    },{
        type: 'danger'
    });
</script>