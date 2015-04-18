scnShortcodeMeta = {
	attributes : [
			{
				label : "Style",
				id : "type",
				help : "Choose which type of quote you wish to use.",
				controlType : "select-control",
				selectValues : [ 'pullquote1', 'pullquote2', 'pullquote3',
						'pullquote4', 'pullquote5', 'pullquote6' ],
				defaultValue : 'dropcap-default',
				defaultText : 'Default'
			},
			{
				label : "Icon",
				id : 'icon',
				help : 'choose yes if you wish to have icons displayed with your quote.',
				controlType : "select-control",
				selectValues : [ 'yes', 'no' ],
				defaultValue : 'yes',
				defaultText : 'yes'
			},
			{
				label : "Align",
				id : 'align',
				help : 'Set the alignment for your quote here.Your quote will float along the center, left or right hand sides depending on your choice.',
				controlType : "select-control",
				selectValues : [ 'left', 'right', 'center' ],
				defaultValue : 'left',
				defaultText : 'left'
			},

			{
				label : "Text Color",
				id : "textcolor",
				help : 'You can change the color of the text that appears on your highlighter.',
				controlType : "color-control"
			},
			{
				label : "Cite Name",
				id : "cite",
				help : 'This is the name of the author. It will display at the end of the quote.',
				controlType : "text-control"
			} ],
	defaultContent : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac luctus ligula. Phasellus a ligula blandit",
	shortcode : "dt_sc_pullquote"
};