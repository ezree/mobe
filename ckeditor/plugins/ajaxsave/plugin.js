CKEDITOR.plugins.add('ajaxsave',
	{
		init: function(editor)
		{
			var pluginName = 'ajaxsave';
			editor.addCommand( pluginName,
			{
				exec : function( editor )
				{
					$.post("result.php", {
						data : editor.getSnapshot()
					});
				},
				canUndo : true
			});
			editor.ui.addButton( 'Ajaxsave',
			{
				label: 'Save & Publish',
				command: pluginName,
				className : 'cke_button_save'
			});
		}
	});