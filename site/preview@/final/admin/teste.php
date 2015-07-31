<html>
<?php include 'header.php' ?>
<body>
	<script src="ckeditor/ckeditor.js"></script>

		<textarea id="editor1" ></textarea>
		<script>

			// Replace the <textarea id="editor"> with an CKEditor
			// instance, using default configurations.
			CKEDITOR.replace( 'editor1', {
				uiColor: '#cecece',
				toolbar: [
					[ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
					[ 'FontSize', 'TextColor', 'BGColor' ]
				]
			});

		</script>
	
</body>