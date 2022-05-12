<html>
    <head>
        <title> INDEX TESTE 2</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>

        <style>
            .linha {
                font-weight: bold;
                color: green;
                padding-left: 10px;
                line-height: 50px;
            }
        </style>
    </head>

    <body>
    <?php
        for ($i = 0; $i < 10; $i ++){
            print("<span class=\"linha\")> Linha número" . $i . "</span><br />");
        }
    ?>
    </body>

    <script type="text/javascript"> 
        $(document).ready(function(){
            alert("Wooho!");
        });
    </script>    
    <!-- após rodar todas as instruções, essa função java irá abrir um alerta escrito Wooho -->
    
</html>