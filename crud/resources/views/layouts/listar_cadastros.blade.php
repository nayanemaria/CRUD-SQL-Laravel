@foreach ($cadastros as $cadastro)
<tr>
    <th scope="row">{{$cadastro->id}}</th>
    <td>{{$cadastro->nome}}</td>
    <td>{{$cadastro->email}}</td>
    <td>{{$cadastro->cpf}}</td>
    <td>{{$cadastro->telefone}}</td>
    <td class="d-flex justify-content-center">
        <!-- EDITAR -->
        <a class="btn update" data-bs-toggle="modal" data-bs-target="#UpdateModal" onclick="setDataModalEdit({{ $cadastro->id }});"><i class="fa fa-edit"></i></a>
        <!-- DELETAR -->
        <a class="btn delete" data-bs-toggle="modal" data-bs-target="#DeleteModal" onclick="setDataModalDelete({{ $cadastro->id }});"><i class="fa fa-trash-alt"></i></a>
    </td>
</tr>
@endforeach

@include('layouts/editar_cadastros')
@include('layouts/deletar_cadastros')

