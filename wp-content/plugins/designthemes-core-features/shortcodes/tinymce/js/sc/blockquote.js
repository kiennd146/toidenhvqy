scnShortcodeMeta = {
	attributes : [
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
	shortcode : "dt_sc_blockquote"
};