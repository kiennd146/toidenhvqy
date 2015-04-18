scnShortcodeMeta = {
	attributes : [
			{
				label : "Style",
				id : "type",
				help : "Choose which type of highlight you wish to use.",
				controlType : "select-control",
				selectValues : [ '', 'underlined', 'italic',
						'underlined-italic' ],
				defaultValue : '',
				defaultText : 'Default'
			},
			{
				label : 'Variation',
				id : 'variation',
				help : 'Choose one of our predefined color skins to use with your list.',
				controlType : "select-control",
				selectValues : [ '', 'blue', 'chocolate', 'coral', 'cyan',
						'eggplant', 'electricblue', 'ferngreen', 'gold',
						'green', 'grey', 'khaki', 'ocean', 'orange',
						'palebrown', 'pink', 'purple', 'raspberry', 'red',
						'skyblue', 'slateblue' ],
				defaultValue : '',
				defaultText : 'Select'
			},
			{
				label : "Background Color",
				id : "bgcolor",
				help : 'Or you can also choose your own color to use as the background for your highlighter',
				controlType : "color-control"
			},
			{
				label : "Text Color",
				id : "textcolor",
				help : 'You can change the color of the text that appears on your highlighter.',
				controlType : "color-control"
			} ],
	defaultContent : "fermentum sapien sed",
	shortcode : "dt_sc_highlighter"
};