<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yapilacaklar Listesi</title>
    {{--font awesome--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">

    {{--mpd--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>

</head>

<body class="bg-success">
    <div class="col-12 m"></div>
    asdasd



<div class="container w-25 mt-5">
    <div class="card shadow -sm">
        <div class="card-body">
            <h3><b>Yapılacaklar Listesi</b></h3>
            <form action="{{ route('store') }}" method="POST" autocomplete="off">
                @csrf
                <div class="input-group">
                    <input type="text" name="metin" class="form-control" placeholder="Yapılması istenen hedef ?">
                    <button type="submit" class="btn btn-dark btn-sm px-4" ><i class="fas fa-plus"></i> </button>
                </div>
            </form>
            @if (count($listes))

                <ul class="list-group list-group-flush mt-5">
                    @foreach($listes as $liste)
                    <li class="list-group-item list-group-item-info">
                        <form action="{{ route('destroy', $liste->id) }}" method="POST">
                            <b> {{ $liste->metin }} </b>
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-lg float-end" ><i class="fas fa-trash" ></i></button>
                        </form>
                    </li>
                    @endforeach
                </ul>
            @endif


        </div>
    </div>
</div>

</body>
</html>
