// http://www.cdolivet.com/editarea/editarea/docs/

editAreaLoader.init({
	id : "inputTextToSave"
	,syntax: "php"	
	,start_highlight: true	
    ,display: "later"
});

/**************
-is_multi_files: determine if the editor load the content of the textarea (false) 
or if it wait for an openFile() call for allowing file editing.
Type: Boolean. Default: false
-min_width: define the minimum width of the editor
Type: Integer. Default: 400 
-min_height: define the minimum height of the editor
Type: Integer. Default: 100
-allow_resize: define one with axis the editor can be resized by the user.
Type: String ("no" (no resize allowed), "both" (x and y axis), "x", "y"). Default: "both"
-allow_toggle: define if a toggle button must be added under the editor in order to allow 
to toggle between the editor and the orginal textarea.
Type: Boolean. Default: true 
-plugins: a comma separated list of plugins to load.
Type: String. Default: ""
-browsers: define if the editor must be loaded only when the user navigotr is known to be a working one, or if it will be loaded for all navigators.
Type: String ("all" or "known")
Default: "known"
-display: specify when the textarea will be converted into an editor. 
If set to "later", the toogle button will be displayed to allow later conversion.
Type: String ("onload" or "later"). Default: "onload" 
-toolbar: define the toolbar that will be displayed, each element being separated by a ",".
Type: String (combination of: "|", "*", "search", "go_to_line", "undo", "redo", 
"change_smooth_selection", "reset_highlight", "highlight", "word_wrap", "help", "save", "load", "new_document", "syntax_selection")
"|" or "separator" make appears a separator in the toolbar.
"*" or "return" make appears a line-break in the toolbar
Default: "search, go_to_line, fullscreen, |, undo, redo, |, select_font,|, 
change_smooth_selection, highlight, reset_highlight, word_wrap, |, help"
-begin_toolbar: toolbar button list to add before the toolbar defined by the "toolbar" option.
Type: String (cf. "toolbar" option). Default: "" 
-end_toolbar: toolbar button list to add after the toolbar defined by the "toolbar" option.
Type: String (cf. "toolbar" option). Default: ""
-font_size: define the font-size used to display the text in the editor.
Type: Integer. Default: 10
-font_family: define the font-familly used to display the text in the editor. (eg: "monospace" or "verdana,monospace"). Opera will always use "monospace".
Type: String. Default: "monospace" 

*************/
