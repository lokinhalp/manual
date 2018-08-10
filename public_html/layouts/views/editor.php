    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Manual</a>
        </li>
        <li class="breadcrumb-item active">Editor</li>
    </ol>
    <form>
        <textarea name="editor" id="editor" rows="10" cols="80">
             This is my textarea to be replaced with CKEditor.
        </textarea>
        <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor', {
                    //height: 500,
                    //readOnly: true, // somente leitura, habilitar quando o usuário não puder editar
                    extraPlugins: 'autogrow',
                    skin : 'office2013',
                    language : "pt-br",
                    toolbarGroups: [
                        { "name": "basicstyles", groups: [ "basicstyles", "cleanup" ] },
                        { "name": "paragraph", groups: [ "list", "indent", "blocks", "align", "bidi", "paragraph" ] },
                        { "name": "editing", groups: [ "find", "selection", "spellchecker", "editing" ] },
                        { "name": "clipboard", groups: [ "clipboard", "undo" ] },
                        { "name": "styles", groups: [ "styles" ] },
                        '/',
                        { "name": "forms", groups: [ "forms" ] },
                        { "name": "links", groups: [ "links" ] },
                        { "name": "insert", groups: [ "insert" ] },
                        { "name": "colors", groups: [ "colors" ] },
                        { "name": "tools", groups: [ "tools" ] },
                        { "name": "document", groups: [ "mode", "document", "doctools" ] },
                        { "name": "others", groups: [ "others" ] },
                        { "name": "about", groups: [ "about" ] }
                    ],

                    removeButtons : "About,ShowBlocks,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Anchor,Flash,Smiley,Iframe",
                    customConfig: '/custom/ckeditor_config.js',
                    
                });
        </script>
    </form>

