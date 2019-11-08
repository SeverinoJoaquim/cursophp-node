<?php
// Iniciar sessão e verificar existência
session_start();
if(isset($_SESSION['mensagem'])): ?>

<script>
  window.onload = function() {
    M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
  };
</script>

<?php
endif;
// Limpar sessão
session_unset();

?>