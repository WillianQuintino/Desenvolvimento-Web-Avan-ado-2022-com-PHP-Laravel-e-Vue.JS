<h3>Fornecedor</h3>

@php
    /*
    if(empty($variavel)) {} //retornar true se a variável estiver vazia
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var
    */
@endphp

@isset($fornecedores)
    @forelse ($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedores[1]['telefone'] ?? '' }}
        <hr>
    @empty
        Não existe fornecedores cadastrados!!!
    @endforelse
@endisset