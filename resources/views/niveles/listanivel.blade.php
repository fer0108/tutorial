<div class="container-fluid">
    <div class="col-md-4 mx-auto">
        <h1 class="text-center fuente2">LISTA</h1>
        <table class="table table-sm table-hover">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>Nivel</th>
                    <th>descripcion</th>
                    <th>Curso</th>
                </tr>
            </thead>
            <tbody class="table-light">
                @foreach ($rs as $item)
                <tr class="text-center">
                    <td>{{$item->nivel}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>{{$item->curso->curso}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="/cursos/editar/{{$item->id}}" class="btn btn-success btn-sm"><i class="fas fa-user-edit"></i></a>
                            <form action="{{url('cursos', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
                                @csrf()
                                @method('DELETE')
                                <div class="pl-3">
                                    <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/#" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
        <a href="/cursos/crear" class="btn btn-success"><i class="fas fa-user-plus"></i></a>
    </div>
</div>
