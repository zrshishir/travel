<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
</head>
<body>
    
    <div class="container">
        @if($emailTemplate != '')
            <div>
                {!! $emailTemplate !!}
            </div>
        @endif
    </div>

    <h5>From: admin@xcoder.io</h5>
</body>
</html>
