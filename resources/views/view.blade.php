<html>
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

    <script>
        $(function(){
            setInterval(function() {
                var table = '';
                $.getJSON("./ajax/209503e0c0e803979fd1e75ec4051f98", function(data){
                    $.each(data, function(index, value) {
                        table += '<tr>';
                        table += '<td>'+ value.name +'</td>';
                        table += '<td>'+ value.cordX +'</td>';
                        table += '<td>'+ value.cordY +'</td>';
                        table += '<td>'+ value.angle +'</td>';
                        table += '<td>'+ value.radar +'</td>';
                        table += '<td>'+ value.score +'</td>';
                        table += '<td>'+ value.speed +'</td>';
                        table += '</tr>';
                    });
                    $('.tabela').html(table);
                });
            }, 500);
        });
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel teal">
            <table class="responsive-table centered striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Cord X</th>
                    <th>Cord Y</th>
                    <th>Angle</th>
                    <th>Radar</th>
                    <th>Score</th>
                    <th>Speed</th>
                </tr>
                </thead>

                <tbody class="tabela">

                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
