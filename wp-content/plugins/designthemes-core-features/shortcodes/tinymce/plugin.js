(function() {
	tinymce.create("tinymce.plugins.DTCoreShortcodePlugin", {

		init : function(d, e) {

			d.addCommand("scnOpenDialog", function(a, c) {
				scnSelectedShortcodeType = c.identifier;

				jQuery.get(e + "/dialog.php", function(b) {
					jQuery("#scn-dialog").remove();
					jQuery("body").append(b);
					jQuery("#scn-dialog").hide();
					var f = jQuery(window).width();
					b = jQuery(window).height();
					f = 720 < f ? 720 : f;
					f -= 80;
					b -= 84;
					tb_show("Insert Shortcode", "#TB_inline?width=" + f
							+ "&height=" + b + "&inlineId=scn-dialog");
					jQuery("#scn-options h3:first").text(
							"Customize the " + c.title + " Shortcode");
				});

			});

		},

		getInfo : function() {
			return {
				longname : 'DesignThemes Core Shortcodes',
				author : 'DesignThemes',
				authorurl : 'http://themeforest.net/user/designthemes',
				infourl : '',
				version : "1.0"
			};

		},

		createControl : function(btn, e) {

			var dummy_conent = "Lorem ipsum dolor sit amet, consectetur"
					+ " adipiscing elit. Morbi hendrerit elit turpis,"
					+ " a porttitor tellus sollicitudin at."
					+ " Class aptent taciti sociosqu ad litora "
					+ " torquent per conubia nostra,"
					+ " per inceptos himenaeos.",

			dummy_tabs = '<br>[dt_sc_tab title="What is Lorem Ipsum?"]'
					+ "<br>" + dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
					+ '[dt_sc_tab title="Where does it come from?"]' + "<br>"
					+ dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
					+ '[dt_sc_tab title="Why do we use it?"]' + "<br>"
					+ dummy_conent + "<br>" + '[/dt_sc_tab]<br>';

			if ("designthemes_sc_button" === btn) {

				var a = this;
				var btn = e.createSplitButton("designthemes_sc_buttons",
						{
							title : "Insert Shortcode",
							image : DTCorePlugin.tinymce_folder
									+ "/images/dt-icon.png",
							icons : false
						});

				btn.onRenderMenu
						.add(function(c, b) {

							/* Accordion */
							c = b.addMenu({
								title : "Accordion"
							});
							a.addImmediate(c, "Default",
								"[dt_sc_accordion_group]"
								+'<br>[dt_sc_toggle title="What is Lorem Ipsum?"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Where does it come from?"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Why do we use it?"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+"<br>[/dt_sc_accordion_group]");
							 									
							a.addImmediate(c, "Framed",
								"[dt_sc_accordion_group]"
								+'<br>[dt_sc_toggle_framed title="What is Lorem Ipsum?"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Where does it come from?"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Why do we use it?"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+"<br>[/dt_sc_accordion_group]");
							
							a.addWithDialog(b, "Box", "box");
							a.addWithDialog(b, "Button", "button");
							a.addWithDialog(b, "Column Layout", "column");

							/* Dividers Shortcodes */
							c = b.addMenu({
								title : "Dividers"
							});

							a.addImmediate(c,"Clear",
									"<br>[dt_sc_clear]<br>");
							
							a.addImmediate(c, "Horizontal Rule",
									"<br>[dt_sc_hr] <br>");
							
							a.addImmediate(c, "Horizontal Rule Medium",
									"<br>[dt_sc_hr_medium] <br>");
							
							a.addImmediate(c, "Horizontal Rule Large",
									"<br>[dt_sc_hr_large] <br>");
							
							a.addImmediate(c, "Horizontal Rule with top link",
									"<br>[dt_sc_hr top] <br>");
							
							a.addImmediate(c, "Whitespace",
									"<br>[dt_sc_hr_invisible] <br>");
							
							a.addImmediate(c, "Whitespace Medium",
									"<br>[dt_sc_hr_invisible_medium] <br>");
							
							a.addImmediate(c, "Whitespace Large",
									"<br>[dt_sc_hr_invisible_large] <br>");

							/* Dropcaps */
							//a.addWithDialog(b, "Dropcap", "dropcap");

							/* Highlighter */
							//a.addWithDialog(b, "Highlighter", "highlighter");

							/* List Shortcodes */
							c = b.addMenu({
								title : "Lists"
							});
							a.addWithDialog(c, "Ordered List", "orderedlist");
							a.addWithDialog(c, "Unordered List","unorderedlist");

							/*Pricing Table*/
							a.addWithDialog(b, "Pricing Table", "pricingtable");
							
							/* Progressbar*/
							c = b.addMenu({ title:"Progress Bar"});
							a.addImmediate(c, "Standard","<br>[dt_sc_progressbar value='85' type='standard' color='#9c59b6' textcolor=''] consectetur[/dt_sc_progressbar]<br>");
							a.addImmediate(c, "Stripe","<br>[dt_sc_progressbar value='75' type='progress-striped' color='' textcolor=''] consectetur[/dt_sc_progressbar]<br>");
							a.addImmediate(c, "Active","<br>[dt_sc_progressbar value='45' type='progress-striped-active'] consectetur[/dt_sc_progressbar]<br>");

							
							/* Quotes */
							c = b.addMenu({
								title : "Quotes"
							});
							a.addWithDialog(c, "Pullquote", "pullquote");
							a.addWithDialog(c, "Blockquote", "blockquote");


							/* Tab */
							c = b.addMenu({
								title : "Tabs"
							});
							a.addImmediate(c, "Horizontal",
									"[dt_sc_tabs_horizontal]" + dummy_tabs
											+ "[/dt_sc_tabs_horizontal]");

							var s = "[dt_sc_tabs_horizontal_frame_less]"
									+ dummy_tabs
									+ "[/dt_sc_tabs_horizontal_frame_less]";
							a.addImmediate(c, "Frameless", s);

							a.addImmediate(c, "Vertical",
									"[dt_sc_tabs_vertical]" + dummy_tabs
											+ "[/dt_sc_tabs_vertical]");

							/* Toggle */
							c = b.addMenu({
								title : "Toggle"
							});

							a.addImmediate(c, "Default",
								'[dt_sc_toggle title="What is Lorem Ipsum?"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Where does it come from?"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Why do we use it?"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]");
							
							a.addImmediate(c, "Framed",
								'[dt_sc_toggle_framed title="What is Lorem Ipsum?"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Where does it come from?"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Why do we use it?"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]");
									
							/* Tooltip Shortcodes */
							a.addWithDialog(b, "Tooltip", "tooltip");							


							c = b.addMenu({
								title : "Others"
							});
							a.addImmediate(c, "Team",'<br>[dt_sc_team name="" role="" image="" twitter="" facebook="" google="" linkedin="" /]<br>');
							a.addImmediate(c, "Testimonial",'<br>[dt_sc_testimonial name="Lorem" role="Chairman" image=""]'+dummy_conent+'[/dt_sc_testimonial]<br>');

						});
				

				return btn;

			}

		},

		addImmediate : function(d, e, a) {
			d.add({
				title : e,
				onclick : function() {
					tinyMCE.activeEditor.execCommand("mceInsertContent", false,
							a);
				}
			});
		},

		addWithDialog : function(d, e, a) {
			d.add({
				title : e,
				onclick : function() {
					tinyMCE.activeEditor.execCommand("scnOpenDialog", false, {
						title : e,
						identifier : a
					});
				}
			});

		}

	});

	// add DTCoreShortcodePlugin plugin
	tinymce.PluginManager.add("DTCoreShortcodePlugin",
			tinymce.plugins.DTCoreShortcodePlugin);
})();