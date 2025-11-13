<?php
// Permite cargar scripts específicos desde la página que lo incluye
$pageScripts = isset($pageScripts) ? (array) $pageScripts : [];
?>

<script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<?php foreach ($pageScripts as $script): ?>
    <script src="<?php echo htmlspecialchars($script); ?>"></script>
<?php endforeach; ?>

</body>
</html>