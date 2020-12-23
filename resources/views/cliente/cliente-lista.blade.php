<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="title-cliente" style="background-color: #d8d8d8; padding: 10px;">
                   <span>Clientes</span>
                    <a href="{{url('clientes/new')}}" style=" color: rgb(72, 72, 252)">Novo Cliente</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <span style="font-size: 20px">Lista Clientes</span>

                    @if($clientes)
                    <div class="table-responsive">

                    <table id="tabela-clientes" class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Cpf</th>
                                <th scope="col">Email</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Excluir</th>
                            </tr>
                        </thead>
                        <tbody class="col-12">
                        @foreach($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->name }}</td>
                                <td>{{ $cliente->cidade }}</td>
                                <td>{{ $cliente->uf }}</td>
                                <td>{{ $cliente->docNumber }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td class="align-middle " at-title="Editar">
                                    <form method="post" action="/clientes/delete/{{$cliente->id}}">
                                        {{method_field('POST')}}
                                        @csrf
                                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-success btn-smn show-alert">Editar</button>
                                    </form>
                                </td>
                                <td class="align-middle " at-title="Excluir">
                                        <form method="post" action="/clientes/delete/{{$cliente->id}}">
                                            {{method_field('POST')}}
                                            @csrf
                                            <button type="submit" onclick="return confirm('Deseja excluir esse cliente?')" class="btn btn-danger btn-smn show-alert">Excluir</button>
                                        </form>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                    @else
                        <p>Não foi encontrado clientes.</p>
                    @endif

                </div>
            </div>
        </div>

    </div>



</x-app-layout>
