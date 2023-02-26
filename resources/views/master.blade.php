<html>
    <head>
        @yield("meta")
    </head>
    <body>

        @include("header")
        <article>
                @yield("content")
        </article>
    
        @include("footer")
    </body>
</html>