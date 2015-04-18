scnShortcodeMeta = {
	attributes : [
			{
				label : "Style",
				id : "type",
				help : "Select which type of tooltip you would like to use.",
				controlType : "select-control",
				selectValues : [ 'top', 'right', 'bottom', 'left' ],
				defaultValue : 'top',
				defaultText : 'Default'
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
			},
			{
				label : "Tooltip Text",
				id : "text",
				help : 'Type out the tooltip content ,The content will display as tooltip.',
				controlType : "text-control"
			},
			{
				label : "Link",
				id : "href",
				help : 'Paste a URL here to use as a link for your button.',
				controlType : "text-control"
			} ],
	defaultContent : "lorem ipsum",
	shortcode : "dt_sc_tooltip"
};