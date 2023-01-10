<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
	<script src="/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
	<script>
		tinymce.init({
			selector: '#mytextarea',
			min_height: 500,
			language: 'pt_BR',
			content_langs: [
				{ title: 'Português', code: 'pt' },
				{ title: 'Inglês', code: 'en' },
				{ title: 'Espanhol', code: 'es' },
				{ title: 'Françês', code: 'fr' },
				{ title: 'Alemão', code: 'de' },
				{ title: 'Chinês', code: 'zh' }
			],
			promotion: false,
			plugins: 'code codesample lists advlist anchor link autolink autoresize autosave charmap directionality emoticons fullscreen help image editimage insertdatetime media pagebreak preview quickbars save searchreplace table visualblocks wordcount casechange',
			toolbar: 'fullscreen | undo redo | lists | links | fontfamily fontsize alignment | forecolor backcolor | image media | pagebreak | preview | save',
			toolbar_groups: {
				lists: {
					icon: 'unordered-list',
					tooltip: 'Listas',
					items: 'bullist numlist'
				},
				links: {
					icon: 'link',
					tooltip: 'Links',
					items: 'anchor link openlink unlink'
				},
				alignment: {
					icon: 'align-left',
					tooltip: 'Alinhamento e recuo',
					items: 'alignleft aligncenter alignright alignjustify alignnone | indent outdent'
				},
				symbols: {
					icon: 'emoji',
					tooltip: 'Símbolos e emoticons',
					items: 'charmap emoticons'
				}
			},
			fullscreen_native: true,
			font_size_formats: '4pt 6pt 8pt 10pt 12pt 14pt 16pt 18pt 24pt 36pt 48pt',
			codesample_global_prismjs: true,
			link_context_toolbar: true,
			autosave_interval: '20s',
			autosave_retention: '30m',
			emoticons_images_url: 'http://my.server/images/emoticons/',
			image_advtab: true,
			image_title: true,
			insertdatetime_dateformat: '%d-%m-%Y',
			quickbars_image_toolbar: 'alignleft aligncenter alignright | rotateleft rotateright | imageoptions',
			table_toolbar: 'tableprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol',
			table_background_color_map: [
				{ title: 'Vermelho', value: 'FF0000' },
				{ title: 'Branco', value: 'FFFFFF' },
				{ title: 'Amarelo', value: 'F1C40F' },
				{ title: 'Verde', value: '00FF00' },
			],
		});
	</script>
</head>
	
<body>
	<form method="post" action="receive.php">
		<textarea id="mytextarea" name="mytextarea">Hello, World!</textarea>
	</form>
</body>
</html>