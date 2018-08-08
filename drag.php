<!doctype html>
<html>
    <head>
        <title>jQuery UI Draggable - Snap to element or grid</title>
    
        <script src="http://code.interactjs.io/v1.3.4/interact.min.js"></script>
        <script src="js/interact.js"></script> 

        <style>
            .resize-drag {
            background-color: #FFF000;
            color: white;
            font-size: 20px;
            font-family: sans-serif;
            border-radius: 8px;
            padding: 20px;
            margin: 30px 20px;

            width: 120px;

            /* This makes things *much* easier */
            box-sizing: border-box;
            }

            .resize-container {
            /* display: inline-block;  */
            width: 100%;
            height: 240px;
            background-color: #000000;
            }

        </style>

        <script>
            interact('.resize-drag')
            .draggable({
                 onmove: window.dragMoveListener,
                 restrict: {
                    restriction: 'parent',
                    elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
                    }
            })
            .resizable({
                // resize from all edges and corners
                edges: { left: true, right: true, bottom: true, top: true },

                // keep the edges inside the parent
                 restrictEdges: {
                    outer: 'parent',
                    endOnly: true
                    },

                 //minimum size
                    //restrictSize: {
                    //min: { width: 100, height: 50 }
                    //},

                 inertia: true,
            })
            .on('resizemove', function (event) {
                var target = event.target,
                    x = (parseFloat(target.getAttribute('data-x')) || 0),
                    y = (parseFloat(target.getAttribute('data-y')) || 0);

                // update the element's style
                target.style.width  = event.rect.width + 'px';
                target.style.height = event.rect.height + 'px';

                // translate when resizing from top or left edges
                x += event.deltaRect.left;
                y += event.deltaRect.top;

                target.style.webkitTransform = target.style.transform =
                    'translate(' + x + 'px,' + y + 'px)';

                target.setAttribute('data-x', x);
                target.setAttribute('data-y', y);
                 target.textContent = Math.round(event.rect.width) + '\u00D7' + Math.round(event.rect.height);
                //target.textContent = event.rect.width + '×' + event.rect.height;
            });

            function dragMoveListener (event) {
                var target = event.target,
                    // keep the dragged position in the data-x/data-y attributes
                    x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
                    y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

                // translate the element
                target.style.webkitTransform =
                target.style.transform =
                'translate(' + x + 'px, ' + y + 'px)';

                // update the posiion attributes
                target.setAttribute('data-x', x);
                target.setAttribute('data-y', y);
            }
        </script>
    </head>

    <body>
        <div class="resize-container"> 
            <div class="resize-drag">
                Resize from any edge or corner
            </div>
        </div>
    
    </body>
</html>