<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<script>
    $.notify({
        icon: 'ti ti-check',
        message: '<?= $message ?>'
    },{
        type: 'success'
    });
</script>