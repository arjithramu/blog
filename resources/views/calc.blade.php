<html>
    <head>
    <title></title>
    </head>
        <body>
            <form method="post" action="/calc">

                Enter number 1 : <Input type="text" name="number1"><br/>
                Enter number 2 : <Input type="text" name="number2"><br/>
                <Input type="submit" value="Add">
                @if(isset($sum))
                Sum : <input type ="text" name="sum" value="{{$sum}}"><br/>
                @endif
                {{csrf_field()}}

            </form>
        </body>

    </html>